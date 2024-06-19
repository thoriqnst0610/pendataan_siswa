<?php

namespace database {

    class connection
    {

        static function gas(): \PDO
        {
            $host = "localhost";
            $port = 3306;
            $database = "pertama";
            $username = "root";
            $password = "root";

            return new \PDO("mysql:host=$host:$port;dbname=$database", $username, $password);
        }

    }

}
