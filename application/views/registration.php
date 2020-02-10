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
<body onload="hideDiv()">

<div class="container text-center">
<!-- header section start -->
  <div class="row">
    <div class="col-12 mt-4">
        <div class="text-left">
           <h5><a style="color:black; text-decoration:none;" href='<?php echo base_url()."index.php/AdminControl/index" ?>'>BoutiqueSoft</a></h5>
        </div>
  </div> 
</div>
<!-- header section end -->
<!-- selection section start -->
<div class="row d-flex my-2 border-top">                  
    <div class="col-md-6">
        <button class="btn" id="b1" >
        <h4 class="fontcol">Customer Registration</h4>
        </button>             
    </div>
    <div class="col-md-6 ">
        <button class="btn" id="b2" >
        <h4 class="fontcol">Boutique Registration</h4>
        </button>              
    </div>
</div>
<!-- selection section end -->  
        <!---------------Subject section form 1 start------------>	
<div id="div1" class="py-5 border-top mb-5 text-left">
    <section class="mt-1">	
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-5">
    <form class="py-md-1" name="form1" onsubmit="return validform1()" action="<?php echo base_url('index.php/RegisterControl/UserRegister'); ?>" method="post">
        <div class="form-row">
            <div class="form-group col-md-12 mt-md-3">
            <label>Name</label>
            <div class="position-relative">
            <input type="text" class="form-control" name="name" id="inputAddress" placeholder="john D'suza">
            <i class="fas fa-check position-absolute tick-hint text-danger"></i>
            </div>
            </div>

            <div class="form-group col-md-12 mt-md-3">
            <label>E-Mail Address</label>
            <div class="position-relative">
            <input type="text" class="form-control" name="email" id="inputAddress" placeholder="john@doe.com">
            <i class="fas fa-check position-absolute tick-hint text-danger"></i>
            </div>
            </div>

            
              
          <div class=" col-md-12 mt-md-3 mb-md-2 "> 
               <span>Mobile Number</span>
             </div>
            <div class="form-group col-md-4 col-lg-3 col-5">

                <select id="inputState" class="form-control w-auto w-hint d-inline-block">
                    <option selected>+91</option>        
                </select>
            
            </div>

          <div class="form-group col-md-8 col-lg-9 col-7">
            <div class="position-relative">
            <input type="text" class="form-control" name="mobile" id="inputZip" placeholder="00000 00000">
            <i class="fas fa-check position-absolute tick-hint text-success "></i>
            </div>
          </div>

  
     
          <div class="form-group col-md-12 col-lg-6 pb-md-3 mt-md-3">
          <label>Password</label>
          <input type="Password" class="form-control" name="password" id="inputEmail4" placeholder="******">
        </div>
    
        <div class="form-group col-md-12 col-lg-6 pb-md-3 mt-md-1 mt-lg-3">
          <label>Repeat Password</label>  
             <div class="position-relative">
            <input type="Password" class="form-control" name="cpassword" id="inputEmail4" placeholder="******">
            <i class="fas fa-check position-absolute tick-hint text-success "></i>
            </div> 
          
        </div>

      <input type="submit" class="btn btn-primary ml-5 mt-md-2 mb-2 btn-size" value="Sign Up"/>
        </form>         
        </div>
        </div>
        </div>
	</section>
