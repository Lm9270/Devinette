<?php

class view
{
    private $template; 

    public function __construct($template = null)
    {
        $this->template = $template;
    }

    public function render($params = array())
    {
        /* Option 1 
        foreach($params as $name => $value)
        {
            $$name = $value; 
        } */

        // Option 2 
        extract($params); // Créé devinette ou devinettes 
        
        $template = $this->template; 
        ob_start(); 
        include(VIEW.$template.'.php');
        $contentPage = ob_get_clean(); 

        include_once(VIEW.'_gabarit.php');
    }

    public function redirect($route)
    {
        header("Location: ".HOST.$route); 
        exit; 
    }
}