<?php
include("./config/config.php");
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
    $select_query = "SELECT * FROM queries WHERE query_id = $_GET[update]";
    $execute = mysqli_query($conn, $select_query);
    $display = mysqli_fetch_array($execute);
    ?>
    <form method="POST">
        <input type="text" name="nameField" value="<?php echo $display['query_name']?>">

        <input type="text" name="messageField" value="<?php echo $display['query_message']?>">

        <button name="myUpdateBTN">SUBMIT</button>
    </form>
</body>
</html>