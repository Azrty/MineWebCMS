<?php
$_dbhost = getenv('host');
$_dbdatabase = getenv('database');
$_dbpassword = getenv('password');
$_dblogin = getenv('login');
class DATABASE_CONFIG {

    public $default = array(
        'datasource' => 'Database/Mysql',
        'persistent' => false,
        'host' => $_dbhost,
        'login' => $_dblogin,
        'password' => $_dbpassword,
        'database' => $_dbdatabase,
        'encoding' => 'utf8'
    );
}


