<?php
include '../includes/admin_header.php';

?>

<body>
    <div id="main">

        <form action="add-faq-db.php" method="POST">

            <label>Question<textarea name="question" placeholder="Question"></textarea></label>
            <label>Answer<textarea name="answer" placeholder="Answer"></textarea></label>
            <input type="submit" name="sub_faq" id="btn" value="Submit"/>
        </form>

    </div>

<?php include("footer.php"); ?>

</body>

</html>