<?php
class DATABASE_CONFIG {

    public $default = array(
        'datasource' => 'Database/Mysql',
        'persistent' => false,
        'host' => ENV["host"],
        'login' => ENV["login"],
        'password' => ENV["password"],
        'database' => ENV["database"],
        'encoding' => 'utf8'
    );
}


