<!doctype html>
<html lang="wd">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <!-- css -->
    <link rel="stylesheet" href="css/style.css">

    <!-- font aweosome -->
    <script src="https://kit.fontawesome.com/ff3c91d27a.js" crossorigin="anonymous"></script>


</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="images/lo.jpg" alt="" width="30" height="24" class="d-inline-block align-text-top">
                Tech-World
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- Home -->
    <div>
        <div id="home">
            <div class="home-info">
                <h1 class="text-center fw-bold">TECH-WORLD</h1>
                <h3 class="text-center">Make Your Website</h3>
                <div class="d-grid gap-2 col-3 mx-auto">
                    <button class="btn btn-warning" type="button" data-bs-toggle="modal" href="#en">Enquire Now</button>
                </div>

            </div>
        </div>
    </div>

    <!-- About Us  -->
    <div>
        <div class="about-us py-5" style="background-color: white;">
            <h1 class="heading">ABOUT ABC</h1>
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
    <div class="service">
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
                                <div class="bg-light card h-100 service-sub-card" data-bs-toggle="modal" href="#wd">
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
                                <div class="bg-light card h-100 service-sub-card" data-bs-toggle="modal" href="#wd">
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
                                <div class="bg-light card h-100 service-sub-card" data-bs-toggle="modal" href="#wd">
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
                                <div class="bg-light card h-100 service-sub-card" data-bs-toggle="modal" href="#wd">
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
                                <div class="bg-light card h-100 service-sub-card" data-bs-toggle="modal" href="#wd">
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
                                <div class="bg-light card h-100 service-sub-card" data-bs-toggle="modal" href="#wd">
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
                                <div class="bg-light card h-100 service-sub-card" data-bs-toggle="modal" href="#wd">
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
                                <div class="bg-light card h-100 service-sub-card" data-bs-toggle="modal" href="#wd">
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
                                <div class="bg-light card h-100 service-sub-card" data-bs-toggle="modal" href="#gd">
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
                                <div class="bg-light card h-100 service-sub-card" data-bs-toggle="modal" href="#gd">
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
                                <div class="bg-light card h-100 service-sub-card" data-bs-toggle="modal" href="#gd">
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
                                <div class="bg-light card h-100 service-sub-card" data-bs-toggle="modal" href="#gd">
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
                                <div class="bg-light card h-100 service-sub-card" data-bs-toggle="modal" href="#gd">
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
                                <div class="bg-light card h-100 service-sub-card" data-bs-toggle="modal" href="#gd">
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
                                <div class="bg-light card h-100 service-sub-card" data-bs-toggle="modal" href="#gd">
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
                                <div class="bg-light card h-100 service-sub-card" data-bs-toggle="modal" href="#gd">
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
                                <div class="bg-light card h-100 service-sub-card" data-bs-toggle="modal" href="#ad">
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
                                <div class="bg-light card h-100 service-sub-card" data-bs-toggle="modal" href="#ad">
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
                                <div class="bg-light card h-100 service-sub-card" data-bs-toggle="modal" href="#ad">
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
        <div class="container my-5">
            <h2 class="heading container mt-4 text-warni text-center">Web development Services</h2>
            <hr class="bg-primary border border-primary opacity-75 mx-auto mb-4">
            <div>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card s-card" data-bs-toggle="modal" href="#wd">
                            <img src="images/service/shoping.png" class="card-img-top s-card-img" alt="...">
                            <div class="card-body">
                                <h5 class="s-card-footer1 card-title text-center">E-Commerce Website</h5>
                                <h5 class="s-card-footer2 card-title text-center">ENQUIRE NOW</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card s-card" data-bs-toggle="modal" href="#wd">
                            <img src="images/service/eductional.png" class="card-img-top s-card-img" alt="...">
                            <div class="card-body">
                                <h5 class="s-card-footer1 card-title text-center">Education & Learning Website</h5>
                                <h5 class="s-card-footer2 card-title text-center">ENQUIRE NOW</h5>

                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card s-card" data-bs-toggle="modal" href="#wd">
                            <img src="images/service/business.png" class="card-img-top s-card-img" alt="...">
                            <div class="card-body">
                                <h5 class="s-card-footer1 card-title text-center">Business Website</h5>
                                <h5 class="s-card-footer2 card-title text-center">ENQUIRE NOW</h5>

                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card s-card" data-bs-toggle="modal" href="#wd">
                            <img src="images/service/event.png" class="card-img-top s-card-img" alt="...">
                            <div class="card-body">
                                <h5 class="s-card-footer1 card-title text-center">Event Website</h5>
                                <h5 class="s-card-footer2 card-title text-center">ENQUIRE NOW</h5>

                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card s-card" data-bs-toggle="modal" href="#wd">
                            <img src="images/service/blogweb.png" class="card-img-top s-card-img" alt="...">
                            <div class="card-body">
                                <h5 class="s-card-footer1 card-title text-center">Bloging Website</h5>
                                <h5 class="s-card-footer2 card-title text-center">ENQUIRE NOW</h5>

                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card s-card" data-bs-toggle="modal" href="#wd">
                            <img src="images/service/portfolio.png" class="card-img-top s-card-img" alt="...">
                            <div class="card-body">
                                <h5 class="s-card-footer1 card-title text-center">Portfolio Website</h5>
                                <h5 class="s-card-footer2 card-title text-center">ENQUIRE NOW</h5>

                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card s-card" data-bs-toggle="modal" href="#wd">
                            <img src="images/service/personal.png" class="card-img-top s-card-img" alt="...">
                            <div class="card-body">
                                <h5 class="s-card-footer1 card-title text-center">Personal Website</h5>
                                <h5 class="s-card-footer2 card-title text-center">ENQUIRE NOW</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card s-card" data-bs-toggle="modal" href="#wd">
                            <img src="images/service/Info.png" class="card-img-top s-card-img" alt="...">
                            <div class="card-body">
                                <h5 class="s-card-footer1 card-title text-center">Information Website</h5>
                                <h5 class="s-card-footer2 card-title text-center">ENQUIRE NOW</h5>

                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card s-card" data-bs-toggle="modal" href="#wd">
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
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="en">Enquire Now</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body ">
                    <form action="" method="POST">
                        <label for="" class="form-label float-start">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter Your Name" required>
                        <label for="" class="form-label float-start">Phone No</label>
                        <input type="tel" class="form-control" name="phone" placeholder="Enter Your Phone No" required>
                        <label for="" class="form-label float-start">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter Your Email" required>

                        <select class="form-select" aria-label="Default select example">
                            <option value="web development">Web Development</option>
                            <option value="graphic designing">Graphic Designing</option>
                            <option value="app development">App development</option>
                        </select>
                        <!-- <input type="hidden" class="form-control" name="service" value="web development" required> -->
                        <label for="" class="form-label float-start">About Project</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Project Details" name="project-info" rows="3" required></textarea>
                        <div class="modal-footer">
                            <input class="btn btn-primary" type="submit" name="submit" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--  -->

    <!-- Web development Modal -->
    <div class="modal fade" id="wd" aria-hidden="true" aria-labelledby="wd" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="wd">Enquire Now</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body ">
                    <form action="" method="POST">
                        <label for="" class="form-label float-start">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter Your Name" required>
                        <label for="" class="form-label float-start">Phone No</label>
                        <input type="tel" class="form-control" name="phone" placeholder="Enter Your Phone No" required>
                        <label for="" class="form-label float-start">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter Your Email" required>
                        <input type="hidden" class="form-control" name="service" value="web development" required>
                        <label for="" class="form-label float-start">About Project</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Project Details" name="project-info" rows="3" required></textarea>
                        <div class="modal-footer">
                            <input class="btn btn-primary" type="submit" name="submit" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--  -->

    <!-- Graphic Modal -->
    <div class="modal fade" id="gd" aria-hidden="true" aria-labelledby="gd" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="gd">Enquire Now</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body ">
                    <form action="" method="POST">
                        <label for="" class="form-label float-start">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter Your Name" required>
                        <label for="" class="form-label float-start">Phone No</label>
                        <input type="tel" class="form-control" name="phone" placeholder="Enter Your Phone No" required>
                        <label for="" class="form-label float-start">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter Your Email" required>
                        <input type="hidden" class="form-control" name="service" value="graphic designing" required>
                        <label for="" class="form-label float-start">About Design</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Design Details" name="project-info" rows="3" required></textarea>
                        <div class="modal-footer">
                            <input class="btn btn-primary" type="submit" name="submit" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--  -->

    <!-- App development Modal -->
    <div class="modal fade" id="ad" aria-hidden="true" aria-labelledby="ad" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ad">Enquire Now</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body ">
                    <form action="" method="POST">
                        <label for="" class="form-label float-start">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter Your Name" required>
                        <label for="" class="form-label float-start">Phone No</label>
                        <input type="tel" class="form-control" name="phone" placeholder="Enter Your Phone No" required>
                        <label for="" class="form-label float-start">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter Your Email" required>
                        <input type="hidden" class="form-control" name="service" value="app development" required>
                        <label for="" class="form-label float-start">About Project</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Project Details" name="project-info" rows="3" required></textarea>
                        <div class="modal-footer">
                            <input class="btn btn-primary" type="submit" name="submit" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--  -->

    <!-- Contact Us -->
    <div>
        <div class="bg-light mt-5 py-5">
            <h1 class="heading">CONTACT US</h1>
            <hr class="bg-primary border border-primary opacity-75 mx-auto mb-4">
            <p class="text-center fw-bold text-muted fs-5 px-3">
                You can always reach us for any kind of query, complaint, feedback, or suggestion
            </p>
            <div class="contact-page mx-auto py-3">
                <div class="contact-form justify-content-center d-flex flex-wrap p-4">
                    <div class="contact-info w-50 mx-auto">
                        <div class="contact-img position-relative top-50 start-50 translate-middle">
                            <img src="./images/contact.jpg" alt="" srcset="">
                        </div>
                    </div>
                    <div class="cform mx-auto my-1">
                        <form class="position-relative top-50 start-50 translate-middle" action="" method="post">
                            <div class="row g-2 mb-3">
                                <div class="col-md">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="floatingInputGrid" placeholder="Name" required>
                                        <label for="floatingInputGrid">First Name</label>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="floatingInputGrid" placeholder="Name" required>
                                        <label for="floatingInputGrid">Last Name</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="tel" class="form-control" id="floatingPassword" placeholder="Phone No" required>
                                <label for="floatingPassword">Phone No</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingInput" placeholder="Email" required>
                                <label for="floatingInput">Email Address</label>
                            </div>
                            <div class="form-floating mb-3">
                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" required></textarea>
                                <label for="floatingTextarea2">Message</label>
                            </div>
                            <div class="d-grid gap-2 mb-3">
                                <button type="submit" class="btn btn-warning p-2 fw-bold" type="button">Send
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
    <footer class="bg-dark text-center text-white">
        <!-- Grid container -->
        <div class="container p-4">
            <!-- Section: Social media -->
            <section class="mb-4">
                <!-- Facebook -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-facebook-f"></i></a>

                <!-- Twitter -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-twitter"></i></a>

                <!-- Google -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-google"></i></a>

                <!-- Instagram -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-instagram"></i></a>

                <!-- Linkedin -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-linkedin-in"></i></a>

                <!-- Github -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-github"></i></a>
            </section>
            <!-- Section: Social media -->

            <!-- Section: Form -->
            <section class="">
                <form action="">
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
                            <div class="form-outline form-white mb-4">
                                <input type="email" id="form5Example21" class="form-control" />
                                <label class="form-label" for="form5Example21">Email address</label>
                            </div>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-auto">
                            <!-- Submit button -->
                            <button type="submit" class="btn btn-outline-light mb-4">
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
            <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
            All Rights Reserved
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>