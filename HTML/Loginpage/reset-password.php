<?php
// Initialize the session
session_start();

// Check if the user is logged in, otherwise redirect to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

// Include config file
	
include "../../Php/functions_dbconnect.php";


// Define variables and initialize with empty values
$new_password = $confirm_password = "";
$new_password_err = $confirm_password_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Validate new password
    if(empty(trim($_POST["new_password"]))){
        $new_password_err = "Bitte gib ein neues Passowrt ein.";     
    } elseif(strlen(trim($_POST["new_password"])) < 6){
        $new_password_err = "Das Passwort muss aus mindestens 6 Zeichen bestehen!";
    } else{
        $new_password = trim($_POST["new_password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Bitte bestätige dein Passwort.";
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($new_password_err) && ($new_password != $confirm_password)){
            $confirm_password_err = "Die Passwörter stimmen nicht überein";
        }
    }
        
    // Check input errors before updating the database
    if(empty($new_password_err) && empty($confirm_password_err)){
        // Prepare an update statement
        $sql = "UPDATE users SET password = ? WHERE id = ?";
        
        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "si", $param_password, $param_id);
            
            // Set parameters
            $param_password = password_hash($new_password, PASSWORD_DEFAULT);
            $param_id = $_SESSION["id"];
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Password updated successfully. Destroy the session, and redirect to login page
                session_destroy();
                header("location: login.php");
                exit();
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
    <title>Passwort zurücksetzen - Quizician</title>
    <link rel="stylesheet" href="/frontend/style/login.css">
    <link rel="stylesheet" href="/frontend/style/normalice.css">
    <?php include "../favicon.html" ?>

</head>
<body class="font">
    <div class="container">
        <h1>Passwort zurücksetzen</h1>
        <a href="/frontend/HTML/Landingpage/index.php"> 
            <img class="back-img" src="/frontend/Images/back.png" alt="Zurück zur Homepage wechseln ">
        </a>
        <p>Um das Passwort zurückzusetzen, bitte ausfüllen.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"> 
            <div class="">
                <label for="new_password">Neues Passwort:</label>
                <input type="password" id="new_password" name="new_password" class="<?php echo (!empty($new_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $new_password; ?>">
                <span class="invalid-feedback"><?php echo $new_password_err; ?></span>
            </div>
            <div class="">
                <label for="confirm_password">Passwort wiederholen:</label>
                <input type="password" id="confirm_password" name="confirm_password" class="<?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>">
                <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="">
                <input type="reset" class="registerbtn" value="Eingabe löschen">
                <input type="submit" class="registerbtn" value="Speichern">
            </div>
        </form>
    </div>    
</body>
</html>
