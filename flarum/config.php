<?php return array (
  'debug' => true,
  'database' => 
  array (
    'driver' => 'mysql',
    'host' => '192.168.0.103',
    'port' => 3306,
    'database' => 'flarum',
    'username' => 'flarum',
    'password' => '123456',
    'charset' => 'utf8mb4',
    'collation' => 'utf8mb4_unicode_ci',
    'prefix' => 'flarum_',
    'strict' => false,
    'engine' => NULL,
    'prefix_indexes' => true,
  ),
  'url' => 'http://127.0.0.1:8888',
  'paths' => 
  array (
    'api' => 'api',
    'admin' => 'admin',
  ),
  'headers' => 
  array (
    'poweredByHeader' => true,
    'referrerPolicy' => 'same-origin',
  ),
);