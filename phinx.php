<?php

return array(
    'paths'         => array('migrations' => $_SERVER['PHINX_MIGRATION_PATH']),
    'environments'  => array(
        'production'   => array(
            'adapter'       => 'mysql',
            'host'          => isset($_SERVER['PHINX_DB_HOST']) ? $_SERVER['PHINX_DB_HOST'] : 'localhost',
            'name'          => isset($_SERVER['PHINX_DB_DATABASE']) ? $_SERVER['PHINX_DB_DATABASE'] : 'development',
            'user'          => isset($_SERVER['PHINX_DB_USERNAME']) ? $_SERVER['PHINX_DB_USERNAME'] : 'root',
            'pass'          => isset($_SERVER['PHINX_DB_PASSWORD']) ? $_SERVER['PHINX_DB_PASSWORD'] : '',
            'port'          => isset($_SERVER['PHINX_DB_PORT']) ? $_SERVER['PHINX_DB_PORT'] : '3306',
            'unix_socket'   => isset($_SERVER['UNIX_SOCKET']) ? $_SERVER['UNIX_SOCKET'] : '',
            'table_prefix'  => isset($_SERVER['PHINX_DB_PREFIX']) ? $_SERVER['PHINX_DB_PREFIX'] : '',
        )
    )
);
