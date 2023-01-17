<?php 

require_once('init.php');

if(!isset($_GET['product_id'])){
    header('Location: products.php');
}

$product_id = $_GET['product_id'];

$product = $get_product->GetProduct($product_id);

$title = 'Update Product';
require_once('components/header.php');
require_once('components/navbar.php');
$curr_page = basename(__FILE__);
require_once('components/sidebar.php');


if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $image = $_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name'];
    $type = $_POST['type'];

    if(empty($image)){
        $image = $product['image'];
    }

    $get_product->UpdateProduct($product_id, $name, $description, $price, $image, $type);

    move_uploaded_file($image_tmp, "../images/products/$image");

    $_SESSION['success'] = 'Product updated successfully';
    header('Location: products.php');

}
?>

<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row mt-5">
                <div class="col-sm-9">
                    <h3 class="page-title">
                        Update Product
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
                    <form method="POST" action="<?= $_SERVER['PHP_SELF'] . '?product_id=' . $product_id ?>"
                        enctype="multipart/form-data">
                        <div class="card-body p-4">
                            <div class="form-group">
                                <label for="product_name">Name</label>
                                <input type="text" class="form-control" name="name" id="product_name"
                                    value="<?= $product['name'] ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="product_description">Description</label>
                                <textarea class="form-control" name="description" id="product_description" rows="3"
                                    required><?= $product['description'] ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="product_price">Price</label>
                                <input type="number" class="form-control" name="price" id="product_price"
                                    value="<?= $product['price'] ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="type">Type</label>
                                <select name="type" id="type" class="form-control">
                                    <option value="Road Bikes">Road Bikes</option>
                                    <option value="Mountain Bikes">Mountain Bikes</option>
                                    <option value="Hybrid Bikes">Hybrid Bikes</option>
                                    <option value="Cruiser Bikes">Cruiser Bikes</option>
                                    <option value="BMX Bikes">BMX Bikes</option>
                                    <option value="Kids Bikes">Kids Bikes</option>
                                    <option value="Electric Bikes">Electric Bikes</option>
                                    <option value="Folding Bikes">Folding Bikes</option>
                                    <option value="Tandem Bikes">Tandem Bikes</option>
                                    <option value="Recumbent Bikes">Recumbent Bikes</option>
                                    <option value="Trikes">Trikes</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="product_img">Image</label>
                                <input type="file" class="form-control" name="image" id="product_img">
                                <img src="../images/products/<?= $product['image'] ?>" alt="" width="100px">
                                <!-- preview new image -->
                                <img src="" alt="" width="100px" id="preview">
                                <script>
                                document.getElementById('product_img').addEventListener('change', function() {
                                    var reader = new FileReader();
                                    reader.onload = function() {
                                        var output = document.getElementById('preview');
                                        output.src = reader.result;
                                    }
                                    reader.readAsDataURL(this.files[0]);
                                });
                                </script>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once('components/footer.php'); ?>