<?php

header('Content-type: application/json');
$json = file_get_contents('php://input');

$array = json_decode($json, true);

$newsXML = new SimpleXMLElement("<toc></toc>");
$sessionName = $array['title'] ;

Header('Content-type: text/xml');
$myfile = fopen("userDirectories/".$sessionName."/output/toc.xml", "w") or die("Unable to open file!");

foreach($array['sessions'] as $value )
{
    $newsSession = $newsXML->addChild('session');
    $newsTitle = $newsSession->addChild('title',$value['title'] ) ;

    foreach ( $value['paper'] as $paper )
    {
        $newsPaper = $newsSession->addChild('paper');
        $newsPaper->addChild('title',$paper['title']);
        $pages = $newsPaper->addChild('pages');
        $pages->addAttribute('from', $paper['pageFrom']);
        $pages->addAttribute('to', $paper['pageTo']);

        foreach( $paper['authors'] as $authors )
        {
            $newsPaper->addChild('authors', $authors);

        }
    }
}

$txt = $newsXML->asXML();
fwrite($myfile, $txt);

fclose($myfile);


?>
