<!-- all data -->
    <div id="allData" class="all-data">
        <div class="container contact pt-5">
            <div class="row mb-5">
                
                <div class="col-md-8 m-auto card box-shadow px-4">
                    
                    <form action="<?php echo base_url();?>apply-submit" method="post" enctype="multipart/form-data">
                        <div class="row mb-5 pt-4">
                            <h4 class="mb-4 text-center">Application form</h4>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label mb-1">Full Name</label>
                                    <input type="text" name="full_name" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label mb-1">Father's Name</label>
                                    <input type="text" name="father_name" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label mb-1">Date of birth</label>
                                    <input type="date" name="birth_date" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                <label class="form-label mb-1">Gender</label>
                                    <select class="form-control" required name="gender" >
                                        <option value="">----</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label mb-1">Nationality</label>
                                    <input type="text" name="nationality" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label mb-1">Height (feet)</label>
                                    <input type="number" name="height" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label mb-1">Weight (kg)</label>
                                    <input type="number" name="weight" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label mb-1">National Id</label>
                                    <input type="number" name="national_id" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label mb-1">Job Category</label>
                                    <input type="text" name="job_category" class="form-control" required>
                                </div>
                                 <div class="mb-3">
                                    <label class="form-label mb-1">Ref.No last(3) digits :</label>
                                    <input type="number" name="ref_no" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                            
                                <div class="mb-3">
                                    <label class="form-label mb-1">Mother's Name</label>
                                    <input type="text" name="mother_name" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label mb-1">City</label>
                                    <input type="text" name="city" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label mb-1">Present Address</label>
                                    <input type="text" name="present_address" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label mb-1">Parmanent Address</label>
                                    <input type="text" name="parmanent_address" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label mb-1">Religion</label>
                                    <input type="text" name="religion" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label mb-1">Phone</label>
                                    <input type="number" name="phone" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label mb-1">E-mail</label>
                                    <input type="email" name="email" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                <label class="form-label mb-1">Education</label>
                                    <select class="form-control" required name="education" >
                                        <option value="">----</option>
                                        <option value="HSC Pass">Graduation Pass</option>
                                        <option value="HSC Pass">HSC Pass</option>
                                        <option value="SSC Pass">SSC Pass</option>
                                        <option value="Eight Pass">Eight Pass</option>
                                        <option value="No Qualification">No Qualification</option>
                                    </select>
                                </div>
                                <div class="mb-md-5 mb-3">
                                    <label class="form-label mb-1">Image (passport size)</label>
                                    <input type="file" name="image" class="form-control" required>
                                </div>
                                <div class="text-end">
                                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- all data -->