<?php


function homepage_action($smarty) {
    global $smarty;
    // MODEL
    $articles = get_articles();
    $smarty->assign('articles', $articles);
    // VIEWS
    $smarty->display('header.tpl');
    $smarty->display('navbar.tpl');
    $smarty->display('home.tpl');
    $smarty->display('footer.tpl');
}

function contact_action($smarty) {
    global $smarty;
    // MODEL

    // VIEWS
    $smarty->display('header.tpl');
    $smarty->display('navbar.tpl');
    $smarty->display("contact.tpl");
    $smarty->display('footer.tpl');
}


function upload_action($smarty) {
    global $smarty;
    // MODEL

    // VIEWS
    $smarty->display('header.tpl');
    $smarty->display('navbar.tpl');
    $smarty->display("upload.tpl");
    $smarty->display('footer.tpl');
}

function news_action($smarty) {
    global $smarty;
    global $pageno;
    // MODEL
    $articles = get_some_articles();
    $number_of_pages = get_number_of_pages();
    $smarty->assign('current_page', $pageno);
    $smarty->assign('number_of_pages', $number_of_pages);
    $smarty->assign('articles', $articles);
    // VIEWS
    $smarty->display('header.tpl');
    $smarty->display('navbar.tpl');
    $smarty->display('news.tpl');
    $smarty->display('footer.tpl');
}


function page_not_found_action($smarty) {
    global $smarty;
    // MODEL

    // VIEWS
    $smarty->display('header.tpl');
    $smarty->display('navbar.tpl');
    $smarty->display('notfound.tpl');
    $smarty->display('footer.tpl');
}
