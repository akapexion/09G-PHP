<?php
   include("./config/config.php");

   if(isset($_POST['mySubmitBTN'])){
        $name = $_POST['nameField'];
        $message = $_POST['messageField'];

        $insert_query = "INSERT INTO queries (query_name, query_message) VALUES ('$name', '$message')";
        $execute = mysqli_query($connection, $insert_query);
   }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Operation</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="nameField">

        <textarea name="messageField"></textarea>

        <button name="mySubmitBTN">SUBMIT</button>
    </form>
</body>
</html>