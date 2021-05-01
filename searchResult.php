
<?php
include './includes/header.php';
include_once './connection.php';
?>
<body>
    <aside class="aside1"></aside>
    <article class="main"> 
        <div class="wrap">
            <div>
                <form class="search" action="searchResult.php" method="POST"> 
                    <input type="text" class="searchTerm" name="search" placeholder="What are you looking for?" required>
                    <button type="submit" class="searchButton" name="Sub" onclick="searchVal()"> 
                </form>
                <i class="searchicon"><img src="images/Search.png"></i>
                </button>
            </div>
        </div>
        <div class="w3-container">
            <?php
            if (isset($_POST['Sub'])) {
                $search = mysqli_real_escape_string($conn, $_POST['search']);                                                         // making sure that the input is real string not some wird shity charaters.
                $sql = "SELECT * FROM dish WHERE name LIKE '%$search%'  OR decs LIKE '%$search%' OR offer = '$search' ";          // searching in the table for somthing that close to the input. 

                $result = mysqli_query($conn, $sql);                                                                                // executing the query.
                $queryResult = mysqli_num_rows($result);

                if ($queryResult > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <div class="Meal">
                            <img src="<?php echo $row ['d_img']; ?>"> 
                            <p><?php echo $row ['name']; ?><br><br> 
                                <?php echo $row['decs']; ?><br><br>
                                <?php echo $row['price'] . "EGP"; ?></p>
                        </div> <br>
                        <?php
                    }
                } else {
                    echo "There are no results matching your search! ";
                }
            }
            ?>
        </div>
    </article>
    <aside class="aside2"></aside>

    <?php
    include './includes/footer.php';
