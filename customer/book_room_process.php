<?php 

require_once('init.php');

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $user_id = $_POST['user_id'];
    $room_id = $_POST['room_id'];
    $date = $_POST['date'];
    $payment_method = $_POST['payment_method'];
    $book_isConfirm = 'Pending';
    
    $book_room = new BookRoom();
    $book_room->CreateBookRoom($user_id, $room_id, $book_isConfirm, $date, $payment_method);

    $_SESSION['success'] = "Book Room Created Successfully";
    header('location: book_room.php?room_id='.$room_id);
}else{
    header('location: index.php');
}