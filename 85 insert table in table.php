<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mydb";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    
    $sql = "INSERT INTO student
    (Stud_ID, Stud_Name, Stud_Email, Stud_Contact)
    VALUES
    (102, 'Diya', 'diyabhutani@gmail.com', '9876543210');";
    
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
echo "<br>";
echo "Program by Arnav Kharbanda, 2220100249";
?>