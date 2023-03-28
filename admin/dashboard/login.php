<?php
include "conn.php";
session_start();
if (isset($_POST['loginbtn'])) {
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $query = "select * from adminlogin where username='$email'";
    $result = mysqli_query($conn, $query);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $encrypted_password = $row["password"];
        // Decrypt and verify the password
        if (password_verify($password, $encrypted_password)) {
            $_SESSION['adminUser'] = $email;
            header("location: index.php");
        } else {
            header('Location: ../admin.php?status=Invaild Password');
        }
    } else {
        header('Location: ../admin.php?status=Invaild Username');
    }
}
