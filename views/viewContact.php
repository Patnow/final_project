<?php
require_once("section.class.php");
require_once("template.class.php");
require_once("../controller/dao.class.php");
require_once("../model/presentation.class.php");
require_once("../model/illustration.class.php");

$connex = DAO::getInstance("localhost","papeterie","root","root");

$htmlCont = "<div id='headCont'>
              <p>Vous souhaitez avoir plus d'informations? Contactez nous!</p>
             </div>";

$htmlCont .= "<div id='contact'>
              <form action='../controller/mailing.php' method='POST'>
                <label for='pseudo'>Votre pseudo : </label>
                <input type='text' id='pseudo' name='pseudo' placeholder='Entrez votre pseudo' required='required'/>
                <label for='adresse'>Votre adresse de messagerie :</label>
                <input type='email' id='adresse' name='adresse' placeholder='Entrez votre adresse de messagerie' required='required'/>
                <label for='objet'>Votre objet du message : </label>
                <input type='text' id='objet' name='objet' placeholder='Entrez le motif de votre message'/>
                <label for='corps'>Votre message : </label>
                <textarea id='corps' name='corps' rows='8' cols='80' placeholder='Faites nous part de votre demande' required='required'></textarea>
                <input type='submit' value='Envoyez'/>
              </form>
            </div>";

$sectionCont = new SectionPart($htmlCont, "mainCont");
$pageCont = new Template("Contact", $sectionCont->getSection());
echo $pageCont->buildPage();

?>
