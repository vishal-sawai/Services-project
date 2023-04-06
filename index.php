<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>OPENCODE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <!-- css -->
    <link rel="stylesheet" href="css/style.css">

    <!-- font aweosome -->
    <script src="https://kit.fontawesome.com/ff3c91d27a.js" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>

<body>

    <?php

    error_reporting(0);

    $status = $_GET['status'];
    $alertmsg = $_GET['msg'];
    if ($status == 2) {
    ?>
        <script>
            swal("success", "<?php echo $alertmsg; ?>", "success")
                .then((value) => {
                    if (value === true) {
                        swal(location.replace("index.php"));
                    } else {
                        swal(location.replace("index.php"));
                    }
                });
        </script>
    <?php
    } else if ($status == 3) {
    ?>
        <script>
            swal("Failed", "Something Wrong!", "error").then((value) => {
                if (value === true) {
                    swal(location.replace("index.php"));
                } else {
                    swal(location.replace("index.php"));
                }
            });
        </script>
    <?php
    }
    ?>

    <!-- Navbar -->
    <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a href="index.php" class="navbar-brand logo">
                    <img src="images/opencode.png" height="50" alt="CoolBrand">
                </a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <div class="navbar-nav nav-section">
                            <li><a href="#home" class="nav-item nav-link">Home</a></li>
                            <li><a href="#about" class="nav-item nav-link">About Us</a></li>
                            <li><a href="#service" class="nav-item nav-link">Service</a></li>
                            <li><a href="#webservice" class="nav-item nav-link">Website Service</a></li>
                            <li><a href="#contact-us" class="nav-item nav-link">Contact Us</a></li>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- Home -->
    <div>
        <div id="home">
            <div class="container-fluid home-info py-3 px-5 d-flex">
                <div class="homemain d-flex mt-4 mx-auto">
                    <div class="homefirst pt-5 px-4 float-md-start">
                        <div class="position-relative top-50 start-50 translate-middle">
                            <h1 class="fw-bold text-white my-2"><span class="text-warning">WEB</span> | <span class="text-warning">GRAPHIC</span> | <span class="text-warning">APP</span> </h1>
                            <p class="fw-bold fs-5 text-white">Your business's online presence is not just an option, it's a necessity for success in today's digital world</p>
                            <div class="homebtn d-grid gap-2 col-4">
                                <button class="btn btn-danger fw-bold rounded-pill w-100" type="button" data-bs-toggle="modal" href="#en">Get Started </button>
                            </div>
                        </div>
                    </div>
                    <div class="homesecond float-end">
                        <img class="imagefirst" src="images/home.gif" alt="" srcset="">
                        <img class="imagesecond img-fluid" src="images/home2.gif" alt="" srcset="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- About Us  -->
    <div>
        <div class="about-us py-4" style="background-color: white;" id="about">
            <h1 class="heading">ABOUT US</h1>
            <hr class="bg-primary border border-primary opacity-75 mx-auto mb-3">
            <div class="about-page justify-content-center d-flex flex-wrap mx-5">
                <div class="about-video mx-auto">
                    <video class="position-relative top-50 start-50 translate-middle" controls="controls" />

                    <source src="video/aboutvideo.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="about-info mx-auto">
                    <p class="position-relative top-50 start-50 translate-middle fs-5">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lorem,
                        ipsum dolor sit amet consectetur adipisicing elit.
                        Architecto temporibus natus placeat
                        ipsam
                        aperiam at suscipit autem ut obcaecati, possimus, voluptatum doloremque! Consequatur cum
                        molestiae
                        quaerat ex ducimus beatae doloremque.
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Architecto temporibus natus placeat
                        ipsam
                        aperiam at suscipit autem ut obcaecati, possimus, voluptatum doloremque! Consequatur cum
                        molestiae
                        quaerat ex ducimus beatae doloremque.


                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- service -->
    <div class="service" id="service">
        <div class="container py-5">
            <h1 class="heading text-light">OUR SERVICES</h1>
            <hr class="bg-primary border border-primary  opacity-75 mx-auto mb-4">
            <div class="container">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="service-card card h-100 collapsed" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            <div class="card-body py-3">
                                <div class="text-center fs-1">
                                    <i class="fa-solid fa-globe"></i>
                                    <br>
                                    <span class="fs-5">
                                        Web Development
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="service-card card h-100 collapsed" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            <div class="card-body py-3">
                                <div class="text-center fs-1">
                                    <i class="fa-solid fa-pen-to-square"></i></i>
                                    <br>
                                    <span class="fs-5">
                                        Graphic Designing
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="service-card card h-100 collapsed" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                            <div class="card-body py-3">
                                <div class="text-center fs-1">
                                    <i class="fa-solid fa-mobile-screen-button "></i> <br>
                                    <span class="fs-5">
                                        Mobile App Development
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- sub type -->
            <div class="container mt-1 bg-warning">
                <div class="accordion accordion-flush" id="accordionFlushExample">

                    <!-- web development -->
                    <div class="sub-type my-3 py-5 accordion-collapse collapse accordion-body" id="flush-collapseOne" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class=" row row-cols-1 row-cols-md-4 g-3">
                            <div class="col">
                                <div class="bg-light card h-100 service-sub-card" onclick="formdata('web development','customize')" data-bs-toggle="modal" href="#stm">
                                    <div class="card-body py-3">
                                        <div class="text-center fs-1">
                                            <i class="fa-solid fa-code"></i> <br>
                                            <span class="fs-5">
                                                Customized
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="bg-light card h-100 service-sub-card" onclick="formdata('web development','bootstrap')" data-bs-toggle="modal" href="#stm">
                                    <div class="card-body py-3">
                                        <div class="text-center fs-1">
                                            <i class="fa-brands fa-bootstrap"></i> <br>
                                            <span class="fs-5">
                                                Bootstrap
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="bg-light card h-100 service-sub-card" onclick="formdata('web development','wordpress')" data-bs-toggle="modal" href="#stm">
                                    <div class="card-body py-3">
                                        <div class="text-center fs-1">
                                            <i class="fa-brands fa-wordpress"></i><br>
                                            <span class="fs-5">
                                                Wordpress
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="bg-light card h-100 service-sub-card" onclick="formdata('web development','shopify')" data-bs-toggle="modal" href="#stm">
                                    <div class="card-body py-3">
                                        <div class="text-center fs-1">
                                            <i class="fa-brands fa-shopify"></i> <br>
                                            <span class="fs-5">
                                                Shopify
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="bg-light card h-100 service-sub-card" onclick="formdata('web development','Dynamic And Static')" data-bs-toggle="modal" href="#stm">
                                    <div class="card-body py-3">
                                        <div class="text-center fs-1">
                                            <i class="fa-solid fa-globe"></i><br>
                                            <span class="fs-5">
                                                Dynamic & Static
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="bg-light card h-100 service-sub-card" onclick="formdata('web development','Template Editing')" data-bs-toggle="modal" href="#stm">
                                    <div class="card-body py-3">
                                        <div class="text-center fs-1">
                                            <i class="fa-solid fa-file-pen"></i>
                                            <br>
                                            <span class="fs-5">
                                                Template Editing
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="bg-light card h-100 service-sub-card" onclick="formdata('web development','Bug Fixing')" data-bs-toggle="modal" href="#stm">
                                    <div class="card-body py-3">
                                        <div class="text-center fs-1">
                                            <i class="fa-solid fa-bug"></i> <br>
                                            <span class="fs-5">
                                                Bug Fixing
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="bg-light card h-100 service-sub-card" onclick="formdata('web development','Content upload')" data-bs-toggle="modal" href="#stm">
                                    <div class="card-body py-3">
                                        <div class="text-center fs-1">
                                            <i class="fa-solid fa-upload"></i><br>
                                            <span class="fs-5">
                                                content Upload
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  -->

                    <!-- Graphic Design -->
                    <div class="sub-type my-3 py-5 accordion-collapse collapse accordion-body" id="flush-collapseTwo" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                        <div class=" row row-cols-1 row-cols-md-4 g-3">
                            <div class="col">
                                <div class="bg-light card h-100 service-sub-card" onclick="formdata('Graphic Design','Resume')" data-bs-toggle="modal" href="#stm">
                                    <div class="card-body py-3">
                                        <div class="text-center fs-1">
                                            <i class="fa-solid fa-file"></i><br>
                                            <span class="fs-5">
                                                Resume
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="bg-light card h-100 service-sub-card" onclick="formdata('Graphic Design','Social media post')" data-bs-toggle="modal" href="#stm">
                                    <div class="card-body py-3">
                                        <div class="text-center fs-1">
                                            <i class="fa-solid fa-hashtag"></i> <br>
                                            <span class="fs-5">
                                                Social Media Post
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="bg-light card h-100 service-sub-card" onclick="formdata('Graphic Design','Advertising post')" data-bs-toggle="modal" href="#stm">
                                    <div class="card-body py-3">
                                        <div class="text-center fs-1">
                                            <i class="fa-solid fa-rectangle-ad"></i><br>
                                            <span class="fs-5">
                                                Advertising Post
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="bg-light card h-100 service-sub-card" onclick="formdata('Graphic Design','Poster')" data-bs-toggle="modal" href="#stm">
                                    <div class="card-body py-3">
                                        <div class="text-center fs-1">
                                            <i class="fa-solid fa-sheet-plastic"></i> <br>
                                            <span class="fs-5">
                                                Poster
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="bg-light card h-100 service-sub-card" onclick="formdata('Graphic Design','YouTube Thumbnail')" data-bs-toggle="modal" href="#stm">
                                    <div class="card-body py-3">
                                        <div class="text-center fs-1">
                                            <i class="fa-brands fa-youtube"></i><br>
                                            <span class="fs-5">
                                                YouTube Thumbnail
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="bg-light card h-100 service-sub-card" onclick="formdata('Graphic Design','Logo')" data-bs-toggle="modal" href="#stm">
                                    <div class="card-body py-3">
                                        <div class="text-center fs-1">
                                            <i class="fa-brands fa-square-pied-piper"></i>
                                            <br>
                                            <span class="fs-5">
                                                Logo
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="bg-light card h-100 service-sub-card" onclick="formdata('Graphic Design','Business Card')" data-bs-toggle="modal" href="#stm">
                                    <div class="card-body py-3">
                                        <div class="text-center fs-1">
                                            <i class="fa-solid fa-address-card"></i>
                                            <br>
                                            <span class="fs-5">
                                                business card
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="bg-light card h-100 service-sub-card" onclick="formdata('Graphic Design','Other')" data-bs-toggle="modal" href="#stm">
                                    <div class="card-body py-3">
                                        <div class="text-center fs-1">
                                            <i class="fa-solid fa-ellipsis"></i><br>
                                            <span class="fs-5">
                                                OTHER
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  -->

                    <!-- Mobile App Development -->
                    <div class="sub-type my-3 py-5 accordion-collapse collapse accordion-body" id="flush-collapseThree" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class=" row row-cols-1 row-cols-md-3 g-3">
                            <div class="col mx-auto">
                                <div class="bg-light card h-100 service-sub-card" onclick="formdata('Mobile App Development','Android')" data-bs-toggle="modal" href="#stm">
                                    <div class="card-body py-3">
                                        <div class="text-center fs-1">
                                            <i class="fa-brands fa-android"></i><br>
                                            <span class="fs-5">
                                                Android
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col mx-auto">
                                <div class="bg-light card h-100 service-sub-card" onclick="formdata('Mobile App Development','Hybrid apps')" data-bs-toggle="modal" href="#stm">
                                    <div class="card-body py-3">
                                        <div class="text-center fs-1">
                                            <i class="fa-brands fa-react"></i><br>
                                            <span class="fs-5">
                                                Hybrid apps
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col mx-auto">
                                <div class="bg-light card h-100 service-sub-card" onclick="formdata('Mobile App Development','ios')" data-bs-toggle="modal" href="#stm">
                                    <div class="card-body py-3">
                                        <div class="text-center fs-1">
                                            <i class="fa-brands fa-apple"></i><br>
                                            <span class="fs-5">
                                                IOS
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  -->
    <!--  -->

    <!-- feature -->
    <div class="feature">
        <div class="container">
            <div class="row row-cols-md-4 g-3">
                <div class="col">
                    <div class="feature-card card h-100">
                        <div class="card-body py-3">
                            <div class="text-center fs-1">
                                <i class="fa-solid fa-laptop-code"></i>
                                <br>
                                <span class="fs-5">
                                    High-quality Code
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="feature-card card h-100">
                        <div class="card-body py-3">
                            <div class="text-center fs-1">
                                <i class="fa-solid fa-mobile-screen px-4"></i>
                                <br>
                                <span class="fs-5">
                                    Responsive Design
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="feature-card card h-100">
                        <div class="card-body py-3">
                            <div class="text-center fs-1">
                                <i class="fa-solid fa-headset"></i>
                                <br>
                                <span class="fs-5">
                                    24/7 Support
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="feature-card card h-100">
                        <div class="card-body py-3">
                            <div class="text-center fs-1">
                                <i class="fa-regular fa-comments"></i>
                                <br>
                                <span class="fs-5">
                                    Live Chat
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- sector -->
    <div>
        <div class="container py-5" id="webservice">
            <h2 class="heading container mt-4 text-warni text-center">Web development Services</h2>
            <hr class="bg-primary border border-primary opacity-75 mx-auto mb-4">
            <div>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card s-card" onclick="formdata('Web Development','E-commerce website')" data-bs-toggle="modal" href="#stm">
                            <img src="images/service/shoping.png" class="card-img-top s-card-img" alt="...">
                            <div class="card-body">
                                <h5 class="s-card-footer1 card-title text-center">E-Commerce Website</h5>
                                <h5 class="s-card-footer2 card-title text-center">ENQUIRE NOW</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card s-card" onclick="formdata('Web Development','Education and learning website')" data-bs-toggle="modal" href="#stm">
                            <img src="images/service/eductional.png" class="card-img-top s-card-img" alt="...">
                            <div class="card-body">
                                <h5 class="s-card-footer1 card-title text-center">Education & Learning Website</h5>
                                <h5 class="s-card-footer2 card-title text-center">ENQUIRE NOW</h5>

                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card s-card" onclick="formdata('Web Development','Business Website')" data-bs-toggle="modal" href="#stm">
                            <img src="images/service/business.png" class="card-img-top s-card-img" alt="...">
                            <div class="card-body">
                                <h5 class="s-card-footer1 card-title text-center">Business Website</h5>
                                <h5 class="s-card-footer2 card-title text-center">ENQUIRE NOW</h5>

                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card s-card" onclick="formdata('Web Development','Event Website')" data-bs-toggle="modal" href="#stm">
                            <img src="images/service/event.png" class="card-img-top s-card-img" alt="...">
                            <div class="card-body">
                                <h5 class="s-card-footer1 card-title text-center">Event Website</h5>
                                <h5 class="s-card-footer2 card-title text-center">ENQUIRE NOW</h5>

                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card s-card" onclick="formdata('Web Development','Bloging Website')" data-bs-toggle="modal" href="#stm">
                            <img src="images/service/blogweb.png" class="card-img-top s-card-img" alt="...">
                            <div class="card-body">
                                <h5 class="s-card-footer1 card-title text-center">Bloging Website</h5>
                                <h5 class="s-card-footer2 card-title text-center">ENQUIRE NOW</h5>

                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card s-card" onclick="formdata('Web Development','Portfolio Website')" data-bs-toggle="modal" href="#stm">
                            <img src="images/service/portfolio.png" class="card-img-top s-card-img" alt="...">
                            <div class="card-body">
                                <h5 class="s-card-footer1 card-title text-center">Portfolio Website</h5>
                                <h5 class="s-card-footer2 card-title text-center">ENQUIRE NOW</h5>

                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card s-card" onclick="formdata('Web Development','Personal website')" data-bs-toggle="modal" href="#stm">
                            <img src="images/service/personal.png" class="card-img-top s-card-img" alt="...">
                            <div class="card-body">
                                <h5 class="s-card-footer1 card-title text-center">Personal Website</h5>
                                <h5 class="s-card-footer2 card-title text-center">ENQUIRE NOW</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card s-card" onclick="formdata('Web Development','Information website')" data-bs-toggle="modal" href="#stm">
                            <img src="images/service/Info.png" class="card-img-top s-card-img" alt="...">
                            <div class="card-body">
                                <h5 class="s-card-footer1 card-title text-center">Information Website</h5>
                                <h5 class="s-card-footer2 card-title text-center">ENQUIRE NOW</h5>

                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card s-card" onclick="formdata('Web Development','Other')" data-bs-toggle="modal" href="#stm">
                            <img src="images/service/other.png" class="card-img-top s-card-img" alt="...">
                            <div class="card-body">
                                <h5 class="s-card-footer1 card-title text-center">OTHER</h5>
                                <h5 class="s-card-footer2 card-title text-center">ENQUIRE NOW</h5>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  -->

    <!-- Common Modal -->
    <div class="modal fade" id="en" aria-hidden="true" aria-labelledby="en" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-uppercase fw-bold text-danger" id="en">Enquire Now</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body pt-3 px-5 pb-4">
                    <form action="sql/insert.php" name="commonform" onsubmit="return enquire('commonform')" method="post">
                        <div id="commonformenname" class="mb-3">
                            <label for="" class="form-label float-start">Name</label> <span class="formerror"> </span>
                            <input type="text" class="form-control" name="name" placeholder="Enter Your Name">
                        </div>
                        <div id="commonformenphone" class="mb-3">
                            <label for="" class="form-label float-start">Phone No</label><span class="formerror"> </span>
                            <input type="tel" class="form-control" name="phone" placeholder="Enter Your Phone No">
                        </div>
                        <div id="commonformenemail" class="mb-3">
                            <label for="" class="form-label float-start">Email</label> <span class="formerror"> </span>
                            <input type="email" class="form-control" name="email" placeholder="Enter Your Email">
                        </div>
                        <div>
                            <input type="hidden" name="subtype" value="common">
                        </div>
                        <div id="commonformenservice" class="mb-3">
                            <label for="" class="form-label float-start">Service</label>
                            <select class="form-select" name="service" aria-label="Default select example">
                                <option value="web development">Web Development</option>
                                <option value="graphic designing">Graphic Designing</option>
                                <option value="app development">App development</option>
                            </select>
                        </div>
                        <div id="commonformenproject" class="mb-3">
                            <label for="" class="form-label float-start">About Project</label> <span class="formerror"> </span>
                            <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Write Something About Project" name="project-info" rows="3"></textarea>
                        </div>
                        <div class="d-grid gap-2">
                            <button class="btn btn-danger fw-bold" type="submit" name="enbtnsubmit">SUBMIT</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--  -->

    <!-- all 3 service Modal -->
    <div class="modal fade" id="stm" aria-hidden="true" aria-labelledby="stm" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-uppercase fw-bold text-danger" id="stm">Enquire Now</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body pt-3 px-5 pb-4">
                    <form action="sql/insert.php" name="allserviceform" onsubmit="return enquire('allserviceform')" method="post">
                        <div id="allserviceformenname" class="mb-2">
                            <label for="" class="form-label float-start">Name</label> <span class="formerror"> </span>
                            <input type="text" class="form-control" name="name" placeholder="Enter Your Name">
                        </div>
                        <div id="allserviceformenphone" class="mb-2">
                            <label for="" class="form-label float-start">Phone No</label><span class="formerror"> </span>
                            <input type="tel" class="form-control" name="phone" placeholder="Enter Your Phone No">
                        </div>
                        <div id="allserviceformenemail" class="mb-2">
                            <label for="" class="form-label float-start">Email</label> <span class="formerror"> </span>
                            <input type="email" class="form-control" name="email" placeholder="Enter Your Email">
                        </div>
                        <div>
                            <input type="hidden" name="type" id="type">
                            <input type="hidden" name="subtype" id="subtype">
                        </div>
                        <div id="allserviceformenproject" class="mb-2">
                            <label for="" class="form-label float-start">About Project</label> <span class="formerror"> </span>
                            <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Write Something About Project  " name="project-info" rows="3"></textarea>
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-danger fw-bold" name="allenbtnsubmit">SUBMIT</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--  -->


    <!-- Contact Us -->
    <div>
        <div class="py-5" id="contact-us">
            <h1 class="heading">CONTACT US</h1>
            <hr class="bg-primary border border-primary opacity-75 mx-auto mb-4">
            <p class="text-center fw-bold text-muted fs-5 px-3">
                You can always reach us for any kind of query, complaint, feedback, or suggestion
            </p>
            <div class="contact-page mx-auto py-3">
                <div class="contact-form justify-content-center d-flex flex-wrap p-4">
                    <div class="contact-info w-50 mx-auto">
                        <div class="contact-img position-relative top-50 start-50 translate-middle">
                            <img src="./images/contactus.gif" alt="" srcset="">
                        </div>
                    </div>
                    <div class="cform mx-auto my-1" id="contact-form">
                        <form class="position-relative top-50 start-50 translate-middle" action="sql/insert.php" name="myForm" onsubmit="return validateForm()" method="post">
                            <div class="row g-2">
                                <div class="col-md" id="fname">
                                    <div class="form-floating ">
                                        <input type="text" class="form-control" id="floatingInputGrid" name="fname">
                                        <label for="floatingInputGrid">First Name</label>
                                        <span class="formerror"> </span>
                                    </div>
                                </div>
                                <div class="col-md" id="lname">
                                    <div class="form-floating ">
                                        <input type="text" class="form-control" id="floatingInputGrid" name="lname">
                                        <label for="floatingInputGrid">Last Name</label>
                                        <span class="formerror"> </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-floating" id="phone">
                                <input type="tel" class="form-control" id="floatingPassword" name="phone">
                                <label for="floatingPassword">Phone No</label>
                                <span class="formerror"> </span>
                            </div>
                            <div class="form-floating" id="email">
                                <input type="email" class="form-control" id="floatingInput" name="email">
                                <label for="floatingInput">Email Address</label>
                                <span class="formerror"> </span>
                            </div>
                            <div class="form-floating mb-2" id="msg">
                                <textarea class="form-control" id="floatingTextarea2" style="height: 100px" name="msg"></textarea>
                                <label for="floatingTextarea2">Message</label>
                                <span class="formerror"> </span>
                            </div>
                            <div class="d-grid gap-2 mb-3">
                                <button type="submit" class="btn btn-warning p-2 fw-bold" name="contactbtnsubmit">Send
                                    Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  -->

    <!-- Footer -->
    <footer class="text-center text-white" style="background-color: #250648ff;">
        <!-- Grid container -->
        <div class="container px-4 pt-4">
            <!-- Section: Social media -->
            <!-- <section class="mb-4"> -->
            <!-- Facebook -->
            <!-- <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-facebook-f"></i></a> -->

            <!-- Twitter -->
            <!-- <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-twitter"></i></a> -->

            <!-- Google -->
            <!-- <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-google"></i></a> -->

            <!-- Instagram -->
            <!-- <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-instagram"></i></a> -->

            <!-- Linkedin -->
            <!-- <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-linkedin-in"></i></a> -->

            <!-- Github -->
            <!-- <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-github"></i></a> -->
            </section>
            <!-- Section: Social media -->

            <!-- Section: Form -->
            <section class="">
                <form action="sql/insert.php" name="subform" onsubmit="return newssub()" method="post">
                    <!--Grid row-->
                    <div class="row d-flex justify-content-center">
                        <!--Grid column-->
                        <div class="col-auto">
                            <p class="pt-2">
                                <strong>Sign up for our newsletter</strong>
                            </p>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-5 col-12">
                            <!-- Email input -->
                            <div class="form-outline form-white mb-4" id="submail">
                                <input type="email" name="submail" id="" class="form-control" />
                                <label class="form-label" for="form5Example21">Email address</label>
                                <span class="formerror text-light"> </span>
                            </div>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-auto">
                            <!-- Submit button -->
                            <button type="submit" class="btn btn-outline-light mb-4" name="submailbtn">
                                Subscribe
                            </button>
                        </div>
                        <!--Grid column-->
                    </div>
                    <!--Grid row-->
                </form>
            </section>
        </div>
        <!-- Grid container -->
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2020 Copyright:
            <a class="text-white" href="index.php">OPENCODE</a>
            All Rights Reserved
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->



    <!-- javascript -->
    <script src="js/script.js"></script>

    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>