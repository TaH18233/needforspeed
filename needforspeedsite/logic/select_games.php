<?php
$nr_items_page=5;

$offset= ($page_nr-1)* $nr_items_page;


$result= $mysqli->query("SELECT * FROM games LIMIT " . $offset . ", " .$nr_items_page);
