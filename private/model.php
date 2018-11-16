<?php

$host = '';
$user = '';
$pass = '';
$db = '';



function make_connection() {
    $mysqli = new mysqli($host, $user, $pass, $db);
    return $mysqli;
}


function get_articles() {
    $mysqli = make_connection();
    $query = "SELECT title FROM articles";
    $stmt = $mysqli->prepare($query) or die("Error preparing. 1");
    $stmt->bind_result($title) or die("Error binding results. 1");
    $stmt->execute() or die("Error executing. [1]");
    $results = array();
    while ($stmt->fetch()) {
        $results[] = $title;
    }
    return $results;
}

function get_some_articles() {
    global $pageno;
    $mysqli = make_connection();
    $firstrow = ($pageno -1) * ARTICLES_PER_PAGE;
    $per_page = ARTICLES_PER_PAGE;
    $query = "SELECT title, content, img FROM articles ORDER BY article_id DESC LIMIT $firstrow, $per_page";
    $stmt = $mysqli->prepare($query) or die("Error preparing. 1");
    $stmt->bind_result($title,$content, $img) or die("Error binding results. 1");
    $stmt->execute() or die("Error executing. [1]");
    $results = array();
    while ($stmt->fetch()) {
        $article = array();
        $article[] = $title;
        $article[] = $content;
        $fullimglink = "../public/img/" . $img;
        $article[] = $fullimglink;
        $results[] = $article;
    }
    return $results;
}

function calculate_pages() {
    $mysqli = make_connection();
    $query = "SELECT * from articles";
    $result = $mysqli->query($query) or die ('Error querying');
    $rows = $result->num_rows;
    $number_of_pages = ceil($rows / ARTICLES_PER_PAGE);
    return $number_of_pages;
}

function get_number_of_pages() {
    $number_of_pages = calculate_pages() or die("Error calculating [1]");
    return $number_of_pages;
}
