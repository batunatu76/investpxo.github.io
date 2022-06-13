<?php


$PATH =	R::getAll( 'SELECT * FROM `path` ORDER BY id DESC');
// print_r($PATH[0]);
// $counter = count($PATH)-1;
$lastPath = $PATH[0];

$sets = R::load('settings', '1');

$acces = $sets->landing_work;
$acces == 1 ? $mess = 'Работает' : $mess = 'Выключен';





?>


<!DOCTYPE html>
<html>
<head>
	<title>AdminMenu</title>
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>

	<br><br>
	<div style="border: 1px solid; padding: 10px; width: fit-content;">	
		<a>Мерч на главной странице сайта?</a><br><br>
		<button id="on">Вкл</button>
		<button id="off">Выкл</button>
		<a id="status"><b><?=$mess?></b></a>
		<br><br>

		<hr>

		<a><b>Создание ссылки:</b></a><br><br>
		<a>Сумма: </a>
		<input type="" name="num" id="sum" maxlength="10" style="width: 100px; text-align: center;" value="<?=$lastPath['sum']?>" required><a> руб.</a>
		<br><br>


		<a>Количество X: </a>
		<input type="" name="num" id="xnum" maxlength="3" style="width: 30px; text-align: center;" value="<?= $lastPath['x']?>" required> 
		<br><br>

		<a>ИП/OOO/Организация : </a>
		<input type="" name="ip" id="ip" style="width: 200px; text-align: center;" value="<?= $lastPath['ip']?>"> 
		<br><br>

		<a>Включить чекер баланса?</a>
		<input id="checkbabki" type="checkbox" name="chek" checked>
		<br><br>

		<button id="createLink">Прямая ссылка на <b>оплату</b></button>
		<button id="createRefLink">Прямая ссылка на <b>возврат</b></button>
		<br><br>

		<a id="linkFull"><b><?=$lastPath['link']?></b></a>
		<br><br>

		<button id="deleteLink">Удалить ссылку</button>
	</div>

	<br><br><br><br>

	<table style="    text-align: center;" border>
<thead>
  <tr>
    <th>#</th>
    <th>Оплата/Возврат</th>
    <th>Сумма</th>
    <th>Иксы</th>
    <th>Ссылка</th>
    <th>Чекер баланса</th>
    <th>Организация</th>
    <th>Дата</th>
    <th>Удалить?</th>
  </tr>
</thead>
<tbody>

<style type="text/css">
	.inwork:hover{
			text-decoration: line-through;
	}
</style>


<?php

$i = 0;
foreach ($PATH as $all) {
$PATH[$i]['method']=='0' ? $method = 'Оплата':  $method = 'Возврат';
echo "  <tr>
			    <td>".$PATH[$i]['id']."</td>
			    <td>". $method ."</td>
			    <td>".$PATH[$i]['sum']."</td>
			    <td>".$PATH[$i]['x']."</td>
			    <td>".$PATH[$i]['link']."</td>
			    <td>".$PATH[$i]['bc']."</td>
			    <td>".$PATH[$i]['ip']."</td>
			    <td>".$PATH[$i]['date']."</td>
			    <td class='inwork'>".delete."</td>
  		</tr>";
$i++;
}


?>

</tbody>
</table>


	<script type="text/javascript">


		$( "#on" ).click(function() {

			$.ajax({
			    url: 'functions/landPage.php',
			    type: 'post',
			    data: {'land': '1' },
			    success: function(data, status) {
			           location.reload();
			    },
			})
		})


		$( "#off" ).click(function() {

			$.ajax({
			    url: 'functions/landPage.php',
			    type: 'post',
			    data: {'land': '0' },
			    success: function(data, status) {
			        // if(data == "ok") {
			            location.reload();
			        // }
			    },
			})
		})


		$( "#createLink" ).click(function() {


			($('#checkbabki').is(':checked')) ? bc = 1 : bc = 0 ;


			$.ajax({
			    url: '/admin/functions/linkGen.php',
			    type: 'post',

			    data: {'m': 0, 
			    		'n':$("#sum").val(), 
			    		'x':$("#xnum").val(),  
			    		'ip':$("#ip").val(),
			    		'bc': bc,
			    	},

			    success: function(data, status) {
			            location.reload();
			    },
			    error: function(xhr, desc, err) {
			        console.log(xhr);
			        console.log("Details: " + desc + "\nError:" + err);
			    }
			})
		})
		$( "#createRefLink" ).click(function() {
				($('#checkbabki').is(':checked')) ? bc = 1 : bc = 0 ;
			$.ajax({
			    url: '/admin/functions/linkGen.php',
			    type: 'post',

			    data: {'m': 1, 
			    		'n':$("#sum").val(), 
			    		'x':$("#xnum").val(), 
			    		'ip':$("#ip").val(), 
			    		'bc': bc},
			    success: function(data, status) {
			            location.reload();
			    },
			    error: function(xhr, desc, err) {
			        console.log(xhr);
			        console.log("Details: " + desc + "\nError:" + err);
			    }
			})
		})		
		$( "#deleteLink" ).click(function() {

			$.ajax({
			    url: '/admin/functions/linkKill.php',
			    type: 'post',
			    // data: {'m': message },
			    success: function(data, status) {
			        // if(data == "ok") {
			            location.reload();
			        // }
			    },
			    error: function(xhr, desc, err) {
			        console.log(xhr);
			        console.log("Details: " + desc + "\nError:" + err);
			    }
			})
		})



	</script>








</body>
</html>