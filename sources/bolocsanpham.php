	   

<script>





	   $(document).ready(function () {











	   				function setGetParameter1(paramName, paramValue)

							{

							    var url = window.location.href;

							    var hash = location.hash;

							    url = url.replace(hash, '');

							    if (url.indexOf(paramName + "=") >= 0)

							    {

							        var prefix = url.substring(0, url.indexOf(paramName));

							        var suffix = url.substring(url.indexOf(paramName));

							        suffix = suffix.substring(suffix.indexOf("=") + 1);

							        suffix = (suffix.indexOf("&") >= 0) ? suffix.substring(suffix.indexOf("&")) : "";

							        url = prefix + paramName + "=" + paramValue + suffix;

							    }

							    else

							    {

							    if (url.indexOf("?") < 0)

							        url += "?" + paramName + "=" + paramValue;

							    else

							        url += "&" + paramName + "=" + paramValue;

							    }

							    window.location.href = url + hash;

							

					}









					$('#sapxepthuonghieu .dropdown-menu a').click(function(){





						var value=$(this).parent().attr('value');



						var resquestvar='product_list_order';



						setGetParameter1(resquestvar, value)







					});

					$('#gioihan .dropdown-menu a').click(function(){





						var value=$(this).attr('value');



						var resquestvar='product_list_limit';



						setGetParameter1(resquestvar, value)







					});



					$('#phantrang .dropdown-menu a').click(function(){





						var value=$(this).attr('value');



						var resquestvar='page';



						setGetParameter1(resquestvar, value)







					});









         		   $(".item_sort2").click(function(){



                            var value=$(this).attr("value");

                            var resquestvar='product_list_order';

                      

                            

						setGetParameter1(resquestvar, value)



                    });

					function setGetParameter(paramName, paramValue)

							{

							    var url = window.location.href;

							    var hash = location.hash;

							    url = url.replace(hash, '');

							    if (url.indexOf(paramName + "=") >= 0)

							    {

							        var prefix = url.substring(0, url.indexOf(paramName));

							        var suffix = url.substring(url.indexOf(paramName));

							        suffix = suffix.substring(suffix.indexOf("=") + 1);

							        suffix = (suffix.indexOf("&") >= 0) ? suffix.substring(suffix.indexOf("&")) : "";





							        url = prefix + paramName + "=" + paramValue + suffix;





							    }

							    else

							    {

							    if (url.indexOf("?") < 0)



							        url += "?" + paramName + "=" + paramValue;

							    else

							        url += "&" + paramName + "=" + paramValue;

							    }

							    // window.location.href = url + hash;

							    window.history.pushState('string', '', url + hash);

					}

				



				function removeQString1(key) {

					var urlValue=document.location.href;

					

					//Get query string value

					var searchUrl=location.search;

					

					if(key!="") {

						oldValue = getParameterByName(key);

						removeVal=key+"="+oldValue;

						if(searchUrl.indexOf('?'+removeVal+'&')!= "-1") {

							urlValue=urlValue.replace('?'+removeVal+'&','?');

						}

						else if(searchUrl.indexOf('&'+removeVal+'&')!= "-1") {

							urlValue=urlValue.replace('&'+removeVal+'&','&');

						}

						else if(searchUrl.indexOf('?'+removeVal)!= "-1") {

							urlValue=urlValue.replace('?'+removeVal,'');

						}

						else if(searchUrl.indexOf('&'+removeVal)!= "-1") {

							urlValue=urlValue.replace('&'+removeVal,'');

						}

					}

					else {

						var searchUrl=location.search;

						urlValue=urlValue.replace(searchUrl,'');

					}

					  window.location.href = urlValue;

				}





					function updateQueryStringParameter1( key, value) {

				   			var uri=document.location.href;

						    var i = uri.indexOf('#');

						    var hash = i === -1 ? ''  : uri.substr(i);

						         uri = i === -1 ? uri : uri.substr(0, i);



						    var re = new RegExp("([?&])" + key + "=.*?(&|$)", "i");

						    var separator = uri.indexOf('?') !== -1 ? "&" : "?";

						    if (uri.match(re)) {

						        uri = uri.replace(re, '$1' + key + "=" + value + '$2');

						    } else {

						        uri = uri + separator + key + "=" + value;

						    }

						    // finally append the hash as well	

				



					  window.location.href = uri + hash;



					}

				 setTimeout(function () {

		                loadurl();

		            }, 500);



			   	 function loadurl()

			   	 {

			   	 	var page1=$('#phantrang').attr('data-pagemoi');



				   	 	if(page1!=0)

				   	 	{



			   	 		 setGetParameter('page',page1);

				   	 	}

			   	 	

			   				 	

	   			}

 				



	   				  $(".item_sort3 .del_item_sort").click(function(){



                            var resquestvar=$(this).closest(".item_sort3").attr("data-request");

                             var value=$(this).closest(".item_sort3").attr("data-value");

                        

                            $(this).closest(".item_sort3").removeClass("active");

                           updateQueryStringParameter1(resquestvar,value);



                       

                    });





 					$(".item_sort .del_item_sort").click(function(){



                            var resquestvar=$(this).closest(".item_sort").attr("data-request");



                        

                            $(this).closest(".item_sort").removeClass("active");

                            removeQString1(resquestvar) ;



                       

                    });



                    





						function getParameterByName(name) {

						    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");

						    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),

						    results = regex.exec(location.search);

						    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));

						}









				function removeQString(key) {

					var urlValue=document.location.href;

					

					//Get query string value

					var searchUrl=location.search;

					

					if(key!="") {

						oldValue = getParameterByName(key);

						removeVal=key+"="+oldValue;

						if(searchUrl.indexOf('?'+removeVal+'&')!= "-1") {

							urlValue=urlValue.replace('?'+removeVal+'&','?');

						}

						else if(searchUrl.indexOf('&'+removeVal+'&')!= "-1") {

							urlValue=urlValue.replace('&'+removeVal+'&','&');

						}

						else if(searchUrl.indexOf('?'+removeVal)!= "-1") {

							urlValue=urlValue.replace('?'+removeVal,'');

						}

						else if(searchUrl.indexOf('&'+removeVal)!= "-1") {

							urlValue=urlValue.replace('&'+removeVal,'');

						}

					}

					else {

						var searchUrl=location.search;

						urlValue=urlValue.replace(searchUrl,'');

					}

					history.pushState({state:1, rand: Math.random()}, '', urlValue);

				}



					function updateQueryStringParameter(uri, key, value) {

				   

						    var i = uri.indexOf('#');

						    var hash = i === -1 ? ''  : uri.substr(i);

						         uri = i === -1 ? uri : uri.substr(0, i);



						    var re = new RegExp("([?&])" + key + "=.*?(&|$)", "i");

						    var separator = uri.indexOf('?') !== -1 ? "&" : "?";

						    if (uri.match(re)) {

						        uri = uri.replace(re, '$1' + key + "=" + value + '$2');

						    } else {

						        uri = uri + separator + key + "=" + value;

						    }

						    // finally append the hash as well	

					  window.history.pushState('string', '', uri + hash);







					}







	   			      $('#collapse1 .item_fillter .filter-option span.filter-text').click(function (e) {



	   			      		var url=window.location.href;

	   			      		var resquestvar=$(this).parent().attr('data-request');

	   			      		var parama=$(this).parent().attr('data-value');





		       			   		if($(this).closest('.item_fillter').hasClass('active'))

		       			   		{



		       			   			$(this).closest('.item_fillter').removeClass('active');

		       			   			 // removeParam(resquestvar,url);

		       			   			 removeQString(resquestvar) 

		       			   		}

		       			   		else

		       			   		{

		       			   			 $('#collapse1 .item_fillter').removeClass('active');

		       			   			$(this).closest('.item_fillter').addClass('active');

		       			   			setGetParameter(resquestvar, parama);



		       			   		}



	   			      		

	   			      			

	   			      	 	search_ajax();

	   			      	 	return false;



	   			      });





	   			      <?php   $mangloc=array(6=>'Thương hiệu',7=>'Giá',11=>'Inch',8=>'Số kênh',9=>"Công suất",10=>"Tiện ích",12=>'Dung tích',13=>"Nơi sản xuất");





	   			      		foreach ($mangloc as $kk => $vv) {

	   			      			     $tenkd1=q_bodautv1($mangloc[$kk]);

	   			      ?>



	   			           $('#collapse<?=$kk?> .item_fillter .filter-option label').click(function (e) {







	   			           		var parama1=[];

	   			          	 	var url=window.location.href;

	   			      			var resquestvar=$(this).parent().attr('data-request');

	   			      			

		       			   			if ($(this).parent('.filter-option').find('input[type="checkbox"]').is(':checked')) {

						                $(this).parent('.filter-option').find('input[type="checkbox"]').prop('checked',false);

						               

						            }

						            else

						            {

						               $(this).parent('.filter-option').find('input[type="checkbox"]').prop('checked',true);



						              

						            }



						             jQuery("input:checkbox[name=id_<?=$tenkd1?>]:checked").each(function()

										{

											parama1.push($(this).parent().attr('data-value'));

										});



						        		updateQueryStringParameter(url,resquestvar,parama1);

	   			      			

			   			      	 	search_ajax();

			   			      	 	return false;



	   			  		    });











	   			           <?php } ?>









	   			     // $('#collapse3 .item_fillter .filter-option  span.filter-text').click(function (e) {



	   			     //  		var url=window.location.href;

	   			     //  		var resquestvar=$(this).parent().attr('data-request');

	   			     //  		var parama=$(this).parent().attr('data-value');





		       			//    		if($(this).closest('.item_fillter').hasClass('active'))

		       			//    		{



		       			//    			$(this).closest('.item_fillter').removeClass('active');

		       			//    			 // removeParam(resquestvar,url);

		       			//    			 	 removeQString(resquestvar) 

		       			//    		}

		       			//    		else

		       			//    		{

		       			//    			 $('#collapse3 .item_fillter').removeClass('active');

		       			//    			$(this).closest('.item_fillter').addClass('active');

		       			//    			setGetParameter(resquestvar, parama);



		       			//    		}



	   			      		

	   			      			

	   			     //  	 	search_ajax();

	   			     //  	 	return false;



	   			     //  });









	   			     //    $('#collapse4 .item_fillter .filter-option  span.filter-text').click(function (e) {



	   			     //  		var url=window.location.href;

	   			     //  		var resquestvar=$(this).parent().attr('data-request');

	   			     //  		var parama=$(this).parent().attr('data-value');





		       			//    		if($(this).closest('.item_fillter').hasClass('active'))

		       			//    		{



		       			//    			$(this).closest('.item_fillter').removeClass('active');

		       			//    			 // removeParam(resquestvar,url);

		       			//    			  	 removeQString(resquestvar) 

		       			//    		}

		       			//    		else

		       			//    		{

		       			//    			 $('#collapse4 .item_fillter').removeClass('active');

		       			//    			$(this).closest('.item_fillter').addClass('active');

		       			//    			setGetParameter(resquestvar, parama);



		       			//    		}



	   			      		

	   			      			

	   			     //  	 	search_ajax();

	   			     //  	 	return false;



	   			     //  });





	   			     //       $('#collapse5 .item_fillter .filter-option  span.filter-text').click(function (e) {



	   			     //  		var url=window.location.href;

	   			     //  		var resquestvar=$(this).parent().attr('data-request');

	   			     //  		var parama=$(this).parent().attr('data-value');





		       			//    		if($(this).closest('.item_fillter').hasClass('active'))

		       			//    		{



		       			//    			$(this).closest('.item_fillter').removeClass('active');

		       			//    			 // removeParam(resquestvar,url);

		       			//    			  	 removeQString(resquestvar) 

		       			//    		}

		       			//    		else

		       			//    		{

		       			//    			 $('#collapse5 .item_fillter').removeClass('active');

		       			//    			$(this).closest('.item_fillter').addClass('active');

		       			//    			setGetParameter(resquestvar, parama);



		       			//    		}



	   			      		

	   			      			

	   			     //  	 	search_ajax();

	   			     //  	 	return false;



	   			     //  });







	   			      //     $('#collapse6 .item_fillter .filter-option  span.filter-text').click(function (e) {



	   			      // 		var url=window.location.href;

	   			      // 		var resquestvar=$(this).parent().attr('data-request');

	   			      // 		var parama=$(this).parent().attr('data-value');





		       			 //   		if($(this).closest('.item_fillter').hasClass('active'))

		       			 //   		{



		       			 //   			$(this).closest('.item_fillter').removeClass('active');

		       			 //   			 // removeParam(resquestvar,url);

		       			 //   			  	 removeQString(resquestvar) 

		       			 //   		}

		       			 //   		else

		       			 //   		{

		       			 //   			 $('#collapse6 .item_fillter').removeClass('active');

		       			 //   			$(this).closest('.item_fillter').addClass('active');

		       			 //   			setGetParameter(resquestvar, parama);



		       			 //   		}



	   			      		

	   			      			

	   			      // 	 	search_ajax();

	   			      // 	 	return false;



	   			      // });



	   			      //        $('#collapse7 .item_fillter .filter-option  span.filter-text').click(function (e) {



	   			      // 		var url=window.location.href;

	   			      // 		var resquestvar=$(this).parent().attr('data-request');

	   			      // 		var parama=$(this).parent().attr('data-value');





		       			 //   		if($(this).closest('.item_fillter').hasClass('active'))

		       			 //   		{



		       			 //   			$(this).closest('.item_fillter').removeClass('active');

		       			   		

		       			 //   			  	 removeQString(resquestvar) 

		       			 //   		}

		       			 //   		else

		       			 //   		{

		       			 //   			 $('#collapse7 .item_fillter').removeClass('active');

		       			 //   			$(this).closest('.item_fillter').addClass('active');

		       			 //   			setGetParameter(resquestvar, parama);



		       			 //   		}



	   			      		

	   			      			

	   			      // 	 	search_ajax();

	   			      // 	 	return false;



	   			      // });



	   			      //    $('#collapse8 .item_fillter .filter-option  span.filter-text').click(function (e) {



	   			      // 		var url=window.location.href;

	   			      // 		var resquestvar=$(this).parent().attr('data-request');

	   			      // 		var parama=$(this).parent().attr('data-value');





		       			 //   		if($(this).closest('.item_fillter').hasClass('active'))

		       			 //   		{



		       			 //   			$(this).closest('.item_fillter').removeClass('active');

		       			   		

		       			 //   			  	 removeQString(resquestvar) 

		       			 //   		}

		       			 //   		else

		       			 //   		{

		       			 //   			 $('#collapse8 .item_fillter').removeClass('active');

		       			 //   			$(this).closest('.item_fillter').addClass('active');

		       			 //   			setGetParameter(resquestvar, parama);



		       			 //   		}



	   			      		

	   			      			

	   			      // 	 	search_ajax();

	   			      // 	 	return false;



	   			      // });





				

	   			     

	   			    function search_ajax()

	   			    {			





	   			 										

	   			    					var url=document.location.href;

	   			    					var searchUrl1=location.search;







						   			      <?php      $mangloc=array(6=>'Thương hiệu',7=>'Giá',11=>'Inch',8=>'Số kênh',9=>"Công suất",10=>"Tiện ích",12=>'Dung tích',13=>"Nơi sản xuất");



						   			      		foreach ($mangloc as $kk => $vv) {

						   			      			     $tenkd1=q_bodautv1($mangloc[$kk]);

						   			      ?>





									     		var id_<?=$tenkd1?>='';

									      	   jQuery("input:checkbox[name=id_<?=$tenkd1?>]:checked").each(function()

									            {

									                id_<?=$tenkd1?>=id_<?=$tenkd1?> +jQuery(this).parent().attr('data-value')+',';

									            });







									      <?php } ?>



	   			    			





										var limit=$('#product_list_limit').attr('data-limit');

										var cat=$('#product_cat').attr('data-cat');

										var cat1=$('#product_cat1').attr('data-cat1');

										var cat2=$('#product_cat2').attr('data-cat2');

										var order=$('#product_list_order').attr('data-order');

										var page=$('#pageajax').attr('data-page');

	   			    		          $.ajax({

					                  type: "post",

					                  url: 'ajax/locsanpham1.php',

					                   dataType: 'json',

					                 data: {'searchUrl1':searchUrl1,'url':url,'page':page,'order':order,'limit':limit,'id_thuong_hieu':id_thuong_hieu,'id_gia':id_gia,'id_inch':id_inch,'id_tien_ich':id_tien_ich,'id_so_kenh':id_so_kenh,'id_cong_suat':id_cong_suat,'id_dung_tich':id_dung_tich,'id_noi_san_xuat':id_noi_san_xuat,'cat':cat,'cat1':cat1,'cat2':cat2},

					          			 

					                	  beforeSend: function(){



						                    $('.page-loading').css("display","block");

						               },

					                  success: function(result){



					                  			

					                           		    $('.page-loading').css("display","none");

					                           		  

					             					$('#listspthuonghieu').html(result.data1);

					             					 $('.sort_from_left span').html(result.dsloc);

					             					 $('#phantrang .dropdown-menu').html(result.phantrang);

					                          }

					               });





	   			    }



























                if ($("#collapse1 .scroll-pane").height() > 150) {

                		$("#collapse1 .scroll-pane .content_scoller").css({"height": "150px","overflow-y":"scroll"});

	             	

       			   }



       			 if ($("#collapse2.scroll-pane").height() > 150) {

                		$("#collapse2.scroll-pane .content_scoller").css({"height": "150px","overflow-y":"scroll"});

	             	

       			   }

       			   if ($("#collapse3 .scroll-pane").height() > 150) {

                		$("#collapse3 .scroll-pane .content_scoller").css({"height": "150px","overflow-y":"scroll"});

	             	

       			   }

       			   if ($("#collapse4 .scroll-pane").height() > 150) {

                		$("#collapse4 .scroll-pane .content_scoller").css({"height": "150px","overflow-y":"scroll"});

	             	

       			   }

       			   if ($("#collapse5 .scroll-pane").height() > 150) {

                		$("#collapse5 .scroll-pane .content_scoller").css({"height": "150px","overflow-y":"scroll"});

	             	

       			   }

       			   if ($("#collapse6 .scroll-pane").height() > 150) {

                		$("#collapse6 .scroll-pane .content_scoller").css({"height": "150px","overflow-y":"scroll"});

	             	

       			   }

       			      if ($("#collapse7 .scroll-pane").height() > 150) {

                		$("#collapse7 .scroll-pane .content_scoller").css({"height": "150px","overflow-y":"scroll"});

	             	

       			   }



				   if ($("#collapse8 .scroll-pane").height() > 150) {

				                		$("#collapse8 .scroll-pane .content_scoller").css({"height": "150px","overflow-y":"scroll"});

					             	

				       			   }



				   if ($("#collapse9 .scroll-pane").height() > 150) {

				                		$("#collapse9 .scroll-pane .content_scoller").css({"height": "150px","overflow-y":"scroll"});

					             	

				       			   }













  

      $("#owl-spchitiet").owlCarousel({

             items : 6,

                

        loop:true,

        slideSpeed : 2000,

        nav: true,

        autoplay: true,

        navText: ["<img src='img/nutprev.png'>","<img src='img/nutnext.png'>"],

         responsive:{

                                                  0:{

                                                      items:2,

                                                      nav:false,

                                                      loop:true

                                                  },

                                                  600:{

                                                      items:3,

                                                      nav:false,

                                                      loop:true

                                                  },

                                                  1000:{

                                                      items:6,

                                                      nav:true,

                                                      loop:true

                                                   

                                                  }

                                              }



                                               



    

      });





       			  





        });







	   

</script>