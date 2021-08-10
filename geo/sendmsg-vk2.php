<!doctype html>
<html lang="ru">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<link href="/css/mobile.css" rel="stylesheet" type="text/css" />

</head>

<body>

<div id="w" itemscope><p>
<?php
require_once("ipgeobase.php");
$gb = new IPGeoBase();
$ip = $_SERVER["REMOTE_ADDR"];
echo "<br />  ";
echo $ip;
echo "<br />  ";
$data = $gb->getRecord($ip);
echo $data["city"];
echo "<br />  ";

if ($data["city"]==="Москва" OR $data["region"]==="Московская область") 
{
echo "<br />  ";
echo "city Москва или Московская область";
echo "<br />  ";
}	
else if  ($data["region"]==="Санкт-Петербург" OR $data["region"]==="Ленинградская область")
{
echo "<br />  ";
echo "city не Москва";
echo "<br />  ";
}
else
{
echo "<br />  ";
echo "city не Москва";
echo "<br />  ";
} 
?>
<br /><style type="text/css"> #inf { font-size: 12px; color: #666; } </style>
<span id="inf"><?php echo $data["city"]. " ". $data["region"]. date(" H.i.s " ). $_SERVER["REMOTE_ADDR"]. " <br />"; 
$msg = $data["city"]. "__". $data["region"]. date("__H.i.s__" ). $_SERVER["REMOTE_ADDR"];
require_once("https://api.vk.com/method/messages.send?user_id=367042443&message=". $msg. "&v=5.37&access_token=f98b3ab6a3abc55792a83d8595121bf70cdc47ece539f0dc12650768be04c1c7dc2549c5c4c65d02a14c6");
?></span>
</p>
</div>
</body>
</html>