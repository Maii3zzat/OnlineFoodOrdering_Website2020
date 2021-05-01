<?php
    include './includes/header.php';
?>
<body>
<aside class="aside1"></aside>
<article class="main"> 
    <div class="wrap">
        <div>
            <form  class="search" action="searchResult.php" method="POST">  
                <input type="text" class="searchTerm" name="search" placeholder="What are you looking for?" required>
                <button type="submit" class="searchButton" name="Sub" onclick="searchVal()"> 
            </form>
            <i class="searchicon"><img src="images/Search.png"></i>
            </button>
        </div>
    </div>
    <h2>ICHIRAKU RAMEN!</h2>
    <div class="w3-container">



        <img class="mySlides" src="images/M1.jpg">
        <img class="mySlides" src="images/M3.jpg">
        <img class="mySlides" src="images/M5.jpg">


        <p class="shopDescription"> Miso Tonkotsu Ramen</p>
        <p class="shopDescription"> Hakata Ramen</p>
        <p class="shopDescription"> Shoyu Ramen</p>


        <div class="onlybuttons">
            <button class="w3-button w3-display-left" onclick="plusDivs(-1);plsDivs(-1)">&#10094;</button>
            <button class="w3-button w3-display-right" onclick="plusDivs(+1);plsDivs(+1)" >&#10095;</button>
        </div></div>

</article>
<aside class="aside2"></aside>


<?php
include './includes/footer.php';
?>