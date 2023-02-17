<?php 
// 1- Créez une connexion de base de données au serveur PostgreSQL.
$host = 'your_host_name';
$dbname = 'your_database_name';
$user = 'your_username';
$password = 'your_password';

try {
    $conn = new PDO("pgsql:host=$host;dbname=$dbname", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully\n";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}


// 2- Créez une requête SQL.
$sql = "DELETE FROM COMPANY WHERE ID = 2";


// 3- Exécuter une requête pour supprimer des lignes de la table
$conn->exec($sql);

//  Récupérez et affichez les enregistrements restants de la COMPANYtable à l'aide d'une instruction SELECT 
$sql = "SELECT * FROM COMPANY";
$stmt = $conn->query($sql);
while ($row = $stmt->fetch()) {
    echo "ID: " . $row['ID'] . ", Name: " . $row['NAME'] . ", Age: " . $row['AGE'] . ", Salary: " . $row['SALARY'] . "\n";
}
 // 4- Fermez la connexion à la base de données
 $conn = null;

?>