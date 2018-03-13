<?php
error_reporting(E_ALL);
include_once("mysql.php");

$cfg = parse_ini_file("/opt/config.ini");
var_dump($cfg);
$db = new mysql($cfg['host'],$cfg['user'],$cfg['pwd'],$cfg['db']);

var_dump($db);