<?php 

require_once('init.php');

$title = 'Products List';
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
                <div class="col-sm-3">
                    <a href="javascript:void(0)" class="btn btn-primary float-right" data-toggle="modal"
                        data-target="#addRoom">
                        <i class="fas fa-plus"></i>
                        Add
                    </a>
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
                            Product List
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-center" id="products">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Price</th>
                                        <th>Type</th>
                                        <th>Image</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($products as $product): ?>
                                    <tr>
                                        <td>
                                            <?= $product['name'] ?>
                                        </td>
                                        <td>
                                            <?= $product['description'] ?>
                                        </td>
                                        <td>
                                            <?= $product['price'] ?>
                                        </td>
                                        <td>
                                            <?= $product['type'] ?>
                                        </td>
                                        <td>
                                            <img src="./../images/products/<?= $product['image'] ?>" alt="Product Image"
                                                width="100">
                                        </td>
                                        <td>
                                            <a href="product_edit.php?product_id=<?= $product['product_id'] ?>" class="btn btn-sm btn-info">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <a href="product_delete.php?product_id=<?= $product['product_id'] ?>" onclick="return confirm('Are you sure?')"
                                            class="btn btn-sm btn-danger">
                                                <i class="fas fa-trash"></i>
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
</div>
<?php require_once('components/footer.php'); ?>