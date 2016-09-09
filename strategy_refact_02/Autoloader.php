<?php
/**
* Copyright Gabriel Nicolás González Ferreira <gabrielinuz@gmail.com>
* and Felipe Evans <fevans@gmail.com>  
* This file is part of classset-php.
* Released under the GPL3 license
* https://opensource.org/licenses/GPL-3.0
**/
    
class Autoloader
{
    private static $_loader;
    
    public static function init()
    {
        if (!(self::$_loader instanceof self))
        {
            self::$_loader=new self();
        }
        return self::$_loader;
    }

    private function __construct()
    {
        /*** nullify any existing autoloads ***/
        spl_autoload_register(null, false);
 
        /*** specify extensions that may be loaded ***/
        spl_autoload_extensions('.php, .class.php');

        /*** register the loader functions ***/
        spl_autoload_register( array($this, 'loadClasses') );
    }

    //to_prevent cloned:
    private function __clone()
    {
        trigger_error
        (
            'Invalid Operation: You cannot clone an instance of '
            . get_class($this) ." class.", E_USER_ERROR 
        );
    }

    //to prevent deserialization:
    private function __wakeup()
    {
        trigger_error
        (
            'Invalid Operation: You cannot deserialize an instance of '
            . get_class($this) ." class."
        );
    }
 
    /*** class Loaders ***/
    private function loadClasses($class)
    {
        $filename = $class . '.php';
        if (file_exists($filename))
        {
            require_once $filename;
        }
    }
}
?>