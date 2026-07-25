<?php
include("./basics/conditionalStatements.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Basics</title>
</head>
<body>
    <h2>PHP First File</h2>

    <?php 
      $name = "Ali";

      $color = "blue";

      echo $name;
    ?>

    <p style="color : <?php echo $color;?>"> My Name is : <?php echo $name; ?>  </p>
</body>

</html>