<?php
	require 'header.php';
?>
	<main>
		<h2>Register a new user</h2>
        <form action="index.php" method="POST">
        <label>Email</label> <input type="text" name="email" />
        <label>Name</label> <input type="text" name="name" />
		<label>Password</label> <input type="password" name="password" />
		<input type="submit" name="submit" value="Submit" />
		</form>

	</main>
<?php
	require 'footer.php';
?>