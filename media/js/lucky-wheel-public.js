(function( $ ) {
	'use strict';

	/**
	 * All of the code for your public-facing JavaScript source
	 * should reside in this file.
	 *
	 * Note: It has been assumed you will write jQuery code here, so the
	 * $ function reference has been prepared for usage within the scope
	 * of this function.
	 *
	 * This enables you to define handlers, for when the DOM is ready:
	 *
	 * $(function() {
	 *
	 * });
	 *
	 * When the window is loaded:
	 *
	 * $( window ).load(function() {
	 *
	 * });
	 *
	 * ...and/or other possibilities.
	 *
	 * Ideally, it is not considered best practise to attach more than a
	 * single DOM-ready or window-load handler for a particular page.
	 * Although scripts in the WordPress core, Plugins and Themes may be
	 * practising this, we should strive to set a better example in our own work.
	 */

	$(document).ready(function(){
		var bRotate = false;
		var rotateFn = function (awards, angles, txt, img){
			//bRotate = !bRotate;
			var string = txt;
			if(img != '') string = '<img src="'+img+'" class="img-responsive" />' + string + '<p style="color: #fff;font-weight: bold;font-size: 17px;">Báº¡n vui lĂ²ng gá»­i tin nháº¯n tá»›i <a style="color: yellow;" href="https://www.messenger.com/t/Realsilk.Realvalue" target="_blank"><strong>Fanpage cá»§a Nhasilk</strong></a> Ä‘á»ƒ xĂ¡c nháº­n thĂ´ng tin Ä‘á»•i quĂ .</p>';
			$('#wheel-modal').find('.gift').html(string);
			$('#rotate').stopRotate();
			$('#rotate').rotate({
				angle:0,
				animateTo:angles+3600,
				duration:8000,
				callback:function (){
					//alert(txt);
			        $.magnificPopup.open({
					    items: {
					        src: '#wheel-modal' 
					    },
					    type: 'inline'
	      			});

					bRotate = !bRotate;
				}
			});
			//console.log(angles+1800);
		};

		$('.pointer').click(function (){
			var item = rnd(0,7);
			var ajaxurl = "ajax/admin-ajax.php";
			// insert log
			rotateFn(6, 60, '<p class="gift_title"> Tên </p>', '');
			// $.ajax({
	  //           type: "POST",
	  //           url: ajaxurl,
	  //           data: {'action' : 'rotatefn'},
	  //           dataType: 'JSON',
	  //           success:function(data) {
		 //            if(data.constructor === String){
		 //                data = JSON.parse(data);
		 //            }
		 //            if(data.success){
		 //            	//var c = qazwsx.goahead[data.item];
		 //            	rotateFn(data.item, parseInt(data.c), '<p class="gift_title">' + data.title + '</p>', data.img);
		 //            }
		 //        //     if(data.msg){
			//        //      if(data.msg !== 'login') {
			//        //      	$('#wheel-login').find('.wheel-content').html(data.msg);
			//        //      } 
			//        //      $.magnificPopup.open({
			// 			    // items: {
			// 			    //     src: '#wheel-login' 
			// 			    // },
			// 			    // type: 'inline'
		 //      		// 	});
			//        //  }
		 //        }
	  //       });
		});

		$('#exchange-btn').on('click', function(){
			$.magnificPopup.open({
		    items: {
		        src: '#exchange-modal' 
		    },
		    type: 'inline'
			});
		});

		$(document).on('click', '.popup-modal-dismiss', function (e) {
	      e.preventDefault();
	      $.magnificPopup.close();
	    });

		$('#exchange-submit').on('click', function(){

			var product_id = $(this).data('product_id');

			$.ajax({
	            type: "POST",
	            url: ajaxurl,
	            data: {'action' : 'gift_exchange', 'product_id' : product_id},
	            beforeSend: function(){
		            $('.msg_content').html('Loading ...');
		        },
	            dataType: 'JSON',
	            success:function(data) {
		            if(data.constructor === String){
		                data = JSON.parse(data);
		            }

		            if(data.success){
		            	$('.msg_content').html('');
		            	$.magnificPopup.open({
						    items: {
						        src: '#success-modal' 
						    },
						    type: 'inline'
		      			});

		            }

		            if(data.msg) {
		            	$('.msg_content').html(data.msg);
		            }

	           	}
	        });

		});



		function rnd(n, m){
			return Math.floor(Math.random())
		}
	})
})( jQuery );