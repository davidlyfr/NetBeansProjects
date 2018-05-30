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

foreach($authors as $val)
{
    echo $val."\n";
}
echo "\n";
foreach($authorsAssociative as $key => $val)
{
    echo $val." (".$key.")\n";
}