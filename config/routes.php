<?php

return array (
    'news/add' => 'news/addnews',
    'test' => 'product/test',
    'news/([0-9]+)' => 'news/view/$1',
    'news' => 'news/index',
    //'news/([a-z]+)/([0-9]+)' => 'news/view/$1/$2',
    //'news' => 'news/index', //actionIndex in NewsController
    'products' => 'product/list', //actionList in ProductController
    
);

 