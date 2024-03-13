<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Origin, Content-Type, Accept, Authorization');

class Route {

    public function add($route, $file){



        if(!empty($_REQUEST['uri'])){
            $route = preg_replace("/(^\/)|(\/$)/","",$route);
            $reqUri =  preg_replace("/(^\/)|(\/$)/","",$_REQUEST['uri']);
        }else{
            $reqUri = "/";
        }

        if($reqUri == $route ){
            

            //on match include the file. 
            include($file);

            //exit because route address matched.
            exit();
        }
        
    }
}

//Route instance
$route = new Route();

//route address and home.php file location
$route->add("/notes", "controller.php");

