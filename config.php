<?php

require_once __DIR__ . "/vendor/autoload.php";

$collection = (new MongoDB\Client('mongodb://127.0.0.1:27017'))->booksdb->books;

?>
