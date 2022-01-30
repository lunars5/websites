<?php
	require 'header.php';
?>

	<main>
	<h3> Delete Category <h3>

	<?php

if (isset($_POST['submit'])) {
    $pdo = new PDO('mysql:dbname=assignment1;host=mysql', 'student', 'student');


	$stmt = $pdo->prepare('DELETE FROM  category (name) WHERE (:name)');

	$values = [
		'name' => $_POST['name']
	];

	$stmt->execute($values);
	echo 'Category ' . $_POST['name'] . ' added';
}
else {
?>
<form action="addcategory.php" method="POST">
	<label>Category name:</label>
	<input type="text" name="name" />
	<input type="submit" name="submit" value="Add" />
</form>

<?php
}
?>
</main>

<?php
	require 'footer.php';
?>
