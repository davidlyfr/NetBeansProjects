<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$quote = "It is a melancholy truth that even grate men have their poor reations.";
 // takes variable and creates an array
$varArray = str_split($quote);

print_r($varArray);

$varArray = str_split($quote, 8);

print_r($varArray);