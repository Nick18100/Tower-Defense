<?php

include '../../Php/functions_dbconnect.php';

// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}
//get userid
$user = $_SESSION['username'];
$userid = $conn->query("SELECT id
									FROM users
									WHERE username = '$user' ");
$userid = $userid->fetch_assoc();
$userid = $userid["id"];

$statistic = $conn->query("SELECT Quizze_gespielt, Fragen_richtig FROM user_infos WHERE UserID = $userid");
$statistic = $statistic->fetch_assoc();

$statistic2 = $conn->query("SELECT COUNT(*) AS Anzahl FROM Quiz WHERE Ersteller = $userid");
$statistic2 = $statistic2->fetch_assoc();

$played_quizze = $statistic['Quizze_gespielt'];
$correct_questions = $statistic['Fragen_richtig'];
$created_quizze = $statistic2['Anzahl']

    ?>




<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/frontend/style/normalice.css" />
    <title>Dein Profil - Quizician</title>
    <link rel="stylesheet" href="/frontend/style/profile.css">


    <?php include "../favicon.html" ?>

</head>

<body class="font">
    <div class="container">
	
		<a href="/frontend/HTML/Landingpage/index.php" class="button-close" name="Zurück zur Startseite"></a>

        <div class="text">
            <!-- '<div class="profile_pic" href="/frontend/HTML/index.php">
                 <img src="https://images.pexels.com/photos/3777572/pexels-photo-3777572.jpeg" alt="Dein Profilbild" />
            </div>' -->
            <h1>
                Willkommen
                <br>
                <b>
                    <?php echo htmlspecialchars($_SESSION["username"]); ?>
                </b>
            </h1>
        </div>

    <div class="container-middle">
        <h2>
            Erstellte Quizze: <?= $created_quizze ?>
        </h2>
        <a href="/frontend/HTML/Createpage/create.php" class="button">Deine Quizze</a>
        <h2 style="margin-top:7vh">
            Gespielte Quizze: <?= $played_quizze ?>
        </h2>
        <h2>
            Fragen richtig beantwortet: <?= $correct_questions ?>
        </h2>
        <!-- <a href="___.php" class="button">Deine Highscores</a> -->

    </div>


    <p class="button-container">
        <a href="reset-password.php" class="button">Passwort zurücksetzen</a>
        <a href="logout.php" class="button">Ausloggen</a>
        <a href="/frontend/HTML/Landingpage/index.php" class="button">Zurück zur Startseite</a>

    </p>
    </div>


    <!-- <script>
        const file = document.querySelector("#file")

        file.addEventListener("change", function() {

            const reader = new FileReader()
  
            reader.addEventListener("load", () => {
            document.querySelector("#image").src = reader.result
            })

            reader.readAsDataURL(this.files[0])
            console.log(reader)

        })
    </script> -->
</body>

</html>