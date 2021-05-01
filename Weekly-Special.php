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
FROM dish;";
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

<body onload = "a_showSlides(), writeMeal1('<?php cartitem('name', 1) ?>',<?php cartitem('price', 1) ?>,<?php cartitem('quantity', 1) ?>), writeMeal2('<?php cartitem('name', 2) ?>',<?php cartitem('price', 2) ?>,<?php cartitem('quantity', 2) ?>), writeMeal3('<?php cartitem('name', 3) ?>',<?php cartitem('price', 3) ?>,<?php cartitem('quantity', 3) ?>), writeMeal4('<?php cartitem('name', 4) ?>',<?php cartitem('price', 4) ?>,<?php cartitem('quantity', 4) ?>), writeMeal5('<?php cartitem('name', 5) ?>',<?php cartitem('price', 5) ?>,<?php cartitem('quantity', 5) ?>)
                , final(<?php totalprice() ?>,<?php totalquantity() ?>)">


    <div class = 'wrapper0'>
        <section class = 'left-colA' >

            <div class = 'slideshow-container'>

                <div class = 'a_mySlides fade'>
                    <div class = 'numbertext'>1 / 3</div>
                    <img src = 'images/sli-1.jpg'  class = 'A-slider'>

                </div>

                <div class = 'a_mySlides fade'>
                    <div class = 'numbertext'>2 / 3</div>
                    <img src = 'images/sli-2.jpg' class = 'A-slider' >

                </div>

                <div class = 'a_mySlides fade'>
                    <div class = 'numbertext'>3 / 3</div>
                    <img src = 'images/sli-3.jpg'  class = 'A-slider'>

                </div>

            </div>

            <br>

            <h3 style = 'color: gray'>Best-Selling Ramen</h3>


            <div class = 'box1' style = 'height: 170px' >

                <div class = 'imgbx' style = 'width: 150px; flex: 0 0 180px'>
                    <img class = 'R1' src = "<?php dishitem('d_img', 3) ?>" >
                    <img class = 'R2' >
                </div>

                <div class = 'content' style = 'padding-left: 30px; padding-top: 10px'>
                    <h3 style = 'color: white;margin: 0; padding-left: 0; font-size: 20px;'><?php dishitem('name', 3) ?>

                    </h3>
                    <p style = 'color: white; font-size: 15px; padding-top: 5px; ' >

<?php dishitem('price', 3) ?>.00EGP
                        &nbsp;
                        &nbsp;
                        <img src = 'images/add-1-icon.png' width = '30px' height = '30px' class = 'addA' onclick = "update_cart3('<?php dishitem('name', 3) ?>',
                        <?php dishitem('price', 3) ?>,<?php dishitem('quantity', 3) ?>)">

                    </p>
                    <p style = 'color: white; padding-top: 5px; font-size: 15px;'> <?php dishitem('decs', 3) ?> </p>
                </div>
            </div>

            <br>
            <br>

            <div class = 'box2' style = 'height: 170px'>
                <div class = 'imgbx' style = 'width: 150px; flex: 0 0 180px'>
                    <img class = 'S1' src = '<?php dishitem('d_img', 4) ?>'  >
                    <img class = 'S2'  >
                </div>
                <div class = 'content' style = 'padding-left: 30px; padding-top: 10px';
                     >
                    <h3 style = 'color: white;margin: 0; padding-left: 0; font-size: 20px;'><?php dishitem('name', 4) ?></h3>
                    <p style = 'color: white; font-size: 15px;' ><?php dishitem('price', 4) ?>.00EGP
                        &nbsp;
                        &nbsp;
                        <img src = 'images/add-1-icon.png' width = '30px' height = '30px' class = 'addA' onclick = "update_cart4('<?php dishitem('name', 4) ?>',
<?php dishitem('price', 4) ?>,<?php dishitem('quantity', 4) ?>)">

                    </p>
                    <p style = 'color: white; font-size: 15px;'><?php dishitem('decs', 4) ?></p>
                </div>
            </div>
        </section>

        <aside class = 'right-colA' style = ' flex: 1;' >

            <div id = 'cart'>
                <h2 class = 'cartheader'>Cart</h2>
                <div class = 'cartinfo'>
                    <p>Qty</p>
                    <p>name</p>
                    <p>price</p>
                </div>
                <hr>
                <div id = 'cart1'>
                </div>
                <div id = 'cart2'>
                </div>
                <div id = 'cart3'>
                </div>
                <div id = 'cart4'>
                </div>
                <div id = 'cart5'>
                </div>
                <div id = 'cart7'>
                </div><br>
                <div id = 'count'>
                </div>
                <hr>
                <label>
                    <input  type = 'radio' name = 'payM'>
                    Pay with Credit Card
                </label> <br>
                <label>
                    <input  type = 'radio' checked = 'checked' name = 'payM'>
                    Cash On Delivery
                </label>
                <hr>
                <button type = 'submit' class = 'placeOrder' onclick = 'placeOrder(1,<?php totalprice() ?>)' >Place Order</button>

            </div>
        </aside>
    </div>

<?php
include './includes/footer.php';
?>
