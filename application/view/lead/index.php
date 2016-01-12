
<div class="container">
<form  role="form"  id="lead_registration" action="<?php echo URL; ?>lead/addlead"  method="post" enctype="multipart/form-data">
<div class="form-group">
    <label for="firstname">First_Name</label>
    <input name="firstname" type="text" id="firstname">
  </div>
  <div class="form-group">
    <label for="lastname">Last_Name</label>
    <input name="lastname"  id="lastname">
    
  </div>
   <div class="form-group">
  <label for="select">Gender:</label>
  <select  name="gender"  id="sel1" type="gender">
    <option>Male</option>
    <option>Female</option>
  </select>
</div>

<div class="form-group">
    <label for="address">Address</label>
    <input type="text" name="address"  id="address">
  </div>
  <div class="form-group">
    <label for="phone">Phone</label>
    <input  name="phone"  id="phone">
  </div>
  
  <div class="form-group">
    <label for="email">Email address:</label>
    <input name="email" size="50" id="email">
  </div>
  <div class="form-group">
  <label for="select">faculty:</label>
  <select  name="faculty"  id="faculty" type="text">
    <option value="BBA">BBA</option>
    <option value="IT">IT</option>
    <option value="olevel">O$A Levels</option>
  </select>
</div>
 <input name="user_type" type="hidden" id="status" value="student">
<div class="form-group">
  <label for="select">Sesion:</label>
  <select  name="session"  id="session1" type="text">
    <option value="Autum">Autum</option>
    <option value="Spring">Spring</option>
  </select>
</div>
<div class="form-group">
  <input name="status" type="hidden" id="status" value="Active">
 
  </div>
  <button type="submit" class="btn btn-default" name="submit_add_lead"  value="submit">Submit</button>
</form>
</div>
<div class="container">

 <div class="box">
        <h3>Amount of lead (data from second model)</h3>
        <div>
            <?php echo $amount_of_leads; ?>
        </div>
      
        <table>
            <thead style="background-color: #ddd; font-weight: bold;">
            <tr>
                <td>lead_id</td>
                <td>user_id</td>
                <td>firstname</td>
                <td>lastname</td>
                <td>Gender</td>
                <td>Address</td>
                <td>Phone</td>
                <td>Email</td>
                <td>Faculty</td>
                <td>status</td>
                <td>session</td>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($leads as $lead) { ?>
                <tr>
                    <td><?php if (isset($lead->lead_id)) echo htmlspecialchars($lead->lead_id, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($lead->user_id)) echo htmlspecialchars($lead->user_id, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($lead->firstname)) echo htmlspecialchars($lead->firstname, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($lead->lastname)) echo htmlspecialchars($lead->lastname, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($lead->gender)) echo htmlspecialchars($lead->gender, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($lead->address)) echo htmlspecialchars($lead->address, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($lead->phone)) echo htmlspecialchars($lead->phone, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($lead->email)) echo htmlspecialchars($lead->email, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($lead->faculty)) echo htmlspecialchars($lead->faculty, ENT_QUOTES, 'UTF-8'); ?></td>
                   <td><?php if (isset($lead->status)) echo htmlspecialchars($lead->status, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($lead->session)) echo htmlspecialchars($lead->session, ENT_QUOTES, 'UTF-8'); ?></td>
                  
                      

                    <td><a href="<?php echo URL . 'lead/deletelead/' . htmlspecialchars($lead->lead_id, ENT_QUOTES, 'UTF-8'); ?>">delete</a></td>
                    <td><a href="<?php echo URL . 'lead/editslead/' . htmlspecialchars($lead->lead_id, ENT_QUOTES, 'UTF-8'); ?>">edit</a></td>
                    <td><a href="<?php echo URL . 'lead/addfollow/' . htmlspecialchars($lead->lead_id, ENT_QUOTES, 'UTF-8'); ?>">follow</a></td>
                    <td><a href="<?php echo URL . 'lead/viewlead/' . htmlspecialchars($lead->lead_id, ENT_QUOTES, 'UTF-8'); ?>">View</a></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
    </div>