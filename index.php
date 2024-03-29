<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="bootstrap.min.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" /> <!-- aos animation -->
    <link href="images/Logo_AZETTA.png" rel="icon"> <!-- Favicons -->
    <link href="style.css" rel="stylesheet">
    <title>AZETTA</title>
  </head>
  <body>
    <!--==================================  NAVBAR ==================================-->
<header class="header">
  <nav class="navbar navbar-expand-lg fixed-top py-3">
      <div class="container">
              <!-- Logo Image -->
              <img src="images/Logo_AZETTA.png" width="130" alt="logo du site" class="d-inline-block mr-5">
          <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>
          <div id="navbarSupportedContent" class="collapse navbar-collapse">
              <ul class="navbar-nav">
                  <li class="nav-item active"><a href="#propos" class="nav-link text-uppercase font-weight-bold">Qui sommes nous ?<span class="sr-only">(current)</span></a></li>
                  <li class="nav-item"><a href="#public" class="nav-link text-uppercase font-weight-bold">Notre public</a></li>
                  <li class="nav-item"><a href="#action" class="nav-link text-uppercase font-weight-bold">Nos actions</a></li>
                  <li class="nav-item"><a href="#valeur" class="nav-link text-uppercase font-weight-bold">Nos valeurs</a></li>
                  <li class="nav-item"><a href="#contact" class="nav-link text-uppercase font-weight-bold">Nous contacter</a></li>
              </ul>
          </div>
          <div>
            <audio id="track">
                <source src="music.mp3" type="audio/mpeg" />
            </audio>
            <div id="player-container">
                <div id="play-pause" class="play">Play</div>
            </div>
          </div>
      </div>
  </nav>
</header>
<!--================================== BANDEAU ==================================-->
<div class="bandeau container-fluid col-12">
  <div class="titre">
      <h1 class="text-uppercase" id="effect"></h1>
      <h3 id="soustitre">Réseau d'entraide pour l'autonomie des femmes</h3>
  </div>
</div>
<!--==================================  ==================================-->
<div class="container page col-lg-10"> <!--container qui englobe la page-->
  <!--PAGE QUI SOMMES NOUS-->
  <div class="container" id="propos">
      <div class="row">
          <div class="paragraphe col-lg-7">
              <h3 class="mb-5 text-uppercase">Qui sommes-nous ?</h3>
              <p>Le mot Azetta en langue tamazight signifie tissage, ou métier à tisser. C’est une activité ancestrale pratiquée par des femmes dans les régions rurales de l’Afrique du Nord. En sociologie, Aẓeṭṭa Temitti renvoie au réseau social et aux liens de solidarité qui unissent les membres d’une même communauté.</p>
              <p>Samia, Yasmine, Lamia, Lydia, Sara, Thiziri et Rania et la communauté de femmes algériennes</p>
              <p>Nous nous sommes inspirées de ces notions de tissage social pour répondre à un constat commun : le parcours de migration des femmes algériennes est éprouvant et semé d’embûches, notamment à cause de l’isolement social et de la précarité administrative et économique.</p>
              <p>L’association Azetta est un espace de solidarité et de sororité entre femmes algériennes en France. Nous souhaitons renforcer l’esprit d’entraide et offrir un espace physique et digital adapté aux besoins et aux ambitions particulières des femmes algériennes ayant un parcours migratoire et les accompagner vers l’autonomie et l’épanouissement.</p>
              <p>Notre ambition : tisser des liens solides et pérennes tout au long du parcours de migration individuel et collectif des femmes algériennes en France.
                "</p>
          </div>
          <div class="col-lg-5 d-flex align-items-center imageparagraphe"> <!--style="height:"-->
            <!-- <img src="images/image_19.jpg" alt="mains de femme" class="img-fluid"> -->
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="images/Samia.jpeg" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="images/Lydia.jpeg" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="images/Lamia.jpeg" alt="Third slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="images/Rania.jpg" alt="Third slide">
                </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="images/Yasmine.jpeg" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="images/Thiziri.jpeg" alt="Third slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="images/Sarra.jpeg" alt="Third slide">
                  </div>
              </div>
            </div>
        </div>
      </div>
  </div>
  <!--PAGE NOTRE PUBLIC-->
  <div class="container" id="public">
    <div class="row">
        <div class="col-lg-5 d-flex align-items-center imageparagraphe">
          <img src="images/image_1.jpg" alt="femme soudé" class="img-fluid">
        </div>
        <div class="paragraphe col-lg-7 ">
            <h3 class="mb-5 text-uppercase">Notre public</h3>
            <p>L’association cible en priorité les femmes algériennes, de tout âge, ayant un parcours migratoire de l’Algérie vers la France. </p>
            <p>u es une femme algérienne en France , tu rencontres des difficultés ou tu souhaites te mettre en lien avec d’autres femmes algériennes ? Tu souhaites partager ton expérience et tes compétences ? Le réseau Azetta est là pour t’accompagner !
            </p>
            <p>Étudiante, chibania, cadre, sans emploi, en recherche d’activité ou d’informations. </p>
            <p>Azetta accueille toutes les femmes algériennes en migration, quelle que soit leur origine sociale, leur situation économique et administrative, leur orientation sexuelle, dans le respect de l’identité et du parcours de chaque femme. </p>
        </div>
    </div>
