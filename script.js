document.addEventListener('DOMContentLoaded', function() {
    var carousel = new bootstrap.Carousel(document.querySelector('#carouselExample'), {
        interval: 5000 // automatski interval slajdova
    });

    var carouselElement = document.querySelector('#carouselExample');

    // Funkcija za ažuriranje teksta na osnovu trenutnog slajda
    function updateText(slideIndex) {
        const title1 = document.getElementById('title1');
        const title2 = document.getElementById('title2');
        const description1 = document.getElementById('description1');
        const description2 = document.getElementById('description2');
        const description3 = document.getElementById('description3');

        switch (slideIndex) {
            case 0:
                title1.textContent = "ETR 2V";
                title2.textContent = "Raonici za sneg za viljuškare";
                description1.innerHTML = "<img src='img/height.png' class='me-2 img-fluid'>Visina raonika za sneg: 60cm";
                description2.innerHTML = "<img src='img/width.png' class='me-2 img-fluid'>Širina raonika za sneg: 200cm";
                description3.innerHTML = "<img src='img/weight.png' class='me-2 img-fluid'>Težina raonika za sneg: 250kg";
                break;
            case 1:
                title1.textContent = "ETR 2S";
                title2.textContent = "Raonici za sneg za SUV vozila";
                description1.innerHTML = "<img src='img/height.png' class='me-2 img-fluid'>Visina raonika za sneg: 60cm";
                description2.innerHTML = "<img src='img/width.png' class='me-2 img-fluid'>Širina raonika za sneg: 180cm";
                description3.innerHTML = "<img src='img/weight.png' class='me-2 img-fluid'>Težina raonika za sneg: 150kg";
                break;
            case 2:
                title1.textContent = "ETR 1";
                title2.textContent = "Raonici za sneg za ATV i UTV vozila";
                description1.innerHTML = "<img src='img/height.png' class='me-2 img-fluid'>Visina raonika za sneg: 40cm";
                description2.innerHTML = "<img src='img/width.png' class='me-2 img-fluid'>Širina raonika za sneg: 125cm";
                description3.innerHTML = "<img src='img/weight.png' class='me-2 img-fluid'>Težina raonika za sneg: 55kg";
                break;
            default:
                break;
        }
    }

    // Dodavanje event listener-a za prebacivanje slajda
    carouselElement.addEventListener('slide.bs.carousel', function(event) {
        var nextSlideIndex = event.to; // Dobijamo indeks sledećeg slajda
        updateText(nextSlideIndex);    // Ažuriramo tekst
    });

    // Ručno prebacivanje slajda i teksta putem dugmadi
    window.switchToSlide = function(slideIndex) {
        carousel.to(slideIndex); // Prebacuje sliku
        updateText(slideIndex);  // Ažurira tekst sa slikom
    };
    
});



//ZA DUGME ACTIVE KOJE VISE NE TREBA
/*document.querySelector('.start-animation').addEventListener('click', function() {
    // Aktiviraj animaciju za wrapper (levi i desni deo zajedno) i centralni deo
    let parts = document.querySelectorAll('.slide-in');
    
    parts.forEach((part) => {
      part.classList.add('active');
    });
  });*/

  

  document.addEventListener('DOMContentLoaded', function() {
    const sections = document.querySelectorAll('.fade-in-section, .slide-in');
    
    const observerOptions = {
        threshold: 0,
        rootMargin: "0px 0px -50px 0px"
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                entry.target.classList.add('active');
                console.log('Animacija pokrenuta za: ', entry.target); // Provera
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    sections.forEach(section => {
        observer.observe(section);
    });
});




       
