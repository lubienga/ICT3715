<!DOCTYPE html>
<html lang="en">
<head>

<?php 
       include 'menu.inc';
	 ?>
 <?php  
         require_once("booking_configation.php");
?> 


</head>
<body>
   
    <div class="container">
            
            <div class="span10 offset1">

      <div id="action" >
         
        <form class="form1" action="booking_configation.php" method="post">
		       
            <span class="help-block" ><?php if (!empty($check)) { ?>
                 <?php echo htmlspecialchars($check); ?>
         <?php } ?></span><br>      
	         <label>ID Number:</label>	 
	         <select class="option" name="clientID" id = "select"> 
		          <?php foreach( $idNumber as $idNumbers) : ?>
                 <option><?php echo $idNumbers['client_id_num']?></option>
		          <?php endforeach; ?>
           </select><br></br>
           <!--form to submit appointment booking details -->
           <label>Appointment date:</label><input type="date" name="appDate" id="appDate"
              value ="<?php echo $appointmentDate; ?>"/><br/></br>
           <label>Start time:</label><input type="text" name="stTime" id="stTime"  
             value ="<?php echo $maxEndTime; ?>" /><br/></br>
           <label>End time:</label><input type="text" name="endTime"placeholder="14:00" id="endTime" /><br/></br> 
	            <?php if (!empty($comm_errorMessage)) { ?>
	               <p class="error"><?php echo htmlspecialchars($comm_errorMessage); ?></p>
	            <?php } ?>
	            <input type="submit" class="comments"  name="submit"  value="Save" id="createApp">
	            </br></br>
	      </form>
        <form class = "form2" action="booking_home.php" method="post">
          <br>
		       <!-- selecting client ID to update comments-->
	         <label>ID Number:</label>	 
	         <select class="option" name="IdBook" id = "select"> 
		          <?php foreach( $idBooking as $idBookings) : ?>
                 <option><?php echo $idBookings['client_id_num']?></option>
		          <?php endforeach; ?>
           </select><br></br>
          <input type="submit" class="comments" name="submit"  value="Search" id="view">
	        </br></br>
           </form>
      
        <table>
		    <tr>
          <th>First Name</th>
		      <th>Last Name</th>
		      <th>ID Number</th>
          <th>Appointment Date</th>
			    <th>Start Time</th>
          <th>End time</th>
		    </tr>
		    <?php foreach ($detail as $details) { ?>
		    <tr>
          <td><?php echo $details[0]; ?></td>
		      <td><?php echo $details[1]; ?></td>
			    <td><?php echo $details[2]; ?></td>
          <td><?php echo $details[3]; ?></td>
          <td><?php echo $details[4]; ?></td>
          <td><?php echo $details[5]; ?></td>
		    </tr>
		    <?php } ?>
	    </table> 
       </div>
   </div> <!-- end of wrapper -->
   <script src = "confirm-delete.js"> </script>
</body>
</html>