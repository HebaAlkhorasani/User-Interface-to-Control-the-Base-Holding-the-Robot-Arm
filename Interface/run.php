<?php

    $con = mysqli_connect("localhost","root","","robot_arm");

    if ($con->connect_error) {
        die("Connection failed: " . $conn->connect_error);}

    else{
        $values= "SELECT * FROM Motors WHERE id = (select max(id) from `Motors`);";
        $On_Mode= "UPDATE `Motors` SET On_Mode = 'On' WHERE id = (select max(id) from `Motors`);";
        $suc = mysqli_query($con, $values);
        $suc1 = mysqli_query($con, $On_Mode);
        if ($suc and $suc1){
            while($result = mysqli_fetch_row($suc)){
                echo $result[1], "<br>", $result[2], "<br>",$result[3], "<br>",$result[4], "<br>",$result[5], "<br>",$result[6];
            }
        }
        else {
            echo mysqli_error($con);;
        }
        
    }

    $con->close();
?>