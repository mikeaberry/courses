<?php
// Open the CSV file
$file = fopen('postgraduate/test-pg.csv', 'r');

// Initialize an empty array
$array = [];

// Read each line and parse it into an array
while (($data = fgetcsv($file)) !== false) {
    $array[] = $data;
}

// Close the file
fclose($file);

// Output the resulting array
print_r($array);
?>