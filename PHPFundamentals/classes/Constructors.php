<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Person
{
    const AVG_LIFE_SPAN = 79;
    
    public $firstName;
    public $lastName;
    public $yearBorn;
    
    function __construct() {
        $this->firstName = "David";
        $this->lastName = "Lynch";
        $this->yearBorn = 1973;
    }
    
    public function getFirstName()
    {
        return $this->firstName;
    }
    
    public function setFirstName($tempName)
    {
       $this->firstName = $tempName; 
    }
    
}

$myObject = new Person();
echo $myObject->getFirstName();