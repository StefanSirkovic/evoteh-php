<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proizvod</title>
    <link rel="shortcut icon" href="img/logoIkonica.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <script src="https://kit.fontawesome.com/a4c8976c94.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <section class="header d-none d-md-block">
        <div class="py-2 ms-3">
            <div class="container-fluid">
                <div class="row justify-content-between align-items-center">
                    <!-- Desna strana sa ikonama jezika (Prikazuje se gore na manjim ekranima) -->
                    <div class="col-12 col-md-3 d-flex justify-content-end align-items-center order-md-2 mb-2 mb-md-0 social-language-container">
                        
                    <div class="social-icons headerIcons mx-3 d-none d-md-block"> <!-- Razmak između slike i ikona -->
                      <a href="https://www.instagram.com/" target="_blank" class="social-icon">
                          <i class="fab fa-instagram"></i> <!-- Font Awesome ikona za Instagram -->
                      </a>
                      <a href="https://www.facebook.com/" target="_blank" class="social-icon">
                          <i class="fab fa-facebook-f"></i> <!-- Font Awesome ikona za Facebook -->
                      </a>
                      <a href="https://www.facebook.com/" target="_blank" class="social-icon">
                        <i class="fab fa-linkedin"></i> <!-- Font Awesome ikona za Facebook -->
                    </a>
                  </div>
                        <a href="" class="nav-link mx-1"><img src="img/srpski.png" class="jezik img-fluid" alt="srpski"></a>
                        <a href="" class="nav-link mx-1"><img src="img/engleski.png" class="jezik img-fluid" alt="engleski"></a>
                        
                    </div>
    
                    <!-- Leva strana sa kontakt informacijama -->
                    <div class="col-9 col-md-9 d-flex justify-content-start order-md-1 headerDiv">
                        <div class="d-flex flex-wrap justify-content-start">
                            <a href="kontakt.php" class="nav-link d-flex align-items-center mx-2 mx-lg-3">
                                <img src="img/locationBlack.png" class="me-2 img-fluid" alt="Lokacija">Milosava Vlajića 49E
                            </a>
                            <a href="mailto:INFO@EVOTEH.RS" class="nav-link d-flex align-items-center mx-2 mx-lg-3">
                                <img src="img/mailBlack.png" class="me-2 img-fluid" alt="Mail">INFO@EVOTEH.RS
                            </a>
                            <a href="tel:+381 11 8251 946" class="nav-link d-flex align-items-center mx-2 mx-lg-3">
                                <img src="img/telephoneBlack.png" class="me-2 img-fluid" alt="Telefon 1">+381 11 8251 946
                                <span class="d-md-none">&#8203; &#8203; &#8203; &#8203; &#8203; &#8203; &#8203; &#8203; &#8203; &#8203; &#8203;</span> 
            
                            </a>
                            <a href="tel:+381 66 23 22 23" class="nav-link d-flex align-items-center mx-2 mx-lg-3">
                                <img src="img/old-phoneBlack.png" class="me-2 img-fluid" alt="Telefon 2">+381 66 23 22 23
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="header d-md-none">
        <div class="ms-3" style="padding-top: 2.1rem !important;">
            <div class="container-fluid">
                <div class="row justify-content-between align-items-center">
                    <!-- Desna strana sa ikonama jezika (Prikazuje se gore na manjim ekranima) -->
                    <div class="col-12 col-md-3 d-flex justify-content-end align-items-center order-md-2 mb-2 mb-md-0 social-language-container">
                    
                    </div>
    
                    <!-- Leva strana sa kontakt informacijama -->
                    <div class="col-9 col-md-9 d-flex justify-content-start order-md-1 headerDiv">
                        <div class="d-flex flex-wrap justify-content-start">
                            <a href="kontakt.php" class="nav-link d-flex align-items-center mx-2 mx-lg-3">
                                <img src="img/locationBlack.png" class="me-2 img-fluid" alt="Lokacija">
                            </a>
                            <a href="mailto:INFO@EVOTEH.RS" class="nav-link d-flex align-items-center mx-2 mx-lg-3">
                                <img src="img/mailBlack.png" class="me-2 img-fluid" alt="Mail">
                            </a>
                            <a href="tel:+381 11 8251 946" class="nav-link d-flex align-items-center mx-2 mx-lg-3">
                                <img src="img/telephoneBlack.png" class="me-2 img-fluid" alt="Telefon 1">
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand ms-lg-5" href="index.php">
                <img src="img/Logo/beli_logo_skracen.png" alt="Logo" class="img-fluid logo"> <!-- Logo -->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item mx-2">
                        <a class="nav-link underline-hover" href="onama.php">O nama</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link underline-hover" href="proizvodi.php">Proizvodi</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link underline-hover" href="distributeri.php">Distributeri</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link underline-hover" href="kontakt.php">Kontakt</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    

    

    <div>
    <?php
    // Uključivanje fajla za povezivanje sa bazom
    include 'config.php';

    // Provera da li je prosleđen ID preko GET metode
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        // SQL upit za preuzimanje podataka o proizvodu, uključujući kolonu niz_slika
        $sql = "SELECT id_grupe, naziv, opis, putanja_do_slika, niz_slika, kolona1, kolona2, kolona3, ceoOpis, pomocniNaziv, glavniNaziv
                FROM opisi
                WHERE id_grupe = ?";

        // Priprema upita
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();

        // Provera da li je pronađen proizvod
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $naziv = $row['naziv'];
            $opis = $row['opis'];
            $ceoOpis = $row['ceoOpis'];
            $putanja_do_slika = $row['putanja_do_slika'];
            $niz_slika = $row['niz_slika'];  // Uzimamo niz slika
            $kolona1 = $row['kolona1'];
            $kolona2 = $row['kolona2'];
            $kolona3 = $row['kolona3'];
            $glavniNaziv= $row['glavniNaziv'];
            $pomocniNaziv= $row['pomocniNaziv'];
            $formatiranOpis = str_replace('.', '.<br>', $ceoOpis);

            // Razdvajamo slike u niz
            $male_slike = explode(',', $niz_slika);

            // Prikaz velike slike
            echo "
            <section class='hero-section fade-in-section'>
                <div class='container-fluid'>
                    <div class='row'>
                        <div class='col-12 col-md-6'>
                            <div class='row'>

                            <!-- Velika slika -->
                            <div class='col-lg-12 text-center mb-4'>
                                <a id='largeImageLink' href='img/{$putanja_do_slika}.jpg' data-lightbox='gallery'>
                                    <img id='largeImage' src='img/{$putanja_do_slika}.jpg' class='large-img' alt='Large Image'>
                                </a>
                            </div>

                            <!-- Male slike -->
                            <div class='col-lg-12 text-center'>
                                <div class='small-images'>
            ";

            // Prikaz male slike za svaku stavku iz niza
            foreach ($male_slike as $mala_slika) {
                echo "<img src='img/{$mala_slika}.png' class='small-img' alt='Small Image' onclick='changeLargeImage(this)'>";
            }

            echo "
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class='mt-5 mt-md-0 col-12 col-md-6 d-flex flex-column justify-content-center align-items-center'>
                            <h1 class='title titleProizvod'>$glavniNaziv</h1> 
                            <h2 class='title titlePomocni'>$pomocniNaziv</h2>
                        </div>
                    </div>
                </div>
            </section>
            ";

            // Ostatak koda za prikaz specifikacija i opisa
            echo "
            <section class='details-section fade-in-section mb-5'>
                <div class='container'>
                    <div class='left-side'>
                        <div class='specs-box'>
                            <h3 class='text-center'>Tehničke specifikacije</h3>
                            <div class='lineTehnicke'></div>
                            <p><img src='img/heightBeli.png' class='img-fluid mb-1 me-2'>$kolona1</p>
                            <p><img src='img/widthBeli.png' class='img-fluid mb-1 me-2'>$kolona2</p>
                            <p><img src='img/weightBeli.png' class='img-fluid mb-1 me-2'>$kolona3</p>
                            <div class='text-center'>
                                <a href='kontakt.php' class='btn-inquiry'>Pošalji upit</a>
                            </div>
                        </div>
                    </div>
                    <div class='right-side'>
                        <h2>Opis proizvoda</h2>
                        <p>$formatiranOpis</p>
                    </div>
                </div>
            </section>
            ";
        } else {
            echo "Proizvod nije pronađen.";
        }
    } else {
        echo "Nijedan proizvod nije odabran.";
    }

    // Zatvaranje konekcije
    $conn->close();
