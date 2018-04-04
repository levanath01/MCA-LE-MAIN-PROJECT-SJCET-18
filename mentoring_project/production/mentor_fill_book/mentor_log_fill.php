<?php include('mentoring_book_header.php'); ?>
 
 
 <?php
 
  					
			if(isset($_GET['action']))
{
	if($_GET['action']=='edit')
	{
	$id=$_GET['id'];
 
 ?>
 
 
	
	
<body>






<div id="layout">
    <!-- Menu toggle -->
    <a href="#menu" id="menuLink" class="menu-link">
        <!-- Hamburger icon -->
        <span></span>
    </a>

    
	
	
	
	  <?php include('mentor_log_fill_sidebar.php'); ?>

    <div id="main">
      

        <div class="content">
           <!-- <h2 class="content-subhead">How to use this layout</h2>-->
		   
		   
		   
	




		   
	<br>	   
 
 

    
			
<form class="pure-form pure-form-stacked" action="" method="post">

 <fieldset>

   <h2 class="content-subhead">Log Entries</h2>
			
			<table class="pure-table pure-table-horizontal">
        
           
	<?php
  
  
  
  
    
		$sql11="SELECT logg_id FROM `tbl_mn_log` WHERE `logg_stud_id`='$id'";
		$r1= mysqli_query($con,$sql11);
		
		
		
		$row1 = mysqli_fetch_array($r1, MYSQLI_ASSOC) ;
		
		
		if($row1!="")
		{
		
		


			echo" <thead>
			<tr>
			  
            <th>Date</th>
            <th>Remarks</th>
            
			 		
        </tr>
    </thead>

    <tbody>";
	
			
			 
			
		
		
		$sql="SELECT * FROM `tbl_mn_log` WHERE `logg_stud_id`='$id'";
		$r= mysqli_query($con,$sql);
		
		
		
		while($row=mysqli_fetch_assoc($r))
		{  $stid=$row["logg_stud_id"];
				
				
			 echo"<tr>";
       
            echo"<td>".$row['logg_date']."</td>";
            echo"<td>".$row['logg_text']."</td>";
          
			   
			echo"</tr>";
		
		
		
		
		}
		    echo"</tbody>";

		
		}	
		else
		{			
			
			echo"No data available";	
		
		}
}
}
	
   
	
       

  

 ?>
 
 </table>
 </fieldset>



		
	
  


        
   



















	
		   
		<br>   
		   
	 
		   
	
	 <fieldset>
	
      
<h2 class="content-subhead">Add New Log Entry</h2>
<input type="hidden" name="stuid" value="<?php echo $id;?>" > 
        
		
		
		
		<label for="city">Enter here</label>
            <textarea class="pure-input-1-2" placeholder="Text"name="log"></textarea>
		
		
		
 </fieldset>
 
 
 
 <button type="submit"name="submit"  id="submit"class="pure-button pure-button-primary">Save</button>
</form>	
		   


<?php		   
if(isset($_POST["submit"])) {
	
	
	$stid=$_POST["stuid"];
	
				$log=$_POST["log"];
				
	


		$date = date('Y/m/d H:i:s');
								
		
	$sqbio1="INSERT INTO `tbl_mn_log`(`logg_date`, `logg_stud_id`, `logg_text`) VALUES ('$date','$stid','$log')"; 
	
	mysqli_query($con,$sqbio1);
	
	
	
	
	?>
	
	<a id="anch1" href="mentor_log_fill.php?action=edit&id=<?php echo $stid; ?>"></a>
    <script>alert("Inserted Successfully");
	
    document.getElementById("anch1").click();
    </script>
    <?php

	
	
	
	
}
?>



	   
		   
		   
        </div>
    </div>
</div>




<script src="js/ui.js"></script>

</body>
</html>
