<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="styles/styles_main.css" />
  <link rel="stylesheet" href="styles/a_propos.css" />
  <link rel="stylesheet" href="styles/galerie_grid.css" />
  <link rel="stylesheet" href="styles/formules_box.css" />
  <link rel="stylesheet" href="styles/form_contact.css" />
  <link rel="stylesheet" href="styles/footer.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Baskervville:ital@0;1&display=swap" rel="stylesheet" />
  <title>Pure Photography</title>
</head>

<body>
  <section id="header">
    <header>
      <div class="video-container">
        <video src="" type="video/mp4" autoplay muted loop></video>
      </div>
      <br />
      <nav>
        <ul>
          <li><a href="#apropos">A propos</a></li>
          <li><a href="#galerie">Galerie</a></li>
          <li><a href="#formules">Formules</a></li>
          <li><a href="#contact">Contact</a></li>
          <li>
            <a href="admin_form.php"><img width="30" height="30" src="https://img.icons8.com/ios/50/000000/settings--v1.png" alt="settings" /></a>
          </li>
          <!-- emplacement provisoire -->
        </ul>
        <br />
      </nav>
    </header>
  </section>

  <main>
    <section id="apropos">
      <h1>A propos de nous</h1>
      <p>
        Pure Photo, c'est l'histoire de deux amis passionnés par l'art de la
        photographie et de la vidéo, embarqués dans une aventure créative et
        humaine. Nous avons opté pour le nom <strong>Pure Photo</strong>,
        symbolisant les valeurs qui animent notre travail :
        <strong>P</strong>assion, <strong>U</strong>nique,
        <strong>R</strong>éel et <strong>É</strong>ternel. Ces principes
        constituent le coeur de notre démarche artistique, et nous aspirons à
        les partager avec vous. Nous sommes impatients de vous retrouver pour
        échanger, créer et capturer des instants précieux ensemble.
        <br /><br />
        À très bientôt derrière l'objectif ! <br /><br />
        Nicolas et Kévin 📸
      </p>
    </section>
    <br />

    <section id="galerie">
      <h2>Galerie</h2>
      <div class="grille">
        <div class="grid-item">
          <img src="img/DSCF6626.jpg" alt="alliances" />
        </div>
        <div class="grid-item">
          <img src="img/DSCF6433.jpg" alt="couple A, photo 1" />
        </div>
        <div class="grid-item">
          <img src="img/DSCF6440.jpg" alt="couple A, photo 2" />
        </div>
        <div class="grid-item">
          <img src="img/DSCF6442.jpg" alt="couple A, photo 3" />
        </div>

        <div class="grid-item">
          <img src="img/DSCF6461.jpg" alt="couple A, photo 4" />
        </div>
        <div class="grid-item">
          <img src="img/DSCF6470.jpg" alt="couple A, photo 5" />
        </div>
        <div class="grid-item">
          <img src="img/IMG_7588.jpg" alt="couple A, photo 6" />
        </div>
        <div class="grid-item">
          <img src="img/DSCF7481.jpg" alt="couple A, photo 7" />
        </div>

        <div class="grid-item">
          <img src="img/DSCF7485.jpg" alt="couple A, photo 8" />
        </div>
        <div class="grid-item">
          <img src="img/DSCF7496.jpg" alt="couple A, photo 9" />
        </div>
        <div class="grid-item">
          <img src="img/DSCF7656.jpg" alt="couple A, photo 10" />
        </div>
        <div class="grid-item">
          <img src="img/DSCF7924.jpg" alt="couple B, photo 1" />
        </div>
      </div>
      <div id="image-popup">
        <span class="close">&times;</span>
        <img class="popup-image" src="" alt="" />
        <span class="prev">&#10094;</span>
        <span class="next">&#10095;</span>
      </div>
      <!-- voir l'image en grand format après le clic -->
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script>
        $(document).ready(function() {
          $(".grid-item img").click(function() {
            var imgSrc = $(this).attr("src");
            $(".popup-image").attr("src", imgSrc);
            $("#image-popup").fadeIn();
          });

          $(".close").click(function() {
            $("#image-popup").fadeOut();
          });

          $(".prev").click(function() {
            var currentImage = $(".popup-image").attr("src");
            var prevImage = $(".grid-item img[src='" + currentImage + "']").parent().prev().find("img").attr("src");
            if (prevImage) {
              $(".popup-image").attr("src", prevImage);
            }
          });

          $(".next").click(function() {
            var currentImage = $(".popup-image").attr("src");
            var nextImage = $(".grid-item img[src='" + currentImage + "']").parent().next().find("img").attr("src");
            if (nextImage) {
              $(".popup-image").attr("src", nextImage);
            }
          });
        });
      </script>
    </section>

    <section id="formules">
      <h2>Formules</h2>
      <div class="formules-container">
        <div class="formule">
          <div class="corail">
            <h3>CORAIL</h3>
            <ul>
              <li>
                Couverture des préparatifs, de la mairie, de la cérémonie et
                du vin d'honneur
              </li>
              <li>
                Traitement individuel des images avec retouches et calibrage
              </li>
              <li>Remise de <strong>200 photos</strong> sur clé USB</li>
              <li>Durée de présence jusqu'à <strong>8 heures</strong></li>
            </ul>
            <h4>OPTION</h4>
            <ul>
              <li>
                Montage vidéo de <strong>5 à 10 minutes</strong> avec musique
              </li>
              <li>
                Prises de vue stabilisées avec caméra professionnelle et drone
              </li>
            </ul>
            <br />
            <div class="prix-container">
              <button class="btn-prix">700 €</button>
            </div>
          </div>
        </div>
        <div class="formule">
          <div class="perle">
            <h3>PERLE</h3>
            <ul>
              <li>
                Couverture complète incluant les préparatifs, la mairie, la
                cérémonie, le vin d'honneur et du repas
              </li>
              <li>
                Traitement individuel des images avec retouches et calibrage
              </li>
              <li>Remise de <strong>300 photos</strong> sur clé USB</li>
              <li>Durée de présence jusqu'à <strong>12 heures</strong></li>
            </ul>
            <h4>OPTION</h4>
            <ul>
              <li>
                Montage vidéo de <strong>10 à 15 minutes</strong> avec musique
              </li>
              <li>
                Prises de vue stabilisées avec caméra professionnelle et drone
              </li>
            </ul>
            <br />
            <div class="prix-container">
              <button class="btn-prix">900 €</button>
            </div>
          </div>
        </div>
      </div>
      <p>
        Pour chaque formule, nous vous proposons des échanges préparatoires
        afin de planifier le déroulement de la journée. Des frais
        supplémentaires de <strong>100 € par heure</strong> seront facturés
        pour toute heure supplémentaire de présence (avec ou sans option).
      </p>
    </section>

    <section id="contact">
      <h2>Contact</h2>
      <form action="form_contact.php" method="POST" class="contact_form">
        <label for="lastname">Nom : </label>
        <input type="text" name="nom" id="nom" required /><br /><br />
        <label for="firstname" id="prenom">Prénom : </label>
        <input type="text" name="prenom" id="nom" required /><br /><br />
        <label for="email">Email : </label>
        <input type="email" name="email" id="email" required /><br /><br />
        <label for="message">Message : </label>
        <textarea id="message" name="message" required></textarea><br /><br />
        <input type="submit" value="Envoyer" />
      </form>
    </section>
  </main>

  <footer class="footer-container">
    <p>&copy; Pure Photography - Tous droits réservés</p>
  </footer>
</body>

</html>