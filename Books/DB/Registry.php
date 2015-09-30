<?php

/**
 * Created by PhpStorm.
 * User: gdimitrov
 * Date: 30.9.2015 ã.
 * Time: 14:32 ÷.
 */

/**
 * Class Registry
 */
class Registry
{
    public $data = [];
    private static $instance = null;

    private function __construct()
    {
    }

    public function __set($name, $val){
        $this->data[$name] = $val;
    }

    public function __get($name){
       return $this->data[$name];
    }

    /**
     * @return null|Registry
     */
    public static function getRegistry()
    {
        if (self::$instance == null) {
            self::$instance = new Registry();
        }
        return self::$instance;
    }
}