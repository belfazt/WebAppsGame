<form method="POST" role="form">
	<legend>Form title</legend>

	<div class="form-group">
		<label for="">label</label>
		<input type="text" class="form-control" name="pass" placeholder="Input field">
	</div>

	

	<button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php

if(isset($_POST["pass"])){

	//echo password_hash($_POST["pass"], PASSWORD_BCRYPT);
	echo crypt($_POST["pass"]);

}

?>