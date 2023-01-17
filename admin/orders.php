<?php 

require_once('init.php');

$title = 'List of Orders';
require_once('components/header.php');
require_once('components/navbar.php');
$curr_page = basename(__FILE__);
require_once('components/sidebar.php');
?>

<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row mt-5">
                <div class="col-sm-9">
                    <h3 class="page-title">
                        <?= $title ?>
                    </h3>
                </div>
                <div class="col-sm-12 mt-2">
                    <?php require_once('components/alert.php') ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 d-flex">
                <div class="card card-table flex-fill">
                    <div class="card-header">
                        <h4 class="card-title float-left mt-2">
                            Orders List
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <?php if(count($orders) > 0): ?>
                            <table class="table table-hover table-center" id="orders">
                                <thead>
                                    <tr>
                                        <th>Order ID</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Customer Name</th>
                                        <th>Order Date</th>
                                        <th>Order Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($orders as $order): ?>
                                    <tr>
                                        <td><?= $order['order_id'] ?></td>
                                        <td><?= $order['name'] ?></td>
                                        <td><?= $order['price'] ?></td>
                                        <td><?= $get_user->GetUser($order['user_id'])['name'] ?></td>
                                        <td><?= $order['order_date'] ?></td>
                                        <td>
                                            <?php if($order['status'] == 'pending'): ?>
                                            <span class="badge badge-pill bg-warning-light">
                                                <?= $order['status'] ?>
                                            </span>
                                            <?php elseif($order['status'] == 'delivered'): ?>
                                            <span class="badge badge-pill bg-success-light">
                                                <?= $order['status'] ?>
                                            </span>
                                            <?php elseif($order['status'] == 'cancelled'): ?>
                                            <span class="badge badge-pill bg-danger-light">
                                                <?= $order['status'] ?>
                                            </span>
                                            <?php endif; ?>

                                            <form action="order_status.php" method="POST">
                                                <input type="hidden" name="order_id"
                                                    value="<?= $order['order_id'] ?>">
                                                <select name="status" class="form-control"
                                                    onchange="this.form.submit()">
                                                    <option value="pending" <?= $order['status'] == 'pending' ? 'selected' : '' ?>>
                                                        Pending
                                                    </option>
                                                    <option value="delivered" <?= $order['status'] == 'delivered' ? 'selected' : '' ?>>
                                                        Delivered
                                                    </option>
                                                    <option value="cancelled" <?= $order['status'] == 'cancelled' ? 'selected' : '' ?>>
                                                        Cancelled
                                                    </option>
                                                </select>
                                            </form>
                                        </td>
                                        <td>
                                            <a href="order_delete.php?order_id=<?= $order['order_id'] ?>"
                                                class="btn btn-sm bg-danger-light">
                                                <i class="fe fe-trash"></i> Delete
                                            </a>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                            <?php else: ?>
                            <div class="alert alert-info">
                                No orders found.
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