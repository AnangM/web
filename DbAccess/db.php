<?php

    //Edit on your own
    $host = "host";
    $uname = "uname";
    $pwd = "pwd";
    $db = "db";
    
    $conn=new mysqli($host,$uname,$pwd,$db);
    if($conn->error){
        die("Could not connect to DB");
    }

?>