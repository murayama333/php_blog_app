<?php
require_once "../lib/com/example/blog/ArticleDao.php";
use com\example\blog\ArticleDao;

$id = $_GET["id"];
$dao = new ArticleDao();
$dao->delete($id);

header("Location: index.php");
