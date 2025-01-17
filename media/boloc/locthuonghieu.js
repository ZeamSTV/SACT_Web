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



         		   $(".item_sort").click(function(){

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
					  var re = new RegExp("([?&])" + key + "=.*?(&|$)", "i");
					  var url1;
					  	  var separator = uri.indexOf('?') !== -1 ? "&" : "?";
						  if (uri.match(re)) {
						    url1= uri.replace(re, '$1' + key + "=" + value + '$2');
						  }
						  else {
						    url1 = uri + separator + key + "=" + value;
						  }

					  
				
					  window.history.pushState('string', '',url1);

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

	   			           $('#collapse2 .item_fillter .filter-option span.filter-text').click(function (e) {



	   			           		var parama1=[];
	   			          	 	var url=window.location.href;
	   			      			var resquestvar=$(this).parent().attr('data-request');
	   			      			
		       			   			if ($(this).parent().find('input[type="checkbox"]').is(':checked')) {
						                $(this).parent().find('input[type="checkbox"]').prop('checked',false);
						               
						            }
						            else
						            {
						               $(this).parent().find('input[type="checkbox"]').prop('checked',true);

						              
						            }

						             jQuery("input:checkbox[name=quantam]:checked").each(function()
										{
											parama1.push($(this).parent().attr('data-value'));
										});

						        		updateQueryStringParameter(url,resquestvar,parama1);
	   			      			
			   			      	 	search_ajax();
			   			      	 	return false;

	   			  		    });




	   			     $('#collapse3 .item_fillter .filter-option  span.filter-text').click(function (e) {

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
		       			   			 $('#collapse3 .item_fillter').removeClass('active');
		       			   			$(this).closest('.item_fillter').addClass('active');
		       			   			setGetParameter(resquestvar, parama);

		       			   		}

	   			      		
	   			      			
	   			      	 	search_ajax();
	   			      	 	return false;

	   			      });




	   			        $('#collapse4 .item_fillter .filter-option  span.filter-text').click(function (e) {

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
		       			   			 $('#collapse4 .item_fillter').removeClass('active');
		       			   			$(this).closest('.item_fillter').addClass('active');
		       			   			setGetParameter(resquestvar, parama);

		       			   		}

	   			      		
	   			      			
	   			      	 	search_ajax();
	   			      	 	return false;

	   			      });


	   			           $('#collapse5 .item_fillter .filter-option  span.filter-text').click(function (e) {

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
		       			   			 $('#collapse5 .item_fillter').removeClass('active');
		       			   			$(this).closest('.item_fillter').addClass('active');
		       			   			setGetParameter(resquestvar, parama);

		       			   		}

	   			      		
	   			      			
	   			      	 	search_ajax();
	   			      	 	return false;

	   			      });



	   			          $('#collapse6 .item_fillter .filter-option  span.filter-text').click(function (e) {

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
		       			   			 $('#collapse6 .item_fillter').removeClass('active');
		       			   			$(this).closest('.item_fillter').addClass('active');
		       			   			setGetParameter(resquestvar, parama);

		       			   		}

	   			      		
	   			      			
	   			      	 	search_ajax();
	   			      	 	return false;

	   			      });



	   			    function search_ajax()
	   			    {			


	   			    		var id=$('#catalog_filter').attr('data-thuonghieu');

	   			    					var id_quantam='';
									         jQuery("input:checkbox[name=quantam]:checked").each(function()
									            {
									                id_quantam=id_quantam +jQuery(this).parent().attr('data-value')+',';
									            });

	   			    					var price ='';
										$('#collapse1 .item_fillter').each(function(){
											if($(this).hasClass('active')){
												price =$(this).find('.filter-option').attr('data-value');
											}
										});
										var theloai ='';
										$('#collapse3 .item_fillter').each(function(){
											if($(this).hasClass('active')){
												theloai =$(this).find('.filter-option').attr('data-value');
											}
										});
											var dactinh ='';
										$('#collapse4 .item_fillter').each(function(){
											if($(this).hasClass('active')){
												dactinh =$(this).find('.filter-option').attr('data-value');
											}
										});

											var loaida ='';
										$('#collapse5 .item_fillter').each(function(){
											if($(this).hasClass('active')){
												loaida =$(this).find('.filter-option').attr('data-value');
											}
										});
												var xuatxu ='';
										$('#collapse6 .item_fillter').each(function(){
											if($(this).hasClass('active')){
												xuatxu =$(this).find('.filter-option').attr('data-value');
											}
										});


	   			    		          $.ajax({
					                  type: "post",
					                  url: 'ajax/locthuonghieu.php',
					                   dataType: 'json',
					                 data: {'id':id,'price':price,'theloai':theloai,'id_quantam':id_quantam,'dactinh':dactinh,'loaida':loaida,'xuatxu':xuatxu},
					          			 
					                	  beforeSend: function(){

						                    $('.page-loading').css("display","block");
						               },
					                  success: function(result){

					                  			
					                           		    $('.page-loading').css("display","none");
					                           		    $('.sort_from_left').css({"display": "block", "border-bottom": "1px solid #d4d4d4;"});
					                           		    $('.sort_from_left').addClass('block_sort_folder');
					             					$('#listspthuonghieu').html(result.data1);
					             					 $('.sort_from_left').html(result.dsloc);

					                          }
					               });


	   			    }













                if ($("#collapse1 .scroll-pane").height() > 200) {
                		$("#collapse1 .scroll-pane .content_scoller").css({"height": "200px","overflow-y":"scroll"});
	             	
       			   }

       			 if ($("#collapse2.scroll-pane").height() > 200) {
                		$("#collapse2.scroll-pane .content_scoller").css({"height": "200px","overflow-y":"scroll"});
	             	
       			   }
       			   if ($("#collapse3 .scroll-pane").height() > 200) {
                		$("#collapse3 .scroll-pane .content_scoller").css({"height": "200px","overflow-y":"scroll"});
	             	
       			   }
       			   if ($("#collapse4 .scroll-pane").height() > 200) {
                		$("#collapse4 .scroll-pane .content_scoller").css({"height": "200px","overflow-y":"scroll"});
	             	
       			   }
       			   if ($("#collapse5 .scroll-pane").height() > 200) {
                		$("#collapse5 .scroll-pane .content_scoller").css({"height": "200px","overflow-y":"scroll"});
	             	
       			   }
       			   if ($("#collapse6 .scroll-pane").height() > 200) {
                		$("#collapse6 .scroll-pane .content_scoller").css({"height": "200px","overflow-y":"scroll"});
	             	
       			   }


       			  


        });



