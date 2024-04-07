<?php
include("../include/db_conn.php");

$sql = mysqli_query($conn, "SELECT * FROM `practicearea`");

$clutter = "";

if (mysqli_num_rows($sql) > 0) {
    foreach ($sql as $row) {
        $clutter .= "
        <tr>
            <td>" . $row['id'] . "</td>
            <td><img src=assets/img/practice-area/" . $row['image'] . "></td>
            <td>" . $row['name'] . "</td>
            <td>" . $row['slug'] . "</td>
            <td>" . ($row['visible'] == 0 ? "Visible" : "Hidden") . "</td>
            <td><a href='edit-practice-area.php?id=" . $row['id'] . "' class='btn btn-primary'>Edit</a></td>
            <td>
                <form>
                    <button type='submit' name='delete' data-index='" . $row['id'] . "' class='btn btn-danger'>Delete</button>
                </form>
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
