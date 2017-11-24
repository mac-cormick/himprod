<!DOCTYPE HTML>
<html>

<?php require_once 'blocks/head.php' ?>

<body>

	<?php require_once 'blocks/header.php' ?>

	<div class="header-bottom">
		<div class="wrap">
			<!-- start header menu -->
			<?php require_once 'blocks/menu.php' ?>
			<div class="clear"></div>
		</div>
	</div>
	<div class="login">
		<div class="wrap">
			<div class="rsidebar span_1_of_left">
				<h4>Товары и Услуги</h4>
				<?php require_once 'blocks/left-prod.php' ?>
			</div>
			<div class="cont span_2_of_3 inform-section contacts-page">
				<h2>Будьте с нами на связи</h2>
				<p><i class="fa fa-phone" aria-hidden="true"></i> +7 (8352) <a href="tel:+78352563419">56-34-19</a>, <a href="tel:+78352573911">57-39-11</a>, <a href="tel:+78352238787">23-87-87</a></p>
				<p><i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:info@himprod.com">info@himprod.com</a></p>
				<p><i class="fa fa-map-marker" aria-hidden="true"></i> 428000, Чувашская Республика, г. Чебоксары, ул. Николаева, д. 29</p>
				<div class="ya-map">
					<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A641576576591cee1131c55f0f16eca9d693796374e1c4908a2a913b1ef23574c&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=false"></script>
				</div>
			</div>
			<div class="clear"></div>
		</div>
	</div>

	<?php require_once 'blocks/footer.php' ?>

	<script type="text/javascript">
		$(document).ready(function() {

			var defaults = {
		  			containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear' 
				};
				
				
				$().UItoTop({ easingType: 'easeOutQuart' });
				
			});
		</script>
		<a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
		<!-- BEGIN JIVOSITE CODE {literal} -->
		<script type='text/javascript'>
			(function(){ var widget_id = 'GKYPHZoXOG';var d=document;var w=window;function l(){
			var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();
		</script>
		<!-- {/literal} END JIVOSITE CODE -->
	</body>
	</html>