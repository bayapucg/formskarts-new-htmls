<style>
:checked + span {
   
	  background:#f70000;
    cursor:pointer;
   border: 3px solid #f70000 !important;
    padding: 10px 5px;
	color:#fff;
}

input[type=checkbox], input[type=radio] {
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    padding: 0;
    visibility: hidden;
}
.custom-radio span{
	 padding: 10px 5px;
	 border: 3px dashed #ddd;
	  cursor:pointer;
	  width:200px;
	  text-align:center;
}
</style>
<head>
	<link rel="stylesheet" href="css/sidebar.css">
	
	<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
</head>
<?php include( "header.php"); ?>
<section id="courses-part" class="py-4 gray-bg">
	<div class="container">
		<div class="row ">
			<div class="col-md-3 ">
				<div class="sidebar left ">
					<ul class="list-sidebar bg-defoult">
						<li>
							<a href="#" data-toggle="collapse" data-target="#dashboard" class="collapsed active"> <i class="fa fa-th-large"></i>  <span class="nav-label"> Worklist </span>  <span class="fa fa-chevron-left pull-right"></span> 
							</a>
							<ul class="sub-menu collapse show" id="dashboard">
								<li class="active"><a href="dashboard.php">Student Info</a>
								</li>
								<li><a href="academic-interests.php">Academic Interests</a>
								</li>
								<li><a href="academic-history.php">Academic History</a>
								</li>
								<li><a href="travel-history.php">Travel History</a>
								</li>
								<li><a href="budget.php">Budget</a>
								</li>
								<li><a href="test-scores.php">Test Scores</a>
								</li>
								<li><a href="cvs-essays-references.php">CV's, Essays & References</a>
								</li>
								<li><a href="advocate-info.php">Advocate Info</a>
								</li>
							</ul>
						</li>
						<li> <a href=""><i class="fa fa-pie-chart"></i> <span class="nav-label">Metrics</span> </a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-md-9 card  py-4">
			<form>
					<fieldset class="scheduler-border">
						<legend class="scheduler-border">Academic Interests</legend>
						<div class="row ">
							  <div class="form-group col-md-6 ">
								<label >Desired level of study</label>
								<select name="levelcode" class="form-control" >
									<option value="">Please select</option>
									<option value="4">Diploma</option>
									<option value="2">Pathway</option>
									<option value="3">Bachelor's Degree</option>
									<option value="1">Master's Degree</option>
								</select>
							  </div>
						</div>	
						<div class="row  custom-radio">
							<div class="col-md-12 pt-3">
							<legend class="scheduler-border">Discipline</legend>
							
							</div>
							<div class=" col-md-3 ">
							   <label>
								   <input type="radio" name="test" checked="checked" />
								   <span>Architecture</span>
								</label>
							</div>
							<div class=" col-md-3 ">
							   <label>
								   <input type="radio" name="test"  />
								   <span>Business</span>
								</label>
							</div>
							<div class=" col-md-3 ">
							   <label>
								   <input type="radio" name="test" checked="" />
								   <span>Computer Science</span>
								</label>
							</div>
							<div class=" col-md-3 ">
							   <label>
								   <input type="radio" name="test" checked="" />
								   <span>Education</span>
								</label>
							</div>
							<div class=" col-md-3 ">
							   <label>
								   <input type="radio" name="test" checked="" />
								   <span>Engineering</span>
								</label>
							</div>
							<div class=" col-md-3 ">
							   <label>
								   <input type="radio" name="test" checked="" />
								   <span>Environmental Studi</span>
								</label>
							</div>
							<div class=" col-md-3 ">
							   <label>
								   <input type="radio" name="test" checked="" />
								   <span>Fine Arts</span>
								</label>
							</div>
							<div class=" col-md-3 ">
							   <label>
								   <input type="radio" name="test" checked="" />
								   <span>Law</span>
								</label>
							</div>
							<div class=" col-md-3 ">
							   <label>
								   <input type="radio" name="test" checked="" />
								   <span>Mathematics</span>
								</label>
							</div>
							<div class=" col-md-3 ">
							   <label>
								   <input type="radio" name="test" checked="" />
								   <span>Media Studies</span>
								</label>
							</div>
							<div class=" col-md-3 ">
							   <label>
								   <input type="radio" name="test" checked="" />
								   <span>Medicine</span>
								</label>
							</div>	
							<div class=" col-md-3 ">
							   <label>
								   <input type="radio" name="test" checked="" />
								   <span>Science</span>
								</label>
							</div>
							<div class=" col-md-3 ">
							   <label>
								   <input type="radio" name="test" checked="" />
								   <span>Social Sciences</span>
								</label>
							</div>
							<div class=" col-md-3 ">
							   <label>
								   <input type="radio" name="test" checked="" />
								   <span>Sports</span>
								</label>
							</div>	
							<div class=" col-md-3 ">
							   <label>
								   <input type="radio" name="test" checked="" />
								   <span>I don't know</span>
								</label>
							</div>
						</div>
							  <legend class="scheduler-border mt-4">Program</legend>
							  <div class="col-md-12">
								<select class="selectpicker form-control" data-show-subtext="true" data-live-search="true">
								<option data-subtext="Rep California">Tom Foolery</option>
								<option data-subtext="Sen California">Bill Gordon</option>
								<option data-subtext="Sen Massacusetts">Elizabeth Warren</option>
								<option data-subtext="Rep Alabama">Mario Flores</option>
								<option data-subtext="Rep Alaska">Don Young</option>
								<option data-subtext="Rep California" disabled="disabled">Marvin Martinez</option>
							  </select>
							  </div>
							  <div class="row  custom-radio">
							<div class="col-md-12 pt-3">
							<legend class="scheduler-border">Destination</legend>
							
							</div>
							<div class=" col-md-3 ">
							   <label>
								   <input type="radio" name="test" checked="checked" />
								   <span>Australia</span>
								</label>
							</div>
							<div class=" col-md-3 ">
							   <label>
								   <input type="radio" name="test"  />
								   <span>Canada</span>
								</label>
							</div>
							<div class=" col-md-3 ">
							   <label>
								   <input type="radio" name="test" checked="" />
								   <span>Ireland</span>
								</label>
							</div>
							<div class=" col-md-3 ">
							   <label>
								   <input type="radio" name="test" checked="" />
								   <span>New Zealand</span>
								</label>
							</div>
							<div class=" col-md-3 ">
							   <label>
								   <input type="radio" name="test" checked="" />
								   <span>United Arab Emirates</span>
								</label>
							</div>
							<div class=" col-md-3 ">
							   <label>
								   <input type="radio" name="test" checked="" />
								   <span>United Kingdom</span>
								</label>
							</div>
							<div class=" col-md-3 ">
							   <label>
								   <input type="radio" name="test" checked="" />
								   <span>United States</span>
								</label>
							</div>
							<div class=" col-md-3 ">
							   <label>
								   <input type="radio" name="test" checked="" />
								   <span>Somewhere else</span>
								</label>
							</div>
							
						</div>
						 <legend class="scheduler-border mt-4">Start term</legend>
							  <div class="col-md-12">
								<select  class="form-control" >
									<option value="">Please select</option>
									<option value="September 2019">September 2019</option>
									<option value="January 2020">January 2020</option>
									<option value="April 2020">April 2020</option>
									<option value="September 2020">September 2020</option>
									<option value="January 2021">January 2021</option>
									<option value="April 2021">April 2021</option>
									<option value="September 2021">September 2021</option>
								</select>
							  </div>
						<div class="form-group col-md-12 mt-3">
							<button class="btn btn-primary ">Save & Continue</button>
						</div> 
						</div>
							
						</fieldset>
						 
						</form>
			
			</div>
		</div>
	</div>
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<script>
	$(document).ready(function(){
   $('button').click(function(){
       $('.sidebar').toggleClass('fliph');
   });
  
  
   
});

</script>
<?php include( "footer.php"); ?>