<?php
include 'conn.php';

// Mail configuration
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

$mail->isSMTP();
$mail->Host       = 'smtp.gmail.com';
$mail->SMTPAuth   = true;
$mail->Username   = 'opencodeservice@gmail.com';
$mail->Password   = 'ndsglwhxqgkyhppd';
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
$mail->Port       = 465;
$mail->setFrom('opencodeservice@gmail.com', 'opencode');

// Time Zone
date_default_timezone_set('Asia/Kolkata');

// Contact Form
if (isset($_POST['contactbtnsubmit'])) {

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $msg = $_POST['msg'];

    $datetime = date('Y-m-d H:i:s');

    $sql = "INSERT INTO message(fname,lname,phone,email,msg,datetime) VALUES('$fname','$lname','$phone','$email','$msg','$datetime')";

    $result = mysqli_query($conn, $sql);

    if (!$result) {
        header('Location: ../index.php?status=3');
    } else {
        try {
            $mail->addAddress("sawaivishal9623@gmail.com");
            $mail->isHTML(true);
            $mail->Subject = 'Contact Form';
            $mail->Body    = '  Name : ' . $fname . '  ' . $lname . '<br>' . 'phone: ' . $phone
                . '<br>' . 'Email: ' . $email . '<br>' . 'message: ' . $msg;
            $mail->send();
        } catch (Exception $e) {
            echo "something wrong" . $mail->ErrorInfo;
        }
        header('Location: ../index.php?status=2&msg=Your Message Has Been Sent Successfully');
    }

    mysqli_close($conn);
}
// ........ //

// common enquire Form
if (isset($_POST['enbtnsubmit'])) {

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $subtype = $_POST['subtype'];
    $service = $_POST['service'];
    $projectinfo = $_POST['project-info'];


    $datetime = date('Y-m-d H:i:s');;

    $sql = "INSERT INTO enquire(name,phone,email,service,subtype,projectinfo,datetime) VALUES('$name','$phone','$email','$service','$subtype',' $projectinfo','$datetime')";

    $result = mysqli_query($conn, $sql);

    if (!$result) {
        header('Location: ../index.php?status=3');
    } else {
        try {
            $mail->addAddress("sawaivishal9623@gmail.com");
            $mail->isHTML(true);
            $mail->Subject = 'Common Enquire Form';
            $mail->Body    = '  Name : ' . $name . '<br>' . 'phone: ' . $phone
                . '<br>' . 'Email: ' . $email . '<br>' . 'subtype: ' . $subtype
                . '<br>' . 'Service: ' . $service . '<br>' . 'Project Information: ' . $projectinfo;
            $mail->send();
        } catch (Exception $e) {
            echo "something wrong" . $mail->ErrorInfo;
        }
        header('Location: ../index.php?status=2&msg=Your Request Has Been Submitted');
    }

    mysqli_close($conn);
}
// ........ //

// Enquire Form
if (isset($_POST['allenbtnsubmit'])) {

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $subtype = $_POST['subtype'];
    $service = $_POST['type'];
    $projectinfo = $_POST['project-info'];

    $datetime = date('Y-m-d H:i:s');;

    $sql = "INSERT INTO enquire(name,phone,email,service,subtype,projectinfo,datetime) VALUES('$name','$phone','$email','$service','$subtype',' $projectinfo','$datetime')";

    $result = mysqli_query($conn, $sql);

    if (!$result) {
        header('Location: ../index.php?status=3');
    } else {
        try {
            $mail->addAddress("sawaivishal9623@gmail.com");
            $mail->isHTML(true);
            $mail->Subject = 'Enquire Form';
            $mail->Body    = '  Name : ' . $name . '<br>' . 'phone: ' . $phone
                . '<br>' . 'Email: ' . $email . '<br>' . 'subtype: ' . $subtype
                . '<br>' . 'Service: ' . $service . '<br>' . 'Project Information: ' . $projectinfo;
            $mail->send();
        } catch (Exception $e) {
            echo "something wrong" . $mail->ErrorInfo;
        }
        header('Location: ../index.php?status=2&msg=Your Request Has Been Submitted');
    }

    mysqli_close($conn);
}
// ........ //

// Mail subcription Form
if (isset($_POST['submailbtn'])) {

    $email = $_POST['submail'];

    $datetime = date('Y-m-d H:i:s');;

    $sql = "INSERT INTO mailsubcribe(email,datetime) VALUES('$email','$datetime')";

    $result = mysqli_query($conn, $sql);

    if (!$result) {
        header('Location: ../index.php?status=3');
    } else {
        header('Location: ../index.php?status=2&msg=Your Email Added');
    }

    mysqli_close($conn);
}
// ........ //