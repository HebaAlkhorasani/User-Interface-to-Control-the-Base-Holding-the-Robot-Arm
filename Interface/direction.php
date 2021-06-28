<?php 
    $dir= $_POST["Stop"];


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
