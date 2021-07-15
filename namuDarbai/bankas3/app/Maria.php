<?php
namespace Bank;

use App\DB\DataBase;
use PDO;

class Maria implements DataBase {

    private static $db;
    private $pdo;

    public static function getMaria() // singletono paternas
    {
        return self::$db ?? self::$db = new self;
    }

    private function __construct()
    {
        $host = '127.0.0.1';
        $db   = 'db';
        $user = 'root';
        $pass = '';
        $charset = 'utf8mb4';

        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];

        $this->pdo = new PDO($dsn, $user, $pass, $options);
    }

    public function create(array $accountData) : void
    {
        $sql =
        "INSERT INTO bank (`vardas`, `pavarde`, `asmensKodas`, `accountNr`, `likutis`)
        VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->pdo->prepare($sql); //paruosimas
        $stmt->execute([$accountData['vardas'], $accountData['pavarde'], $accountData['asmensKodas'], $accountData['accountNr'], $accountData['likutis']]);

    }
 
    public function update(int $accountId, array $accountData) : void
    {
        $sql =
        "UPDATE bank
        SET `likutis` = ".$accountData['likutis']."
        WHERE id = $accountId";


        $this->pdo->query($sql);
    }
 
    public function delete(int $accountId) : void
    {
        $sql =
        "DELETE FROM bank
        WHERE id = $accountId";
        $this->pdo->query($sql);
    }
 
    public function show(int $accountId) : array
    {
        $sql = 
        "SELECT id, vardas, pavarde, asmensKodas, accountNr, likutis
        FROM bank
        WHERE id = $accountId
        ";
        $stmt = $this->pdo->query($sql);
        $row = $stmt->fetch();
        return $row;

    }
    
    public function showAll() : array {
        $sql = 
        "SELECT *
        FROM bank
        ORDER BY `pavarde` DESC
        ";
        $accounts = [];
        $stmt = $this->pdo->query($sql);
        while ($row = $stmt->fetch())
        {
            $accounts[] = $row;
        }
        return $accounts;
    }


    //SITAS LOGINUI
    public function getUser(string $name, string $pass) : array
    {
        $sql = 
        "SELECT *
        FROM users
        WHERE name = ? AND pass = ?
        ";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$name, $pass]);
        $user = $stmt->fetch();
        return false ===  $user ? []: $user;

    }

}