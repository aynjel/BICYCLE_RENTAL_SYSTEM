<?php
require_once('init.php');

$title = 'Booked Rooms';
require_once('components/header.php');
require_once('components/navbar.php');

$book_room = new BookRoom();
$booked_rooms = $book_room->GetBookedRoomByUser($user['user_id']);
?>

<!--================ Hotel Rooms  =================-->
<section class="accomodation_area section_gap">
    <div class="container">
        <?php require_once('components/alert.php'); ?>
        <div class="section_title text-center">
            <h2 class="title_color">
                Booked Rooms
            </h2>
        </div>
        <div class="row mb_30">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Room Name</th>
                            <th>Room Price</th>
                            <th>Room Image</th>
                            <th>Book Date</th>
                            <th>Payment Method</th>
                            <th>Book Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($booked_rooms as $booked_room) : ?>
                        <tr>
                            <td><?= $booked_room['room_name'] ?></td>
                            <td><?= $booked_room['room_price'] ?></td>
                            <td>
                                <img src="../images/rooms/<?= $booked_room['room_img'] ?>" alt="" height="100px" width="100%">
                            </td>
                            <td><?= $booked_room['book_date'] ?></td>
                            <td><?= $booked_room['payment_method'] ?></td>
                            <td>
                                <?php if($booked_room['book_isConfirm'] == 'Confirmed') : ?>
                                <span class="badge badge-pill bg-success text-light">
                                    <?= $booked_room['book_isConfirm'] ?>
                                </span>
                                <?php elseif($booked_room['book_isConfirm'] == 'Cancelled') : ?>
                                <span class="badge badge-pill bg-danger text-light">
                                    <?= $booked_room['book_isConfirm'] ?>
                                </span>
                                <?php else : ?>
                                <span class="badge badge-pill bg-warning text-light">
                                    <?= $booked_room['book_isConfirm'] ?>
                                </span>
                                <?php endif; ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<!--================ Accomodation Area  =================-->

<?php require_once('components/footer.php') ?>