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

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$sql = "DELETE FROM tree
WHERE id = ?";

//padarom apsauga nuo school injection 
$stmt = $pdo->prepare($sql); //paruosimas
$stmt->execute([$_POST['id']]);


//$pdo->query($sql);
header('Location: http://localhost/phpfailai/db/');
die;
}
//seeder
$tree = [
     ['Berzas', rand(0, 1500) / 100, 1],
     ['Egle', rand(0, 1500) / 100, 2],
     ['Pusis', rand(0, 1500) / 100, 2],
     ['Kedras', rand(0, 1500) / 100, 2],
     ['Palme', rand(0, 1500) / 100, 3],
     ['Agrastas', rand(0, 1500) / 100, 2],
     ['Sermuksnis', rand(0, 1500) / 100, 1],
     ['Kastonas', rand(0, 1500) / 100, 1],
];
$n = rand(0, count($tree) - 1);
//IRASYMAS

// INSERT INTO table_name (column1, column2, column3,...)
// VALUES (value1, value2, value3,...)


$sql = "INSERT INTO tree (name, height, type)
VALUES (?, ?, ?)
";
$stmt = $pdo->prepare($sql); //paruosimas
$stmt->execute([$tree[$n][0], $tree[$n][1], $tree[$n][2]]);

//sita reikia keisti
//VALUES ('".$tree[$n][0]."', ".$tree[$n][1].", ".$tree[$n][2].")
//";
//negalima naudot query bet kokiam inputui ar kodui, kas ateina is user ar kitos bibliotekos. Query tik jei koda pasirasem patys
//$pdo->query($sql);


//SKAITYMAS
// SELECT column_name(s) FROM table_name
$sql = "SELECT id, name, height, type
FROM tree
WHERE type = 2 AND height > 0
ORDER BY height 
-- LIMIT 5
";
$stmt = $pdo->query($sql); //DB steitmentas 'stmt'
while ($row = $stmt->fetch())  // duok man 1 eilute
{
    echo $row['id'] . '  '. $row['name']. ',  '. $row['height'] . ',  '. $row['type'] . '<br>';
}

//REDAGAVIMAS
// UPDATE table_name
// SET column1=value, column2=value2,...
// WHERE some_column=some_value 

$sql = "UPDATE tree
SET height = 10.65
WHERE id = 13
";
$pdo->query($sql);

//TRYNIMAS

?>
<form action="" method="post">
<input type="text" name="id">
<button type="submit">Delete</button>
</form>