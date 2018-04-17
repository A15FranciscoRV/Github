<?php
class db{
    private $host="localhost";
    private $dbname="c5tienda";
    private $user="root";
    private $pass="";

    public function conectar(){
       try {

      $pdo = new PDO("mysql:host=$this->host;dbname=$this->dbname;", $this->user, $this->pass);

      $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

      echo "Conexxion realizada";
      echo "<br>";
      $pdo->exec("set names utf8");
      return $pdo;

         }
            catch(PDOException $e) {
                echo $e->getMessage();
            }
    }
 }
?>
