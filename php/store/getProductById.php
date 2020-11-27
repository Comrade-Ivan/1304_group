<?
require_once("db.php");
$id = $_GET['id'];
$result = $mysqli->query("SELECT * FROM `products` WHERE `id`='$id'")->fetch_assoc();

if($result) {
  exit( json_encode($result) );
} else {
  exit( json_encode(["status" => "fail"]) );
}