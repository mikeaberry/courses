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
$csvFilePath = 'postgraduate/test-pg.csv';
// Base output folder path
$baseOutputFolder = 'subjects/archive/';

// Check if the CSV file exists
if (file_exists($csvFilePath)) {
    // Open the CSV file for reading
    if (($handle = fopen($csvFilePath, 'r')) !== false) {
        // Loop through each row in the CSV file
        while (($data = fgetcsv($handle, 1000, ',')) !== false) {
            // Assuming the link is in the first column, adjust the index accordingly
           // print_r($data[0]);
            $links = $data;
            foreach($links as $link){
       //   echo $link;
                
            }
           

            //echo is_array($links);
           // echo is_array($links);
          //  $length = count($links);
          //  echo $length;
         //  for ($i = 0; $i <= $length-1; $i++) {
          //    echo  $links[$i] . "<br>";
         // $links = explode(" ",$link);
        //    is_array($link);
           
         //   var_dump($links."<br>");
          //  var_dump($links[0]."<br>");

           // $key = 0;
          //  foreach ($links as $key => $link) {
            //    echo $key .'Mike '.$links[$key] . '<br>';

                // Create a folder structure matching the URL
              //  $urlParts = parse_url($links);
                //echo $urlParts;
             //   $folderPath = $urlParts['path'];
             //   $path = ltrim($folderPath, '/');
                //echo $path . '<br>';

            
                // if (!file_exists($path)) {
                //     // Create the folder if it doesn't exist
                //     mkdir($path, 0777, true);
                // }

                // $content = file_get_contents($links[0]);
                // $file = $path . 'index.html';
                // echo $file;
                // file_put_contents($file, $content);
                // $key++;
      //  }
//   }
}
        

        // Close the CSV file
        fclose($handle);
    } else {
        echo "Error opening the CSV file.";
    }
} else {
    echo "CSV file not found.";
}
