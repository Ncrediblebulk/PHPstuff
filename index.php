<?php

$query = require "bootstrap.php";

require "Task.php";

$tasks = $query->selectAll("todos");

require "index_view.php";