<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<form action="../../controllers/RegisterController.php" method="post" enctype="multipart/form-data">
			<div class="mb-3">
			  <label for="exampleFormControlInput1" class="form-label">First name</label>
			  <input name="first_name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="John">
			</div>

			<div class="mb-3">
			  <label for="exampleFormControlInput2" class="form-label">Last name</label>
			  <input name="last_name" type="text" class="form-control" id="exampleFormControlInput2" placeholder="Smith">
			</div>

			<div class="mb-3">
			  <label for="exampleFormControlInput3" class="form-label">Birth date</label>
			  <input name="birth_date" type="date" class="form-control" id="exampleFormControlInput3" >
			</div>

			<div class="mb-3">
			  <label for="exampleFormControlInput4" class="form-label">Email</label>
			  <input name="email" type="text" class="form-control" id="exampleFormControlInput4" placeholder="example@gmail.com">
			</div>

			<div class="mb-3">
			  <label for="exampleFormControlInput5" class="form-label">Password</label>
			  <input name="password" type="password" class="form-control" id="exampleFormControlInput5" placeholder="Password">
			</div>

			<div class="mb-3">
			  <label for="exampleFormControlInput6" class="form-label">Recuerp assword</label>
			  <input name="rec_password" type="password" class="form-control" id="exampleFormControlInput6" placeholder="Recuerp assword">
			</div>

			<div class="mb-3">
			  <label for="exampleFormControlInput7" class="form-label">Avatar</label>
			  <input name="img" type="file" class="form-control" id="exampleFormControlInput7" >
			</div>

			<button class="btn btn-success" style="margin-right:10px">
				Sign Up
			</button>
			<a  href="Login.php"> Sign In </a>
		</form>
	</div>
</body>
</html>