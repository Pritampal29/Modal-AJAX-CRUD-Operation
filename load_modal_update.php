<?php

include('dbcon.php');

$id = $_POST['id'];

$query = "SELECT * FROM `tab_data` WHERE `id`='$id'";
$result = mysqli_query($conn,$query);

$count = mysqli_num_rows($result);

$output = "";

    if($count > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $output .= '<form id="regform">
                        <div class="form-group py-2">
                        <input name="uname" type="text" class="form-control" id="u-id" hidden placeholder="Enter name" value='.$row['id'].'>
                            <label for="uname">Name</label>
                            <input name="uname" type="text" class="form-control" id="uname" placeholder="Enter name" value='.$row['name'].'>
                        </div>
                        <div class="form-group py-2">
                            <label for="email">Email address</label>
                            <input name="email" type="email" class="form-control" id="email" placeholder="Enter email" value='.$row['email'].'>
                        </div>
                        <div class="text-center py-3">
                            <input type="button" class="btn btn-primary" value="Submit" name="submit" id="subBtn">
                        </div>
                    </form>';
        }
    }

    echo $output;


?>