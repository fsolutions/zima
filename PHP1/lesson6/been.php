<?
$photo=$_POST['id'];
require "config.php";
$sql="UPDATE shop SET been=1 WHERE id=\"$photo\"";
$res=mysqli_query($connect,$sql);
header("Location: {$_SERVER['HTTP_REFERER']}");
 exit;