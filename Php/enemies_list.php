<?php
include 'db_connect.php';

$sql2 = ("SELECT * FROM enemy ORDER BY id");
$enemy_info = $conn->query($sql2);
$enemy_info = $enemy_info->fetch_all();
?>
<script>
// ORC 1
const ORC1_SPEED = <?= $enemy_info[0][2]?>;
const ORC1_HEALTH = <?= $enemy_info[0][3]?>;
const ORC1_IMAGE = "<?= $enemy_info[0][4]?>";
const ORC1_PAYMENT = <?= $enemy_info[0][5]?>;
const ORC1_DECREASE_HEARTS = <?= $enemy_info[0][6]?>;

const ORC1 = []
ORC1.push(ORC1_IMAGE, ORC1_HEALTH, ORC1_SPEED, ORC1_PAYMENT, ORC1_DECREASE_HEARTS)

// ORC 2 (RUN)
const ORC2_SPEED = <?= $enemy_info[1][2]?>;
const ORC2_HEALTH = <?= $enemy_info[1][3]?>;
const ORC2_IMAGE = "<?= $enemy_info[1][4]?>";
const ORC2_PAYMENT = <?= $enemy_info[1][5]?>;
const ORC2_DECREASE_HEARTS = <?= $enemy_info[1][6]?>;

const ORC2 = []
ORC2.push(ORC2_IMAGE, ORC2_HEALTH, ORC2_SPEED, ORC2_PAYMENT, ORC2_DECREASE_HEARTS)

// TROLL1
const TROLL1_SPEED = <?= $enemy_info[2][2]?>;
const TROLL1_HEALTH = <?= $enemy_info[2][3]?>;
const TROLL1_IMAGE = "<?= $enemy_info[2][4]?>";
const TROLL1_PAYMENT = <?= $enemy_info[2][5]?>;
const TROLL1_DECREASE_HEARTS = <?= $enemy_info[2][6]?>;

const TROLL1 = []
TROLL1.push(TROLL1_IMAGE, TROLL1_HEALTH, TROLL1_SPEED, TROLL1_PAYMENT, TROLL1_DECREASE_HEARTS)

// KNIGHT1
const KNIGHT1_SPEED = <?= $enemy_info[3][2]?>;
const KNIGHT1_HEALTH = <?= $enemy_info[3][3]?>;
const KNIGHT1_IMAGE = "<?= $enemy_info[3][4]?>";
const KNIGHT1_PAYMENT = <?= $enemy_info[3][5]?>;
const KNIGHT1_DECREASE_HEARTS = <?= $enemy_info[3][6]?>;

const KNIGHT1 = []
KNIGHT1.push(KNIGHT1_IMAGE, KNIGHT1_HEALTH, KNIGHT1_SPEED, KNIGHT1_PAYMENT, KNIGHT1_DECREASE_HEARTS)

// KNIGHT2
const KNIGHT2_SPEED = <?= $enemy_info[4][2]?>;
const KNIGHT2_HEALTH = <?= $enemy_info[4][3]?>;
const KNIGHT2_IMAGE = "<?= $enemy_info[4][4]?>";
const KNIGHT2_PAYMENT = <?= $enemy_info[4][5]?>;
const KNIGHT2_DECREASE_HEARTS = <?= $enemy_info[4][6]?>;

const KNIGHT2 = []
KNIGHT2.push(KNIGHT2_IMAGE, KNIGHT2_HEALTH, KNIGHT2_SPEED, KNIGHT2_PAYMENT, KNIGHT2_DECREASE_HEARTS)

// KNIGHT3
const KNIGHT3_SPEED = <?= $enemy_info[5][2]?>;
const KNIGHT3_HEALTH = <?= $enemy_info[5][3]?>;
const KNIGHT3_IMAGE = "<?= $enemy_info[5][4]?>";
const KNIGHT3_PAYMENT = <?= $enemy_info[5][5]?>;
const KNIGHT3_DECREASE_HEARTS = <?= $enemy_info[5][6]?>;

const KNIGHT3 = []
KNIGHT3.push(KNIGHT3_IMAGE, KNIGHT3_HEALTH, KNIGHT3_SPEED, KNIGHT3_PAYMENT, KNIGHT3_DECREASE_HEARTS)

//KNIGHT3 (RUN)
const KNIGHT3_RUN_SPEED = <?= $enemy_info[6][2]?>;
const KNIGHT3_RUN_HEALTH = <?= $enemy_info[6][3]?>;
const KNIGHT3_RUN_IMAGE = "<?= $enemy_info[6][4]?>";
const KNIGHT3_RUN_PAYMENT = <?= $enemy_info[6][5]?>;
const KNIGHT3_RUN_DECREASE_HEARTS = <?= $enemy_info[6][6]?>;

const KNIGHT3_RUN = []
KNIGHT3_RUN.push(KNIGHT3_RUN_IMAGE, KNIGHT3_RUN_HEALTH, KNIGHT3_RUN_SPEED, KNIGHT3_RUN_PAYMENT, KNIGHT3_RUN_DECREASE_HEARTS)


</script>



