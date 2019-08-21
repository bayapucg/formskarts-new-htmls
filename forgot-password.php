<?php include("header.php"); ?>
  <style>  


html,body{


height: 100%;
font-family: 'Numans', sans-serif;
}

.container{
height: 100%;
align-content: center;
}
  .card{
height: auto;
margin-top: auto;
margin-bottom: auto;
width: 400px;
background-color:#fff;
-webkit-box-shadow: -4px 2px 15px -7px rgba(0,0,0,0.75);
-moz-box-shadow: -4px 2px 15px -7px rgba(0,0,0,0.75);
box-shadow: -4px 2px 15px -7px rgba(0,0,0,0.75);
}

.social_icon span{
font-size: 45px;
margin-left: 10px;
color: #3094ff;
}

.social_icon span:hover{
color: #000;
cursor: pointer;
}

.card-header h3{
color: #000;
}

.social_icon{
position: absolute;
    right: 20px;
    top: -4px;
}

.input-group-prepend span{
width: 50px;
background-color: #3094ff;
color: #fff;
border:0 !important;
}

input:focus{
outline: 0 0 0 0  !important;
box-shadow: 0 0 0 0 !important;

}

.remember{
color: #111;
}

.remember input
{
width: 20px;
height: 20px;
margin-left: 15px;
margin-right: 5px;
}

.login_btn{
color: #fff;
background-color: #3094ff;
width: 100px;
}

.login_btn:hover{
color: #fff;
background-color: #000;
}

.links{
color: #222;
}

.links a{
margin-left: 4px;
}
.form-login .form-group{
	margin:15px 0px
} 
.h-100{
	margin-top:100px;
}
  </style>  
<div class="container">
	<div class="d-flex justify-content-center mt-4">
		<div class="card h-100">
			<div class="card-header">
				<h3>Forgot Password</h3>
			
			</div>
			<div class="card-body form-login">
				<form>

					<div class="input-group form-group">
						<input type="email" class="form-control" placeholder="Enter your email">
					</div>
					
					<div class="form-group">
						<input type="submit" value="Submit" class="btn float-right login_btn">
					</div>
				</form>
			</div>
				
		</div>
	</div>
</div>
   

   <?php include("footer.php"); ?>
   