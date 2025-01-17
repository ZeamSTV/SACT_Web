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

namespace SiteSEO\Actions\Api;

if ( ! defined('ABSPATH')) {
	exit;
}

use SiteSEO\Core\Hooks\ExecuteHooks;

class TitleDescriptionMeta implements ExecuteHooks {
	public function hooks() {
		add_action('rest_api_init', [$this, 'register']);
	}

	/**
	 * @since 4.7.0
	 *
	 * @return void
	 */
	public function register() {
		register_rest_route('siteseo/v1', '/posts/(?P<id>\d+)/title-description-metas', [
			'methods'			 => 'GET',
			'callback'			=> [$this, 'processGet'],
			'args'				=> [
				'id' => [
					'validate_callback' => function ($param, $request, $key) {
						return is_numeric($param);
					},
				],
			],
			'permission_callback' => '__return_true',
		]);

		register_rest_route('siteseo/v1', '/posts/(?P<id>\d+)/title-description-metas', [
			'methods'			 => 'PUT',
			'callback'			=> [$this, 'processPut'],
			'args'				=> [
				'id' => [
					'validate_callback' => function ($param, $request, $key) {
						return is_numeric($param);
					},
				],
			],
			'permission_callback' => function ($request) {
				$nonce = $request->get_header('x-wp-nonce');
				if ( ! wp_verify_nonce($nonce, 'wp_rest')) {
					return false;
				}

				if(!current_user_can('edit_posts')){
					return false;
				}

				return true;
			},
		]);
	}

	/**
	 * @since 4.7.0
	 */
	public function processGet(\WP_REST_Request $request) {
		$id	= $request->get_param('id');

		$title	   = get_post_meta($id, '_siteseo_titles_title', true);
		$description = get_post_meta($id, '_siteseo_titles_desc', true);

		return new \WP_REST_Response([
			'title'		   => html_entity_decode($title, ENT_QUOTES | ENT_XML1, 'UTF-8'),
			'description'	 => html_entity_decode($description, ENT_QUOTES | ENT_XML1, 'UTF-8'),
		]);
	}

	/**
	 * @since 4.7.0
	 */
	public function processPut(\WP_REST_Request $request) {
		$id	 = $request->get_param('id');
		$params = $request->get_params();

		$dataKeysSave = [
			'title'	   => '_siteseo_titles_title',
			'description' => '_siteseo_titles_desc',
		];

		foreach ($dataKeysSave as $key => $value) {
			if ( ! isset($params[$key])) {
				continue;
			}

			if (empty($params[$key])) {
				delete_post_meta($id, $value);
				continue;
			}
			update_post_meta($id, $value, esc_html($params[$key]));
		}

		return new \WP_REST_Response([
			'code' => 'success',
		]);
	}
}
