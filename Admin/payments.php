<?php
include '../includes/admin_header.php';

    $sql = "SELECT * FROM payment";
    $data = mysqli_query($conn, $sql);
//    $dataResult = mysqli_num_rows($data);
//  header("Location: ./users.php?$dataResult");
?>

<!DOCTYPE html>
<html lang="en">
    <body>




        <div id="main">

            <table>
                <tbody>
                    <tr>
                        <th>Payment ID</th>
                        <th>User ID</th>
                        <th>Date</th>
                        <th>Method</th>
                    </tr>

                    <?php while ($row = mysqli_fetch_array($data)) {
                        ?>
                        <tr>
                            <td><?php echo $row["pay_id"] ?> </td>
                            <td><?php echo $row["users_id"] ?> </td>
                            <td><?php echo $row["pay_date"] ?> </td>
                            <td><?php echo $row["method"] ?> </td>

                        </tr>
                        <?php
                    }
                    ?>

                </tbody>
            </table>
        </div>
        <!-- JavaScript -->
        <script src="../includes/jquery/jquery.min.js"></script>
        <script src="../includes/scripts.js"></script>

    </body>

</html>
