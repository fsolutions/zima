<?
 require 'config.php';
  $id=$_POST['id'];
  $name=$_POST['name'];
  $text=$_POST['comment'];
  $sql = "INSERT INTO `feed`(`id`,`name`,`text`) VALUES ('$id','$name','$text')";
  $res=mysqli_query($connect,$sql);

header("Location: {$_SERVER['HTTP_REFERER']}");
exit;