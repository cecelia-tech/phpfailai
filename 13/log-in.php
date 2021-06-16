<?php
require __DIR__. '/bootstrap.php';

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    // 1) rodyti forma
    // 2 atjungia user
    if (isset($_GET['logout'])) {
        unset($_SESSION['logged'], $_SESSION['name']);
        setMessage('Sekmingai atsijungete');
        header('Location: http://localhost/phpfailai/13/log-in.php');
        die;
    }
} else {
    // 2) tikrinti prisijungimo duomenis

    $users = json_decode(file_get_contents(__DIR__.'/users.json'), 1);
    foreach ($users as $user) {
        if ($user['name'] == $_POST['name']) {
            if ($user['pass'] == md5($_POST['pass'])) {
                $_SESSION['logged'] = 1;
                $_SESSION['name'] = $user['name'];
                setMessage('Labas, ' .$user['name']);
                header('Location: http://localhost/phpfailai/13/member.php');
                die;
            }
        }
    }
    setMessage('Vartotojas nerastas');
    header('Location: http://localhost/phpfailai/13/log-in.php');
        die;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log-in</title>
</head>
<body>
    <?php include __DIR__.'/menu.php'?>
    <?php include __DIR__.'/msg.php'?>
    <h1>Log-in</h1>
    <form action="http://localhost/phpfailai/13/log-in.php" method="post">
    <input type="text" name="name">
    <input type="password" name="pass">
    <button type="submit">Log-in</button>
    </form>
</body>
</html>