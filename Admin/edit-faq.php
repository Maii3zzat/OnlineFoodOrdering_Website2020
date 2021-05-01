<?php
include '../includes/admin_header.php';
?>

<body>

    <div id="main">
        <?php
        $result = mysqli_query($conn, "SELECT * FROM admin_faq where faq_id = '$_SESSION[faqId]';");
        if (mysqli_num_rows($result) > 0) {
            $sql_select = "SELECT * FROM admin_faq WHERE faq_id = '$_SESSION[faqId]';";
            $result = mysqli_query($conn, $sql_select);
            while ($row = mysqli_fetch_array($result)) {
                ?>
                <form action = "edit-faq-db.php" method = "POST">
                    <label>Question <textarea type = "text" name = "faq-question" > <?php echo $row['question']; ?> </textarea></label>
                    <label>Answer <textarea type = "text" name = "faq-answer" > <?php echo $row['answer']; ?></textarea></label>
                    <input type = "submit" name = "submit-edit" id = "btn" value = "submit"/>
                </form>
                <?php
            }
        }
        ?>
    </div>
    <script src="../includes/jquery/jquery.min.js"></script>
    <script src="../includes/scripts.js"></script>

</body>

</html>