<?php

include('dbcon.php');

// Insert Query
if(isset($_POST['name']) && isset($_POST['email'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];

    if(!empty($name) && !empty($email)) {
        $insert = "INSERT into `tab_data`(`name`,`email`) VALUES('$name','$email')";
        $query = mysqli_query($conn,$insert);
    } 
}


// Delete Query
if(isset($_POST['id'])) {
    $id = $_POST['id'];

    $delete = "DELETE FROM `tab_data` WHERE `id`='$id'";
    $query = mysqli_query($conn,$delete);
}


?>