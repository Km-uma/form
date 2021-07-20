<?php
$insert = false;
if(isset($_POST['name']))
{
$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server, $username, $password);

if (!$con)
{
    die("connection to this database failed due to " .mysqli_connect_error());
}
//echo "success connecting to the db";

$name = $_POST['name'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$desc = $_POST['desc'];

$sql = "INSERT INTO `help_desk`.`persons` ( `Name`, `Gender`, `Email`, `Phone`, `Other info`, `dt`) 
VALUES ('$name', '$gender', '$email', '$phone', '$desc', current_timestamp())";
// echo $sql;

if($con->query($sql) == true)
{
    // echo "successfully inserted";
    $insert = true;
}
else{
    echo "ERROR: $sql <br> $con->error";
}
$con->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact me for help</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>welcome Here!</h1>
        <p>Enter your details to confirm your slot.</p>
        <?php
        if($insert == true)
        {
            echo "<h2 class='smtmsg'>Thanks for summiting your form!</h2>";

        } 
        ?>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="gender" id="gender" placeholder="Enter your Gender">
            <input type="email" name="email" id="email" placeholder="Enter your Email">
            <input type="number" name="phone" id="phone" placeholder="Enter your Phone Number">
            <textarea name="desc" id="desc" rows="18" cols="5"
                placeholder="Enter any other information here!"></textarea>
                <button class="btn">Submit</button>
                <!-- <button class="btn">Reset</button> -->

        </form>
    </div>
    <script src="index.js"></script>


    
</body>

</html>