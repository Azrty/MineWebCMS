<?php
class DATABASE_CONFIG {

    public $default = array(
        'datasource' => 'Database/Mysql',
        'persistent' => false,
        'host' => 'process.env.host',
        'login' => 'process.env.login',
        'password' => 'process.env.password',
        'database' => 'process.env.database',
        'encoding' => 'utf8'
    );
}


