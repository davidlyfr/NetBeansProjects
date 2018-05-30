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

    array_push($authors, "David F Lynch");
    array_push($authors, "David L Lynch"); // adds to next index
    
    $authors[] = "last name"; // preferred - creates if not existing
    $authors['key-value'] = "key name";
    print_r($authors);