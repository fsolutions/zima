<?
session_start();
$page="index";
require "model/autoload.php";
require "config.php";

$user=new Enter();
$user->Auth();
$item=new Order();

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
   $error=$item->addCart($_GET['id']);
}

if($_GET['buy']==true) {
  $number=$item->buy();
}

if($_GET['view']==true) {
    $view=true;
    $orders=$item->getOrder();
}

$delete=$_GET['del'];
$detele=$item->deletefromCart();
$been=$item->getCartCount();
$cart=$item->getCart();
$cartName=$cart[0];
$cartPrice=$cart[1];
$cartId=$cart[2];


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

$catalog=new Product();
if ($_GET['id']>0) {
     $product=$catalog->getProduct($_GET['id']); 
   } else {
         $product=$catalog->getProduct(false);
       }

$items=$product[0];
$price=$product[1];
$names=$product[2];
$id=$product[3];

try {
  $loader = new Twig_Loader_Filesystem('templates');

  $twig = new Twig_Environment($loader);

  $template = $twig->loadTemplate("$page.tmpl");

  echo $template->render(array (
    'items' => $items,
    'price' => $price,
    'names' => $names,
    'id' => $id,
     'number' => $number,
     'view' => $view
  ));

} catch (Exception $e) {
  die ('ERROR: ' . $e->getMessage());
}

require "templates/footer.php";
?>
