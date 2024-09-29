<?php
include "connection.php";
if (isset($_SESSION['user_name'])) {
    header("location:index.php");
}
if(isset($_POST['submit'])){
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$address = $_POST['address'];
$mobile = $_POST['mobile'];

 
$sql = "INSERT INTO clients (name, email, password, address, mobile) VALUES ('$name', '$email', '$password','$address', '$mobile')";
mysqli_query($connection, $sql);

}
?>

<?php
include "form_header.php";
?>

    <div class="container">
    <div class="card" style="max-width: 600px; margin: auto; margin-top: 110px; background-color: #343a40;color:#fff;">

            <div class="card-body"> 
            <?php
// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process the form (you can add your validation here)
    $name = htmlspecialchars($_POST['name']);
    echo "<p style='color: green;'>Thank you, $name! Your Order Sucessfully Conformed.</p>";
}
?>

                <h5 class="card-title text-center"style="font-size:36px;color:#007BFF ;">Sign Up</h5>

                <form action="" method="post">
                    <div class="mb-3">
                        <label for="name" class="form-label">Enter Name</label>
                        <input type="text" name="name" required placeholder="Enter Name" class="form-control"required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Enter Email</label>
                        <input type="email" name="email" required placeholder="Enter Email" class="form-control"required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Enter Password</label>
                        <input type="password" name="password" required placeholder="Enter Password" class="form-control"required>
                    </div>
                    <div class="mb-3">
                        <label for="confirm_password" class="form-label">Confirm Password</label>
                        <input type="password" name="confirm_password" required placeholder="Confirm Password" class="form-control"required>
                    </div>

                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" name="address" required placeholder="Enter Address" class="form-control"required>
                    </div>
                    <div class="mb-3">
                        <label for="mobile" class="form-label">mobile</label>
                        <input type="text" name="mobile" required placeholder="Enter mobile No"maxlength="10"  class="form-control"required>
                    </div>
                    <div class="mb-3">
                        <input type="submit" name="submit" value="submit" class="btn btn-primary w-100">
                    </div>
                </form>
            </div>
        </div>
    </div>


<?php
include "form_footer.php";
?>
