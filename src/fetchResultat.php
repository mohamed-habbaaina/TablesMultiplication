<?php
require_once('./connection.php');

// select all data in DB
$quryresult = $db->prepare("SELECT * FROM `scors` ORDER BY date DESC");
$quryresult->execute();
$data = $quryresult->fetchall();
echo(json_encode($data));