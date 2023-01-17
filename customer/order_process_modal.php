<!-- bookRoom -->
<div class="modal fade" id="order" data-backdrop="static" data-keyboard="true" tabindex="-1"
    aria-labelledby="bookRoomLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form action="book_room_process.php" method="POST">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title fs-5" id="bookRoomLabel">
                        Book Room Payment
                    </h3>
                    <button type="button" class="btn bg-light btn-close" data-dismiss="modal">
                        <i class="fa fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th scope="col">Room Name</th>
                                        <td><?= $room_details['room_name'] ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Price</th>
                                        <td>₱ <?= $room_details['room_price'] ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Date</th>
                                        <td>
                                            <input type="date" name="date" id="date" class="form-control">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Payment Method</th>
                                        <td>
                                            <input type="radio" name="payment_method" value="gcash" checked id="gcash">
                                            <label for="gcash">
                                                <img src="https://technology.inquirer.net/wp-content/blogs.dir/4/files/2022/05/GCash-Logo.png"
                                                    alt="" height="50px" width="50px">
                                            </label>
                                            <input type="radio" name="payment_method" value="paypal" id="paypal">
                                            <label for="paypal">
                                                <img src="https://upload.wikimedia.org/wikipedia/commons/a/a4/Paypal_2014_logo.png"
                                                    alt="" height="40px" width="50px">
                                            </label>
                                            <input type="radio" name="payment_method" value="mastercard"
                                                id="mastercard">
                                            <label for="mastercard">
                                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b7/MasterCard_Logo.svg/2560px-MasterCard_Logo.svg.png"
                                                    alt="" height="40px" width="70px">
                                            </label>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="room_id" value="<?= $room_details['room_id'] ?>">
                    <input type="hidden" name="user_id" value="<?= $user['user_id'] ?>">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        Close
                    </button>
                    <button type="submit" class="btn btn-primary">
                        Confirm
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- button to trigger modal-->