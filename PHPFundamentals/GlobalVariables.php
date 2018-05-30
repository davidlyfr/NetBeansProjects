<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$authorName = "William I am";

function setAuthorName()
{
    global $authorName;
    $authorName = "Charles the Duck";
}

setAuthorName();

echo $authorName;
?>
