

// Render for audio
function pagelayer_render_pl_audio(el){
	
	el.tmp['src-url'] = el.tmp['src-url'] || el.atts['src'];
	
	return;
	
	/*// Do we have a URL ?
	if(!pagelayer_empty(el.atts['a_url'])){
				
		//Get the file extension
		var extension = el.atts['a_url'].substr(el.atts['a_url'].lastIndexOf('.') + 1);
	
		//Create source tag according to audio file
		switch(extension){
			
			default:
			case 'mp3':
				el.atts['a_type'] = 'audio/mpeg';
				break;
			
			case 'ogg':
				el.atts['a_type']= 'audio/ogg';
				break;
			
			case 'wav':
				el.atts['a_type'] = 'audio/wav';
				break;
			
		}
		
	}
	
	// Add the attr
	if(!pagelayer_empty(el.atts['a_url']) && !pagelayer_empty(el.atts['a_type'])){
		el.CSS.attr.push({'sel': '{{element}} source', 'val': 'src="{{a_url}}"'});
		el.CSS.attr.push({'sel': '{{element}} source', 'val': 'type="{{a_type}}"'});
	} */
	
};

function pagelayer_render_end_pl_audio(el){
	var jEle = el.$;
	pagelayer_audio(jEle);
}

// render the video slider
function pagelayer_render_end_pl_video_slider(el){	
	pagelayer_owl_destroy(el.$, '.pagelayer-video-slider-holder');		
	pagelayer_pl_video_slider(el.$);
};

// End Render for splash
function pagelayer_render_end_pl_splash(el){
	
	var jEle = el.$;
	var container = jEle.find('.pagelayer-splash-container');
	
	container.fadeIn();
	
	el.$.find('.pagelayer-splash-close, .pagelayer-splash-bg-close').on('click', function(e){
		container.fadeOut();
	});
	
	if(el.atts['style'] == 'custom'){
		container.css({'background': el.atts['shadow_color'], 'color': el.atts['content_color']});
	}else{
		container.css({'background': '', 'color': ''});
	}
	
	container.removeClass().addClass('pagelayer-splash-container pagelayer-splash-'+el.atts['style']);
}

// Render the Posts
function pagelayer_render_end_pl_posts(el){
	var post = {};
	post['pagelayer_nonce'] = pagelayer_ajax_nonce;
	
	// Page count
	if(el.atts['count']) post['posts_per_page'] = el.atts['count'];
	
	if(el.atts['show_thumb']) post['show_thumb'] = el.atts['show_thumb'];
	if(el.atts['thumb_size']) post['thumb_size'] = el.atts['thumb_size'];
	if(el.atts['show_content']) post['show_content'] = el.atts['show_content'];
	if(el.atts['show_title']) post['show_title'] = el.atts['show_title'];
	if(el.atts['more']) post['more'] = el.atts['more'];
	if(el.atts['btn_type']) post['btn_type'] = el.atts['btn_type'];
	if(el.atts['size']) post['size'] = el.atts['size'];
	if(el.atts['icon_position']) post['icon_position'] = el.atts['icon_position'];
	if(el.atts['icon']) post['icon'] = el.atts['icon'];
	if(el.atts['show_more']) post['show_more'] = el.atts['show_more'];
	if(el.atts['meta_sep']) post['meta_sep'] = el.atts['meta_sep'];
	if(el.atts['exc_length']) post['exc_length'] = el.atts['exc_length'];
	if(el.atts['post_type']) post['post_type'] = el.atts['post_type'];
	if(el.atts['posts_order']) post['order'] = el.atts['posts_order'];
	if(el.atts['inc_term']) post['term'] = el.atts['inc_term'];
	if(el.atts['inc_author']) post['author_name'] = el.atts['inc_author'];
	if(el.atts['exc_term']) post['exc_term'] = el.atts['exc_term'];
	if(el.atts['exc_author']) post['exc_author'] = el.atts['exc_author'];
	if(el.atts['offset']) post['offset'] = el.atts['offset'];
	if(el.atts['ignore_sticky']) post['ignore_sticky'] = el.atts['ignore_sticky'];
	if(el.atts['orderby']) post['orderby'] = el.atts['orderby'];
	if(el.atts['by_period']) post['by_period'] = el.atts['by_period'];
	if(el.atts['before_date']) post['before_date'] = el.atts['before_date'];
	if(el.atts['after_date']) post['after_date'] = el.atts['after_date'];
	if(el.atts['thumb_img_type']) post['thumb_img_type'] = el.atts['thumb_img_type'];
  
	var img_size = el.tmp['def_thumb_img-'+el.atts['thumb_size']+'-url'];
	if(el.atts['def_thumb_img']) post['def_thumb_img'] = pagelayer_empty(img_size) ? el.tmp['def_thumb_img-url'] : img_size;
	
	if(el.atts['meta']){
		var meta_arr = el.atts['meta'].split(',');
		jQuery.each(meta_arr, function(index, value){
			post[value] = value;
		});
	}
	
	if(pagelayer_empty(pagelayer_posts_data) || !pagelayer_compare_object(pagelayer_posts_data, post) || pagelayer_empty(pagelayer_ajax_data[el['id']])){
		
		pagelayer_posts_data = post;
	
		jQuery.ajax({
			url: pagelayer_ajax_url+'action=pagelayer_posts_data',
			type: 'post',
			data: post,
			success: function(data){
				//console.log(data);
				el.$.find('.pagelayer-posts-container').html(data);
				pagelayer_ajax_data[el['id']] = data;
				if(el.atts['enable_slider']){
					pagelayer_pl_posts(el.$);
				}
			}
		});
	}else{
		el.$.find('.pagelayer-posts-container').html(pagelayer_ajax_data[el['id']]);
		if(el.atts['enable_slider']){
			pagelayer_pl_posts(el.$);
		}
	}
}

