<?php
    require 'header.php';
?>
<main>

<?php
	if (isset($_POST['submit'])) {
		if ($_POST['password'] == 'open') {
			$_SESSION['loggedin'] = true;	
		}
	}


	if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
	?>


	<h2>You are now logged in</h2>
	<?php
	}

	else {
		?>
        
		<h2>Log in</h2>

		<form action="index.php" method="post">

			<label>Enter Password</label>
			<input type="password" name="password" />

			<input type="submit" name="submit" value="Log In" />
		</form>
	<?php
	}
	?>

	</main>

<?php
require 'footer.php'
?>