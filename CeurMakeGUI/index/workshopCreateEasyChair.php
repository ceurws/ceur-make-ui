<?php

header('Content-type: application/json');
$json = file_get_contents('php://input');
$array = json_decode($json, true);

//root node element
$newsXML = new SimpleXMLElement("<workshop></workshop>");
//metadata
Header('Content-type: text/xml');

$pathFileName = $array[0]['fileName'] ;
//creating xmlWorkshop
$myfile = fopen("easyChair/".$pathFileName."/output/workshop.xml", "w") or die("Unable to open file!");


foreach($array as $value )
{
    //creating the title node
    $title = $newsXML->addChild('title');
    
    //creating the child nodes of title
    $title->addChild('id' , $value['title']['id']);
    $title->addChild('acronym', $value['title']['acronym']);
    $title->addChild('volume', $value['title']['volume']);
    $title->addChild('full', $value['title']['full'] );
        
    //creating other child nodes that have no further childs
    $newsXML->addChild('number', $value['number']) ;
    $newsXML->addChild('homepage', $value['homepage']) ;
    $newsXML->addChild('language', $value['language']) ;
    $newsXML->addChild('location', $value['location']) ;
    $newsXML->addChild('date', $value['date']) ;

    //creating the conference node and its elements
    $conference = $newsXML->addChild('conference') ;
    
    $conference->addChild('acronym',$value['conference']['acronym']);
    $conference->addChild('full',$value['conference']['full']);
    $conference->addChild('homepage',$value['conference']['homepage']);

    //traversing the editors node and creating parent node
    $editors = $newsXML->addChild('editors') ;
    
    foreach( $value['editors'] as $temp )
    {
       $editor = $editors->addChild('editor');
        
       $editor->addChild('name', $temp['name']) ;
       $editor->addChild('affiliation', $temp['affiliation']) ;
       $editor->addChild('country', $temp['country']) ;
       $editor->addChild('homepage', $temp['homepage']) ;

    }

    echo $value['editors'] ;

}

//storing variable as xml
$txt = $newsXML->asXML();
//writing to the opened file
fwrite($myfile, $txt);
//closing file
fclose($myfile);


?>