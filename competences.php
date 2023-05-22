<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="shortcut icon"
      href="./assets/img/img-burger-profil.png"
      type="image/x-icon"
    />
    <link rel="stylesheet" href="./assets/css/competences.css" />
    <link rel="stylesheet" href="./assets/css/burger.css" />
    <link
      href="https://fonts.googleapis.com/css?family=Quicksand"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Rubik Mono One"
      rel="stylesheet"
    />
    <title>Quelques compétences cinglantes</title>
  </head>
  <body>
  
  <?php include('burger.php')?>

    <span id="votre_id1" class="target"> </span>
    <span id="votre_id2" class="target"> </span>
    <span id="votre_id3" class="target"> </span>
    <span id="votre_id4" class="target"> </span>

    <section class="section-competences">
      <div class="div-titre">QUELQUES COMPETENCES CINGLANTES</div>
      <div class="div-cadre-diapo">
        <div class="div-interieur-diapo">
          <div class="div-description">
            <span>
              J'ai la force et la rapidité d'un adulte humain. Je suis capable
              de retenir et de tuer facilement des personnes de plus de trois
              fois ma taille sans aucune difficulté.
            </span>
            <img
              src="./assets/img/img-competences-1.png"
              alt="Image compétence numéro 1"
            />
          </div>
          <div class="div-description">
            <span>
              Je peux également manier de nombreux types d'armes sans aucun
              problème. Je suis capable de lancer mon couteau à des distances
              considérables et je suis capable de toucher ma cible en toute
              circonstances.
            </span>
            <img
              src="./assets/img/img-competences-2.png"
              alt="Image compétence numéro 2"
            />
          </div>
          <div class="div-description">
            <span>
              Je connaîs également la magie vaudou et les techniques qui m'ont
              été enseignées par John Bishop. Mon pouvoir le plus dangereux est
              peut-être ma capacité à tromper la mort. Oui je suis immortel !
            </span>
            <img
              src="./assets/img/img-competences-3.png"
              alt="Image compétence numéro 3"
            />
          </div>
          <div class="div-description">
            <span>
              En tant que poupée, j'ai capacité naturelle de me faire passer
              pour une poupée ordinaire, et en plus de cela, je peux aussi
              parler avec une voix d'enfant.
            </span>
            <img
              src="./assets/img/img-competences-4.png"
              alt="Image compétence numéro 4"
            />
          </div>
        </div>
        <ul class="ul-navigation_diapo">
          <li>
            <a href="#votre_id1">
              <img
                src="./assets/img/img-competences-1.png"
                alt="Diapo compétence numéro 1"
              />
            </a>
          </li>
          <li>
            <a href="#votre_id2">
              <img
                src="./assets/img/img-competences-2.png"
                alt="Diapo compétence numéro 2"
              />
            </a>
          </li>
          <li>
            <a href="#votre_id3">
              <img
                src="./assets/img/img-competences-3.png"
                alt="Diapo compétence numéro 3"
              />
            </a>
          </li>
          <li>
            <a href="#votre_id4">
              <img
                src="./assets/img/img-competences-4.png"
                alt="Diapo compétence numéro 4"
              />
            </a>
          </li>
        </ul>
      </div>
      <div class="div-description-mobile">
        <img
          src="./assets/img/img-competences-1.png"
          alt="Image compétence numéro 1"
        />
        <span>
          J'ai la force et la rapidité d'un adulte humain. Je suis capable de
          retenir et de tuer facilement des personnes de plus de trois fois ma
          taille sans aucune difficulté.
        </span>
      </div>
      <div class="div-description-mobile">
        <img
          src="./assets/img/img-competences-2.png"
          alt="Image compétence numéro 2"
        />
        <span>
          Je peux également manier de nombreux types d'armes sans aucun
          problème. Je suis capable de lancer mon couteau à des distances
          considérables et je suis capable de toucher ma cible en toute
          circonstances.
        </span>
      </div>
      <div class="div-description-mobile">
        <img
          src="./assets/img/img-competences-3.png"
          alt="Image compétence numéro 3"
        />
        <span>
          Je connaîs également la magie vaudou et les techniques qui m'ont été
          enseignées par John Bishop. Mon pouvoir le plus dangereux est
          peut-être ma capacité à tromper la mort. Oui je suis immortel !
        </span>
      </div>
      <div class="div-description-mobile">
        <img
          src="./assets/img/img-competences-4.png"
          alt="Image compétence numéro 4"
        />
        <span>
          En tant que poupée, j'ai capacité naturelle de me faire passer pour
          une poupée ordinaire, et en plus de cela, je peux aussi parler avec
          une voix d'enfant.
        </span>
      </div>
      <div class="empty"></div>
       
    </section>
    <?php include('footer.php')?> 
    
    
    <script src="script.js"></script>
  </body>
</html>