var pagelayer_folio_data = {};

// Render the Post portfolio
function pagelayer_render_html_pl_post_folio(el){
	
	var post = {};	
	post['pagelayer_nonce'] = pagelayer_ajax_nonce;
	
	if(el.atts['type']) post['post_type'] = el.atts['type'];	
	if(el.atts['filter_by']) post['filter_by'] = el.atts['filter_by'];
	if(el.atts['count']) post['posts_per_page'] = el.atts['count'];// Page count
	
	if(pagelayer_empty(pagelayer_folio_data) || !pagelayer_compare_object(pagelayer_folio_data, post) || pagelayer_empty(pagelayer_ajax_data[el['id']])){
		
		pagelayer_folio_data = post;
		
		jQuery.ajax({
			url: pagelayer_ajax_url+'action=pagelayer_fetch_posts',
			type: 'post',
			data: post,
			success: function(data){
				//console.log(data);
				el.$.find('.pagelayer-postfolio-section').html(data);
				pagelayer_ajax_data[el['id']] = data;
				pagelayer_post_folio(el.$);
			}
		});
		
	}else{
		el.$.find('.pagelayer-postfolio-section').html(pagelayer_ajax_data[el['id']]);
	}
	
}

// Render the chart
function pagelayer_render_pl_chart(el){
	el['atts']['xcolor'] = pagelayer_empty(el['atts']['xcolor']) ? '' : pagelayer_parse_color(el['atts']['xcolor'], false);
	el['atts']['ycolor'] = pagelayer_empty(el['atts']['ycolor']) ? '' : pagelayer_parse_color(el['atts']['ycolor'], false);
}

// Render the chart
function pagelayer_render_end_pl_chart(el){ 
	var jEle = el.$;
	pagelayer_chart(jEle);
}

// Render the chart Dataset
function pagelayer_render_pl_chart_datasets(el){
	el['atts']['chart_border_color'] = pagelayer_empty(el['atts']['chart_border_color']) ? '' : pagelayer_parse_color(el['atts']['chart_border_color'], false);
	el['atts']['bg_color'] = pagelayer_empty(el['atts']['bg_color']) ? '' : pagelayer_parse_color(el['atts']['bg_color'], false);
}

// Render the search form
function pagelayer_render_pl_search(el){
	if('placeholder' in el.atts){
		el.tmp['placeholder'] = pagelayer_htmlEntities(el.atts['placeholder']);
	}
}

// Render the search form
function pagelayer_render_end_pl_search(el){
	pagelayer_search_form(el.$);
}

//var shuffleInstance1 = {};
// Render the img portfolio
function pagelayer_render_end_pl_img_portfolio(el){
	pagelayer_pl_img_portfolio(el.$);
}

