
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="views/dashboard/css.css">
<title>Orders</title>
</head>
<body>
<div class="Login">
	<main>
		<div class="overview">
			<h1>Creer un compte</h1>
			<h2>Overview</h2>
			<div class="widget-container">
			<div class="widget">
			<header>
				<h3 class="iconicfill-user">Creer un compte</h3>
			</header>
			<div class="content">
				<form action="user_controller.php" method="post">
				<input class="hidden" id="name" name="method" value="create" type="text">
				<label for="name">Login:</label>
				<input id="name" name="name" type="text"><br>
				<br>
				<label for="name">Password:</label>
				<input id="password" name="password" type="password">
				<br>
				<br>
				<input type="submit" value="Creer un compte">
				</form>
				<br>
				<br>
			</div>
			</div>
			</div>
		</div>
		<footer>
		<p>&copy; bchaleil & sbouyahi</p>
		</footer>
	</main>
	</div>
</body>
</html>

