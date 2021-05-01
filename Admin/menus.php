<?php
include '../includes/admin_header.php';
?>
<body>
    <?php
    if (isset($_POST['sub_edit'])) {
        $_SESSION['id'] = $_POST[sub_edit];
        header("Location: ./edit-dish.php");
        exit();
    }

    if (isset($_POST['sub_del'])) {
        $id = $_POST['sub_del'];
        $result = mysqli_query($conn, "SELECT * FROM dish where dish_id = '$id';");
        if (mysqli_num_rows($result) > 0) {
            $sql_delete = "DELETE FROM dish WHERE dish_id = '$id';";
            mysqli_query($conn, $sql_delete);
        }
    }
    ?>
    <div id="main">
        <a title="" id="btn" href="./add-dish.php"><i class="material-icons">add</i> Add New Dish</a>
        <?php
        $sql = "SELECT * FROM dish;";
        $result = mysqli_query($conn, $sql);
        ?>
        <?php
        if (mysqli_num_rows($result) > 0) {
            ?>  
            <table>
                <tbody>
                    <tr>
                        <th>Dish_ID</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Price (EGP)</th>
                        <th>Action</th>
                    </tr>
                    <?php
                    while ($row = mysqli_fetch_array($result)) {
                        ?>
                    <form method="post" action="menus.php">
                        <tr>
                            <td><?php echo $row['dish_id']; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['decs']; ?></td>
                            <td><?php echo $row['price']; ?></td>
                            <td>
                                <!--<a title="" href="./edit-dish.php" value="</?php echo$row['dish_id'] ?>"><i class="material-icons edit">edit</i></a>-->
                                <button id="btn1"  type="submit" name="sub_edit" class="material-icons edit" value="<?php echo$row['dish_id'] ?>">edit</button>
                                <button id="btn1"  type="submit" name="sub_del" class="material-icons delete" value="<?php echo$row['dish_id'] ?>" >delete</button>
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
