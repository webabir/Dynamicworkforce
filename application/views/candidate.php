<style>
    table{
        width: 100%;
    }
    .edu-qualificaton tr td,
    .edu-qualificaton tr th{
        border: 1px solid #000;
    padding: 5px;
    text-align: center;
    }
    table td{
            word-break: break-word;

    }
</style>

<!-- all data -->
<div id="allData" class="all-data">
        <div class="container pt-5">
            <div class="candidate-view">
                <div class="row mb-5">   
                    <div class="col-md-8 m-auto">
                        <div class="card py-3 py-md-5 px-md-5 px-3">
                            <div class="row mb-5">
                                <div class="col-12 text-center">
                                    <h3 class="d-inline border-bottom border-2 border-dark">Curriculum vitae</h3>
                                    <div class="d-flex justify-content-between">
                                        <h4 class="text-start mt-3">Application Id: <?php echo $candidate->id;?></h4>
                                        <h4 class="text-start mt-3">Ref. No: <?php echo $candidate->ref_no;?></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="row fs-5">
                                <?php if(isset( $candidate)) {?>
                                    <div class="col-md-3 mb-4">
                                    <img src="<?php echo base_url('uploads');?>/<?php echo $candidate->image;?>" alt="">
                                </div>
                                <div class="col-md-9">
                                    <table>
                                        <tr>
                                            <th>Full Name</th>
                                            <td class="pe-3">:</td>
                                            <td><?php echo $candidate->full_name;?></td>
                                        </tr>
                                        <tr>
                                            <th>Father's Name</th>
                                            <td class="pe-3">:</td>
                                            <td><?php echo $candidate->father_name;?></td>
                                        </tr>
                                        <tr>
                                            <th>Mother's Name</th>
                                            <td class="pe-3">:</td>
                                            <td><?php echo $candidate->mother_name;?></td>
                                        </tr>
                                        <tr>
                                            <th>Birth Of Date</th>
                                            <td class="pe-3">:</td>
                                            <td><?php echo $candidate->birth_date;?></td>
                                        </tr>
                                       
                                        <tr>
                                            <th>National Id</th>
                                            <td class="pe-3">:</td>
                                            <td><?php echo $candidate->national_id;?></td>
                                        </tr>
                                        <tr>
                                            <th>Gender</th>
                                            <td class="pe-3">:</td>
                                            <td><?php echo $candidate->gender;?></td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col-12">
                    
                                    <table class="mb-5">
                                        <tr>
                                            <th>Height</th>
                                            <td class="pe-3">:</td>
                                            <td><?php echo $candidate->height."\"";?></td>
                                        </tr>
                                        <tr>
                                            <th>Weight</th>
                                            <td class="pe-3">:</td>
                                            <td><?php echo $candidate->weight."Kg";?></td>
                                        </tr>
                                        <tr>
                                            <th>City</th>
                                            <td class="pe-3">:</td>
                                            <td><?php echo $candidate->city;?></td>
                                        </tr>
                                        <tr>
                                            <th>Present Address</th>
                                            <td class="pe-3">:</td>
                                            <td><?php echo $candidate->present_address;?></td>
                                        </tr>
                                        <tr>
                                            <th>Permanent Address</th>
                                            <td class="pe-3">:</td>
                                            <td><?php echo $candidate->parmanent_address;?></td>
                                        </tr>
                                        <tr>
                                            <th>Nationality</th>
                                            <td class="pe-3">:</td>
                                            <td><?php echo $candidate->nationality;?></td>
                                        </tr>
                                        <tr>
                                            <th>religion</th>
                                            <td class="pe-3">:</td>
                                            <td><?php echo $candidate->religion;?></td>
                                        </tr>
                                        <tr>
                                            <th>Job Category</th>
                                            <td class="pe-3">:</td>
                                            <td><?php echo $candidate->job_category;?></td>
                                        </tr>
                                        <tr>
                                            <th>Email Address</th>
                                            <td class="pe-3">:</td>
                                            <td><?php echo $candidate->email;?></td>
                                        </tr>
                                        <tr>
                                            <th>Phone Number</th>
                                            <td class="pe-3">:</td>
                                            <td><?php echo $candidate->phone;?></td>
                                        </tr>
                                        <tr>
                                            <th>Education</th>
                                            <td class="pe-3">:</td>
                                            <td><?php echo $candidate->education;?></td>
                                        </tr>
                                    </table>
                                </div>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- all data -->