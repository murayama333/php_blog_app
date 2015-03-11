<?php
/**
 * Created by PhpStorm.
 * User: murayama
 * Date: 2015/03/07
 * Time: 18:41
 */

use com\example\blog\Article;
class ArticleTest extends PHPUnit_Framework_TestCase {

    public function test_properties_null(){
        $article = new Article();
        $this->assertNull($article->id);
        $this->assertNull($article->title);
        $this->assertNull($article->text);
    }

    public function test_properties_from_constructor(){
        $article = new Article(1, "a", "b");

        $this->assertEquals(1, $article->id);
        $this->assertEquals("a", $article->title);
        $this->assertEquals("b", $article->text);
    }
}
