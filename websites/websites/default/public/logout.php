<?php
    require 'header.php';
?>
<main>
<?php
if (!isset($_POST['submit'])){

echo '<h2>Log out?</h2>
<form action="index.php" method="POST">
<input type = "submit" name="submit" value="Log out"/>
</form>';
session_destroy();
}
else {

}

?>
</main>
<?php
require 'footer.php'
?>