<?php 
// 1- Créez une connexion de base de données au serveur PostgreSQL.

$host = 'localhost';
$dbname = 'dvd';
$username = 'postgres';
$password = '59898060';

$dsn = "pgsql:host=$host;port=5432;dbname=$dbname;user=$username;password=$password";

try{
 $conn = new PDO($dsn);
 
 if($conn){
  echo "Connecté à $dbname avec succès!";
 }
}catch (PDOException $e){
 echo $e->getMessage();
}


// // 2- Créez une requête SQL.
$sql = "DELETE FROM COMPANY WHERE ID = 2";


// 3- Exécuter une requête pour supprimer des lignes de la table


//  Récupérez et affichez les enregistrements restants de la COMPANYtable à l'aide d'une instruction SELECT 
$sql = "SELECT * FROM COMPANY";
$stmt = $conn->query($sql);
while ($row = $stmt->fetch()) {
    echo "ID: " . $row['ID'] . ", Name: " . $row['NAME'] . ", Age: " . $row['AGE'] . ", Salary: " . $row['SALARY'] . "\n";
}
// //  // 4- Fermez la connexion à la base de données
 $conn = null;

  

?>