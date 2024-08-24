<!-- all data -->
    
    <div id="allData" class="all-data">
        <div class="banner mb-3">
            <div class="owl-carousel banner-carousel owl-theme">
                <div class="item">
                    <img src="<?php echo base_url();?>assets/images/banner/4.jpg" alt="">
                </div>
                <div class="item">
                    <img src="<?php echo base_url();?>assets/images/banner/1.jpg" alt="">
                    <div class="employer-info">Managing Director</div>
                </div>
                 <div class="item">
                    <img src="<?php echo base_url();?>assets/images/banner/3.jpg" alt="">
                    <div class="employer-info">Director</div>
                </div>
                <div class="item">
                    <img src="<?php echo base_url();?>assets/images/banner/2.jpg" alt="">
                </div>
                <div class="item">
                    <img src="<?php echo base_url();?>assets/images/banner/7.jpg" alt="">
                </div>
            </div>
            <div class="banner-content">
                <!-- <div class="banner-logo">
                    <img src="<?php echo base_url();?>assets/images/logo-white.png" alt="">
                </div> -->
                <h2 class="animate-typing mb-0"
                data-animate-loop="true"
                data-type-speed="200"
                data-type-delay="200"
                data-remove-speed="100"
                data-remove-delay="5000"
                data-cursor-speed="200">
            Dynamic workforce Services Pvt. Ltd</h2>
            </div>
        </div>

        <div class="container">
            <div class="row mx-0 my-md-5 my-3 theme-bg-ass-blue rounded text-white py-4">
                <div class="col-12">
                    <div class="text-center">
                        <h5 class="lh-lg dashboard-title"><strong>ডায়নামিক ওয়ার্কফোর্স সার্ভিসেস প্রাইভেট লিমিটেড --</strong><br> " এটি একটি জনবল সরবরাহকারী প্রতিষ্ঠান। "</h5>
                    </div>
                </div>
            </div>
            <div class="row mx-0 mb-5">
                <div class="col-md-8 card p-4 mb-md-0 mb-4">
                    <div class="services mb-5">
                       <div class="card">
                            <div class="card-header d-flex align-items-center justify-content-between theme-bg-ass-blue text-white p-3">
                                <h4 class="fw-bold text-white">Services</h4>
                                <a href="<?php echo base_url()?>/services" class="btn btn-success btn-sm">View services</a>
                            </div>
                            <div class="card-body theme-bg-light-gray">
                                <p class="mb-0">
                                ডায়নামিক ওয়ার্কফোর্স সার্ভিসেস প্রাইভেট লিমিটেডের কার্যক্রম সম্পর্কে সকলকে অবগত করতে চাই। প্রথমত আমরা ম্যানেজমেন্ট সিস্টেম পরিচালনা করার জন্য অ্যাপয়েন্টিং ম্যানেজার বা নিয়োগ ব্যবস্থাপক নিয়োগ করে থাকি এর মাধ্যমে  সুপারভাইজার, সহকারি সুপারভাইজার,  সিকিউরিটি গার্ড নিয়োগ করে থাকি। আমাদের নিয়োগ বিজ্ঞপ্তি সামাজিক যোগাযোগ মাধ্যমে প্রচার করে থাকি। কোম্পানিতে  যারা নিয়োগ ব্যবস্থাপক হিসাবে কর্মরত আছেন তাদের প্রত্যেকের পার্সোনাল নাম্বার বিজ্ঞাপন এর সাথে দেয়া হয় যাতে করে আগ্রহী প্রার্থীরা স্বল্প সময়ের মধ্যে কাজের ধরন সম্পর্কে অবগত হয় এবং দ্রুত সিদ্ধান্ত নিতে সক্ষম হয়।
                                 </p>
                            </div>
                       </div>
                    </div>

                    <div class="post-job">
                        <div class="theme-bg-ass-blue p-3 rounded mb-3">
                            <div class="d-flex align-items-center <?php if(isset($_SESSION['admin'])){echo 'justify-content-between';}else{echo 'justify-content-center';} ?>">
                                <h4 class="fw-bold text-white mb-0">Post Job</h4>
                                <?php if(isset($_SESSION['admin'])){ ?>
                                <button id="addJobButton" onclick="JobFormShowHide()" class="btn btn-success btn-sm">Add Job</button>
                                <?php }?>
                            </div>
                            <div id="addJobForm" class="mt-4" style="display:none;">
                                <form action="<?php base_url()?>add-new-job" method="POST">
                                    <div class="card mb-3">
                                        <div class="theme-bg-light-gray2 card-header"><h4>Add New Job</h4></div>
                                        <div class="card-body">
                                            <div class="mb-3">
                                                <label class="form-label mb-1">Post name</label>
                                                <input type="text" name="post_name" class="form-control" required>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label mb-1">Type of work</label>
                                                <input type="text" name="type_of_work" class="form-control" required>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label mb-1">Education Qualification</label>
                                                <input type="text" name="education" class="form-control" required>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label mb-1">Work Place</label>
                                                <input type="text" name="work_place" class="form-control" required>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label mb-1">Salary</label>
                                                <input type="text" name="salary" class="form-control" required>
                                            </div>
                                            <div class="text-end">
                                                <button class="btn btn-success btn-sm">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <?php foreach ( $job_list->result() as $row){?>
                            <div class="card mb-3">
                                <div class="theme-bg-light-gray2 card-header d-flex align-items-center justify-content-between">
                                    <h4><?php echo $row->post_name ?></h4>
                                    <?php if(isset($_SESSION['admin'])){ ?>
                                    <a class="text-danger ps-4" href="<?php echo base_url();?>post-delete/<?php echo $row->id ?>"><i class="fas fa-trash"></i></a>
                                    <?php }?>
                                </div>
                                <div class="card-body theme-bg-light-gray">
                                    <p class="mb-2 d-flex"><strong class="d-block me-3">কাজ-</strong> <?php echo $row->type_of_work ?></p>
                                    <p class="mb-2 d-flex"><strong class="d-block me-3">শিক্ষাগত যোগ্যতা-</strong> <?php echo $row->education ?></p>
                                    <p class="mb-2 d-flex"><strong class="d-block me-3">কর্মস্থল-</strong> <?php echo $row->work_place ?></p>
                                    <p class="mb-2 d-flex"><strong class="d-block me-3">বেতন-</strong> <?php echo $row->salary ?> /=</p>
                                    <div class="text-end">
                                        <a class="btn btn-primary btn-sm" href="<?php echo base_url();?>job-apply">Apply Now</a>
                                    </div>
                                </div>
                            </div>
                        <?php }?>
                    </div>
                </div>
                <div class="col-md-4 text-md-end px-md-2 px-0">
                    <div class="youtube-video mb-3">
                        <iframe class="w-100" src="https://www.youtube.com/embed/YvIzePXplgc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                   <div class="facebook-page  text-center">
                    <div class="fb-page" data-href="https://www.facebook.com/dynamicworkforce.org/" data-tabs="timeline" data-width="450" data-height="600" data-small-header="false" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true"><blockquote cite="https://www.facebook.com/getblood.info/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/getblood.info/">Get Blood</a></blockquote></div>
                   </div>
                </div>
            </div>
        </div>
    </div>
    <!-- all data -->

    