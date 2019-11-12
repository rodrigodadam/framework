<?php

$users = App::get('database')->selectAll('user');



require 'views/index.view.php';