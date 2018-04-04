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

    
	
	
	
	  <?php include('objective_impr_sidebar.php'); ?>

    <div id="main">
      

        <div class="content">
           <!-- <h2 class="content-subhead">How to use this layout</h2>-->
		   
		   
		   
	




		   
	<br>	   
 
 

    
			
<form class="pure-form pure-form-stacked" action="" method="post">

 <fieldset>

   <h2 class="content-subhead">Details of Referral to language lab</h2>
			
			<table class="pure-table pure-table-horizontal">
        
           
	<?php
  
  
  
  
    
		$sql11="SELECT coun_id FROM `tbl_mn_counsreferral` WHERE `coun_stud_id`='$id'";
		$r1= mysqli_query($con,$sql11);
		
		
		
		$row1 = mysqli_fetch_array($r1, MYSQLI_ASSOC) ;
		
		
		if($row1!="")
		{
		
		


			echo" <thead>
			<tr>
			  
          <th>Sl.No</th>
            <th>Referral to counselling/pshychiatric assistance</th>
            <th>Remarks by counsellor</th>
           
			 		
        </tr>
    </thead>

    <tbody>";
	
			
			 
			
		
		
		$sql="SELECT * FROM `tbl_mn_counsreferral` WHERE `coun_stud_id`='$id'";
		$r= mysqli_query($con,$sql);
		
		
		
		while($row=mysqli_fetch_assoc($r))
		{  $stid=$row["ach_stud_id"];
				
				
			 echo"<tr>";
       
            echo"<td>#</td>";
            echo"<td>".$row['coun_ref']."</td>";
			 echo"<td>".$row['coun_rmrk']."</td>";
			
         
			 
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
		   
	 
	<h3 class="content-subhead">Details of Referral to counselling</h3>
  <fieldset>
 
 
 <table class="pure-table pure-table-horizontal">
    <thead>
        <tr>
            <th>Sl.No</th>
            <th>Referral to counselling/pshychiatric assistance</th>
            <th>Remarks by counsellor</th>
           
			
        </tr>
    </thead>

    <tbody>
        <tr>
            <td>#</td>
            <td><input id="tb1" type="text" placeholder="" name="coun_ref"></td>
            <td><input id="tb1" type="text" placeholder=""name="coun_rmrk"></td>
           
        </tr>

        

       
		
		
    </tbody>
</table>
  </fieldset>

 
 
 <button type="submit"name="submit"  id="submit"class="pure-button pure-button-primary">Save</button>
</form>	
		   


<?php		   
if(isset($_POST["submit"])) {
	
	
	//$stid=$_POST["stuid"];
	
				$coun_ref=$_POST["coun_ref"];
				$coun_rmrk=$_POST["coun_rmrk"];
				
				
	


	
								
		
	$sqbio1="INSERT INTO `tbl_mn_counsreferral`(`coun_stud_id`coun_ref`, `coun_rmrk`) VALUES ('$id','$coun_ref','$coun_rmrk')"; 
	
	mysqli_query($con,$sqbio1);
	echo $sqbio1;
	
	
	
	
	?>
	
	<a id="anch1" href="objective_couns_ref.php?action=edit&id=<?php echo $id; ?>"></a>
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
