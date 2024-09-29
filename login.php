<?php
session_start(); // Start the session

// Redirect to welcome page if already logged in
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    header("location: index.php");
    exit;
}

$message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if user credentials match
    if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
        $inputUsername = htmlspecialchars($_POST['username']);
        $inputPassword = $_POST['password'];

        // Verify the password
        if ($inputUsername === $_SESSION['username'] && password_verify($inputPassword, $_SESSION['password'])) {
            $_SESSION['loggedin'] = true; // Set session variable for logged-in status
            header("location: index.php"); // Redirect to welcome page
            exit;
        } else {
            $message = "Invalid username or password!";
        }
    } else {
        $message = "Please register first!";
    }
}
?>


<?php
include "form_header.php";
?>
<style>
        .Register-link {
            text-decoration: none;
            color: #fff;
        }
        .Register-link:hover {
            text-decoration: underline; /* Underline on hover */
        }
        /* .btn-primary{
            background-color: ;
        } */
         .im{
            width: 70px;
            height: 70px;
            margin-top: 20px;
         }
    </style>
 <div class="container">
    <div class="card" style="max-width: 400px; margin: auto; margin-top: 200px; background-color: #080908f2;border: 1px solid #1b00ffe8;color:#fff;">

            <div class="card-body"> 
            <img class="im" src="sanjeev-mart.jpg" alt="img">
            <h5 class="card-title text-center"style="font-size:36px;color:#007BFF ;">Login</h5>
            
<?php if ($message) echo "<p style='color:red;'>$message</p>"; ?>
<form method="post" action="">
<div class="mb-3">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username"class="form-control"  required>
    </div>
    <div class="mb-3">
    <label for="password">Password:</label>
    <input type="password" id="password" name="password"class="form-control"  required>
    </div>
    <div class="mb-3">
    <input type="submit" value="Login"class="btn btn-success w-100 back">
    </div>
    <a href="register.php" class="Register-link">Don't have an account? Register</a>
</form>

</div>
</div>
</div>
<?php
include "form_footer.php";
?>

