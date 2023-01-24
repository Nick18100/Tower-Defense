<?php
// Initialize the session
session_start()
?>
<!DOCTYPE html>
<html lang="de">
  <head>
    <link rel="stylesheet" href="../../style/style_header.css" />
  </head>
  <body>
    <div class="header-main">
      <div class="header-grid">
        <div class="header-box header-index">
          <a href="../../HTML/Landingpage/index.php" class="header-link header-flex">
            <img
              class="header-image"
              src="../../Images/frog_hat.png"
              alt="Zurück zur Homepage wechseln"
            />
            <div class="header-text-index">Quizician</div>
          </a>
        </div>
        <div class="header-box header-play">
          <a href="/frontend/HTML/Playpage/play.html" class="header-link header-flex">
            <img
              class="header-icon"
              src="../../Images/icon_play.png"
              alt="Zur Quizübersicht wechseln"
            />
            <div class="header-box header-text header-hover">Spielen</div>
          </a>
        </div>
        <div class="header-box header-create">
          <a href="/frontend/HTML/Createpage/create.php" class="header-link header-flex">
            <img
              class="header-icon"
              src="/frontend/Images/icon_create.png"
              alt="Zum Quiz erstellen wechseln"
            />
            <div class="header-box header-text header-hover">Erstellen</div>
          </a>
        </div>      
        <div class='header-box header-login'> 
          <a href='/frontend/HTML/Loginpage/login.php' class='header-link header-flex'>
            <?php if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true): ?>
              <img 
                class='header-loginicon' 
                src='/frontend/Images/profil.png'
                alt='Zu deinen Account wechseln'
              />
            <?php else: ?>
              <img
                class='header-icon'
                src='/frontend/Images/icon_login.png'
                alt='Zur Login Seite wechseln'
              />
              <div class='header-box header-text header-hover'>Anmelden</div>
            <?php endif ?>
          </a>
        </div>
      </div>
    </div>
  </body>
</html>
