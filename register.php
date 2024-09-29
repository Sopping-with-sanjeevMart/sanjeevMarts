<?php
session_start(); // Start the session

$message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Simple validation
    if (!empty($_POST['username']) && !empty($_POST['password'])) {
        // Store user credentials in the session for simplicity (in a real application, use a database)
        $_SESSION['username'] = htmlspecialchars($_POST['username']);
        $_SESSION['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password
        header("location: login.php"); // Redirect to login page
        exit;
    } else {
        $message = "Please fill in all fields!";
    }
}
?>


<?php
include "form_header.php";
?>

<style>
        .login-link {
            text-decoration: none;
            color: #fff;
        }
        .login-link:hover {
            text-decoration: underline; /* Underline on hover */
        }
        .im{
            width: 70px;
            height: 70px;
            margin-top: 20px;
         }
    </style>
 <div class="container">
    <div class="card" style="max-width: 400px; margin: auto; margin-top: 200px; background-color: #080908f2;border: 1px solid #007BFF;color:#fff;">

            <div class="card-body"> 
            <img class="im" src="sanjeev-mart.jpg" alt="img">
    <h5 class="card-title text-center"style="font-size:36px;color: yellow;">Register</h5>


<?php if ($message) echo "<p style='color:red;'>$message</p>"; ?>
<form method="post" action="">
<div class="mb-3">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username"class="form-control"  required>
   </div>
   <div class="mb-3">
    <label for="password">Password:</label>
    <input type="password" id="password" name="password"class="form-control" required>
   </div>
   <div class="mb-3">
    <input type="submit" value="Register"class="btn btn-info w-100">
    </div>
   
    <a href="login.php" class="login-link">Already have an account? Login</a>
   
</form>


</div>
</div>
</div>
<?php
include "form_footer.php";
?>