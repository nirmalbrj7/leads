
<div class="container">
<form  role="form"  id="login_registration" action="<?php echo URL; ?>login/userlogin"  method="post" enctype="multipart/form-data">
<div class="form-group">
    <label for="email">Email:</label>
    <input name="email" type="text" id="firstname">
  </div>
  <div class="form-group">
    <label for="password">password:</label>
    <input name="lastname"  id="lastname">
    
  </div>
   
  <button type="submit" class="btn btn-default" name="submit_login"  value="submit">Submit</button>
</form>
</div>