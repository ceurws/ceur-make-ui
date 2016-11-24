<?php


header('Content-type: application/json');
$json = file_get_contents('php://input');
 
$array = json_decode($json, true);

function chownr($path, $owner)
{
    if (!is_dir($path))
        return chown($path, $owner);
 
    $dh = opendir($path);
    while (($file = readdir($dh)) !== false)
	{
        if($file != '.' && $file != '..')
		{
            $fullpath = $path.'/'.$file;
            if(is_link($fullpath))
                return FALSE;
            elseif(!is_dir($fullpath) && !chown($fullpath, $owner))
                    return FALSE;
            elseif(!chownr($fullpath, $owner))
                return FALSE;
        }
    }
 
    closedir($dh);
 
    if(chown($path, $owner))
        return TRUE;
    else
        return FALSE;
}


function chmod_r($Path) {
    $dp = opendir($Path);
     while($File = readdir($dp)) {
       if($File != "." AND $File != "..") {
         if(is_dir($File)){
            chmod($File, 0777);
            chmod_r($Path."/".$File);
         }else{
             chmod($Path."/".$File, 0777);
         }
       }
     }
   closedir($dp);
}

$fileName=$array['fileName'];
$session=$array['sessions'];

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

function Delete($path)
{
    if (is_dir($path) === true)
    {
        $files = array_diff(scandir($path), array('.', '..'));

        foreach ($files as $file)
        {
            Delete(realpath($path) . '/' . $file);
        }

        return rmdir($path);
    }

    else if (is_file($path) === true)
    {
        return unlink($path);
    }

    return false;
}

/* Source directory (can be an FTP address) */
$src = "easyChair/".$fileName."/";

/* Full path to the destination directory */
$dst = "easyChair/".$session."/output";
 
recurse_copy($src,$dst);
Delete($src) ;

$delExtra = "easyChair/__MACOSX/";
Delete($delExtra) ;

$path="/Applications/XAMPP/xamppfiles/htdocs/ceur-make-ui/ceurMakeGUI/index/easyChair/".$session."/output/" ;
chownr($path,"everyone");
$dir = opendir($path);
//chmod_r("easyChair/".$session."/output/",0777,0777);
chmod_r(dirname($path));

chdir("easyChair/".$session."/output");

if(function_exists('exec')) {
echo "exec is enabled";
}

$output = array();
$exitCode = null;

echo exec("make toc.xml 2>&1", $output, $exitCode);

//echo exec("make ceur-ws/index.html 2>&1", $output, $exitCode);
var_dump($output);

echo $fileName.$session;

?>