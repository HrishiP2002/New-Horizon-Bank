<?php

$user = $_POST['User'];
$pass = $_POST['Pass'];
$AcNo = $_POST['AcNo'];
$Pin = $_POST['Pin'];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bank_accounts";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error)
{
    // die("Connection failed: " . $conn->error);
}

else
{
    // echo("connected succesfully\n");
}

$sql = "SELECT * FROM Account_info WHERE (Userid = '$AcNo') and (passwerd='$pass') and (pin='$Pin');";

$result = $conn->query($sql);

if($result->num_rows > 0)
{
    $row = $result->fetch_assoc();
    echo "Welcome " . $row['user'];

    echo "<br>Your account balance is: " . $row['balance'];
}

else
{
    echo "Account not found. Please try again.";
}



?>