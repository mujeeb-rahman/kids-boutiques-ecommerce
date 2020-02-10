<?php include('admin_dashboard.php')?>
<!------------------body--------------------------->
<main>
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-3">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Create New Sub-category</h3></div>
                                    <div class="card-body">
                                        <form method="post" action="<?php echo base_url('index.php/AdminControl/adminSubCategoryAdd'); ?>">
                                            <div class="form-group"><label class="small mb-1" for="inputEmailAddress">Category ID</label>
                                                <select class="form-control py-4" name="cid" id="exampleFormControlSelect1">
                                                    <option selected>Select category</option>
                                                    <?php foreach($data as $row)
                                                    {
                                                    ?>
                                                        <option value="<?=$row->c_id;?>"><?=$row->categories;?></option>
                                                    <?php
                                                    } ?>
                                                </select>
                                            <!-- <input class="form-control py-4" id="inputEmailAddress" type="text" aria-describedby="nameHelp" placeholder="Enter Name" name="cid" required/></div> -->
                                            <div class="form-group"><label class="small mb-1" for="inputEmailAddress">Sub-category ID</label><input class="form-control py-4" id="inputEmailAddress" type="text" aria-describedby="emailHelp" placeholder="Enter Sub-category ID" name="sid" required/></div>
                                            <div class="form-group"><label class="small mb-1" for="inputEmailAddress">Sub-category Name</label><input class="form-control py-4" id="inputEmailAddress" type="text" aria-describedby="emailHelp" placeholder="Enter Sub-category Name" name="sname" required/></div>
                                            
                                            <div class="form-group mt-4 mb-0"><input type="submit" class="btn btn-primary btn-block" name="submit" value="Add Sub-category" href=""></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
<?php include('footer.php')?>
