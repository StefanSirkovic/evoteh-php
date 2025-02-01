<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="EVOTEH nudi kvalitetne snežne raonike i opremu za čišćenje snega. Pogledajte našu široku ponudu raonika za traktore i priključaka po povoljnim cenama.">
    <meta name="keywords" content="snežni raonici, raonici za traktore, oprema za čišćenje snega, priključci za traktore, EVOTEH snežni raonici, prodaja snežnih raonika">
    <meta name="author" content="EVOTEH">
    <meta name="robots" content="index, follow">
    <title>EVOTEH</title>
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
                      <a href="https://www.instagram.com/" target="_blank" class="social-icon" rel="noopener">
                          <i class="fab fa-instagram"></i> <!-- Font Awesome ikona za Instagram -->
                      </a>
                      <a href="https://www.facebook.com/" target="_blank" class="social-icon" rel="noopener">
                          <i class="fab fa-facebook-f"></i> <!-- Font Awesome ikona za Facebook -->
                      </a>
                      <a href="https://www.facebook.com/" target="_blank" class="social-icon" rel="noopener">
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
                    <!-- Leva strana sa kontakt informacijama -->
<div class="col-9 col-md-9 d-flex justify-content-start order-md-1 headerDiv">
    <div class="d-flex flex-wrap justify-content-start">
        <a href="kontakt.php" class="nav-link d-flex align-items-center mx-2 mx-lg-3">
            <img src="img/locationBlack.png" class="me-2 img-fluid" alt="Lokacija">
        </a>
        <a href="mailto:INFO@EVOTEH.RS" class="nav-link d-flex align-items-center mx-2 mx-lg-3">
            <img src="img/mailBlack.png" class="me-2 img-fluid" alt="Mail">
        </a>
        <a id="phoneIcon1" class="nav-link d-flex align-items-center mx-2 mx-lg-3 first-icon" style="cursor: pointer;">
            <img src="img/telephoneBlack.png" class="me-2 img-fluid" alt="Telefon 1">
        </a>
        <!-- Druga ikonica za telefon sa posebnom klasom -->
        <a id="phoneIcon2"  class="nav-link d-flex align-items-center mx-2 mx-lg-3 hidden-phone-icon ">
            <img id="drugasl" src="img/old-phoneBlack.png" style="display:none;" class="me-2 img-fluid" alt="Telefon 2">
        </a>
    </div>
</div>


<script>
let step = 0;  // Praćenje koraka

document.getElementById('phoneIcon1').addEventListener('click', function(event) {
    event.preventDefault();  // Spreči automatsko izvršavanje href atributa

    if (step === 0) {
        // Prvi klik - prikaži drugu ikonicu
        var secondPhoneIcon = document.getElementById('drugasl');
        secondPhoneIcon.style.display = "";
        
        // Postavi href za prvu ikonicu (broj 1)
        this.setAttribute('href', 'tel:+38166232223');
        
        // Pripremi href za drugu ikonicu (broj 2)
        var secondicon = document.getElementById("phoneIcon2");
        secondicon.setAttribute('href', 'tel:+381112834367');
        
        step = 1;  // Pređi na sledeći korak
    } else if (step === 1) {
        // Drugi klik - izvrši poziv na prvi broj
        window.location.href = this.getAttribute('href');  // Poziv na prvi broj
        step = 0;  // Vrati na početni korak nakon poziva
    }
});

document.getElementById('phoneIcon2').addEventListener('click', function(event) {
    event.preventDefault();  // Spreči automatsko izvršavanje href atributa

    // Ako se klikne druga ikonica, izvrši poziv na drugi broj
    if (step === 1) {
        window.location.href = this.getAttribute('href');  // Poziv na drugi broj
        step = 0;  // Vrati na početni korak nakon poziva
    }
});

