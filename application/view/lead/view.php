<div class="container">
	<div class="box">
        <h3>total number of follow this student</h3>
        <div><h4></h4>
            <?php echo $Total_followup; ?>
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
                <td>Total_Followup</td>
            </tr>
            </thead>
            <tbody>


           
                <tr>
                   
                    <td><?php echo $leads->lead_id; ?></td>
                    <td><?php echo $leads->user_id; ?></td>
                    <td><?php echo $leads->firstname; ?></td>
                    <td><?php echo $leads->lastname; ?></td>
                    <td><?php echo $leads->gender; ?></td>
                    <td><?php echo $leads->address; ?></td>
                    <td><?php echo $leads->phone; ?></td>
                    <td><?php echo $leads->email; ?></td>
                    <td><?php echo $leads->faculty; ?></td>
                   <td><?php echo $leads->status; ?></td>
                    <td><?php echo $leads->session; ?></td>
                    
                    <td> <?php echo $Total_followup; ?></td>
                </tr>
                
                
            

            </tbody>
        </table>
    </div> 
</div>