?>


</div>




    <footer class="footer" style="background-color: #003f7f;">
    <div class="footer-overlay d-none"></div>
      <div class="container">
          <div class="row mt-3">
              <!-- Prva kolona: Logo, ime firme i adresa -->
              <div class="col-12 col-lg-3 mb-4">
                  <a href="index.php"><img src="img/Logo/beli_logo_skracen.png" alt="Logo" class="img-fluid mb-3 LogoFooter"></a>
                  <p class="mb-0 fw-bold mt-1">EVO-TEH SZR</p>
                  <p class="mb-0 mt-1">Milosava Vlajića 49E</p>
                  <p class="mb-0 mt-1"> 11450 Sopot, Srbija</p>
              </div>
  
              <!-- Bela linija između kolona -->
              <div class="col-md-1 d-none d-md-block">
                  <div class="vertical-divider"></div>
              </div>
  
              <!-- Druga kolona: Stranice sa bullet listom -->
              <div class="col-12 col-lg-4 mb-4">
                <div class="row">
                    <div class="col-6">
                        <ul class="list-unstyled">
                            <li><a href="onama.php" class="text-white">O nama</a></li>
                            <li><a href="proizvodi.php" class="text-white">Proizvodnja</a></li>
                            <li><a href="proizvodi.php" class="text-white">Proizvodi</a></li>
                            <li><a href="distributeri.php" class="text-white">Reference</a></li>
                            <li><a href="galerija.html" class="text-white">Galerija</a></li>
                            <li><a href="proizvodi.php" class="text-white">Uslovi prodaje</a></li>
                            <li><a href="kontakt.php" class="text-white">Uslovi garancije</a></li>
                            <li><a href="proizvodi.php" class="text-white">Katalog</a></li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <ul class="list-unstyled">
                            <li><a href="distributeri.php" class="text-white">Distribucija</a></li>
                            <li><a href="distributeri.php" class="text-white">Postani distributer</a></li>
                            <li><a href="oprema.html" class="text-white">Finansiranje opreme</a></li>
                            <li><a href="privatnost.html" class="text-white">Politika privatnosti</a></li>
                            <li><a href="pomoc.html" class="text-white">Pomoc i podrška</a></li>
                            <li><a href="novosti.html" class="text-white">Novosti</a></li>
                            <li><a href="apr.html" class="text-white">Izvod iz APR-a</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            
  
              <!-- Bela linija između kolona -->
              <div class="col-md-1 d-none d-md-block">
                  <div class="vertical-divider "></div>
              </div>
  
              <!-- Treća kolona: Made in Serbia -->
                <!-- Treća kolona: Made in Serbia -->
          
                <div class="col-12 col-lg-2 mb-4 text-center footer-container">
                  <img src="img/missrpski.png" class="img-fluid footer-image" alt="">
              
                  <div class="social-icons mt-3"> <!-- Razmak između slike i ikona -->
                      <a href="https://www.instagram.com/" target="_blank" class="social-icon">
                          <i class="fab fa-instagram"></i> <!-- Font Awesome ikona za Instagram -->
                      </a>
                      <a href="https://www.facebook.com/" target="_blank" class="social-icon">
                          <i class="fab fa-facebook-f"></i> <!-- Font Awesome ikona za Facebook -->
                      </a>
                      <a href="https://www.facebook.com/" target="_blank" class="social-icon">
                        <i class="fab fa-linkedin"></i> <!-- Font Awesome ikona za Facebook -->
                    </a>
                  </div>
              </div>
          </div>

          <hr class="footer-divider mt-4">
          <div class="row">
            <div class="col-12 text-center mt-4">
                <p class="text-white mb-0">&copy; 2024 EVO-TEH SZR. Sva prava zadržana.</p>
            </div>
        </div>

          </div>
        
      </div>
  </footer>
  

  <script src="script.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link href="lightbox2-dev/dist/css/lightbox.css" rel="stylesheet" />
  <script src="lightbox2-dev/dist/js/lightbox-plus-jquery.js"></script>
  <script>
    function changeLargeImage(smallImgElement) {
    // Uzimamo izvor male slike (koja je kliknuta)
    var newSrc = smallImgElement.src;

    // Promeni izvor velike slike
    document.getElementById('largeImage').src = newSrc;

    // Promeni link velike slike da otvara ispravnu sliku
    document.getElementById('largeImageLink').href = newSrc;
}

  </script>
</body>
</html>