</div>
<!--PAGE NOS ACTIONS-->
<div class="container" id="action">
  <div class="row">
      <div class="paragraphe col-lg-12">
          <h3 class="mb-5 text-uppercase">Nos actions</h3>
          <p>Ce réseau se déploie sur plusieurs actions :  </p>
          <ul>
            <li>Accompagnement des femmes en migration : Soutien et orientation en fonction des besoins spécifiques, aide à la recherche de formation ou de logement, mise en relation des membres du réseau (offre et demande de biens et services), accompagnement dans les démarches administratives. </li>
            <li>Mise en place d’un réseau professionnel : partage d’expérience, conseils d’expertes, rencontre avec des rôles modèles, appui à la recherche de stage ou d’emploi (job étudiant ou emploi durable).  </li>
            <li>Rencontre féministe : échanges et réflexions sur les expériences et les contributions des femmes de l’immigration </li>
            <li>Valorisation et partage des savoirs et du patrimoine des femmes du réseau via des ateliers divers : Atelier vélo, atelier chants/chorale, atelier danses, rencontres littéraires, ciné-débat, etc. </li>
          </ul>
      </div>
  </div>
</div>
<!-- actionssssssssssssssssssssssssssssssssssssssssssssssssss -->
<div class="container">
  <div class="row">
    <div class="col-12 ">
      <h3 class="mb-5 text-center text-uppercase">Nos activités</h3>
    </div>
    <div class="action">
      <figure class="snip1576">
        <img src="images/image_13.jpg" alt="sample104" />
        <figcaption>
          <h3>Atelier<span>Chorale</span></h3>
        </figcaption>
        <a href="#"></a>
      </figure>
      <figure class="snip1576 hover"><img src="images/image_5.jpeg" alt="sample103" />
        <figcaption>
          <h3>Atelier<span>Culture</span></h3>
        </figcaption>
        <a href="#"></a>
      </figure>
      <figure class="snip1576"><img src="images/image_14.jpg" alt="sample105" />
        <figcaption>
          <h3>Atelier<span>Vélo</span></h3>
        </figcaption>
        <a href="#"></a>
      </figure>
    </div>
  </div>
