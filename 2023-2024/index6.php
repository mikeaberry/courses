<?php

$links = [
    "https://www.st-andrews.ac.uk/subjects/archive/postgraduate/",
    "https://www.st-andrews.ac.uk/subjects/archive/postgraduate/analytic-exegetical-theology-mlitt/",
    "https://www.st-andrews.ac.uk/subjects/archive/postgraduate/animal-behaviour-msc/"
];

// $file='postgraduate/course.txt';
// $links=file($file);

set_time_limit(500); // 

foreach($links as $key => $link) {
  //  echo $links[0] . '<br>';
//  $content = file_get_contents($link);
  $urlParts = parse_url($link);
 //  var_dump($urlParts['path']);
// $content = file_get_contents($link);
   $path = trim($urlParts['path'], '/');
   echo $path . '<br>';

        if (!file_exists($path)) {
                    // Create the folder if it doesn't exist
                    mkdir($path, 0777, true);
                  
                }     
                 $file = $path . '/index.html';
              //  echo $file;
                //echo $links[$x];

               
 
    //           file_put_contents($file, $content);
}

// echo $links[0] .'<br>';
// echo $links[1] .'<br>';
// echo $links[2];

// echo count($links);