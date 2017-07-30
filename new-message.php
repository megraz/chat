<?php
if (empty($_POST['message'])) {
    http_response_code(400);
    header('Content-Type: text/plain');
    echo 'expect a message parameter';
    exit(1);
}
echo $_POST['message'];

/*
<?php
if (!empty($_POST['message'])) { //if (!empty($_POST['message'])) {
echo $_POST ["message"];
} else {
    http_response_code(400); // indication pr les autres dev dc indiquer au cas où erreur 400 ...
    header('Content-Type: text/plain'); //on change le msg du header on lui dit qu'on lui renvoie du txt
    echo 'expect a message parameter';
}
*/

?>
