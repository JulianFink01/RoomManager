<?php
/**
  * DBClass
*/
class db {

    protected $connection;
	  protected $query;
	  public $query_count = 0;

	   public function __construct() {
       try {
        $this->connection = new PDO('mysql:host=localhost;dbname=roommanager;port=3306', 'root');
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
          echo $e->getMessage();
        }
      return $this->connection;
     }

     public function query($sql) {
       $ergebnis = array();
       if ($this->connection != null) {
         $erg = $this->connection->query($sql);
         $ergebnis = $erg->fetchAll();
       }
       return $ergebnis;
      }

      public function update($sql){
        $statement = $this->connection->prepare($sql);
        $statement->execute();
      }

     public function close() {
		    $this->connection = null;
       }

     public function numRows($sql){
         $statement = $this->connection->prepare($sql);
         $statement->execute(array('Max'));
         $anzahl_user = $statement->rowCount();
         return $anzahl_user;
     }

}



?>
