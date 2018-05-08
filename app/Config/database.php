<?php
class DATABASE_CONFIG {

    public $default = array(
        'datasource' => 'Database/Mysql',
        'persistent' => false,
        'host' => $_ENV['HOST'],
        'login' => $_ENV['LOGIN'],
        'password' => $_ENV['PASSWORD'],
        'database' => $_ENV['DATABASE'],
        'encoding' => 'utf8'
    );
}


