<?php
class Illustration {
  protected $image;
  protected $nom;

public function __construct($image, $nom) {
  $this->image=$image;
    $this->nom=$nom;
  }


  public function __destruct() {
    $this->nom="";
    $this->image="";
  }

  public function getNom() {
    return $this->nom;
  }

  public function setNom($nom) {
    $this->nom=$nom;
  }

  public function getImage() {
    return $this->image;
  }

  public function setImage($image) {
    $this->image=$image;
  }

  public function __toString() {
    return "Le nom de l'objet est ".$this->getNom().".<br/>
            L'adresse de l'image est : ".$this->getImage()." .";
  }
}
?>
