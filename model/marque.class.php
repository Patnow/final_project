<?php
class Marque {
  protected $nom;

  public function __construct($nom) {
    $this->nom=$nom;
  }

  public function __destruct() {
    $this->nom="";
  }

  public function getNom() {
    return $this->nom;
  }

  public function setNom($nom) {
    $this->nom=$nom;
  }

  public function __toString() {
    return "La nom de la marque est ".$this->getNom().".";
  }
}
?>
