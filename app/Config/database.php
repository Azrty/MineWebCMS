<?php
$_host = getenv('host');
$_database = getenv('database');
$_password = getenv('password');
$_login = getenv('login');
class DATABASE_CONFIG {

    public $default = array(
        'datasource' => 'Database/Mysql',
        'persistent' => false,
        'host' => $_host,
        'login' => $_login,
        'password' => $_password,
        'database' => $_database,
        'encoding' => 'utf8'
    );
}


