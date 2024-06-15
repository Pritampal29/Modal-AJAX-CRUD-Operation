<?php
include('dbcon.php');

$data = $_POST['sdata'];

$query = "SELECT * FROM `tab_data` WHERE `name` LIKE '%$data%' ";
$result = mysqli_query($conn,$query);

$count = mysqli_num_rows($result);

$output = "";

    if($count > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $output .= "<tr>
                <td>".$row['id']."</td>
                <td>".$row['name']."</td>
                <td>".$row['email']."</td>
                <td>
                    <button type='button' id='edit-btn' data-eid=".$row['id']." class='btn btn-success' data-bs-toggle='modal'
                    data-bs-target='#staticBackdrop'>Edit</button>
                    <button id='dlt-btn' data-did=".$row['id']." class='btn btn-danger'>Delete</button>
                </td>
            </tr>";
        }
    } else {
        $output .= "<tr><td colspan=4> No Data Found...</td></tr>";
    }

    echo $output;