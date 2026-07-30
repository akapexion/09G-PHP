<?php


if(isset($_POST['submit'])){
    $name = $_POST['nameValue'];
    $message = $_POST['messageValue'];

    echo $name . " " . $message;
}
else {
    echo "No Form Found";
}



?>