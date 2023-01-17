<?php
error_reporting(0);
require_once('init.php');

if(!isset($_GET['product_id'])){
    header('location: index.php');
}

$product_id = $_GET['product_id'];

$product = $get_products->getProduct($product_id);

$title = 'Home';
require_once('components/header.php');
require_once('components/navbar.php');
?>

<!--================ Hotel Rooms  =================-->
<section class="accomodation_area section_gap">
    <div class="container">
        <?php require_once('components/alert.php'); ?>
        <div class="row">
            <div class="col-md-6">
                <div class="accomodation_item text-center">
                    <div class="hotel_img">
                        <img src="../images/products/<?= $product['image'] ?>" alt="" height="300px" width="100%">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="accomodation_item">
                    <span class="badge badge-primary">
                        Product Name
                    </span>
                    <h4 class="card-title">
                        <?= $product['name'] ?>
                    </h4>
                    <span class="badge badge-primary">
                        Description
                    </span>
                    <p class="card-text">
                        <?= $product['description'] ?>
                    </p>
                    <span class="badge badge-primary">
                        Type
                    </span>
                    <h5>
                        <?= $product['type'] ?>
                    </h5>
                    <span class="badge badge-primary">
                        Price
                    </span>
                    <h5>
                        ₱ <?= $product['price'] ?>
                    </h5>
                    <hr>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#order">
                        Pay
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ Accomodation Area  =================-->

<!-- bookRoom -->
<div class="modal fade" id="order" data-backdrop="static" data-keyboard="true" tabindex="-1"
    aria-labelledby="bookRoomLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form method="POST" action="order_process.php?product_id=<?= $product['product_id'] ?>">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title fs-5" id="bookRoomLabel">
                        Payment Method
                    </h3>
                    <button type="button" class="btn bg-light btn-close" data-dismiss="modal">
                        <i class="fa fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th scope="col">Name</th>
                                        <td><?= $product['name'] ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Description</th>
                                        <td><?= $product['description'] ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Type</th>
                                        <td><?= $product['type'] ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Price</th>
                                        <td>₱ <?= $product['price'] ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Payment Method</th>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="payment_method"
                                                    id="cash" value="cash" checked>
                                                <label class="form-check-label" for="cash">
                                                    Cash
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="payment_method"
                                                    id="gcash" value="gcash">
                                                <label class="form-check-label" for="gcash">
                                                    GCash
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="payment_method"
                                                    id="paypal" value="paypal">
                                                <label class="form-check-label" for="paypal">
                                                    Paypal
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        Close
                    </button>
                    <button type="submit" class="btn btn-primary" name="order">
                        Confirm
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- button to trigger modal-->

<?php require_once('components/footer.php') ?>