<?php
$_dbhost = getenv('HOST');
$_dbdatabase = getenv('DATABASE');
$_dbpassword = getenv('PASSWORD');
$_dblogin = getenv('LOGIN');

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


