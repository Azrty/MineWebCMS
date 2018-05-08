<?php
class DATABASE_CONFIG {

    public $default = array(
        'datasource' => 'Database/Mysql',
        'persistent' => false,
        'host' => $ENV['HOST'],
        'login' => $ENV['LOGIN'],
        'password' => $ENV['PASSWORD'],
        'database' => $ENV['DATABASE'],
        'encoding' => 'utf8'
    );
}


