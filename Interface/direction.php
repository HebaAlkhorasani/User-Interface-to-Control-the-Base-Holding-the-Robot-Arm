<?php 
    $dir= $_POST["Stop"];

    if($dir=="امام"){
        $dir="Forward";
    }
    elseif($dir=="يسار"){
        $dir="Left";
    }
    elseif($dir=="يمين"){
        $dir="Right";
    }
    elseif($dir=="خلف"){
        $dir="Backward";
    }
    elseif($dir=="توقف"){
        $dir="Stop";
    }

    $con = mysqli_connect("localhost","root","","robot_arm");

    if ($con->connect_error) {
        die("Connection failed: " . $conn->connect_error);}

    else{
        $sql = "INSERT INTO Motion (`Direction`) VALUES ('$dir');";

        $suc = mysqli_query($con, $sql); 
    }

    if ($suc) {
        echo $dir;
    }
    else {
        echo mysqli_error($con);
    }

    $con->close();
?> 
