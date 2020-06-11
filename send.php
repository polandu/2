<?php
// тут апи ключ пишем. Получить - Профиль->API->Сгенерировать ключ
$api_key = "02f79b52cb614eea21b7f836048549ab";
 
// тут код потока пишем. Получить - Потоки->Создать поток->Получить код.
// Там отделяем от исходной ссылки то что после косой. http://mltop.net/[ТУТ КОД ПОТОКА]. Например: 76sk6b3
$flow_code = "zagbepje";
 
$data = [
    'tel' => $_REQUEST['phone'],
    'client' => $_REQUEST['name'],
    'ip' => $_SERVER['REMOTE_ADDR']
];
 
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.monsterleads.pro/method/order.add?api_key=' . $api_key . '&code=' . $flow_code);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
 
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, TRUE);
curl_exec($ch);
curl_close($ch);
 
?>

<!Doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link type="text/css" rel="stylesheet" href="success_files/style000.css"/>
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
 

  <!-- Yandex.Metrika counter --> <script type="text/javascript" > (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)}; m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)}) (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym"); ym(55070203, "init", { clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); </script> <noscript><div><img src="https://mc.yandex.ru/watch/55070203" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->
  
</head>

<body>
  

  
<style>body{
        font-family: 'Open Sans', sans-serif;
    }
    .success{
        font-family: 'Open Sans', sans-serif;
        font-size: 15px; 
    }
    .back-to-main{
        display: inline-block;
        margin-top: 20px;
        padding: 10px 20px;
        background: rgb(30,87,153);
background: -moz-linear-gradient(left, rgba(30,87,153,1) 0%, rgba(41,137,216,1) 50%, rgba(32,124,202,1) 100%, rgba(125,185,232,1) 100%, rgba(32,124,202,1) 101%);
background: -webkit-linear-gradient(left, rgba(30,87,153,1) 0%,rgba(41,137,216,1) 50%,rgba(32,124,202,1) 100%,rgba(125,185,232,1) 100%,rgba(32,124,202,1) 101%);
background: linear-gradient(to right, rgba(30,87,153,1) 0%,rgba(41,137,216,1) 50%,rgba(32,124,202,1) 100%,rgba(125,185,232,1) 100%,rgba(32,124,202,1) 101%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#1e5799', endColorstr='#207cca',GradientType=1 );
        border-radius: 10px;
        text-decoration: none;
        text-transform: uppercase;
        transition: all ease 2s;
        color: #fff;
    }
    .back-to-main:hover{
        background: rgb(30,87,153);
background: -moz-linear-gradient(top, rgba(30,87,153,1) 0%, rgba(41,137,216,1) 50%, rgba(32,124,202,1) 100%, rgba(125,185,232,1) 100%, rgba(32,124,202,1) 101%);
background: -webkit-linear-gradient(top, rgba(30,87,153,1) 0%,rgba(41,137,216,1) 50%,rgba(32,124,202,1) 100%,rgba(125,185,232,1) 100%,rgba(32,124,202,1) 101%);
background: linear-gradient(to bottom, rgba(30,87,153,1) 0%,rgba(41,137,216,1) 50%,rgba(32,124,202,1) 100%,rgba(125,185,232,1) 100%,rgba(32,124,202,1) 101%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#1e5799', endColorstr='#207cca',GradientType=0 );
        color: #ccc;
    }
    .block_success{
        text-align: center;
    }
    @media screen and (max-width:480px) {
        .congrats {
            font-size: 30px;
        }
    }
    </style>
	<div class="wrap_block_success">
		<div class="block_success">
			<h2 class="congrats" style="font-family: 'Open Sans', sans-serif; ">GRATULACJE! TWOJE ZAMÓWIENIE JEST AKCEPTOWANE!</h2>
			<p>&nbsp;</p>
			<p class="success">
W niedalekiej przyszłości operator skontaktuje się z Tobą w celu potwierdzenia zamówienia. Podaj swój kontaktowy numer telefonu.</p>
			<a class="back-to-main" href="index.php">

Wróć do strony</a>
		</div>
	</div>
</body>
</html>


 
