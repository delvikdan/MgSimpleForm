<?php
Header("Content-Type: text/html;charset=UTF-8");
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Веб студия GRANAT (сайт в разработке)</title>
		<link rel='stylesheet'  href='/css/style.css' type='text/css' media='all' />
		<script type='text/javascript' src='/js/jquery-1.11.2.min.js'></script>
		<script	src="/js/custom.js" type="text/javascript" ></script>


	</head>
	
	<body>
		<header class="page-row">
			<div class='header'>
				<div class='logobox'>
					<a title="" href='/'><img title='' alt='Granat' src='/img/logo.png' /></a>
				</div>
				<div class='textbox'>
					<h1>Студия <span>Granat</span></h1>
					
					<p>Веб студия Granat – команда молодых и творческих энтузиастов, создающая  современные и оригинальные сайты. В нашем арсенале - множество оригинальных идей по созданию логотипов, корпоративного стиля, а также нестандартный подход к структуре и наполнению сайта. 
					Пока наш ресурс находится в разработке, Вы можете заказать создание своего сайта - просто позвоните или напишите нам, заполнив форму.</p>
					
				
				
				</div>
				<div style='clear:both'></div>
			</div>
			
		</header> 

		<main class="page-row page-row-expanded">
			<div class='content'>
							
							<div class='form_side'>
								<div class="overlay"></div>
								<div class="granatform">
									<form class="fofm" action="">
										<input type="text" required="" placeholder="Ваше имя / название организации" name="txtname">
										<input type="email" required="" placeholder="Ваш email" name="txtemail">
										<input type="tel" pattern="^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$" placeholder="Ваш телефон" name="txtphone">
										<textarea name="txtmessage" required="" placeholder="Сообщение" rows="10" ></textarea>
										<label><input type="checkbox">Я не робот</label>
										<input type="hidden" name="valTrFal" class="valTrFal" value="valTrFal_disabled">
										<input type="submit" class="button" value="Отправить письмо" disabled="disabled" name="btnsend">
									</form>
								</div>

								<div class="confirm">
								<div class="close_modal">x</div>
									<div class="window">
										<div class="insText">
											<h5>Письмо отправлено</h5>
											<p><strong>Ваше сообщение отправлено.</strong> Мы свяжемся с вами в ближайшее время!</p>
										</div>
									</div>
								</div>		
							</div>
							
						<div class='contacts_side'>
							<div class='tel'>Телефон:</div>
							<p>8 (925) 868 - 61 - 25</p>
							<p>8 (925) 186 - 61 - 06</p>
							
							<div class='mail'>E-mail:</div>
							<p><a href="mailto:info@mygranat.ru">info@mygranat.ru</a></p>
						</div>
						
						<div style='clear:both'></div>
			</div>
			
		</main>
		<footer class="page-row">
			<div class='footer'>
				<span class="copyright">&#169; Веб студия Granat, 2015</span>
				
				<span>made by</span>
				<img alt='Веб студия Granat - mygranat.ru' title='' src="/img/granat_logo.png" />
				<a href="https://plus.google.com/107281245026928899633" rel="publisher"></a>
			</div>
		</footer>
	</body>
</html>