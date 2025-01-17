<style>

	#top{color:#fff;font-weight:500;text-align:center;width:45px;height:45px;position:fixed;bottom:30px;right:25px; z-index:9999; display:none;cursor:pointer;background-color: #fff;border-radius:50%;-moz-border-radius:50%;-ms-border-radius:50%;-o-border-radius:50%;-webkit-border-radius:50%;-moz-transition: background-color 0.2s ease-in-out;-ms-transition: background-color 0.2s ease-in-out;-o-transition: background-color 0.2s ease-in-out;-webkit-transition: background-color 0.2s ease-in-out;transition: background-color 0.2s ease-in-out;}

	
</style>

<script type="text/javascript">

	$(document).ready(function() {

		

		$('body').append('<div id="top" title="Back to Top"><img src="img/icontop.png" /></div>');

		$(window).scroll(function() {

			if($(window).scrollTop() > 100) {

				$('#top').fadeIn();

			} else {

				$('#top').fadeOut();

			}

	   	});

	   	$('#top').click(function() {

			$('html, body').animate({scrollTop:0},500);

	   	});	   	   	

		

	});

</script>