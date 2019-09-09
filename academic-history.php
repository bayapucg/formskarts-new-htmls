<style>
	:checked+span{background:#f70000;cursor:pointer;border:3px solid #f70000 !important;padding:10px 5px;color:#fff}input[type=checkbox],input[type=radio]{-webkit-box-sizing:border-box;box-sizing:border-box;padding:0;visibility:hidden}.custom-radio span{padding:10px 5px;border:3px dashed #ddd;cursor:pointer;width:200px;text-align:center}.files input{outline:2px dashed #92b0b3;outline-offset:-10px;-webkit-transition:outline-offset .15s ease-in-out, background-color .15s linear;transition:outline-offset .15s ease-in-out, background-color .15s linear;padding:120px 0px 85px 35%;text-align:center !important;margin:0;width:100% !important}.files input:focus{outline:2px dashed #92b0b3;outline-offset:-10px;-webkit-transition:outline-offset .15s ease-in-out, background-color .15s linear;transition:outline-offset .15s ease-in-out, background-color .15s linear;border:1px solid #92b0b3}.files{position:relative}.files:after{pointer-events:none;position:absolute;top:60px;left:0;width:50px;right:0;height:56px;content:"";background-image:url(https://image.flaticon.com/icons/png/128/109/109612.png);display:block;margin:0 auto;background-size:100%;background-repeat:no-repeat}.color input{background-color:#f1f1f1}.files:before{position:absolute;bottom:-14px;left:0;pointer-events:none;width:100%;right:0;height:57px;content:" or drag it here. ";display:block;margin:0 auto;color:#2ea591;font-weight:600;text-transform:capitalize;text-align:center}
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
						<legend class="scheduler-border">Academic History</legend>
						<div class="container">
							<div class="row clearfix">
								<div class="col-md-12 column">
									<table class="table table-bordered table-hover" id="tab_logic">
										
										<tbody>
											<tr id='addr0'>
												<td>
													<div class="row ">
														<div class="form-group col-md-6 ">
															<label>Level of education</label>
															<select class="form-control">
																<option value="">Please select</option>
																<option value="High School">High School</option>
																<option value="Diploma">Diploma</option>
																<option value="Pathway">Pathway</option>
																<option value="Bachelor's Degree">Bachelor's Degree</option>
																<option value="Master's Degree">Master's Degree</option>
															</select>
														</div>
													</div>
													<div class="row mt-4">
														<div class="form-group col-md-12 ">
															<label>Name of academic institution</label>
															<input type="text" class="form-control">
														</div>
													</div>
													<div class="row mt-4">
														<div class="form-group col-md-4 ">
															<label>Name of academic institution</label>
															<select class="form-control">
																<option value="">Please select</option>
																<option value="January">January</option>
																<option value="February">February</option>
																<option value="March">March</option>
																<option value="April">April</option>
																<option value="May">May</option>
																<option value="June">June</option>
																<option value="July">July</option>
																<option value="August">August</option>
																<option value="September">September</option>
																<option value="October">October</option>
																<option value="November">November</option>
																<option value="December">December</option>
															</select>
														</div>
														<div class="form-group col-md-2 ">
															<label>&nbsp;</label>
															<select class="form-control">
																<option value="">Select</option>
																<option value="1960">1960</option>
																<option value="1961">1961</option>
																<option value="1962">1962</option>
																<option value="1963">1963</option>
																<option value="1964">1964</option>
																<option value="1965">1965</option>
																<option value="1966">1966</option>
																<option value="1967">1967</option>
																<option value="1968">1968</option>
																<option value="1969">1969</option>
																<option value="1970">1970</option>
																<option value="1971">1971</option>
																<option value="1972">1972</option>
																<option value="1973">1973</option>
																<option value="1974">1974</option>
																<option value="1975">1975</option>
																<option value="1976">1976</option>
																<option value="1977">1977</option>
																<option value="1978">1978</option>
																<option value="1979">1979</option>
																<option value="1980">1980</option>
																<option value="1981">1981</option>
																<option value="1982">1982</option>
																<option value="1983">1983</option>
																<option value="1984">1984</option>
																<option value="1985">1985</option>
																<option value="1986">1986</option>
																<option value="1987">1987</option>
																<option value="1988">1988</option>
																<option value="1989">1989</option>
																<option value="1990">1990</option>
																<option value="1991">1991</option>
																<option value="1992">1992</option>
																<option value="1993">1993</option>
																<option value="1994">1994</option>
																<option value="1995">1995</option>
																<option value="1996">1996</option>
																<option value="1997">1997</option>
																<option value="1998">1998</option>
																<option value="1999">1999</option>
																<option value="2000">2000</option>
																<option value="2001">2001</option>
																<option value="2002">2002</option>
																<option value="2003">2003</option>
																<option value="2004">2004</option>
																<option value="2005">2005</option>
																<option value="2006">2006</option>
																<option value="2007">2007</option>
																<option value="2008">2008</option>
																<option value="2009">2009</option>
																<option value="2010">2010</option>
																<option value="2011">2011</option>
																<option value="2012">2012</option>
																<option value="2013">2013</option>
																<option value="2014">2014</option>
																<option value="2015">2015</option>
																<option value="2016">2016</option>
																</option>
																<option value="2019">2019</option>
															</select>
														</div>
														<div class="form-group col-md-4 ">
															<label>End date (or expected)*</label>
															<select class="form-control">
																<option value="">Please select</option>
																<option value="January">January</option>
																<option value="February">February</option>
																<option value="March">March</option>
																<option value="April">April</option>
																<option value="May">May</option>
																<option value="June">June</option>
																<option value="July">July</option>
																<option value="August">August</option>
																<option value="September">September</option>
																<option value="October">October</option>
																<option value="November">November</option>
																<option value="December">December</option>
															</select>
														</div>
														<div class="form-group col-md-2 ">
															<label>&nbsp;</label>
															<select class="form-control">
																<option value="">Select</option>
																<option value="1960">1960</option>
																<option value="1961">1961</option>
																<option value="1962">1962</option>
																<option value="1963">1963</option>
																<option value="1964">1964</option>
																<option value="1965">1965</option>
																<option value="1966">1966</option>
																<option value="1967">1967</option>
																<option value="1968">1968</option>
																<option value="1969">1969</option>
																<option value="1970">1970</option>
																<option value="1971">1971</option>
																<option value="1972">1972</option>
																<option value="1973">1973</option>
																<option value="1974">1974</option>
																<option value="1975">1975</option>
																<option value="1976">1976</option>
																<option value="1977">1977</option>
																<option value="1978">1978</option>
																<option value="1979">1979</option>
																<option value="1980">1980</option>
																<option value="1981">1981</option>
																<option value="1982">1982</option>
																<option value="1983">1983</option>
																<option value="1984">1984</option>
																<option value="1985">1985</option>
																<option value="1986">1986</option>
																<option value="1987">1987</option>
																<option value="1988">1988</option>
																<option value="1989">1989</option>
																<option value="1990">1990</option>
																<option value="1991">1991</option>
																<option value="1992">1992</option>
																<option value="1993">1993</option>
																<option value="1994">1994</option>
																<option value="1995">1995</option>
																<option value="1996">1996</option>
																<option value="1997">1997</option>
																<option value="1998">1998</option>
																<option value="1999">1999</option>
																<option value="2000">2000</option>
																<option value="2001">2001</option>
																<option value="2002">2002</option>
																<option value="2003">2003</option>
																<option value="2004">2004</option>
																<option value="2005">2005</option>
																<option value="2006">2006</option>
																<option value="2007">2007</option>
																<option value="2008">2008</option>
																<option value="2009">2009</option>
																<option value="2010">2010</option>
																<option value="2011">2011</option>
																<option value="2012">2012</option>
																<option value="2013">2013</option>
																<option value="2014">2014</option>
																<option value="2015">2015</option>
																<option value="2016">2016</option>
																</option>
																<option value="2019">2019</option>
															</select>
														</div>
														<div class="col-md-6">
															<label>Grade (or expected)</label>
															<input type="text" class="form-control">
														</div>
														<div class="col-md-6">
															<label>Out of max</label>
															<input type="text" class="form-control">
														</div>
														<div class="col-md-6">
															<label>Out of max</label>
															<select class="form-control">
																<option value="">Please select the file type</option>
																<option value="Original Transcript">Original Transcript</option>
																<option value="Translated Transcript">Translated Transcript</option>
																<option value="Degree Certificate">Degree certificate</option>
															</select>
														</div>
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
	var i=1;$("#add_row").click(function(){$('#addr'+i).html("<td><div class='row '><div class='form-group col-md-6 '> <label >Level of education</label> <select class='form-control' ><option value=''>Please select</option><option value='High School'>High School</option><option value='Diploma'>Diploma</option><option value='Pathway'>Pathway</option><option value='Bachelor's Degree'>Bachelor's Degree</option><option value='Master's Degree'>Master's Degree</option> </select></div></div><div class='row mt-4'><div class='form-group col-md-12 '> <label >Name of academic institution</label> <input type='text' class='form-control'></div></div><div class='row mt-4'><div class='form-group col-md-4 '> <label >Name of academic institution</label> <select class='form-control' ><option value=''>Please select</option><option value='January'>January</option><option value='February'>February</option><option value='March'>March</option><option value='April'>April</option><option value='May'>May</option><option value='June'>June</option><option value='July'>July</option><option value='August'>August</option><option value='September'>September</option><option value='October'>October</option><option value='November'>November</option><option value='December'>December</option> </select></div><div class='form-group col-md-2 '> <label >&nbsp;</label> <select class='form-control' ><option value=''>Select</option><option value='1960'>1960</option><option value='1961'>1961</option><option value='1962'>1962</option><option value='1963'>1963</option><option value='1964'>1964</option><option value='1965'>1965</option><option value='1966'>1966</option><option value='1967'>1967</option><option value='1968'>1968</option><option value='1969'>1969</option><option value='1970'>1970</option><option value='1971'>1971</option><option value='1972'>1972</option><option value='1973'>1973</option><option value='1974'>1974</option><option value='1975'>1975</option><option value='1976'>1976</option><option value='1977'>1977</option><option value='1978'>1978</option><option value='1979'>1979</option><option value='1980'>1980</option><option value='1981'>1981</option><option value='1982'>1982</option><option value='1983'>1983</option><option value='1984'>1984</option><option value='1985'>1985</option><option value='1986'>1986</option><option value='1987'>1987</option><option value='1988'>1988</option><option value='1989'>1989</option><option value='1990'>1990</option><option value='1991'>1991</option><option value='1992'>1992</option><option value='1993'>1993</option><option value='1994'>1994</option><option value='1995'>1995</option><option value='1996'>1996</option><option value='1997'>1997</option><option value='1998'>1998</option><option value='1999'>1999</option><option value='2000'>2000</option><option value='2001'>2001</option><option value='2002'>2002</option><option value='2003'>2003</option><option value='2004'>2004</option><option value='2005'>2005</option><option value='2006'>2006</option><option value='2007'>2007</option><option value='2008'>2008</option><option value='2009'>2009</option><option value='2010'>2010</option><option value='2011'>2011</option><option value='2012'>2012</option><option value='2013'>2013</option><option value='2014'>2014</option><option value='2015'>2015</option><option value='2016'>2016</option></option><option value='2019'>2019</option> </select></div><div class='form-group col-md-4 '> <label >End date (or expected)*</label> <select class='form-control' ><option value=''>Please select</option><option value='January'>January</option><option value='February'>February</option><option value='March'>March</option><option value='April'>April</option><option value='May'>May</option><option value='June'>June</option><option value='July'>July</option><option value='August'>August</option><option value='September'>September</option><option value='October'>October</option><option value='November'>November</option><option value='December'>December</option> </select></div><div class='form-group col-md-2 '> <label >&nbsp;</label> <select class='form-control' ><option value=''>Select</option><option value='1960'>1960</option><option value='1961'>1961</option><option value='1962'>1962</option><option value='1963'>1963</option><option value='1964'>1964</option><option value='1965'>1965</option><option value='1966'>1966</option><option value='1967'>1967</option><option value='1968'>1968</option><option value='1969'>1969</option><option value='1970'>1970</option><option value='1971'>1971</option><option value='1972'>1972</option><option value='1973'>1973</option><option value='1974'>1974</option><option value='1975'>1975</option><option value='1976'>1976</option><option value='1977'>1977</option><option value='1978'>1978</option><option value='1979'>1979</option><option value='1980'>1980</option><option value='1981'>1981</option><option value='1982'>1982</option><option value='1983'>1983</option><option value='1984'>1984</option><option value='1985'>1985</option><option value='1986'>1986</option><option value='1987'>1987</option><option value='1988'>1988</option><option value='1989'>1989</option><option value='1990'>1990</option><option value='1991'>1991</option><option value='1992'>1992</option><option value='1993'>1993</option><option value='1994'>1994</option><option value='1995'>1995</option><option value='1996'>1996</option><option value='1997'>1997</option><option value='1998'>1998</option><option value='1999'>1999</option><option value='2000'>2000</option><option value='2001'>2001</option><option value='2002'>2002</option><option value='2003'>2003</option><option value='2004'>2004</option><option value='2005'>2005</option><option value='2006'>2006</option><option value='2007'>2007</option><option value='2008'>2008</option><option value='2009'>2009</option><option value='2010'>2010</option><option value='2011'>2011</option><option value='2012'>2012</option><option value='2013'>2013</option><option value='2014'>2014</option><option value='2015'>2015</option><option value='2016'>2016</option></option><option value='2019'>2019</option> </select></div><div class='col-md-6'> <label>Grade (or expected)</label> <input type='text' class='form-control'></div><div class='col-md-6'> <label>Out of max</label> <input type='text' class='form-control'></div><div class='col-md-6'> <label>Out of max</label> <select class='form-control'><option value=''>Please select the file type</option><option value='Original Transcript'> Original Transcript</option><option value='Translated Transcript'>Translated Transcript</option><option value='Degree Certificate'>Degree certificate</option> </select></div><div class='col-md-12 mt-4'><div class='form-group files'> <label>Upload Your File </label> <input type='file' class='form-control' multiple=''></div></div></div></td>");$('#tab_logic').append('<tr id="addr'+(i+1)+'"></tr>');i++;});$("#delete_row").click(function(){if(i>1){$("#addr"+(i-1)).html('');i--;}});$(document).ready(function(){$('button').click(function(){$('.sidebar').toggleClass('fliph');});});
</script>