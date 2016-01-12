<?php

/**
 * Class Home
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */
class Lead extends Controller
{
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/home/index (which is the default page btw)
     */
    public function index()
    {
        // load views
        $leads = $this->model->getAlllead();
        $amount_of_leads = $this->model->getAmountlead();

        require APP . 'view/_templates/header.php';
        require APP . 'view/lead/index.php';
        require APP . 'view/_templates/footer.php';
    }
    public function addlead()
    {
       

        if (isset($_POST["submit_add_lead"])) 
        {
           
            $this->model->addlead($_POST["firstname"], $_POST["lastname"],$_POST["gender"],$_POST["address"],$_POST["phone"],$_POST["email"],$_POST["user_type"],$_POST["faculty"],$_POST["status"],$_POST["session"]);

                    
        }
         header('location: ' . URL . 'manager/sucessfull');
    }
    public function editslead($lead_id)
    {
       
       if (isset($lead_id)) { // if we have an id of a song that should be edited
           $lead = $this->model->getlead($lead_id);

            // do getSong() in model/model.php
           

            // in a real application we would also check if this db entry exists and therefore show the result or
            // redirect the user to an error page or similar

            // load views. within the views we can echo out $song easily
            require APP . 'view/_templates/header.php';
            require APP . 'view/lead/edit.php';
            require APP . 'view/_templates/footer.php';
           }
            else {
            // redirect user to songs index page (as we don't have a song_id)
            header('location: ' . URL . 'lead/index');
        }
        
    }
    public function addfollow($lead_id)
    {
       
       if (isset($lead_id)) { // if we have an id of a song that should be edited
           $lead = $this->model->getlead($lead_id);

            // do getSong() in model/model.php
           

            // in a real application we would also check if this db entry exists and therefore show the result or
            // redirect the user to an error page or similar

            // load views. within the views we can echo out $song easily
            require APP . 'view/_templates/header.php';
            require APP . 'view/lead/follow.php';
            require APP . 'view/_templates/footer.php';
           }
            else {
            // redirect user to songs index page (as we don't have a song_id)
            header('location: ' . URL . 'lead/index');
        }
        
    }
    public function sucessfull()
    {
         require APP . 'view/_templates/header.php';
        require APP . 'view/lead/updaet.php';
        require APP . 'view/_templates/footer.php';
    }
     public function updatelead()
    {
        // if we have POST data to create a new song entry
        if ( isset( $_POST["submit_update_lead"] ) ) {

            $userPostKey = ["firstname","lastname","gender","address","phone","email","user_type"];



            $leadPostKey = ["faculty","status","session"];


            $this->model->updateLeadAndUser($userPostKey,$leadPostKey, $_POST['lead_id']);

            // // do updateSong() from model/model.php
            //  $this->model->updatelead($_POST["firstname"], $_POST["lastname"],$_POST["gender"],$_POST["address"],$_POST["phone"],$_POST["email"],$_POST["user_type"],$_POST["faculty"],$_POST["status"],$_POST["session"],$_POST["lead_id"]);

        }

        // where to go after song has been added
        header('location: ' . URL . 'lead/sucessfull');
    }
    public function followup(){

 if ( isset( $_POST["submit_add_follow"] ) ) {

   

     $this->model->addfollowup($_POST["followup_type"], $_POST["lead_id"]);


     }
     header('location: ' . URL . 'lead/sucessfull');

    }
   public function viewlead($lead_id){ 
      
    $leads = $this->model->getlead($lead_id);


    $Total_followup=$this->model->totalfollowup($lead_id);


       require APP . 'view/_templates/header.php';
        require APP . 'view/lead/view.php';
        require APP . 'view/_templates/footer.php';

   }


    
}