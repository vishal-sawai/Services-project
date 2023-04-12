<?php
include "conn.php";
$newpass = $_POST["npass"];
$cnfpass = $_POST["cpass"];
$otp = $_POST["otp"];
$otpvar = $_POST["otpvar"];


$sql1 = "SELECT * FROM adminlogin";
$result1 =  mysqli_query($conn, $sql1);
if (mysqli_num_rows($result1) > 0) {
    $row = mysqli_fetch_assoc($result1);
    $email = $row['username'];
}
if (isset($_POST['submit'])) {

    if ($newpass == $cnfpass) {
        if ($otp == $otpvar) {
            $encrypted_password = password_hash($cnfpass, PASSWORD_DEFAULT);
            $sql = "UPDATE adminlogin SET Password = '$encrypted_password' WHERE username = '$email'";
            $result =  mysqli_query($conn, $sql);
            if ($result) {
                header('Location: otp.php?statusforget=Your Password Is Changed');
            } else {

                header('Location: otp.php?status=Your Password Is Not Updated');
            }
        } else {
            header('Location: otp.php?status=please Enter Vaild Otp');
        }
    } else {
        header('Location: otp.php?status=New Password & Confirm password not match');
    }
}
