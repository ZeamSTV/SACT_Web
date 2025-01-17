<?php
/*
* SiteSEO
* https://siteseo.io/
* (c) SiteSEO Team <support@siteseo.io>
*/

/*
Copyright 2016 - 2024 - Benjamin Denis  (email : contact@seopress.org)
This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as
published by the Free Software Foundation.
This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

namespace SiteSEO\Compose;

use SiteSEO\Helpers\TagCompose;
use SiteSEO\Models\GetTagValue;

trait UseTags {
	protected $tagsAvailable = [];

	/**
	 * @since 4.4.0
	 *
	 * @param string $key
	 *
	 * @return GetTagValue
	 */
	public function getTagClass($key) {
		$tagsAvailable = $this->getTagsAvailable();

		$element = null;
		// Check key <=> tag
		if (array_key_exists($key, $tagsAvailable)) {
			$element = $tagsAvailable[$key];
		}

		// Check alias <=> tag
		if (null === $element) {
			foreach ($tagsAvailable as $tag) {
				if (null !== $element) {
					break;
				}

				if ( ! array_key_exists('alias', $tag) || empty($tag['alias'])) {
					continue;
				}

				if (in_array($key, $tag['alias'], true)) {
					$element = $tag;
				}
			}
		}

		// Check custom element
		if (null === $element) {
			foreach ($tagsAvailable as $tag) {
				if (null !== $element) {
					break;
				}

				if ( ! array_key_exists('custom', $tag) || null === $tag['custom']) {
					continue;
				}

				if (0 === strpos($key, $tag['custom'])) {
					$element = $tag;
				}
			}
		}

		if ( ! $element) {
			return null;
		}

		if (is_string($element['class'])) {
			$element['class'] = new $element['class']();
		}

		if ($element['class'] instanceof GetTagValue) {
			return $element['class'];
		}

		return null;
	}

	/**
	 * @since 4.4.0
	 *
	 * @param string $directory
	 * @param array  $tags
	 * @param array  $namespacesOption
	 *
	 * @return array
	 */
	public function buildTags($directory, $namespacesOption, $tags = []) {
		$files  = array_diff(scandir($directory), ['..', '.']);

		foreach ($files as $filename) {
			$class	 = str_replace('.php', '', $filename);
			$classFile = sprintf($namespacesOption['root'], $namespacesOption['subNamespace'], $class);

			$fullPath  = sprintf('%s/%s', $directory, $filename);

			if (is_dir($fullPath)) {
				$tags  = $this->buildTags($fullPath, [
					'root'		 => $namespacesOption['root'],
					'subNamespace' => $namespacesOption['subNamespace'] . $filename . '\\',
				], $tags);
			} else {
				if (defined($classFile . '::NAME')) {
					$name = $classFile::NAME;
				} else {
					$name = strtolower($class);
				}

				$description ='';
				if (method_exists($classFile, 'getDescription')) {
					$description = $classFile::getDescription();
				}

				$tags[$name] = [
					'class'		=> $classFile,
					'name'		 => $name,
					'schema'	   => 0 === strpos($classFile, "\SiteSEO\Tags\Schema\\") ? true : false,
					'alias'		=> defined($classFile . '::ALIAS') ? $classFile::ALIAS : [],
					'custom'	   => defined($classFile . '::CUSTOM_FORMAT') ? $classFile::CUSTOM_FORMAT : null,
					'input'		=> TagCompose::getValueWithTag($name),
					'description'  => $description,
				];
			}
		}

		return $tags;
	}

	/**
	 * @since  4.4.0
	 *
	 * @return array
	 */
	public function getTagsAvailable($options = []) {

		$hash = md5(serialize($options));
		if(isset($this->tagsAvailable[$hash])){
			return $this->tagsAvailable[$hash];
		}


		$tags = $this->buildTags(SITESEO_CLASSES.'/Tags', ['root' => '\\SiteSEO\\Tags\\%s%s', 'subNamespace' => '']);

		if (defined('SITESEO_PRO_PLUGIN_DIR_PATH') && file_exists(SITESEO_PRO_CLASSES.'/Tags') && is_dir(SITESEO_PRO_CLASSES.'/Tags')) {
			$tags = $this->buildTags(SITESEO_PRO_CLASSES.'/Tags', ['root' => '\\SiteSEOPro\\Tags\\%s%s', 'subNamespace' => ''], $tags);
		}

		if(isset($options['without_classes'])){
			$withoutClasses= isset($options['without_classes']);
			$withoutClassesPos= isset($options['without_classes_pos']);
			foreach($tags as $key =>  $tag){
				if($withoutClasses && \in_array($tag['class'] ,$options['without_classes'])){
					unset($tags[$key]);
				}

				if($withoutClassesPos){
					foreach($options['without_classes_pos'] as $classesPos){
						if(strpos($tag['class'], $classesPos) !== false){
							unset($tags[$key]);
						}
					}
				}

			}
		}


		$this->tagsAvailable[$hash] = apply_filters('siteseo_tags_available', $tags);

		return $this->tagsAvailable[$hash];
	}

	/**
	 * @since 4.4.0
	 *
	 * @param string $name
	 * @param any	$params
	 */
	public function __call($name, $params) {
		$tagClass = $this->getTagClass($name);

		if (null === $tagClass) {
			return '';
		}

		return $tagClass->getValue($params);
	}
}
