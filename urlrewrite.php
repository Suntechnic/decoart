<?php
$arUrlRewrite=array (
  3 => 
  array (
    'CONDITION' => '#^/articles/([0-9a-zA-Z_-]+)/([0-9a-zA-Z_-]+)/([\\?\\#].*)?$#',
    'RULE' => 'SECTION_CODE=$1&ELEMENT_CODE=$2',
    'ID' => '',
    'PATH' => '/articles/detail.php',
    'SORT' => 100,
  ),
  4 => 
  array (
    'CONDITION' => '#^/articles/([0-9a-zA-Z_-]+)/([\\?\\#].*)?$#',
    'RULE' => 'SECTION_CODE=$1',
    'ID' => '',
    'PATH' => '/articles/section.php',
    'SORT' => 100,
  ),
  2 => 
  array (
    'CONDITION' => '#^/projects/([0-9a-zA-Z_-]+)/([\\?\\#].*)?$#',
    'RULE' => 'PROJECT_CODE=$1',
    'ID' => '',
    'PATH' => '/catalog/section.php',
    'SORT' => 100,
  ),
  0 => 
  array (
    'CONDITION' => '#^\\/?\\/mobileapp/jn\\/(.*)\\/.*#',
    'RULE' => 'componentName=$1',
    'ID' => NULL,
    'PATH' => '/bitrix/services/mobileapp/jn.php',
    'SORT' => 100,
  ),
  1 => 
  array (
    'CONDITION' => '#^/rest/#',
    'RULE' => '',
    'ID' => NULL,
    'PATH' => '/bitrix/services/rest/index.php',
    'SORT' => 100,
  ),
);
