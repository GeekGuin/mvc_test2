<?php
require_once('template.php');
$view = new Template();

$view->title = "hello, world";
$view->links = array("one", "two", "three");
$view->body = "Hi, sup lil nigga";

$view->content = $view->render('content.php');
echo $view->render('main.php');
?>