<!DOCTYPE html>

<?php
$server = 'mysql';
$username = 'student';
$password = 'student';
$schema = 'assignment1';
$pdo = new PDO('mysql:dbname=' . $schema . ';host=' . $server, $username, $password);
?>

<html>
	<head>
		<link rel="stylesheet" href="styles.css"/>
		<title>Northampton News - Home</title>
	</head>
	<body>
		<header>
			<section>
				<h1>Northampton News</h1>
			</section>
		</header>
		<nav>
			<ul>
				<li><a href="index.php">Latest Articles</a></li>
				<li><a href="login.php">Log in </a></li>
				<li><a href="register.php">Register</a></li>
				<li><a href="#">Select Category</a>
					<ul>
						<li><a class="articleLink" href="category.php">Music</a></li>
						<li><a class="articleLink" href="category.php">Sport</a></li>
						<li><a class="articleLink" href="category.php?">Local</a></li>
					</ul>
				</li>
			</ul>
		</nav>
		<img src="images/banners/randombanner.php" />

