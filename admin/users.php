<?php 

require_once('init.php');

$title = 'Customers';
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
                        List of Customers
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
                            Customer List (<?= count($users) ?>)
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <?php if(count($users) > 0): ?>
                            <table class="table table-hover table-center" id="booking">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Total Order</th>
                                        <th>Account Created</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($users as $user): ?>
                                    <tr>
                                        <td>
                                            <?= $user['name'] ?>
                                        </td>
                                        <td>
                                            <?= $user['email'] ?>
                                        </td>
                                        <td>
                                            <?= count($get_user->GetUserOrders($user['user_id'])) ?>
                                        </td>
                                        <td>
                                            <?= $user['created_at'] ?>
                                        </td>
                                        <td>
                                            <a href="user_delete.php?user_id=<?= $user['user_id'] ?>" onclick="return confirm('Are you sure you want to delete this user?')"
                                                class="btn btn-sm btn-danger">
                                                <i class="fas fa-trash"></i>
                                                Delete
                                            </a>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                            <?php else: ?>
                            <div class="alert alert-info">
                                No users found.
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