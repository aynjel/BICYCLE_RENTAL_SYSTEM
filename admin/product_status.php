<?php 

require_once('init.php');

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $room_id = $_POST['room_id'];
    $room_status = $_POST['room_status'];

    $get_room->UpdateRoomStatus($room_id, $room_status);
    $_SESSION['success'] = "Room Status Updated Successfully";
    header('Location: rooms.php');
}else{
    header('Location: rooms.php');
}
