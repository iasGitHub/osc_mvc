<?php
class Connection 
{
    public static $connection = false;

    public function __construct()
    {

    }

    public static function connect($config)
    {
        try
        {
            if(!self::$connection)
            {
                /*$cnx = new PDO("mysql:host={$config['server']};dbname="{$config
                ['dbname']}", $config['dbuser'], $config['dbpass']);*/
                $cnx->setAttribute(\PDO::ATTR_ERRMODE_EXCEPTION);
                $cnx->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);
                self::$connection = $cnx;
                return self::$connection;
            }
        } catch (\PDOException $e)
        {
            echo $e->getMessae();
        }
    }
}

?>