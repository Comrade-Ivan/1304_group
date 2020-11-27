<?
require_once("db.php");
$result = $mysqli->query("SELECT * FROM `products` WHERE 1");
for($products = []; $row = $result->fetch_assoc(); $products[] = $row);
exit( json_encode($products) );