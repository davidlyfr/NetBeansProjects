<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$readingIsFun = true;
$authors = ["Charles Dickens", "Jane Austion", "William Shakespeare", "Mark Twain", "Louisa May Alcott"];
$count = count($authors);

if($count > 0):
    echo "There is a total of ".$count." author(s).".PHP_EOL;
else :
    echo "There are no authors".PHP_EOL;
endif;

while($readingIsFun):
    echo "Reading is fun!".PHP_EOL;
    $readingIsFun = false;
endwhile;

for($i = 1; $i <= 5; $i++):
    echo "Reading is funner now!".PHP_EOL;
endfor;