<?php
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "family_shield";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    $name = $_POST['name'];
    $email = $_POST['email'];
    $position = $_POST['position'];

    $sql = "INSERT INTO aware_fsmily (af_name, af_email, af_position)
    VALUES ('$name', '$email', '$position')";

    if ($conn->query($sql) === TRUE) {
    //   echo "New record created successfully";
        session_start();
        $_SESSION["msg"] = ["type" => "success", "message" => "تم التسجيل بنجاح"];

        // die(var_dump($_SESSION["msg"]["message"]));
        header('Location: aware.php');
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>