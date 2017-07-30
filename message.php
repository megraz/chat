<?php
 class message {
     private $texte;
     private $date;

        function __construct($texte, $date) {
        $this->texte= $texte;
        $this->date= $date;
    }

        function getTexte() {
        return $this->texte;
    }
        function getDate() {
        return $this->date;
    }

        function setTexte($texte) {
        $this->texte = $texte;
    }
        function setAge($age) {
        $this->age = $age;
    }

     
 }
?>