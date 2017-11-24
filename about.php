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
			<div class="cont span_2_of_3 inform-section">
				<h2>О компании Химпродукт</h2>
				<p>ИП Иванов активно работает на рынке промышленной химии с 1998г. В своей работе мы ориентируемся на потребности наших клиентов, глубоко вникаем в поставленные перед нами задачи и решаем их на высоком профессиональном уровне.</p>

				<p>Среди наших потребителей крупнейшие предприятия Чувашской Республики, государственные, медицинские и учебные учреждения. Число наших клиентов постоянно увеличивается.</p>
				<ul>
					<li>пищевая промышленность</li>
					<li>организации общественного питания</li>
					<li>торговля, коммунальные объекты</li>
					<li>медицинские учреждения, предприятия социальной защиты</li>
					<li>общеобразовательные учреждения</li>
					<li>меховые и шубные фабрики</li>
					<li>воздушные суда гражданской авиации</li>
					<li>объекты железнодорожного транспорта и метрополитена</li>
					<li>бытовая химия — для домашнего применения</li>
				</ul>
				
				<p>Мы дорожим нашей репутацией, выполняя все заказы только на высоком уровне, быстро и качественно; так же проводим гибкую ценовую политику, индивидуальный подход к каждому клиенту. Благодаря этому у нас образовалась большая группа постоянных клиентов.</p>

				<p>Приглашаем к сотрудничеству с нами и надеемся, что оно будет плодотворным и длительным.</p>
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