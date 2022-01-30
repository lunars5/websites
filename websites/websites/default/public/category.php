<?php
    require 'header.php';
?>
<main>

<?php
if (isset($_GET['categoryId']))  {
	$categoryStmt = $pdo->prepare('SELECT * FROM platform WHERE id = :id');
	$articleStmt = $pdo->prepare('SELECT * FROM article WHERE categoryId = :id');

	$values = [
		'id' => $_GET['categoryId']
	];

	$categoryStmt->execute($values);
	$articleStmt->execute($values);


	$category = $categoryStmt->fetch();

	echo '<h1>' . $category['name'] . ' title</h1>';
?>
</main>

<?php
}
?>

<?php
    require 'footer.php';
?>