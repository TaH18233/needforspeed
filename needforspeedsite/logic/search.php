<?php
$result = $mysqli->query("SELECT * FROM newsarticles WHERE title LIKE '%$searchval%' OR text LIKE '%$searchval%'");


 ?>
