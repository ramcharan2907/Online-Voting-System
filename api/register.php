<?php
include("connect.php");

// Collect form data
$name = $_POST['name'];
$mobile = $_POST['mobile'];
$password = $_POST['pass'];
$cpassword = $_POST['cpassword'];
$address = $_POST['address'];
$role = $_POST['role'];

// Check if password matches confirm password
if($password === $cpassword){
    // Handle file upload
    $image = $_FILES['photo']['name'];
    $tmp_name = $_FILES['photo']['tmp_name'];
    $uploads_dir = "../uploads/"; // Ensure correct directory path

    // Move uploaded file to destination
    if(move_uploaded_file($tmp_name, $uploads_dir . $image)) {
        // Insert user data into database
        $insert = mysqli_query($connect, "INSERT INTO user (name, mobile, address, password, photo, role, status, votes) VALUES ('$name', '$mobile', '$address', '$password', '$image', '$role', 0, 0)");

        if($insert){
            // Redirect to home page after successful registration
            echo '
            <script>
            alert("Registration Successful!"); 
            window.location = "../";
            </script>';
        } else {
            // Error in database insertion
            echo '
            <script>
            alert("Some error occurred while registering.");
             window.location = "../rout/register.html";
             </script>';
        }
    } else {
        // Error in file upload
        echo '
        <script>
        alert("Error uploading file.");
         window.location = "../rout/register.html";
         </script>';
    }
} else {
    // Password and Confirm password mismatch
    echo '<script>alert("Password and Confirm password do not match."); window.location = "../routes/register.html";</script>';
}
?>
