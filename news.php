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
			<div class="cont span_2_of_3 inform-section news-page">
				<h2>Новости</h2>
				<div class="news-item">
					<h3>Новинка! Средства для посудомоечных машин</h3>
					<div class="news-content">
						<img src="images/news1.jpg" alt="">
						<p>Средства предназначены для автоматической мойки в профессиональных посудомоечных машинах всех типов посуды из стекла, фарфора, фаянса, нержавеющей стали, пластмассы и др., а также для мойки внутренних поверхностей пароконвектоматов в воде любой жесткости. Средство рекомендуется для использования на предприятиях общественного питания, а также на пищеблоках предприятий и учреждений любого профиля, включая пищеблоки ЛПУ, для посуды, не требующей специальной санитарной обработки, в санаторно-курортных, детских, дошкольных, школьных учреждениях и т. д.</p>
						<p>При использовании в паре достигается оптимальный результат.</p>
					</div>
				</div>
				<div class="news-item">
					<h3>Новинка! Средство «Ника-Универсал с антибактериальным эффектом»</h3>
					<div class="news-content">
						<img src="images/news2.jpg" alt="">
						<p>Средство предназначено для мытья посуды и других кухонных принадлежностей, внешних поверхностей бытовых электроприборов, различных поверхностей из кафеля, пластика, дерева (включая лакированное и окрашенное), линолеума, полов, стен.</p>
						<ul>
							<li>Обладает антибактериальным эффектом</li>
							<li>Не оставляет разводов</li>
							<li>Не требует смывания</li>
							<li>Экономичен при использовании</li>
						</ul>
					</div>
				</div>	
			</div>
			<div class="clear"></div>
		</div>
	</div>

	<?php require_once 'blocks/footer.php' ?>

	<script type="text/javascript">
		$(document).ready(function() {

			$('.news-content').hide();
			$('.news-item h3').click(function() {
				$(this).next().slideToggle();
			});

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