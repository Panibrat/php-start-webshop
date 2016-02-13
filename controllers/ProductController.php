<?php
include_once ROOT.'/models/News.php';

class ProductController {
    public function actionList() {
        echo 'ProductController actionList';
        return true;
    }
    public function actionTest() {
        //echo '<hr>ProductController actionTest';
        
        $newsList = News::getNewsList();
       /*echo"<pre>";
        var_dump($newsList);
        echo "</pre>";*/
        include (ROOT.'/views/news/index.php');
        return true;
    }
}
