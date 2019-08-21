<?php include("header.php"); ?>
 <section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" style="background-image: url(images/page-banner-1.jpg);z-index:0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2 class="text-center">Applying for The University of Chicago</h2>
                       
                    </div>  <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== PAGE BANNER PART ENDS ======-->
    
    <!--====== COURSES SINGEl PART START ======-->
    
    <section id="courses-single" class=" pb-120 gray-bg" >
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="courses-single-left mt-30" style="-webkit-box-shadow: -4px 2px 15px -7px rgba(0,0,0,0.75);
    -moz-box-shadow: -4px 2px 15px -7px rgba(0,0,0,0.75); box-shadow: -4px 2px 15px -7px rgba(0,0,0,0.75);">
						<form>
						  <fieldset class="scheduler-border">
							<legend class="scheduler-border">Basic Details</legend>
							<div class="row">
							  <div class="form-group col-md-6 mt-3">
								<label >First Name</label>
								<input type="text" class="form-control" placeholder="Enter Your First Name" >
							  </div>
							   <div class="form-group col-md-6 mt-3">
								<label >Last Name</label>
								<input type="text" class="form-control" placeholder="Enter Your Last Name" >
							  </div> 
							  <div class="form-group col-md-6 mt-3">
								<label >Email Id</label>
								<input type="email" class="form-control" placeholder="Enter Your Email" >
							  </div>
							  <div class="form-group col-md-6 mt-3">
								<label > Alt E mail Id</label>
								<input type="email" class="form-control" placeholder="Enter Your Alt E mail Id" >
							  </div>
							  <div class="form-group col-md-6 mt-3">
								<label > Mobile </label>
								<input type="text" class="form-control" placeholder="Enter Your Mobile" >
							  </div>	
							  <div class="form-group col-md-6 mt-3">
								<label > Alt Mobile</label>
								<input type="text" class="form-control" placeholder="Enter Your Alt Mobile" >
							  </div>
							  <div class="form-group col-md-6 mt-3">
								<label >Gender</label>
									<select class="form-control">
										<option>Male</option>
										<option>Female</option>
										<option>Third Person</option>
									</select>
							  </div>
							   <div class="form-group col-md-6 mt-3">
								<label >DOB</label>
								<input type='text' class="form-control datepicker"  />
							  </div>
							
							</div>
						</fieldset>
						<fieldset class="scheduler-border">
							<legend class="scheduler-border">Address Details</legend>
							<div class="row">
							  <div class="form-group col-md-6 mt-3">
								<label >Address Line 1</label>
								<input type="text" class="form-control" placeholder="Enter Address Line 1" >
							  </div>
							   <div class="form-group col-md-6 mt-3">
							<label >Address Line 2</label>
								<input type="text" class="form-control " placeholder="Enter Address Line 2" >
							  </div> 
							  <div class="form-group col-md-6 mt-3">
								<label >District</label>
								<input type="text" class="form-control" placeholder="Enter District" >
							  </div>  
							  <div class="form-group col-md-6 mt-3">
								<label >State</label>
									<select class="form-control">
									<option> Select</option>
									<option> State 1</option>
									<option> State 2</option>
									<option> State 3</option>
									<option> State 4</option>
									<option> State 5</option>
								</select>
							  </div>
							  <div class="form-group col-md-6 mt-3">
								<label >Country</label>
									<select class="form-control">
									<option> Select</option>
									<option> country 1</option>
									<option> country 2</option>
									<option> country 3</option>
									<option> country 4</option>
									<option> country 5</option>
								</select>
							  </div>
							  <div class="form-group col-md-6 mt-3">
								<label >Zipcode</label>
								<input type="text" class="form-control" placeholder="Enter Zipcode" >
							  </div>
							</div>
						</fieldset>
							<fieldset class="scheduler-border">
							<legend class="scheduler-border">Qualification Details</legend>
							<div class="row">
							  <div class="form-group col-md-6 mt-3">
								<label >Highest Qualification</label>
								<input type="text" class="form-control" placeholder="Enter Qualification" >
							  </div>
							   <div class="form-group col-md-6 mt-3">
								<label >Year of Pass</label>
								<input type="text" class="form-control datepicker"  >
							  </div> 
							  <div class="form-group col-md-6 mt-3">
								<label >University Name</label>
								<input type="text" class="form-control" placeholder="Enter University" >
							  </div>
							</div>
						</fieldset>
						<fieldset class="scheduler-border">
							<legend class="scheduler-border">Select College / School</legend>
							<div class="row">
							  <div class="form-group col-md-6 mt-3">
								<label >Applying For</label>
								<select class="form-control">
									<option> Course 1</option>
									<option> Course 2</option>
									<option> Course 3</option>
									<option> Course 4</option>
									<option> Course 5</option>
								</select>
							  </div>
							   <div class="form-group col-md-6 mt-3">
								<label >Duration</label>
								<input type="text" class="form-control" value="2 years" disabled >
							  </div>  
							  <div class="form-group col-md-6 mt-3">
								<label >Amount</label>
								<input type="text" class="form-control" value="₹ 40000" disabled >
							  </div> 
							
							</div>
						</fieldset>
						<div class="col-md-12 mt-4 text-center">
								<a href="save-continue.php" class="btn btn-primary">Save & Continue</a>
						</div>
						</form>

                    </div> <!-- courses single left -->
                    
                </div>
               
            </div> <!-- row -->
           
        </div> <!-- container -->
    </section>
    

      
   <?php include("footer.php"); ?>
     <script type="text/javascript">
            $(function () {
             $('.datepicker').datepicker()
            });
        </script>
 