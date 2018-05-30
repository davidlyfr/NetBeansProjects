<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$authors = [
    "mal" => array(
        "charles dicken" => array("a christmas", "twist"),
        "william" => array("romeo", "richard"),
        "mark" => array("tom", "huck")
    ),
    "Female" => array(
        "mongomery" => array("ann", "avonlea"),
        "louisa" => array("little")
    )
];

//print_r($authors["mal"]);
//print_r($authors["mal"]["mark"]);
print_r($authors["mal"]["mark"][0]);