<?php
require_once('init.php');

$title = 'Home';
require_once('components/header.php');
require_once('components/navbar.php');
?>

<!--================ Hotel Rooms  =================-->
<section class="accomodation_area section_gap">
    <div class="container">
        <?php require_once('components/alert.php'); ?>
        <div class="section_title text-center">
            <h2 class="title_color">
                Products
            </h2>
            <p>
                Bike categories that we offer to our customers. We have a wide variety of bikes to choose from. Let's
                find the best bike for you!
            </p>
        </div>
        <div class="row mb_30">
            <?php foreach($products as $product) : ?>
            <div class="col-lg-3 col-sm-6">
                <div class="accomodation_item text-center">
                    <div class="hotel_img">
                        <img src="../images/products/<?= $product['image'] ?>" alt="" height="200px" width="100%">
                        <?php if(isset($_SESSION['user'])): ?>
                        <a href="order.php?product_id=<?= $product['product_id'] ?>" class="btn btn-info button_hover">
                        Rent
                        </a>
                        <?php else: ?>
                        <a href="javascript:void(0)" class="btn btn-info button_hover" data-toggle="modal"
                            data-target="#signin">
                            Rent
                        </a>
                        <?php endif; ?>
                    </div>
                    <a href="#">
                        <h4 class="sec_h4">
                            <?= $product['name'] ?>
                        </h4>
                    </a>
                    <h5>
                        ₱ <?= $product['price'] ?>
                    </h5>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!--================ Accomodation Area  =================-->

<?php require_once('components/footer.php') ?>