// Render the img portfolio
function pagelayer_render_pl_single_img(el){
	
	jQuery(el.$).parent().attr('data-groups','["'+el.atts['cat_name']+'"]');
	
	el.atts['func_img'] = el.tmp['img-'+el.atts['img-size']+'-url'] || el.tmp['img-url'];
	el.atts['func_img'] = el.atts['func_img'] || el.atts['img'];
	
	// What is the link ?
	if('link_type' in el.atts){
		
		// Custom url
		if(el.atts['link_type'] == 'custom_url'){
			el.atts['func_link'] = pagelayer_empty(el.tmp['link']) ? '' : el.tmp['link'];
		}
		
		// Link to the media file itself
		if(el.atts['link_type'] == 'media_file'){
			el.atts['func_link'] = el.tmp['img-url'] || el.atts['img'];
		}
		
		// Lightbox
		if(el.atts['link_type'] == 'lightbox'){
			el.atts['func_link'] = el.tmp['img-url'] || el.atts['img'];
		}
	}
}

// Incase if there is a lightbox
function pagelayer_render_end_pl_single_img(el){
	pagelayer_pl_image(el.$);
}

// Render the wp custom menus
function pagelayer_sc_render_pl_wp_custom_menu(el){ 
	var jEle = el.$;	
	var params = {
		title: pagelayer_get_att(jEle, 'title'),
		nav_menu: pagelayer_get_att(jEle, 'nav_menu')
	};
	
	var wp_custom_menu = jQuery.ajax({
		url: pagelayer_ajax_url+'&action=pagelayer_fetch_wp_custom_menu',
		type: 'POST',
		data: params,
		async: false
	}).responseText;
	
	jEle.find('.pagelayer-wp-custom-menu-container').html(wp_custom_menu);
	
}

// Render the pages
function pagelayer_sc_render_pl_wp_pages(el){ 

	var jEle = el.$;
	
	var params = {
		sortby: pagelayer_get_att(jEle, 'sortby'),
		exclude: pagelayer_get_att(jEle, 'exclude')
	}
	
	var wp_pages = jQuery.ajax({
		url: pagelayer_ajax_url+'&action=pagelayer_fetch_wp_pages',
		type: 'POST',
		data: params,
		async: false
	}).responseText;
	
	jEle.find('.pagelayer-wp-pages-title').html(pagelayer_get_att(jEle, 'title'));
	
	jEle.find('.pagelayer-wp-pages').html(wp_pages);
	
}

// Render tags
function pagelayer_sc_render_pl_wp_search(el){
	var jEle = el.$;
	var title = pagelayer_get_att(jEle, 'title');
	
	//show title for recent comments
	jEle.find('.pagelayer-wp-search-title').empty().text(title);
	
	//Ajax call for fetching recent comments
	jQuery.ajax({
		type: "POST",
		url: pagelayer_ajax_url+'&action=pagelayer_wp_search',
		success: function(response){
			if(!pagelayer_empty(response)){
				jEle.find('.pagelayer-wp-search-option').empty().html(response);
			} 
		}
	});
}

//render tags
function pagelayer_sc_render_pl_wp_rss(el){
	var jEle = el.$;
	var title = '';
	var items = pagelayer_get_att(jEle, 'items');
	var url = pagelayer_get_att(jEle, 'url');
	var summary, author, date = 0;
	
	if(pagelayer_get_att(jEle, 'show_summary') == 'checked'){
		summary = 1;
	}
	if(pagelayer_get_att(jEle, 'show_author') == 'checked'){
		author = 1;
	}
	if(pagelayer_get_att(jEle, 'show_date') == 'checked'){
		date = 1;
	}
	var t = pagelayer_get_att(jEle, 'title');
	if(!pagelayer_empty(t)){
		title = t;
	}
	
	//Ajax call for fetching recent comments
	jQuery.ajax({
		type: "POST",
		url: pagelayer_ajax_url+'&action=pagelayer_wp_rss',
		data: {"num_items": items, "URL" : url, "summary" : summary, "author" : author, "date" : date, "title": title },
		success: function(response){
			if(!pagelayer_empty(response)){
				jEle.find('.pagelayer-wp-rss-option').empty().html(response);
			} 
		}
	});
}

