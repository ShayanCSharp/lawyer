<?php
include("../include/db_conn.php");


$sql = mysqli_query($conn, "SELECT l.id, l.first_name, l.picture, l.last_name, l.email, l.cnic_no, l.expertise, p.name FROM `lawyerss` AS l INNER JOIN practicearea AS p ON l.expertise = p.id WHERE isVisible = 0");

$clutter = "";

if (mysqli_num_rows($sql) > 0) {
    foreach ($sql as $row) {
        $clutter .= "
        <tr>
            <td>" . $row['id'] . "</td>
            <td><img src='../assets/images/lawyers/" . $row['picture'] . "' alt=''></td>
            <td>" . $row['first_name'] . ' ' . $row['last_name'] . "</td>
            <td>" . $row['email'] . "</td>
            <td>" . $row['name'] . "</td>
            <td>" . $row['cnic_no'] . "</td>
            <td><a href='view-profile.php?id=" . $row['id'] . "' class='btn btn-primary'>View</a></td>
            <td>
                <form><button type='submit' name='delete' data-index='" . $row['id'] . "' class='btn btn-danger'>Delete</button></form>
            </td>
        </tr>
        ";
    }
} else {
    $clutter .= "
    <tr>
        <td colspan='8'>No Record Found</td>
    </tr>
    ";
}

echo $clutter;
?>
