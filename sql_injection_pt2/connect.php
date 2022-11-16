<?php 
    $connection = mysqli_connect('localhost', 'root', '', 'sql_playground');  

    if (!$connection) {
        die ("Connection To SQL Database Failed"); 
    } 
?>