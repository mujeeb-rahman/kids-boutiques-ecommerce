<?php
include('customer_dashboard.php')?>
<!------------------body--------------------------->
<main>
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-1">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-1">Boutique Profile</h3></div>
                                    <div class="card-body">
                                        <form method="post" action="<?php echo base_url('index.php/BoutiqueControl/customerProfileUpdate'); ?>">
                                        <?php
                                            foreach($result as $row)
                                            {
                                       ?>
                                            <div class="form-group"><label class="small mb-1" for="inputEmailAddress">Customer ID</label><input class="form-control py-4" id="inputEmailAddress" type="text" aria-describedby="emailHelp" placeholder="Enter customer id" name="uid" value="<?=$row->u_id;?>" required readonly/></div>
                                            <div class="form-group"><label class="small mb-1" for="inputEmailAddress">Customer Name</label><input class="form-control py-4" id="inputEmailAddress" type="text" aria-describedby="emailHelp" placeholder="Enter customer name" name="uname" value="<?=$row->u_name;?>" required/></div>
                                            <div class="form-group"><label class="small mb-1" for="inputEmailAddress">Delivery Address</label><input class="form-control py-4" id="inputEmailAddress" type="text" aria-describedby="emailHelp" placeholder="Enter delivery address" name="uaddress" value="<?=$row->u_address;?>" required/></div>
                                            <div class="form-group"><label class="small mb-1" for="inputEmailAddress">Mobile</label><input class="form-control py-4" id="inputEmailAddress" type="text" aria-describedby="emailHelp" placeholder="Enter mobile" name="mobile"  value="<?=$row->mobile;?>" required/></div>
                                            <div class="form-group"><label class="small mb-1" for="inputEmailAddress">Email</label><input class="form-control py-4" id="inputEmailAddress" type="text" aria-describedby="emailHelp" placeholder="Enter email" name="email" value="<?=$row->email;?>" required/></div>
                                            <div class="form-group"><label class="small mb-1" for="inputEmailAddress">Password</label><input class="form-control py-4" id="inputEmailAddress" type="text" aria-describedby="emailHelp" placeholder="Enter password" name="password" value="<?=$row->password;?>" required/></div>
                                            <div class="form-group"><label class="small mb-1" for="inputEmailAddress">Confirm Password</label><input class="form-control py-4" id="inputEmailAddress" type="text" aria-describedby="emailHelp" placeholder="Enter password again" name="cpassword" value="" required/></div>

                                            <div class="form-group mt-4 mb-0"><input type="submit" class="btn btn-primary btn-block" name="submit" value="Add Product" href=""></div>
                                            <?php
                                                 } ?>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
<?php include('footer.php')?>
