<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Create database
$sql = "CREATE DATABASE 5SI";
if (mysqli_query($conn, $sql)) {
  echo "Database created successfully<br>";
} else {
  echo "Error creating database: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "5SI";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
$sql = "CREATE TABLE Pessoa (
idPessoa INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
nomePessoa VARCHAR(30) NOT NULL,
emailPessoa VARCHAR(30) NOT NULL,
idadePessoa int not null)";

if (mysqli_query($conn, $sql)) {
  echo "Table Pessoa created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>