<!DOCTYPE html>
<html>
<head>
	<title>kids</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css">
	<link rel="stylesheet"href="<?php echo base_url(); ?>css/fa/css/all.min.css">

</head>
<body >

<div class="container text-center">

  <div class="row">
    <div class="col-md-6 col-12">
        <div class="text-left">
           <h5>KidsArt</h5>
        </div>

      <div>  
              <img src="<?php echo base_url(); ?>index_style/images/login.jpg" class="img-fluid">
          </div>
    
    
  <div class="bck mb-5 ">
        
            <div class="py-md-4 py-sm-5 py-0 text-center">
                <h2>KidsArt</h2>        
                <p class="pt-md-2">Buy Products and Order Tracking </br>  managemet is a signup away.</p>   
            </div>  
          <div>        
              <p><strong>Don’t have an account?</strong></p>
          </div>
          <div>
           <a href='<?php echo base_url()."index.php/AdminControl/register" ?>'> <button type="button" class="btn btn-primary signin mb-md-5 mb-3   px-md-5 ">Click here to sign up</button></a>
          </div>
    </div>
</div>
           
    
<!-------------Sign in ------------------------>

<div class="col-md-6 py-md-4 text-left">
      <div class="container ml-md-5 py-md-5 py-3">
        <div class="px-md-3 px-3 ">
          <h3>Sign In</h3>
          <p>welcome home again.</p>
      
        </div>
        <?php echo isset($error) ? $error : ''; ?> 
      <form class="py-md-5" method = "post" action="<?php echo base_url('index.php/AdminControl/loginAuthentication'); ?>">        
            <div class="form-group col-md-12 mt-md-3">
            <label>E-Mail Address</label>
            <div class="position-relative">
            <input type="text" class="form-control" name="email" id="inputAddress" placeholder="john@doe.com">
            <i class="fas fa-check position-absolute tick-hint text-danger"></i>
            </div>
            </div>

          <div class="form-group col-md-12 col-lg-12 pb-md-3 mt-md-3">
          <label>Password</label>
          <div class="position-relative">
          <input type="Password" class="form-control" name="password" id="inputEmail4" placeholder="******">
          <i class="fas fa-check position-absolute tick-hint text-success "></i>
        </div>
              
        </div>


          <div class="form-group col-md-12 ">
          <div class="form-check mt-md-3">
            <input class="form-check-input" type="checkbox" id="gridCheck">
           <label >Keep me signed in</label>  
            </div>          
        </div>
        <div class="form-group col-lg-12 col-md-12">
      <input type="submit" class="btn btn-primary mt-md-3 mb-4 btn-size" value="Sign In"/>
    </div>
    </form>

  </div>
</div>



<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/popper.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap.min.js"></script> 
</body>
</html>