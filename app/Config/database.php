<?php
class DATABASE_CONFIG {

    public $default = array(
        'datasource' => 'Database/Mysql',
        'persistent' => false,
        'host' => $_ENV["host"],
        'login' => $_ENV["login"],
        'password' => $_ENV["password"],
        'database' => $_ENV["database"],
        'encoding' => 'utf8',
    );
}


