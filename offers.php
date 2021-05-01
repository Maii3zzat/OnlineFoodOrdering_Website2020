<?php
include './includes/header.php';
?>

<?php

function cartitem($str, $n) {
    include './connection.php';
    $sql = "SELECT *
FROM cart;";
    $result = mysqli_query($conn, $sql);
    for ($i = 0; $i < $n; $i++) {
        $row = mysqli_fetch_assoc($result);
    }
    echo $row[$str];
}

function dishitem($str, $n) {
    include './connection.php';
    $sql = "SELECT *
FROM dish
WHERE offer=1;";
    $result = mysqli_query($conn, $sql);
    for ($i = 0; $i < $n; $i++) {
        $row = mysqli_fetch_assoc($result);
    }
    echo $row[$str];
}

function totalprice() {
    include './connection.php';
    $sql = "SELECT price,quantity
FROM cart;";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {

        $total = $total + ( $row['price'] * $row['quantity'] );
    }

    echo $total;
}

function totalquantity() {
    include './connection.php';
    $sql = "SELECT SUM(quantity) AS value_sum
FROM cart;";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    echo $row['value_sum'];
}
?>


<body onload = "writeMeal1('<?php cartitem('name', 1) ?>',<?php cartitem('price', 1) ?>,<?php cartitem('quantity', 1) ?>), writeMeal2('<?php cartitem('name', 2) ?>',<?php cartitem('price', 2) ?>,<?php cartitem('quantity', 2) ?>), writeMeal3('<?php cartitem('name', 3) ?>',<?php cartitem('price', 3) ?>,<?php cartitem('quantity', 3) ?>), writeMeal4('<?php cartitem('name', 4) ?>',<?php cartitem('price', 4) ?>,<?php cartitem('quantity', 4) ?>), writeMeal5('<?php cartitem('name', 5) ?>',<?php cartitem('price', 5) ?>,<?php cartitem('quantity', 5) ?>)
                , final(<?php totalprice() ?>,<?php totalquantity() ?>)">



    <article class="main1"> 

        <div class="OfferItems">
            <div class="Offers">
                <img src="images/M1(1).jpg"> 
                <P><spin class="offerN"><?php dishitem('name', 1) ?><br></spin><br>
                <spin class="offerD"><?php dishitem('decs', 1) ?></spin> <br><br><spin class="price">price became <?php dishitem('price', 1) ?>EGP </spin>

                <button  class="addK" onclick="update_cart1('<?php dishitem('name', 1) ?>',
<?php dishitem('price', 1) ?>,<?php dishitem('quantity', 1) ?>)"><img src="images/add-1-icon.png" class="addpic"></button>

                </P>

            </div>
            <br><br>
        </div>




        <div class="OfferItems1">

            <div class="Offers">
                <img src="images/M3(1).jpg"> &nbsp;&nbsp;
                <p><spin class="offerN"><?php dishitem('name', 2) ?></spin> <br>
                <spin class="offerD"><?php dishitem('decs', 2) ?> </spin><br> <spin class="price">price became <?php dishitem('price', 2) ?>EGP </spin>
                <button  class="addK" onclick="update_cart3('<?php dishitem('name', 3) ?>',
<?php dishitem('price', 3) ?>,<?php dishitem('quantity', 3) ?>)"><img src="images/add-1-icon.png" class="addpic"></button>
                </p>
            </div> 
            <br><br>
        </div>








        <div class="OfferItems2">

            <div class="Offers">
                <img src="images/M5(1).jpg"> &nbsp;&nbsp;
                <p><spin class="offerN"><?php dishitem('name', 3) ?></spin> <br>
                <spin class="offerD"><?php dishitem('decs', 3) ?></spin> <br><spin class="price"> price became <?php dishitem('price', 3) ?>EGP </spin>
                <button  class="addK" onclick="update_cart5('<?php dishitem('name', 5) ?>',
<?php dishitem('price', 5) ?>,<?php dishitem('quantity', 5) ?>)"><img src="images/add-1-icon.png" class="addpic"></button>
                </p>
            </div> <br><br>
        </div>

    </article>  


    <aside class="aside2"> 

        <div id="cart">
            <h2 class="cartheader">Cart</h2>
            <div class="cartinfo">
                <p>Qty</p>
                <p>name</p> 
                <p>price</p>
            </div>
            <hr>
            <div id="cart1">
            </div>
            <div id="cart2">
            </div>
            <div id="cart3">
            </div>
            <div id="cart4">
            </div>
            <div id="cart5">
            </div> 
            <div id="cart6">
            </div><br>
            <div id="count">
            </div>
            <hr>
            <label>
                <input  type="radio" name="payM">
                Pay with Credit Card
            </label> <br>
            <label>
                <input  type="radio" checked="checked" name="payM">
                Cash On Delivery
            </label>
            <hr>
            <button type="submit" class="placeOrder" onclick="placeOrder()" >Place Order</button>

        </div>

    </aside>
</body>
<?php
include './includes/footer.php';
?>