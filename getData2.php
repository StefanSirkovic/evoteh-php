<?php
// Učitaj config.php za povezivanje sa bazom podataka
include 'config.php';

// SQL upit za dobijanje podataka
$sql = "SELECT ime, putanja_do_slike FROM klijenti";
$result = $conn->query($sql);

// Proveri da li je upit uspešan
if (!$result) {
    // Prikazi grešku ako upit nije uspeo
    http_response_code(500); // Interna server greška
    echo json_encode(['error' => 'Problem sa upitom: ' . $conn->error]);
    exit();
}

// Inicijalizuj niz za podatke
$items = [];

// Ako postoje rezultati, smesti ih u niz
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $items[] = $row;
    }
}

// Vrati podatke kao JSON
header('Content-Type: application/json');
echo json_encode($items);

// Zatvori konekciju sa bazom
$conn->close();
?>