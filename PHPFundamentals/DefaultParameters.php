<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function booksByAuthorYear($temAuthorName = "Paul", $tempYear = 1870)
{
    echo $tempYear;
    echo "\n";
    echo "$temAuthorName";
    echo "\n";
}

function getAuthor()
{
    return "Charles Dickens";
}

$year = 1920;
$authorName = getAuthor();

booksByAuthorYear($authorName, $year);