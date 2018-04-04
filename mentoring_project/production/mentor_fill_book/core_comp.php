<?php include('mentoring_book_header.php'); ?>




 
<?php
  
  
  
  					
			if(isset($_GET['action']))
{
	if($_GET['action']=='edit')
	{
	$id=$_GET['id'];
  
  

	$sql="SELECT * FROM `tbl_mn_career` WHERE `car_stud_id`='$id'";
		$r= mysqli_query($con,$sql);
		$row=mysqli_fetch_assoc($r);
		 $stid=$row["car_stud_id"];
				
				
				
				
		
}
}
	
    ?>		
				
				
 











<body>






<div id="layout">
    <!-- Menu toggle -->
    <a href="#menu" id="menuLink" class="menu-link">
        <!-- Hamburger icon -->
        <span></span>
    </a>

      <?php include('core_comp_sidebar.php'); ?>

    <div id="main">
        <div class="header">
            <h1>Core Competency/Career Fitment Matrix</h1>
            <!--<h2>A subtitle for your page goes here</h2>-->
        </div>

        <div class="content">
           <!-- <h2 class="content-subhead">How to use this layout</h2>-->
		   
		   
	





	
		   
		   
		  
           
<form class="pure-form pure-form-stacked" action="" method="post">


    <fieldset>
       <input type="hidden" name="stuid" value="<?php echo $stid;?>" >   
  
<table class="pure-table pure-table-horizontal" width="700">
    <thead>
        <tr>
            <th>Industry Sectors</th>
            <th>Enter the reasons for fitness</th>
           
			
        </tr>
    </thead>

    <tbody>
        <tr>
         
            <td>IT/Software</td>
            <td><textarea   placeholder="Text" name="it"><?php echo $row["it"];?>
		</textarea></td>
          
        </tr>

        <tr>
           
            <td>KPO/BPO</td>
            <td><textarea   placeholder="Text" name="kpo"><?php echo $row["kpo"];?>
		</textarea></td>
         
        </tr>

        <tr>
         
            <td>Banking & Finance</td>
            <td><textarea   placeholder="Text" name="bank"><?php echo $row["bank"];?>
		</textarea></td>
          
        </tr>

        <tr>
           
            <td>Marketing</td>
            <td><textarea   placeholder="Text" name="market"><?php echo $row["market"];?>
		</textarea></td>
         
        </tr> 
		  <tr>
         
            <td>Telecommunication</td>
            <td><textarea   placeholder="Text" name="telecom"><?php echo $row["telecom"];?>
		</textarea></td>
          
        </tr>

        <tr>
           
            <td>Consultancy</td>
            <td><textarea   placeholder="Text" name="consult"><?php echo $row["consult"];?>
		</textarea></td>
         
        </tr>
		
		  <tr>
         
            <td>Manufacturing</td>
            <td><textarea   placeholder="Text" name="manufact"><?php echo $row["manufact"];?>
		</textarea></td>
          
        </tr>

        <tr>
           
            <td>Services</td>
            <td><textarea   placeholder="Text" name="service"><?php echo $row["service"];?>
		</textarea></td>
         
        </tr>
		  <tr>
         
            <td>Defence</td>
            <td><textarea   placeholder="Text" name="defence"><?php echo $row["defence"];?>
		</textarea></td>
          
        </tr>

        <tr>
           
            <td>Teaching</td>
            <td><textarea   placeholder="Text" name="teaching"><?php echo $row["teaching"];?>
		</textarea></td>
         
        </tr>
		  <tr>
         
            <td>Training</td>
            <td><textarea   placeholder="Text" name="training"><?php echo $row["training"];?>
		</textarea></td>
          
        </tr>
		 <tr>
         
            <td>Retail</td>
            <td><textarea   placeholder="Text" name="retail"><?php echo $row["retail"];?>
		</textarea></td>
          
        </tr>

        <tr>
           
            <td>Automobiles/Airlines</td>
            <td><textarea   placeholder="Text" name="airline"><?php echo $row["airline"];?>
		</textarea></td>
         
        </tr>
		
		  <tr>
         
            <td>Others(core sector)</td>
            <td><textarea   placeholder="Text" name="other_core"><?php echo $row["other_core"];?>
		</textarea></td>
          
        </tr>

       
		
		  <tr>
         
            <td>Others(Dream Company)</td>
            <td><textarea   placeholder="Text" name="other_dream"><?php echo $row["other_dream"];?>
		</textarea></td>
          
        </tr>

        <tr>
           
            <td>Enterpreneurship(Own business)</td>
            <td><textarea   placeholder="Text" name="own_bus"><?php echo $row["own_bus"];?>
		</textarea></td>
         
        </tr>
		
		

        <tr>
           
            <td>Others(Specify)</td>
            <td><textarea   placeholder="Text" name="other"><?php echo $row["other"];?>
		</textarea></td>
         
        </tr>
		
		  <tr>
         
            <td>Best job fitment of mentee as mutually assessed</td>
            <td><textarea   placeholder="Text" name="best_job"><?php echo $row["best_job"];?>
		</textarea></td>
          
        </tr>

       
			
		    </tbody>
</table>
       
		
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		
		
    </fieldset>

		   
		   
		   
		   
		


 
 
 <button type="submit" class="pure-button pure-button-primary" name="submit">Save</button>	
</form>


<?php		   
if(isset($_POST["submit"])) {
	
	
	$stid=$_POST["stuid"];
				
				
	
				
				
	//$_POST['atmosphere']			
	
		
	$sqbio1="UPDATE `tbl_mn_career` SET `it`='".$_POST['it']."',`kpo`='".$_POST['kpo']."',`bank`='".$_POST['bank']."',`market`='".$_POST['market']."',`telecom`='".$_POST['telecom']."',`consult`='".$_POST['consult']."',`manufact`='".$_POST['manufact']."',`service`='".$_POST['service']."',`defence`='".$_POST['defence']."'
	,`teaching`='".$_POST['teaching']."',`training`='".$_POST['training']."',`retail`='".$_POST['retail']."',`airline`='".$_POST['airline']."'
	,`other_core`='".$_POST['other_core']."',`other_dream`='".$_POST['other_dream']."',`own_bus`='".$_POST['own_bus']."',`other`='".$_POST['other']."'
	,`best_job`='".$_POST['best_job']."' WHERE car_stud_id='$stid'"; 
	
	mysqli_query($con,$sqbio1);
	
	
	
	
	
	?>
	
	<a id="anch1" href="core_comp.php?action=edit&id=<?php echo $stid; ?>"></a>
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
