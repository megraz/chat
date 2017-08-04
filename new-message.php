<?php
session_start();

include_once 'Database.php';

//creation d'une instance de Database
$db = new Database;
$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

if (empty($_POST['message'])) {
    http_response_code(400); //pour renvoyer code http
    header('Content-Type: text/plain');
    echo 'expect a message parameter';
    exit(1);
}

//echo $_POST['message'];
require_once("message.php");
$msg = new Message($_POST['message']);

//utiliser la fonction qui est ds la DB(qui crée les msg)
$db->createMessage($msg);

// DEBUG: remove when connected to DB.
//header('Content-Type: text/plain');
//echo $msg;

?>
