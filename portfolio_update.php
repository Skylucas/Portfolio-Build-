<?php

require_once 'dbConn.php';
require_once 'portfolio_function.php';

$db = dbConn();

$dbResults = fetchInput($db);
$project_name = CreatePortfolioDisplay('file_image_name', $dbResults);
