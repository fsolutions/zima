<?
require "header.php";
require "config.php";
$photo=$_GET['photo'];
$sql="UPDATE shop SET rate=rate+1 WHERE id=\"$photo\"";
$res=mysqli_query($connect,$sql);
$sql= "SELECT * FROM shop WHERE id=\"$photo\"";
$res=mysqli_query($connect,$sql);
$data = mysqli_fetch_assoc($res);
$img=$data['max'];
$price=$data['price'];
$name=$data['name'];

echo "<div class=\"view\">
  <img src=\"$img\">
</div>
<div class=\"view\">
  <div class=\"txt\">
    <p>name:$name</p>
    <p>price: &euro;$price</p>
  </div>
  <div class=\"buy\">
  <form name=\"cart\" method=\"post\" action=\"been.php\">
  <input type=\"hidden\" name=\"cart\" value=\"1\">
  <input type=\"hidden\" name=\"id\" value=\"$photo\">
    <input type=\"submit\" class=\"yellowbutton\" value=\"BUY NOW\">
    </form>
     </div>
</div>";

$sql="UPDATE shop SET rate=rate+1 WHERE id=\"$photo\"";
$res=mysqli_query($connect,$sql);
echo "<div class=\"feedback\">
  <h2>Feedback</h2>";
$sql= "SELECT * FROM feed WHERE id=\"$photo\"";
$res=mysqli_query($connect,$sql);

while ($data=mysqli_fetch_assoc($res))
                  {
                    echo $data['name'];
                    echo ' ';
                    echo $data['text'];
                    echo "<br>";
                  }


 echo"<form name=\"test\" method=\"post\" action=\"feed.php\">
     <input type=\"hidden\" name=\"id\" value=\"$photo\">
  <p><b>Name</b><br>
   <input placeholder=\"\" name=\"name\" size=\"40\"></p>
  </p>
  <p>Feed<Br>
   <textarea name=\"comment\" cols=\"40\" rows=\"3\"></textarea></p>
  <p><input type=\"submit\" value=\"Send\">
   <input type=\"reset\" value=\"Clear\"></p>
 </form>
</div>";
require "footer.php";
?>

