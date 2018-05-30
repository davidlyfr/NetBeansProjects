<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$authors = array(
    "Charles Dick", 
    "Jane Austin", 
    "William Tell",
    "Louisa May Alcott"
    );

// pop removes the last item
print_r($authors);

$lastValue = array_pop($authors);

print_r($authors);
echo $lastValue;