</div>
<!-- actionnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnn -->
<!--PAGE NOS VALEURS-->
<div class="container" id="valeur">
  <div class="row">
    <div class="col-lg-5 d-flex align-items-center imageparagraphe">
      <img src="images/image_2.jpg" alt="mais de femmes" class="img-fluid">
    </div>
      <div class="paragraphe col-lg-7 ">
          <h3 class="mb-5 text-uppercase">Nos valeurs</h3>
          <p>Sororité, Bienveillance, Partage, Entraide.</p>
          <p>L’association Azetta est un espace de solidarité féministe ouvert à toutes les femmes algériennes ayant migré en France ou souhaitant venir s’installer en France. Elle valorise tous les sujets liés au vécu des femmes algériennes, en France et en Algérie.
          </p>
      </div>
  </div>
</div>
<!--PAGE CONTACT-->
<!-- esayyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyy -->

<!-- esayyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyy -->
<!--formulaire-->
<div class="container" id="contact">
  <div class="row">
    <div class="col-lg-6">
      <section class="get-in-touch">
          <form class="contact-form row" method="post" action="#retour">
             <div class="form-field col-lg-6">
                <input name="name" id="name" class="input-text js-input" type="text" required>
                <label class="label" for="name">NOM & PRÉNOM</label>
             </div>
             <div class="form-field col-lg-6 ">
                <input name="email" class="input-text email js-input" type="email" required>
                <label class="label" for="email">E-MAIL</label>
             </div>
             <div class="form-field col-lg-10">
                <label class="message" for="message">MESSAGE</label>
                <textarea name="message" cols="60" rows="10"></textarea>
             </div>
             <div class="form-field col-lg-10">
                <input class="submit-btn" type="submit" value="ENVOYER !">
             </div>
          </form>
          <div id="retour" class=""></div>
       </section>
    </div>
    <!--photo contact-->
    <div class="col-lg-6 d-flex">
      <img src="images/image_4.jpg" class="photocontact img-fluid" alt="femme avec drapeau algerie ">
    </div>
  </div>
</div>
<!--PAGE REJOIGNEZ NOUS-->
<!--groupe-->
<div class="container" id="rejoins">
  <div class="text-center mb-5 text-uppercase">
    <h3>Rejoignez-nous !</h3>
  </div>
  <div class="row">
    <div class="col-lg-5 d-flex align-items-center imageparagraphe">
      <img src="images/image_8.jpg" alt="entre aide" class="img-fluid">
    </div>
      <div class="paragraphe col-lg-7 ">
          <p>Un groupe de demande et de proposition d’aide sur Facebook</p>
          <p>Demande d’adhésion:</p>
          <p><a href="https://www.facebook.com/groups/646968259429716" class="lienfacebook">Groupe Facebook Réseau AZETTA</a></p>
      </div>
  </div>
</div>
<!--page-->
<div class="container" id="rejoins">
  <div class="row">
      <div class="paragraphe col-lg-7 ">
          <p>Une page facebook pour suivre l’actualité du réseau et les ateliers et événements par et pour les femmes du groupe Azetta : </p>
          <p><a href="https://www.facebook.com/Azetta.Rezo" class="lienfacebook">Page Facebook AZETTA</a></p>
      </div>
      <div class="col-lg-5 d-flex align-items-center imageparagraphe">
        <img src="images/image_29.jpg" alt="entre aide" class="img-fluid">
      </div>
  </div>
</div>
</div> <!--fin container qui englobe la page-->
<!--==================================  FOOTER ==================================-->
<div class="container-fluid text-center p-4" style="background-color: #F2D0C4;" id="footer">
  <div class="row">
        <!-- Copyright -->
    <div class="col-md-8 offset-md-2 text-center p-5">  <!--<span class="icon">♡</span>-->
        <p style="color:#2A1673;font-weight: bold;">Copyright © 2021 Fait avec ♡ par DesCodeuses.
        </p>
    </div>
        <!-- Copyright -->
    <div class="col-lg-2">
      <img class="img-fluid" src="images/Logo_AZETTA.png" width="100" alt="logo du site">
    </div>
  </div>
</div>


    <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script> <!--effet machine à ecrire-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
      crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="script.js"></script>
  </body>
</html>
