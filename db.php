<?php

$connection = mysqli_connect('localhost','root','root','login');  //Had to install MAMP,  default password is 'root'

    if(!$connection) {
        die('DB Connection Failed');
    }

?>