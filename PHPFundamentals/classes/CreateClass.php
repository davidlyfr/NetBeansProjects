<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Person
{
    public $firstname = "David Francis";
    public $lastname = "lynch";
    public $yearBorn = 1973;
    
}

$myObject = new Person();

echo $myObject->firstname."\n";

$myObject->firstname = "Paul";

echo $myObject->firstname."\n";