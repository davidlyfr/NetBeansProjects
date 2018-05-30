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

    print_r($authors);
    
    unset($authors[2]);
    
    print_r($authors);
    unset($authors);
$authors = array(
    "Charles Dick", 
    "Jane Austin", 
    "William Tell",
    "Louisa May Alcott"
    );
    //print_r($authors);
    unset($authors[3], $authors[1]);
    print_r($authors);
    
unset($authorsAssociative['poetic']);
print_r($authorsAssociative);