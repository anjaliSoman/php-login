<?php 
$dsn="mysql:host=localhost;dbname=user_login";
$user="root";
$password="";
$options=[];

try{
    $connection=new PDO($dsn,$user,$password,$options);
    // echo "Success";
}
catch(PDOExcepion)
{
    echo "connection error";
}

?>