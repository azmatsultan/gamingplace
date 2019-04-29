<?php require_once 'core/ini.php';

$product = new Product;

$product_id = $_GET['id'];



// Get template
$template = new Template('templates/details.php');

//Get Vars
$template->product = $product->getProduct($product_id);


//Display template
echo $template;
