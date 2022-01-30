<?php
	require 'header.php';
?>

<main>
<?php

if(isset($_GET['id'])){
	$articleId=$_GET['id'];

	$query = $pdo->prepare('SELECT * FROM article WHERE id = ?');
	$query->execute([$articleId]);
	$stmt = $query-> fetch();
	
}

?>	

<h1><?php echo $stmt['title']?></h1> <em>Published: <?php echo $stmt['publishDate']?><em>
<p><?php echo $stmt['content']?></p>
</main>


<?php
	require 'footer.php';
?>