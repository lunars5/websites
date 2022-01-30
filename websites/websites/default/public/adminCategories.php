<?php
    require 'header.php';
?>
<main>

				<h2>Homepage</h2>
				<h3> Admin Categories</h3>
<?php
$stmt = $pdo->prepare('SELECT * FROM category ORDER BY id DESC ');
$stmt->execute();

foreach ($stmt as $row) {
?>
<ul>
<li><a href="category.php?id=<?php echo $row['id']; ?>"><hi><?php echo $row['name']?></h1></a>
<li><a href="editCategory.php?id=<?php echo $row['id']; ?>"><hi><?php echo $row['name']?></h1></a>
<em> Published: <?php echo $row['publishDate']?></em></a>
</li>
</ul>

<?php
}
?>

</main>
<?php
    require 'footer.php';
?>