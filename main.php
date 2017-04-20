<?php
require_once 'helpers/Layout.php';
require_once 'config.php';

$page = $_GET['page'];
$pageConfig = $pages[$page];

$rshopLayout = new Layout();

$rshopLayout->setLayout($pageConfig['layout']);
$rshopLayout->setTemplate($pageConfig['template']);

echo $rshopLayout->__toString();