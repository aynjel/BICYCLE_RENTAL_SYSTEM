<?php 

require_once('init.php');

$title = 'Dashboard';
require_once('components/header.php');
require_once('components/navbar.php');
$curr_page = basename(__FILE__);
require_once('components/sidebar.php');
?>

<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row mt-5">
                <div class="col-sm-12">
                    <h3 class="page-title">
                        Dashboard
                    </h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card board1 fill">
                    <div class="card-body">
                        <div class="dash-widget-header">
                            <div>
                                <h3 class="card_widget_header">
                                    <?= count($products); ?>
                                </h3>
                                <h6 class="text-muted">Products</h6>
                            </div>
                            <div class="ml-auto mt-md-3 mt-lg-0">
                                <span class="opacity-7 text-muted">
                                    <i class="fas fa-gift fa-2x"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card board1 fill">
                    <div class="card-body">
                        <div class="dash-widget-header">
                            <div>
                                <h3 class="card_widget_header">
                                    <?= count($orders); ?>
                                </h3>
                                <h6 class="text-muted">Orders</h6>
                            </div>
                            <div class="ml-auto mt-md-3 mt-lg-0">
                                <span class="opacity-7 text-muted">
                                    <i class="fas fa-suitcase fa-2x"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card board1 fill">
                    <div class="card-body">
                        <div class="dash-widget-header">
                            <div>
                                <h3 class="card_widget_header">
                                    <?= count($users); ?>
                                </h3>
                                <h6 class="text-muted">Users</h6>
                            </div>
                            <div class="ml-auto mt-md-3 mt-lg-0">
                                <span class="opacity-7 text-muted">
                                    <i class="fas fa-users fa-2x"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 d-flex">
                <div class="card card-table flex-fill">
                    <div class="card-header">
                        <h4 class="card-title float-left mt-2">
                            Recently Ordered Products
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <?php if(count($orders) > 0): ?>
                            <table class="table table-hover table-center" id="booking">
                                <thead>
                                    <tr>
                                        <th>Order ID</th>
                                        <th>Product Name</th>
                                        <th>Description</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($orders as $order): ?>
                                    <tr>
                                        <td>
                                                <?= $order['order_id']; ?>
                                        </td>
                                        <td>
                                                <?= $order['name']; ?>
                                        </td>
                                        <td>
                                            <?= $order['description']; ?>
                                        </td>
                                        <td>
                                            <?= $order['price']; ?>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                            <?php else: ?>
                            <div class="alert alert-info">
                                No orders yet.
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once('components/footer.php'); ?>