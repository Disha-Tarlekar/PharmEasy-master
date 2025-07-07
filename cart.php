<?php
include "includes/head.php"
?>

<body>
    <?php
    include "includes/header.php";
    ?>

    <!-- PRODUCT header -->
    <div class="shopping" style="margin: 20px auto; text-align: center;">
        <h3 id="animated-heading" class="small-heading">
            SHOPPING CART
        </h3>
        <hr class="header-line">
    </div>
    <!-- end of PRODUCT header -->

    <div class="container-fluid">
        <?php
        if (!empty($_SESSION['cart'])) {
            $data = get_cart();
            delete_from_cart();
            $num = sizeof($data);
            for ($i = 0; $i < $num; $i++) {
                if (isset($data[$i])) {
        ?>
                    <div class="card mb-3 animated-card" style="max-width: 100%; background-color: #f9f9f9; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="images/<?php echo $data[$i][0]['item_image'] ?>" class="img-fluid rounded-start" style="margin: 10px; width: 100%; height: auto; border-radius: 10px;" alt="Product Image">
                            </div>

                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title" style="color: #333; font-weight: bold;"><?php echo $data[$i][0]['item_title'] ?></h5>

                                    <?php if ($data[$i][0]['item_quantity'] > 0) { ?>
                                        <small style="color: rgb(58, 211, 58); font-weight: bold;">In Stock</small>
                                    <?php } else { ?>
                                        <small style="color: red; font-weight: bold;">Out Of Stock</small>
                                    <?php } ?>
                                    
                                    <br>
                                    <small style="font-weight: bold; color: #333;">₹<?php echo $data[$i][0]['item_price'] ?></small><br>
                                    <small class="text-muted" style="font-weight: bold;">Brand Name:</small>
                                    <small style="color: rgb(80, 223, 80); font-weight: bold; padding-left: 10px;"><?php echo $data[$i][0]['item_brand'] ?></small><br>
                                    <small class="text-muted" style="font-weight: bold;">Quantity:</small>
                                    <small style="color: rgb(80, 223, 80); font-weight: bold; padding-left: 10px;"><?php echo $_SESSION['cart'][$i]['quantity'] ?></small><br><br>
                                    <a href="cart.php?delete=<?php echo $data[$i][0]['item_id'] ?>" class="btn btn-outline-danger btn-sm">Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
        <?php
                }
            }
        ?>
        <!-- TOTAL -->
        <div class="shopping" style="margin: 20px auto; text-align: center;">
            <h3>Total</h3>
            <hr class="header-line">
        </div>
        <div class="text-center">
            <h5>Total (<?php echo $num . " " . ($num == 1 ? "item" : "items"); ?>) : ₹<?php echo total_price($data) ?></h5>
            <br>
            <a href="cart.php?delete_all=1" class="btn btn-outline-danger btn-lg">Delete all Products!</a>
            &nbsp;&nbsp;
            <a href="final.php?order=done" class="btn custom-green-btn btn-lg">Proceed to Buy</a>
        </div>
        <br><br>
        <?php
        } else {
        ?>
            <h1 style="text-align: center; font-family: 'Fredoka One', cursive;">No products in the Cart</h1>
            <p style="text-align: center; font-family: 'Fredoka One', cursive;">Please add at least one product to Buy</p>
            <img style="width: 46rem; display: block; margin: 0 auto;" src="images/nocart.png" alt="No Cart Image">
        <?php
        }
        ?>
    </div>

    <!-- FOOTER -->
    <?php include "includes/footer.php" ?>

    <style>
        .custom-green-btn {
            background-color: green !important;
            color: white !important;
            border: 1px solid green !important;
        }

        .animated-card {
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .animated-card:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
        }
    </style>
</body>
</html>
