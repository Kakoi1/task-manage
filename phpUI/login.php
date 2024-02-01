<?php
// Your first PHP file (e.g., index.php)

if(isset($_POST['submit_button'])) {
    // Redirect to another PHP file
    header("Location: dashboard.php");
    exit(); // Ensure that no further code is executed after the redirect
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="..//css/login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<style>
    .row{
        position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5); /* Semi-transparent black overlay */
            display: flex;
            align-items: center;
            justify-content: center;
    }
   
</style>
<body>
    
<div class ="row">
	<div class="col-lg-12 mx-auto p-0">
		<div class="card">
<div class="login-box">
	<div class="login-snip">
        <h2>Task Management System</h2>
        <br>
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Login</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
		<div class="login-space">
			<div class="login">

                <form action="" method="post">

				<div class="group">
					<label for="user" class="label">Username</label>
					<input id="user" type="text" class="input"  placeholder="Enter your username" required>
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" type="password" class="input" data-type="password" placeholder="Enter your password" required>
				</div>
				<div class="group">
					<input id="check" type="checkbox" class="check" checked required>
					<label for="check"><span class="icon"></span> Keep me Signed in</label>
				</div>
				<div class="group">
					<input type="submit" class="button" name="submit_button" value="Sign In">
				</div>

                </form>
                
				<div class="hr"></div>
				<div class="foot">
					<a href="#">Forgot Password?</a>
				</div>
			</div>
			<div class="sign-up-form">
                <form action="" method="post">

				<div class="group">
					<label for="user" class="label">Username</label>
					<input id="user" type="text" class="input" placeholder="Create your Username" required>
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" type="password" class="input" data-type="password" placeholder="Create your password" required>
				</div>
				<div class="group">
					<label for="pass" class="label">Repeat Password</label>
					<input id="pass" type="password" class="input" data-type="password" placeholder="Repeat your password" required >
				</div>
				<div class="group">
					<label for="pass" class="label">Email Address</label>
					<input id="pass" type="text" class="input" placeholder="Enter your email address" required>
				</div>
				<div class="group">
					<input type="submit" class="button" name="submit_button" value="Sign Up">
				</div>
                </form>
				<div class="hr"></div>
				<div class="foot">
					<label for="tab-1">Already Member?</label>
				</div>
			</div>
		</div>
	</div>
</div>   
</div>
</div>
</div>

</body>
</html>