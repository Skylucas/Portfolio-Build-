<?php

require_once 'dbConn.php';
require_once 'admin_functions.php';

$db = dbConn();

$about_content = fetchInput($db);
$title = fetchContent('about_me_sections', $about_content);
$content = fetchContent('text', $about_content);

