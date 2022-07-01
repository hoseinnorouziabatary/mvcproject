<?php namespace Core ;

class Router
{
#,fg
    protected $routes = [] ;
    protected $params =[] ;

    public function add($route , $action){
        $route= preg_replace( '/^\//', '' , $route);
        $route= preg_replace( '/\//', '\\/' , $route);
        $route=preg_replace('/\{([a-z]+)\}/', '(?<\1>[a-z0-9-]+)', $route);
        $route = '/^' . $route . '\/?$/i';
      $action = is_array($action)? $action['uses'] : $action ;

      list($params['controller'] , $params['method']) = explode('@',$action);
       $this->routes[$route] = $params;
    }
    public function getRoutes(){
        return $this->routes;
    }

    public function match ($url){
        foreach ($this->routes as $route => $params){
            if (preg_match($route,$url , $matches)){
                foreach ($matches as $key => $match){
                    if (is_string($key)){
                        $params[$key]=$match;
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
}