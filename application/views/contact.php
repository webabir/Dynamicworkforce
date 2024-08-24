<!-- all data -->

    <div id="allData" class="all-data">
        <div class="container contact py-5">
            <div class=" theme-bg-ass-blue py-3 rounded text-center mb-3">
                <h3 class="fw-bold text-white">Contact Us</h3>
            </div>
            <div class="row bg-white rounded p-3 mx-1 justify-content-center py-5 ">
                <div class="col-md-7 mb-lg-0 mb-3">
                   <div class="card box-shadow theme-bg-light-gray p-4 py-5">
                        <form method="post" action="<?php echo base_url()?>send-mail">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label mb-1">Full Name</label>
                                        <input name="user_name" type="text" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label  class="form-label mb-1">Email address</label>
                                        <input name="user_email" type="email" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label  class="form-label mb-1">Message</label>
                                        <textarea class="form-control w-100" name="message" cols="30" rows="5" required></textarea>
                                    </div>
                                    <div class="text-end">
                                        <button type="submit" class="btn btn-primary w-100">Send</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                   </div>
                </div>
                <div class="col-md-5">
                    <div class="card box-shadow theme-color-gray p-4">
                        <ul class="list-unstyled mb-3">
                            <li class="mb-2">
                               Sher E Bangla Road Raisa Tower Gollamari, Khulna
                            </li>
                            <li class="mb-2"><strong>Hotline :</strong> +8801308515456</li>
                            <li class="mb-2"><strong>Whatsapp :</strong> +8801921808682</li>
                            <li class="mb-2"><strong>Phone :</strong> +8801921808682 </li>
                            <li class="mb-2"><strong>Facebook :</strong> +8801921808682 </li>
                            <li><strong>G-mail :</strong> dynamicworkforce2@gmail.com</li>
                        </ul>
                         <div  class="contact-qr">
                            <img src="<?php echo base_url();?>assets/images/qr.png" alt="">
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- all data -->
