<?php
/**
 * Created by PhpStorm.
 * User: sstienface
 * Date: 04/12/2018
 * Time: 11:25
 */

function Writemsg()

{
    echo "Hello World!";
}




//Deuxieme ligne

Writemsg();



//Troisieme ligne

function maFonctionParam($fname, $lname) {
    echo $fname;
    return $lname;
}


maFonctionParam("machin", "coucou");


