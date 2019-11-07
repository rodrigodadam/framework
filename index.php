<?php

$query = require 'bootstrap.php';


$tasks = $query->selectAll('test02');



require 'index.view.php';