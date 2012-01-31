<?php

require '/includes/config.php';
require '/includes/database.php';

//connect to database

$db = new database($config['db']['host'], 
          $config['db']['user'], 
          $config['db']['pwd'], 
          $config['db']['database']
);


var_dump($db);
