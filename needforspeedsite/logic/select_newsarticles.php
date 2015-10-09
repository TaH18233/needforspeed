<?php
$nr_items_page=5;

$offset= ($page_nr-1)* $nr_items_page;



$data= $mysqli->query("SELECT * FROM newsarticles LIMIT " . $offset . ", " .$nr_items_page);
