<?php
require_once("section.class.php");
require_once("template.class.php");
require_once("../controller/dao.class.php");
require_once("../model/presentation.class.php");
require_once("../model/illustration.class.php");

$connex = DAO::getInstance("localhost","papeterie","root","root");

$mention = $connex->getAllRow("SELECT * FROM presentation");

$mentArr = array();

foreach ($mention as $key => $value) {
  $mentArr []= $value;
}

for ($i=0;$i<count($mentArr);$i++) {
  $mentArr[$i] = new Presentation($mentArr[$i]->nomPres, $mentArr[$i]->descPres);
  $illusArr[$i] = new Illustration($illusArr[$i]->imageIllus, $illusArr[$i]->nomPres);
  $htmlIdent .= "<div id='".$attrId[$i]."'>
                  <img src ='".$illusArr[$i]->getImage()."' alt='".$attrId[$i]."'/>
                    <div>"
                      .$mentArr[$i]->getNom().$mentArr[$i]->getDescription()."
                    </div>
                 </div>";
}


$section = new SectionPart($htmlIdent, "identite");

$pageIdent = new Template("Identite", $section->getSection());
echo $pageIdent->buildPage();

?>
