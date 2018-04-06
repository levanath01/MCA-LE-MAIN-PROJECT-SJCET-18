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

   <?php include('ann3_sidebar.php'); ?>

    <div id="main">
        <div class="header">
            <h1>Psycho-geometry</h1>
            <!--<h2>A subtitle for your page goes here</h2>-->
        </div>

        <div class="content">
           <!-- <h2 class="content-subhead">How to use this layout</h2>-->
		   
		   
	





	
		   
		   
		  
           
<form class="pure-form pure-form-stacked" action="" method="post">
<fieldset>

   <h2 class="content-subhead">Exercise Summary</h2>
			
	<h2 class="content-subhead">ANNEXURE-3</h2>		
	<table class="pure-table pure-table-horizontal">
        
           
	<?php
  
  
  
  
    
		$sql11="SELECT annex3_id FROM `tbl_mn_annex3` WHERE `annex3_stud_id`='$id'";
		$r1= mysqli_query($con,$sql11);
		
		
		
		$row1 = mysqli_fetch_array($r1, MYSQLI_ASSOC) ;
		
		
		if($row1!="")
		{
		
		


			echo" <thead>
			<tr>
			  
            <th>Psycho-Geometry test result</th>
           
			
			 		
        </tr>
    </thead>

    <tbody>";
	
			
			 
			
		
		
		$sql="SELECT * FROM `tbl_mn_annex3` WHERE `annex3_stud_id`='$id'";
		$r= mysqli_query($con,$sql);
		
		
		
		while($row=mysqli_fetch_assoc($r))
		{  $stid=$row["annex3_stud_id"];
				
				
			 echo"<tr>";
       
            //echo"<td>".$row['lrn_visual']."</td>";
           // echo"<td>".$row['lrn_audit']."</td>";
           //echo"<td>".$row['lrn_tactile']."</td>";
            //echo"<td>".$row['lrn_total']."</td>";
			
			
		
$l_type=$row['annex3_fig'];

			
			if($l_type=="Square")
			{
				echo"<td>"; echo'<img src="square.jpg" height="300px" width="800px">'; echo"</td>";
				 //echo"<td><img src="square.jpg"></td>";
			}
			else if($l_type=="Triangle")
			{
				 echo"<td>"; echo'<img src="Triangle.jpg" height="300px" width="800px">'; echo"</td>";
			}
			else if($l_type=="Rectangle")
			{
			 echo"<td>"; echo'<img src="rectangle.jpg" height="300px" width="800px">'; echo"</td>";
			  //echo"<td><img src="rectangle.jpg"></td>";
			}
			else if($l_type=="Circle")
			{
				echo"<td>"; echo'<img src="circle.jpg" height="300px" width="800px">'; echo"</td>";
				//echo"<td><img src="circle.jpg"></td>";
			}
			 else if($l_type=="Zigzag")
			{
				echo"<td>"; echo'<img src="Zigzag.jpg" height="300px" width="800px">'; echo"</td>";
				//echo"<td><img src="Zigzag.jpg"></td>";
			}
			 	 
			  
			  
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

    <fieldset>
        

       
		
		
		   
           
		
		 </fieldset>

		
		
</form>



<?php		   
if(isset($_POST["submit"])) {
	
	
		
				$sql11="SELECT annex3_id FROM `tbl_mn_annex3` WHERE `annex3_stud_id`='$id'";
		$r1= mysqli_query($con,$sql11);
		
		
		
		$row1 = mysqli_fetch_array($r1, MYSQLI_ASSOC) ;
		
		
		if($row1!="")
		{
		
		echo '<script language="javascript">';
echo 'alert("Test already taken!!")';
echo '</script>';

		
		}	
		else
		{			
			
		
	?>
	
	<a id="anch1" href="annex3_test.php?action=edit&id=<?php echo $id; ?>"></a>
    <script>alert("You will now be redirected to exercise page");
	
    document.getElementById("anch1").click();
    </script>
    <?php		
		
		}
}

	
   
		
	
?>





	   
		   
		   
		   
		   
        </div>
    </div>
</div>




<script src="js/ui.js"></script>

</body>
</html>
