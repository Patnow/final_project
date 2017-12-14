<?php
require_once("dao.class.php");
require_once("../views/section.class.php");
require_once("../views/template.class.php");


function extractValuesInTab($table) {
  $tab=array();
  $connex = DAO::getInstance("localhost","papeterie","root","root");
  $resultExtract = $connex->getAllRow("SELECT * FROM ".$table);
  foreach ($resultExtract as $key => $value) {
    $tab[]=$value;
  }
  return $tab;
}


function createPage($content, $sectionID, $pageTitle) {
  $section = new SectionPart($content, $sectionID);
  $page = new Template($pageTitle, $section->getSection());
  echo $page->buildPage();
}

?>
