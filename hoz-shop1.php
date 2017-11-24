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
			<div class="cont span_2_of_3 prod-items">
				<h2>Ведра</h2>
				<div class="box1">
					<div class="col_1_of_single1 span_1_of_single1"><a href="register.php">
						<div class="view1 view-fifth1">
							<div class="top_box">
								<h3 class="m_1">ВЕДРО</h3>
								<p class="m_2">Оцинкованное 9л, 12л и 15л</p>
								<div class="grid_img">
									<div class="css3"><img src="images/products/hoz-shop1/1.jpg" alt=""/></div>
									<div class="mask1">
										<div class="info"><a href="register.php">ЗАКАЗАТЬ</a></div>
									</div>
								</div>
								<div class="price">£480</div>
							</div>
						</div>
						<div class="clear"></div>
					</a></div>
					<div class="col_1_of_single1 span_1_of_single1"><a href="register.php">
						<div class="view1 view-fifth1">
							<div class="top_box">
								<h3 class="m_1">ВЕДРО</h3>
								<p class="m_2">ЕлПластцветное пищев с мерной шкалой 10л и 12л</p>
								<div class="grid_img">
									<div class="css3"><img src="images/products/hoz-shop1/2.jpg" alt=""/></div>
									<div class="mask1">
										<div class="info"><a href="register.php">ЗАКАЗАТЬ</a></div>
									</div>
								</div>
								<div class="price">£480</div>
							</div>
						</div>
						<div class="clear"></div>
					</a></div>
					<div class="col_1_of_single1 span_1_of_single1"><a href="register.php">
						<div class="view1 view-fifth1">
							<div class="top_box">
								<h3 class="m_1">ВЕДРО</h3>
								<p class="m_2">Соло без крышки и с крышкой 5л и 7л</p>
								<div class="grid_img">
									<div class="css3"><img src="images/products/hoz-shop1/3.jpg" alt=""/></div>
									<div class="mask1">
										<div class="info"><a href="register.php">ЗАКАЗАТЬ</a></div>
									</div>
								</div>
								<div class="price">£480</div>
							</div>
						</div>
						<div class="clear"></div>
					</a></div>
					<div class="clear"></div>
				</div>
				<div class="box1">
					<div class="col_1_of_single1 span_1_of_single1"><a href="register.php">
						<div class="view1 view-fifth1">
							<div class="top_box">
								<h3 class="m_1">ВЕДРО</h3>
								<p class="m_2">10л YORK со вставкой</p>
								<div class="grid_img">
									<div class="css3"><img src="images/products/hoz-shop1/4.jpg" alt=""/></div>
									<div class="mask1">
										<div class="info"><a href="register.php">ЗАКАЗАТЬ</a></div>
									</div>
								</div>
								<div class="price">£480</div>
							</div>
						</div>
						<div class="clear"></div>
					</a></div>
					<div class="col_1_of_single1 span_1_of_single1"><a href="register.php">
						<div class="view1 view-fifth1">
							<div class="top_box">
								<h3 class="m_1">ВЕДРО</h3>
								<p class="m_2">12л  Строительное</p>
								<div class="grid_img">
									<div class="css3"><img src="images/products/hoz-shop1/5.jpg" alt=""/></div>
									<div class="mask1">
										<div class="info"><a href="register.php">ЗАКАЗАТЬ</a></div>
									</div>
								</div>
								<div class="price">£480</div>
							</div>
						</div>
						<div class="clear"></div>
					</a></div>
					<div class="clear"></div>
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