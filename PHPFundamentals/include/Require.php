<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include 'Person.php';
include_once 'Author.php';
require 'does-not-exits.php';

$newAuthor = new Author("Samuel Langhorn", "Clemens", 1899);
echo $newAuthor->getCompleteName();