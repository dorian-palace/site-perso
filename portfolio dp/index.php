<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="style/style.css" />
  <script src="style/script.js"></script>
  <title>Dorian Palace</title>
</head>

<body>

  <div class="topnav" id="myTopnav">
    <a href="#myTopnav" class="active">Accueil</a>
    <a href="#about">À propos</a>
    <a href="#projets">Projets</a>
    <a href="#formation">Formation</a>
    <a href="#competences">Compétences</a>
    <a href="#contact">Contact</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
  </div>

  <div class="about" id="about">
    <h1 class="nom">DORIAN PALACE</h1>
    <p class="p_pres">
      DÉVELOPPEUR WEB FULL STACK ÉTUDIANT À LAPLATEFORME_ À LA RECHERCHE D'UNE
      ALTERNANCE POUR SEPTEMBRE 2022.
    </p>
  </div>

  <div style="text-align: center">
    <h2 id="projets">PROJETS</h2>
    <p>
      Projets réaliser durant la première année de formation à LAPLATEFORME_
    </p>
  </div>

  <div class="card-group">
    <div class="card">
      <img class="card-img-top" src="style/image/card_blog.png" alt="Card image cap" />
    </div>
    <div class="card">
      <img class="card-img-top" src="style/image/card_resa.png" alt="Card image cap" />
    </div>
    <div class="card">
      <img class="card-img-top" src="style/image/card_cms.png" alt="Card image cap" />
    </div>
  </div>

  <!-- The App Section -->
  <div class="container">
    <div class="row">
      <div class="column-66">
        <h1 class="xlarge-font"><b>CMS</b></h1>
        <h1 class="large-font" style="color: MediumSeaGreen">
          <b>WORDPRESS</b>
        </h1>
        <p>
          <span style="font-size: 36px"> GOODIES UNIVERSE</span> Réalisation
          d'une boutique en ligne à l'aide de wordpress, installation de
          wordpress, modification d'un thème, configuration de WooCommerce.
        </p>
        <button class="button" onclick="window.open('https://dorian-palace.students-laplateforme.io/wordpress/?fbclid=IwAR2tk7gVzy_y_vj8ja7-PI1dE4lyxwS9isEUSnhZfNlyyrll_5l1CMrSOgc');" type="button">
          Lien CMS
        </button>
      </div>
      <div class="column-33">
        <img src="style/image/cms.png" width="335" height="471" />
      </div>
    </div>
  </div>

  <!-- Clarity Section -->
  <!----ancien style="background-color: #f1f1f1"-->
  <div class="container">
    <div class="row">
      <div class="column-33">
        <img src="style/image/resa.png" alt="App" width="335" height="471" />
      </div>
      <div class="column-66">
        <h1 class="xlarge-font"><b>Love</b></h1>
        <h1 class="large-font" style="color: MediumSeaGreen">
          <b>PHP / SQL / HTML / CSS / BOOTSTRAP</b>
        </h1>
        <p>
          <span style="font-size: 24px">RÉSERVATION-SALLE</span>
          Système de réservation, conception de base de données, formulaire de
          réservation, planning avec l'ensemble des réservations effectuées et
          les informations de la reservationsalles ainsi qu'une page dédiée a
          chaque réservation,module de connexion, gestion du profil
          utilisateur.
        </p>
        <button class="button" onclick="window.open('https://dorian-palace.students-laplateforme.io/reservationsalles/index.php');" type="button">
          Lien réservation-salle
        </button>
      </div>
    </div>
  </div>

  <!-- The App Section -->
  <div class="container">
    <div class="row">
      <div class="column-66">
        <h1 class="xlarge-font"><b>Blog</b></h1>
        <h1 class="large-font" style="color: MediumSeaGreen">
          <b>PHP / SQL / HTML / CSS / BOOTSTRAP</b>
        </h1>
        <p>
          Conception de base de données, création d'articles, mise en avant
          des derniers articles publier, page dédiée a chaque article et de
          voir les commentaires pour l'article avec la possibilité d'en
          ajouter ajouter un nouveau, mise en avant des dernier articles,
          panel admin, gestion de profil utilisateurs.
        </p>
        <button class="button" onclick="window.open('https://dorian-palace.students-laplateforme.io/blog/');" type="button">
          LIEN BLOG
        </button>
      </div>
      <div class="column-33">
        <img src="style/image/blog.png" width="335" height="471" />
      </div>
    </div>
  </div>

  <div class="formation" id="formation">
    <h1><b>FORMATION</b></h1>
    <h2 id="laplateforme"><b>LaPlateforme_</b></h2>
    <b style="color: MediumSeaGreen">WEB CODING</b>
    <p>
      Développeur web / web mobile de niveau 5 européen (équivalent BAC+2) en
      cours d'obtention à LaPlateforme_ Étudiant en 1ère année de la Coding
      School à la Plateforme, la nouvelle école du numérique de la Métropole
      Aix-Marseille. Formation de développeur back et front. Pédagogie active
      basée sur des projets et réalisée en alternance en 2de année.
    </p>

    <div class="li_formation">
      <li>Technologies du web</li>
      <li>Maquettage d’applications</li>
      <li>Modélisation de base de données</li>
      <li>Développement de sites web statiques, dynamiques et responsives</li>
      <li>Installation, configuration & déploiement de CMS</li>
    </div>
  </div>

  <div class="competences" id="competences">
    <h1><b>COMPTÉNCES</b></h1>
    <h2>
      <b style="color: mediumseagreen">LANGAGES ET OUTILS DE PROGRAMMATION</b>
    </h2>

    <!----COMPETENCES-->
    <!---CARDS IMAGE LOGO LANGAGES + LIEN -->
    <div class="cards">
      <div class="card_l">
        <img src="style/image/html.png" alt="">
        <p>HTML</p>
      </div>
      <div class="card_l">
        <img src="style/image/css3.png" alt="">
        <p>CSS</p>
      </div>
      <div class="card_l">
        <img src="style/image/javascript.png" alt="">
        <p>javascript</p>
      </div>
      <div class="card_l">
        <img src="style/image/bootsrap.png" alt="">
        <p>Bootstrap</p>
      </div>
      <div class="card_l">
        <img src="style/image/php.png" alt="">
        <p>PHP</p>
      </div>
      <div class="card_l">
        <img src="style/image/mysql.png" alt="">
        <p>MySql</p>
      </div>
      <div class="card_l">
        <img src="style/image/git.png" alt="">
        <p>Git</p>
      </div>
      <div class="card_l">
        <img src="style/image/figma.png" alt="">
        <p>Figma</p>
      </div>
      <div class="card_l">
        <img src="style/image/canva.png" alt="">
        <p>Canva</p>
      </div>
    </div>

    <h2><b>COMPÉTENCES À VENIR EN DEUXIÈME ANNÉE A LAPLATEFORME_</b></h2>
    <div class="cards">
      <div class="card_l">
        <img src="style/image/angular.png" alt="">
        <p>Angular</p>
      </div>
      <div class="card_l">
        <img src="style/image/laravel.png" alt="">
        <p>Laravel</p>
      </div>
      <div class="card_l">
        <img src="style/image/symfony.png" alt="">
        <p>Symfony</p>
      </div>
      <div class="card_l">
        <img src="style/image/vuejs.png" alt="">
        <p>Vuejs</p>
      </div>
      <div class="card_l">
        <img src="style/image/nodejs.png" alt="">
        <p>Nodejs</p>
      </div>
      <div class="card_l">
        <img src="style/image/react.png" alt="">
        <p>React</p>
      </div>
      <div class="card_l">
        <img src="style/image/python.png" alt="">
        <p>Python</p>
      </div>

    </div>

    <h1 id="prix"><b>PRIX</b></h1>
    <h2>
      <b style="color: mediumseagreen">Prix UPE13 Hackathon Challenge PME de La Plateforme_ 2022</b>
    </h2>
  </div>

  <h2 id="h2_contact">Conctactez-moi !</h2>
  <div class="contact" id="contact">
    <a href="https://github.com/dorian-palace" target="blank">
      <img src="style/image/github.png" alt="" id="github">
      <p>Github</p>
    </a>
    <span>0635268233</span>
    <a href="mailto:dorian.palace@laplateforme.io">dorian.palace@laplateforme.io</a>
    <div class="social_contact">

      <a href="https://www.linkedin.com/in/dorian-palace-1a3974230/" target="blank">
        <img src="style/image/linkedin.png" alt="" id="linkedin">
        <p>Linkedin</p>
      </a>
    </div>

  </div>

  <!-------
    DES PHOTOTS DES PROJETS
    AJOUTES BOUTIQUE EN LIGNE EN PREMIERS TOUT EN HAUT
    UNE COULEUR EN PLUS POUR LE BACKGROUND OU DEGRADER QUI MATCH AVEC TOUTE LA PAGE
    -->
  <script>
    function myFunction() {
      var x = document.getElementById("myTopnav");
      if (x.className === "topnav") {
        x.className += " responsive";
      } else {
        x.className = "topnav";
      }
    }
  </script>
</body>

</html>