
<!-- <script>document.write('<script src="http://' + (location.host || '${1:localhost}').split(':')[0] + ':${2:35729}/livereload.js?snipver=1"></' + 'script>')</script> -->
<!-- <script>document.write('<script src="http://' + (location.host || '${1:localhost}').split(':')[0] + ':${2:8000}/livereload.js?snipver=1"></' + 'script>')</script> -->
<?php 


// echo "string \n";
echo " 
\n";
// echo $_SERVER['DOCUMENT_ROOT'];
echo "SERVER DOCUMENT_ROOT ".$_SERVER['DOCUMENT_ROOT']." \n <br>";
echo " 
\n";

// ..Узнать как стоит php, как модуль Апачи или CGI
echo "Узнать как стоит php, как модуль Апачи или CGI или FastCGI (cgi-fcgi).\n php стоит как - \n ";
$sapi = php_sapi_name();
echo $sapi;

$w = stream_get_wrappers();
echo '<br />phpdbg_webhelper: ',  extension_loaded  ('openssl') ? 'yes':'no', "\n";
echo '<br />openssl: ',  extension_loaded  ('openssl') ? 'yes':'no', "\n";
echo '<br />http wrapper: ', in_array('http', $w) ? 'yes':'no', "\n";
echo '<br />https wrapper: ', in_array('https', $w) ? 'yes':'no', "\n";
echo '<br />wrappers: ', var_dump($w);

// php --ini в командной строке - проверь где 
echo '<br />русский только в php штоль 44434<br />'; 
// и в 'Server API':

echo '<br />server internal encoding setup in php.ini: ';
//проверить установки коировки в php.ini
echo mb_internal_encoding(); // UTF-8 или Windows-1251
echo '<br />';
	
phpinfo();
?>