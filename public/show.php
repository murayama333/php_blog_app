<?php
require_once "../lib/com/example/blog/ArticleDao.php";
use com\example\blog\ArticleDao;

$id = $_GET["id"];
$dao = new ArticleDao();
$article = $dao->find($id);

include("../partial/_detail.php");


