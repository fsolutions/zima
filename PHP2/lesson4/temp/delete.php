<?
session_start();
require 'config.php';
print_r ($_POST);
$del=$_POST['del'];
echo $del[0];
$login=$_POST['user'];
echo $login;
$sql= "DELETE FROM cart WHERE `id` = '$del[0]' AND `login` = '$login' ";
echo $sql;
//$sql = "DELETE FROM `shop` WHERE `shop`.`id` = $product;";
$res=mysqli_query($connect,$sql);
    echo "delete";
$today = date("m.d.y");  
$sql = "INSERT INTO `buy`(`login`,`name`,`id`,`col`,`date`) VALUES ('$login','$name','$id','$col','$today')";
  $res=mysqli_query($connect,$sql);