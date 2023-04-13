<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <!-- css -->
    <link rel="stylesheet" href="../css/style.css">

    <!-- font aweosome -->
    <script src="https://kit.fontawesome.com/ff3c91d27a.js" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <style>
        .formerror {
            padding-left: 10px;
            color: red;
            opacity: 50%;
        }
    </style>


</head>

<body>
    <?php
    error_reporting(0);

    if ($_GET['status'] == ("Invaild Password" || "Invaild Username")) {
    ?>
        <script>
            swal("Failed", "<?php echo $_GET['status']; ?>", "error")
                .then((value) => {
                    if (value === true) {
                        swal(location.replace("admin.php"));
                    } else {
                        swal(location.replace("admin.php"));
                    }
                });

            <?php
        }
        if ($_GET['statusforget'] == "Your Password Is Changed") {
            ?>

                swal("Congrats", "<?php echo $_GET['statusforget']; ?>", "success")
                    .then((value) => {
                        if (value === true) {
                            swal(location.replace("admin.php"));
                        } else {
                            swal(location.replace("admin.php"));
                        }
                    });

            <?php
        }
            ?>
        </script>

        <div>

            <section class="vh-100" style="background-color: #34495E;">
                <div class="container py-5 h-100">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col col-xl-10">
                            <div class="card" style="border-radius: 1rem;">
                                <div class="row g-0">
                                    <div class="col-md-6 col-lg-5 d-none d-md-block">
                                        <img src="../images/loginimg.jpg" alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                                    </div>
                                    <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                        <div class="card-body p-4 p-lg-5 text-black">

                                            <form action="dashboard/login.php" name="myForm" onsubmit="return validateForm()" method="post">

                                                <div class="d-flex align-items-center mb-4 pb-1">
                                                    <img src="../images/opencode.png" alt="login form" class="img-fluid mx-auto" style="height: 50px;" />
                                                </div>

                                                <div class="form-outline mb-3" id="email">
                                                    <input type="email" id="form2Example17" class="form-control form-control-lg" name="email" />
                                                    <label class="form-label" for="form2Example17">User Name</label>
                                                    <span class="formerror"> </span>

                                                </div>

                                                <div class="form-outline mb-3" id="pass">
                                                    <input type="password" id="form2Example27" name="pass" class="form-control form-control-lg" />
                                                    <label class="form-label" for="form2Example27">Password</label>
                                                    <span class="formerror"> </span>

                                                </div>

                                                <div class="pt-1 mb-4">
                                                    <button class="btn btn-dark btn-lg btn-block" type="submit" name="loginbtn">Login</button>
                                                </div>
                                                <a class="text-primary mt-2 text-decoration-none" href="../sql/otp.php">
                                                    Forgot Password
                                                </a>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>




        <!-- javascript -->
        <script>
            function validateForm() {
                var returnval = true;
                clearErrors();
                // Email
                var email = document.forms['myForm']["email"].value;
                if (email.length == 0) {
                    seterror("email", "*Email is required");
                    returnval = false;
                }
                // password
                var pass = document.forms['myForm']["pass"].value;
                if (email.length == 0) {
                    seterror("pass", "*Password is required");
                    returnval = false;
                }

                return returnval;

            }

            function clearErrors() {
                errors = document.getElementsByClassName('formerror');
                for (let item of errors) {
                    item.innerHTML = "";
                }
            }

            function seterror(id, error) {
                //sets error inside tag of id 
                element = document.getElementById(id);
                element.getElementsByClassName('formerror')[0].innerHTML = error;
            }
        </script>
        <!-- Jquery -->
        <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>