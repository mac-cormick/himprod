<head>
	<title>Химпродукт</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700&amp;subset=cyrillic,cyrillic-ext" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/new-style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/form.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.theme.default.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$(".dropdown img.flag").addClass("flagvisibility");

			$(".dropdown dt a").click(function() {
				$(".dropdown dd ul").toggle();
			});

			$(".dropdown dd ul li a").click(function() {
				var text = $(this).php();
				$(".dropdown dt a span").php(text);
				$(".dropdown dd ul").hide();
				$("#result").php("Selected value is: " + getSelectedValue("sample"));
			});

			function getSelectedValue(id) {
				return $("#" + id).find("dt a span.value").php();
			}

			$(document).bind('click', function(e) {
				var $clicked = $(e.target);
				if (! $clicked.parents().hasClass("dropdown"))
					$(".dropdown dd ul").hide();
			});


			$("#flagSwitcher").click(function() {
				$(".dropdown img.flag").toggleClass("flagvisibility");
			});
		});
	</script>
	<!-- start menu -->     
	<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
	<script type="text/javascript" src="js/megamenu.js"></script>
	<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
	<!-- end menu -->
	<!-- top scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
	</script>
</head>