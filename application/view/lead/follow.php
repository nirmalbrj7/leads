<p><div class="container">
<form  role="form"  id="" action="<?php echo URL; ?>lead/followup"  method="post" enctype="multipart/form-data">
<div class="form-group">
    <label for="firstname">Followup_type</label>
    <input name="followup_type" type="text" id="firstname">
  </div>
  <div>
  <input name="lead_id" type="hidden" id="status"  value="<?php echo $lead->lead_id; ?>">
 
  </div>
  <div class="form-group">
  <button type="submit" class="btn btn-default" name="submit_add_follow"  value="submit">Submit</button>
  </div>
</form>
</div></p>