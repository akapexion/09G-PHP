<?php
    include("./config/config.php");

    if(isset($_POST['submit'])){
        $name = $_POST['saif'];
        $message = $_POST['message123'];

        $insert_query = "INSERT INTO queries(query_name, query_message) VALUES('$name', '$message')";
        $execute = mysqli_query($connection, $insert_query);    
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Handling</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="saif">

        <textarea name="message123"></textarea>

        <button name="submit">Submit</button>
    </form>
</body>
</html>