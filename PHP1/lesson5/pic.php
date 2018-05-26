<?
require "config.php";
$photo=$_GET['photo'];
$sql="UPDATE pics SET rate=rate+1 WHERE id=\"$photo\"";
$res=mysqli_query($connect,$sql);
$sql= "SELECT * FROM pics WHERE id=\"$photo\"";
$res=mysqli_query($connect,$sql);
$data = mysqli_fetch_assoc($res);
$a=$data['max'];
echo "<img src=\"$a\">";
echo "</br>";
echo "Фотография просмотрена ";
echo $data['rate']," раз";



$sql="UPDATE pics SET rate=rate+1 WHERE id=\"$photo\"";