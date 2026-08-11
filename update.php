<?php
include("./config/config.php");

if(isset($_POST['myUpdateBTN'])){
    $name = $_POST['nameField'];
    $message = $_POST['messageField'];

    $update_query = "UPDATE queries SET query_name = '$name', query_message = '$message' WHERE query_id = $_GET[id]";
    $execute = mysqli_query($connection, $update_query);

    echo "<script>
        location.assign('read.php');
    </script>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Operation</title>
</head>
<body>

    <?php
    $select_query = "SELECT * FROM queries WHERE query_id = $_GET[id]";
    $execute = mysqli_query($connection, $select_query);
    $singleQuery = mysqli_fetch_array($execute); 
    ?>
    <form method="POST">
        <input type="text" name="nameField" value="<?php echo $singleQuery['query_name']?>">

        <!-- <textarea name="messageField"></textarea> -->
         <input type="text" name="messageField" value="<?php echo $singleQuery['query_message']?>">

        <button name="myUpdateBTN">SUBMIT</button>
    </form>
</body>
</html>