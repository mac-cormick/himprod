<!DOCTYPE HTML>
<html>

<?php require_once 'head.php' ?>

<body>

	<?php require_once 'header.php' ?>

	<div class="header-bottom">
		<div class="wrap">
			<!-- start header menu -->
			<?php require_once 'menu.php' ?>
			<div class="clear"></div>
		</div>
	</div>
	<div class="register_account">
		<div class="wrap">
			<div class="col_1_of_2 span_1_of_2">	
				<h2>Для оформления заказа Вы можете:</h2>
				<ul>
					<li>Позвонить нам по телефонам: +7 (8352) <a href="tel.:+78352563419">56-34-19</a>, <a href="tel.:+78352573911">57-39-11</a>, <a href="tel.:+78352238787">23-87-87</a></li>
					<li>Написать нам на почту: <a href="mailto:info@himprod.com">info@himprod.com</a></li>
					<li>Заказать обратный звонок, оставив Ваши контакты в форме обратной связи</li>
				</ul>
			</div>
			<div class="col_1_of_2 span_1_of_2">
				<h4 class="title">Форма обратной связи</h4>
				<form>					
					<div><input type="text" value="Имя" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Имя';}"></div>
					<div><input type="text" value="E-Mail" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'E-Mail';}"></div>
					<div><input type="text" value="Телефон" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Телефон';}"></div>
					<button class="grey">Отправить</button>
					<p class="terms">Нажимая кнопку 'Отправить' Вы подтверждаете согласие на <a href="oferta.php">обработку персональных данных</a>.</p>
					<div class="clear"></div>
				</form>
			</div>
			<div class="clear"></div>
		</div> 
	</div>
	<?php require_once 'footer.php' ?>
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
	</body>
	</html>