<?php

require_once 'dbConn.php';
require_once 'pull_data.php';

$db = dbConn();

$content = $_POST['text'];
pullData($db, $content);




