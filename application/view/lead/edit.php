
<div class="container">
<form  role="form"  id="lead_update" action="<?php echo URL; ?>lead/updatelead"  method="post" enctype="multipart/form-data">
<div class="form-group">
    <label for="firstname">First_Name</label>
    <input name="firstname" type="text" id="firstname" value="<?php echo htmlspecialchars($lead->firstname, ENT_QUOTES, 'UTF-8'); ?>" >
  </div>
  <div class="form-group">
    <label for="lastname">Last_Name</label>
    <input name="lastname"  id="lastname" value="<?php echo htmlspecialchars($lead->lastname, ENT_QUOTES, 'UTF-8'); ?>" >
    
  </div>

   <div class="form-group">
  <label for="select">Gender:</label>
  <select name="gender" id="sel1" type="gender">
<option value="male" <?php echo ($lead->gender == 'male') ? 'selected="selected"' : ''; ?>>Male</option>
<option value="female" <?php echo ($lead->gender == 'female') ? 'selected="selected"' : ''; ?>>Female</option>
</select>
</div>
<div class="form-group">
    <label for="address">Address</label>
    <input type="text" name="address"  id="address" value="<?php echo htmlspecialchars($lead->address, ENT_QUOTES, 'UTF-8'); ?>" >
  </div>
  <div class="form-group">
    <label for="phone">Phone</label>
    <input  name="phone"  id="phone" value="<?php echo htmlspecialchars($lead->phone, ENT_QUOTES, 'UTF-8'); ?>" >
  </div>

  
  <div class="form-group">
    <label for="email">Email address:</label>
    <input name="email" size="50" id="email" value="<?php echo htmlspecialchars($lead->email, ENT_QUOTES, 'UTF-8'); ?>" >
  </div>
  <div class="form-group">
  <label for="select">faculty:</label>
  <select  name="faculty"  id="faculty" type="text">
  <option value="BBA" <?php echo ($lead->faculty == 'BBA') ? 'selected="selected"' : ''; ?>>BBA</option>
<option value="IT" <?php echo ($lead->faculty == 'IT') ? 'selected="selected"' : ''; ?>>IT</option>
<option value="O$Alevel" <?php echo ($lead->faculty == 'O$Alevel') ? 'selected="selected"' : ''; ?>>O$ALevel</option>
  </select>
</div>
<div class="form-group">
  <label for="select">Status:</label>
  <select  name="status"  id="status" type="text">

    <option value="Actve" <?php echo ($lead->status == 'Actve') ? 'selected="selected"' : ''; ?>>Active</option>
    <option value="Dismissed" <?php echo ($lead->status == 'Dismissed') ? 'selected="selected"' : ''; ?>>Dismissed</option>
    <option value="Expired" <?php echo ($lead->status == 'Expired') ? 'selected="selected"' : ''; ?>>Expired</option>
    <option value="Postponed" <?php echo ($lead->status == 'Postponed') ? 'selected="selected"' : ''; ?>>Postponed</option>
  </select>
</div>
 
<div class="form-group">
  <label for="select">Sesion:</label>
  <select  name="session"  id="session1" type="text">
    <option value="autum" <?php echo ($lead->session == 'autum') ? 'selected="selected"' : ''; ?>>Autum</option>
    <option value="spring" <?php echo ($lead->session == 'spring') ? 'selected="selected"' : ''; ?>>Spring</option>
  </select>
</div>
<div class="form-group">
  <input name="user_type" type="hidden" id="student" value="student">
 
  </div>
  <input name="lead_id" type="hidden" id="student" value="<?php echo $lead->lead_id; ?>">
  <button type="submit" class="btn btn-default" name="submit_update_lead"  value="submit">Submit</button>
</form>
</div>
