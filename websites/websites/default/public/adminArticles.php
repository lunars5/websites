<?php
    require 'header.php';
?>
<main>

				<h2>Homepage</h2>
				<h3> Admin Articles</h3>
<?php
$stmt = $pdo->prepare('SELECT * FROM article ORDER BY publishDate DESC ');
$stmt->execute();

foreach ($stmt as $row) {
?>
<ul>
<li><a href="articles.php?id=<?php echo $row['id']; ?>"><hi><?php echo $row['title']?></h1></a>
<li><a href="editArticle.php?id=<?php echo $row['id']; ?>"><hi><?php echo $row['title']?></h1></a>
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