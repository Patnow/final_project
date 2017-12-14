<?php
class Template {

  //PROPERTIES
  protected $topPage;
  protected $content;
  protected $bottomPage;
  /*----------------------------------------------------------------------*/


  //Constant containing html block from the top of the page till the title of the page
  const TOP_CONTENT_UP = "
  <!DOCTYPE html>
  <html>
    <head>
        <meta lang='fr'/>
        <meta charset='utf-8'/>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'/>
        <meta http-equiv='X-UA-Compatible' content='ie-edge'/>";
  /*----------------------------------------------------------------------*/


  //Constant containing html block between the title and the main content of the page
  const TOP_CONTENT_DOWN = "
    </head>
    <body>
      <header>
        <div>
          <img src='../ressources/pics/logopm.png' alt='Papeterie Montparnasse'/>
        </div>
        <div>
          <form id='formulaire' action='catalogue.php' method='post'>
            <label for='researchBar'>Recherche</label>
            <input type='text' id='researchBar' name='researchBar' placeholder='Entrez votre recherche ici'/>
            <input type='submit' value='Trouver'/>
            <button type='button' id='searchButton'>recherche avancée</button>
          </form>
        </div>
        <nav>
          <div>
            <a href='index.php'>Accueil</a>
          </div>
          <div>
            <a href='views/viewIdentite.php'>Identite</a>
          </div>
          <div>
            <a href='views/viewTampons.php'>Tampons</a>
          </div>
          <div>
            <a href='view/viewsCatalogue.php'>Catalogue</a>
          </div>
          <div>
            <a href='views/viewContact.php'>Contact</a>
          </div>
        </nav>
      </header>";
  /*----------------------------------------------------------------------*/


  //Constant containing html block from the main content of the page till the end of the page
  const BOTTOM_CONTENT = "
      <footer>
        <div>
          <a href='mentions.php'>Mentions légales</a>
        </div>
      </footer>
    </body>
  </html>";

  const BOTTOM_WITHOUT_LEGAL_INFOS_UP = "
    </body>
  </html>";
  /*----------------------------------------------------------------------*/


  //CONSTRUCTOR
  public function __construct($title, $content) {

    //Opening the page and building all meta informations part of the page
    $this->topPage = $this::TOP_CONTENT_UP."<title>".$title."</title>".$this::TOP_CONTENT_DOWN;

    //Display the content of the page
    $this->content = "<main>".$content."</main>";

    //Building the footer and closing the page

    //ALGO IF mentions
    $this->bottomPage = $this::BOTTOM_CONTENT;
  }
  /*----------------------------------------------------------------------*/


  //DESTRUCTOR
  public function __destruct() {
    $this->topPage = "";
    $this->content = "";
    $this->bottomPage = "";
  }
  /*----------------------------------------------------------------------*/


  //TITLE SETTER
  public function setTitle($title) {
    $this->topPage = $this::TOP_CONTENT_UP."<title>".$title."</title>".$this::TOP_CONTENT_DOWN;
  }
  /*----------------------------------------------------------------------*/

  //TOP PAGE GETTER
  public function getTopPage() {
    return $this->topPage;
  }
  /*----------------------------------------------------------------------*/

  //CONTENT SETTER
  public function setContent($content) {
    $this->content = $content;
  }
  /*----------------------------------------------------------------------*/

  //CONTENT GETTER
  public function getContent() {
    return $this->content;
  }
  /*----------------------------------------------------------------------*/

  //BOTTOM SETTER
  public function setBottomPage($bottomPage) {
    $this->bottomPage = $bottomPage;
  }
  /*----------------------------------------------------------------------*/

  public function getBottomPage() {
    return $this->bottomPage;
  }
  /*----------------------------------------------------------------------*/

  //Method to build the page
  public function buildPage() {
    return $this->getTopPage().$this->getContent().$this->getBottomPage();
  }
  /*----------------------------------------------------------------------*/

  //toString method
  public function __toString() {
    return "Le code HTML du haut de page est '".strval($this->topPage)."'.\n
            Le contenu de la page est '".strval($this->content)."'.\n
            Le code HTML du bas de page est '".strval($this->bottomPage)."'.";
  }
}
?>
