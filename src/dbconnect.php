<?php
$dsn = 'mysql:host=db;dbname=posse;charset=utf8';
$user = 'root';
$password = 'root';

try {
    $dbh = new PDO($dsn, $user, $password);
    echo 'Connection to DB';

  $sql = 'SELECT * FROM questions';

    foreach ($dbh->query($sql) as $row) {
        print_r($row);
        echo '<br>';
    }

    $sql = 'SELECT * FROM choices';

    foreach ($dbh->query($sql) as $row) {
        print_r($row);
        echo '<br>';
    }
}
catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
