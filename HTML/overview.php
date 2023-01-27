<?php include '../Php/db_connect.php';

include "../Php/db_connect.php";
$level = $conn->query("SELECT COUNT(*) AS Anzahl FROM level");
$level = $level->fetch_assoc();
$level = ($level["Anzahl"])

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tower-Defense Login</title>
  <link rel="stylesheet" href="/Style/style_overview.css" />
  <link rel="stylesheet" href="/Style/normalice.css" />


</head>
<body>
  <?php include "header.php" ?>
<div class="main">
    <?php for ($i = 1; $i < $level +1; $i++):?>
        <a href="/Php/play.php?level=<?=$i?>" id = "<?=$i?>" class="element"><?= $i?></a>
    <?php endfor ?>

</div>

</body>
</html>

