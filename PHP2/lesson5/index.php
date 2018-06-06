<?
session_start();
$page="index";
require "lib/config.php";
include 'Twig/Autoloader.php';
include 'model/catalog.php';
include 'model/auth.php';
include 'model/order.php';



$error=Auth();

if ($_GET['exit']==true){
    $_SESSION['auth']=false;
    session_destroy();
  }

$auth=$_SESSION["auth"];
$login=$_SESSION["login"];


if ($_GET['page']==false)
{
   $page="index";
 }
  else{
   $page=$_GET['page'];
};

if ($auth==true)
{
 $firstline=$login;
 $twoline="Exit";
} else
{
$firstline="Log in";
$twoline="Registration";
}

if($_GET['cart']==true) {
   $error=addCart($_GET['id']);
}

$been=getCartCount();
$cart=getCart();
$cartName=$cart[0];
$cartPrice=$cart[1];
$cartId=$cart[2];
Twig_Autoloader::register();
try {
  $loader = new Twig_Loader_Filesystem('templates');

  $twig = new Twig_Environment($loader);

  $template = $twig->loadTemplate('header.tmpl');

  echo $template->render(array (
    'firstline' => $firstline,
    'twoline' => $twoline,
    'auth' => $auth,
    'been' => $been,
    'login' => $login,
    'cartName' => $cartName,
    'cartPrice' => $cartPrice,
    'cartId' => $cartId
  ));

} catch (Exception $e) {
  die ('ERROR: ' . $e->getMessage());
}


if ($_GET['id']>0) {
     $product=getProduct($_GET['id']); 
   } else {

$product=getProducts();
}
$items=$product[0];
$price=$product[1];
$names=$product[2];
$id=$product[3];


Twig_Autoloader::register();
try {
  $loader = new Twig_Loader_Filesystem('templates');

  $twig = new Twig_Environment($loader);

  $template = $twig->loadTemplate("$page.tmpl");

  echo $template->render(array (
    'items' => $items,
    'price' => $price,
    'names' => $names,
    'id' => $id
  ));

} catch (Exception $e) {
  die ('ERROR: ' . $e->getMessage());
}

require "templates/footer.php";
?>
