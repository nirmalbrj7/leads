<?php

class Model
{
    /**
     * @param object $db A PDO database connection
     */
    function __construct($db)
    {
        try {
            $this->db = $db;
        } catch (PDOException $e) {
            exit('Database connection could not be established.');
        }
    }

    /**
     * Get all songs from database
     */

    /**
     * Add a song to database
     * TODO put this explanation into readme and remove it from here
     * Please note that it's not necessary to "clean" our input in any way. With PDO all input is escaped properly
     * automatically. We also don't use strip_tags() etc. here so we keep the input 100% original (so it's possible
     * to save HTML and JS to the database, which is a valid use case). Data will only be cleaned when putting it out
     * in the views (see the views for more info).
     * @param string $artist Artist
     * @param string $track Track
     * @param string $link Link
     */

    
    public function addmanager($firstname, $lastname, $gender,$address,$phone,$email,$password,$image,$user_type)
    { 
        $sql = "INSERT INTO user (firstname, lastname, gender,address,phone,email,user_type) 
        VALUES (:firstname, :lastname, :gender,:address,:phone,:email,:user_type)";
        $query = $this->db->prepare($sql);
        $parameters = array(':firstname'=> $firstname, ':lastname'=> $lastname, ':gender'=> $gender,':address'=> $address,':phone'=> $phone,':email'=> $email,':user_type'=> $user_type);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();
        $query->execute($parameters);
        $id=$this->db->lastInsertId();
        
         $sql1="INSERT INTO manager (password, image,user_id) 
        VALUES (:password, :image,:user_id)";
      $stmt=$this->db->prepare($sql1);
     $stmt->bindValue( ':password', $password, PDO::PARAM_INT );
      $stmt->bindValue( ':image', $image, PDO::PARAM_INT );
      $stmt->bindValue( ':user_id', $id, PDO::PARAM_INT );
      $parameters = array(':password'=> $password, ':image'=> $image,':user_id'=> $id);

       $stmt->execute($parameters);
        
    }
  


     public function addlead($firstname, $lastname, $gender,$address,$phone,$email,$user_type,$faculty,$status,$session)
    { 
        $sql = "INSERT INTO user (firstname, lastname, gender,address,phone,email,user_type) 
        VALUES (:firstname, :lastname, :gender,:address,:phone,:email,:user_type)";
        $query = $this->db->prepare($sql);
        $parameters = array(':firstname'=> $firstname, ':lastname'=> $lastname, ':gender'=> $gender,':address'=> $address,
            ':phone'=> $phone,':email'=> $email,':user_type'=> $user_type);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();ggggggg

        $query->execute($parameters);
        $id=$this->db->lastInsertId();
        
      
      $sql1="INSERT INTO lead (faculty, status, session,user_id) 
        VALUES (:faculty, :status,:session,:user_id)";
      $stmt=$this->db->prepare($sql1);
     $stmt->bindValue( ':faculty', $faculty, PDO::PARAM_INT );
      $stmt->bindValue( ':status', $status, PDO::PARAM_INT );
      $stmt->bindValue( ':session', $session, PDO::PARAM_INT );
      $stmt->bindValue( ':user_id', $id, PDO::PARAM_INT );
      $parameters = array(':faculty'=> $faculty, ':status'=> $status, ':session'=> $session,':user_id'=> $id);

       $stmt->execute($parameters);

    } 
   
    public function getlead($lead_id)
    {
        $sql = "SELECT USER.user_id, user.firstname,user.lastname,user.gender,user.address,user.phone,user.email,lead.lead_id,lead.faculty,lead.status,lead.session FROM user INNER JOIN lead ON user.user_id=lead.user_id where lead_id = :lead_id LIMIT 1";
        $query = $this->db->prepare($sql);
        $parameters = array(':lead_id' => $lead_id);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);


