<?php

$file = 'postgraduate/course.txt';

//$links = file($file);



set_time_limit(0);

foreach ($links as $key => $link) {
  if ($link) {
    
    $urlParts = parse_url(trim($link));
   

   $path = trim($urlParts['path'], '/');
   // echo $path .'<br>';
 $year = '2023-2024';
// $level = 'pg';
// $basename = basename($path);
$path = str_replace('/archive','/archive/'.$year,$path);
//echo $path .'<br><br>';
//$dir = $year . '/' . $level . '/' . $basename;
    if (!file_exists($path)) {
      //   // Create the folder if it doesn't exist
      mkdir($path, 0777, true);
    }
    //echo dirname(__FILE__);
    //$server = $_SERVER['SERVER_NAME'];
     $server = 'archive.st-andrews.ac.uk';

    // // //echo $server . '<br>';
     $old_server = $urlParts['host'];
   // $path = basename($path);
   // echo 'File:' . basename($basename).'<br>';
     $file =  $path . '/index.html';
    // $file = $year
    // // //echo $path.'<br>';
     //$content = file_get_contents(trim($link));


     $old_base = trim('<base href="//' . $old_server . '/' . $path . '/">');
    // //  // $test = '<base href="//www.st-andrews.ac.uk/subjects/archive/postgraduate/">';
     //$new_base = trim('<base href="//' . $server . '/' . $path . '/">');
     $new_base = 'https://archive.st-andrews.ac.uk/courses/2023-2024/pg/';
    // echo $old_base.'<br>';
    //echo $new_base.'<br>';


    $banner = '<body>
 <div class="text-banner success">
 <div class="container">
     <p>This page has been archived and is no longer updated. <a href="https://archive.st-andrews.ac.uk">Back to archive</a>.</p>
 </div>
 </div>';

//     $nav = '<nav class="navigation-bar">
//  <div class="container">
//    <div class="toggle-navigation primary-toggle"><button class="navigation-button" aria-expanded="false" aria-controls="primary-nav">Navigation <i class="chevron down"></i></button></div>
//    <ul class="navigation-bar-nav primary-nav" id="primary-nav"><li><a href="/subjects/entry/academic-entry-explained/">Academic entry explained</a></li><li><a href="/subjects/entry/">Entry requirements</a></li><li><a href="/subjects/non-degree-courses/">Non-degree courses</a></li><li><a href="https://www.st-andrews.ac.uk/subjects/entry/indicator">Qualification indicator</a></li><li><a href="/subjects/study-options/">Study options</a></li>		</ul>
//  </div>
// </nav>';
    // $nav_remove = str_replace(' ', '', $nav);

    // $nav_replace = '';

    $dpl1_error = '<link href="https://archive.st-andrews.ac.uk/~cdn/dpl/1.27.4/styles/screen.css" rel="stylesheet" type="text/css" media="screen" />';
    $dpl2_error = '<link href="https://archive.st-andrews.ac.uk/~cdn/dpl/1.27.4/styles/print.css" rel="stylesheet" type="text/css" media="print" />';
    $dpl1_fix = '<link href="https://www.st-andrews.ac.uk/~cdn/dpl/1.27.4/styles/screen.css" rel="stylesheet" type="text/css" media="screen" />';
    $dpl2_fix = '<link href="https://www.st-andrews.ac.uk/~cdn/dpl/1.27.4/styles/screen.css" rel="stylesheet" type="text/css" media="print" />';
    // $remove_reg_int_btn = '<a class="btn btn-action-secondary" href="https://st-andrews.ac.uk/study/register/">Register your interest</a>';





   $content = str_replace('<body>', $banner, $content);
   $content = str_replace($old_base, $new_base, $content);
   $bc_archive_target = '<li><a href="/subjects/archive/">Archive</a></li>';
   $bc_archive_replace = '<li><a href="https://archive.st-andrews.ac.uk/courses/">Archive</a></li><li><a href="../../index.html">2023-2024</a></li>';
   $content = str_replace($bc_archive_target, $bc_archive_replace, $content);

  //  $bc_archive_target = '<li><a href="/subjects/archive/">Archive</a></li>';
  //  $bc_archive_replace = '<li><a href="https://archive.st-andrews.ac.uk/courses/">Archive</a></li>';
  //  $content = str_replace($bc_archive_target, $bc_archive_replace, $content);

   $bc_level_target = '<li><a href="/subjects/archive/postgraduate/">Postgraduate</a></li>';
   $bc_level_replace = '<li><a href="../index.html">Postgraduate</a></li>';
   $content = str_replace($bc_level_target, $bc_level_replace, $content);

    //$content = str_replace($nav_remove, $nav_replace, $content);
    //$content = str_replace($footer, $nav_remove, $content);
    $content = str_replace($old_server, $server, $content);
    $content = str_replace($dpl1_error, $dpl1_fix, $content);
    $content = str_replace($dpl2_error, $dpl2_fix, $content);
    //$content = str_replace($remove_reg_int_btn, '', $content);


    // <script>
    //   for (let el of document.querySelectorAll('.btn')) el.style.visibility = 'hidden';
    //   for (let el of document.querySelectorAll('.btn .btn-action-secondary')) el.style.visibility = 'hidden';
    // </script> 



   //file_put_contents($file, $content);
   // echo $key . '<br>';
    //$length = count($links);
    //echo $length;
  } else {
    exit();
  }
}

echo 'process complete';
