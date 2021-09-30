<?php 
namespace Sheeva;

class Database {
    public function __construct($configs){ 
        
        $query = "mysql:host=". $configs['server_name'] . ";dbname=" .  $configs['db_name'].";port=" . $configs['port']  ;
        // . ";charset=" .$configs['charset']
       
        try {
            $this->connexion = new \PDO($query, $configs['username'], $configs['password']);
            // set the PDO error mode to exception
            $this->connexion->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

            }
        catch(\PDOException $e)
            {
            echo "Connection failed: " . $e->getMessage();
            }
    }

    public function simpleQuery(string $sql) : array {
        $return = [];
        foreach  ($this->connexion->query($sql) as $row) {

            var_dump("OK");
            var_dump($row);
            $return[] = $row;
        }
        die();
        return $return;
    }

}

?>