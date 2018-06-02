<?
session_start();
require "lib/config.php";
include 'Twig/Autoloader.php';
$auth=$_SESSION["auth"];
$login=$_SESSION["login"];
if ($auth==true)
{
 $firstline=$login;
 $twoline="Exit";
} else
{
$firstline="Log in";
$twoline="Registration";
}

Twig_Autoloader::register();
try {
  $loader = new Twig_Loader_Filesystem('templates');

  $twig = new Twig_Environment($loader);

  $template = $twig->loadTemplate('header.tmpl');

  echo $template->render(array (
    'firstline' => $firstline,
    'twoline' => $twoline,
    'auth' => $auth
  ));

} catch (Exception $e) {
  die ('ERROR: ' . $e->getMessage());
}


echo $_GET['page'];
$set=$_GET['page']*3;
$sql = "select * from shop order by rate DESC LIMIT 3 OFFSET $set";
$res=mysqli_query($connect,$sql);

while ($data=mysqli_fetch_assoc($res)){
   $items[$i]=$data['max'];
   $i=$i+1;
}

Twig_Autoloader::register();
try {
  $loader = new Twig_Loader_Filesystem('templates');

  $twig = new Twig_Environment($loader);

  $template = $twig->loadTemplate('product.tmpl');

  echo $template->render(array (
    'items' => $items
  ));

} catch (Exception $e) {
  die ('ERROR: ' . $e->getMessage());
}

require "templates/footer.php";
?>
