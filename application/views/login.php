<?php include 'sweetalert.php' ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
    <!-- fontawesome css-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendors/fontawesome-pro.v5/css/all.min.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendors/fontawesome-pro.v5/css/fontawesome.min.css" />
    <!-- sweet alert -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendors/sweetalert/css/sweetalert2.min.css">
    <style>
    body{
        background: #1E1F29!important;
      }

    .btn-color{
      background-color: #0e1c36;
      color: #fff;
      
    }

    .profile-image-pic {
        height: 140px;
        width: 140px;
        object-fit: cover;
    }

    .cardbody-color{
      background-color: #ebf2fa;
    }

    a{
      text-decoration: none;
    }
    .login {
        height: 100vh;
    }
    .form-box{
        position: relative;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    } 
    button:hover{
      background: #c9c9c9!important;
    }
</style>
</head>

<body>

    <div class="container login">
    <div class="row form-box mx-0">
      <div class="col-md-5 m-auto">
        <div class="card my-5">

          <form class="card-body cardbody-color p-lg-5" action="<?php echo base_url()?>login-check" method="post">

            <div class="text-center">
              <img style="border:6px solid #2689ff40;" src="<?php echo base_url()?>assets/images/logo-white.png" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3"
                width="200px" alt="profile">
            </div>

            <div class="mb-3">
              <input type="number" class="form-control" name="phone"
                placeholder="Your number">
            </div>
            <div class="mb-3">
              <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-color px-5 mb-2 w-100">Login</button>
            </div>
            
          </form>
        </div>

      </div>
    </div>
  </div>

    <!-- jquery js-->
    <script src="<?php echo base_url();?>assets/vendors/jquery-3.6.1.min.js"></script>
    <!-- bootstrap js -->
    <script src="<?php echo base_url();?>assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- sweetalert -->
    <script src="<?php echo base_url();?>assets/vendors/sweetalert/js/sweetalert2.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/type.js"></script>
    <!-- custom js -->
    <script src="<?php echo base_url();?>assets/js/script.js"></script>
</body>

</html>

