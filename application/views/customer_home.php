<?php include('customer_dashboard.php')?>
<!------------------body--------------------------->
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid mt-1">
            <ol class="breadcrumb mb-1  ">
                <li class="breadcrumb-item"><a href="admin_home.php">Customer</a></li>
                <li class="breadcrumb-item active">Home</li>
            </ol>
            <div class="card ">
                <div class="row">
                <div class="col-10 card-header"><i class="fas fa-table mr-1"></i>Products</div>
                <div class="col-2 card-header">
                </div>
                </div>
            </div>
            <div class="row ml-2">
            <?php
                foreach($data as $row)
                {
            ?>
                <div class="card m-2" style="width: 18rem;">
                    <img class="card-img-top" src="<?php echo base_url(); ?>index_style/images/infant2.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?=$row->p_name;?></h5>
                        <h6 class="card-text">$<?=$row->unit_prize;?></h6>
                        <a href="#" class="btn btn-primary">Add to cart</a>
                        <a href="#" class=" ml-5 btn btn-primary">Buy item</a>
                    </div>
                </div>
            <?php } ?>
            </div>
        </div>

    </main>            
</div>


  