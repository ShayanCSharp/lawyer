<?php
include("../include/db_conn.php");

$sql = mysqli_query($conn, "SELECT * FROM `registeruser`");

$clutter = "";

if (mysqli_num_rows($sql) > 0) {
    foreach ($sql as $row) {
        $clutter .= "
        <tr>
            <td>" . $row['id'] . "</td>
            <td>" . $row['name'] . "</td>
            <td>" . $row['email'] . "</td>
            <td>" . $row['phone'] . "</td>
            </td>
        </tr>
        ";
    }
    echo $clutter;
} else {
    echo "
    <tr>
    <td colspan='6'>No Record Found</td>
    </tr>
    ";
}
?>
