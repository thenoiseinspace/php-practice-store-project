<?php

#local host, username, password, database name
$con=mysqli_connect('localhost', 'root', '', 'flowerstore' );
if(!$con){
    die(mysqli_error($con)); 
}

?>