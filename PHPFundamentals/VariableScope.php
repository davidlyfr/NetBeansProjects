<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$authorName = "William Shakespere";

function setAuthorName()
{
    $authorName = "Charles Dickens";
    return $authorName;
    
}

echo $authorName;
echo "\n";

$authorName = setAuthorName();
echo $authorName;


?>