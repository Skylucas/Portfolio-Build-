<?php

require_once 'portfolio_function.php';
require_once 'dbConn.php';

$db = dbConn();
$portfolioResults = portfolioOutput($db);
$content = displayPortfolio($portfolioResults);