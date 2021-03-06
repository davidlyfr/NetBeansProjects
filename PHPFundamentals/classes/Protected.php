<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Person
{
    const AVG_LIFE_SPAN = 79;
    
    protected $firstName;
    public $lastName;
    public $yearBorn;
    
    function __construct($tempFirst = "", $tempLast = "", $tempYear = "") 
    {
        echo "Person Consturct".PHP_EOL;
        $this->firstName = $tempFirst;
        $this->lastName = $tempLast;
        $this->yearBorn = $tempYear;
    }
    
    public function getFirstName()
    {
        return $this->firstName.PHP_EOL; // instead of "\n"
    }
    
    public function setFirstName($tempName)
    {
       $this->firstName = $tempName; 
    }
    
    public function getFullName()
    {
        echo "Person->getFullName()".PHP_EOL;
        return $this->firstName." ".$this->lastName.PHP_EOL;
    }
}

class Author extends Person
{
    protected $penName = "Mark Twain";
    
    public function getPenName() 
    {
        return $this->penName.PHP_EOL;
    }
    
    public function getCompleteName()
    {
        return $this->firstName." ".$this->lastName." a.k.a ".$this->penName.PHP_EOL;
    }
}
$newAuthor = new Author("David", "Lynch", 1973);
echo $newAuthor->getFullName();
echo $newAuthor->getCompleteName();