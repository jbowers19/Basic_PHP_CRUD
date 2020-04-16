<?php

include "db.php";

function showAllData(){
    global $connection;
        $query = "SELECT * FROM USERS";
        $result = mysqli_query($connection,$query);

        if(!$result) {
            die('Query Failed');
        }


        while($row = mysqli_fetch_assoc($result)){
            $id = $row['id'];

            echo "<option value='$id'>$id</option>";
        }

}

function userUpdate(){
    global $connection;
        $username = $_POST['username'];
        $psssword = $_POST['password'];
        $id = $_POST['id'];
    
        $query = "UPDATE USERS SET ";
        $query .= "username = '$username', ";
        $query .= "password = '$password' ";
        $query .= "WHERE id = $id ";
    
        $result = mysqli_query($connection, $query);
    
        if(!$result){
            die('Query Failed' . mysqli_error($connection));
        }
    
    }


function deleteRow(){
        global $connection;
            $username = $_POST['username'];
            $psssword = $_POST['password'];
            $id = $_POST['id'];
        
            $query = "DELETE FROM USERS ";
            $query .= "WHERE id = $id ";
        
            $result = mysqli_query($connection, $query);
        
            if(!$result){
                die('Query Failed' . mysqli_error($connection));
            }
        
    }




?>