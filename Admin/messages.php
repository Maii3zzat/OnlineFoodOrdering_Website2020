<?php
include '../includes/admin_header.php';

$sql = "SELECT * FROM contactus;";
$data = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">
    <body>
        <div id="main">

            <table>
                <tbody>
                    <tr>
                        <th>Contact ID</th>
                        <th>User ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Comment</th>
                    </tr>
                    <?php while ($row = mysqli_fetch_array($data)) {
                        ?>
                        <tr>
                            <td><?php echo $row["contact_id"] ?> </td>
                            <td><?php echo $row["users_id"] ?> </td>
                            <td><?php echo $row["contact_name"] ?> </td>
                            <td><?php echo $row["email"] ?> </td>
                            <td><?php echo $row["mobile"] ?> </td>
                            <td><?php echo $row["comment"] ?> </td>
                        </tr>
                        <?php
                    }
                    ?>


                </tbody>
            </table>
        </div>

    </body>

</html>