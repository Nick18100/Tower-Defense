<?php

 
// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
 

?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registrierung - Quizician</title>
    <link rel="stylesheet" href="/Style/login2.css">
    <link rel="stylesheet" href="/Style/normalice.css">
</head>
<body class="">
    <div id ="register" class="input-popup index2 register">
        <!-- <h1> Registrierung </h1> -->

        <form action="/Php/user_insert.php" method="post">
            <div class="input">
                <label for="username"><strong>Benutzername:</strong></label>
                <input type="text" id="username" name="username" class="<?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
            </div>    
            <div class="input">
                <label for="password"><strong>Passwort:</strong></label>
                <input type="password" id="password" name="password" class="<?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
            </div>
            <div class="input">
                <label for="confirm_password"><strong>Passwort wiederholen:</strong></label>
                <input type="password" id="confirm_password" name="confirm_password" class="<?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_password; ?>">
            </div>
            <div class="">
                <input type="reset" class="registerbtn" value="Zurücksetzen">
                <input type="submit" class="registerbtn" value="Speichern">
            </div>
            <p class="input">Sie haben schon ein Konto? <a href="#" onclick="registerlogin()">Hier einloggen</a>.</p>
        </form>
    </div>    
</body>
</html>
