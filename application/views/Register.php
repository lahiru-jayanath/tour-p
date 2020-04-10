<?php include 'partials/header.php'?>

<style type="text/css">
body {
     background: url('https://t119q2izu9f3tlmwk2xdggp1-wpengine.netdna-ssl.com/wp-content/uploads/2017/08/20170801-BLewis-Dear-Trail-Curmudgeon-1-1080x675.jpg') fixed;
    background-size: cover;


}

*[role="form"] {
    max-width: 530px;
    padding: 15px;
    margin: 0 auto;
    border-radius: 0.3em;
    background-color: #f2f2f2;
}

*[role="form"] h2 { 
    font-family: 'Open Sans' , sans-serif;
    font-size: 40px;
    font-weight: 600;
    color: #000000;
    margin-top: 5%;
    text-align: center;
    text-transform: uppercase;
    letter-spacing: 4px;
}

.error {color: #FF0000;}


</style>
		<?php  if ($this->session->flashdata('msg')) {
			echo "<h3>".$this->session->flashdata('msg')."</h3>";
			# code...
		}    ?>


		<div class="container">
				<?php echo validation_errors();?> 
				<?php echo form_open('/register/RegisterUser'); ?>

		             <div class="form-horizontal" role="form"> 

			                <h1>Registration</h1>
			                <div class="form-group"> 
			                    <label for="firstName" class="col-sm-3 control-label">First Name*</label>
			                    <div class="col-sm-9">
			                        <input type="text" id="firstName" placeholder="First Name" class="form-control" autofocus name="firstName" required>
			                    </div>
			                </div>
			                <div class="form-group">
			                    <label for="lastName" class="col-sm-3 control-label">Last Name*</label>
			                    <div class="col-sm-9">
			                        <input type="text" id="lastName" placeholder="Last Name" class="form-control" autofocus name="lastName" required>
			                    </div>
			                </div>
			                <div class="form-group">
			                    <label for="email" class="col-sm-3 control-label">Email* </label>
			                    <div class="col-sm-9">
			                        <input type="email" id="email" placeholder="Email" class="form-control" name= "email" required>
			                    </div>
			                </div>
			                <div class="form-group">
			                    <label for="password" class="col-sm-3 control-label">Password*</label>
			                    <div class="col-sm-9">
			                        <input type="password" id="password" placeholder="Password" class="form-control" name="password" required>
			                    </div>
			                </div>
			                <div class="form-group">
			                    <label for="password" class="col-sm-3 control-label">Confirm Password*</label>
			                    <div class="col-sm-9">
			                        <input type="password" id="Cpassword" placeholder="Password" class="form-control" name="Cpassword" required>
			                    </div>
			                </div>
			                <div class="form-group">
			                    <label for="birthDate" class="col-sm-3 control-label">Date of Birth*</label>
			                    <div class="col-sm-9">
			                        <input type="date" id="birthDate" class="form-control" name="birthDate" required>
			                    </div>
			                </div>
			                <div class="form-group">
			                    <label for="phoneNumber" class="col-sm-3 control-label">Phone number* </label>
			                    <div class="col-sm-9">
			                        <input type="phoneNumber" id="phoneNumber" placeholder="Phone number" class="form-control" name="phoneNumber" required>
			                        <span class="help-block">Your phone number won't be disclosed anywhere </span>
			                    </div>
			                </div>
			               
			                <div class="form-group">
			                    <label for="address" class="col-sm-3 control-label">Address*</label>
			                    <div class="col-sm-9">
			                        <input type="text" id="address" placeholder="Address" class="form-control" autofocus name="address" required>
			                    </div>
			                </div>

			                <div class="form-group">
			                    <label class="control-label col-sm-3">Gender</label>
			                    <div class="col-sm-6">
			                        <div class="row">
			                            <div class="col-sm-4">
			                                <label class="radio-inline">
			                                    <input type="radio" id="femaleRadio" value="Female" name="gender">Female
			                                </label>
			                            </div>
			                            <div class="col-sm-4">
			                                <label class="radio-inline">
			                                    <input type="radio" id="maleRadio" value="Male" name="gender">Male
			                                </label>
			                            </div>
			                        </div>
			                    </div>
			                </div> <!-- /.form-group -->

			                <div class="form-group">
			                    <div class="col-sm-9 col-sm-offset-3">
			                         <span class="help-block">*Required fields</span>
			                    </div>
			                </div>

			                <button type="submit" class="btn btn-primary btn-block">Register</button>

		        	</div>

		   		<?php echo form_close(); ?>        

		 </div> <!-- ./container -->



			
<?php include 'partials/footer.php'?>