</script>
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
    
    <section class="glavna fade-in-section">
        <div class="container-fluid">
        <div class="row redGlavna">
            <div class="col-md-6 col-12 p-0">
                <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="img/baner.png" class="d-block w-100 img-fluid" alt="slider 1">
                      </div>
                      <div class="carousel-item">
                        <img src="img/sliderProba.jpg" class="d-block w-100 img-fluid" alt="slider 2">
                      </div>
                      <div class="carousel-item">
                        <img src="img/sliderProba.jpg" class="d-block w-100 img-fluid" alt="slider 3">
                      </div>
                    </div>
                    <a href="#raonici" class="arrow-circle d-none d-md-block">
                        <i class="fa-solid fa-arrow-right fa-rotate-90" style="color: #000000;"></i>
                    </a>
                  </div>
                  
                </div>

        
               <div class="col-md-6 col-12 d-flex flex-column align-items-start justify-content-center drugiGlavna">
                <h1 id="title1" class="naslovGlavna ms-2">ETR 2V</h1>
                <h1 id="title2" class="naslovGlavna ms-2">Raonici za sneg za viljuškare</h1>
                <p id="description1" class="mt-3 ms-2 description"><img src="img/height.png" id="ikonica1" class="me-2 img-fluid" alt="Height">Visina raonika za sneg: 60cm</p>
                <p id="description2" class=" ms-2 description"><img src="img/width.png" id="ikonica2" class="me-2 img-fluid" alt="Width">Širina raonika za sneg: 200cm</p>
                <p id="description3" class=" ms-2 description"><img src="img/weight.png" id="ikonica3" class="me-2 img-fluid" alt="Weight">Težina raonika za sneg: 250kg</p>
                
                <div class="d-flex justify-content-center mt-4 mb-5 mb-md-0">
                    <button type="button" class="btn-slider mx-2" onclick="switchToSlide(0)">ETR 2V</button>
                    <button type="button" class="btn-slider mx-2" onclick="switchToSlide(1)">ETR 2S</button>
                    <button type="button" class="btn-slider mx-2" onclick="switchToSlide(2)">ETR 1</button>
                </div>
                
                </div>

            </div>
        </div>
    </section>

    <section id="raonici" class="mb-5 fade-in-section">
        <div class="container">
            <h2 class="text-center fw-bold">Raonici za sneg</h2>
            <p class="text-center" style="font-size: 1em;">Vaš Partner za Zimske Radosti</p>
            <div class="row mt-3" id="row-container">
                <!-- Kockice će biti dinamički generisane ovde -->
            </div>
        </div>
    </section>



    <section id="reference" class="mt-5 mx-4 mb-5 fade-in-section">
        <div class="container-fluid ">
            <div class="naslovPozadina">
            <h2 class="text-center mt-5 fw-bold text-white">Pogledajte kome smo pravili raonike za sneg</h2>
            <p class="text-center mb-5" style="font-size: 1em;">Reference</p></div>
            <div class="row "> 
                <div id="carouselExampleIndicators" class="carousel slide mb-5" data-bs-ride="carousel">
                <div class="carousel-indicators d-none d-md-flex">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            </div>

                    <div class="carousel-inner mb-5 mt-md-0 mt-5" id="carouselContent">
                        <!-- Dinamički sadržaj ide ovde -->
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>

                   
                </div>
                
            </div>
            
        </div>
        
    </section>

<section class="fade-in-section mb-5">
  <!-- Naslov Novosti -->
  <h2 class="text-center mt-5 fw-bold" style="margin-bottom:-5px;">Novosti</h2>
  <div class="d-flex justify-content-center"><hr class="linijaTim mb-4 text-center"></div>

  <!-- Kontejner podeljen na 2 dela: levi + desni u wrapperu i centar -->
  <div class="container-custom mt-4" >
    <div class="left-right-wrapper slide-in">
      <div class="left-part">
        <img style="width: 300px; border: 1px solid black;" class="img-fluid" src="img/raonik.png" alt="Opis slike">
        <h3>Zašto izabrati "EVO-TEH" raonik za sneg?</h3>
        <button class="btn">Opširnije</button>
      </div>
      <div class="center-part d-none d-md-block"></div>
      <div class="right-part "> <h2>Naše novosti su zanimljive. Uđi u arhivu i saznaj nešto novo!</h2>
        <button class="btn">Prikaži više</button></div>
       
      </div>
    </div>
    
  </div>

  <!-- Dugme za pokretanje animacije -->
   <button class="start-animation d-none">Pokreni Animaciju</button>

</section>

