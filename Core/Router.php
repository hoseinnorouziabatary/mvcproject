<?php namespace Core ;

class Router
{
    protected $routes = [] ;
    protected $params =[] ;
    protected $namespace = 'App\Controllers\\';

    public function add($route , $action){
        $route= preg_replace( '/^\//', '' , $route);
        $route= preg_replace( '/\//', '\\/' , $route);
        $route=preg_replace('/\{([a-z]+)\}/', '(?<\1>[a-z0-9-]+)', $route);
        $route = '/^' . $route . '\/?$/i';
      $action = is_array($action)? $action['uses'] : $action ;

      list($params['controller'] , $params['method']) = explode('@',$action);
       $this->routes[$route] = $params;
    }
    public function dispatch($url){

        $url = $this->removeVariblesOfQueryString($url);
        if ($this->match($url)){
            $controller= $this->params['controller'];
            $controller = $this->namespace . $controller ;
            if (class_exists($controller)){
                $controller_object= new $controller;
                $method = $this->params['method'];
                if(is_callable([$controller_object , $method])){
                    echo call_user_func_array([$controller_object,$method],$this->params['params']);
                }else{
                    die("method {$method} (in controller {$controller}) not found");
                }

            }else{
                die("controller class {$controller} not found");
            }



        }else{
            die("no route matched");
        }
    }
    public function getRoutes(){
        return $this->routes;
    }

    public function match ($url){
        foreach ($this->routes as $route => $params){
            if (preg_match($route,$url , $matches)){
                foreach ($matches as $key => $match){
                    if (is_string($key)){
                        $params['params'][$key]=$match;
                    }
                }
                $this->params = $params ;
                return true;
            }
        }
        return  false;
    }
    public function getParams(){
        return $this->params;
    }
    protected function removeVariblesOfQueryString($url){
        if ($url != ''){
            $parts = explode("&", $url,2);
            if (strpos($parts[0] , '=') === false){
                $url = $parts[0];
            }else{
                $url = '';
            }
            return $url;
        }
    }
}