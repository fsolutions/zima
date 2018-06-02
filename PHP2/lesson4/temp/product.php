<?
require "config.php";
$product=$_GET['product'];
$action=$_GET['action'];
$sql= "SELECT * FROM shop WHERE id=\"$product\"";
$res=mysqli_query($connect,$sql);
$data = mysqli_fetch_assoc($res);
$name=$data['name'];
$price=$data['price'];
$img=$data['max'];

if ($action=='edit'){
	echo "<img src=\"$img\">";
	echo "<form method=\"post\" action=\"change.php\" enctype=\"multipart/form-data\">";
   echo "<p><input placeholder=\"$name\" name=\"name\"></p>";
   echo "<p><input placeholder=\"$price\" name=\"price\"></p>";
echo "<label for=\"inputfile\">Upload File</label>
<input type=\"file\" id=\"inputfile\" name=\"inputfile\"></br>
<input type=\"submit\" value=\"edit\">
 <input type=\"hidden\" name=\"edit\" value=\"1\">
 <input type=\"hidden\" name=\"id\" value=\"$product\">
</form>";
}
if ($action==1) {
echo "<form method=\"post\" action=\"change.php\" enctype=\"multipart/form-data\">";
   echo "<p><input placeholder=\"Product name\" name=\"name\"></p>";
   echo "<p><input placeholder=\"Price\" name=\"price\"></p>";
echo "<label for=\"inputfile\">Upload File</label>
<input type=\"file\" id=\"inputfile\" name=\"inputfile\"></br>
<input type=\"hidden\" name=\"edit\" value=\"0\">
<input type=\"submit\" value=\"add\">
</form>";
} elseif ($action=='del'){
	$sql = "DELETE FROM `shop` WHERE `shop`.`id` = $product;";
    $res=mysqli_query($connect,$sql);
    echo "delete";
}
?>

