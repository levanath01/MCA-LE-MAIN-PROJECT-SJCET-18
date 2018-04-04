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
  
  
  
  
    
		$sql11="SELECT acc_id FROM `tbl_mn_accomodation` WHERE `acc_stud_id`='$id'";
		$r1= mysqli_query($con,$sql11);
		
		
		
		$row1 = mysqli_fetch_array($r1, MYSQLI_ASSOC) ;
		
		
		if($row1!="")
		{
		
		


			echo" <thead>
			<tr>
			  
           
            <th>College hostel stay duration</th>
            <th>Reasons for leaving college hostel</th>
            <th>Whether staying in hostel approved by SJCET</th>
			<th>Details of present stay,including the mobile no. of hostel owner</th>
			 		
        </tr>
    </thead>

    <tbody>";
	
			
			 
			
		
		
		$sql="SELECT * FROM `tbl_mn_accomodation` WHERE `acc_stud_id`='$id'";
		$r= mysqli_query($con,$sql);
		
		
		
		while($row=mysqli_fetch_assoc($r))
		{  $stid=$row["acc_stud_id"];
				
				
			 echo"<tr>";
       
            echo"<td>".$row['staydur']."</td>";
            echo"<td>".$row['leavrsn']."</td>";
           echo"<td>".$row['hstapprov']."</td>";
            echo"<td>".$row['staydtl']."</td>";
			 
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
	
      
<h2 class="content-subhead">Add Accomodation Details</h2>
<table class="pure-table pure-table-horizontal">
    <thead>
        <tr>
            
            <th>College hostel stay duration</th>
            <th>Reasons for leaving college hostel</th>
            <th>Whether staying in hostel approved by SJCET</th>
			<th>Details of present stay,including the mobile no. of hostel owner</th>
			
        </tr>
    </thead>

    <tbody>
        <tr>
           
            <td><input id="email" type="text" placeholder=""name="staydur"></td>
            <td><input id="email" type="text" placeholder=""name="leavrsn"></td>
            <td><input id="email" type="text" placeholder=""name="hstapprov"></td>
			<td><input id="email" type="text" placeholder=""name="staydtl"></td>
        </tr>

       
       
		
    </tbody>
</table>
 </fieldset>
 
 
 
 <button type="submit"name="submit"  id="submit"class="pure-button pure-button-primary">Save</button>
</form>	
		   


<?php		   
if(isset($_POST["submit"])) {
	
	
	//$stid=$_POST["stuid"];
	
				$staydur=$_POST["staydur"];
				$leavrsn=$_POST["leavrsn"];
				$hstapprov=$_POST["hstapprov"];
				$staydtl=$_POST["staydtl"];
				
				
	


	
								
		
	$sqbio1="INSERT INTO `tbl_mn_accomodation`(`acc_stud_id`, `staydur`, `leavrsn`
	, `hstapprov`, `staydtl`) VALUES ('$id','$staydur','$leavrsn','$hstapprov','$staydtl')"; 
	
	mysqli_query($con,$sqbio1);
	echo $sqbio1;
	
	
	
	
	?>
	
	<a id="anch1" href="biodata_accomo.php?action=edit&id=<?php echo $id; ?>"></a>
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
