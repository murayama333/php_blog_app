<?php
require_once "../lib/com/example/blog/ArticleDao.php";
use com\example\blog\ArticleDao;

$title = $_POST["title"];
$text = $_POST["text"];

$dao = new ArticleDao();
$article = $dao->save($title, $text);

include("../partial/_detail.php");
