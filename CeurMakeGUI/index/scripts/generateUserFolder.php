<?php

function recurse_copy($src,$dst) {
    $dir = opendir($src);
    @mkdir($dst);
    while(false !== ( $file = readdir($dir)) ) {
        if (( $file != '.' ) && ( $file != '..' )) {
            if ( is_dir($src . '/' . $file) ) {
                recurse_copy($src . '/' . $file,$dst . '/' . $file);
            }
            else {
                copy($src . '/' . $file,$dst . '/' . $file);
            }
        }
    }
    closedir($dir);
}

$sourceFolderName = 'output';

$folderName = uniqid(gethostname());
$fullFolderName = "userDirectories/".$folderName;
mkdir($fullFolderName, 0777);

recurse_copy($sourceFolderName, $fullFolderName."/output");

echo $folderName;

?>
