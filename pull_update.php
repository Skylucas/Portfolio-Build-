<?php
require_once 'dbConn.php';
require_once 'Update_About_Me.php';

$db = dbConn();
$content = $_POST['text'];
UpdateAboutContent($db, $content);
header('Location:about_me.php');
