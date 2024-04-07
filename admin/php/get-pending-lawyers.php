<?php
include("../include/db_conn.php");

$sql = mysqli_query($conn, "SELECT l.id, l.first_name, l.picture, l.last_name, l.email, l.cnic_no, l.expertise, p.name FROM `lawyerss` AS l INNER JOIN practicearea AS p ON l.expertise = p.id WHERE isVisible = 1");

$output = "";

if (mysqli_num_rows($sql) > 0) {
    while ($row = mysqli_fetch_assoc($sql)) {
        $output .= "
        <tr>
            <td>" . htmlspecialchars($row['id']) . "</td>
            <td><img src='../assets/images/lawyers/" . htmlspecialchars($row['picture']) . "' alt='' style='width: 50px; height: auto;'></td>
            <td>" . htmlspecialchars($row['first_name']) . " " . htmlspecialchars($row['last_name']) . "</td>
            <td>" . htmlspecialchars($row['email']) . "</td>
            <td>" . htmlspecialchars($row['name']) . "</td>
            <td>" . htmlspecialchars($row['cnic_no']) . "</td>
            <td><a href='view-profile.php?id=" . htmlspecialchars($row['id']) . "' class='btn btn-primary'>View</a></td>
            <td>
                <button type='submit' name='approve' data-index='" . htmlspecialchars($row['id']) . "' class='btn btn-success'>Approve</button>
            </td>
            <td>
                <button type='submit' name='delete' data-index='" . htmlspecialchars($row['id']) . "' class='btn btn-danger'>Delete</button>
            </td>
        </tr>
        ";
    }
} else {
    $output .= "
    <tr>
        <td colspan='9'>No Record Found</td>
    </tr>
    ";
}

echo $output;
