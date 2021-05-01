<?php
include '../includes/admin_header.php';
?>
<body>

    <div id="main">
        <?php
        $result = mysqli_query($conn, "SELECT * FROM dish where dish_id = '$_SESSION[id]';");
        if (mysqli_num_rows($result) > 0) {
            $sql_select = "SELECT * FROM dish WHERE dish_id = '$_SESSION[id]';";
            $result = mysqli_query($conn, $sql_select);
            while ($row = mysqli_fetch_array($result)) {
                ?>
                <form action = "edit-dish-db.php" method = "POST">
                    <label>Dish Name <input type = "text" name = "dish-name"  value = "<?php echo $row['name']; ?>"></label>
                    <label>Price <input type = "text" name = "dish-price" value = "<?php echo $row['price']; ?>" ></label>
                    <label>Offer <input type = "text" name = "dish-offer"  value = "<?php echo $row['offer']; ?>" ></label>
                    <label>Description <textarea name = "dish-description" ><?php echo $row['decs']; ?></textarea></label>

                    <label>Image 1 <input type = "text" name = "image1" value="<?php echo $row['d_img']; ?>" /></label>

                    <input type = "submit" name = "submit-edit" id = "btn" value = "Submit"/>
                </form>
                <?php
            }
        }
        ?>






    </div>
    <!-- JavaScript -->
    <script src="../includes/jquery/jquery.min.js"></script>
    <script src="../includes/scripts.js"></script>

</body>

</html>
