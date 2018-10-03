<?php
/*
 * This function will select the about me sections and the text from the the about content table. Will then fetch the query and execute that query
 *
 * @param parameter for the input would be $section
 * @param The parameter will look at $query and prepare this as ong as section = query then will be fetched.
 *
 * @return this will return the string that I have defined as a section.
 */

function fetchInput($db) {
    $query = $db->prepare("SELECT `about_me_sections`, `text` FROM `about_content`;");
    $query->execute();
    $section = $query->fetch();
    return $section;
}

/*
 * This function fetches all the keys that I need from my database, and uses a if statement where if the key exists from the database return the key otherwise return an error.
 *
 * @param $key which inputs all content from my table.
 * @param $dbResults will look into that table that has been selected and will pull that out.
 *
 * @return this will return the dbResults for key and $key that picks any key from the database.
 */

function fetchContent($key, $dbResults) {
        if(array_key_exists($key, $dbResults)){
            return $dbResults[$key];
        } else {
            return 'Error incorrect input';
        }
}
