<?php

// Function to convert CSV file to array
function csvToArray($file)
{
   // $rows = array();

    if (($handle = fopen($file, "r")) !== FALSE) {
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
           // $rows[] = $data;
           $links=$data;
        }
        fclose($handle);
    }

    return $links;
}

// Specify the path to your CSV file
$csvFile = 'postgraduate/test-pg.csv';

// Call the function to convert CSV to array
$csvData = csvToArray($csvFile);

// Display the resulting array
echo '<pre>';
print_r($csvData);
echo '</pre>';
?>