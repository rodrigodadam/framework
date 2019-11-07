<?php

require 'database/Connector.php';
require 'database/QueryBuilder.php';
require 'Task.php';

$pdo = Connector::make();

$query = new QueryBuilder($pdo);

$tasks = $query->selectAll('test02');


require 'index.view.php';