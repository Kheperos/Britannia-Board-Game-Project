<?php
$myfile = fopen("Map_Coord.txt", "w") or die("Unable to open file!");
$x = $_REQUEST["x"];
$y = $_REQUEST["y"];
fwrite($myfile, $x);
fwrite($myfile,' , ');
fwrite($myfile, $y);
fwrite($myfile, "\n");
echo "Corina" ;
fclose($myfile);
?>