<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Forget Password</title>
    <!-- CSS -->
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>

    <?php
    error_reporting(0);
    $alertmsg = $_GET['status'];
    if ($alertmsg == ("Your Password Is Not Updated" || "please Enter Vaild Otp" || "New Password & Confirm password not match")) {
    ?>
        <script>
            swal("Failed", "<?php echo $alertmsg; ?>", "error");
        </script>

        <!-- forgot password -->
        <?php
    }
    include 'conn.php';

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;


    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';

    $msg = "";

    $mail = new PHPMailer(true);
    try {


        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'opencodeservice@gmail.com';
        $mail->Password   = 'ndsglwhxqgkyhppd';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;


        $mail->setFrom('opencodeservice@gmail.com', 'Opencode');

        $otp = mt_rand(100000, 999999);
        setcookie("otp", $otp);

        $sql = "SELECT * FROM adminlogin";
        $result =  mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $email = $row['username'];

            $mail->addAddress($email);


            $mail->isHTML(true);
            $mail->Subject = 'Opencode Otp Verficatication';
            $mail->Body    = '  Your Otp : ' . $otp;
            $mail->send();
            $msg = 'Otp is sent your register email id';
        ?>

    <?php
        }
    } catch (Exception $e) {
        $msg = "Otp could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

    ?>
    <div class="container mt-5 pt-5">
        <div class="my-3 mx-5">
            <span class="my-3 text-danger"><?php echo $msg ?></span>
            <form action="forgotpass.php" method="POST">
                <label for="exampleInputPassword1" class="form-label">Set New Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="New Password" minlength="8" name="npass" required>
                <input type="password" class="form-control my-3" id="exampleInputPassword1" placeholder="Confirm Password" minlength="8" name="cpass" required>
                <input type="number" class="form-control" id="exampleInputPassword1" placeholder="OTP" name="otp" required>
                <input type="hidden" class="form-control" placeholder="OTP" name="otpvar" value="<?php echo $otp ?>">
                <button type="submit" class="btn btn-primary mt-2" name="submit">Update Password</button>
            </form>
        </div>
    </div>

    <!-- JavaScript -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>

</html>