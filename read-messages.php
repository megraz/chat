<?php
session_start();

include_once 'Database.php';
include_once 'message.php';

$db = new Database();
$messages = $db->readMessage(); // cf Database
echo json_encode($messages); //il retourne un tableau associatif
?>