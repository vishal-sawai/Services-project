<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Bootstrap Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>

    <?php
    include 'conn.php';
    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    $msg = "";
    $mail = new PHPMailer(true);
    ?>
    <?php


    // send otp from dashbord
    if (isset($_POST['sendotp'])) {

        $email = $_POST['settingEmail'];
        try {

            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'vishalsawai17252@gmail.com';
            $mail->Password   = 'bnjmncgivtjpnusq';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port       = 465;


            $mail->setFrom('vishalsawai17252@gmail.com', 'company name');

            $otp = mt_rand(100000, 999999);
            setcookie("otp", $otp);

            $mail->addAddress($email);


            $mail->isHTML(true);
            $mail->Subject = 'company Name Otp Verficatication';
            $mail->Body    = '  Your Otp : ' . $otp;
            $mail->send();
            $msg = 'Otp is sent your register email id';
        } catch (Exception $e) {
            $msg = "Otp could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    ?>

        <div class="container">
            <div class="m-5 py-5">
                <p class="text-danger fw-bold">* <?php echo $msg; ?></p>
                <form action="" method="post" id="firstotp">
                    <div class="row mb-3">
                        <label for="" class="col-sm-2 col-form-label">OTP</label>
                        <div class="col-sm-10">
                            <input type="text" name="sotp" class="form-control" placeholder="Enter Otp">
                            <input type="hidden" value="<?php echo $otp; ?>" name="preotp" class="form-control">
                        </div>
                    </div>
                    <div class=" row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">New Email</label>
                        <div class="col-sm-10">
                            <input type="email" name="newemail" class="form-control" id="inputEmail3" placeholder="Enter Email">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">New Password</label>
                        <div class="col-sm-10">
                            <input type="password" name="newpass" class="form-control" id="inputPassword3" placeholder="Enter PassWord">
                        </div>
                    </div>
                    <input class="btn btn-danger" type="submit" name="nextotp" value="Next">
                </form>
            </div>
        </div>

        <?php
    }


    // Next btn

    if (isset($_POST['nextotp'])) {
        $sotp = $_POST['sotp'];
        $nmail = $_POST['newemail'];
        $npass = $_POST['newpass'];
        $preotp = $_POST['preotp'];

        if ($preotp == $sotp) {
        ?>
            <script>
                document.getElementById("firstotp").style.display = "none";
            </script>
            <div class="container" id="secondotp">
                <div class="m-5 py-5">
                    <p class="text-danger fw-bold">*OTP MATCH</p>
                    <form action="" method="post">
                        <div class=" row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">New Email verification</label>
                            <div class="col-sm-10">
                                <input type="email" value="<?php echo $nmail; ?>" class="form-control" id="inputEmail3" disabled>
                                <input type="hidden" class="form-control" name="ssemail" value="<?php echo $nmail; ?>" id="exampleInputEmail1" aria-describedby="emailHelp">
                                <input type="hidden" class="form-control" name="sspass" value="<?php echo $npass; ?>" id="exampleInputEmail1" aria-describedby="emailHelp">

                            </div>
                        </div>
                        <input class="btn btn-danger" type="submit" name="thirdotp" value="Send OTP">
                    </form>
                </div>
            </div>
        <?php
        } else {
        ?>
            <script>
                swal("Failed", "OTP NOT MATACH", "error");
            </script>
        <?php
        }
    }

    // Third Otp
    if (isset($_POST['thirdotp'])) {
        $nmail = $_POST['ssemail'];
        $npass = $_POST['sspass'];

        try {

            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'vishalsawai17252@gmail.com';
            $mail->Password   = 'bnjmncgivtjpnusq';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port       = 465;
            $mail->setFrom('vishalsawai17252@gmail.com', 'company name');
            $totp = mt_rand(100000, 999999);
            setcookie("totp", $totp);

            $mail->addAddress($nmail);


            $mail->isHTML(true);
            $mail->Subject = 'company Name Otp Verficatication';
            $mail->Body    = '  Your Otp : ' . $totp;
            $mail->send();
            $msg = 'Otp is sent your new email id';
        } catch (Exception $e) {
            $msg = "Otp could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
        ?>
        <script>
            document.getElementById("secondotp").style.display = "none";
        </script>
        <div class="container" id="thirdotp">
            <div class="m-5 py-5">
                <p class="text-danger fw-bold">* <?php echo $msg; ?></p>
                <form action="" method="post">
                    <div class=" row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">New Email verification</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="ttotp" placeholder="Enter Otp ">
                            <input type="hidden" class="form-control" name="ttemail" value="<?php echo $nmail; ?>" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <input type="hidden" class="form-control" name="ttpass" value="<?php echo $npass; ?>" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <input type="hidden" class="form-control" name="tpotp" value="<?php echo $totp; ?>" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                    </div>
                    <input class="btn btn-danger" type="submit" name="tttotp" value="Submit">
                </form>
            </div>
        </div>
        <?php
    }

    // last otp
    if (isset($_POST['tttotp'])) {
        $tsotp = $_POST['ttotp'];
        $nmail = $_POST['ttemail'];
        $npass = $_POST['ttpass'];
        $tpreotp = $_POST['tpotp'];

        if ($tpreotp == $tsotp) {
            // Encrypting the password
            session_start();
            $currentemail = $_SESSION['adminUser'];
            $encrypted_password = password_hash($npass, PASSWORD_DEFAULT);
            $sql = "UPDATE adminlogin SET username = '$nmail', password = '$encrypted_password' WHERE username = '$currentemail'";
            if ($conn->query($sql) === TRUE) {
        ?>
                <script>
                    swal("Congrats", "Authentication Details Is Changed", "success");
                </script>
            <?php
                session_destroy();
                header('Location: ../admin.php');
            } else {
            ?>
                <script>
                    swal("Failed", "Something Wrong", "error");
                </script>
            <?php
            }
        } else {
            ?>
            <script>
                swal("Failed", "OTP NOT MATACH", "error");
            </script>
    <?php
        }
    }
    ?>

    <!-- javascript -->
    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>