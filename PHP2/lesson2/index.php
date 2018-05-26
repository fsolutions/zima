<?php
// формируем массив
$items = array_diff(scandir(images,1), array('..', '.'));

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