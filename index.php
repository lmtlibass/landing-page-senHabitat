<?php
session_start();
require_once 'vendor/autoload.php';
require_once 'forms/config/app.php';
require_once 'forms/contact.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SenEspace Website</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link href="assets/css/style.css" rel="stylesheet">
  <style>
    .message-popup {
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      padding: 40px;
      background: rgba(255, 255, 255, 0.2);
      border-radius: 16px;
      box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
      backdrop-filter: blur(5px);
      -webkit-backdrop-filter: blur(5px);
      border: 1px solid rgba(255, 255, 255, 0.3);
      border: 1px solid #ccc;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
      z-index: 1000;
    }

    .success {
      color: green;
      font-family: Verdana, Geneva, Tahoma, sans-serif;
      font-weight: bolder;
      font-size: 14px;
    }

    .error {
      color: red;
      font-family: Verdana, Geneva, Tahoma, sans-serif;
      font-weight: bolder;
      font-size: 14px;
    }
  </style>

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto">
        <a href="index.html">
          <img src="assets/img/logo.png" alt="SenEspace" style="object-fit: contain;">
        </a>
      </h1>
      <!-- Uncomment below if you prefer to use an image logo -->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Accueil</a></li>
          <li><a class="nav-link scrollto" href="#about">Apropo</a></li>
          <li><a class="nav-link scrollto" href="#services">Service</a></li>
          <li><a class="nav-link   scrollto" href="#portfolio">Produit</a></li>
          <li><a class="nav-link scrollto" href="#team">Equipe</a></li>
          <li class="dropdown"><a href="#"><span>Voir Plus</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Nous rejoindre</a></li>
              <li class="dropdown"><a href="#"><span>Collaborer</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Je suis agent immobilier</a></li>
                  <li><a href="#">Je suis propriétaire de maison</a></li>
                  <li><a href="#">Je suis un bailleur</a></li>
                  <li><a href="#">Je veux travailler avec vous</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="getstarted scrollto" href="#about">Visiter !</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Achat et Vente de Maisons</h1>
          <h2>
            Trouvez votre chez-vous idéal, vendez avec facilité!
            Achetez et vendez des maisons en toute simplicité avec notre application!
            <br><strong>Inscrivez-vous maintenant pour ne rien manquer du lancement de notre application !</strong>
          </h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#contact" class="btn-get-started scrollto">S'inscrire</a>
            <a href="#services" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Voir
                Plus</span></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">


    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>A propos de SenEspace
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
              SenEspacene plateforme conviviale, localisée et
              complète qui connecte les acheteurs, les vendeurs et les locataires de biens
              immobiliers au Sénégal. Notre mission est de simplifier le processus de recherche
              immobilière, de promouvoir la transparence et d'autonomiser les utilisateurs pour
              prendre des décisions éclairées.
              SenEspace vise aussi à simplifier la recherche de biens immobiliers au Sénégal pour les senegalais de la diaspora.
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Adaptée au marché sénégalais.
              </li>
              <li><i class="ri-check-double-line"></i> Une large gamme d'annonces immobilières</li>
              <li><i class="ri-check-double-line"></i> Fournir des informations détaillées sur la
                propriété</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              À travers notre
              application mobile conviviale et notre site web, nous visons à offrir une expérience
              fluide pour les utilisateurs recherchant des solutions immobilières résidentielles et
              commerciales.
            </p>
            <a href="#contact" class="btn-learn-more">Voir Plus</a>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
      <div class="container-fluid" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

            <div class="content">
              <h3>Ce que <strong>SenEspace</strong> vous propose</h3>
              <p>
                faciliter l'achat, la vente et la location de biens immobiliers au Sénégal
              </p>
            </div>

            <div class="accordion-list">
              <ul>
                <li>
                  <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span>
                    Expertise Localisée<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                    <p>
                      Adaptée au marché sénégalais, offrant des informations
                      immobilières localisées, un support linguistique et des considérations culturelles.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span>
                    Listings Complets <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      Une large gamme d'annonces immobilières, y compris des
                      maisons, des appartements, des terrains et des espaces commerciaux.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03</span>
                    Autonomisation de l'Utilisateur <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      Fournir des informations détaillées sur la
                      propriété pour permettre aux utilisateurs de prendre des décisions éclairées.
                    </p>
                  </div>
                </li>

              </ul>
            </div>

          </div>

          <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("assets/img/why-us.png");' data-aos="zoom-in" data-aos-delay="150">&nbsp;
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->



    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <p>Nous mettons a votre disposition des informations
            immobilières localisées, un support linguistique et des considérations culturelles.

          </p>
        </div>

        <div class="row">
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="">Maisons</a></h4>
              <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="">Appartements</a></h4>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4><a href="">Terrains</a></h4>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-layer"></i></div>
              <h4><a href="">Espaces commerciaux</a></h4>
              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="row">
          <div class="col-lg-9 text-center text-lg-start">
            <h3>Voulez vous en savoir plus ?</h3>
            <p>
              Si vous souhaitez trouver un space immobilier, oubien exposer, louer ou vendre vos biens immobilier,
              contactez nous a travers notre formulaire de contact en précisant l'objet.
              Un de nos agents vous expliquera tous ce que vous devez savoir.
            </p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#contact">En savoir plus</a>
          </div>
        </div>

      </div>
    </section>
    <!-- End Cta Section -->


    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

      </div>
    </section><!-- End Team Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>

          </p>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Address:</h4>
                <p>Dakar, Sénégal</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>contact@senespace.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Tels:</h4>
                <p>+221 290 25 12</p>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen>
              </iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="" method="post" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Prenom & Nom</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                  <span class="text-danger"><?php echo isset($nameErr) ? $nameErr : ''; ?></span>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Votre Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                  <span class="text-danger"><?php echo isset($emailErr) ? $emailErr : ''; ?></span>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Objet</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
                <span class="text-danger"><?php echo isset($subjectErr) ? $subjectErr : ''; ?></span>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
                <span class="text-danger"><?php echo isset($messageErr) ? $messageErr : ''; ?></span>
              </div>
              <div class="my-3" id="popup" style="display: none;"></div>
              <div id="popup" style="display: none;"></div>
              <div class="text-center"><button type="submit">Envoyer</button></div>
            </form>
          </div>




        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4>Restez informé</h4>
            <p>Rejoignez notre newsletter pour être informé de nos nouveauté</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>SenEspace</h3>
            <p>
              Dakar <br>
              Sénégal<br>
              <br><br>
              <strong>Phone:</strong> +221 78 290 25 12<br>
              <strong>Email:</strong> contact@senespace.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Liens utils</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Accueil</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">A propos</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Contact</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Nos Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Maison</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Appartement</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terrain</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Espaces commerciaux</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Réseaux sociaux</h4>
            <p>Suivez nous sur nos différent réseaux sociaux.</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>SenEspace</span></strong>. Tous droits réservé
      </div>
      <div class="credits">
        Designed by <a href="#">SenEspace</a>
      </div>
    </div>
  </footer>
  <!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <script>
    document.addEventListener("DOMContentLoaded", function() {

      setTimeout(function() {
        <?php if (isset($_SESSION['message'])) : ?>
          var messageText = "<?php echo addslashes($_SESSION['message']['text']); ?>";
          var messageType = "<?php echo $_SESSION['message']['type']; ?>";
          var messagePopup = document.createElement("div");
          messagePopup.classList.add("message-popup", messageType);
          messagePopup.textContent = messageText;
          document.body.appendChild(messagePopup);
          setTimeout(function() {
            messagePopup.remove();
          }, 5000); // Supprimer le popup après 5 secondes
          <?php unset($_SESSION['message']); ?> // Pour supprimer la session après avoir affiché le message
        <?php endif; ?>
      }, 1000); // Afficher le popup après 1 seconde (pour la démo)
    });
  </script>
  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>


</body>

</html>