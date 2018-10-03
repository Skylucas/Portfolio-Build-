<?php

/**
 * This function fetches the input from the db which is an array that will then pull everything out.
 *
 * @param pdo $db will select both 'about_me_sections', 'text' from 'about_content and will fetch these ids from the table and show on the front end.
 *
 * @return array this will return the $section that is array.
 */
function fetchInput(pdo $db) : array {
    $query = $db->prepare("SELECT `about_me_sections`, `text` FROM `about_content`;");
    $query->execute();
    $section = $query->fetch();
    return $section;
}


/**
 * This function fetches all the keys that I need from my database, and uses a if statement where if the key exists from the database.
 *
 * @param array $key any type of data in my table that I wish to show on the front end.
 *
 * @param array $dbResults this is returned as an array from the table inside the database.
 *
 * @return string this will return the string 'Error incorrect input'
 */
function fetchContent($key, $dbResults) : string {
        if(array_key_exists($key, $dbResults)){
            return $dbResults['text'];
        } else {
            return 'Error incorrect input';
        }
}
