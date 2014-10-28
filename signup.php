<form action="" method="POST" role="form">
	<legend>Form title</legend>

	<div class="form-group">
		<label for="">label</label>
		<input type="text" class="form-control" name="username" placeholder="Username" required>
		<input type="email" class="form-control" name="email" placeholder="Email" required>
		<input type="password" class="form-control" name="pass" placeholder="Password" required>
	</div>
	<button type="submit" class="btn btn-primary">Submit</button>
</form>


<?php
	//error_reporting(E_ALL);
	require_once('php/process.php');	
	$info = new info();

	if (isset($_POST["pass"])){
		//echo $_POST["pass"];
		$info->createNewUser($_POST["username"], $_POST["email"], $_POST["pass"]);	
	}
	
?>