<?php

$host = '127.0.0.1';
$db   = 'db';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, //masyvas
    PDO::ATTR_EMULATE_PREPARES   => false,
];
try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

/* 
VIDINIS SUJUNGIMAS (INNER JOIN)

SELECT column_name(s)
FROM table1
INNER JOIN table2
ON table1.column_name = table2.column_name;


$sql = "
SELECT *
FROM clients
INNER JOIN phones
ON clients.id = phones.client_id
";
$stmt = $pdo->query($sql); //DB steitmentas 'stmt'
while ($row = $stmt->fetch())  // duok man 1 eilute
{
    echo $row['id'] . '  '. $row['name']. ',  '. $row['number'] . '<br>';
}
*/
/* 
kairys SUJUNGIMAS (LEFT JOIN)

SELECT column_name(s)
FROM table1
LEFT JOIN table2
ON table1.column_name = table2.column_name;

$sql = "
SELECT `name`, `number`, clients.id as cid, phones.id as pid
FROM clients
LEFT JOIN phones
ON clients.id = phones.client_id
";
//$stmt = $pdo->query($sql); //DB steitmentas 'stmt'
// while ($row = $stmt->fetch())  // duok man 1 eilute
// {
//     echo 'Client ID '.$row['cid'] . '  '. $row['name']. ' Phone ID  '.$row['pid'] . '  '. $row['number'] . '<br>';
// }
*/

/* SELECT column_name(s)
FROM table1
RIGHT JOIN table2
ON table1.column_name = table2.column_name; */

$sql = "
SELECT `name`, `number`, clients.id as cid, phones.id as pid
FROM clients
RIGHT JOIN phones
ON clients.id = phones.client_id
ORDER BY clients.id
";
$stmt = $pdo->query($sql); //DB steitmentas 'stmt'
while ($row = $stmt->fetch())  // duok man 1 eilute
{
    echo 'Client ID '.$row['cid'] . '  '. $row['name']. ' Phone ID  '.$row['pid'] . '  '. $row['number'] . '<br>';
}