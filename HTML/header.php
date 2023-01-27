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
          <a href="/HTML/overview.php" class="header-link header-flex">
            <div class="header-text-index">Tower-Defense</div>
          </a>
        </div>
        <div class="header-box header-play">
          <a href="/frontend/HTML/Playpage/play.html" class="header-link header-flex">

            <div class="header-box header-text header-hover">Spielen</div>
          </a>
        </div>
        <div class="header-box header-create">
          <a href="/frontend/HTML/Createpage/create.php" class="header-link header-flex">

            <div class="header-box header-text header-hover">Erstellen</div>
          </a>
        </div>      
        <div class='header-box header-login'> 

        </div>
      </div>
    </div>
  </body>
</html>
