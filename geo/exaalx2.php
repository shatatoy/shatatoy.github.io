<?php
require_once("ipgeobase.php");
$gb = new IPGeoBase();
$ip = $_SERVER["REMOTE_ADDR"];
echo "<br />  ";
echo $ip;
echo "<br />  ";
$data = $gb->getRecord('89.208.96.0');
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
echo "Санкт-Петербург или Ленинградская область";
echo "<br />  ";
}
else
{
echo "<br />  ";
echo "city не Москва и не Санкт-Петербург или Ленинградская область";
echo "<br />  ";
}