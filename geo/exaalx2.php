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

if ($data["city"]==="������" OR $data["region"]==="���������� �������") 
{
echo "<br />  ";
echo "city ������ ��� ���������� �������";
echo "<br />  ";
}	
else if  ($data["region"]==="�����-���������" OR $data["region"]==="������������� �������")
{
echo "<br />  ";
echo "�����-��������� ��� ������������� �������";
echo "<br />  ";
}
else
{
echo "<br />  ";
echo "city �� ������ � �� �����-��������� ��� ������������� �������";
echo "<br />  ";
}