//render tags
function pagelayer_sc_render_pl_wp_meta(el){
	var jEle = el.$;
	var title = '';
	var t = pagelayer_get_att(jEle, 'title');
	if(!pagelayer_empty(t)){
		title = t;
	}
	
	//Ajax call for fetching recent comments
	jQuery.ajax({
		type: "POST",
		url: pagelayer_ajax_url+'&action=pagelayer_wp_meta',
		data: { "title": title },
		success: function(response){
			if(!pagelayer_empty(response)){
				jEle.find('.pagelayer-wp-meta-option').empty().html(response);
			}
		}
	});
};

// Render the image hotspot
function pagelayer_render_pl_image_hotspot(el){  

  // Remove animation classes
	el.$.find('.pagelayer-hotspots-icon-holder').removeClass (function (index, className) {
		return (className.match (/(^|\s)pagelayer-animation-\S+/g) || []).join(' ');
	});
	// Decide the image URL
	el.tmp['img-url'] = el.tmp['img-url'] || el.atts['img'];

}

// Setup of image hotspot
function pagelayer_render_end_pl_image_hotspot(el){
	pagelayer_image_hotspot(el.$);
};

// Render the table
function pagelayer_render_end_pl_table(el){
	pagelayer_table(el.$);
};

// Render the Author Block
function pagelayer_render_pl_author_box(el){
	var jEle = el.$;
	
	if(el.atts['box_source'] == 'current'){
		el.tmp['avatar-url'] = pagelayer_author['avatar'];
		el.atts['display_name'] = pagelayer_author['display_name'];
		el.atts['description'] = pagelayer_author['description'];
		el.atts['user_url'] = pagelayer_author['user_url'];
	}else{
		el.tmp['avatar-url'] = el.tmp['avatar-url'] || el.atts['avatar'];
	}
	
	el.atts['display_html'] = '<'+el.atts['name_style']+'>'+el.atts['display_name']+'</'+el.atts['name_style']+'>';
};


// Render the Sitemap
function pagelayer_render_pl_sitemap_item(el){
	var jEle = el.$;
	
	var html_element = '';
	var data_type = '', post_order = '', order = '', hier = '', depth = '';
	
	if(el.atts['sitemap_type'] == 'post_type'){
		
		if(pagelayer_empty(el.atts['title'])){
			el.atts['title'] = 'Pages';
		}
		
		data_type = el.atts['source_post'];		
		post_order = el.atts['order_post'];
		order = el.atts['order'];
		hier = el.atts['hierarchical'];
		depth = el.atts['depth'];
		
		jQuery.ajax({
			type: "POST",
			url: pagelayer_ajax_url+'&action=pagelayer_get_pages_list',
			data: { 
				"type": data_type , 
				"post_order": post_order, 
				"order": order, 
				"hier": hier, 
				"depth": depth,
				pagelayer_nonce: pagelayer_ajax_nonce
			},
			async:false,
			success: function(response){
				html_element += '<div class="pagelayer-sitemap-section">';
				html_element += '<span>'+el.atts['title']+'</span>';
				html_element += response;
				html_element += '</div>';
				//jEle.find('.pagelayer-sitemap-section').html(html_element);
				el.atts['sitemap_html'] = html_element;
			}
		});
	}else{
		if(pagelayer_empty(el.atts['title'])){
			el.atts['title'] = 'Categories';
		}
		
		data_type = el.atts['source_taxonomy'];

		post_order = el.atts['order_taxonomy'];
		order = el.atts['order'];
		hier = el.atts['hierarchical'];
		depth = el.atts['depth'];
		empty = el.atts['hide_empty'];
		
		jQuery.ajax({
			type: "POST",
			url: pagelayer_ajax_url+'&action=pagelayer_get_taxonomy_list',
			data: { 
				"type": data_type , 
				"post_order": post_order, 
				"order": order, 
				"hier": hier, 
				"depth": depth,
				"empty": empty,
				pagelayer_nonce: pagelayer_ajax_nonce
			},
			async:false,
			success: function(response){
				html_element += '<div class="pagelayer-sitemap-section">';
				html_element += '<span>'+el.atts['title']+'</span>';
				html_element += response;	
				html_element += '</div>';
				//jEle.find('.pagelayer-sitemap-section').html(html_element);	
				el.atts['sitemap_html'] = html_element;
			}
		});
	}
		
};

