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
						<legend class="scheduler-border">Travel History</legend>
						
						<div class="row ">
							  <div class="form-group col-md-6 ">
								<label >Passport country</label>
								<select  class="form-control" >
									<option value="">Please select</option>
									<option value="AF">Afghanistan</option>
									<option value="AX">Aland Islands</option>
									<option value="AL">Albania</option>
									<option value="DZ">Algeria</option>
									<option value="AS">American Samoa</option>
									<option value="AD">Andorra</option>
									<option value="AO">Angola</option>
									<option value="AI">Anguilla</option>
									<option value="AQ">Antarctica</option>
									<option value="AG">Antigua and Barbuda</option>
									<option value="AR">Argentina</option>
									<option value="AM">Armenia</option>
									<option value="AW">Aruba</option>
									<option value="AU">Australia</option>
									<option value="AT">Austria</option>
									<option value="AZ">Azerbaijan</option>
									<option value="BS">Bahamas</option>
									<option value="BH">Bahrain</option>
									<option value="BD">Bangladesh</option>
									<option value="BB">Barbados</option>
									<option value="BY">Belarus</option>
									<option value="BE">Belgium</option>
									<option value="BZ">Belize</option>
									<option value="BJ">Benin</option>
									<option value="BM">Bermuda</option>
									<option value="BT">Bhutan</option>
									<option value="BO">Bolivia</option>
									<option value="BA">Bosnia and Herzegovina</option>
									<option value="BW">Botswana</option>
									<option value="BV">Bouvet Island</option>
									<option value="BR">Brazil</option>
									<option value="IO">British Indian Ocean Territory</option>
									<option value="BN">Brunei Darussalam</option>
									<option value="BG">Bulgaria</option>
									<option value="BF">Burkina Faso</option>
									<option value="BI">Burundi</option>
									<option value="KH">Cambodia</option>
									<option value="CM">Cameroon</option>
									<option value="CA">Canada</option>
									<option value="CV">Cape Verde</option>
									<option value="KY">Cayman Islands</option>
									<option value="CF">Central African Republic</option>
									<option value="TD">Chad</option>
									<option value="CL">Chile</option>
									<option value="CN">China</option>
									<option value="CX">Christmas Island</option>
									<option value="CC">Cocos (Keeling) Islands</option>
									<option value="CO">Colombia</option>
									<option value="KM">Comoros</option>
									<option value="CG">Congo</option>
									<option value="CK">Cook Islands</option>
									<option value="CR">Costa Rica</option>
									<option value="CI">Cote d Ivoire</option>
									<option value="HR">Croatia</option>
									<option value="CU">Cuba</option>
									<option value="CW">Curacao</option>
									<option value="CY">Cyprus</option>
									<option value="CZ">Czech Republic</option>
									<option value="CD">Democratic Republic of Congo</option>
									<option value="DK">Denmark</option>
									<option value="DJ">Djibouti</option>
									<option value="DM">Dominica</option>
									<option value="DO">Dominican Republic</option>
									<option value="TL">East Timor</option>
									<option value="EC">Ecuador</option>
									<option value="EG">Egypt</option>
									<option value="SV">El Salvador</option>
									<option value="GQ">Equatorial Guinea</option>
									<option value="ER">Eritrea</option>
									<option value="EE">Estonia</option>
									<option value="ET">Ethiopia</option>
									<option value="FK">Falkland Islands</option>
									<option value="FO">Faroe Islands</option>
									<option value="FJ">Fiji</option>
									<option value="FI">Finland</option>
									<option value="FR">France</option>
									<option value="GF">French Guiana</option>
									<option value="PF">French Polynesia</option>
									<option value="GA">Gabon</option>
									<option value="GM">Gambia</option>
									<option value="GE">Georgia</option>
									<option value="DE">Germany</option>
									<option value="GH">Ghana</option>
									<option value="GI">Gibraltar</option>
									<option value="GR">Greece</option>
									<option value="GL">Greenland</option>
									<option value="GD">Grenada</option>
									<option value="GP">Guadeloupe</option>
									<option value="GU">Guam</option>
									<option value="GT">Guatemala</option>
									<option value="GG">Guernsey</option>
									<option value="GN">Guinea</option>
									<option value="GW">Guinea-Bissau</option>
									<option value="GY">Guyana</option>
									<option value="HT">Haiti</option>
									<option value="HM">Heard Island/Mcdonald Islands (AU)</option>
									<option value="HN">Honduras</option>
									<option value="HK">Hong Kong</option>
									<option value="HU">Hungary</option>
									<option value="IS">Iceland</option>
									<option value="IN">India</option>
									<option value="ID">Indonesia</option>
									<option value="IR">Iran</option>
									<option value="IQ">Iraq</option>
									<option value="IE">Ireland</option>
									<option value="IM">Isle Of Man</option>
									<option value="IL">Israel</option>
									<option value="IT">Italy</option>
									<option value="JM">Jamaica</option>
									<option value="JP">Japan</option>
									<option value="JE">Jersey</option>
									<option value="JO">Jordan</option>
									<option value="KZ">Kazakhstan</option>
									<option value="KE">Kenya</option>
									<option value="KI">Kiribati</option>
									<option value="KP">Korea (North)</option>
									<option value="KR">Korea (South)</option>
									<option value="KW">Kuwait</option>
									<option value="KG">Kyrgyzstan</option>
									<option value="LA">Laos</option>
									<option value="LV">Latvia</option>
									<option value="LB">Lebanon</option>
									<option value="LS">Lesotho</option>
									<option value="LR">Liberia</option>
									<option value="LY">Libya</option>
									<option value="LI">Liechtenstein</option>
									<option value="LT">Lithuania</option>
									<option value="LU">Luxembourg</option>
									<option value="MO">Macau</option>
									<option value="MK">Macedonia</option>
									<option value="MG">Madagascar</option>
									<option value="MW">Malawi</option>
									<option value="MY">Malaysia</option>
									<option value="MV">Maldives</option>
									<option value="ML">Mali</option>
									<option value="MT">Malta</option>
									<option value="MH">Marshall Islands</option>
									<option value="MQ">Martinique</option>
									<option value="MR">Mauritania</option>
									<option value="MU">Mauritius</option>
									<option value="MX">Mexico</option>
									<option value="FM">Micronesia</option>
									<option value="MD">Moldova</option>
									<option value="MC">Monaco</option>
									<option value="MN">Mongolia</option>
									<option value="ME">Montenegro</option>
									<option value="MS">Montserrat</option>
									<option value="MA">Morocco</option>
									<option value="MZ">Mozambique</option>
									<option value="MM">Myanmar</option>
									<option value="NA">Namibia</option>
									<option value="NR">Nauru</option>
									<option value="NP">Nepal</option>
									<option value="NL">Netherlands</option>
									<option value="AN">Netherlands Antilles</option>
									<option value="NC">New Caledonia</option>
									<option value="NZ">New Zealand</option>
									<option value="NI">Nicaragua</option>
									<option value="NE">Niger</option>
									<option value="NG">Nigeria</option>
									<option value="NU">Niue</option>
									<option value="NF">Norfolk Island (AU)</option>
									<option value="MP">Northern Mariana Islands</option>
									<option value="NO">Norway</option>
									<option value="OM">Oman</option>
									<option value="PK">Pakistan</option>
									<option value="PW">Palau</option>
									<option value="PS">Palestine</option>
									<option value="PA">Panama</option>
									<option value="PG">Papua New Guinea</option>
									<option value="PY">Paraguay</option>
									<option value="PE">Peru</option>
									<option value="PH">Philippines</option>
									<option value="PN">Pitcairn</option>
									<option value="PL">Poland</option>
									<option value="PT">Portugal</option>
									<option value="PR">Puerto Rico</option>
									<option value="QA">Qatar</option>
									<option value="RE">Reunion</option>
									<option value="RO">Romania</option>
									<option value="RU">Russia</option>
									<option value="RW">Rwanda</option>
									<option value="KN">Saint Kitts and Nevis</option>
									<option value="LC">Saint Lucia</option>
									<option value="VC">Saint Vin. and the Grenadines</option>
									<option value="WS">Samoa</option>
									<option value="SM">San Marino</option>
									<option value="SA">Saudi Arabia</option>
									<option value="SN">Senegal</option>
									<option value="RS">Serbia</option>
									<option value="SC">Seychelles</option>
									<option value="SL">Sierra Leone</option>
									<option value="SG">Singapore</option>
									<option value="MF">Sint Marteen</option>
									<option value="SK">Slovakia</option>
									<option value="SI">Slovenia</option>
									<option value="SB">Solomon Islands</option>
									<option value="SO">Somalia</option>
									<option value="ZA">South Africa</option>
									<option value="ES">Spain</option>
									<option value="LK">Sri Lanka</option>
									<option value="SD">Sudan</option>
									<option value="SR">Suriname</option>
									<option value="SZ">Swaziland</option>
									<option value="SE">Sweden</option>
									<option value="CH">Switzerland</option>
									<option value="SY">Syria</option>
									<option value="TW">Taiwan</option>
									<option value="TJ">Tajikistan</option>
									<option value="TZ">Tanzania</option>
									<option value="TH">Thailand</option>
									<option value="TG">Togo</option>
									<option value="TK">Tokelau (NZ)</option>
									<option value="TO">Tonga</option>
									<option value="TT">Trinidad and Tobago</option>
									<option value="TN">Tunisia</option>
									<option value="TR">Turkey</option>
									<option value="TM">Turkmenistan</option>
									<option value="TC">Turks and Caicos Islands</option>
									<option value="TV">Tuvalu</option>
									<option value="UG">Uganda</option>
									<option value="UA">Ukraine</option>
									<option value="AE">United Arab Emirates</option>
									<option value="GB">United Kingdom</option>
									<option value="US">United States</option>
									<option value="UY">Uruguay</option>
									<option value="UM">US Minor Outlying Islands</option>
									<option value="UZ">Uzbekistan</option>
									<option value="VU">Vanuatu</option>
									<option value="VA">Vatican City</option>
									<option value="VE">Venezuela</option>
									<option value="VN">Vietnam</option>
									<option value="VI">Virgin Islands (USA)</option>
									<option value="VG">Virgin Islands(British)</option>
									<option value="YE">Yemen</option>
									<option value="ZM">Zambia</option>
									<option value="ZW">Zimbabwe</option>
								</select>
							  </div>
							   <div class="form-group col-md-6 ">
								<label >Passport number</label>
								<input type="text" class="form-control">
							  </div>
						</div>	
						
						<div class="row mt-4">
							  <div class="form-group col-md-4 ">
								<label >Passport expiry date</label>
									<select  class="form-control" >
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
								<label >&nbsp;</label>
									<select  class="form-control" >
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
							  </option><option value="2019">2019</option>
							  </select>
							  </div>
							  
							 	
							<div class="col-md-12 mt-4">
								<div class="form-group files">
									<label>Upload passport </label>
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