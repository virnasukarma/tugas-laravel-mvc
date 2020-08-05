<!DOCTYPE html>
<html>
	<head>
    	<title> Form </title>
    	<meta charset="UTF-8">
  	</head>

  	<body>
  		<div>
	  		<h1>Buat Account Baru!</h1>
	  		<h3>Sign Up Form</h3>
  		</div>

  		<div>
  			<form action="/selamatdatang" method="POST">
	  			<label for="firstname">First Name:</label>
	  			<br>
	  			<br>
	  			<input type="text" name="nama_depan">
	  			<br>
	  			<br>
	  			<label for="lastname">Last Name:</label>
	  			<br>
	  			<br>
	  			<input type="text" name="nama_belakang">
	  			<br>
	  			<br>
	  			<label>Gender:</label>
	  			<br>
	  			<br>
	  			<input type="radio" name="gender" value="0"> Male
	  			<br>
	  			<input type="radio" name="gender" value="1"> Female
	  			<br>
	  			<input type="radio" name="gender" value="2"> Other
	  			<br>
	  			<br>
	  			<label>Nationallity</label>
	  			<br>
	  			<br>
	  			<select>
	  				<option value="ind">Indonesian</option>
	  				<option value="malay">Malaysian</option>
	  				<option value="sng">Singapore</option>
	  				<option value="aus">Australlian</option>
	  			</select>
	  			<br>
	  			<br>
	  			<label>Language Spoken:</label>
	  			<br>
	  			<br>
	  			<input type="checkbox" name="Language" value="0"> Bahasa Indonesia
	  			<br>
	  			<input type="checkbox" name="Language" value="0"> English
	  			<br>
	  			<input type="checkbox" name="Language" value="0"> Others
	  		</div>
	  		<br>

	  		<div>
	  			<label>Bio:</label>
	  			<br>
	  			<br>
	  			<textarea cols="30" rows="7"></textarea>
	  		</div>
	  		<input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
	  		<input type="submit" Value="Sing Up">
	  	</form>
  	</body>
</html>