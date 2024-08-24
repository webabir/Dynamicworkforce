<footer class="theme-bg-dark">
        <div class="container text-muted py-5">
            <div class="row">
                <div class="col-md-4">
                    <h5 class="text-white mb-3">ABOUT US</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            Dynamic Workforce Services Private Limited --<br> It is a manpower supply company. We provide manpower all over Bangladesh.
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5 class="text-white mb-3">CONTACT US</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <i class="fas fa-phone-alt theme-text-red me-2"></i>+8801308515456
                        </li>
                        <li class="mb-2">
                            <i class="fas fa-envelope theme-text-red me-2"></i>dynamicworkforce2@gmail.com
                        </li>
                        <li class="mb-2">
                            <a class="text-decoration-none text-white link-hover text-muted" href="https://www.facebook.com/profile.php?id=100087180720992"><i class="fab fa-facebook-f theme-text-red me-3"></i>facebook</a>
                    </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5 class="text-white mb-3">HELP</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2">If you need any help Please contact with us.</li>
                    </ul>
                    <img class="footer-qr" src="<?php echo base_url();?>assets/images/qr.png" alt="">
                </div>
            </div>
        </div>
        <div class="footer-btm ">
            <span>© Dynamicworkforce <?php echo date("Y"); ?>, All Right Reserved.</span>
        </div>
    </footer>



    <!-- jquery js-->
    <script src="<?php echo base_url();?>assets/vendors/jquery-3.6.1.min.js"></script>
    <!-- bootstrap js -->
    <script src="<?php echo base_url();?>assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- owlcarousel js -->
    <script src="<?php echo base_url();?>assets/vendors/OwlCarousel2/js/owl.carousel.min.js"></script>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v15.0" nonce="93YA3V7U"></script>
    <!-- type js -->
       <script src="<?php echo base_url();?>assets/vendors/type.js"></script>
    <!-- type js -->
    <script src="<?php echo base_url();?>assets/vendors/lightbox/lightbox.js"></script>
    <!-- sweetalert -->
    <script src="<?php echo base_url();?>assets/vendors/sweetalert/js/sweetalert2.min.js"></script>
    <!-- custom js -->
    <script src="<?php echo base_url();?>assets/js/script.js"></script>


    <script>
        $('.banner-carousel').owlCarousel({
            loop:true,
            margin:10,
            items:1,
            autoplay:true,
            autoplayTimeout:8000,
            autoplayHoverPause:false,
            nav:false

        });
        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            responsiveClass:true,
            responsive:{
                0:{
                    items:1,
                    nav:false
                },
                600:{
                    items:2,
                    nav:false
                },
                800:{
                    items:3,
                    nav:false
                },
                1000:{
                    items:4,
                    nav:true,
                    loop:false
                },
                1200:{
                    items:5,
                    nav:true,
                    loop:false
                }
            }
        })



        // job form show hide

        function JobFormShowHide(){
           var button = document.getElementById('addJobButton');
           var jobForm = document.getElementById('addJobForm');

           if(jobForm.style.display=="none"){
                jobForm.style.display="";
                button.innerHTML = 'cancel';
                button.classList.add('btn-danger');
           }else{
                jobForm.style.display="none";
                button.innerHTML = 'Add Job';
                 button.classList.remove('btn-danger');
           }
        }
    </script>


<!-- lightbox -->

<script>
    (function() {
        var $gallery = new SimpleLightbox('.gallery a', {});
    })();
</script>
</body>

</html>