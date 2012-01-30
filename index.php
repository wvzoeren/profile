<?php

require '/includes/config.php';
require '/includes/database.php';

//connect to database
connectDB($config['db']['host'], 
          $config['db']['user'], 
          $config['db']['pwd'], 
          $config['db']['database']
);

