<?php
    require 'connectdb.php';
    
    $User = 'abcdef';
    $Password = '123456';
    
    $query = "INSERT INTO login (User,Password) VALUES ('$User','$Password')";
    
    $result = mysqli_query($dbcon, $query);
    
    
    if ($result){
        echo 'Add complet';
    } else{
        echo 'error' . mysqli_error($dbcon);
    }
    
