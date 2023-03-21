<?php

// $dir = public_path('img/');
    // $files = glob("img/" . '*.*');
    $dir = new DirectoryIterator("img/");
    
       
     $i = 0;
    foreach ($dir as $fileinfo) {
        echo  $i++. "    -------    " .strlen($fileinfo->getFilename()) . "    -------    " .$fileinfo->getFilename(). "<br>";
    }

?>