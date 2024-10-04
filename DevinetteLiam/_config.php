<?php
/*** configuration *****/
ini_set('display_errors','on');
error_reporting(E_ALL);


class MyAutoLoad
{



    public static function start()
    {
        $root = $_SERVER['DOCUMENT_ROOT'];
        $host = $_SERVER['HTTP_HOST']; 

        define('HOST', 'http://'.$host.'/Devinette/'); 
        define('ROOT', $root.'/Devinette/');

        define('CONTROLLER', ROOT.'controller/');
        define('VIEW', ROOT.'view/');
        define('MODEL', ROOT.'model/');
        define('CLASSES', ROOT.'classes/'); 

        define('ASSETS', HOST.'assets/');   

    }

    public static function autoLoad($class)
    {
        if(file_exists(MODEL.$class.'.php'))
        {
            include_once(MODEL.$class.'.php');
        } else if (file_exists(CLASSES.$class.'.php'))
        {
            include_once(CLASSES.$class.'.php');
        } else if (file_exists(CONTROLLER.$class.'.php'))
        {
            include_once(CONTROLLER.$class.'.php'); 
        }
    }
}

spl_autoload_register(array('MyAutoLoad', 'autoload')); 




