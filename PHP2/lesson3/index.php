<?php
require "lib/config.php";
echo $_GET['page'];
$set=$_GET['page']*3;
$sql = "select * from pics order by rate DESC LIMIT 3 OFFSET $set";
$res=mysqli_query($connect,$sql);

while ($data=mysqli_fetch_assoc($res)){
   $items[$i]=$data['max'];
   $i=$i+1;
}
include 'Twig/Autoloader.php';
Twig_Autoloader::register();

try {
  $loader = new Twig_Loader_Filesystem('templates');

  $twig = new Twig_Environment($loader);

  $template = $twig->loadTemplate('list.tmpl');

  echo $template->render(array (
    'items' => $items
  ));

} catch (Exception $e) {
  die ('ERROR: ' . $e->getMessage());
}
?>