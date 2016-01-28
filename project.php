<?php
//error_reporting(E_ALL);
//ini_set('display_errors', 1);
require 'header.php';
?>
<?php
require 'validation.php';
require 'insert.php';
?>
<!--html code for rgistration form-->
 <div class="container">
 <div class="col-sm-12">
    <div class="row">
     <h1 class="well" align="center">Registration Form</h1>
  	 <form name="f" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
   					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-4 form-group">
								<label>1.User Name *</label>
								<input type="text" name="username" value="" placeholder="User Name" class="form-control">
								<span class="error"> <?php echo $username_Err;?></span>
							</div>
							<div class="col-sm-4 form-group">
								<label>2.Password</label>
								<input type="password" name="password" value="" placeholder="Password" class="form-control">
								<span class="error"> <?php echo $password_Err;?></span>
							</div>                         
                                      
                            <div class="col-sm-4 form-group">
                            	<label>3.Retype Password</label>
								<input type="password" name="repassword" value="" placeholder="Re-type Password" class="form-control">
								<span class="error"> <?php echo $repassword_Err;?></span>
							</div>
						</div>
					</div>
                    <div class="col-sm-12 form-group">
						<div class="row">
							<div class="col-sm-4 form-group">
								<label>4.First Name</label>
								<input type="text" name="firstname" value="" placeholder="First Name" class="form-control">
								<span class="error"> <?php echo $firstname_Err;?></span>
							</div>
							<div class="col-sm-4 form-group">
								<label>5.Middle Name</label>
								<input type="text" name="midname" value="" placeholder="Middle Name" class="form-control">
							</div>                                       
                            <div class="col-sm-4 form-group">
                            	<label>6.Last Name</label>
								<input type="text" name="lastname" value="" placeholder="Last Name" class="form-control">
								<span class="error"> <?php echo $lastname_Err;?></span>
							</div>
					    </div>
					</div>
<div class="col-sm-12 form-group">
    <div class="row">
       <div class="col-sm-4 form-group">
          <label>7.Gender</label>                           
          <div class="radio">
          <label><input type="radio" name="sex" value="male">Male</label>
        </div>
        <div class="radio">
            <label><input type="radio" name="sex" value="female">Female</label>
            <span class="error"> <?php echo $sex_Err;?></span>
        </div>
       </div>
    <div class="col-sm-4 form-group">
            <label>8.Marital Status</label>                           
            <div class="radio">
            <label><input type="radio" name="marital" value="maried">Maried</label>
         </div>
         <div class="radio">
            <label><input type="radio" name="marital" value="unmaried">Unmaried</label>
            <span class="error"> <?php echo $marital_Err;?></span>
         </div>
      </div>
      <div class="col-sm-4 form-group">
         <label>9.Date of Birth</label>
         <input type="date" name="dob" value=""><br>
         <span class="error"> <?php echo $dob_Err;?></span>
      </div>
   </div>
</div>                                
					<div class="col-sm-12">		
						<div class="row">
						   <div class="col-sm-6 form-group">
							    <h3><label>Residence Address</label></h3><br>
							    <label>Street</label>
			                    <input type="text" name="street" value="" placeholder="Enter Street Address" class="form-control">
						   		<span class="error"> <?php echo $street_Err;?></span>
								<label>City</label>
								<input type="text" name="city" value="" placeholder="Enter City Name Here.." class="form-control">
														
								<label>State</label>
								<input type="text" name="state" value="" placeholder="Enter State Name Here.." class="form-control">
								
								<label>Zip Code</label>
								<input type="text" name="zip" value="" placeholder="Enter Zip Code Here.." class="form-control">
                                
                                <label>Phone Number</label>
						        <input type="text" name="phone" value="" placeholder="Enter Phone Number Here.." class="form-control">
						
						        <label>Email Address</label>
						        <input type="text" name="email" value="" placeholder="Enter Email Address Here.." class="form-control">
						</div>		
						
						    <div class="col-sm-6 form-group">
							    <h3><label>Office Address</label></h3><br>
							    <label>Street</label>
			                    <input type="text" name="offstreet" value="" placeholder="Enter Street Address" class="form-control">
						   		
								<label>City</label>
								<input type="text" name="offcity" value="" placeholder="Enter City Name Here.." class="form-control">
														
								<label>State</label>
								<input type="text" name="offstate" value="" placeholder="Enter State Name Here.." class="form-control">
								
								<label>Zip Code</label>
								<input type="text" name="offzip" value="" placeholder="Enter Zip Code Here.." class="form-control">

								<label>Phone Number</label>
						        <input type="text" name="offphone" value="" placeholder="Enter Phone Number Here.." class="form-control">
						
						        <label>Email Address</label>
						        <input type="text" name="offemail" value="" placeholder="Enter Email Address Here.." class="form-control">
							</div>		
						</div>

						<div class="row">
							<div class="col-sm-3 form-group">
								<label>UploadImage</label>
								<input type="file" name="uploadimage" value="" placeholder="Enter Company Name Here.." class="form-control">
							</div>
							<div class="col-sm-3 form-group"></div>
				     		<div class="col-sm-6 form-group">							
								<label>Website</label>
						        <input type="text" name="website" value="" placeholder="Enter Website Name Here.." class="form-control">
					        </div>
					    </div>
<div >
<button type="submit" class="btn btn-default" name="submit" value="save">Submit</button>
</div>
</div>
</div>
</form>
</div>
<?php
require 'footer.php';
?>
