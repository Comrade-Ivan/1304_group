<?php

$dbhost = "localhost";
$dbuser = "ivandp_1304"; //root
$dbpass = "GOev*3%L"; //root
$dbname = "ivandp_1304";
$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
$mysqli->set_charset("utf-8");

if ($mysqli->connect_error) {
  die("Не удалось подключиться к БД ".$mysqli->connect_error);
}