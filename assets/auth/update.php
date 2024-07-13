<?php 
    require "assets/auth/connect.php";
    if (isset($_POST['submit'])) {
        $name = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $updateHidden = $_POST['update_hidden'];
        echo $updateHidden;

        $updateQueuy = "UPDATE user_info SET username='$name',email='$email',password='$password' WHERE id=$updateHidden";

        $connecQuery = mysqli_query($connection,$updateQueuy);
        if ($connecQuery) {
            header("location: index.php");
        }
    }