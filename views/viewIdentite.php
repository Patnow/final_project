<?php
require_once("section.class.php");
require_once("template.class.php");
require_once("../controller/dao.class.php");
require_once("../controller/control.php");
require_once("../model/presentation.class.php");
require_once("../model/illustration.class.php");

$presArr = extractValuesInTab("presentation");
$illusArr = extractValuesInTab("illustration");
$attrId = ["copy6", "papeterie", "savoir-faire"];
$htmlIdent = "<article>";

for ($i=0;$i<count($presArr);$i++) {
  $presArr[$i] = new Presentation($presArr[$i]->nomPres, $presArr[$i]->descPres);
  $illusArr[$i] = new Illustration($illusArr[$i]->imageIllus, $illusArr[$i]->nomPres);
  $htmlIdent .= "<div id='".$attrId[$i]."'>
                  <img src ='".$illusArr[$i]->getImage()."' alt='".$attrId[$i]."'/>
                    <div>"
                      .$presArr[$i]->getNom().$presArr[$i]->getDescription()."
                    </div>
                 </div>";
}

createPage($htmlIdent, "identité","Identité");
?>















/*$section = new SectionPart($htmlIdent, "identite");

$pageIdent = new Template("Identité", $section->getSection());
echo $pageIdent->buildPage();*/


/*$connex = DAO::getInstance("localhost","papeterie","root","root");

$presentation = $connex->getAllRow("SELECT * FROM presentation");
$illustration = $connex->getAllRow("SELECT * FROM illustration");

foreach ($presentation as $key => $value) {
  $presArr []= $value;
}

foreach ($illustration as $key => $value) {
  $illusArr []= $value;
}*/
?>
