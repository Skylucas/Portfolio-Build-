<?php

require('admin.php');

$db = new PDO('mysql:host=127.0.0.1;dbname=portfolio','root');

$db ->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);


$about_content = fetchInput($db);


var_dump($about_content);



