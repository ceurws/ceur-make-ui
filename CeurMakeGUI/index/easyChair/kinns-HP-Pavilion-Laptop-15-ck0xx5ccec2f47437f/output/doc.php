<?php
header('Content-type: application/json');
$json = file_get_contents('php://input');
$array = json_decode($json, true);

$output = array();
$exitCode = null;
$exitCodeTwo = null;

$joutput = shell_exec(' make ceur-ws/index.html');
$exitCode = shell_exec(' make ceur-ws/temp.bib');
$exitCodeTwo = shell_exec(' make zip');

?>
