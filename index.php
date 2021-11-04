
<!DOCTYPE html>

<?php

$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password);

if($conn->connect_error)
{
    // die("Connection failed: " . $conn->connect_error . "\t");
}

else{
    // echo("Connected succesfully\n");
}

$sql1 = "CREATE DATABASE bank_accounts";

if($conn->query($sql1) == TRUE)
{
    // echo("Database created successfully");
}

else{
    // echo("Error creating database: " . $conn->error . "\t");
}


$dbname = "bank_accounts";

$conn2 = new mysqli($servername, $username, $password, $dbname);

if($conn2->connect_error)
{
    // die("Connection failed: " . $conn2->error);
}

else
{
    // echo("connected succesfully");
}
$sql2 = "CREATE TABLE Account_info(
    Userid INT(6),
    user VARCHAR(30) NOT NULL,
    email_id VARCHAR(50) NOT NULL,
    passwerd VARCHAR(30) NOT NULL,
    pin INT(6) NOT NULL,
    balance INT DEFAULT 0)
    ";

if($conn2->query($sql2) === TRUE)
{
    // echo "Accounts_info table created successfully";
}

else
{
    // echo "Error creating table: ". $conn2->error . "\t";
}

$conn2->close();

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Horizon Bank</title>

    <style type="text/css">
        body {
            height: 125vh;
            margin-top: 80px;
            padding: 5px;
            background-color: cover;
            font-family: sans-serif;
            background-image: url(bankimage.jpg);
            background-size: 100%;
            background-repeat: no-repeat;
        }
    

        header {
            background-color: grey;
            position: fixed;
            left: 0;
            right: 0;
            top: 5px;
            height: 30px;
            display: flex;
            align-items: center;
            box-shadow: 0 0 25px 0 blue;

        }

        header * {
            display: inline;
        }

        header li a {
            color: blanchedalmond;
            text-decoration: aquamarine;
        }

        .la:link, .la:visited {
            background-color: #f44336;
            color: white;
            padding: 15px 25px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            }

        .la:hover, .la:active {
        background-color: red;
        }


        </style>
</head>
<body>
<header>
            <nav>
                <ul>
                    <li>
                        <a href="index.php"> &nbsp; &nbsp; Home &nbsp; &nbsp;  | </a>
                    </li>
                    <li>
                        <a href="aboutbank.html">&nbsp; &nbsp; About Bank    &nbsp; &nbsp;   | </a>
                    </li>
                    <li>
                        <a href="signuppage.html">&nbsp; &nbsp; Signup   &nbsp; &nbsp;    | </a>
                    </li>

                    <li>
                        <a href="contactus.html">&nbsp; &nbsp; Contact us   &nbsp; &nbsp;    | </a>
                    </li>



                </ul>
            </nav>
        </header><font color="white">
            
    <h1>Welcome to The New Horizon Bank!</h1>




    
</body>
</html>