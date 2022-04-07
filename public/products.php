<?php

// Get a $twig object from this file.
require_once __DIR__ . '/../config/twig.php';

$products = ['nouilles', 'sauce soja', 'épinards', 'vin de riz', 'boeuf', 'sauce ail-piment', 'concentré de tomate'];

echo $twig->render('products.html.twig', ['products' => $products]);