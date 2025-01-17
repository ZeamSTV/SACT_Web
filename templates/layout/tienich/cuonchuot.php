<style>

.menu1_dacuon{position:fixed!important;width:100%;background-color:#237fc8;height:41px;top:0px;left:0px;z-index:99999999999999999999999999999!important;transition:0.3s; -moz-transition:0.3s; -ms-transition:0.3s; -o-transition:0.3s; -webkit-transition:0.3s;margin-top:0px!important }	
.bomenutrai{border-top:0px solid #000}

</style>


 <script>
	$(document).ready(function() {
	  
		   
		   
		
		
		
		$(window).scroll(function (e) {
			
		 
		 var cao= $(this).scrollTop();
		 if(cao > 101) {
			 $('#menu1').addClass('menu1_dacuon');
			 $('#menutrai').addClass('bomenutrai');
				
			
			
			
		 } 
		 else {
			  $('#menu1').removeClass('menu1_dacuon');
			   $('#menutrai').removeClass('bomenutrai');
			
			
		 }
		
     });


		   
		   
		   
	});
	
	
	</script>

<!--cuon chuot-->
