<html>
<body>
<form action="<?= $action ?>" method="post">
    <?php
        if($article->id != null){
            echo "<input type=\"hidden\" name=\"id\" value=\"$article->id\" />";
        }
    ?>
    <input type="text" name="title" value="<?= $article->title ?>"/><br>
    <input type="text" name="text" value="<?= $article->text ?>"/><br>
    <input type="submit"/>
</form>
</body>
</html>
