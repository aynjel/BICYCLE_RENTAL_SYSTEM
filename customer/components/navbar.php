<?php require_once('signin.php'); ?>
<?php require_once('signup.php'); ?>
<!--================Header Area =================-->
<header class="header_area">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand logo_h" href="index.php">
                Bike Rental System
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                <ul class="nav navbar-nav menu_nav ml-auto">

                    <?php if(isset($_SESSION['user'])): ?>

                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="javascript:void(0)" data-toggle="modal"
                            data-target="#orders">My Orders</a></li>
                    <li class="nav-item"><a class="nav-link text-info" href="javascript:void(0)" data-toggle="modal"
                            data-target="#profile">Profile
                        </a>
                    </li>

                    <?php else: ?>


                    <li class="nav-item">
                        <a href="javascript:void(0)" class="nav-link" data-toggle="modal" data-target="#signin">
                            Sign In
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:void(0)" class="nav-link" data-toggle="modal" data-target="#signup">
                            Sign Up
                        </a>
                    </li>

                    <?php endif; ?>

                </ul>
            </div>
        </nav>
    </div>
</header>

<!--orders modal-->
<div class="modal fade" id="orders" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    My Orders
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">
                        &times;
                    </span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Payment Method</th>
                                    <th>Status</th>
                                    <th>Order Date</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($orders as $order): ?>
                                <tr>
                                    <td>
                                        <?= $order['name'] ?>
                                    </td>
                                    <td>
                                        ₱ <?= $order['price'] ?>
                                    </td>
                                    <td>
                                        <?= $order['payment_method'] ?>
                                    </td>
                                    <td>
                                        <?= $order['status'] ?>
                                    </td>
                                    <td>
                                        <?= $order['order_date'] ?>
                                    </td>
                                    <td>
                                        <a href="order_delete.php?order_id=<?= $order['order_id'] ?>"
                                            class="btn btn-danger btn-sm">
                                            Cancel
                                        </a>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="profile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    Profile
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">
                        &times;
                    </span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <h5>
                            <?= $user['name'] ?>
                        </h5>
                        <p>
                            <?= $user['email'] ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="logout.php" class="btn btn-danger">
                    Logout
                </a>
            </div>
        </div>
    </div>
</div>
<!--================Header Area =================-->