<?php

//

Class Routeur
{
    private $request; 

    private $routes = [ 
                            "home.html" => ['controller' => 'Home', 'method' => 'showHome'], 
                            "contact.html" => ['controller' => 'Home', 'method' => 'showContact'],
                            "create-devinette.html" => ['controller' => 'Home', 'method' => 'editDevinette'],
                            "ajout.html" => ['controller' => 'Home', 'method' => 'addDevinette'], 
                            "delete" => ['controller' => 'Home', 'method' => 'delDevinette'], 
                            "modification" => ['controller' => 'Home', 'method' => 'editDevinette'], 
                        ]; 

    public function __construct($request)
    {
        $this->request = $request; 
    }

    public function getRoute()
    {
        $elements = explode('/', $this->request);
        return $elements[0];
    }

    public function getParams()
    {

        $params = null; 

        // exctract GET params


        $elements = explode('/', $this->request); 
        unset($elements[0]); 

        for ($i = 1; $i < count($elements); $i++)
        {
            $params[$elements[$i]] = $elements[$i + 1]; 
            $i++; 
        }

        // exctract POST params 

        if ($_POST)
        {
            foreach($_POST as $key => $val)
            {
                $params[$key] = $val; 
            }
        }


        return $params; 
    }

    public function renderController()
    {

        $route = $this->getRoute(); 
        $params = $this->getParams(); 

        if (key_exists($route, $this->routes))
        {
            $controller = $this->routes[$route]['controller']; 
            $method = $this->routes[$route]['method']; 
            
            $currentController = new $controller(); 
            $currentController->$method($params);
        } else {
            echo '404'; 
        }

    }
}