// Render the fb button
function pagelayer_render_pl_fb_btn(el){
	jEle = el.$;
	if(el.atts['link_type'] == "current"){
		el.atts['custom-url'] = pagelayer_post_permalink;
	}
	pagelayer_fb_apps(el.$);
};

// Render the fb embed
function pagelayer_render_pl_fb_embed(el){
	pagelayer_fb_apps(el.$);
};

// Render the fb page
function pagelayer_render_pl_fb_page(el){
	pagelayer_fb_apps(el.$);
};

// Render the fb comments
function pagelayer_render_pl_fb_comments(el){
	jEle = el.$;
	if(el.atts['link_type'] == "current"){
		el.atts['custom-url'] = pagelayer_post_permalink;	
	}
	pagelayer_fb_apps(el.$);
};

// Render the slides
function pagelayer_render_end_pl_slides(el){
	pagelayer_owl_destroy(el.$, '.pagelayer-slides-holder');		
	pagelayer_pl_slides(el.$);
}

// Render the Single Review
function pagelayer_render_end_pl_review(el){
	var jEle = el.$.find('.pagelayer-stars-container');
	pagelayer_stars(jEle);
}

// Render the Review Slider
function pagelayer_render_end_pl_review_slider(el){
	pagelayer_owl_destroy(el.$, '.pagelayer-reviews-holder');		
	pagelayer_reviews_slider(el.$);
}

// Render the template content
function pagelayer_render_pl_templates(el){
	
	el.atts['template_content'] = '';
	
	if( !pagelayer_empty(el.atts['templates']) ){
		jQuery.ajax({
			url: pagelayer_ajax_url+'&action=pagelayer_apply_revision&revisionID='+el.atts['templates'],
			type: 'post',
			data: {
				pagelayer_nonce: pagelayer_ajax_nonce,
				'pagelayer-live' : 1,
			},
			success: function(response, status, xhr){
			
				var obj = jQuery.parseJSON(response);
				if(obj['error']){
					pagelayer_show_msg(obj['error'], 'error');
					el.CSS.css.push({'sel': '{{element}} .pagelayer-template-content', 'val': 'min-height:20px;background-color:#e3e3e3;'});
				}else{
					el.$.find('.pagelayer-template-content').html(obj['content']);
					var selector = el.$.find('.pagelayer-template-content .pagelayer-ele');
					//pagelayer_element_setup(selector, true);
					//selector.find('.pagelayer-ele-overlay').remove();
					
					// Unwrap the wraps
					if(selector.parent().is('.pagelayer-ele-wrap')){
						selector.unwrap();
					}
				}
			}
		});
	}else{
		el.CSS.css.push({'sel': '{{element}} .pagelayer-template-content', 'val': 'min-height:20px;background-color:#e3e3e3;'});
	}
	
}

/////////////////////////////
////WooCommerce Shortcode Js  
/////////////////////////////

var product_data_timer = {};

function pagelayer_ajax_do_shortcodes(el, success){
	
	var jEle = el.$;
	var shortcode_data = pagelayer_generate_sc(jEle, true);
	
	// Clear any previous timeout
	clearTimeout(product_data_timer[el.id]);
	
	// Set a timer for constant change
	product_data_timer[el.id] = setTimeout(function(){
		// Make the call
		jQuery.ajax({
			url: pagelayer_ajax_url+'&action=pagelayer_do_shortcodes',
			type: 'POST',
			data: {
				pagelayer_nonce: pagelayer_ajax_nonce,
				shortcode_data: shortcode_data
			},
			success: function(data){
				if(typeof success == 'function'){
					success(data);
					return;
				}
				
				var container = jQuery(data).find(success);
				
				if(container.length > 0){
					data = container.html();
				}
				
				el.$.find(success).html(data);
			}
		});
	}, 200);
}

// Render the product image
function pagelayer_render_pl_product_images(el){
	
	el.atts['product_images_templ'] = '';
	
	var success = function(data){
		var container = jQuery(data).find('.pagelayer-product-images-container');
		
		if(container.length > 0){
			data = container.html();
		}
		
		el.$.find('.pagelayer-product-images-container').html(data);
		
		jQuery(".woocommerce-product-gallery").each( function() {
			jQuery(this).wc_product_gallery();
		});
	}
	
	pagelayer_ajax_do_shortcodes(el, success);
	
}

