<?php

require_once 'dbConn.php';

/**
 * This function will update the filed section when edited into the database.
 *
 * @param pdo $db input the new edit into the database.
 *
 * @param string $content will contain the content that will be inputted.
 *
 * @return boolean output if the query is true then it will have been executed
 *
 * @return string otherwise with return with 'error incorrect input'
 */
function pullData($db, $content)
{
    if (is_string($content)) {
        $query = $db->prepare("UPDATE `about_content` SET `about_content`.`text`=:text WHERE `about_content`.`id` = '1';");
        $query->bindParam(':text',$content);
        return $results = $query->execute();
    } else {
    return 'Error incorrect input';
    }
}



