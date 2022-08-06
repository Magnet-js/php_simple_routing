<?php
require_once("{$_SERVER['DOCUMENT_ROOT']}/router.php");

//Add your routing

get('/categories/$id', 'views/categorieFilter.php');



// Page Not Found | 404 Page 
// must be at the bottom
any('/404','404.php');