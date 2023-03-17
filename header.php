<!-- Created by Susan Dangol -->
<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>

    <!------------------------ Meta Starts ---------------------->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width">
    <!--    <link rel="shortcut icon" type="image/x-icon" href="img/site_logo.png">-->

    <meta property="og:title" content="" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:image" content="" />
    <meta property="og:image:alt" content="">
    <meta property="og:description" content="">
    <!------------------------- Meta Ends ----------------------->

    <!----------------------- Fonts Starts ---------------------->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Frank+Ruhl+Libre:wght@400;500;700&family=Public+Sans:wght@400;600;700&display=swap" rel="stylesheet">

    <!------------------------ Fonts Ends ----------------------->

    <!-------------------- Components Starts -------------------->
    <link href="css/bowercomponent/fontawesome.min.css">
    <link href="css/bowercomponent/solid.min.css">
    <link href="css/bowercomponent/regular.min.css">
    <link href="css/bowercomponent/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="css/bowercomponent/slick-theme.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link href="css/bowercomponent/jquery.mCustomScrollbar.min.css" rel="stylesheet">
    <link href="css/bowercomponent/lightbox.min.css" rel="stylesheet">
    <!--------------------- Components Ends --------------------->


    <!-------------------- Site Style Starts -------------------->
    <link href="css/global.css" rel="stylesheet">
    <link href="css/thestyles.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <!--------------------- Site Style Ends --------------------->

</head>

<body>

    <!------------------------------------- Wrapper Starts ------------------------------------->
    <div id="wrapper">
        <!-- Button trigger modal -->
        <!-- Modal -->
        <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                         <div class="heading">
                            <h3>Sign In</h3>
                            <p>If you don’t have an account register</p>
                            <span>You can<a href="" data-bs-target="#registrationModal" data-bs-toggle="modal">Register here !</a></span>
                        </div>
                        <form>
                            <div class="mb-3 input-field">
                                <label for="inputEmail" class="form-label">Email</label>
                                <input type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" placeholder="Entyer your email address">
                            </div>
                            <div class="mb-3 input-field">
                                <label for="inputPassword" class="form-label">Password</label>
                                <input type="password" class="form-control" id="inputPassword" placeholder="Enter your Password" >
                                <img src="img/visibility_on.png" alt="">
                            </div>
                            <div class="mb-3 form-check">
                                <div>
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                </div>
                                <div>
                                    <span>Forgot Password?</span>
                                </div>
                            </div>
                            <button type="submit" class="btn-common">Login</button>
                            
                        </form>
                        <div class="alternative-login">
                                <div class="continue-with">
                                    <p><strong>OR</strong></p>
                                    <p>Continue With</p>
                                </div>
                                <div class="logo-items">
                                    <div class="logo">
                                        <img src="img/Facebook.png" alt="">
                                    </div>
                                    <div class="logo">
                                        <img src="img/apple.png" alt="">
                                    </div>
                                    <div class="logo">
                                        <img src="img/Google.png" alt="">
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="registrationModal" tabindex="-1" aria-labelledby="registrationModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                         <div class="heading">
                            <h3>Sign Up</h3>
                            <p>Already have an account registered ?</p>
                            <span>You can<a href="" data-bs-target="#loginModal" data-bs-toggle="modal">Login here !</a></span>
                        </div>
                        <form>
                        <div class="mb-3 input-field">
                                <label for="inputFullName" class="form-label">FullName</label>
                                <input type="FullName" class="form-control" id="inputFullName" aria-describedby="emailHelp" placeholder="Enter your full name">
                            </div>
                            <div class="mb-3 input-field">
                                <label for="inputPhoneNumber" class="form-label">Phone Number</label>
                                <input type="number" class="form-control" id="inputphoneNumber" placeholder="Enter your phone number">
                            </div>
                            <div class="mb-3 input-field">
                                <label for="inputEmail" class="form-label">Email</label>
                                <input type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" placeholder="Entyer your email address">
                            </div>
                            <div class="mb-3 input-field">
                                <label for="inputPassword" class="form-label">Password</label>
                                <input type="password" class="form-control" id="inputPassword" placeholder="Enter your Password" >
                                <img src="img/visibility_on.png" alt="">
                            </div>
                            <div class="mb-3 input-field">
                                <label for="inputConfirmPassword" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" id="inputConfirmPassword" placeholder="Re-type your Password" >
                                <img src="img/visibility_on.png" alt="">
                            </div>
                            <button type="submit" class="btn-common">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <!--------------------------------- Header Wrapper Starts ---------------------------------->
        <header id="header-wrapper">
            <div class="custom-container">
                <div class="header-inner">
                    <!-- modal -->

                    <!-- Navbar -->
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="#">
                                <img src="img/merchie_logo.png" alt="" />
                            </a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="#">Shop</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Blog</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Contact</a>
                                    </li>
                                </ul>

                            </div>
                            <div class="action d-flex">
                                <div class="cart">
                                    <a href="/cart">
                                        <span>1</span>
                                        <img src="img/cart1.png" alt="">
                                    </a>
                                </div>
                                <div class="login">
                                    <a href="#demo-modal" type="button" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#loginModal">LOGIN</a>
                                </div>
                            </div>
                        </div>
                    </nav>
                    <!-- Navbar -->
                </div>
            </div>
        </header>
        <!---------------------------------- Header Wrapper Ends ----------------------------------->



        <!-------------------------------- Content Wrapper Starts ---------------------------------->
        <div id="content-wrapper">