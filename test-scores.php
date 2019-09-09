<style>


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
						<legend class="scheduler-border">Test Scores</legend>
						<div class="row ">
						
							 
						</div>	
						<div class="row ">
						<div class="radio col-md-12">
						<div>
							<label> Have you taken an English proficiency test?</label>
						</div>
						  <label><input type="radio" name="optradio" checked> Yes</label>
						</div>
						<div class="radio col-md-12">
						  <label><input type="radio" name="optradio">  No</label>
						</div>
						
						  <div class="form-group col-md-6 ">
								<label >Select test type</label>
								<select  class="form-control" >
									<option value="">Please select</option>
									<option value="ielts">IELTS</option>
									<option value="toefl">TOEFL</option>
									<option value="pte">PTE</option>
								</select>
							  </div>
						<div class="form-group col-md-6 ">
						<label >Date of English test</label>
						<input type="date" class="form-control">
						</div>
						<div class="radio col-md-12 mt-4">
						<div>
							<label> Have you taken an English proficiency test?</label>
						</div>
						  <label><input type="radio" name="optradio" checked> Yes</label>
						</div>
						<div class="radio col-md-12">
						  <label><input type="radio" name="optradio">  No</label>
						</div>
						 <div class="form-group col-md-6 ">
								<label >Select test type</label>
								<select class="form-control" >
									<option value="">Please select</option>
									<option value="gre">GRE</option>
									<option value="gmat">GMAT</option>
									<option value="sat">SAT</option>
								</select>
							  </div>
						<div class="form-group col-md-6 ">
						<label >Date of Admissions test</label>
						<input type="date" class="form-control">
						</div>	
							
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