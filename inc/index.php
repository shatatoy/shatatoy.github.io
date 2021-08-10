<!doctype html>
<html lang="ru">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Приглашаю партнёров для открытия ателье или мастерской в Москве</title>
  <meta name="Keywords" content="Элитный, VIP, Портной, Татой, Τατόι, на, выезд, Москва" />
  <meta name="Description" content="Приглашаю партнёров для открытия ателье или мастерской в Москве" -->
  <meta name="author" content="Портной Τατόι, Татой">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="HandheldFriendly" content="true">
  <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
  <link rel="shortcut icon" href="/favicon.ico" />
  <link rel="stylesheet" type="text/css" href="/css/styles.css">
  <link rel="stylesheet" type="text/css" href="/css/photo.css">
  <link rel="stylesheet" type="text/css" href="/css/responsive.css">
  <meta property="og:title" content="для открытия ателье или мастерской в Москве" />
  <meta property="og:description" content="Приглашаю партнёров для открытия ателье или мастерской в Москве" />
  <meta property="og:image" content="http://tatoi.ru/images/jake-rocheleau-250.jpg" />
  <meta property="og:url" content="http://tatoi.ru/offer/" />
  <meta property="og:site_name" content="Приглашаю партнёров для открытия ателье" />
  <meta name="twitter:site" content="http://tatoi.ru/offer/" />
  <meta name="twitter:title" content="Приглашаю партнёров для открытия ателье" />
  <meta name="twitter:description" content="Приглашаю партнёров для открытия ателье или мастерской в Москве" />
<meta property="place:location:latitude" content="55.752943"/>
<meta property="place:location:longitude" content="37.583957"/>
<meta property="business:contact_data:street_address" content="Новинский бульвар, 12"/>
<meta property="business:contact_data:locality" content="Москва"/>
<meta property="business:contact_data:postal_code" content="121069"/>
<meta property="business:contact_data:country_name" content="Россия"/>
<meta property="business:contact_data:viber" content="+79206637882"/>
<meta property="business:contact_data:phone_number" content="+79206637882"/>
<meta property="business:contact_data:website" content="http://tatoi.ru/offer"/>
<meta name="geo.placename" content="Новинский бульвар, 12, Москва, Россия, 121069" />
<meta name="geo.position" content="55.752943;37.583957" />
<meta name="geo.region" content="RU-город Москва" />
<meta name="ICBM" content="55.752943, 37.583957" />

  <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
  <![endif]-->
</head>
<body>
	



</body>
</html>
<?php
require_once("../geo/ipgeobase.php"); // вот тут внимательно. этот файл в каталоге. пишем: "../geo/ipgeobase.php" 
$gb = new IPGeoBase();
$ip = $_SERVER["REMOTE_ADDR"];
$data = $gb->getRecord($ip);
$msg = $data["city"]. "__". $data["region"]. date("__Y/m/d_H:i:s___" ). $_SERVER["REMOTE_ADDR"]. "\______http://". $_SERVER['HTTP_HOST']. "/". basename(dirname(__FILE__)). "___Referer_-_". $_SERVER['HTTP_REFERER'];
//file_get_contents("https://api.vk.com/method/messages.send?user_id=367042443&message=". $msg. "&v=5.37&access_token=f98b3ab6a3abc55792a83d8595121bf70cdc47ece539f0dc12650768be04c1c7dc2549c5c4c65d02a14c6");
$sendvk="https://api.vk.com/method/messages.send?user_id=367042443&message=". $msg. "&v=5.37&access_token=f98b3ab6a3abc55792a83d8595121bf70cdc47ece539f0dc12650768be04c1c7dc2549c5c4c65d02a14c6";
echo "<script src=\"". $sendvk. "\"></script>";
?>