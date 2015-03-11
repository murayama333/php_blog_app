<?php
namespace com\example\blog;
require_once "Article.php";

class ArticleDao {

    private $FILE_NAME = "/Users/murayama/PhpstormProjects/untitled2/articles.csv";

    public function findAll(){
        return $this->load();
    }

    public function find($id)
    {
        $articles = array_filter($this->load(), function($e)use(&$id) {return $e->id == $id;});
        return array_shift($articles);
    }

    public function create()
    {
        return new Article();
    }


    public function save($title, $text)
    {
        $id = $this->getNextId();
        $article = new Article($id, $title, $text);
        $articles = $this->load();
        array_push($articles, $article);
        $this->store($articles);
        return $article;
    }

    public function update($id, $title, $text)
    {
        $articles = array_map(function($article) use($id, $title, $text){
            if($article->id == $id){
                $article->title = $title;
                $article->text = $text;
            }
            return $article;
        }, $this->load());
        $this->store($articles);
        // filter
        return $this->find($id);
    }

    public function delete($id)
    {
        $articles = array_filter($this->load(), function($e)use(&$id) {return $e->id != $id;});
        $this->store($articles);
    }


    private function store($articles){
        $data = implode(PHP_EOL, $articles);
        file_put_contents($this->FILE_NAME, $data);
    }

    private function load(){
        $data = file_get_contents($this->FILE_NAME);

        $lines = explode(PHP_EOL, $data);
        var_dump($lines);
        return array_map(function($line){
                        $cells = explode(",", $line);
                        return new Article($cells[0], $cells[1], $cells[2]);
                    }, $lines);
    }

    private function getNextId(){
        return count($this->load()) + 1;
    }

}