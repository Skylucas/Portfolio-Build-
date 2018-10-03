<?php

require_once 'dbConn.php';
require_once 'admin_functions.php';

$db = dbConn();

$about_content = fetchInput($db);
$content = fetchContent('text', $about_content);

