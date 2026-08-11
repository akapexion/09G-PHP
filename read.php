<?php
include("./config/config.php");

if(isset($_GET['id'])){
    $delete_query = "DELETE FROM queries WHERE query_id = $_GET[id]";
    $execute = mysqli_query($connection, $delete_query);

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
    <title>Read All Queries</title>
</head>
<body>
    
    <h1>All Queries</h1>

    <table border="1" cellspacing="0" cellpadding="5">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Message</th>
            <th>Action</th>
        </tr>
        

        <?php
        $select_query = "SELECT * FROM queries";
        $execute = mysqli_query($connection, $select_query);
        while($display = mysqli_fetch_array($execute)){
        ?>
        <tr>
            <td> <?php  echo $display['query_id']; ?>  </td>
            <td><?php echo $display['query_name']; ?></td>
            <td><?php  echo $display['query_message']  ?></td>
            <td>
                <a href="update.php?id=<?php echo $display['query_id']?>">Edit</a>
                <a href="?id=<?php echo $display['query_id']?>">Delete</a>
            </td>
        </tr>
        <?php
        }
        ?>


    </table>


</body>
</html>