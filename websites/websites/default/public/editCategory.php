<?php
	require 'header.php';
?>

<main>

<?php

if (isset($_POST['submit'])) {
	$stmt = $pdo->prepare('UPDATE category
						   SET name
						   WHERE id = :id');

	$values = [
		'name' => $_POST['name'],
		'categoryId' => $_POST['categoryId'],
		'id' => $_POST['id']
	];

	$stmt->execute($values);
	echo 'category ' . $_POST['name'] . ' edited';
}
//If the form has not been submitted, check that a category has been selected to be edited e.g. editcategory.php?id=3
else if (isset($_GET['id'])) {

	$categoryStmt = $pdo->prepare('SELECT * FROM category WHERE id = :id');

	$values = [
		'id' => $_GET['id']
	];

	$categoryStmt->execute($values);

	$category = $categoryStmt->fetch();
?>
<form action="editcategory.php" method="POST">
	<input type="hidden" name="id" value="<?php echo $category['id']; ?>"/>

	<label>Title</label>
	<input type="text" name="name"  value="<?php echo $category['name']; ?>" />
	<label>Select category:</label>
	<select name="name">
	<?php

		$stmt = $pdo->prepare('SELECT * FROM category');
		$stmt->execute();

		foreach ($stmt as $row) {
			if ($row['id'] == $category['categoryId']) {
				echo '<option value="' . $row['id'] . '" selected="selected">' . $row['name'] . '</option>';
			}
			else {
				echo '<option value="' . $row['id'] . '">' . $row['name'] . '</option>';
			}
		}

	?>
	</select>

	<input type="submit" name="submit" value="Add" />
</form>
<?php
}
?>


</main>

<?php
	require 'footer.php';
?>