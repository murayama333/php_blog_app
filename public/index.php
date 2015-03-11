<?php
require_once "../lib/com/example/blog/ArticleDao.php";
use com\example\blog\ArticleDao;

$dao = new ArticleDao();
$articles = $dao->findAll();
?>
<html>
<body>
<?php foreach($articles as $article){ ?>
    <li>
        <a href="show.php?id=<?= $article->id ?>"><?= htmlspecialchars("$article->title") ?></a>
        <a href="edit.php?id=<?= $article->id ?>">edit</a>
        <a href="delete.php?id=<?= $article->id ?>">delete</a>
    </li>
<?php } ?>
<hr>
<a href="new.php">new</a>
</body>
</html>
