<?php

// Author: Daan Hansen

require('private/smarty/Smarty.class.php');
require("private/model.php");
require('private/controller.php');

$smarty = new Smarty();
$smarty->setCompileDir('private/tmp');
$smarty->setTemplateDir('private/views');

define('ARTICLES_PER_PAGE', 5);

// ternary operator:



// $var = vraag isdatzo? ZoJaWatIsWaarde : ZoNeeDoeDit;
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
$pageno = isset($_GET['pageno']) ? $_GET['pageno'] : '1';







switch ($page) {
    case 'home' : homepage_action($smarty); break;
    case 'contact' : contact_action($smarty); break;
    case 'news' : news_action($smarty); break;
    case 'upload' : upload_action($smarty); break;
    default: page_not_found_action($smarty); break;
}