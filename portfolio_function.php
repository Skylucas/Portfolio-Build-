<?php

/**
 * Takes the array and checks if it is actually an array it will then turn the array into separate items from that key field
 *
 * @param pdo $db inputs an array of the database that will select the all columns form the table name
 *
 * @return array will return the variable $section
 */
function portfolioOutput(pdo $db) : array {
    $query = $db->prepare("SELECT `project_name`, `file_image_name`, `url_location` FROM `portfolio_input`;");
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $query->execute();
    $section = $query->fetchAll();
    return $section;
}


/**
 * This function will display the portfolio, file name and image
 *
 * @param array this is an array that looks for $portfolioResults
 *
 * @return string will return the string "error with input"
 */
function displayPortfolio($portfolioResults) :string {
    $result = '';
    foreach ($portfolioResults as $portfolioResult) {
        if (array_key_exists('project_name',$portfolioResult) &&
            array_key_exists('file_image_name', $portfolioResult) &&
            array_key_exists('url_location', $portfolioResult)
        ) {

            $image_url = $portfolioResult["file_image_name"];
            $result .= '<div class="project" style="background-image: url(' . $image_url . ');">
                </div>
                <div>
                    <h3>' . $portfolioResult['project_name'] . '</h3>
                    <p>onec id elit non mi porta gravida at eget metus.</p>
                </div>';
        } else {
            return "Error with input";
        }
    }
    return $result;
}