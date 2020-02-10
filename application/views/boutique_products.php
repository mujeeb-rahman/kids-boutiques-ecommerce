<?php include('boutique_dashboard.php')?>
<!------------------body--------------------------->
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid mt-1">
                        <ol class="breadcrumb mb-1  ">
                            <li class="breadcrumb-item"><a href="admin_home.php">Boutique</a></li>
                            <li class="breadcrumb-item active">Products</li>
                        </ol>
                        <div class="card mb-3">
                            <div class="row">
                            <div class="col-9 card-header"><i class="fas fa-table mr-1"></i>Product Details</div>
                            <div class="col-3 card-header">
                            <a class="btn btn-primary" href='<?php echo base_url()."index.php/BoutiqueControl/productAdd" ?>'>Add New Product</a>
                            </div>
                        </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
												<th>Order ID</th>
												<th>Product No</th>
                                                <th>Product Name</th>
                                                <th>Category</th>
                                                <th>Sub-category</th>
                                                <th>Size</th>
                                                <th>Quantity</th>
												<th>Delivery Address</th>
												<th>Status</th>
                                            </tr>
                                        </thead>
                                        <!-- <?php
                                        include '../model/config/connection.php';
                                        $sql = "SELECT * from faculty where fstatus = 'pending'";
                                        $result = mysqli_query($conn,$sql);
                                        while($row = mysqli_fetch_assoc($result))
                                        {
						  
                                    ?> -->
                                        <tbody>
                                            <tr>
                                            <form method="POST">
                                                <td><input type="text" name="fid" value="<?php echo $row['fid']; ?>" readonly/></td>
                                                <td><?php echo $row['fname']; ?></td>
                                                <td><?php echo $row['faddress']; ?></td>
                                                <td><?php echo $row['femail']; ?></td>
                                                <td><?php echo $row['fmobile']; ?></td>
                                                <td><?php echo $row['fdob']; ?></td>
                                                <td><?php echo $row['fgender']; ?></td>
                                                <td><input class="btn btn-primary" type="submit" value="Approve" name="submit"></td>
                                            </tr>
                                            </form>
                                            <?php } ?>     
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


  