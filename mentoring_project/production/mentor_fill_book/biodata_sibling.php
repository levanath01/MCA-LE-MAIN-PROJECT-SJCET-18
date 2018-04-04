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

   <h2 class="content-subhead">Brother/Sister Details</h2>
			
			<table class="pure-table pure-table-horizontal">
        
           
	<?php
  
  
  
  
    
		$sql11="SELECT sib_id FROM `tbl_mn_sibling` WHERE `sib_stud_id`='$id'";
		$r1= mysqli_query($con,$sql11);
		
		
		
		$row1 = mysqli_fetch_array($r1, MYSQLI_ASSOC) ;
		
		
		if($row1!="")
		{
		
			echo" <thead>
			<tr>
			  
            <th>Name</th>
            <th>Age</th>
            <th>Status</th>
			<th>Position in family</th>
			 		
        </tr>
    </thead>

    <tbody>";
	
			
			 
			
		
		
		$sql="SELECT * FROM `tbl_mn_sibling` WHERE `sib_stud_id`='$id'";
		$r= mysqli_query($con,$sql);
		
		
		
		while($row=mysqli_fetch_assoc($r))
		{  $stid=$row["sib_stud_id"];
				
				
			 echo"<tr>";
       
            echo"<td>".$row['sib_name']."</td>";
            echo"<td>".$row['sib_age']."</td>";
           echo"<td>".$row['sib_status']."</td>";
            echo"<td>".$row['sib_pos']."</td>";
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
		   
	<h2 class="content-subhead">Add Brother/Sister Details</h2>	   
		   
	
	 <fieldset>
	

<table class="pure-table pure-table-horizontal">
    <thead>
        <tr>
            
            <th>Name</th>
            <th>Age</th>
            <th>Status</th>
			<th>Position in family</th>
			
        </tr>
    </thead>

    <tbody>
	
	
		
	
        <tr>
           <input type="hidden" name="stuid" value="<?php echo $stid;?>" > 
            <td><input id="email" type="text" placeholder="" name="sibname"></td>
            <td><input id="email" type="text" placeholder=""name="sibage"></td>
            <td><input id="email" type="text" placeholder=""name="sibstatus"></td>
			<td><input id="email" type="text" placeholder=""name="sibpos"></td>
        </tr>

        
		
		
    </tbody>
</table>

 </fieldset>
 
 
 
 <button type="submit"name="submit"  id="submit"class="pure-button pure-button-primary">Save</button>
</form>	
		   


<?php		   
if(isset($_POST["submit"])) {
	
	
	$stid=$_POST["stuid"];
	
				$sib_name=$_POST["sibname"];
				$sib_age=$_POST["sibage"];
				$sib_status=$_POST["sibstatus"];
				$sib_pos=$_POST["sibpos"];
				
	


	
								
		
	$sqbio1="INSERT INTO `tbl_mn_sibling`(`sib_stud_id`, `sib_name`, `sib_age`, `sib_status`, `sib_pos`) VALUES ('$stid','$sib_name','$sib_age','$sib_status','$sib_pos')"; 
	
	mysqli_query($con,$sqbio1);
	
	
	
	
	
	?>
	
	<a id="anch1" href="biodata_sibling.php?action=edit&id=<?php echo $stid; ?>"></a>
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
