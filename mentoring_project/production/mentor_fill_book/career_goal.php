


 <?php include('mentoring_book_header.php'); ?>
 
 
 
 
<?php
  
  
  
  					
			if(isset($_GET['action']))
{
	if($_GET['action']=='edit')
	{
	$id=$_GET['id'];
  
  

	$sql="SELECT * FROM `tbl_mn_scriptgoal` WHERE `sc_stud_id`='$id'";
		$r= mysqli_query($con,$sql);
		$row=mysqli_fetch_assoc($r);
		 $stid=$row["sc_stud_id"];
				
				
				
				
		
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

   <?php include('career_goal_sidebar.php'); ?>
    <div id="main">
        <div class="header">
            <h1>Scripting career goals</h1>
            <!--<h2>A subtitle for your page goes here</h2>-->
        </div>

        <div class="content">
           <!-- <h2 class="content-subhead">How to use this layout</h2>-->
		   
		   
	





	
		   
		   
		  
           
<form class="pure-form pure-form-stacked" action="" method="post">


    <fieldset>
         <input type="hidden" name="stuid" value="<?php echo $stid;?>" >   

       
		
		
		   <h3 class="content-subhead">The Mentee's Career Goals</h3>
                i)<input id="character"  name="goal_1"type="text"  placeholder=""value="<?php echo $row["goal_1"];?>">
               ii)<input id="personality"  type="text"  placeholder="" value="<?php echo $row["goal_2"];?>" name="goal_2">
              iii)<input id="impressiveness" type="text"  placeholder="" value="<?php echo $row["goal_3"];?>" name="goal_3">
           
          
        <h3 class="content-subhead">Reasons for the Goals</h3>
		<textarea   placeholder="Text" name="reason"><?php echo $row["reason"];?>
		</textarea>
	  <h3 class="content-subhead">Changed goal 1 with reasons</h3>
		<textarea   placeholder="Text" name="change1"><?php echo $row["change1"];?>
		</textarea>
		
		  <h3 class="content-subhead">Changed goal 2 with reasons</h3>
		<textarea   placeholder="Text" name="change2"><?php echo $row["change2"];?>
		</textarea>
		  <h3 class="content-subhead">Changed goal 3 with reasons</h3>
		<textarea   placeholder="Text" name="change3"><?php echo $row["change3"];?>
		</textarea>
		
		  <h3 class="content-subhead">Guidance given by Mentor for goal setting/Improvements</h3>
		<textarea   placeholder="Text" name="guidance"><?php echo $row["guidance"];?>
		</textarea>
		
		
		
		
    </fieldset>

		   
		   
		   
		   
		


 
 
 <button type="submit" class="pure-button pure-button-primary" name="submit">Save</button>	
</form>


<?php		   
if(isset($_POST["submit"])) {
	
	
	$stid=$_POST["stuid"];
				
				
		
				
				
	//$_POST['atmosphere']			
	
		
	$sqbio1="UPDATE `tbl_mn_scriptgoal` SET `goal_1`='".$_POST['goal_1']."'	
	,`goal_2`='".$_POST['goal_2']."',`goal_3`='".$_POST['goal_3']."',`reason`='".$_POST['reason']."',`change1`='".$_POST['change1']."',`change2`='".$_POST['change2']."'
	,`change3`='".$_POST['change3']."',`guidance`='".$_POST['guidance']."' WHERE sc_stud_id='$stid'"; 
	
	mysqli_query($con,$sqbio1);
	
	
	
	
	
	?>
	
	<a id="anch1" href="career_goal.php?action=edit&id=<?php echo $stid; ?>"></a>
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
