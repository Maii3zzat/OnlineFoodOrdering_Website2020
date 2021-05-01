<?php
include '../includes/admin_header.php';
?>

<?php
if (isset($_POST['sub_del_acc'])) {
    $id = $_POST['sub_del_acc'];
    $result = mysqli_query($conn, "SELECT * FROM users where users_id='$id';");
    if (mysqli_num_rows($result) > 0) {
        $sql_delete = "DELETE FROM users WHERE users_id = '$id';";
        mysqli_query($conn, $sql_delete);
    }
}
?>
<body>
    <div id="main">
        <?php
        $sql = "SELECT * FROM users;";
        $result = mysqli_query($conn, $sql);
        ?>
        <?php
        if (mysqli_num_rows($result) > 0) {
            ?> 
            <table>
                <tbody>
                    <tr>
                        <th>ID</th>
                        <th>UserName</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Mobile</th>
                        <th>Credit Card Number</th>
                        <th>Action</th>
                    </tr>
                    <?php
                    while ($row = mysqli_fetch_array($result)) {
                        ?>
                <form method="post" action="users.php">
                        <tr>
                            <td><?php echo $row['users_id']; ?></td>
                            <td><?php echo $row['users_name']; ?></td>
                            <td><?php echo $row['users_email']; ?></td>
                            <td><?php echo $row['users_address']; ?></td>
                            <td><?php echo $row['users_phone']; ?></td>
                            <td>xxxx-xxxx-xxxx-xxxx</td>
                            <td>
                              <button id="btn1"  type="submit" name="sub_del_acc" class="material-icons delete" value="<?php echo$row['users_id'] ?>" >delete</button>
                            </td>
                        </tr>
                    </form>
                    <?php
                }
                ?>
                </tbody>
            </table>
            <?php
        } else
            echo '<div id="btn" >No result!</div>';
        ?>
    </div>
    <!-- JavaScript -->
    <script src="../includes/jquery/jquery.min.js"></script>
    <script src="../includes/scripts.js"></script>

</body>

</html>
