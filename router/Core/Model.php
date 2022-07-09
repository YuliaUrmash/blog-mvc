<?php
namespace Core;

use Config\Config;
use PDO;

abstract class Model
{
    protected static PDO|null $connect = null;

<<<<<<< HEAD
    protected static function connect()
=======
    protected static function connect(): ?PDO
>>>>>>> a77e39995dacaa077c2469e4ce1775375cfbdf39
    {
        if (is_null(static::$connect)) {
            $dsn = 'mysql:host=' . Config::get('db.host') . ';dbname=' . Config::get('db.database');
            $options = [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];
            self::$connect = new PDO(
                $dsn,
                Config::get('db.user'),
                Config::get('db.password'),
                $options
            );
            self::$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

        return self::$connect;
    }
}