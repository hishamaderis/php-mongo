<?php

require_once __DIR__ . "/vendor/autoload.php";

$collection = (new MongoDB\Client('mongodb://172.17.0.2:27017'))->booksdb->books;

?>
