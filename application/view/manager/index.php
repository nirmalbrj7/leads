
<div class="container">
<form  role="form"  id="manager_registration" action="<?php echo URL; ?>manager/addmanager"  method="post" enctype="multipart/form-data">
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
    <label for="lastname">Image</label>
    <input  type="file" name="image" size="30"  id="image">
    
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
    <label for="pwd">Password:</label>
    <input name="password" type="password" id="password">
  </div>
  <div class="form-group">
    <label for="password">confrom_password</label>
    <input type="password" name="cpassword" id="cpassword">
  </div>
  <input name="user_type" type="hidden" id="password" valus="manager">
  
  
  <button type="submit" class="btn btn-default" name="submit_add_manager"  value="submit">Submit</button>
</form>
</div>