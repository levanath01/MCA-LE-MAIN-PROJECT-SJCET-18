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

    
	
	
	
	  <?php include('biodata_section_sidebar.php'); ?>

    <div id="main">
      

        <div class="content">
           <!-- <h2 class="content-subhead">How to use this layout</h2>-->
		   
		   
		   
	




		   
	<br>	   
 
 

    
			
<form class="pure-form pure-form-stacked" action="" method="post">

 <fieldset>

   <h2 class="content-subhead">Accomodation Details</h2>
			
			<table class="pure-table pure-table-horizontal">
        
           
	<?php
  
  
  
  
    
		$sql11="SELECT ach_id FROM `tbl_mn_noteworthy` WHERE `ach_stud_id`='$id'";
		$r1= mysqli_query($con,$sql11);
		
		
		
		$row1 = mysqli_fetch_array($r1, MYSQLI_ASSOC) ;
		
		
		if($row1!="")
		{
		
		


			echo" <thead>
			<tr>
			  
           <th>SlNo</th>
            <th>Achievement</th>
			 		
        </tr>
    </thead>

    <tbody>";
	
			
			 
			
		
		
		$sql="SELECT * FROM `tbl_mn_noteworthy` WHERE `ach_stud_id`='$id'";
		$r= mysqli_query($con,$sql);
		
		
		
		while($row=mysqli_fetch_assoc($r))
		{  $stid=$row["ach_stud_id"];
				
				
			 echo"<tr>";
       
            echo"<td>#</td>";
            echo"<td>".$row['ach_name']."</td>";
         
			 
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
		   
	 
		   
	<h2 class="content-subhead">17.Other noteworthy achievements</h2>	
		<fieldset>
<table class="pure-table pure-table-horizontal">
    <thead>
        <tr>
            <th>SlNo</th>
            <th>Achievement</th>
            
			
			
			
        </tr>
    </thead>

    <tbody>
        <tr>
           
            <td>#</td>
            <td><input class="pure-input-1" id="email" type="text" placeholder=""name="achname"></td>
            
			
        </tr>

           
    </tbody>
</table>
 </fieldset>


 
 
 <button type="submit"name="submit"  id="submit"class="pure-button pure-button-primary">Save</button>
</form>	
		   


<?php		   
if(isset($_POST["submit"])) {
	
	
	//$stid=$_POST["stuid"];
	
				$ach_name=$_POST["ach_name"];
				
				
				
	


	
								
		
	$sqbio1="INSERT INTO `tbl_mn_noteworthy`(`ach_stud_id`, `ach_name`) VALUES ('$id','$ach_name')"; 
	
	mysqli_query($con,$sqbio1);
	echo $sqbio1;
	
	
	
	
	?>
	
	<a id="anch1" href="biodata_achieve.php?action=edit&id=<?php echo $id; ?>"></a>
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
