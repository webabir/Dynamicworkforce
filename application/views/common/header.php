<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="google-site-verification" content="AVkgvQjfor5EWo54MjiAuA0BtJgxq1-IBqBcX2ZL_Yo" />
    <title>Dynamicworkforce</title>

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz:wght@700&display=swap" rel="stylesheet">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendors/bootstrap/css/bootstrap.min.css" />
    <!-- owl carousel css-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendors/OwlCarousel2/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendors/OwlCarousel2/css/owl.theme.default.min.css" />
    <!-- fontawesome css-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendors/fontawesome-pro.v5/css/all.min.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendors/fontawesome-pro.v5/css/fontawesome.min.css" />
    <!-- lightbox -->
     <link rel="stylesheet" href="<?php echo base_url();?>assets/vendors/lightbox/lightbox.css">
     <!-- sweet alert -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendors/sweetalert/css/sweetalert2.min.css">
    <!-- custom css -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/responsive.css">
</head>

<body>


 <!-- header section -->  
 <section class="header" style="position: fixed;top:0px;width:100%;height:0;z-index: 1111;">
        <div id="headerTop" class="header-top theme-bg-blue theme-text-White fs-12">
            <div class="container">
                <div class="flot-fix">
                    <ul class="list-unstyled float-start my-2 d-grid d-lg-block d-md-block">
                        <li class="d-inline me-3 link-hover"><i
                                class="fas fa-phone-alt theme-text-red me-2"></i>+8801308515456
                        </li>
                        <li class="d-inline me-3 link-hover"><i
                                class="fas fa-envelope theme-text-red me-2"></i>dynamicworkforce2@gmail.com
                        </li>
                        <li class="d-inline me-3 link-hover">
                            <i class="fab fa-facebook-f theme-text-red me-2"></i><a class="text-decoration-none text-white  link-hover" href="https://www.facebook.com/profile.php?id=100087180720992">facebook</a>
                        </li>
                    </ul>
                    <ul class="list-unstyled float-end my-2">
                        <li class="d-inline ms-3">
                            <a class="text-decoration-none text-white  link-hover" href="<?php echo base_url()?>location">
                                <i class="fas fa-map-marker-alt theme-text-red me-2"></i>Location
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="headerMid" class="header-middle theme-bg-dark theme-text-White py-3 border-btm">
            <div class="container">
                <nav class="navbar navbar-expand-md py-1">
                    <div>
                        <a class="navbar-brand text-white" href="<?php echo base_url();?>">Dynamicworkforce</a>
                        <a class="btn btn-primary btn-sm px-2 fs-12" href="<?php echo base_url();?>job-apply">Job Apply</a>
                    </div>
                    <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-bars"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-auto fs-14">
                            <li class="nav-item mb-md-0 mb-3">
                                <a class="nav-link text-white 
                                <?php  $active = $this->session->userdata('home');
                                    if (isset($active)) {
                                        echo $active;
                                        $this->session->unset_userdata('home');
                                    }
                                    ?>" aria-current="page" href="<?php echo base_url();?>">Home</a>
                            </li>
                            <span class="divide"></span>
                            <li class="nav-item mb-md-0 mb-3">
                                <a class="nav-link text-white 
                                <?php  $active = $this->session->userdata('service');
                                    if (isset($active)) {
                                        echo $active;
                                        $this->session->unset_userdata('service');
                                    }
                                    ?>" href="<?php echo base_url()?>services">Services</a>
                            </li>
                            <span class="divide"></span>
                            <li class="nav-item mb-md-0 mb-3">
                                <a class="nav-link text-white 
                                <?php  $active = $this->session->userdata('about');
                                    if (isset($active)) {
                                        echo $active;
                                        $this->session->unset_userdata('about');
                                    }
                                    ?>" href="<?php echo base_url();?>about">About</a>
                            </li>
                            <span class="divide"></span>
                            <li class="nav-item dropdown mb-md-0 mb-3">
                                <a class="nav-link dropdown-toggle text-white
                                <?php  $active = $this->session->userdata('contact');
                                    if (isset($active)) {
                                        echo $active;
                                        $this->session->unset_userdata('contact');
                                    }
                                    ?>" href="javascript:;" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Contact
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                  <li><a class="dropdown-item" href="<?php echo base_url();?>contact">Get in Touch</a></li>
                                  <li><a class="dropdown-item" href="<?php echo base_url();?>location">Address</a></li>
                                </ul>
                            </li>
                            <span class="divide"></span>
                            <li class="nav-item dropdown mb-md-0 mb-3">
                                <a class="nav-link dropdown-toggle text-white
                                <?php  $active = $this->session->userdata('account');
                                    if (isset($active)) {
                                        echo $active;
                                        $this->session->unset_userdata('account');
                                    }
                                    ?>" href="javascript:;" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Account
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                  <?php if(isset($_SESSION['admin'])){ ?>
                                  <li><a class="dropdown-item" href="<?php echo base_url();?>candidate-list">Candidates</a></li>
                                  <?php }?>
                                  <?php if(isset($_SESSION['admin'])){ ?>
                                  <li><a class="dropdown-item" href="<?php echo base_url();?>peyment-list">Payments</a></li>
                                  <?php }?>
                                  <?php if(isset($_SESSION['admin'])){ ?>
                                  <li><a class="dropdown-item" href="<?php echo base_url();?>request">Request</a></li>
                                  <?php }?>
                                  <?php if(isset($_SESSION['admin'])){ ?>
                                  <?php }else{?>
                                    <li><a class="dropdown-item" href="<?php echo base_url();?>login-page">Login</a></li>
                                  <?php }?>
                                  <?php if(isset($_SESSION['admin'])){ ?>
                                  <li><a class="dropdown-item" href="<?php echo base_url();?>logout">Log Out</a></li>
                                  <?php }?>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>

    </section>
