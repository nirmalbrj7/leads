<?php

/**
 * Class Songs
 * This is a demo class.
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */
class Follow extends Controller
{
    
public function addfolow()
    {
        // getting all songs and amount of songs
       
       

       // load views. within the views we can echo out $songs and $amount_of_songs easily
        require APP . 'view/_templates/header.php';
        require APP . 'view/follow/index.php';
        require APP . 'view/_templates/footer.php';
    }

     





 }


?>

