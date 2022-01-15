<?php 
include 'constant-inc.php';

$site_url = base_url();
$conn = connect();
 
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="Bootlab">

	<title>Sign In</title>

	<link rel="" href="sign-in.php" />
	<link rel="shortcut icon" href="<?php echo $site_url;?>img/favicon.ico">

	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&amp;display=swap" rel="stylesheet">

	<!-- Choose your prefered color scheme -->
	<!-- <link href="css/light.css" rel="stylesheet"> -->
	<!-- <link href="css/dark.css" rel="stylesheet"> -->

	<!-- BEGIN SETTINGS -->
	<!-- Remove this after purchasing -->
	<link class="js-stylesheet" href="<?php echo $site_url;?>css/light.css" rel="stylesheet">
	<script src="<?php echo $site_url;?>js/settings.js"></script>
	<!-- END SETTINGS -->
	<script>
		(function (h, o, t, j, a, r) {
			h.hj = h.hj || function () {
				(h.hj.q = h.hj.q || []).push(arguments)
			};
			h._hjSettings = {
				hjid: 2120269,
				hjsv: 6
			};
			a = o.getElementsByTagName('head')[0];
			r = o.createElement('script');
			r.async = 1;
			r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
			a.appendChild(r);
		})(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
	</script>
</head>


<body data-theme="default" data-layout="fluid" data-sidebar-position="left" data-sidebar-behavior="sticky">
	<div class="main d-flex justify-content-center w-100">
		<main class="content d-flex p-0">
			<div class="container d-flex flex-column">
				<div class="row h-100">
					<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
						<div class="d-table-cell align-middle">

							<div class="text-center mt-4">
								<h1 class="h2">Welcome back, </h1>
								<p class="lead">
									Sign in to your account to continue
								</p>
							</div>

							<div class="card">
								<div class="card-body">
									<div class="m-sm-4">
										<div class="text-center">
											<img src="<?php echo $site_url;?>img/avatars/avatar.jpg" alt="Chris Wood"
												class="img-fluid rounded-circle" width="132" height="132" />
										</div>
										<form id="signin-form" action="">
											<div class="mb-3">
												<label class="form-label">Email</label>
												<input class="form-control form-control-lg" type="email" name="email"
													placeholder="Enter your email" id="email" />
											</div>
											
											<div class="mb-3">
												<label class="form-label">Password</label>
												<input class="form-control form-control-lg" type="password"
													name="password" placeholder="Enter your password" id="password" />
												<small>
													<a href="">Forgot password?</a>
												</small>
											</div>
											
											<div>
												<div class="form-check align-items-center">
													<input id="customControlInline" type="checkbox"
														class="form-check-input" value="remember-me" name="remember-me"
														checked>
													<label class="form-check-label text-small"
														for="customControlInline">Remember me next time</label>
												</div>
											</div>
											
											<div class="text-center mt-3">
												<!-- <a href="" class="btn btn-lg btn-primary" id="signin" type="" Sign -->
													<!-- in</a> -->
												<button type="submit" class="btn btn-lg btn-primary" id="signin">Sign in</button>
											</div>
										</form>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</main>
	</div>

	<script src="<?php echo $site_url;?>js/app.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$("#signin-form").submit(function(e){
			e.preventDefault();
  			// alert("Submitted");
			let email = $("#email").val();
			let pass = $("#password").val();

			if(email != '' && pass != ''){
				let dataString = "email=" + email + "&pass=" + pass;
				// ajax call
				$.ajax({
					url: "api/signin.php",
					method : "post",
					data : dataString,
					success:function(r){
						if(r == 'true'){
							window.location.href = "dashboard.php";
						}else if(r == 'false'){
							alert("Please enter correct details !!");
						}
					}
				})
			}else{
				alert("Please Fill the details !!");
			}
		});
	</script>
</body>



</html>