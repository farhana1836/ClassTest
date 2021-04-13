<?php

$connection = mysqli_connect('localhost','root','','studentdb') or die("not connected". mysqli_error());
    $id = $_GET['id'];
    $query = "DELETE FROM student WHERE Id = '$id'";
    $result = mysqli_query($connection,$query) or die("Faild");
    if($result){
        header("location: question4.php");
    }

    mysqli_close($connection);

?>