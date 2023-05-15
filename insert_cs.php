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
    $age = $_POST['age'];
    $email = $_POST['email'];
    $issue = $_POST['issue'];
    $appointment = $_POST['appointment'];

    $sql = "INSERT INTO consult_specialist (cs_name, cs_age, cs_email, cs_issue, cs_appointment)
    VALUES ('$name', '$age', '$email', '$issue', '$appointment')";

    if ($conn->query($sql) === TRUE) {
    //   echo "New record created successfully";
        session_start();
        $_SESSION["msg"] = ["type" => "success", "message" => "تم التسجيل بنجاح"];

        // die(var_dump($_SESSION["msg"]["message"]));
        header('Location: special_cons.php');
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>