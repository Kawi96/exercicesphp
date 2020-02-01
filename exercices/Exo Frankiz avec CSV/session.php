<?php
session_start();
if(isset($_GET['logout'])){
  unset($_SESSION['logged']);
}
if(!isset($_SESSION['logged'])) {
?>
<form method="post" action="cible.php">
  <input type="text" name="pseudo"/>
  <input type="password" name="password"/>
  <input type="submit" value="valider"/>
</form>
<?php
} else {
  echo 'connected';
}
