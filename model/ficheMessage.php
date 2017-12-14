<?php
class FicheMessage {
  protected $pseudo;
  protected $adresse;
  protected $objMess;
  protected $corpsMess;

  public function __construct($pseudo, $adresse, $objMess, $corpsMess) {
    $this->pseudo=$pseudo;
    $this->adresse=$adresse;
    $this->objMess=$objMess;
    $this->corpsMess=$corpsMess;
  }

  public function __destruct() {
    $this->pseudo="";
    $this->adresse="";
    $this->objMess="";
    $this->corpsMess="";
  }

  public function getPseudo() {
    return $this->pseudo;
  }

  public function setPseudo($pseudo) {
    $this->pseudo=$pseudo;
  }

  public function getAdresse() {
    return $this->adresse;
  }

  public function setAdresse($adresse) {
    $this->adresse=$adresse;
  }

  public function getObjMess() {
    return $this->objMess;
  }

  public function setObjMess($objMess) {
    $this->objMess=$objMess;
  }

  public function getCorpsMess() {
    return $this->corpsMess;
  }

  public function setCorpsMess($corpsMess) {
    $this->corpsMess=$corpsMess;
  }

  public function __toString() {
    return "Le pseudo est : ".$this->getPseudo().". <br/>
            L'adresse est : ".$this->getAdresse()." .<br/>
            L'objet du message est : ".$this->getObjMess()." .<br/>
            Le corps du message est : '".$this->getCorpsMess()."'.";
  }

}
?>
