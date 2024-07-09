<?php

// connect to database
$conn = mysqli_connect('localhost','root','','jhon_pizza');

// check conn
if(!$conn){
    echo 'conn error: '. mysqli_connect_error();
}

?>