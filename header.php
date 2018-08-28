<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<nav>
			<div id="home-blog">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="#blog">Blog</a></li>
				</ul>
				<div class="nav-login">

					<?php

					echo '<form action="includes/logout.inc.php" method="POST">
									<button type="submit" name="submit">Logout</button>
									</form>';
						if (isset($_SESSION['u_id'])) {
							
						} else {
							echo '<form action="includes/login.inc.php" method="POST">
								<input type="text" name="uid" placeholder="Username/email">
								<input type="password" name="pwd" placeholder="password">
								<button type="submit" name="submit">Login</button>
								</form>
								<a href="signup.php">Sign Up</a>';
							}
					?>
					
				</div>
			</div>
		</nav>
	</header>