<?php
include 'conn.php';

date_default_timezone_set('Asia/Kolkata');

// Contact Form
if (isset($_POST['contactbtnsubmit'])) {

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $msg = $_POST['msg'];

    $datetime = date('Y-m-d H:i:s');;

    $sql = "INSERT INTO message VALUES('','$fname','$lname','$phone','$email','$msg','$datetime')";

    $result = mysqli_query($conn, $sql);

    if (!$result) {
?>
        <script>
            alert("Something Wrong");
        </script>
    <?php
    } else {
        header("Location: ../thankyou.php");
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

    $sql = "INSERT INTO enquire VALUES('','$name','$phone','$email','$service','$subtype',' $projectinfo','$datetime')";

    $result = mysqli_query($conn, $sql);

    if (!$result) {
    ?>
        <script>
            alert("Something Wrong");
        </script>
    <?php
    } else {
        header("Location: ../thankyou.php");
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

    $sql = "INSERT INTO enquire VALUES('','$name','$phone','$email','$service','$subtype',' $projectinfo','$datetime')";

    $result = mysqli_query($conn, $sql);

    if (!$result) {
    ?>
        <script>
            alert("Something Wrong");
        </script>
    <?php
    } else {
        header("Location: ../thankyou.php");
    }

    mysqli_close($conn);
}
// ........ //

// Mail subcription Form
if (isset($_POST['submailbtn'])) {

    $email = $_POST['submail'];

    $datetime = date('Y-m-d H:i:s');;

    $sql = "INSERT INTO mailsubcribe VALUES('','$email','$datetime')";

    $result = mysqli_query($conn, $sql);

    if (!$result) {
    ?>
        <script>
            alert("Something Wrong");
        </script>
<?php
    } else {
        header("Location: ../thankyou.php");
    }

    mysqli_close($conn);
}
// ........ //