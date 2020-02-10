<?php include('admin_dashboard.php')?>
<!------------------body--------------------------->
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid mt-1">
                        <ol class="breadcrumb mb-1  ">
                            <li class="breadcrumb-item"><a href="">Administrator</a></li>
                            <li class="breadcrumb-item active">Home</li>
                        </ol>
                        <div class="card mb-3">
                            <div class="row">
                            <div class="col-10 card-header"><i class="fas fa-table mr-1"></i>New Boutique Applications</div>
                            <div class="col-2 card-header">
                            </div>
                        </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
												<th>Boutique ID</th>
												<th>License No</th>
                                                <th>Name</th>
												<th>Address</th>
												<th>Owner Name</th>
												<th>Owner Address</th>
                                                <th>Email</th>
                                                <th>Mobile</th>
                                                <th>Categories</th>
                                            </tr>
                                        </thead>
                                        <?php
                                        foreach($data as $row)
                                        {
                                    ?>
                                        <tbody>
                                            <tr>
                                                <td><?=$row->b_id;?></td>
                                                <td><?=$row->license_no;?></td>
                                                <td><?=$row->b_name;?></td>
                                                <td><?=$row->b_address;?></td>
                                                <td><?=$row->owner_name;?></td>
                                                <td><?=$row->owner_address;?></td>
                                                <td><?=$row->email;?></td>
                                                <td><?=$row->mobile;?></td>
                                                <td><?=$row->basic_category;?></td>
                                                <td><a href='<?php echo base_url()."index.php/AdminControl/approveBoutique/".$row->b_id?>'><input class="btn btn-primary" type="submit" value="Approve" href="" name="submit"></a></td>
                                                <td><a href='<?php echo base_url()."index.php/AdminControl/deleteNewBoutique/".$row->b_id?>'><input class="btn btn-primary" type="submit" value="Delete" href='' name="submit"></a></td>
                                            </tr>
                                            <?php
                                                 } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2019</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>


  