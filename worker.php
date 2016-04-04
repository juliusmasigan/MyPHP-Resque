<?php

require "vendor/autoload.php";
require "job.php";


$worker = new Resque_Worker('3Dqueue');
$worker->work(1);

?>
