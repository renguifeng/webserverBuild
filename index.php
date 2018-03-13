<?php

include_once("mysql.php");

$cfg = parse_ini_file("/opt/config.ini");

$db = new mysql($cfg['host'],$cfg['user'],$cfg['pwd'],$cfg['db']);

var_dump($db);