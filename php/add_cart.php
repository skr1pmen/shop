<?php
session_start();
require './db.php';
$id_item = $_POST['id_item'];
$id_user = $_SESSION['user_id'];

$count = (int)select(
    'SELECT count FROM products WHERE id = :id_item',
    [
        'id_item' => $id_item
    ]
)[0]['count'];

update(
    'UPDATE products SET count = :count WHERE id = :id_item',
    [
        'count' => $count - 1,
        'id_item' => $id_item
    ]
);

insert(
    'INSERT INTO cart (id_item, id_user) VALUES (:id_item, :id_user)',
    [
        'id_item' => $id_item,
        'id_user' => $id_user
    ]
);
header('Location: ../pages/profile.php?id='.$id_user);