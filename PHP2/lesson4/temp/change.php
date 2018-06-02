<?
require "config.php";
$name=$_POST['name'];
$price=$_POST['price'];
$max=$_POST['max'];
$edit=$_POST['edit'];
$editid=$_POST['id'];
echo $editid;
echo $edit;
echo $name;
echo $price;
print_r($_POST);

if ($edit==0) {
$sql = "select * from shop order by id DESC ";
$res=mysqli_query($connect,$sql);
   $res=mysqli_query($connect,$sql);
  $data=mysqli_fetch_assoc($res);
    $id=$data['id']+1;
   echo $id;
  $sql = "INSERT INTO `shop`(`id`,`name`,`price`) VALUES ('$id','$name','$price')";
  $res=mysqli_query($connect,$sql);

print_r($_POST);
print_r($_FILES);
if(isset($_FILES) && $_FILES['inputfile']['error'] == 0){ // Проверяем, загрузил ли пользователь файл
$destiation_dir = img .'/'.$_FILES['inputfile']['name']; // Директория для размещения файла
move_uploaded_file($_FILES['inputfile']['tmp_name'], $destiation_dir ); // Перемещаем файл в желаемую директорию
echo 'File Uploaded';
$a=$_FILES['inputfile']['name'];
echo $a;
$sql="UPDATE shop SET max='img/$a' WHERE id=\"$id\";";
$res=mysqli_query($connect,$sql);
} // Оповещаем пользователя об успешной загрузке файла
      else{
        echo 'No File Uploaded'; }// Оповещаем пользователя о том, что файл не был загружен}
 }



 else {
$sql="UPDATE shop SET name='$name' WHERE id=\"$editid\";";
$res=mysqli_query($connect,$sql);
$sql="UPDATE shop SET price='$price' WHERE id=\"$editid\";";
$res=mysqli_query($connect,$sql);
if(isset($_FILES) && $_FILES['inputfile']['error'] == 0){ // Проверяем, загрузил ли пользователь файл
$destiation_dir = img .'/'.$_FILES['inputfile']['name']; // Директория для размещения файла
move_uploaded_file($_FILES['inputfile']['tmp_name'], $destiation_dir ); // Перемещаем файл в желаемую директорию
echo 'File Uploaded';
$a=$_FILES['inputfile']['name'];
echo $a;
$sql="UPDATE shop SET max='img/$a' WHERE id=\"editid\";";
$res=mysqli_query($connect,$sql);
} // Оповещаем пользователя об успешной загрузке файла
      else{
        echo 'No File Uploaded'; }
}