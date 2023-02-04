<?php 
require 'get_level_info.php';
include 'db_connect.php';
$level_nr = $_GET['level'];
$level_info = get_level_information($level_nr);

$level_map = $level_info['map'];

$sql = ("SELECT M.src
        FROM level L
        JOIN maps M ON (L.map = M.id)
        WHERE L.map = $level_map");

$map_src = $conn->query($sql);
$map_src = $map_src->fetch_assoc();
$map_src = $map_src['src'];

$sql3 = ("SELECT * FROM tower");
$tower_info = $conn->query($sql3);
$tower_info = $tower_info->fetch_assoc()

?>

<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link
  href="https://fonts.googleapis.com/css2?family=Changa+One&display=swap"
  rel="stylesheet"
/>
<link rel="stylesheet" href="/Style/style_canvas.css">
<link rel="stylesheet" href="/Style/style_play.css">

<div class="canvas-container">
  <canvas></canvas>
  <div id="gameOver" class="game_over">
    GAME OVER
  </div>
  <div class="container-rounds">
    <div id="round">Lap 1</div>
  </div>
  <div
    class="container">
  <div
    class="container2">
    <!-- coins -->
    <div class="coins">
      <svg
        style="width: 25px; color: gold; margin-right: 5px"
        xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 512 512"
        fill="currentColor"
      >
        <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
        <path
          d="M512 80C512 98.01 497.7 114.6 473.6 128C444.5 144.1 401.2 155.5 351.3 158.9C347.7 157.2 343.9 155.5 340.1 153.9C300.6 137.4 248.2 128 192 128C183.7 128 175.6 128.2 167.5 128.6L166.4 128C142.3 114.6 128 98.01 128 80C128 35.82 213.1 0 320 0C426 0 512 35.82 512 80V80zM160.7 161.1C170.9 160.4 181.3 160 192 160C254.2 160 309.4 172.3 344.5 191.4C369.3 204.9 384 221.7 384 240C384 243.1 383.3 247.9 381.9 251.7C377.3 264.9 364.1 277 346.9 287.3C346.9 287.3 346.9 287.3 346.9 287.3C346.8 287.3 346.6 287.4 346.5 287.5L346.5 287.5C346.2 287.7 345.9 287.8 345.6 288C310.6 307.4 254.8 320 192 320C132.4 320 79.06 308.7 43.84 290.9C41.97 289.9 40.15 288.1 38.39 288C14.28 274.6 0 258 0 240C0 205.2 53.43 175.5 128 164.6C138.5 163 149.4 161.8 160.7 161.1L160.7 161.1zM391.9 186.6C420.2 182.2 446.1 175.2 468.1 166.1C484.4 159.3 499.5 150.9 512 140.6V176C512 195.3 495.5 213.1 468.2 226.9C453.5 234.3 435.8 240.5 415.8 245.3C415.9 243.6 416 241.8 416 240C416 218.1 405.4 200.1 391.9 186.6V186.6zM384 336C384 354 369.7 370.6 345.6 384C343.8 384.1 342 385.9 340.2 386.9C304.9 404.7 251.6 416 192 416C129.2 416 73.42 403.4 38.39 384C14.28 370.6 .0003 354 .0003 336V300.6C12.45 310.9 27.62 319.3 43.93 326.1C83.44 342.6 135.8 352 192 352C248.2 352 300.6 342.6 340.1 326.1C347.9 322.9 355.4 319.2 362.5 315.2C368.6 311.8 374.3 308 379.7 304C381.2 302.9 382.6 301.7 384 300.6L384 336zM416 278.1C434.1 273.1 452.5 268.6 468.1 262.1C484.4 255.3 499.5 246.9 512 236.6V272C512 282.5 507 293 497.1 302.9C480.8 319.2 452.1 332.6 415.8 341.3C415.9 339.6 416 337.8 416 336V278.1zM192 448C248.2 448 300.6 438.6 340.1 422.1C356.4 415.3 371.5 406.9 384 396.6V432C384 476.2 298 512 192 512C85.96 512 .0003 476.2 .0003 432V396.6C12.45 406.9 27.62 415.3 43.93 422.1C83.44 438.6 135.8 448 192 448z"
        />
      </svg>

      <div id="coins">100</div>
    </div>
    <!-- hearts -->
    <div class="hearts">
      <svg
        style="width: 35px; color: red; margin-right: 5px"
        xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 20 20"
        fill="currentColor"
      >
        <path
          fill-rule="evenodd"
          d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
          clip-rule="evenodd"
        />
      </svg>
      <div id="hearts">10</div>
    </div>
  </div>
</div>
</div>

<div class="right">
  <!-- <div class="button-container">
    <div class="button">
    </div>
  </div> -->
  <img id ="0" slot = "0"class="button" onclick ="play_stop(this.slot)" src="/img/play-stop.png" alt="">
</div>

<?php
echo "<script src='/img/Maps/".$level_nr."/placementTilesData.js'></script>";
echo "<script src='/img/Maps/" . $level_nr . "/waypoints.js'></script>";

include "enemies_list.php"?>

<script>

const IMAGE_MAP = "<?=$map_src?>";

const NUMBER_ROUNDS = <?=$level_info['num_of_rounds']?>

const TOWER_COST = <?=$tower_info['cost'] ?>;
const PROJECTILE_SPEED = <?=$tower_info['projectile_speed'] ?>;
const TOWER_DAMAGE = <?=$tower_info['damage'] ?>;
const TOWER_RADIUS = <?=$tower_info['radius']?>;
const IMAGE_TOWER = "<?=$tower_info['src'] ?>";
const IMAGE_PROJECTILE = "<?=$tower_info['projectile_src'] ?>"


</script>

<script src="/JavaScript/functions/spawn_enemies.js"></script>
<script src="/JavaScript/classes/Sprite.js"></script>
<script src="/JavaScript/classes/Building.js"></script>
<script src="/JavaScript/classes/Enemy.js"></script>
<script src="/JavaScript/classes/Projectile.js"></script>
<script src="/JavaScript/classes/PlacementTile.js"></script>
<script src="/JavaScript/index.js"></script>

<script>
  function play_stop(slot){
    if (slot == 0){
      document.getElementById(0).slot = 1
    } else 
    if (slot == 1) {
      const animationId = requestAnimationFrame(animate)
      document.getElementById(0).slot = 0

    }
  }
</script>
