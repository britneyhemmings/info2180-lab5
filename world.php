<?php
$host = 'localhost';
$username = 'lab5_user';
$password = 'password123';
$dbname = 'world';

$input = $_GET['country'];
$input= htmlspecialchars($input, ENT_COMPAT);

$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
$stmt = $conn->query("SELECT * FROM countries WHERE name LIKE '%$input%'");

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach($results as $row){
   echo '<li>' . $row['name'] . ' is ruled by ' . $row['head_of_state'] . '</li>'; 
}
?>