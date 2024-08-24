<!-- all data -->
    <div id="allData" class="all-data">
        <div class="container py-5">
                 <div class="theme-bg-ass-blue py-3 rounded text-center mb-3">
                    <div class="d-flex align-items-center <?php if(isset($_SESSION['admin'])){echo 'justify-content-between';}else{echo 'justify-content-center';} ?>  px-3">
                                <h3 class="fw-bold text-white mb-0">Our Services</h3>
                                <?php if(isset($_SESSION['admin'])){ ?>
                                <button id="addJobButton" onclick="JobFormShowHide()" class="btn btn-success btn-sm">Add Service</button>
                                <?php }?>
                            </div>
                            <div id="addJobForm" class="mt-4 text-start p-4" style="display:none;">
                                <form action="<?php base_url()?>add-new-service" method="POST">
                                    <div class="card mb-3">
                                        <div class="theme-bg-light-gray2 card-header"><h4>Add New Service</h4></div>
                                        <div class="card-body">
                                            <div class="mb-3">
                                                <label class="form-label mb-1">service name</label>
                                                <input type="text" name="service_name" class="form-control" required>
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
                                                <label class="form-label mb-1">Service Fee</label>
                                                <input type="text" name="service_fee" class="form-control" required>
                                            </div>
                                            <div class="text-end">
                                                <button class="btn btn-success btn-sm">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                </div>
                <div class="post-job bg-white p-4 rounded">
                        <div class="row justify-content-center">
                             <?php foreach ( $service_list->result() as $row){?>
                            <div class="col-md-4">
                                <div class="card mb-3">
                                    <div class="theme-bg-light-gray2 card-header d-flex align-items-center justify-content-between">
                                        <h4><?php echo $row->service_name ?></h4>
                                        <?php if(isset($_SESSION['admin'])){ ?>
                                    <a class="text-danger ps-4" href="<?php echo base_url();?>service-delete/<?php echo $row->id ?>"><i class="fas fa-trash"></i></a>
                                    <?php }?>
                                    </div>
                                    <div class="card-body theme-bg-light-gray" style="min-height: 300px;display: grid;">
                                        <p class="mb-2"><strong class="d-block me-3">কাজ-</strong> <?php echo $row->type_of_work ?></p>
                                        <p class="mb-2"><strong class="d-block me-3">শিক্ষাগত যোগ্যতা-</strong> <?php echo $row->education ?></p>
                                        <p class="mb-2"><strong class="d-block me-3">বেতন-</strong> <?php echo $row->service_fee ?> /=<br>( আলোচনা সাপেক্ষে )</p>
                                        <div class="text-end mt-3">
                                            <button class="btn btn-primary w-100" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Get Now</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php }?>
                        </div>
                    </div>
        </div>
            

        <!-- modal -->
            <div class="modal fade" style="z-index: 111111;" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold" id="exampleModalLabel">Get Our Service</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?php base_url()?>service-request" method="POST">
                        <div class="card mb-3 border-0">
                            <!-- <div class="theme-bg-light-gray2 card-header"><h4>Book </h4></div> -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label mb-1">Post Name</label>
                                            <input type="text" name="post_name" class="form-control" required>
                                        </div>
                                         <div class="mb-3">
                                            <label class="form-label mb-1">Phone Number</label>
                                            <input type="text" name="phone" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label mb-1">Address</label>
                                            <input type="text" name="address" class="form-control" required>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label mb-1">Work Place</label>
                                            <input type="text" name="work_place" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn  btn-success">Submit</button>
                        </div>
                    </form>
                </div>
                </div>
            </div>
            </div>
    </div>
    <!-- all data -->