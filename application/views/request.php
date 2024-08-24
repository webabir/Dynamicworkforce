<style>
    table {
  border-collapse: collapse;
  width: 100%;
}
th{
    background-color:#a0b1b7;
}
td, th {
  border: 1px solid #c5c5c5;
  text-align: center;
  padding: 8px;
}
tr:nth-child(odd) {
    background-color:#ededed;
}
tr:nth-child(even) {
    background-color: #cdcdcd;
}
.filter {
    padding: 0 5px;
    border-radius: 4px;
    border: none;
}
</style>

<!-- all data -->
<div id="allData" class="all-data">
        <div class="container contact pb-5 pt-5">
             <div class="theme-bg-ass-blue rounded text-white d-flex flex-wrap align-items-center justify-content-between justify-content-center-428 p-3">
                <h4 class="fw-bold text-white mb-md-0 mb-2 mx-3">Service Request</h4>
                <input class="filter mx-3" id="myInput" type="text" placeholder="Search..">
            </div>
            <br>
            <div class="table-desktop-view" style="overflow-x: scroll;">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Post Name</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Work Place</th>
                            <th>Date And Time</th>
                            <!-- <th>Details</th> -->
                        </tr>
                    </thead>
                    <tbody id="myTable">
                        <?php foreach ($service_request->result() as $row) {?>
                        
                        <tr>
                            <td><?php echo $row->id;?></td>
                            <td><?php echo $row->post_name;?></td>
                            <td><?php echo $row->phone;?></td>
                            <td><?php echo $row->address;?></td>
                            <td><?php echo $row->work_place;?></td>
                            <td><?php echo $row->date_time;?></td>
                            <!-- <td><a href="<?php echo base_url() ?>candidate/<?php echo $row->id; ?>"><i class="far fa-eye"></i></a></td> -->
                        </tr>

                        <?php }?>
                    </tbody>
                </table>
            </div>
            <div class="table-mobile-view">
                <?php foreach ($service_request->result() as $row) {?>
                <div class="user-box mb-2">
                    <div class="d-flex"><span class="d-block me-3" style="width:116px;">Id </span>: <span class="d-block ms-3 text-break"><?php echo $row->id;?></span></div>
                    <div class="d-flex"><span class="d-block me-3" style="width:116px;">Post Name </span>: <span class="d-block ms-3 text-break"><?php echo $row->post_name;?></span></div>
                    <div class="d-flex"><span class="d-block me-3" style="width:116px;">Phone </span>: <span class="d-block ms-3 text-break"><?php echo $row->phone;?></span></div>
                    <div class="d-flex"><span class="d-block me-3" style="width:116px;">Address </span>: <span class="d-block ms-3 text-break"><?php echo $row->address;?></span></div>
                    <div class="d-flex"><span class="d-block me-3" style="width:116px;">Work Place </span>: <span class="d-block ms-3 text-break"><?php echo $row->work_place;?></span></div>
                    <div class="d-flex"><span class="d-block me-3" style="width:116px;">Date & Time </span>: <span class="d-block ms-3 text-break"><?php echo $row->date_time;?></span></div>
                </div>
                <?php }?>
            </div>
        </div>
    </div>
    <!-- all data -->
