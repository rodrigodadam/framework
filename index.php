<?php

$query = require 'bootstrap.php';


$tasks = $query->selectAll('test02');



require 'views/index.view.php';