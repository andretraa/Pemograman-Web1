<?php
    $pdo = mysql_connect('mysql:host=localhost; dbname=universitas', 'root', 'qwerty');
    $statement = $pdo->query("SELECT * FROM mahasiswa");
    $row = $statement->fetch(PDO::FETCH_ASSOC);
?>