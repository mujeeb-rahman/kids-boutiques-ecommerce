<?php include('admin_dashboard.php')?>
<!------------------body--------------------------->
    <main>
        <div class="container-fluid mt-1">
            <ol class="breadcrumb mb-1">
                <li class="breadcrumb-item"><a href="admin_home.php">Administrator</a></li>
                <li class="breadcrumb-item active">Categories</li>
            </ol>
            <div class="card mb-4">
                <div class="row">
                <div class="col-10 card-header"><i class="fas fa-table mr-1"></i>Product Categories</div>
                <div class="col-2 card-header">
                <a class="btn btn-primary" href='<?php echo base_url()."index.php/AdminControl/adminProductCategoryAdd" ?>'>Add New</a>
                </div>
            </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Category ID</th>
                                    <th>Category</th>
                                </tr>
                            </thead>
                            <?php
                                        foreach($data as $row)
                                        {
                                    ?>
                                        <tbody>
                                            <tr>
                                                <td><?=$row->c_id;?></td>
                                                <td><?=$row->categories;?></td>
                                                <td><a href='<?php echo base_url()."index.php/AdminControl/deleteCategory/".$row->c_id?>'><input class="btn btn-primary" type="submit" value="Delete" href="" name="submit"></a></td>
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

    <?php include('footer.php')?>