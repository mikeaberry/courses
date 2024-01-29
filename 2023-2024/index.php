<?php
// Function to get content from a URL using file_get_contents
//  function getContent($url) {
// //     // Enable the 'allow_url_fopen' configuration if not already enabled
//      ini_set('allow_url_fopen', 1);

//      $content = file_get_contents('https://www.st-andrews.ac.uk' . $url);

//      return $content;
//  }

// CSV file path
// $csvFilePath = 'postgraduate/test-pg.csv';
// // Base output folder path
// $baseOutputFolder = '';

// // Check if the CSV file exists
// if (file_exists($csvFilePath)) {
//     // Open the CSV file for reading
//     if (($handle = fopen($csvFilePath, 'r')) !== false) {
//         // Loop through each row in the CSV file
//         while (($data = fgetcsv($handle, 1000, ',')) !== false) {
//             // Assuming the link is in the first column, adjust the index accordingly
//             $path = $data;
// //var_dump($path);
//            // echo is_array($path);
// //echo '<p>Path: '.trim($path).'</p>';
// //$url = 'https://www.st-andrews.ac.uk' .'/'. $path;
// //echo '<p>URL: '.$url.'</p>';
//             // Get content for the current link
//            // $content = getContent($link);
//      //      $content = file_get_contents($url);

// //echo $content;
// // $length = count($path);
// // for ($x = 0; $x <= $length-1; $x++) {
// //    $filepath = $path[$x];
//   //echo $filepath[$x];
//    //if (!file_exists($path[$x])) {
// //mkdir($path[$x].'/index.html', 0777, true);            
// //}


//             // Create a folder structure matching the URL
//           //  $urlParts = parse_url(trim($link), PHP_URL_PATH).'<br>';

// //echo $urlParts;
//             // $folderPath = $baseOutputFolder . $urlParts['path'];
//      //       $folderPath = ltrim($path,'/');
//            // echo $folderPath;
//             // echo '<p>FolderPath: '.$folderPath.'</p>';
//             // if (!file_exists($folderPath)) {
//             //    mkdir($folderPath, 0777, true);
//             // }

//             // Create a filename based on the last part of the path
//           //  $filename = basename($link);
//           //  echo $filename;

//             // Write content into a file within the folder structure
//          //    $outputFilePath = $folderPath  .  'index.html';
//           //    file_put_contents($outputFilePath, $content);

//             // Optionally, you can echo the content as well
//            // echo "Content for $link written to $outputFilePath\n";


//         // Close the CSV file
//         fclose($handle);
//     } 
//   }}



// Function to convert CSV file to array
// function csvToArray($file)
// {
//     $rows = array();

//     if (($handle = fopen($file, "r")) !== FALSE) {
//         while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
//             var_dump($data);
//             $rows[] = $data;
//         }
//         fclose($handle);
//     }

//     return $rows;
// }

// // Specify the path to your CSV file
// $csvFile = 'postgraduate/test-pg.csv';

// // Call the function to convert CSV to array
// $csvData = csvToArray($csvFile);

// //Display the resulting array
// // echo '<pre>';
// // var_dump($csvData);
// // echo '</pre>';


// $length = count($csvData);
// for ($x = 0; $x <= $length - 1; $x++) {
//     $url = $csvData[$x][0];
// //echo $url . '<br>';
// $path = str_replace("https://www.st-andrews.ac.uk/", "", $url);
// //echo $filePath.'<br>';

// echo $path.'<br>';
//   // Create directories based on the path
//   $dirPath = $csvData[$x][0];
//   var_dump($dirPath.'<br>');

// //    // var_dump($urlParts);
// if (!is_dir($dirPath)) {
//     mkdir($dirPath, 0777, true);
// }
// }