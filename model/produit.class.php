<?php
class Produit {
  protected $reference;
  protected $modele;
  protected $image;
  protected $description;

public function __construct($reference, $modele, $image, $description) {
    $this->reference=$reference;
    $this->modele=$modele;
    $this->image=$image;
    $this->description=$description;
  }


  public function __destruct() {
    $this->reference="";
    $this->modele="";
    $this->image="";
    $this->description="";
  }

  public function getReference() {
    return $this->reference;
  }

  public function setReference($) {
    $this->reference=$reference;
  }

  public function getModele() {
    return $this->modele;
  }

  public function setModele($modele) {
    $this->modele=$modele;
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
    return "Sa référence est .".$this->getReference().".<br/>
            Le modèle l'objet est ".$this->getModele().".<br/>
            L'adresse de l'image est : ".$this->getImage()." .<br/>
            Sa description est : '".$this->getDescription()."'.";
  }
}
?>
