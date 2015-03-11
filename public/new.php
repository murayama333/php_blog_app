<?php
require_once "../lib/com/example/blog/ArticleDao.php";
use com\example\blog\ArticleDao;

$dao = new ArticleDao();
$article = $dao->create();

$action = "create.php";
include("../partial/_form.php");