<section class="fade-in-section" id="oprema">
    <h2 class="text-center mt-5 fw-bold" style="margin-bottom:-5px;">Oprema za zimsku službu</h2>
    <div class="d-flex justify-content-center">
        <hr class="linijaTim mb-4 text-center">
    </div>

    <div class="zigzag-container">
        <div class="zigzag-item">
            <div class="circle">
                <img src="img/Oprema/majica.png" alt="Proizvod 1" class="img-fluid">
                <p>MAJICA</p>
            </div>
        </div>

        <div class="zigzag-item">
            <div class="circle">
                <img src="img/Oprema/kapa.png" alt="Proizvod 2" class="img-fluid">
                <p>KAPA</p>
            </div>
        </div>

        <div class="zigzag-item">
            <div class="circle">
                <img src="img/Oprema/naocare.png" alt="Proizvod 3" class="img-fluid">
                <p>NAOČARE</p>
            </div>
        </div>
        <div class="zigzag-item visak">
            <div class="circle">
                <img src="img/Oprema/jakna.png" alt="Proizvod 4" class="img-fluid">
                <p>JAKNA</p>
            </div>
        </div>
        <div class="zigzag-item visak">
            <div class="circle">
                <img src="img/Oprema/duks.png" alt="Proizvod 5" class="img-fluid">
                <p>DUKS</p>
            </div>
        </div>
        <div class="zigzag-item visak">
            <div class="circle">
                <img src="img/Oprema/solja.png" alt="Proizvod 6" class="img-fluid">
                <p>ŠOLJA</p>
            </div>
        </div>
        <div class="zigzag-item visak">
            <div class="circle">
                <img src="img/Oprema/kacket.png" alt="Proizvod 7" class="img-fluid">
                <p>KAČKET</p>
            </div>
        </div>
        <div class="zigzag-item visak">
            <div class="circle">
                <img src="img/Oprema/pantalone.png" alt="Proizvod 8" class="img-fluid">
                <p>PANTALONE</p>
            </div>
        </div>
        <div class="zigzag-item visak">
            <div class="circle">
                <img src="img/Oprema/cizme.png" alt="Proizvod 9" class="img-fluid">
                <p>ČIZME</p>
            </div>
        </div>
        <div class="zigzag-item visak">
            <div class="circle">
                <img src="img/Oprema/sal.png" alt="Proizvod 10" class="img-fluid">
                <p>ŠAL</p>
            </div>
        </div>
        <div class="zigzag-item">
            <div class="circle">
                <img src="img/Oprema/ostalo.png" alt="Proizvod" class="img-fluid">
                <p>OSTALO</p>
            </div>
        </div>
        

        

        <!-- Dodaj još krugova za sve proizvode -->
    </div>
</section>







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
                      <a href="https://www.instagram.com/" target="_blank" class="social-icon" rel="noopener">
                          <i class="fab fa-instagram"></i> <!-- Font Awesome ikona za Instagram -->
                      </a>
                      <a href="https://www.facebook.com/" target="_blank" class="social-icon" rel="noopener">
                          <i class="fab fa-facebook-f"></i> <!-- Font Awesome ikona za Facebook -->
                      </a>
                      <a href="https://www.facebook.com/" target="_blank" class="social-icon" rel="noopener">
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
  <script>
        document.addEventListener("DOMContentLoaded", function() {
            // AJAX zahtev za dobijanje podataka iz PHP fajla
            fetch('getData.php')
                .then(response => response.json())
                .then(data => {
                    const rowContainer = document.getElementById('row-container');
                    
                    if (data.length > 0) {
                        data.forEach(item => {
                            const col = document.createElement('div');
                            col.className = 'col-12 col-md-6 col-lg-3 mt-3 divProizvodi';

                            // Kreiranje HTML strukture za kockice
                            col.innerHTML = `
                                <div class="frame">
                                    <span class="group">${item.skracenica}</span>
                                    <img src="img/${item.putanja_do_slike}.png" alt="Slika ${item.naziv}" class="img-fluid">
                                    <div class="white-divider"></div>
                                    <div class="title-container">
                                        <h3 class="title naslovGrupe">${item.naziv}</h3>
                                    </div>
                                </div>
                            `;
                            rowContainer.appendChild(col);
                        });
                    } else {
                        // Ako nema podataka, prikazujemo poruku
                        const noData = document.createElement('div');
                        noData.className = 'col-12 text-center';
                        noData.innerHTML = `<p>Nema dostupnih podataka</p>`;
                        rowContainer.appendChild(noData);
                    }
                })
                .catch(error => {
                    console.error('Greška prilikom dobijanja podataka:', error);
                });
        });
    </script>
    <script>
