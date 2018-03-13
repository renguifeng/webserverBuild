<?php
error_reporting(E_ALL);
include_once("mysql.php");

$cfg = parse_ini_file("/opt/config.ini");
var_dump($cfg);
$db = new mysql($cfg['host'],$cfg['user'],$cfg['pwd'],$cfg['db']);

$sql = "select * from web_user";
$db->query($sql);
$row = $db->fetchAll();
var_dump($row);