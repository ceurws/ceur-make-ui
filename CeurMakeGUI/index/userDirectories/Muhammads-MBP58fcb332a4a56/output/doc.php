<?php
header('Content-type: application/json');
$json = file_get_contents('php://input');
$array = json_decode($json, true);

$output = array();
$exitCode = null;

$joutput = shell_exec('sudo make ceur-ws/index.html');
echo exec("make ceur-ws/temp.bib", $output, $exitCode);


?>