$(document).ready(function() {
    $.ajax({
        url: 'getData2.php',
        method: 'GET',
        success: function(data) {
            console.log(data); // Ispis podataka u konzolu

            let carouselContent = '';
            let carouselIndicators = '';
            let activeClass = 'active';
            
            // Definiši broj itema po slajdu u zavisnosti od veličine ekrana
            let itemsPerSlide;
            if (window.innerWidth >= 1200) {
                itemsPerSlide = 18; // 18 itema za veće ekrane (1200px i šire)
            } else if (window.innerWidth >= 768) {
                itemsPerSlide = 12;  // 6 itema za srednje ekrane (768px - 1199px)
            } else {
                itemsPerSlide = 4;  // 4 itema za manje ekrane (ispod 768px)
            }

            let totalItems = data.length;

            // Provera da li su podaci u očekivanom formatu
            if (!Array.isArray(data)) {
                console.error('Nevalidan format podataka:', data);
                return;
            }

            // Računanje potrebnog broja slide-ova
            let totalSlides = Math.ceil(totalItems / itemsPerSlide);

            // Kreiranje carousel-indicators na osnovu broja slide-ova
            for (let i = 0; i < totalSlides; i++) {
                carouselIndicators += `<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="${i}" class="${i === 0 ? 'active' : ''}" aria-label="Slide ${i + 1}"></button>`;
            }
            $('.carousel-indicators').html(carouselIndicators);

            // Prolazi kroz svaki item
            data.forEach((item, index) => {
                // Ako je novi slide, započni novu carousel-item
                if (index % itemsPerSlide === 0) {
                    carouselContent += `<div class="carousel-item ${activeClass}"><div class="row mb-5">`;
                    activeClass = ''; // Samo prvi slide ima 'active' klasu
                }

                // Proveri putanju do slike i naziv
                const putanjaDoSlike = item.putanja_do_slike || 'default.jpg'; // Podrazumevana slika
                const naziv = item.ime || 'N/A'; // Koristi 'ime' umesto 'naziv'

                carouselContent += `
                    <div class="col-md-2 col-3 mt-4">
                        <div class="card">
                            <img src="img/LogoFirmi/${putanjaDoSlike}.png" class="card-img-top img-fluid" alt="${naziv}">
                            <div class="card-body">
                                <h3 class="card-title text-center referenceNaslovi">${naziv}</h3>
                            </div>
                        </div>
                    </div>
                `;

                // Zatvara trenutni slide nakon svakog 'itemsPerSlide' elementa ili na kraju podataka
                if ((index + 1) % itemsPerSlide === 0 || index === totalItems - 1) {
                    carouselContent += `</div></div>`;
                }
            });

            $('#carouselContent').html(carouselContent);
        },
        error: function(err) {
            console.error("Greška pri povlačenju podataka:", err);
        }
    });

    // Reagiraj na promenu veličine ekrana da prilagodiš broj prikazanih itema
    $(window).resize(function() {
        location.reload(); // Osvrži stranicu kada se promeni veličina ekrana
    });
});

</script>

<script>
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "EVOTEH",
  "url": "https://www.evoteh.com",
  "logo": "https://www.evoteh.com/logo.png",
  "description": "EVOTEH je lider u prodaji snežnih raonika i opreme za čišćenje snega. Nudimo kvalitetne proizvode za profesionalnu i kućnu upotrebu.",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Ulica 123",
    "addressLocality": "Beograd",
    "addressRegion": "RS",
    "postalCode": "11000",
    "addressCountry": "Serbia"
  },
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "+38112345678",
    "contactType": "Customer Service",
    "availableLanguage": "Serbian"
  }
}
</script>

<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap-image/1.1">
  <url>
    <loc>https://evoteh.rs/</loc>
    <lastmod>2024-10-16</lastmod>
    <changefreq>daily</changefreq>
    <priority>1.0</priority>
  </url>
  <url>
    <loc>https://evoteh.rs/</loc>
    <lastmod>2024-10-16</lastmod>
    <changefreq>monthly</changefreq>
    <priority>0.8</priority>
  </url>
  <url>
    <loc>https://evoteh.rs/</loc>
    <lastmod>2024-10-16</lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.8</priority>
  </url>
  <!-- Dodaj druge URL-ove ovde -->
</urlset>


</body>
</html>