<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>KidsArt</title>

  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">
  
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="<?php echo base_url(); ?>css/simple-sidebar.css" rel="stylesheet">
   <link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet">
   <link rel="stylesheet"href="<?php echo base_url(); ?>css/fa/css/all.min.css">

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class=" border-right" id="sidebar-wrapper">
      <div class="pt-sm-2 px-3"><h5>KidsArt</h5></div>
      
      <ul class="list-group list-group-flush">
		<li class="list-group-item"><span class="text-secondary font-family-roboto small">Administrator Tools</span></li>
        <li class="list-group-item"><a href='<?php echo base_url()."index.php/AdminControl/getNewBoutique" ?>'  class="list-group-item-action">Home</a></li>
        <li class="list-group-item "><a href='<?php echo base_url()."index.php/AdminControl/getRegistredBoutique" ?>' class="list-group-item-action">Boutiques</li></a>
        <li class="list-group-item"><a href='<?php echo base_url()."index.php/AdminControl/getCustomers" ?>'  class="list-group-item-action">Customers</li></a>
        <li class="list-group-item"><a href='<?php echo base_url()."index.php/AdminControl/getOrders" ?>'  class="list-group-item-action">Orders</li></a>
        <li class="list-group-item"><a href='<?php echo base_url()."index.php/AdminControl/getProducts" ?>'  class="list-group-item-action">Products</li></a>
        <li class="list-group-item"><a href='<?php echo base_url()."index.php/AdminControl/getCategories" ?>'  class="list-group-item-action">Product Categories</li></a>
        <li class="list-group-item"><a href='<?php echo base_url()."index.php/AdminControl/getSubCategories" ?>'  class="list-group-item-action">Product Sub-categories</li></a>
        <li class="list-group-item"><a href='<?php echo base_url()."index.php/AdminControl/getSizechart" ?>'  class="list-group-item-action">Size Chart</li></a>
        <li class="list-group-item"><a href="#"  class="list-group-item-action">Feedbacks</li></a>
   <li class="list-group-item">
	  
		  <div class=" border-rounded bg-sec2 p-2">
		 <!-----------<div class="row">
				<div class="col-md-3">
					<img src="img/order.png" class="img-fluid  mt-2">
				</div>
				<div class="col-md-5">
					<p class="small">Recent Orders<p>
				</div>
					<div class="col-md-4 text-left">
					<a href="#"  class="list-group-item-action small text-black">View all</a>
				</div>
		   </div>---------->
		   <div class="d-flex">
			<div>
				<img src="<?php echo base_url(); ?>img/recent-order.png" class="img-fluid ml-2 mr-3"></div>
				<p class="small mr-3 mt-1">Recent Orders<p>
				<a href="#"  class="list-group-item-action small text-black">View all</a>
			</div>
		   <p class="text-center p-5">No Recent Orders</p>
		  </div>
	</li>
	     </ul>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light  border-bottom">

        <button class="navbar-toggler" type="button" data-toggle="collapse" id="menu-toggle" aria-controls="menu-toggle" aria-expanded="false" aria-label="Toggle navigation">
          <span><i class="fa fa-arrow-right"></i></span>
        </button>
 
         <div>
          <h5 class="text-right"> ADMINISTRATOR</h5>
         </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-lg-0">
            <li class="nav-item active mt-md-3">
              <a href="#" role="button"  aria-haspopup="true" aria-expanded="false" class="">
                <div class="position-relative px-md-3">
			           <i class="fas fa-comment-alt text-dark fa-2x"></i>
               </div>
             <!--- <i class="fa fa-envelope fa-fw text-dark"></i>---->
                <!-- Counter - Alerts -->
                <div class="position-absolute px-md-3 badg-hint">
                <span class="badge badge-primary badge-counter rounded-circle">2</span>
              </div>
              </a>
            </li>

            <li class="nav-item  mt-md-3 ">
              <!-- <a class="nav-link" href="#"><i class="far fa-comment-alt"></i></a> -->
              <a href="#" role="button"  aria-haspopup="true" aria-expanded="false">
              <div class="position-relative">
                <i class="fa fa-bell fa-fw text-dark fa-2x "></i>
              </div>
                <!-- Counter - Alerts -->
                <div class="position-absolute badg-hint">
                <span class="badge badge-primary badge-counter rounded-circle">2</span>
              </div>
              </a>
            </li>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
		
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				
                <!-- <img class="rounded-circle img-fluid" src="<?php echo base_url(); ?>img/avatar.png">
				<span class="mr-2 d-lg-inline font-weight-bolder small text-dark">John Doe </span> -->
				<p class="px-5mr-2 d-lg-inline text-secondary font-family-roboto small">Administrator</p>
				
              </a>
			  
			  
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fa fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fa fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fa fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?php echo base_url('index.php/AdminControl/index'); ?>" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
        
            </li>
          </ul>
        </div>
      </nav>



      <?php include 'footer.php'?>
<!------------------body--------------------------->
    
<!----------------------------------------------------------------->
  