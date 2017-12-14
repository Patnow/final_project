<?php
require_once("views/template.class.php");
require_once("views/section.class.php");

$section1 = new SectionPart("<a href='tampons.php'><p id='tampons'>Découvrez nos tampons</p></a>","");
$section2 = new SectionPart("<a href='impressions.php'><p id='impressions'>Découvrez nos impressions</p></a>","");
$section3 = new SectionPart("<a href='catalogue.php'><p id='catalogue'>Parcourez notre catalogue</p></a>","");
$section4 = new SectionPart("<p id='suppliers'>Nos fournisseurs</p></a>","");

$mainContent = $section1->getSection().$section2->getSection().$section3->getSection().$section4->getSection();

$accueil = new Template("Bienvenue à la Papeterie Montparnasse!", $mainContent);
echo $accueil->buildPage();

?>
