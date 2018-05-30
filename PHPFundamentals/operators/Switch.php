<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$authors = ["Charles Dickens", "Jane Austion", "William Shakespeare", "Mark Twain", "Louisa May Alcott"];
//$authors = ["David Lynch"];
//$authors = [];
$count = count($authors);

//if($count > 1)
//{
//    echo "There are a totol of ".$count." author(s).";
//}
//elseif ($count == 1) 
//    {
//    echo "There are a totol of ".$count." author.";
//    }

//else 
//{
//   echo "There are no authors";
//}

//switch ($count)
//{
//    case 0:
//        echo "There are no authors in our list.".PHP_EOL;
//        break;
//    case 1:
//        echo "There is 1 author.".PHP_EOL;
//        break;
//    default:
//        echo "There are a totol of ".$count." authors in our list.".PHP_EOL;
//}

switch (5 <=> 7) // is the f less than, equal to or greater than
{
    case 1:
        echo "Greater Than";
        break;
    case 0:
        echo "Equal";
        break;
    case -1:
        echo "Less Than";
        break;
}