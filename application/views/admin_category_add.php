<?php include('admin_dashboard.php')?>
<!------------------body--------------------------->
<main>
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Create New Category</h3></div>
                                    <div class="card-body">
                                        <form method="post" action="<?php echo base_url('index.php/AdminControl/adminCategoryAdd'); ?>">
                                            <div class="form-group"><label class="small mb-1" for="inputEmailAddress">Category ID</label><input class="form-control py-4" id="inputEmailAddress" type="text" aria-describedby="nameHelp" placeholder="Enter ID" name="cid" required/></div>
                                            <div class="form-group"><label class="small mb-1" for="inputEmailAddress">Category Name</label><input class="form-control py-4" id="inputEmailAddress" type="text" aria-describedby="emailHelp" placeholder="Enter Category" name="cname" required/></div>
                                            
                                            <div class="form-group mt-4 mb-0"><input type="submit" class="btn btn-primary btn-block" name="submit" value="Add Category" href=""></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
<?php include('footer.php')?>
