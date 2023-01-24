<!DOCTYPE html>
<html lang="de">
  <head>
    <link rel="stylesheet" href="../../style/style_playbutton.css" />
  </head>
  <body>
    <?php include ("../../Php/functions_randomquiz.php")?>
    <div>
      <a class="playbutton-circle" href='../../Php/quizplayer.php?id=<?= $RANDID ?>' title="Zufälliges Quiz spielen">
        <div class="playbutton-triangle"></div>
      </a>
    </div>
  </body>
</html>
