<?php

require "vendor/autoload.php";

Resque::setBackend('localhost:6379');

$args = array(
    'name' => 'Julius Masigan',
);
Resque::enqueue('3Dqueue', 'Job', $args);

?>
