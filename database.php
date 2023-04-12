<?php

    $connection = mysqli_connect("localhost","root","","danceMatrix");
    $query = "create table user (
        id int auto_increment primary key,
        name varchar(32) not null,
        gender varchar(16) not null,
        dob varchar(16) not null,
        email varchar(32) not null,
        status varchar(16) not null,
        address varchar(32) not null,
        phoneNumber varchar(16) not null
        )";
    $result = mysqli_query($connection,$query);
    if($result){
        echo "Table created sucessfully";
    }
    else{
        echo "Error";
    }
?>