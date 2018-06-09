<?
class Product {
function getProduct($id)
{ 
require "config.php";
if ($id==false) 	
{
	$set=$_GET['list']*3;
$sql = "select * from shop order by rate DESC LIMIT 3 OFFSET $set";
$res=mysqli_query($connect,$sql);
  $i=0;
while ($data=mysqli_fetch_assoc($res)){
   $items[$i]=$data['max'];
   $price[$i]=$data['price'];
   $names[$i]=$data['name'];
   $id[$i]=$data['id'];
   $i=$i+1;
}
}
else {
$sql= "SELECT * FROM shop WHERE id=$id";
$res=mysqli_query($connect,$sql);
$data = mysqli_fetch_assoc($res);
$items=$data['max'];
$price=$data['price'];
$names=$data['name'];
$id=$data['id'];
}
return array($items,$price,$names,$id);
}
}
