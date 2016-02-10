<?php


class Router {
    private $routes;
    
    public function __construct() {
        $routesPath = ROOT.'/config/routes.php';
        $this->routes = include($routesPath);
    }
    private function getURI() {
        if (!empty($_SERVER['REQUEST_URI'])) {
            $tmp = trim($_SERVER['REQUEST_URI'], '/'); 
            return substr($tmp, 17);//PHPStartInetShop/index.php convert to index.php
        }
    }
    
    public function run() {
        //var_dump($this->routes);
        //echo 'Class Router, method run';
        $uri = $this->getURI(); 
        //echo $uri;
        //var_dump( $this->routes);
        foreach ($this->routes as $uriPattern => $path) {
            //Сравниваем $uriPattern и $uri
            //echo $uriPattern."---->".$path.'<hr>';
            if(preg_match("~$uriPattern~", $uri)){
                // Определить какой контроллер и action обабатывают запрос
                $segments = explode('/', $path);
                $controllerName = array_shift($segments).'Controller';
                $controllerName = ucfirst($controllerName);
                $actionName = 'action'.ucfirst(array_shift($segments));
                //echo '<br>Класс: '.$controllerName;
                //echo '<br>Метод: '.$actionName;
            
        
            // подключаем файл класса-контроллера
            $controllerFile = ROOT.'/controllers/'.$controllerName.'.php';
            //echo "<hr>";
            //echo $controllerFile;
            if (file_exists($controllerFile)) {
                include_once($controllerFile);
            } //else {echo "NO FILE";}
            // Создаем объект, вызвать метод
            $controllerObject = new $controllerName;
            $result = $controllerObject->$actionName();
            if($result !=null) {
                break;
            }
            }
        }
    }
}
