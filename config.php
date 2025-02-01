<?php
$servername = "localhost"; // Ili IP adresa servera baze podataka
$username = "root"; // Korisničko ime za MySQL
$password = ""; // Lozinka za MySQL
$dbname = "evo-teh"; // Ime baze podataka

// Kreiranje konekcije
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Provera konekcije
if (!$conn) {
    die("Konekcija nije uspela: " . mysqli_connect_error());
}
?>