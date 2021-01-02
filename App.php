<?php

$host = 'local host';
$user = 'root';
$pass = '';
$db = 'myDB';

$con = mysql_connect ($host,$user,$pass,$db);
if ($con){
    echo 'Connected succesfully to my db database';    
}

$sql = insert_into_my_table1 (username, password,email) ,values ('John','1234','Jhon@gmail.com');
$query = mysql_query ($con,$sql);
if ($query){
    echo 'data inserted successfully';
}
?>