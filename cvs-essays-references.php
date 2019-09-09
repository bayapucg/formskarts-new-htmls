<style>
	.files input{outline:2px dashed #92b0b3;outline-offset:-10px;-webkit-transition:outline-offset .15s ease-in-out, background-color .15s linear;transition:outline-offset .15s ease-in-out, background-color .15s linear;padding:120px 0px 85px 35%;text-align:center !important;margin:0;width:100% !important}.files input:focus{outline:2px dashed #92b0b3;outline-offset:-10px;-webkit-transition:outline-offset .15s ease-in-out, background-color .15s linear;transition:outline-offset .15s ease-in-out, background-color .15s linear;border:1px solid #92b0b3}.files{position:relative}.files:after{pointer-events:none;position:absolute;top:60px;left:0;width:50px;right:0;height:56px;content:"";background-image:url(https://image.flaticon.com/icons/png/128/109/109612.png);display:block;margin:0 auto;background-size:100%;background-repeat:no-repeat}.color input{background-color:#f1f1f1}.files:before{position:absolute;bottom:-14px;left:0;pointer-events:none;width:100%;right:0;height:57px;content:" or drag it here. ";display:block;margin:0 auto;color:#2ea591;font-weight:600;text-transform:capitalize;text-align:center}
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
			<div class="col-md-9 card py-4">
				<form>
					<fieldset class="scheduler-border">
						<legend class="scheduler-border">CVs, Essays & References</legend>
						<div class="container">
							<div class="row clearfix">
								<div class="col-md-12 column">
									<table class="table table-bordered table-hover" id="tab_logic">
										
										<tbody>
											<tr id='addr0'>
												<td>
													<div class="row ">
											<div class="radio col-md-12 mt-4">
											<div>
												<label> Add your statement of purpose</label>
											</div>
											  <label><input type="radio" name="optradio" checked> I want to type it here</label>
											</div>
											<div class="radio col-md-12">
											  <label><input type="radio" name="optradio">  I wish to upload</label>
											</div>
														<div class="form-group col-md-12 ">
															<textarea placeholder="Type your Statement of Purpose..." class="form-control" rows="5"></textarea>
														</div>
															<div class="col-md-12 mt-4">
															<div class="form-group files">
																<label>Upload your CV</label>
																<input type="file" class="form-control" multiple="">
															</div>
														</div>
													
														
													</div>
													<div class="row mt-4">
														<div class="form-group col-md-6 ">
															<label>Reference first name</label>
															<input type="text" class="form-control">
														</div>
														<div class="form-group col-md-6 ">
															<label>Reference last name</label>
															<input type="text" class="form-control">
														</div>
														<div class="form-group col-md-6 ">
															<label>Reference email</label>
															<input type="text" class="form-control">
														</div>
														<div class="form-group col-md-6 ">
															<label>Reference position</label>
															<select  class="form-control" >
															<option value="">Please select</option>
															<option value="Teacher">Teacher</option>
															<option value="Professor">Professor</option>
															<option value="Head of Department">Head of Department</option>
															<option value="Dean">Dean</option>
															<option value="Program Coordinator">Program Coordinator</option>
															<option value="School Principal">School Principal</option>
															<option value="Line Manager">Line Manager</option>
															<option value="Senior Manager">Senior Manager</option>
															<option value="Colleague">Colleague</option>
														</select>
														</div>
														<div class="form-group col-md-6 ">
															<label>Reference organization</label>
															<input type="text" class="form-control">
														</div>
														<div class="form-group col-md-6 ">
															<label>Reference's phone number</label>
															<input type="text" class="form-control">
														</div>
													</div>
														<div class="row mt-4">
														<div class="col-md-12 mt-4">
															<div class="form-group files">
																<label>Upload Your File</label>
																<input type="file" class="form-control" multiple="">
															</div>
														</div>
														</div>
												</td>
											</tr>
											<tr id='addr1'></tr>
										</tbody>
									</table>
								</div>
							</div> <a id="add_row" class="btn btn-primary pull-left text-white">Add Row</a><a id='delete_row' class="pull-right btn btn-primary text-white">Delete Row</a>
						</div>
						<div class="clearfix">&nbsp;</div>
						<div class="form-group col-md-12 mt-3 text-center">
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
<?php include( "footer.php"); ?>
<script>
	var i=1;$("#add_row").click(function(){$('#addr'+i).html("<td><div class='row '><div class='radio col-md-12 mt-4'><div> <label> Add your statement of purpose</label></div> <label><input type='radio' name='optradio' checked> I want to type it here</label></div><div class='radio col-md-12'> <label><input type='radio' name='optradio'> I wish to upload</label></div><div class='form-group col-md-12 '><textarea placeholder='Type your Statement of Purpose...' class='form-control' rows='5'></textarea></div><div class='col-md-12 mt-4'><div class='form-group files'> <label>Upload your CV</label> <input type='file' class='form-control' multiple=''></div></div></div><div class='row mt-4'><div class='form-group col-md-6 '> <label>Reference first name</label> <input type='text' class='form-control'></div><div class='form-group col-md-6 '> <label>Reference last name</label> <input type='text' class='form-control'></div><div class='form-group col-md-6 '> <label>Reference email</label> <input type='text' class='form-control'></div><div class='form-group col-md-6 '> <label>Reference position</label> <select class='form-control' ><option value=''>Please select</option><option value='Teacher'>Teacher</option><option value='Professor'>Professor</option><option value='Head of Department'>Head of Department</option><option value='Dean'>Dean</option><option value='Program Coordinator'>Program Coordinator</option><option value='School Principal'>School Principal</option><option value='Line Manager'>Line Manager</option><option value='Senior Manager'>Senior Manager</option><option value='Colleague'>Colleague</option> </select></div><div class='form-group col-md-6 '> <label>Reference organization</label> <input type='text' class='form-control'></div><div class='form-group col-md-6 '> <label>Reference's phone number</label> <input type='text' class='form-control'></div></div><div class='row mt-4'><div class='col-md-12 mt-4'><div class='form-group files'> <label>Upload Your File</label> <input type='file' class='form-control' multiple=''></div></div></div></td>");$('#tab_logic').append('<tr id="addr'+(i+1)+'"></tr>');i++;});$("#delete_row").click(function(){if(i>1){$("#addr"+(i-1)).html('');i--;}});$(document).ready(function(){$('button').click(function(){$('.sidebar').toggleClass('fliph');});});
</script>