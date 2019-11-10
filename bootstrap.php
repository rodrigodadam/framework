<?php

$config = require 'config.php';
require 'core/database/Connector.php';
require 'core/database/QueryBuilder.php';

return new QueryBuilder(Connector::make($config['database']));