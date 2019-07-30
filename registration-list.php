<?php
include 'index.php';
$info = readFileJason(filePath);
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div id="content">
    <div>
        <h4>REGISTRATION LIST</h4>
        <table border="0" style="border-collapse: collapse; width: 50%;">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone number</th>
            </tr>
            <?php foreach ($info as $field => $info_user): ?>
                <tr>
                    <td><?php echo $info_user['Name: ']; ?> </td>
                    <td><?php echo $info_user['Email: ']; ?> </td>
                    <td><?php echo $info_user['Phone: ']; ?> </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>

</div>
</body>
</html>