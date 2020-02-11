<?php


class Singletone
{
    public static $instance;
    public static $settings =[];

    public static function instance()
    {
        self::$settings = include_once 'db_settings.php';
        if (self::$instance === null) {
            self::$instance = new DataBase(self::$settings);
        }
        return self::$instance;
    }

    public static function query($query){
        $db = self::instance();
        return $db->query($query);
    }

    private function __construct(){}
    private function __clone(){}
    private function __wakeup(){}
}

?>