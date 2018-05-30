<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$authors = ["Charles Dickens", "Jane Austion", "William Shakespeare", "Mark Twain", "Louisa May Alcott"];
//$authors = ["David Lynch"];
//$authors = [];
$count = count($authors);

//$outcome = $count ?? "count unavilable"; // has data been set
//echo $outcome;

$outcome = $countone ?? $newvariable ?? $count ?? "count unavilable"; // has data been set chain
echo $outcome;

