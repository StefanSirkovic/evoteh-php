<?php
include 'config.php';

// Provera konekcije
if (!$conn) {
    die("Konekcija nije uspela: " . mysqli_connect_error());
}

// Upit za povlačenje podataka iz tabele grupe
$query = "SELECT id, skracenica, naziv, putanja_do_slike FROM grupe";
$result = mysqli_query($conn, $query);

// Provera uspešnosti upita
if (!$result) {
    die("Greška u upitu: " . mysqli_error($conn));
}

$data = [];

// Prolazimo kroz rezultate i stavljamo ih u niz
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = [
            'id' => htmlspecialchars($row['id']),
            'skracenica' => htmlspecialchars($row['skracenica']),
            'naziv' => htmlspecialchars($row['naziv']),
            'putanja_do_slike' => htmlspecialchars($row['putanja_do_slike'])
        ];
    }
}

// Vraćamo podatke kao JSON
echo json_encode($data);

// Zatvaranje konekcije
mysqli_close($conn);
?>