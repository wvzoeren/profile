<?php



function connectDB($host, $user, $pwd, $db)    {
    $connect = mysql_connect($host, $user, $pwd);
    if(!$connect)   {
        echo "ERROR connecting to database";
    }else{
        $seldb = mysql_select_db($db);
    }
    if(!$seldb) {
        echo "error selecting database";
    }
    
}

function 
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