        // fetch() is the PDO method that get exactly one result
        return $query->fetch();
    }
     public function getAlllead()
    {
        $sql = "SELECT USER.user_id, user.firstname,user.lastname,user.gender,user.address,user.phone,user.email,lead.lead_id,lead.faculty,lead.status,lead.session FROM user INNER JOIN lead ON user.user_id=lead.user_id";
        $query = $this->db->prepare($sql);
        $query->execute();

        // fetchAll() is the PDO method that gets all result rows, here in object-style because we defined this in
        // core/controller.php! If you prefer to get an associative array as the result, then do
        // $query->fetchAll(PDO::FETCH_ASSOC); or change core/controller.php's PDO options to
        // $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC ...
        return $query->fetchAll();
    }
     public function getAmountlead()
    {
        $sql = "SELECT COUNT(lead_id) AS amount_of_leads FROM lead";
        $query = $this->db->prepare($sql);
        $query->execute();



        // fetch() is the PDO method that get exactly one result
        return $query->fetch()->amount_of_leads;
    }

    


   public function updateLeadAndUser($userPostKey , $leadPostkey, $lead_id){
        
        $updateLeadQuery = "UPDATE lead SET ";
        
        $leadParam = [];
        
        foreach ( $leadPostkey as $column ) {
        
           $updateLeadQuery.= $column . '=:'.$column . ',';
        
           $leadParam[":".$column] = $_POST[$column];
        }

        $updateLeadQuery = substr($updateLeadQuery, 0,strlen($updateLeadQuery)-1);

        $updateLeadQuery .= " WHERE lead_id=".$lead_id;

        $leadQuery = $this->db->prepare($updateLeadQuery);

        $leadQuery->execute($leadParam);
        


        $leadUserSql = "SELECT user_id FROM lead WHERE lead_id = '$lead_id'";

        $leadUserQuery = $this->db->prepare($leadUserSql);

        $leadUserQuery->execute();

        $userId = $leadUserQuery->fetch()->user_id;

        $updateUserQuery = "UPDATE user SET ";
        
        $userParam = [];
        
        foreach ( $userPostKey as $column ) {
        
           $updateUserQuery.= $column . '=:'.$column . ',';
        
           $userParam[":".$column] = $_POST[$column];
        }

        $updateUserQuery = substr($updateUserQuery, 0,strlen($updateUserQuery)-1);

        $updateUserQuery .= " WHERE user_id=".$userId;

        $leadQuery = $this->db->prepare($updateUserQuery);

        $leadQuery->execute($userParam);


    }
     public function addfollowup($followup_type,$lead_id)
    { 

     $sql = "INSERT INTO followup (followup_type,lead_id)   VALUES (:followup_type,:lead_id)";
       $query = $this->db->prepare($sql);
      $parameters = array(':followup_type'=> $followup_type, ':lead_id'=> $lead_id);

     //    // useful for debugging: you can see the SQL behind above construction by using:
     //    // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();ggggggg

      $query->execute($parameters);
      $id=$this->db->lastInsertId();
        
      
     $sql1="INSERT INTO lead (follow_id) 
      VALUES (:$id)";
     $stmt=$this->db->prepare($sql1);
     $stmt->bindValue( ':follow_id', $id, PDO::PARAM_INT );
     //  $stmt->bindValue( ':status', $status, PDO::PARAM_INT );
     //  $stmt->bindValue( ':session', $session, PDO::PARAM_INT );
     //  $stmt->bindValue( ':user_id', $id, PDO::PARAM_INT );
      $parameters1= array(':follow_id'=> $id);
 
      $stmt->execute($parameters1);
    } 
    public function totalfollowup($lead_id)
    {
        $sql = "SELECT COUNT(lead_id) AS Total_followup FROM followup where lead_id='$lead_id'";
        $query = $this->db->prepare($sql);
        $query->execute();

        // fetch() is the PDO method that get exactly one result
        return $query->fetch()->Total_followup;

    }

}

// SELECT USER.user_id, user.firstname,user.lastname,user.gender,user.address,user.phone,user.email,user.user_type,lead.faculty,lead.status,lead.session,lead.user_id,lead.counselor_id,lead.follow_id
// FROM user
// INNER JOIN lead
// ON user.user_id=lead.user_id;