// Render product price
function pagelayer_render_pl_product_price(el){	
	pagelayer_ajax_do_shortcodes(el, '.pagelayer-product-price-container');
}

function pagelayer_render_pl_product_short_desc(el) {	
	pagelayer_ajax_do_shortcodes(el, '.pagelayer-product-short-desc');
}

// Render product add to cart
function pagelayer_render_pl_add_to_cart(el){	
	pagelayer_ajax_do_shortcodes(el, '.pagelayer-add-to-cart-holder');
}

// Render product product meta
function pagelayer_render_pl_product_meta(el){	
	pagelayer_ajax_do_shortcodes(el, '.pagelayer-product-meta');
}

// Render product product meta
function pagelayer_render_pl_product_addi_info(el){
	pagelayer_ajax_do_shortcodes(el, '.pagelayer-addi-info-container');
}

// Render product product meta
function pagelayer_render_pl_product_data_tabs(el){	
	pagelayer_ajax_do_shortcodes(el, '.pagelayer-data-tabs-container');
}

// Render product product rating
function pagelayer_render_pl_product_rating(el){	
	pagelayer_ajax_do_shortcodes(el, '.pagelayer-product-rating');
}

// Render the related product
function pagelayer_render_pl_product_related(el){
	
	el.atts['related_products'] = '';
	
	pagelayer_ajax_do_shortcodes(el, '.pagelayer-product-related-container');
	
}

// Render the WooCommerce pages
function pagelayer_render_pl_woo_pages(el){
	
	el.atts['page_content'] = '';
	var shortcode ='';
	
	// if is not empty
	if( !pagelayer_empty(el.atts['pages']) ){
		shortcode = '['+ el.atts['pages'] +']';
	}
	
	jQuery.ajax({
		url: pagelayer_ajax_url+'&action=pagelayer_do_shortcodes',
		type: 'post',
		data: {
			pagelayer_nonce: pagelayer_ajax_nonce,
			shortcode_data: shortcode,
		},
		success: function(response){
						
			// If the content is empty
			if(pagelayer_empty(response)){
				response = '<div class="woocommerce">Content not found</div>';
			}
			
			// if is checkout page
			if ( 'woocommerce_checkout' === el.atts['pages'] && '<div class="woocommerce"></div>' ==  $content ) {
				response = '<div class="woocommerce">Your cart is currently empty.</div>';
			}
			
			el.$.find('.pagelayer-woo-pages-container').html(response);
		}
	});
	
}

// Render the WooCommerce pages
function pagelayer_render_pl_product_categories(el){
	
	el.atts['product_categories'] = '';
	
	// Clear any previous timeout
	clearTimeout(product_data_timer[el.id]);
	
	// Set a timer for constant change
	product_data_timer[el.id] = setTimeout(function(){
			
		jQuery.ajax({
			url: pagelayer_ajax_url+'&action=pagelayer_product_categories',
			type: 'post',
			data: {
				pagelayer_nonce: pagelayer_ajax_nonce,
				atts: el.atts,
			},
			success: function(response){				
				el.$.find('.pagelayer-product-categories-container').html(response);
			}
		});
		
	}, 200);
	
}

// Render the archive products
function pagelayer_render_pl_product_archives(el){
	
	el.atts['product_archives'] = '';
	
	pagelayer_ajax_do_shortcodes(el, '.pagelayer-product-archives-container');
	
}

// Render the products
function pagelayer_render_pl_products(el){
	
	el.atts['products_content'] = '';
	
	// Clear any previous timeout
	clearTimeout(product_data_timer[el.id]);
	
	// Set a timer for constant change
	product_data_timer[el.id] = setTimeout(function(){
			
		jQuery.ajax({
			url: pagelayer_ajax_url+'&action=pagelayer_products_ajax',
			type: 'post',
			data: {
				pagelayer_nonce: pagelayer_ajax_nonce,
				atts: el.atts,
			},
			success: function(response){				
				el.$.find('.pagelayer-products-container').html(response);
			}
		});
		
	}, 200);
	
}

