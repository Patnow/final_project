<?php
class DAO {
  private $host;
  private $base;
  private $user;
  private $pass;
  protected $cnx;
  //public $is_connected;

  private static $DAOinstance = null;

  private function __construct($host, $base, $user, $pass) {
    $this->host=$host;
    $this->base=$base;
    $this->user=$user;
    $this->pass=$pass;

    try {
      $this->cnx = new PDO('mysql:host='.$this->getHost().';dbname='.$this->getBase().';charset=utf8',$this->getUser(),$this->getPass());
      $this->cnx->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
      $this->cnx->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
      //$this->is_connected = true;
    } catch (PDOException $e) {
      throw new Exception('BDD Error : '. $e->getMessage());
    }
  }

  public static function getInstance($host, $base, $user, $pass) {
    if (is_null(self::$DAOinstance)) {
      self::$DAOinstance = new DAO($host, $base, $user, $pass);
    }
    return self::$DAOinstance;
  }

  public function __destruct() {
    unset($this->cnx);
    $is_connected = '';
  }

  public function getHost() {
    return $this->host;
  }

  public function setHost($host) {
    $this->host=$host;
  }

  public function getBase() {
    return $this->base;
  }

  public function setBase($base) {
    $this->base=$base;
  }

  public function getUser() {
    return $this->user;
  }

  public function setUser($user) {
    $this->user=$user;
  }

  public function getPass() {
    return $this->pass;
  }

  public function setPass($pass) {
    $this->pass=$pass;
  }

  public function getRow($sql, $param = array()) {
    try {
      $res = $this->cnx->prepare($sql);
      $res->execute($param);
      return $res->fetch();
    } catch (PDOException $e) {
      throw new Exception('Database error : '.$e->getMessage());
    }
  }

  public function getAllRow($sql, $param = array()) {
    try {
      $res = $this->cnx->prepare($sql);
      $res->execute($param);
      return $res->fetchAll();
    } catch (PDOException $e) {
      throw new Exception('Database Error : '.$e->getMessage());
    }
  }

  public function alterTable($sql, $param = array()) {
    try {
      $res = $this->cnx->prepare($sql);
      $res->execute($param);
    } catch (Exception $e) {
        throw new Exception('Database Error : '.$e->getMessage());
    }
  }

  public function __toString() {
    return 'L\'adresse de l\'hôte est : '.$this->getHost().'.<br/>
            Le nom de la base est : '.$this->getBase().'.<br/>
            L\'utilisateur est : '.$this->getUser().'.<br/>
            Le mot de passe correspondant est : '.$this->getPass().'.';
  }
}
?>
