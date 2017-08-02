<?php
/*
// Filtre la variable $_POST et empèche les injections HTML/CSS/JS.
$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        // Crée une connexion vers la base de données.
        $db = new PDO('mysql:host=localhost;dbname=ajax-chat', 'admin', 'simplon');
        // Transforme toutes les erreurs en exception.
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query = $db->query('SELECT * FROM message');
        $messages = [];
        while ($ligne = $query->fetch()) {
            $message = new ajaxChat($ligne['text'],
            new DateTime($ligne['timestamp']),
            $ligne['id']);
        $messages[] = $message;
    }
?>*/