<?php

 
// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Bitte gib deinen Benutzernamen ein";
    } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"]))){
        $username_err = "Der Benutzername darf nur Buchstaben, Zahlen oder Unterstriche enthalten";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "Dieser Benutzername existiert bereits!";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Irgendetwas ist schief gelaufen, bitte probieren Sie es später noch einmal.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Bitte gib dein Passwort ein!";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Das Passowrt muss aus mindestens 6 Zeichen bestehen!";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Bitte bestätige das Passowrt.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Die Passwörter stimmen nicht überein!";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
         
        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            
            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // get new User ID and insert it into user_infos table
                $id = $conn->query("SELECT Max(id) AS id FROM users");
                $id = $id->fetch_assoc();
                $id = $id['id'];

                $conn->query("INSERT INTO user_infos (UserID) VALUES ($id)");
                // Redirect to login page
                header("location: login.php");
            } else{
                echo "Oops! Irgendetwas ist schief gelaufen, bitte probieren Sie es später noch einmal.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($conn);
}
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

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
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
