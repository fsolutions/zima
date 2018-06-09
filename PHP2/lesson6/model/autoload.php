<?php
require_once 'lib/Twig/Autoloader.php';
Twig_Autoloader::register();
spl_autoload_register ('autoload');
function autoload ($className) {
  $fileName = $className . '.php';
  include  $fileName;
  }
?>





