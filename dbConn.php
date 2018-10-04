<?php

/**
 * This function will look for the db name that I have asked it to look into and then it will set the attribute , as an associate fetch mode.
 *
 * @return PDO Will return the PDO object from the database.
 */
function dbConn(){
    $db = new PDO('mysql:host=127.0.0.1;dbname=portfolio','root');
    $db ->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $db;
}

