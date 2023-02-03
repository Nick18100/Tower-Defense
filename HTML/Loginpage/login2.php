<?php
// Initialize the session
session_start();

// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: overview.php");
    exit;
}

// Include config file
	
include "../Php/db_connect.php";


// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = $login_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Bitte gib deinen Benutzernamen ein.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Bitte gib dein Passwort ein";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT iduser, username, password FROM user WHERE username = ?";
        
        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            // Redirect user to welcome page
                            header("location: /HTML/overview.php");
                        } else{
                            // Password is not valid, display a generic error message
                            $login_err = "Falscher Benutzername oder Passwort.";
                            header("location: /HTML/landingpage.php?login=failed");
                        }
                    }
                } else{
                    // Username doesn't exist, display a generic error message
                    $login_err = "Falscher Benutzername oder Passwort.";
                    header("location: /HTML/landingpage.php?login=failed");
                }
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
    <title>Login</title>

    <link rel="stylesheet" href="/Style/login2.css" />
    <link rel="stylesheet" href="/Style/normalice.css">

  </head>
  <body >
    <div class="input-popup index" id="input-popup">
    <!-- <div class="search-popup-content"> -->
    <div class="tt">      

        <form action="" method="post">
        
            <div class="input">
                <label for="username"><strong>Benutzername:</strong></label>
                <input type="text" id="username" name="username" class="<?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                <!-- <span class="invalid-feedback"><?php echo $username_err; ?></span> -->
            </div>    
            <div class="input">
                <label for="password"><strong>Passwort:</strong></label>
                <input type="password" id="password" name="password" class="<?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                <!-- <span class="invalid-feedback"><?php echo $password_err; ?></span> -->
            </div>
            <div class="">
                <input type="reset" class="registerbtn" value="Zurücksetzen">
                <input type="submit" class="registerbtn" value="Einloggen">
            </div >
            <p class="input">Sie haben kein Konto? <a href="#" onclick="hide()">Registrieren sie sich jetzt</a>.</p>
        </form>
    </div>
   

  </div>
</body>
</html>