<?php
	require 'header.php';
?>

<main>

<?php

if (isset($_POST['submit'])) {
	$stmt = $pdo->prepare('UPDATE article
						   SET title = :title , categoryId = :categoryId
						   WHERE id = :id');

	$values = [
		'title' => $_POST['title'],
		'categoryId' => $_POST['categoryId'],
		'id' => $_POST['id']
	];

	$stmt->execute($values);
	echo 'Article ' . $_POST['name'] . ' edited';
}
//If the form has not been submitted, check that a article has been selected to be edited e.g. editarticle.php?id=3
else if (isset($_GET['id'])) {

	$articleStmt = $pdo->prepare('SELECT * FROM article WHERE id = :id');

	$values = [
		'id' => $_GET['id']
	];

	$articleStmt->execute($values);

	$article = $articleStmt->fetch();
?>
<form action="editarticle.php" method="POST">
	<input type="hidden" name="id" value="<?php echo $article['id']; ?>"/>

	<label>Title</label>
	<input type="text" name="name"  value="<?php echo $article['title']; ?>" />
	<label>Select category:</label>
	<select name="name">
	<?php

		$stmt = $pdo->prepare('SELECT * FROM category');
		$stmt->execute();

		foreach ($stmt as $row) {
			if ($row['id'] == $article['categoryId']) {
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