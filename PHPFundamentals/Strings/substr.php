<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$quote = "Only those who risk going too far can possibly find out how far one can go.";

echo substr($quote, 4); // starts at char 4
echo "\n";
echo substr($quote, -11); // starts at 11 from end and prints what remains
echo "\n";
echo substr($quote, 10, 10); // starts at 10 for 10 characters
echo "\n";
echo substr($quote, 10, -5); // starts at 10 and stops 5 short of end