<?php

class Database {
    public $Database;

        public function __construct() {
        try {
            $this->Database = new PDO('mysql:host=localhost;dbname=ajax-chat', 'ajax-chat-user', 'We Love SQL API!');
            $this->Database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $e) {
            echo 'Fail to connect DB:' . $e->getMessage();
            exit(1);
        }
    }
    
    //fonction qui va créer le msg ds la DB
    public function createMessage(Message $message) {
        $text = $message->getText();
        $timestamp = $message->getTimestamp()->format('Y-m-d H:i:s');
        $stmt = $this->Database->prepare('INSERT INTO `message`(text, timestamp) VALUES (:text, :timestamp);');
    //On remplace les valeurs dans la requête
        $stmt->bindValue(':text', $text);
        $stmt->bindValue(':timestamp', $timestamp);
        
        //on execute 
        $stmt->execute();
    }
    
    public function readMessage() { //
        $stmt = $this->Database->query('SELECT * FROM message');//stmt= objet renvoyé par le PDO 
        $messages = $stmt->fetchAll();//On récupére les données
        $list = [];
        foreach ($messages as $message) { // pr stocker les msg ds le tableau
            $text = $message['text'];
            $nvmsg = new Message($text);
            $list[]= $nvmsg;
        }
        return $list;
    }
}