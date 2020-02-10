<?php
include('boutique_dashboard.php')?>
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
                                        <form method="post" action="<?php echo base_url('index.php/BoutiqueControl/boutiqueProfileUpdate'); ?>">
                                        <?php
                                            foreach($result as $row)
                                            {
                                       ?>
                                            <div class="form-group"><label class="small mb-1" for="inputEmailAddress">Boutique ID</label><input class="form-control py-4" id="inputEmailAddress" type="text" aria-describedby="emailHelp" placeholder="Enter product name" name="bid" value="<?=$row->b_id;?>" required readonly/></div>
                                            <div class="form-group"><label class="small mb-1" for="inputEmailAddress">License Number</label><input class="form-control py-4" id="inputEmailAddress" type="text" aria-describedby="emailHelp" placeholder="Enter license number" name="lno" value="<?=$row->license_no;?>" required readonly/></div>
                                            <div class="form-group"><label class="small mb-1" for="inputEmailAddress">Boutique Name</label><input class="form-control py-4" id="inputEmailAddress" type="text" aria-describedby="emailHelp" placeholder="Enter boutique name" name="bname" value="<?=$row->b_name;?>" required/></div>
                                            <div class="form-group"><label class="small mb-1" for="inputEmailAddress">Boutique Address</label><input class="form-control py-4" id="inputEmailAddress" type="text" aria-describedby="emailHelp" placeholder="Enter boutique address" name="baddress" value="<?=$row->b_address;?>" required/></div>
                                            <div class="form-group"><label class="small mb-1" for="inputEmailAddress">Owner Name</label><input class="form-control py-4" id="inputEmailAddress" type="text" aria-describedby="emailHelp" placeholder="Enter owner name" name="oname" value="<?=$row->owner_name;?>" required/></div>
                                            <div class="form-group"><label class="small mb-1" for="inputEmailAddress">Owner Address</label><input class="form-control py-4" id="inputEmailAddress" type="text" aria-describedby="emailHelp" placeholder="Enter owner address" name="oaddress"  value="<?=$row->owner_address;?>" required/></div>
                                            <div class="form-group"><label class="small mb-1" for="inputEmailAddress">Boutique Category</label><input class="form-control py-4" id="inputEmailAddress" type="text" aria-describedby="emailHelp" placeholder="Enter category" name="category" value="<?=$row->basic_category;?>" required/></div>
                                            <div class="form-group"><label class="small mb-1" for="inputEmailAddress">Mobile</label><input class="form-control py-4" id="inputEmailAddress" type="text" aria-describedby="emailHelp" placeholder="Enter mobile" name="mobile"  value="<?=$row->mobile;?>" required/></div>
                                            <div class="form-group"><label class="small mb-1" for="inputEmailAddress">Email</label><input class="form-control py-4" id="inputEmailAddress" type="text" aria-describedby="emailHelp" placeholder="Enter email" name="email" value="<?=$row->email;?>" required/></div>
                                            <div class="form-group"><label class="small mb-1" for="inputEmailAddress">Password</label><input class="form-control py-4" id="inputEmailAddress" type="text" aria-describedby="emailHelp" placeholder="Enter password" name="sname" value="<?=$row->password;?>" required/></div>
                                            <div class="form-group"><label class="small mb-1" for="inputEmailAddress">Confirm Password</label><input class="form-control py-4" id="inputEmailAddress" type="text" aria-describedby="emailHelp" placeholder="Enter password again" name="sname" value="" required/></div>

                                            <div class="form-group mt-4 mb-0"><input type="submit" class="btn btn-primary btn-block" name="submit" value="Update" href=""></div>
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
