<?php
define("filePath","data.json");
//$filePath = "data.json";
include 'function.php'
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register User</title>
</head>
<body>
<div id="content">
    <div id="regist-form">
        <h3>REGISTRATION FORM</h3>
        <form action="registration-list.php" method="post">

            Name: <input type="text" name="username"> <span style="color: red">*</span><br><br>
            E-mail: <input type="text" name="email"> <span style="color: red">*</span><br><br>
            Phone: <input type="text" name="phone"> <span style="color: red">*</span><br><br>
            <button type="submit">Register</button>
            <br><br>
            <span style="color: red">* Required Field</span><br>
        </form>
        <?php

            if ($_SERVER['REQUEST_METHOD'] == "POST"){
                $name = $_POST['username'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];

                $register = addUser($name,$email,$phone);
                saveFileJason($register,filePath);
            }

        ?>
    </div>

</div>
</body>
</html>