<?php
include_once ROOT.'/models/News.php';
class NewsController {
    public function actionIndex() {
        $newsList = array();
        $newsList = News::getNewsList();
        echo "<pre>";
        print_r($newsList);
        echo "</pre>";
        require_once (ROOT.'/views/news/index.php');
        return true;
    }
    public function actionView($id) {
        if($id){
            $newsItem = News::getNewsItemById($id);
            echo "<pre>";
            print_r($newsItem);
            echo "</pre>";
        }
        echo 'actionView';
        return true;
        
    }
        // НОВЫЙ МЕТОД В КОНТРОЛЛЕРЕ
 
 
    public function actionAddnews(){
 
        $name = $_POST['title'];
        $post = $_POST['post'];
 
    News::addNews($name, $post);
    var_dump($post);
    }
    
}
