<?php
namespace App\DB;
use PDO;
use Ramsey\Uuid\Uuid;

class MySQL implements db {
    
    private $host = 'localhost';
    private $db   = 'bank';
    private $user = 'root';
    private $pass = '';
    private $charset = 'utf8mb4';
    private $pdo;
    
    public function __construct() {
        $dsn = "mysql:host=$this->host;dbname=$this->db;charset=$this->charset";
        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];
        try {
            $this->pdo = new PDO($dsn, $this->user, $this->pass, $options);
        } catch (\PDOException $e) {
        throw new \PDOException($e->getMessage(), (int)$e->getCode());
        }

        try {
            // sql to create table
            $sql = "CREATE TABLE IF NOT EXISTS accounts (
                id VARCHAR(50) PRIMARY KEY,
                firstname VARCHAR(30) NOT NULL,
                lastname VARCHAR(30) NOT NULL,
                iban VARCHAR(50),
                personalid VARCHAR(30),
                balance INT(10) UNSIGNED,
                reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
                )";
              
                // use exec() because no results are returned
                $this->pdo->exec($sql);
              } catch(PDOException $e) {
                echo $sql . "<br>" . $e->getMessage();
            }

    }




    function create(array $userData) : void {
        $uuid = (string) Uuid::uuid4();
        $sql = "INSERT INTO accounts (id,firstname, lastname, iban, personalid, balance)
        VALUES (?,?,?,?,?,?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$uuid, $userData['Name'],$userData['Lastname'], $userData['iban'], $userData['id'], 0]);
        
        
      
        
        
        
    }
 
    function update(string $userId, array $userData) : void{

    }
 
    function delete(string $userId) : void{
        $sql = "DELETE FROM accounts WHERE id= $userId";
        $this->pdo->execute($sql);

     }
 
    function show(string $userId) : array {
        $sql = "SELECT * FROM accounts WHERE id = $userId ";
        $stmt = $this->pdo->query($sql);
        
        while ($row = $stmt->fetch()) {
            return $row;
        }
    
       

       
    }
    
    function showAll() : array{
        $sql = "SELECT * FROM accounts";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll();
        

    }
}

