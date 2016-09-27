<?php
return array (
  'backend' => 
  array (
    'frontName' => 'admin',
  ),
  'crypt' => 
  array (
    'key' => 'fc07d03f88d169cc719456b22e4a474a',
  ),
  'session' => 
  array (
    'save' => 'redis',
    'redis' => 
    array (
      'host' => '127.0.0.1',
      'port' => '6379',
      'password' => '',
      'timeout' => '2.5',
      'persistent_identifier' => '',
      'database' => '1',
      'compression_threshold' => '0',
      'compression_library' => 'gzip',
      'log_level' => '4',
      'max_concurrency' => '6',
      'break_after_frontend' => '5',
      'break_after_adminhtml' => '30',
      'first_lifetime' => '600',
      'bot_first_lifetime' => '60',
      'bot_lifetime' => '7200',
      'disable_locking' => '0',
      'min_lifetime' => '60',
      'max_lifetime' => '2592000'
    )
  ),
  'cache' => 
  array (
    'frontend' => 
    array (
      'default' => 
      array (
        'backend' => 'Cm_Cache_Backend_Redis',
        'backend_options' => 
        array (
          'server' => '127.0.0.1',
          'port' => '6379',
          'persistent' => '',
          'database' => '0',
          'force_standalone' => '0',
          'connect_retries' => '1',
          'read_timeout' => '10',
          'automatic_cleaning_factor' => '0',
          'compress_data' => '1',
          'compress_tags' => '1',
          'compress_threshold' => '0',
          'compression_lib' => 'gzip',
        ),
      ),
    ),
  ),
  'db' => 
  array (
    'table_prefix' => '',
    'connection' => 
    array (
      'default' => 
      array (
        'host' => 'localhost',
        'dbname' => 'm2',
        'username' => 'm2',
        'password' => 'm2',
        'active' => '1',
      ),
    ),
  ),
  'resource' => 
  array (
    'default_setup' => 
    array (
      'connection' => 'default',
    ),
  ),
  'x-frame-options' => 'SAMEORIGIN',
  'MAGE_MODE' => 'default',
  'cache_types' => 
  array (
    'config' => 1,
    'layout' => 1,
    'block_html' => 1,
    'collections' => 1,
    'reflection' => 1,
    'db_ddl' => 1,
    'eav' => 1,
    'customer_notification' => 1,
    'full_page' => 1,
    'config_integration' => 1,
    'config_integration_api' => 1,
    'translate' => 1,
    'config_webservice' => 1,
  ),
  'install' => 
  array (
    'date' => 'Tue, 27 Sep 2016 16:43:55 +0000',
  ),
);
