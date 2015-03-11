<?php
require_once "../lib/com/example/blog/ArticleDao.php";
use com\example\blog\ArticleDao;

$id = $_POST["id"];
$title = $_POST["title"];
$text = $_POST["text"];

$dao = new ArticleDao();
$article = $dao->update($id, $title, $text);
include("../partial/_detail.php");
