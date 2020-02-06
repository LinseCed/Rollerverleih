<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<meta name="google-signin-client_id" content="********">
<style>
* {
  margin: 0px;
  padding: 0px;
}
body {
  font-size: 120%;
  background: white;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  width: 70%;
  margin: 50px auto 0px;
  color: black;
  background: #ff9900;
  text-align: center;
  border: 1px solid #B0C4DE;
  border-bottom: none;
  border-radius: 10px 10px 0px 0px;
  padding: 20px;
  margin-top: 300px;
}

h2 {
	font-size: 45px;
	}
	
h3 {
	margin-top: 200px;
	font-size: 37px;
	margin-left: 125px;
	}
p {
	font-size:37px;
	margin-top: 1px;
	} 
.input-group {
  margin: 50px 20px 50px 0px;
}
.input-group label {
  display: block;
  text-align: left;
  margin: 10px;
}
.input-group input {
  height: 30px;
  width: 93%;
  padding: 5px 10px;
  font-size: 37px;
  border-radius: 15px;
  border: 1px solid gray;
}
.btn {
	width: 780px;
	border: none;
	color: black;
	background-color: orange;
	padding: 15px 32px;
	text-align: center;
	text-decoration: none;
	display: inline-block;
	font-size: 45px;
	border-radius: 8px;
	border: none;
	position: absolute;
	z-index: 3;
	font-family: 'Segoe UI', Helvetica, Arial, Sans-Serif;
	margin-top: 20px;
	
}

.success {
  color: #ff9900; 
  background: #dff0d8; 
  border: 1px solid #3c763d;
  margin-bottom: 20px;
}

.error {
  width: 95.5%; 
  padding: 10px 10px;
  border: 1px solid #a94442; 
  color: black; 

  border-radius: 5px; 
  text-align: left;
}

a {text-decoration: none;}

#position {
	margin-top: 200px;
	margin-left: 100px;
	margin-right: 100px;
	}
	
#inputmargin {
	border-radius: 15px;
	padding: 40px 32px;
	}

	
</style>
<head>
  <title>Anmelden</title>
  
</head>
<body>
  
	 
  <form method="post" action="login.php" id="position">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<input type="text" name="username" placeholder="Name" id="inputmargin">
  	</div>
  	<div class="input-group">
  		<input type="password" name="password" placeholder="Passwort" id="inputmargin">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Anmelden</button>
  	</div>
  	<h3>
  		Noch kein Konto? <a href="register.php">Registrieren</a>
  	</h3>
  </form>
</body>
</html>