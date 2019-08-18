<!DOCTYPE html>  <!-- 1 PAGE -->
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width , initial-scale=1 shrink-to-fit=no">
	<title>Profile Web App</title>
	<link rel="stylesheet"  href="assets/css/bootstrap.min.css">
	<link rel="stylesheet"  href="assets/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet"  href="assets/css/style.css">
</head>
<body>
 <!-- ===responsive mobile navigation bootstrap class=== -->
 <?php include 'parts/nav.php'; ?>
 
 <div class="container">
 	<div class="row">
 		 <div class="col-md-8 content">
 			<h1>Its Always Free</h1> <br>
            <hr align="center" width="100%" >
 			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
 			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
 			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
 			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
 			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
 			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
 			
 		</div>  <!--coloumn--> 

 		<div class="col-md-4 content">
 			<div class="signup-cover">
 			<div class="card">
 				<div class="card-header">
 					<div class="row">
 						<div class="col-md-9">
 							<h3 class="form-heading">Signup</h3>
 							<p>Account creating is 100% free</p>
 							
 						</div> <!--col --->
 						<div class="col-md-3 text-right ">
 							<i class="fa fa-pencil-square-o fa-3x "></i>
 							
 						</div> <!--coloumn-->
 						
 					</div> <!--row-->

 					
 				</div> <!-- card header -->

 				<div class="card-body">
 					<form id="signup_submit">
 						<div class="form-group show-progress ">
 							
 						</div>

 						<div class="form-group">
 							<input type="text" name="name" id="name" class="form-control" placeholder="Enter Your Name">
 							<div class="name-error error" ></div>


 						</div> <!--form group-->

 						<div class="form-group">
 							<input type="emial" name="email" id="email" class="form-control" placeholder="Enter Your Emial">
 							<div class="email-error error" ></div>

 						</div> <!--form group-->

 						<div class="form-group">
 							<input type="password" name="password" id="password" class="form-control" placeholder="Choose Your Password">
 						<div class="password-error error" ></div>

 						</div> <!--form group-->

 						<div class="form-group">
 							<input type="password"  id="confirm" class="form-control" placeholder="Confirm your Password Your Password">

 						<div class="confirm-error error" ></div>

 						</div> <!--form group-->

 						<div class="form-group">
 							<button type="button" id="submit" class="btn btn-success btn-block form-btn">Create Account</button>

 						</div> <!--form group-->

 						<div class="form-group">
 							<a href="#" id="login">Already have an account </a>
 							
 						</div>
 						
 					</form> <!--form-->
 					
 				</div> <!--card body-->



 				
 			</div> <!-- card-->
 			</div><!--sign-up form -->
 			<div class="login-cover">

 				<div class="card">
 				<div class="card-header">
 					<div class="row">
 						<div class="col-md-9">
 							<h3 class="form-heading">Login</h3>
 							<p>Enter Emial and Password</p>
 							
 						</div> <!--col --->
 						<div class="col-md-3 text-right ">
 							<i class="fa fa-lock fa-3x "></i>
 							
 						</div> <!--coloumn-->
 						
 					</div> <!--row-->

 					
 				</div> <!-- card header -->

 				<div class="card-body">
 					<form id="login-submit-form" >
 						<div class="form-group">
 							<div class="login-error error ">
 								
 							</div>
 							
 						</div>
 						

 						<div class="form-group">
 							<input type="email" name="login_email" id="login-email" class="form-control" placeholder="Enter Your Emial">

 							<div class="login-email-error error" ></div>

 						</div> <!--form group-->

 						<div class="form-group">
 							<input type="password" name="login_password" id="login-password" class="form-control" placeholder="Choose Your Password">

 						<div class="login-password-error" ></div>

 						</div> <!--form group-->

 						<div class="form-group">
 							<a href="#"  id="signup">Create new account </a>
 							
 						</div>

 						

 						<div class="form-group">
 							<button type="button" id="login-submit" class="btn btn-success btn-block form-btn">Login</button>

 						</div> <!--form group-->
 						
 					</form> <!--form-->
 					
 				</div> <!--card body-->



 				
 			</div> <!-- card-->

 				
 			</div> <!--login-cover-->




 			
 		</div> <!--column -->



 		
 	</div> <!--row-->

 	
 </div> <!--container -->


   

<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/simple.js" ></script>
<script type="text/javascript" src="assets/js/signup.js" ></script>
<script type="text/javascript" src="assets/js/login.js" ></script>
</body>
</html> 