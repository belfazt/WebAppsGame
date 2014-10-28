<form action="" method="POST" role="form">
	<legend>Form title</legend>

	<div class="form-group">
		<label for="">label</label>
		<input type="text" class="form-control" name="username" placeholder="Input field">
		<input type="password" class="form-control" name="password" placeholder="Input field">
	</div>

	

	<button type="submit" class="btn btn-primary">Submit</button>
</form>


<?php

	//error_reporting(E_ALL);
	//ini_set('display_errors', '1');

	require_once('php/process.php');


	$info = new info();

	$info->login($_POST["username"], $_POST['password']);

?>