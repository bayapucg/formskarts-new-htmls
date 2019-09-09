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
.files input {
    outline: 2px dashed #92b0b3;
    outline-offset: -10px;
    -webkit-transition: outline-offset .15s ease-in-out, background-color .15s linear;
    transition: outline-offset .15s ease-in-out, background-color .15s linear;
    padding: 120px 0px 85px 35%;
    text-align: center !important;
    margin: 0;
    width: 100% !important;
}
.files input:focus{     outline: 2px dashed #92b0b3;  outline-offset: -10px;
    -webkit-transition: outline-offset .15s ease-in-out, background-color .15s linear;
    transition: outline-offset .15s ease-in-out, background-color .15s linear; border:1px solid #92b0b3;
 }
.files{ position:relative}
.files:after {  pointer-events: none;
    position: absolute;
    top: 60px;
    left: 0;
    width: 50px;
    right: 0;
    height: 56px;
    content: "";
    background-image: url(https://image.flaticon.com/icons/png/128/109/109612.png);
    display: block;
    margin: 0 auto;
    background-size: 100%;
    background-repeat: no-repeat;
}
.color input{ background-color:#f1f1f1;}
.files:before {
    position: absolute;
    bottom: -14px;
    left: 0;  pointer-events: none;
    width: 100%;
    right: 0;
    height: 57px;
    content: " or drag it here. ";
    display: block;
    margin: 0 auto;
    color: #2ea591;
    font-weight: 600;
    text-transform: capitalize;
    text-align: center;
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
						<legend class="scheduler-border">Budget</legend>
						<div class="row ">
						<div class="col-md-12 pt-3">
							<legend class="scheduler-border">What is your annual study abroad budget in USD? (Tuition fees + Living Expenses)
							</legend>
							</div>
							 
						</div>	
						<div class="row  custom-radio">
							
							<div class=" col-md-3 ">
							   <label>
								   <input type="radio" name="test" checked="checked" />
								   <span>Up to $10,000</span>
								</label>
							</div>
							<div class=" col-md-3 ">
							   <label>
								   <input type="radio" name="test"  />
								   <span>Up to $15,000</span>
								</label>
							</div>
							<div class=" col-md-3 ">
							   <label>
								   <input type="radio" name="test" checked="" />
								   <span>Up to $20,000</span>
								</label>
							</div>
							<div class=" col-md-3 ">
							   <label>
								   <input type="radio" name="test" checked="" />
								   <span>Up to $25,000</span>
								</label>
							</div>
							<div class=" col-md-3 ">
							   <label>
								   <input type="radio" name="test" checked="" />
								   <span>Up to $30,000</span>
								</label>
							</div>
							<div class=" col-md-3 ">
							   <label>
								   <input type="radio" name="test" checked="" />
								   <span>Up to $40,000</span>
								</label>
							</div>
							<div class=" col-md-3 ">
							   <label>
								   <input type="radio" name="test" checked="" />
								   <span>Up to $50,000</span>
								</label>
							</div>
							<div class=" col-md-3 ">
							   <label>
								   <input type="radio" name="test" checked="" />
								   <span>Up to $80,000</span>
								</label>
							</div>
							<div class=" col-md-3 ">
							   <label>
								   <input type="radio" name="test" checked="" />
								   <span>I don't know</span>
								</label>
							</div>
							
							
						</div>
							 
							 
							  <div class="row  custom-radio">
							<div class="col-md-12 pt-3">
							<legend class="scheduler-border">Means of finance</legend>
							
							</div>
							<div class=" col-md-3 ">
							   <label>
								   <input type="radio" name="test" checked="checked" />
								   <span>My family is paying</span>
								</label>
							</div>
							<div class=" col-md-3 ">
							   <label>
								   <input type="radio" name="test"  />
								   <span>I am paying for myself</span>
								</label>
							</div>
							<div class=" col-md-3 ">
							   <label>
								   <input type="radio" name="test" checked="" />
								   <span>I have a bank loan</span>
								</label>
							</div>
							<div class=" col-md-4 ">
							   <label>
								   <input type="radio" name="test" checked="" />
								   <span>I have a student loan</span>
								</label>
							</div>
							<div class=" col-md-4 ">
							   <label>
								   <input type="radio" name="test" checked="" />
								   <span>I have a government loan</span>
								</label>
							</div>
							<div class=" col-md-4 ">
							   <label>
								   <input type="radio" name="test" checked="" />
								   <span>I have a scholarship</span>
								</label>
							</div>
							<div class=" col-md-4 ">
							   <label>
								   <input type="radio" name="test" checked="" />
								   <span>I will apply for a scholarship</span>
								</label>
							</div>
							<div class=" col-md-4 ">
							   <label>
								   <input type="radio" name="test" checked="" />
								   <span>I don't know</span>
								</label>
							</div>
								<div class="col-md-12 mt-4">
								<div class="form-group files">
									<label>Upload proof of financing </label>
									<input type="file" class="form-control" multiple="">
								</div>
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