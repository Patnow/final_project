<?php

class SectionPart {
  protected $sectionContent;
  protected $id;

  public function __construct($sectionContent, $id) {
    $this->sectionContent = "<main id ='".$id."'>".$sectionContent."</main>";
  }

  public function __destruct() {
    $this->sectionContent = "";
  }

  public function setSection($sectionContent, $id) {
    $this->$sectionContent = "<main id='".$id."'>".$sectionContent."</main>";
  }

  public function getSection() {
    return $this->sectionContent;
  }


}
?>