// Render the products
function pagelayer_render_end_pl_woo_menu_cart(el){
	
	var success = function(data){
		var html = jQuery(data).find('.pagelayer-woo-menu-cart-container').html();
		el.$.find('.pagelayer-woo-menu-cart-container').html(html);
		
		pagelayer_woo_menu_cart(el.$);
	}
	
	pagelayer_ajax_do_shortcodes(el, success);
}

// Function to sticky the element on render, if sticky attr is set
pagelayer_add_action('pagelayer_sc_render_end', function(e, el){		
	
	// Is there any adding_attribute attribute then initialize in editor
	if(el.atts['ele_attributes']){
		pagelayer_add_attributes(el);
	}
	
	// Is there any scrolling effects then initialize in editor
	if(el.atts['ele_scrolling_effects']){
		pagelayer_scrolling_effects(el.$);
	}	
	
	// Is there any mouse effects then initialize in editor
	if(el.atts['ele_mouse_effects']){
		pagelayer_mouse_effects(el.$);
	}
	
	//console.log(el);
	if(pagelayer_empty(el.atts['ele_sticky_pos'])){return;}
	
	// Do sticky the elemen
	pagelayer_ele_sticky_handler(el.$);
	
});

// Adding Custom Attributes
var pagelayer_custom_attr = {};	
function pagelayer_add_attributes(el){

	// Remove all attributes first	  
	if(el.id in pagelayer_custom_attr){
		pagelayer_custom_attr[el.id].forEach(function(item, index){
			el.$.removeAttr(item);
		});  
	}
  
	pagelayer_custom_attr[el.id] = [];
  	
	// Then create attributes
	var val = pagelayer_trim(el.atts['ele_attributes'].split(';'));
			
	val.forEach(function(item, index){
		
		// Split from first equal only
		var splitValue = item.split(/=(.*)/);
		var attKey = pagelayer_trim(splitValue[0]);
		
		pagelayer_custom_attr[el.id].push(attKey);
		
		if(attKey.length < 1 || pagelayer_empty(attKey.match(/^[a-z_]+[\w:.-]*$/i))){
			return;
		}
		
		if(splitValue.length < 2){
			el.$.attr(attKey, '');
			return;
		}
		
		el.$.attr(attKey, splitValue[1]);
		
	});
}
	
// Function to always show Popup when editing the popup
pagelayer_add_action('pagelayer_setup_history', function(){
	
	if(!('pagelayer_template_type' in pagelayer_post && pagelayer_post['pagelayer_template_type'] == 'popup')){
		return;
	}

	jQuery(pagelayer_editable).wrap('<div class="pagelayer-popup-modal" pagelayer-popup-editor="1">'+
		'<div class="pagelayer-popup-modal-content">'+
			'<div class="pagelayer-popup-content">'+
			'</div>'+
		'</div>'+
	'</div>');
	
	pagelayer.$$('.pagelayer-settings-icon, .pagelayer-settings').attr('pagelayer-tag', 'pl_popup');
	pagelayer.$$('.pagelayer-settings').click();
	pagelayer_popup_setup(jQuery('[pagelayer-popup-editor="1"]'));
});

pagelayer_last_popup = {anim:'', close: ''};

// Render the pop-up
function pagelayer_render_end_pl_popup(el){
	
	// If the anim is same dont render animation again
	if(pagelayer_last_popup.anim == el.atts['popup_animation'] && pagelayer_last_popup.close == el.atts['popup_cbtn_position']){
		return;
	}
	
	// Set the new type
	pagelayer_last_popup.anim = el.atts['popup_animation'];
	pagelayer_last_popup.close = el.atts['popup_cbtn_position'];
	
	var modal = el.$.closest('.pagelayer-popup-modal');
	
	if(modal.length > 0){
		pagelayer_popup_setup(modal);
	}
}

// Render the call to action widget
function pagelayer_render_pl_call(el){
	el.tmp['cta_image-url'] = el.tmp['cta_image-url'] || el.atts['cta_image'];
}

//Render before after slider
function pagelayer_render_pl_before_after(el){
	el.tmp['before_image-url'] = el.tmp['before_image-url'] || el.atts['before_image'];
	el.tmp['after_image-url'] = el.tmp['after_image-url'] || el.atts['after_image'];
}

function pagelayer_render_end_pl_before_after(el){
	pagelayer_before_after_slider(el.$);
}