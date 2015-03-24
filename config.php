<?php

/*---------------------------------------------------------------------------------
	konfigurasi database
---------------------------------------------------------------------------------*/
$mysql_user = 'root';
$mysql_password = '';
$mysql_database = 'tugas_web';
$mysql_host = 'localhost';

$connect = mysql_connect($mysql_host,$mysql_user,$mysql_password);
$select = mysql_select_db($mysql_database);


