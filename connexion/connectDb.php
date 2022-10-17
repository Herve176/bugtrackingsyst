<?php
  // Déclaration d'une nouvelle classe
  class connexionDB {
   private $host = "localhost";
   private $dbname =  "bugtrcking";
   private $user = "root";
   private $pass = "";
    public $connexion;
                    
    function __construct($host = null, $dbname = null, $user = null, $pass = null){
      if($host != null){
        $this->host = $host;           
        $this->dbname = $dbname;           
        $this->user = $user;          
        $this->pass = $pass;
      }
      try{
        $this->connexion = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->dbname,
          $this->user, $this->pass, array(PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES UTF8', 
          PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
          
      }catch (PDOException $e){
        echo 'Error : Database Error !';
        die();
      }
    }
    
    public function query($sql, $data = array()){
      try{

      $req = $this->connexion->prepare($sql);
      $req->execute($data);
      return $req;
    }catch(PDOException $e){
      echo json_encode("error : ".$e.getMessage());
    }
    }
    
    public function insert($sql, $data = []){
      try{

      $req = $this->connexion->prepare($sql);
      $req->execute($data);
      return $req;
      }catch(PDOException $e){
      echo json_encode("error : ".$e.getMessage());
      }
    }
  }
  
  
  // Faire une connexion à votre fonction
  $DB = new connexionDB()
?>
