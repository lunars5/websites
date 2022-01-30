<?php
	require 'header.php';
?>


<main>


<h3> Add new article <h3>

<?php

if (isset($_POST['submit'])) {
	$stmt = $pdo->prepare('INSERT INTO  article (title, categoryId, publishDate, content ) VALUES (:title, :categoryId, :publishDate, :content)');

	$values = [
		'title' => $_POST['title'],
		'categoryId' => $_POST['categoryId'],
        'publishDate' => $_POST['publishDate'],
		'content' => $_POST['content']
	];

	$stmt->execute($values);
	echo 'Article ' . $_POST['title'] . ' added';
}
else {
?>
<form action="addArticle.php" method="POST">
	<label>Article name:</label>
	<input type="text" name="title" />
    <label for="content">Content: </label>
    <textarea id="content" name="content" maxlength="500"></textarea>
    <label>Publish Date:</label>
    <input type="date" name="publishDate" />
	<label>Select category:</label>
	<select name="categoryId">
	<?php

		$stmt = $pdo->prepare('SELECT * FROM category');
		$stmt->execute();

		foreach ($stmt as $row) {
	        echo '<option value="' . $row['id'] . '">' . $row['name'] . '</option>';
		}

	?>
	</select>

	<input type="submit" name="submit" value="Add" />
</form>
<?php
}
?>

<main>

<?php
    require 'footer.php';
?>