<?php
class Message implements \JsonSerializable { //Spécifie les données qui doivent être linéarisées en JSON
    public $text;
    public $timestamp;
    
    public function __construct($text) {
        $this->text = $text;
        $this->timestamp = new DateTime();
    }
    
    function getText() {
        return $this->text;
    }

    function getTimestamp() {
        return $this->timestamp;
    }

    function setText($text) {
        $this->text = $text;
    }

    function setTimestamp($timestamp) {
        $this->timestamp = $timestamp;
    }
    
    public function jsonSerialize() {
        return get_object_vars($this);
        
    }


}
 /*class message {
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

     
 }*/
?>