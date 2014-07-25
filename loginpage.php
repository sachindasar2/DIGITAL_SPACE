<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<div id="container">
			<div id="logpage">
				<h1 >DIGITAL SPACE</h1>
				<h4 id="title">JOIN NOW</h4>
				<div id="stdiv">
					<h4 id="title2">REGISTER AS NEW USER</h4>
					<div>
						<div id="signupdiv">
							<form action="inc/register.php" method="POST" >
								<label for="name" class="label">Name</label><input type="text" class="text" name="name" class="text" >
								<label for="username" class="label">Username</label><input type="text" class="text" name="username" class="text" >
								<label for="password" class="label">Password</label><input type="password" name="password" class="text" >
								<label for="re-password" class="label">Confirm </label><input type="password" name="re-password" class="text" >
								<label for="dob" class="label">Birthday</label>
								<select name="month" id="month">
									<option value="None" selected>MM</option>
									<option value="01">Jan</option>
									<option value="02">Feb</option>
									<option value="03">Mar</option>
									<option value="04">Apr</option>
									<option value="05">May</option>
									<option value="06">Jun</option>
									<option value="07">Jul</option>
									<option value="08">Aug</option>
									<option value="09">Sep</option>
									<option value="10">Oct</option>
									<option value="11">Nov</option>
									<option value="12">Dec</option>
								</select>
								<input type="select" name="day" id="day" placeholder="DD">
								<input type="select" name="year" id="year" placeholder="YEAR">
								<label for="gender" class="label">Gender</label>
								<select id="gender" name="gender">
									<option value="m">Male</option>
									<option value="f">Female</option>
								</select>
								<input type="submit" name="submit" class="submit" value="SUBMIT"/>
								<input type="reset" name="reset" class="close" value="CANCEL"/>
							</form>
						</div>
						<div id="signupdiv2">
							<form action="inc/login.php" method="POST">
								<label for="text" class="label">USERNAME</label><input type="text" name="username" class="text">
								<label for="text" class="label">PASSWORD</label><input type="text" name="password" class="text">
								<input type="submit" name="submit" class="submit" value="SUBMIT" ><input type="reset" class="close" value="CANCEL">
							</form>
						</div>
					</div>
					<!--   FOOTER  -->
				</div>
				<script type="text/javascript" src="script/script.js"></script>
				<script type="text/javascript" src="script/script3.js"></script>
			</body>
		</html>