<?php
// Function to get content from a URL using file_get_contents
function getContent($url) {
    // Enable the 'allow_url_fopen' configuration if not already enabled
    ini_set('allow_url_fopen', 1);

    $content = file_get_contents($url);

    return $content;
}

// CSV file path
$csvFilePath = 'postgraduate/course.txt';
// Base output folder path
$baseOutputFolder = 'output';

// Check if the CSV file exists
if (file_exists($csvFilePath)) {
    // Open the CSV file for reading
    if (($handle = fopen($csvFilePath, 'r')) !== false) {
        // Loop through each row in the CSV file
        while (($data = fgetcsv($handle, 1000, ',')) !== false) {
            // Assuming the link is in the first column, adjust the index accordingly
            $link = $data[0];
var_dump($link);
            // Get content for the current link
            $content = getContent($link);

            // Create a folder structure matching the URL
            $urlParts = parse_url($link);
            $folderPath = $baseOutputFolder . $urlParts['path'];

            if (!file_exists($folderPath)) {
                // Create the folder if it doesn't exist
                mkdir($folderPath, 0777, true);
            }

            // Create a filename based on the last part of the path
            $filename = basename($urlParts['path']);

            // Write content into a file within the folder structure
            $outputFilePath = $folderPath . '/' . $filename . '.html';
            file_put_contents($outputFilePath, $content);

            // Optionally, you can echo the content as well
            echo "Content for $link written to $outputFilePath\n";
        }

        // Close the CSV file
        fclose($handle);
    } else {
        echo "Error opening the CSV file.";
    }
} else {
    echo "CSV file not found.";
}
?>
