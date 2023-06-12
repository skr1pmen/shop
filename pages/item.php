<?php
session_start();
require "../php/db.php";
var_dump(
    select('SELECT * FROM products WHERE id = :id',['id' => $_GET['id']])
);