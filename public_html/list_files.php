//<?php
//function list_files($dir) {
//    $files = [];
//    $items = scandir($dir);
//    foreach ($items as $item) {
//        if ($item == '.' || $item == '..') continue;
//        $path = $dir . DIRECTORY_SEPARATOR . $item;
 //       if (is_dir($path)) {
 //           $files = array_merge($files, list_files($path));
   //     } else {
//            $files[] = $path;
//        }
//    }
//    return $files;
//}
//
//$start_dir = '/home/u939983265/domains/ratemycheergym.com/public_html';
//$files = list_files($start_dir);
//
//echo "<h1>Files in Directory</h1><ul>";
//foreach ($files as $file) {
//    echo "<li>" . $file . "</li>";
//}
//echo "</ul>";
//?>
