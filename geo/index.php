<!doctype html>
<html lang="ru">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
<span id="inf"><?php echo $data["city"]. " ". $data["region"]. date(" H.i.s " ). $_SERVER["REMOTE_ADDR"]; ?></span>
</p>
</div>
</body>
</html>