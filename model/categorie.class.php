<?php
class Categorie {
  protected $nom;
  protected $image;
  protected $description;

public function __construct($nom, $image, $description) {
    $this->nom=$nom;
    $this->image=$image;
    $this->description=$description;
  }


  public function __destruct() {
    $this->nom="";
    $this->image="";
    $this->description="";
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

  public function getDescription() {
    return $this->description;
  }

  public function setDescription($description) {
    $this->description=$description;
  }



  public function __toString() {
    return "Le nom de l'objet est ".$this->getNom().".<br/>
            L'adresse de l'image est : ".$this->getImage()." .<br/>
            Sa description est : '".$this->getDescription()."'.";
  }
}
?>
