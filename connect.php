<?php
$servername = "173.194.224.83";
$username = "hina";
$password = "thukrals";

try {
    $conn = new PDO("mysql:host=$servername;dbname=new", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>