<!-- client validation for patient registration form start -->		
    <script>
        function validform1()
        {
            var name = document.forms["form1"]["name"].value;
            var address = document.forms["form1"]["address"].value;
            var dob = document.forms["form1"]["dob"].value;
            var gender = document.forms["form1"]["gender"].value;
            var mobile = document.forms["form1"]["mobile"].value;
            var email = document.forms["form1"]["email"].value;
            var pass = document.forms["form1"]["password"].value;
            var cpassword = document.getElementById('password').value;
            var regname = /^[a-zA-Z ]{2,30}$/;
            var regadd = /^[A-Za-z0-9.,' -]{1,200}$/;
            var regmob = /^[0-9]{10}+$/;
            var regexEmail = /\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/; 

            //empty fields
            if(name=="" || address=="" || dob=="" || gender=="" || mobile=="" || email=="" || password=="" || cpassword=="" )
            {
                alert("Enter valid data");
                return false;
            }
            //checking name 
            else if(!regname.test(name.value)) {
                alert("Enter valid name");
                return false;
            }
            //address validation
            else if (!regadd.test(address.value)) {
                alert("Enter valid address");
                return false;
            }
            //mobile number validation
            else if (!regmob.test(mobile.value)) {
                alert("Enter valid mobile number");
                return false;
            }
            //email validation
            else if (!regexEmail.test(email.value)) {
            alert("Enter valid email");
            return false;
            }
            //passsword checking
            else if(password.length<6)
            {
                alert("password must be at least 6 characters long");
                password.focus();
                return false;
            }
            else if(password != cpassword)
            {
            alert("password doesn't match");
                password.focus();
                return false;
            }
        
        }
    </script>
<!-- client validation for doctor registration form end -->
 </div>
 <!---------------Subject section form 1 end------------>
	<!---------------Subject section form 2 start------------>			
<div id="div2" class=" py-5">
    <section>
		<div class="cotainer">
            <div class="row justify-content-center text-left">
                <div class="col-md-5">
                    <form class="py-md-1" name="form2" onsubmit="return validform()" action="<?php echo base_url('index.php/RegisterControl/BoutiqueRegister'); ?>" method="POST">
                      <div class="form-row">
                      <div class="form-group col-md-12 mt-md-3">
                        <label>Licence Number</label>
                        <div class="position-relative">
                        <input type="text" class="form-control " name="lno" id="inputAddress" placeholder="1234567890">
                        <i class="fas fa-check position-absolute tick-hint text-danger"></i>
                        </div>
                        </div>

            <div class="form-group col-md-12 mt-md-3">
            <label>Boutique Name</label>
            <div class="position-relative">
            <input type="text" class="form-control" name="bname" id="inputAddress" placeholder="john D'suza">
            <i class="fas fa-check position-absolute tick-hint text-danger"></i>
            </div>
            </div>

            <div class="form-group col-md-12 mt-md-3">
            <label>Boutique Category</label>
            <div class="position-relative">
            <input type="text" class="form-control" name="category" id="inputAddress" placeholder="boys/girls/infant">
            <i class="fas fa-check position-absolute tick-hint text-danger"></i>
            </div>
            </div>

            <div class="form-group col-md-12 mt-md-3">
            <label>Address</label>
            <div class="position-relative">
            <input type="text" class="form-control" name="baddress" id="inputAddress" placeholder="12/32 Rose Garden street Newyork">
            <i class="fas fa-check position-absolute tick-hint text-danger"></i>
            </div>
            </div>

            <div class="form-group col-md-12 mt-md-3">
            <label>Owner's Name</label>
            <div class="position-relative">
            <input type="text" class="form-control" name="name" id="inputAddress" placeholder="john D'suza">
            <i class="fas fa-check position-absolute tick-hint text-danger"></i>
            </div>
            </div>

            <div class="form-group col-md-12 mt-md-3">
            <label>Owner's Address</label>
            <div class="position-relative">
            <input type="text" class="form-control" name="address" id="inputAddress" placeholder="12/32 Rose street Washington">
            <i class="fas fa-check position-absolute tick-hint text-danger"></i>
            </div>
            </div>

            <div class="form-group col-md-12 mt-md-3">
            <label>E-Mail Address</label>
            <div class="position-relative">
            <input type="text" class="form-control" name="email" id="inputAddress" placeholder="john@doe.com">
            <i class="fas fa-check position-absolute tick-hint text-danger"></i>
            </div>
            </div>

            
              
            <div class=" col-md-12 mt-md-3 mb-md-2 "> 
               <span>Mobile Number</span>
             </div>
            <div class="form-group col-md-4 col-lg-3 col-5">

                <select id="inputState" class="form-control w-auto w-hint d-inline-block">
                    <option selected>+91</option>        
                </select>
            
            </div>

          <div class="form-group col-md-8 col-lg-9 col-7">
            <div class="position-relative">
            <input type="text" class="form-control" name="mobile" id="inputZip" placeholder="00000 00000">
            <i class="fas fa-check position-absolute tick-hint text-success "></i>
            </div>
          </div>
     
          <div class="form-group col-md-12 col-lg-6 pb-md-3 mt-md-3">
          <label>Password</label>
          <input type="Password" class="form-control" name="password" id="inputEmail4" placeholder="******">
        </div>
    
        <div class="form-group col-md-12 col-lg-6 pb-md-3 mt-md-1 mt-lg-3">
          <label>Repeat Password</label>  
             <div class="position-relative">
            <input type="Password" class="form-control" name="cpassword" id="inputEmail4" placeholder="******">
            <i class="fas fa-check position-absolute tick-hint text-success "></i>
            </div> 
          
        </div>

      <input type="submit" class="btn btn-primary ml-5 mt-md-2 mb-2 btn-size" value="Sign Up"/>
        </form> 
                </div>
            </div>
	    </div>
    </section>

<!-- client validation for doctor registration form start -->
    <script>
        function validform2()
        {
            var id = document.forms["form1"]["id"].value;
            var spec = document.forms["form1"]["spec"].value;
            var name = document.forms["form1"]["name"].value;
            var address = document.forms["form1"]["address"].value;
            var dob = document.forms["form1"]["dob"].value;
            var gender = document.forms["form1"]["gender"].value;
            var mobile = document.forms["form1"]["mobile"].value;
            var email = document.forms["form1"]["email"].value;
            var pass = document.forms["form1"]["password"].value;
            var cpassword = document.getElementById('password').value;
            var regname = /^[a-zA-Z ]{2,30}$/;
            var regadd = /^[A-Za-z0-9.,' -]{1,200}$/;
            var regmob = /^[0-9]{10}+$/;
            var regexEmail = /\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/; 

            //empty fields
            if(name=="" || address=="" || dob=="" || gender=="" || mobile=="" || email=="" || password=="" || cpassword=="" )
            {
                alert("Enter valid data");
                return false;
            }
            //registration id check
            else if (!regadd.test(id.value)) {
                alert("Enter valid registration id");
                return false;
            }
            else if (!regname.test(spec.value)) {
                alert("Enter valid specialized department");
                return false;
            }
            //checking name 
            else if (!regname.test(name.value)) {
                alert("Enter valid name");
                return false;
            }
            //address validation
            else if (!regadd.test(address.value)) {
                alert("Enter valid address");
                return false;
            }
            //mobile number validation
            else if (!regmob.test(mobile.value)) {
                alert("Enter valid mobile number");
                return false;
            }
            //email validation
            else if (!regexEmail.test(email.value)) {
            alert("Enter valid email");
            return false;
            }
            //passsword checking
            else if(password.length<6)
            {
                alert("password must be at least 6 characters long");
                password.focus();
                return false;
            }
            else if(password != cpassword)
            {
            alert("password doesn't match");
                password.focus();
                return false;
            }
        
        }
    </script>
<!-- client validation for doctor registration form end -->	
</div>
<!---------------Subject section form 2 end------------>	
<!---------------footer section start------------>
 <?php include('footer.php')?>  
<!---------------footer section end------------>
  
<script>
$(document).ready(function(){
	
	
	
  $("#b1").click(function(){
    $("#div1").show();
	 $("#div2").hide();
  });
   $("#b2").click(function(){
    $("#div1").hide();
	 $("#div2").show();
  });
});

 function hideDiv() {
     document.getElementById("div2").style.display = 'none';   
	document.getElementById("div3").style.display = 'none';   	  
    }  
 </script>	

<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/popper.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap.min.js"></script> 
</body>
</html>