<?php
$host = 'localhost';
$username = 'lab5_user';
$password = 'password123';
$dbname = 'world';

$input = $_GET['country'];
$input= htmlspecialchars($input, ENT_COMPAT);
$lookup = $_GET['lookup'];
$lookup = htmlspecialchars($lookup, ENT_COMPAT);

$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);

if($lookup == "cities"){
  
  $stmt = $conn->query("SELECT c.name, c.district, c.population
  FROM cities c 
  JOIN countries co 
  ON c.country_code = co.code 
  WHERE co.name LIKE '%$input%'");

  $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
  require 'cities.php'; // layouts the results in a table

}elseif($lookup == "countries"){

  $stmt = $conn->query("SELECT * FROM countries WHERE name LIKE '%$input%'");
  $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
  require 'countries.php'; // layouts the results in a table

}

/*foreach(){
   echo '<li>' . $row['name'] . ' is ruled by ' . $row['head_of_state'] . '</li>'; 
}*/
?>

