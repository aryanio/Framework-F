<?php include ('fruit.php');
header('Content-Type: text/html; charset=' . Fruit_config::$mbencoding);
echo Fruit::get_requested_instance();
