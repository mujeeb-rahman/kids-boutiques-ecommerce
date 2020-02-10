<?php include('admin_dashboard.php')?>
<!------------------body--------------------------->
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid mt-1">
                        <ol class="breadcrumb mb-1  ">
                            <li class="breadcrumb-item"><a href="admin_home.php">Administrator</a></li>
                            <li class="breadcrumb-item active">Products</li>
                        </ol>
                        <div class="card mb-3">
                            <div class="row">
                            <div class="col-10 card-header"><i class="fas fa-table mr-1"></i>Product List Under Boutiques</div>
                            <div class="col-2 card-header">
                            </div>
                        </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
												<th>Product ID</th>
                                                <th>Product Name</th>
                                                <th>Boutique ID</th>
                                                <th>Boutique Name</th>
                                                <th>Quantity</th>
                                                <th>Unit Price</th>
                                            </tr>
                                        </thead>
                                        <?php
                                        foreach($data as $row)
                                        {
                                    ?>
                                        <tbody>
                                            <tr>
                                                <td><?=$row->p_id;?></td>
                                                <td><?=$row->p_name;?></td>
                                                <td><?=$row->b_id;?></td>
                                                <td></td>
                                                <td><?=$row->stock;?></td>
                                                <td><?=$row->unit_prize;?></td>
                                                <td><a href='<?php echo base_url()."index.php/AdminControl/deleteProduct/".$row->p_id?>'><input class="btn btn-primary" type="submit" value="Delete" href="" name="submit"></a></td>
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


  