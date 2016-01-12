<?php

/**
 * Class Home
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */
class Manager extends Controller
{
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/home/index (which is the default page btw)
     */
    public function index()
    {
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/manager/index.php';
        require APP . 'view/_templates/footer.php';
    }
    public function sucessfull()
    {
         require APP . 'view/_templates/header.php';
        require APP . 'view/manager/sucessfull.php';
        require APP . 'view/_templates/footer.php';
    }
    
    public function addmanager()
    {
        // var_dump( $_POST['manager']);
        // die('thi'); 


       if (isset($_POST["submit_add_manager"])) 
        {

    
            extract($_POST);
            //$first_name=$_POST['firstname'];
            // $last_name=$_POST['lastname'];
            // $gender=$_POST['gender'];
            //  $address=$_POST['address'];
            //   $contact_number=$_POST['phone'];
            //    $email=$_POST['email'];
          $storepassword=password_hash( $password,PASSWORD_BCRYPT, array('cost'=> 10));
         $image=$_FILES['image']['name'];
            //    $user_type=$_POST['user_type'];
           
        
         $this->model->addmanager($_POST["firstname"], $_POST["lastname"],$_POST["gender"],$_POST["address"],$_POST["phone"],$_POST["email"],$storepassword,$image,$_POST["user_type"]);

                     
            
        }
         header('location: ' . URL . 'manager/sucessfull');
    }


        // where to go after song has been added
       
                 
}

    

    /**
     * PAGE: exampleone
     * This method handles what happens when you move to http://yourproject/home/exampleone
     * The camelCase writing is just for better readability. The method name is case-insensitive.
     */
    


 
 