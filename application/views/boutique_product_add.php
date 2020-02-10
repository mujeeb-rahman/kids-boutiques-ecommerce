<?php include('boutique_dashboard.php')?>
<!------------------body--------------------------->
<main>
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-1">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-1">Add New Product</h3></div>
                                    <div class="card-body">
                                        <form method="post" action="<?php echo base_url('index.php/AdminControl/adminSizeAddition'); ?>">
                                        <div class="form-group"><label class="small mb-1" for="inputEmailAddress">Category ID</label>
                                            <select class="form-control py-4" name="cid" id="exampleFormControlSelect1" placeholde="Select category">
                                                    <option selected>Select category</option>
                                                    <!-- <?php foreach($data as $row)
                                                    {
                                                    ?>
                                                        <option value="<?=$row->c_id;?>"><?=$row->categories;?></option>
                                                    <?php
                                                    } ?> -->
                                                </select>
                                        </div>
                                        <div class="form-group"><label class="small mb-1" for="inputEmailAddress">Sub-category ID</label>
                                            <select class="form-control py-4" name="cid" id="exampleFormControlSelect1" placeholde="Select category">
                                                    <option selected>Select Sub-category</option>
                                                    <!-- <?php foreach($data as $row)
                                                    {
                                                    ?>
                                                        <option value="<?=$row->c_id;?>"><?=$row->categories;?></option>
                                                    <?php
                                                    } ?> -->
                                                </select>
                                        </div>
                                        <div class="form-group"><label class="small mb-1" for="inputEmailAddress">Size ID</label>
                                            <select class="form-control py-4" name="cid" id="exampleFormControlSelect1" placeholde="Select category">
                                                    <option selected>Select size</option>
                                                    <!-- <?php foreach($data as $row)
                                                    {
                                                    ?>
                                                        <option value="<?=$row->c_id;?>"><?=$row->categories;?></option>
                                                    <?php
                                                    } ?> -->
                                                </select>
                                        </div>
                                            <div class="form-group"><label class="small mb-1" for="inputEmailAddress">Product Name</label><input class="form-control py-4" id="inputEmailAddress" type="text" aria-describedby="emailHelp" placeholder="Enter product name" name="subname" required/></div>
                                            <div class="form-group"><label class="small mb-1" for="inputEmailAddress">Quantity</label><input class="form-control py-4" id="inputEmailAddress" type="text" aria-describedby="emailHelp" placeholder="Enter quantity" name="sname" required/></div>
                                            <div class="form-group"><label class="small mb-1" for="inputEmailAddress">Unit Prize</label><input class="form-control py-4" id="inputEmailAddress" type="text" aria-describedby="emailHelp" placeholder="Enter unit prize" name="sname" required/></div>

                                            <div class="form-group mt-4 mb-0"><input type="submit" class="btn btn-primary btn-block" name="submit" value="Add Product" href=""></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
<?php include('footer.php')?>
