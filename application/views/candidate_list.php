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
            <div class="theme-bg-ass-blue rounded text-white d-flex flex-wrap align-items-center justify-content-center justify-content-md-between justify-content-center-428 p-3">
                <h4 class="fw-bold text-white mb-md-0 mb-2 mx-3">Candidates List</h4>
                <input class="filter mx-3" id="myInput" type="text" placeholder="Search..">
            </div>
            <br>
            <div class="table-desktop-view" style="overflow-x: scroll;">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Date And Time</th>
                            <th>Details</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">
                        <?php foreach ($candidates->result() as $row) {?>
                        
                        <tr>
                            <td><?php echo $row->id;?></td>
                            <td><?php echo $row->full_name;?></td>
                            <td><?php echo $row->phone;?></td>
                            <td><?php echo $row->email;?></td>
                            <td><?php echo $row->date_time;?></td>
                            <td><a href="<?php echo base_url() ?>candidate/<?php echo $row->id; ?>"><i class="far fa-eye"></i></a></td>
                        </tr>

                        <?php }?>
                    </tbody>
                </table>
            </div>
            <div class="table-mobile-view">
                <?php foreach ($candidates->result() as $row) {?>
                <div class="user-box mb-2">
                    <div class="d-flex"><span class="d-block me-3" style="width:40px;">Id </span>: <span class="d-block ms-3 text-break"><?php echo $row->id;?></span></div>
                    <div class="d-flex"><span class="d-block me-3" style="width:40px;">Name </span>: <span class="d-block ms-3 text-break"><?php echo $row->full_name;?></span></div>
                    <div class="d-flex"><span class="d-block me-3" style="width:40px;">Phone </span>: <span class="d-block ms-3 text-break"><?php echo $row->phone;?></span></div>
                    <div class="d-flex"><span class="d-block me-3" style="width:40px;">Email </span>: <span class="d-block ms-3 text-break"><?php echo $row->email;?></span></div>
                    <div class="d-flex"><span class="d-block me-3" style="width:40px;">Date </span>: <span class="d-block ms-3 text-break"><?php echo $row->date_time;?></span></div>
                    <div class="d-flex"><a href="<?php echo base_url() ?>candidate/<?php echo $row->id; ?>">View Details</i></a></div>
                </div>
                <?php }?>
            </div>
        </div>
    </div>
    <!-- all data -->
