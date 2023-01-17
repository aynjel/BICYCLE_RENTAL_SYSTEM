
<!-- add room modal -->
<div class="modal fade" id="addRoom" data-backdrop="static" data-keyboard="true" tabindex="-1" aria-labelledby="addRoom"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addRoomLabel">
                    <i class="fas fa-plus"></i>
                    Add Product
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="product_create.php" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="room_number">Name</label>
                        <input type="text" class="form-control" name="name" id="room_number" required>
                    </div>
                    <div class="form-group">
                        <label for="room_name">Description</label>
                        <input type="text" class="form-control" name="description" id="room_name" required>
                    </div>
                    <div class="form-group">
                        <label for="room_price">Price</label>
                        <input type="number" class="form-control" name="price" id="room_price" required>
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
                        <label for="room_img">Image</label>
                        <input type="file" class="form-control" name="image" id="room_img" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">
                        Confirm
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>