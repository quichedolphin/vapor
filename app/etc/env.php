<?php
return array (
  'backend' => 
  array (
    'frontName' => 'control',
  ),
  'crypt' => 
  array (
    'key' => '996e7ca75061a76862a3b89bcbb414a8',
  ),
  'session' => 
  array (
    'save' => 'files',
  ),
  'db' => 
  array (
    'table_prefix' => '',
    'connection' => 
    array (
      'default' => 
      array (
        'host' => 'localhost',
        'dbname' => 'vapor',
        'username' => 'vapor',
        'password' => '',
        'model' => 'mysql4',
        'engine' => 'innodb',
        'initStatements' => 'SET NAMES utf8;',
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
    'date' => 'Tue, 04 Oct 2016 01:07:55 +0000',
  ),
);
