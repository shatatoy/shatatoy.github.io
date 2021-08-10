<?php
// файл создан на случай перегруза основного аккаунта openexchangerates. Это второй аккаунт от сайта unsupervise.ru
date_default_timezone_set('Europe/Moscow');

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

$date007k = date("d.m.Y");
// если запрос позавчера -> будущее(!), то кэш 30 минут, если на давнее число - кэш 100 часов
$date1dk = $date007k;
// расчленяем дату 1990-1995 1996-2000 2001-2005 2006-2010 2011-2015
$chislo2k = substr($date1dk, 0, 2);
$mes2k = substr($date1dk, 3, 2);
$god12k = substr($date1dk, 6, 4);
// mktime - преобразовывает строки и числа в формат дата:
$tekh = date("H");
$tekm = date("i");
$teks = date("s");

//сколько будет секунд в time() без сейчашних 22ч 30м 23сек ( часы минуты и секунды от полуночи )
$hmsfloat = (float) mktime($tekh, $tekm, $teks, 1, 1, 1970);
$gettimefloat = (float) mktime(0, 0, 0, $mes2k, $chislo2k, $god12k);
// часы минуты и секунды от полуночи минус 3 часа - 10805
$tektimex = time() - $hmsfloat - 10805;

function get_and_write($url, $cache_file) {
	$string = file_get_contents($url);
	$f = fopen($cache_file, 'w');
	fwrite($f, $string, strlen($string));
	fclose($f);
	$openexch = 'openexchange.json';
	if (!file_exists($openexch)) file_put_contents($openexch, ' ');
	$f2 = fopen($openexch, 'w');
	fwrite($f2, $string, strlen($string));
	fclose($f2);
	return $string;
}

function read_content($path) {
	$f = fopen($path, 'r');
	$buffer = '';
	while (!feof($f)) {
		$buffer .= fread($f, 2048);
	}
	fclose($f);
	return $buffer;
}



if ($gettimefloat >= $tektimex) {
	$god5 = "/var/www/kurs-dollara.net/cache2/" . date("Y");
	$mes7 = $god5 . "/" . date("m");
	$day7 = $god5 . "/" . date("m") . "/" . date("d");

	if (!is_dir($god5)) mkdir($god5, 0755);
	if (!is_dir($mes7)) mkdir($mes7, 0755);
	if (!is_dir($day7)) mkdir($day7, 0755);

	$cache_file = $day7 . "/" . date("d-m-Y.H") . ".json";
	$url = "https://openexchangerates.org/api/latest.json?app_id=3d3fb1dc44974efb8871c07a6b5f8c75&show_alternative=1";
}

// лог размера файла
// file_put_contents('/var/www/kurs-dollara.net/cache2/all_records.log', date('[Y-m-d H:i:s] ') . print_r($cache_file.', байт: '.filesize($cache_file), true) . PHP_EOL, FILE_APPEND | LOCK_EX ); 
file_put_contents('/var/www/kurs-dollara.net/cache2/all_records.log', date('[Y-m-d H:i:s] ') . print_r('байт: '.filesize($cache_file), true) . PHP_EOL, FILE_APPEND | LOCK_EX ); 
 
if ($gettimefloat >= $tektimex) {
	// нету файла? создать новый кэш файл при условии
	if (!file_exists($cache_file)) {
// Если 05 минут (выдача гдето в 01)
		if (date("i") > 03) {
			$html = get_and_write($url, $cache_file);
		}
	}
	else {

		if(date("H") % 2 === 0) $timed_file = "/var/www/unsupervise.ru/timed2.key";
		else $timed_file = "/var/www/unsupervise.ru/timed1.key";

			
		// if (filesize($cache_file) < 1000 and time() - filemtime($timed_file) > 2000) {
		if (!file_exists($timed_file) or time() - filemtime($timed_file) > 2000) {
			get_and_write($url, $cache_file);
			file_put_contents($timed_file, " ");
		}
	}
}

// if (true or 1 == 2) echo "хай все окей";

?>