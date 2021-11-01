<?php

$user = $_POST['User'];
$pass = $_POST['Pass'];
$email = $_POST['email'];

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

if($user != NULL && $pass != NULL && $email != NULL)
{
    $check = "SELECT * FROM Account_info WHERE username = $user && passwerd = $pass && email = $email ";
    $result = $conn->query($check);
    if($result )
    {
        // || mysqli_num_rows($result)==0

            $pin = random_int(100, 900);
            $userid = random_int(100000, 900000);
            $sql1 = "INSERT INTO Account_info VALUES('$userid', '$user', '$email', '$pass', '$pin');";

            

            if($conn->query($sql1) == TRUE)
            {

                echo("Account created successfully<br>");
                echo("<center>Your account number is : " . $userid . "</center>" );
                echo("<br><center>Your account pin is : " . $pin . "<center><br>");
                echo("Happy Banking :))");


    }
    else{

        die("Error creating account. Please Try again.". $conn->error);

    }

    }

    else{
        echo("<center>Account already exists");
    }
}





?>

