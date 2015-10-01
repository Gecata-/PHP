<?php
/**
 * Created by PhpStorm.
 * User: gdimitrov
 * Date: 1.10.2015 ã.
 * Time: 13:11 ÷.
 */

namespace GF;


final class Loader
{
    private static $namespace = array();

    private function __construct()
    {

    }

    public static function registerAutoload()
    {
        spl_autoload_register(array('\GF\Loader', 'autoload'));
    }

    public static function autoload($class)
    {
        echo $class;
    }

    public static function registerNamespace($namespace, $path)
    {
        $namespace = trim($namespace);
        if (strlen($namespace) > 0) {
            if (!$path) {
                //TODO
                throw new \Exception('invalid path');
            }
            $_path = realpath($path);
            if ($_path && is_dir($_path) && is_readable($_path)) {
                self::$namespace[$namespace] = $_path . DIRECTORY_SEPARATOR;
            } else {
                //TODO
                throw new \Exception('Nmespace directory read error'.$path);
            }
        }else{
            //TODO
            throw new \Exception('Invalid namespace'.$namespace);
        }
    }
}