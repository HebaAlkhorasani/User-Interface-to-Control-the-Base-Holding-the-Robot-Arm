<?php 
    $motor1= $_POST["amount1"];
    $motor2= $_POST["amount2"];
    $motor3= $_POST["amount3"];
    $motor4= $_POST["amount4"];
    $motor5= $_POST["amount5"];
    $motor6= $_POST["amount6"];


    echo "Motor 1: ", $motor1, "<br>";
    echo "Motor 2: ", $motor2, "<br>";
    echo "Motor 3: ", $motor3, "<br>";
    echo "Motor 4: ", $motor4, "<br>";
    echo "Motor 5: ", $motor5, "<br>";
    echo "Motor 6: ", $motor6, "<br>";

    $con = mysqli_connect("localhost","root","","robot_arm");

    if ($con->connect_error) {
        die("Connection failed: " . $conn->connect_error);}

    else{
        $sql = "INSERT INTO Motors (`Motor 1`, `Motor 2`, `Motor 3`, `Motor 4`, `Motor 5`, `Motor 6`) VALUES ('$motor1', '$motor2', '$motor3', '$motor4', '$motor5', '$motor6');";

        $suc = mysqli_query($con, $sql); 
    }

    if ($suc) {
        echo "<br>", "Date have been saved successfully in the database!!";
    }
    else {
        echo mysqli_error($con);
    }

    $con->close();
?> 
