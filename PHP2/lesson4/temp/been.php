<?
session_start();
$photo=$_POST['id'];
require "config.php";
$sql= "SELECT * FROM shop WHERE id=\"$photo\"";
$res=mysqli_query($connect,$sql);
while ($data=mysqli_fetch_assoc($res))
                  {
                   $name=$data['name'];
                   $price=$data['price'];
                   $id=$data['id'];
                  }
$login=$_SESSION["login"];
$sql = "INSERT INTO `cart`(`id`,`name`,`login`,`price`,`col`) VALUES ('$id','$name','$login','$price','1')";
$res=mysqli_query($connect,$sql);
header("Location: {$_SERVER['HTTP_REFERER']}");
exit;