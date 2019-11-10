<?php

$tasks = $app['database']->selectAll('test02');



require 'views/index.view.php';