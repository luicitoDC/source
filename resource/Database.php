<?php
//initialize variables to hold connection parameters;$dsn = 'mysql:host=localhost; dbname=register';
$username = 'sql3481440';
$dsn = 'mysql:host=sql3.freemysqlhosting.net:3306; dbname=sql3481440';
$password = 'baNB8g4Pe4';

try{
    //create an instance of the PDO class with the required parameters
    $db = new PDO($dsn, $username, $password);

    //set pdo error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //display success message
    //echo "Connected to the register database";

} catch (PDOException $er){
    //display error message
    echo "Connection failed ".$er->getMessage();
}
