<?php
include "conn.php";

session_start();
if (isset($_POST['loginbtn'])) {
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $query = "select * from adminlogin where username='$email' and password='$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_fetch_assoc($result)) {
        $_SESSION['adminUser'] = $email;
        header("location: index.php");
    } else {
?>
        <script type="text/javascript">
            location.replace("../admin.php");
            alert("Please Enter Correct User Name and Password");
        </script>
<?php
    }
}
