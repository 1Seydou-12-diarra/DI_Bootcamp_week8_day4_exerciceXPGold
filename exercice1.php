<?php

// 1- Créez une connexion de base de données au serveur PostgreSQL.
$dsn = "pgsql:host=localhost;port=5432;dbname=mydatabase";
$username = "myusername";
$password = "mypassword";

try {
    $dbh = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
    die();
}

// 2- Créez une requête SQL
$stmt = $dbh->prepare("UPDATE COMPANY SET SALARY = 25000.00 WHERE ID = 1");
$stmt->execute();

// 3- Exécuter une requête pour mettre à jour la table
$stmt = $dbh->prepare("SELECT * FROM COMPANY WHERE ID = 1");
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

echo "ID: " . $row['ID'] . "\n";
echo "NAME: " . $row['NAME'] . "\n";
echo "AGE: " . $row['AGE'] . "\n";
echo "ADDRESS: " . $row['ADDRESS'] . "\n";
echo "SALARY: " . $row['SALARY'] . "\n";

// 4- Fermez la connexion à la base de données.
$dbh = null;

?>
