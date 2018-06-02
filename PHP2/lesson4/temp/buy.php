<?
session_start();
$fname=$_POST['first_name'];
$lname=$_POST['last_name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$edit=$_POST['log'];
$exit=$_GET['exit'];
$view=$_GET['orders'];
require 'config.php';
$del=$_POST['del'];
$login=$_POST['user'];
$sql= "DELETE FROM cart WHERE `id` = '$del[0]' AND `login` = '$login' ";
$res=mysqli_query($connect,$sql);
$sql = "select * from buy order by number DESC ";
$res=mysqli_query($connect,$sql);
$data=mysqli_fetch_assoc($res);
$number=$data['number']+1;

$sql= "SELECT * FROM cart WHERE login=\"$login\"";
                 $res=mysqli_query($connect,$sql);
                while ($data=mysqli_fetch_assoc($res))
                {
                	$login=$_SESSION["login"];
                	$name=$data['name'];
                	$id=$data['id'];
                	$col=$data['col'];
                	$today = date("m.d.y"); 
                    $sql = "INSERT INTO `buy`(`number`,`login`,`name`,`id`,`col`,`first_name`,`last_name`,`email`,`phone`,`date`) VALUES ('$number','$login','$name','$id','$col','$fname','$lname','$email','$phone','$today')";
                    $re1=mysqli_query($connect,$sql);
                }

$sql= "DELETE FROM cart WHERE `login` = '$login' ";
$res=mysqli_query($connect,$sql);
header('Location: index.php'); 