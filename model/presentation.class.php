<?php
class Presentation {
  protected $nom;
  protected $description;

public function __construct($nom, $description) {
    $this->nom=$nom;
    $this->description=$description;
  }


  public function __destruct() {
    $this->nom="";
    $this->description="";
  }

  public function getNom() {
    return $this->nom;
  }

  public function setNom($nom) {
    $this->nom=$nom;
  }

  public function getDescription() {
    return $this->description;
  }

  public function setDescription($description) {
    $this->description=$description;
  }

  public function __toString() {
    return "Le nom de l'objet est ".$this->getNom().".<br/>
            Sa description est : '".$this->getDescription()."' .";
  }
}
?>
