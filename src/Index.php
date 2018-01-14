<?php
require_once __DIR__ . '/../vendor/autoload.php';

use alshaya\WordCount\GetCount;

$instance = new GetCount();

echo $instance->say();