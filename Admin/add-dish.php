<?php 
include '../includes/admin_header.php';
?>

  <body>
        <div id="main">

            <form action="add-dish-db.php" method="POST">
                <label>Dish Name <input type="text" name="dish-name" placeholder="dish Name .." /></label>
                <label>Price <input type="text" name="dish-price" placeholder="dish price .." /></label>
                <label>Description <textarea name="dish-description" placeholder="Describe this dish .. .."></textarea></label>
                <label>offer <input name="dish-offer" placeholder="1 for true or 0 for false"></label>
                <label>Image 1 <input type="text" name="image1" placeholder="images/---.jpg"/></label>
                <input type="submit" name="submit_dish" id="btn" value="Submit"/>
            </form>

        </div>
        <!-- JavaScript -->
        <script src="../includes/jquery/jquery.min.js"></script>
        <script src="../includes/scripts.js"></script>

    </body>

</html>
