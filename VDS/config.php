<?php


include ('includes/security/antisql.php');

$dbname = "kn_online";
$dbuser = "ko";
$dbpass = "ko";

$conn = odbc_connect('Driver={SQL Server};Server=.;Database=kn_online','$dbuser','$dbpass');



/* KOPanel Genel Ayarlari */

$sitename 	= "site ad�"; /* �rnek :  knight.cakirhost.com  �eklinde */
$title		= "KnightOnline | Resmi Web Sitesi";
$slogan		= "KnightOnline";
$slogan1	= "";

$lunarwar	= "Belirlenmedi";
$deloswar	= "Belirlenmedi";



/* Tarih Ayarlar� (D�zenlemeyiniz!!!) */

date_default_timezone_set('Europe/Istanbul');
$todayh = getdate();
$d = $todayh[mday];
$m = $todayh[mon];
$y = $todayh[year];	
$date = $d."/".$m."/".$y;




?>