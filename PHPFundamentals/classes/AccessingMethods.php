<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Person
{
    const AVG_LIFE_SPAN = 79;
    
    public $firstname = "David Francis";
    public $lastname = "lynch";
    public $yearBorn = 1973;
    
    public function getFirstName()
    {
        return $this->firstname;
    }
    
    public function setFirstName($tempName)
    {
       $this->firstname = $tempName; 
    }
    
}

$myObject = new Person();

$myObject->setFirstName("Hope");

echo $myObject->getFirstName;
