<?php

// // Function to read CSV file into a PHP array
function csvToArray($file) {
    $rows = array_map('str_getcsv', file($file));
    $header = array_shift($rows);
    $csv = array();
    foreach ($rows as $row) {
        $csv[] = array_combine($header, $row);
    }
    return $csv;
}

// Replace 'your_file.csv' with the actual path to your CSV file
$csvFile = 'postgraduate/test-pg.csv';

// Read CSV into an array
$data = csvToArray($csvFile);
print_r($data);

// Loop through each row in the array and echo out the path
$key = 0;
foreach ($data as $key => $row) {
    // Assuming the column name in the CSV is 'url'
    $url = $row;
//var_dump($url);
    // Get the path from the URL
  //  $path = parse_url($url[$key], PHP_URL_PATH);

    // Echo out the path
 //   echo "URL: $url, Path: $path<br>";
    $key++;
}

?>
