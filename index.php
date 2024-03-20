<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Bowlix</title>
</head>
<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-md fixed-top">
        <div class="container-fluid" id="navbar-container">
            <a class="navbar-brand" href="">Bowlix</a>
                        
            <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="register.html">Rejestracja</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logowanie</a>
                    </li>
                    <li class="nav-item">
                        <button class="btn mb-2" id="btn-reservation">Rezerwuj tor</button>
                    </li>
                </ul>
            </div>
        </div>  
    </nav>
    <!-- NAVBAR -->

    <!-- HEADER -->
    <div class="container-fluid" id="header">
        <div class="container d-flex justify-content-center" id="ball-header">
            <svg width="200" height="200" viewBox="0 0 308 307" fill="none" xmlns="http://www.w3.org/2000/svg" id="bowling-ball">
                <circle cx="154.5" cy="153.5" r="153.5" fill="url(#paint0_linear_632_2)"/>
                <circle cx="153.5" cy="153.5" r="153.5" fill="url(#paint1_linear_632_2)"/>
                <path d="M81.369 77.5769C84.1092 85.6869 79.7561 94.4827 71.6461 97.2229C63.5361 99.9631 54.7403 95.61 52.0001 87.5C49.2599 79.39 53.613 70.5942 61.723 67.854C69.833 65.1138 78.6288 69.4669 81.369 77.5769Z" fill="#C4C3C3"/>
                <ellipse cx="96" cy="48.5" rx="16" ry="15.5" fill="white"/>
                <g style="mix-blend-mode:lighten">
                <circle cx="98.5" cy="51.5" r="15.5" fill="#C4C3C3"/>
                </g>
                <ellipse cx="64.5" cy="80" rx="15.5" ry="16" fill="white"/>
                <circle cx="111" cy="95" r="16" fill="white"/>
                <g style="mix-blend-mode:lighten">
                <circle cx="113.5" cy="97.5" r="15.5" fill="#C4C3C3"/>
                </g>
                <defs>
                <linearGradient id="paint0_linear_632_2" x1="74.5" y1="9" x2="245" y2="349" gradientUnits="userSpaceOnUse">
                <stop stop-color="#6E4AF6"/>
                <stop offset="1" stop-color="#CEC7BF" stop-opacity="0"/>
                </linearGradient>
                <linearGradient id="paint1_linear_632_2" x1="42" y1="31.5" x2="276.5" y2="383" gradientUnits="userSpaceOnUse">
                <stop stop-color="#192136"/>
                <stop offset="1" stop-color="#CEC7BF" stop-opacity="0"/>
                </linearGradient>
                </defs>
            </svg>

            <!--<svg width="235.387" height="235.387" viewBox="0 0 471 471" fill="none" xmlns="http://www.w3.org/2000/svg" class="decor-svg">
                <circle cx="235.387" cy="235.387" r="200" transform="rotate(173.97 235.387 235.387)" fill="url(#paint0_linear_675_111)" class="header-decor"/>
                <defs>
                <linearGradient id="paint0_linear_675_111" x1="101.887" y1="78.3874" x2="235.387" y2="392.387" gradientUnits="userSpaceOnUse">
                <stop stop-color="#5299EC"/>
                <stop offset="1" stop-color="#499CB6" stop-opacity="0"/>
                </linearGradient>
                </defs>
            </svg>

            <svg width="235.387" height="235.387" viewBox="0 0 471 471" fill="none" xmlns="http://www.w3.org/2000/svg" class="decor-svg2">
                <circle cx="235.387" cy="235.387" r="150" transform="rotate(235.387 235.387 173.97)" fill="url(#paint0_linear_675_111)" class="header-decor"/>
                <defs>
                <linearGradient id="paint0_linear_675_111" x1="101.887" y1="78.3874" x2="235.387" y2="392.387" gradientUnits="userSpaceOnUse">
                <stop stop-color="#5299EC"/>
                <stop offset="1" stop-color="#499CB6" stop-opacity="0"/>
                </linearGradient>
                </defs>
            </svg>

            <svg width="235.387" height="235.387" viewBox="0 0 471 471" fill="none" xmlns="http://www.w3.org/2000/svg" class="decor-svg3">
                <circle cx="235.387" cy="235.387" r="125" transform="rotate(235.387 235.387 173.97)" fill="url(#paint0_linear_675_111)" class="header-decor"/>
                <defs>
                <linearGradient id="paint0_linear_675_111" x1="101.887" y1="78.3874" x2="235.387" y2="392.387" gradientUnits="userSpaceOnUse">
                <stop stop-color="#5299EC"/>
                <stop offset="1" stop-color="#499CB6" stop-opacity="0"/>
                </linearGradient>
                </defs>
            </svg>

            <svg width="235.387" height="235.387" viewBox="0 0 471 471" fill="none" xmlns="http://www.w3.org/2000/svg" class="decor-svg4">
                <circle cx="235.387" cy="235.387" r="175" transform="rotate(235.387 235.387 173.97)" fill="url(#paint0_linear_675_111)" class="header-decor"/>
                <defs>
                <linearGradient id="paint0_linear_675_111" x1="101.887" y1="78.3874" x2="235.387" y2="392.387" gradientUnits="userSpaceOnUse">
                <stop stop-color="#5299EC"/>
                <stop offset="1" stop-color="#499CB6" stop-opacity="0"/>
                </linearGradient>
                </defs>
            </svg>-->
        </div>

        <div class="container d-flex justify-content-center">
            <h1 id="header-title">BOWLIX</h1>
        </div>

        <div class="container d-flex justify-content-center">
            <h2 id="header-text">KRĘGLE DLA WSZYSTKICH</h2>
        </div>

        <a href="#cards"><div class="container pt-5 d-flex justify-content-center" id="arrow">
            <div class="button">
                <div class="first">
                    <div class="second"></div>
                </div>
                <div class="third"></div>
                <div class="forth"></div>
            </div>
        </div>
        </a>
    </div>
    <!-- HEADER -->


    <!-- KARTY -->
    <div class="container mt-5" id="cards">
        <div class="row">
            <div class="col-sm-12 col-lg-6" id="col-img">
                <img class="img-fluid" src="resources/pexels-anna-shvets-5952996_Easy-Resize.com.jpg" alt="tor do kręgli">
            </div>

            <div class="col-sm-12 col-lg-6 col-text">
                <h3 class="text-center">KRĘGIELNIA BOWLIX</h3></br>
                <p class="cards-text text-center">
                    Witamy w miejscu, gdzie radość z gry łączy się z atmosferą przyjazną dla każdego, kto kocha kręgle! Nasza kręgielnia to nie tylko zwykłe tory do gry – 
                    to przestrzeń, w której tradycja spotyka się z nowoczesnością, a entuzjazm graczy przeplata się z wyjątkowym designem.
                </p>
            </div>
        </div>

        <div class="row mt-5">
          <div class="col-sm-12 col-lg-6 col-text2">
              <h3 class="text-center">CENNIK</h3></br>
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Dzień tygodnia</th>
                    <th scope="col">w godz. 12:00-16:00</th>
                    <th scope="col">w godz. 16:00-24:00</th>
                  </tr>
                  </thead>                      
                  <tbody>
                    <tr>
                      <th scope="row">Pon,Wt,Śr,Czw</th>
                      <td>80zł</td>
                      <td>80zł</td>
                    </tr>
                    <tr>
                      <th scope="row">Piątek</th>
                      <td>80zł</td>
                      <td>120zł</td>
                    </tr>
                    <tr>
                      <th scope="row">Weekend</th>
                      <td>120zł</td>
                      <td>120zł</td>
                    </tr>
                    <tr>
                      <th scope="row">Święta</th>
                      <td>120zł</td>
                      <td>120zł</td>
                    </tr>
                </tbody>
              </table>
            </div>

            <div class="col-sm-12 col-lg-6" id="col-img">
                <img class="img-fluid" src="resources/pexels-anna-shvets-5952996_Easy-Resize.com.jpg" alt="tor do kręgli">
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-sm-12 col-lg-6" id="col-img">
                <img class="img-fluid" src="resources/pexels-anna-shvets-5952996_Easy-Resize.com.jpg" alt="tor do kręgli">
            </div>

            <div class="col-sm-12 col-lg-6 col-text">
                <h3 class="text-center">GODZINY OTWARCIA</h3></br>
                <p class="cards-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt distinctio, modi quam neque assumenda ipsa consequatur suscipit optio repellat fugit voluptates dicta, voluptatem similique. Dignissimos laudantium odio quo deleniti ea.
                </p>
            </div>
        </div>
        <div class="row mt-5">
            <div class="text-center">
                <button class="btn" id="btn-reservation">Rezerwuj tor</button>
            </div>
        </div>
    </div>
    <!-- KARTY -->
    
    <!-- MAPA GOOGLE -->
    <div class="container-fluid text-center mt-5">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2459.577272971299!2d15.476319867181385!3d51.94166376192036!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470613fe8f692501%3A0xf6fee2d0c9cf4dac!2sBowling%20Club%20Zielona%20G%C3%B3ra!5e0!3m2!1spl!2spl!4v1709062897636!5m2!1spl!2spl" width="80%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <!-- MAPA GOOGLE -->

    <!-- STOPKA -->
    <div class="contaner-fluid pb-5" id="footer">
        <section class="">
            <footer class="text-center text-md-start" id="footer-padding">
              <div class="container">
                <div class="row">
                  <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <h4 class="text-uppercase">Skontaktuj się z nami</h4>
          
                    <ul class="list-unstyled mb-0">
                        <li>
                          <p class="footer-text">bowlix@gmail.com</p>
                        </li>
                        <li>
                          <p class="footer-text">+48 123 123 123</p>
                        </li>
                        <li>
                          <a href="" class="footer-text">Formularz kontaktowy</a>
                        </li>
                      </ul>
                  </div>

                  <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Links</h5>
          
                    <ul class="list-unstyled mb-0">
                      <li>
                        <a href="#!" class="footer-text">Link 1</a>
                      </li>
                      <li>
                        <a href="#!" class="footer-text">Link 2</a>
                      </li>
                      <li>
                        <a href="#!" class="footer-text">Link 3</a>
                      </li>
                      <li>
                        <a href="#!" class="footer-text">Link 4</a>
                      </li>
                    </ul>
                </div>
              </div>
            </footer>
          </section>
    </div>
    <!-- STOPKA -->

    <script src="scripts/smoothscrolling.js"></script> <!-- SKRYPT DO PRZEWIJANIA STRONY -->

</body>
</html>
