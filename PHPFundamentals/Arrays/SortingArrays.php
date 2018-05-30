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
$authorsAssociative = array(
        "quarky" => "Charles Dickens",
        "brilliant" => "Jane plain",
        "dogs" => "Will I am"
);

//sort($authors);
//print_r($authors);
//sort($authorsAssociative);
//print_r($authorsAssociative); // loose keys for indexed array

//asort($authorsAssociative);
//print_r($authorsAssociative); // keeps keys and sorts values

ksort($authorsAssociative); // sorts keys
print_r($authorsAssociative);