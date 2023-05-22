<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
    rel="shortcut icon"
    href="./assets/img/img-burger-profil.png"
    type="image/x-icon"
    />
    <link rel="stylesheet" type="text/css" href="./assets/css/contact.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
    href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500&family=Rubik+Mono+One&display=swap"
    rel="stylesheet"
    />
    <link
    href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500&family=Rubik+Mono+One&display=swap"
    rel="stylesheet"
    />
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
    />
    <title>Page contact</title>
  </head>
  <body>
  
  <?php include('burger.php')?>
  
    <section class="contact">
      <div class="content">
        <h1>contactez-nous</h1>
        <p>
          voulez-vous me voir? c'est tres simple, je suis disponible tous les
          jours et je reponds que par email; laissez moi un message en precisant
          l'objet de votre message!
        </p>
      </div>
      <div class="container">
        <div class="contactInfo">
          <div class="box">
            <div class="icon"><i class="fa-solid fa-location-dot"></i></div>
            <div class="text">
              <h3>Address</h3>
              <p>
                45 boulevard tauler, <br />
                67000, <br />
                Strasbourg, France
              </p>
            </div>
          </div>

          <div class="box">
            <div class="icon">
              <i class="fa fa-phone" aria-hidden="true"></i>
            </div>
            <div class="text">
              <h3>Numero</h3>
              <p>07 91 09 28 70</p>
            </div>
          </div>

          <div class="box">
            <div class="icon">
              <i class="fa fa-envelope" aria-hidden="true"></i>
            </div>
            <div class="text">
              <h3>Email</h3>
              <p>chuckydoll@entreprise.com</p>
            </div>
          </div>
        </div>
        <div class="contactForm">
          <form action="">
            <h2>Envoyez un message</h2>
            <div class="inputBox">
              <input type="text" name="" required="required" />
              <span>Full Name</span>
            </div>
            <div class="inputBox">
              <input type="text" name="" required="required" />
              <span>Email</span>
            </div>
            <div class="inputBox">
              <textarea name="message" id="" cols="30" rows="10"></textarea>
              <span>Entrez votre message...</span>
            </div>
            <div class="inputBox">
              <input type="submit" name="" value="send" />
            </div>
          </form>
        </div>
      </div>
    </section>

    <?php include('footer.php')?>
    
    <script src="./script.js"></script>
  </body>
</html>
