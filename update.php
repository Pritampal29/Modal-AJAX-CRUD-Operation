<?php

include('dbcon.php');

if(isset($_POST['id'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    $update = "UPDATE `tab_data` SET `name` = '$name', `email`='$email' WHERE `id`='$id'";
    $query = mysqli_query($conn,$update);

}