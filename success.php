<?php session_start() ;?>
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
	<?php include 'parts/nav.php'; ?>
	<div class="container main" >
		<div class="row">
			<div class="col-md-12">
				<div class="success-area">
					<?php if(isset($_SESSION['user_name'])): ?>
						<?php echo "<i class='fa fa-check-circle'></i> Hi <strong>". $_SESSION['user_name']. "</strong> Welcome to your profile<a href='index.php'>Login</a>"; ?>
					<?php endif; ?>
					<?php unset($_SESSION['user_name']); ?>
					
				</div> <!--sucess area-->

				
			</div> <!--coloumn-->
			
		</div> <!--row-->
	</div>  <!--container-->
	
</body>


<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$(".success-area").fadeOut();
		$(".success-area").fadeIn(5000);
	})
</script>
</html>
