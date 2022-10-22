<?php
// показывает файлы директории
foreach (new DirectoryIterator(/* dir name */) as $showFile) {
    if($showFile->isDot()) continue;
    echo $showFile->getFilename() . "<br>\n";
}

?>

