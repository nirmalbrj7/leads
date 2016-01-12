<?php

/**
 * Class Home
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */
class Login extends Controller
{

public function index()
    {
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/login/login.php';
        require APP . 'view/_templates/footer.php';
    }

public function userlogin($email,$password){

if (isset($_Post['submit_login'])) {


	
}

}
}