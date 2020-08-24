
<html>
<head>
	<title> Student / Teacher Login and Registration </title>
	<link rel="stylesheet" href="style.css">
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
</head>
<body>
	<div class="container">
		<div class="form-box">
			<div class="button-box">
					<div id="btn"></div>
					<button type="button" class="toggle-btn" onclick="login()">Log In</button>
					<button type="button" class="toggle-btn" onclick="register()">Register</button>
			</div>

			<form id="login" class="input-group" action="validation.php" method="post">
				<input type="text" name="user" class="input-field" placeholder="User Name" required>
				<input type="password" name="password" class="input-field" placeholder="Password" required>
				<button type="submit" class="submit-btn" >Log In</button>
			</form>

			<form id="register" class="input-group" action="registration.php" method="post">
				<div class="form-group radio">
					<label></label>
					<input type="radio" name="authority" value="S" required>Student
							<input type="radio" name="authority" value="P" required>Professor
				</div>
				<input type="text" name="user" class="input-field" placeholder="User Name" required>
				<input type="password" name="password" class="input-field" placeholder="Password" required>
				<input type="password" name="password2" class="input-field" placeholder="Confirm Password" required>
				<button type="submit" class="submit-btn" >Register</button>
			</form>
		</div>




		<!-- <div class="login-box">
		<div class="row">
			<div class="col-md-6 login-left">
				<h2>Login Here</h2>
				<form action="validation.php" method="post">
					<div class="form-group">
						<label>Username</label>
						<input type="text" name="user" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="password" class="form-control" required>
					</div>
					<button type="submit" class="btn btn-primary"> Login </button>
				</form>
	</div>

	<div class="col-md-6 login-right">
		<h2>Register Here</h2>
		<form action="registration.php" method="post">
			<div class="form-group radio">
				<label>Select Authority  </label>
				<input type="radio" name="authority" value="S" required>Student
						<input type="radio" name="authority" value="P" required>Professor
			</div>
			<div class="form-group">
				<label>Username</label>
				<input type="text" name="user" class="form-control" required>
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" name="password" class="form-control" required>
			</div>
			<div class="form-group">
				<label>Confirm Password</label>
				<input type="password" name="password2" class="form-control" required>
			</div>
			<button type="submit" class="btn btn-primary"> Register </button>
		</form>
</div>
</div>
</div> -->
</div>
<script>

var x = document.getElementById("login");
var y = document.getElementById("register");
var z = document.getElementById("btn");

function register() {

	x.style.left = "-400px";
	y.style.left = "50px";
	z.style.left = "110px";
}


function login() {

	x.style.left = "50px";
	y.style.left = "450px";
	z.style.left = "0";
}

</script>


</body>
</html>
