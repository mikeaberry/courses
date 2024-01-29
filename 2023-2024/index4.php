<?php
// Function to get content from a URL using file_get_contents
function getContent($url)
{
    // Enable the 'allow_url_fopen' configuration if not already enabled
    // ini_set('allow_url_fopen', 1);

    $content = file_get_contents($url);

    return $content;
}

// CSV file path
$csvFilePath = 'postgraduate/course.txt';
// Base output folder path
$baseOutputFolder = 'subjects/archive/';

// Check if the CSV file exists
if (file_exists($csvFilePath)) {
    // Open the CSV file for reading
    if (($handle = fopen($csvFilePath, 'r')) !== false) {
        // Loop through each row in the CSV file
        while (($data = fgetcsv($handle, 1000, ',')) !== false) {
            // Assuming the link is in the first column, adjust the index accordingly
            $links = $data;
            foreach ($links as $key => $link) {
                echo $link . '<br>';

                // Create a folder structure matching the URL
                $urlParts = parse_url($link);
                $folderPath = $urlParts['path'];
                $path = ltrim($folderPath, '/');
                echo $path . '<br>';


                if (!file_exists($path)) {
                    // Create the folder if it doesn't exist
                    mkdir($path, 0777, true);
                }

                $content = file_get_contents($link);
                $file = $path . 'index.html';
                var_dump($file);
                file_put_contents($file, $content);
            }
        }

        // Close the CSV file
        fclose($handle);
    } else {
        echo "Error opening the CSV file.";
    }
} else {
    echo "CSV file not found.";
}
