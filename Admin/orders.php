<?php
include '../includes/admin_header.php';

    $sql = "SELECT * FROM Orderr;";
    $data = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html>
    <body>


        <div id="main">

            <table>
                <tbody>
                    <tr>
                        <th>Order ID</th>
                        <th>User ID</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Date</th>
                        <th>Status</th>
                    </tr>

                    <?php while ($row = mysqli_fetch_array($data)) {
                        ?>
                        <tr>
                            <td><?php echo $row["order_id"] ?> </td>
                            <td><?php echo $row["users_id"] ?> </td>
                            <td><?php echo $row["order_quantity"] ?> </td>
                            <td><?php echo $row["order_price"] ?> </td>
                            <td><?php echo $row["order_date"] ?> </td>
                            <td><?php echo $row["order_status"] ?> </td>
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
