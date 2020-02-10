<?php include('boutique_dashboard.php')?>
<!------------------body--------------------------->
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid mt-1">
                        <ol class="breadcrumb mb-1  ">
                            <li class="breadcrumb-item"><a href="admin_home.php">Boutique</a></li>
                            <li class="breadcrumb-item active">Customers</li>
                        </ol>
                        <div class="card mb-3">
                            <div class="row">
                            <div class="col-10 card-header"><i class="fas fa-table mr-1"></i>Boutiques with Customers</div>
                            <div class="col-2 card-header">
                            </div>
                        </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
												<th>Customer ID</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Mobile</th>
                                                <th>Delivery Address</th>
                                            </tr>
                                        </thead>
                                        <!-- <?php
                                        foreach($data as $row)
                                        {
                                    ?>
                                        <tbody>
                                            <tr>
                                                <td><?=$row->u_id;?></td>
                                                <td><?=$row->u_name;?></td>
                                                <td><?=$row->email;?></td>
                                                <td><?=$row->mobile;?></td>
                                                <td><?=$row->u_address;?></td>
                                                <td><a href='<?php echo base_url()."index.php/AdminControl/deleteCustomer/".$row->u_id?>'><input class="btn btn-primary" type="submit" value="Remove" href="" name="submit"></a></td>
                                            </tr>
                                            <?php
                                                 } ?>     -->
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


  