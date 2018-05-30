<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$authors = ["Charles Dickens", "Jane Austion", "William Shakespeare", "Mark Twain", "Louisa May Alcott"];
//$authors = [];
$count = count($authors);

if($count > 0)
{
    echo "There are a totol of ".$count." author(s).";
}
 else 
{
    echo "There are no authors";
}