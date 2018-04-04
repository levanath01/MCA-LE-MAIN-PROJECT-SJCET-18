<?php include('mentoring_book_header.php'); ?>




<?php
  
  
  
  					
			if(isset($_GET['action']))
{
	if($_GET['action']=='edit')
	{
	$id=$_GET['id'];
  
  

	$sql1="SELECT * FROM `tbl_mn_s1skill` WHERE `s1_stud_id`='$id'";
		$r1= mysqli_query($con,$sql1);
		$row1=mysqli_fetch_assoc($r1);
		 $stid=$row1["s1_stud_id"];
		 
		 
		 
		 $sql2="SELECT * FROM `tbl_mn_s2skill` WHERE `s2_stud_id`='$id'";
		$r2= mysqli_query($con,$sql2);
		$row2=mysqli_fetch_assoc($r2);
		
		$sql3="SELECT * FROM `tbl_mn_s3skill` WHERE `s3_stud_id`='$id'";
		$r3= mysqli_query($con,$sql3);
		$row3=mysqli_fetch_assoc($r3);
		
		$sql4="SELECT * FROM `tbl_mn_s4skill` WHERE `s4_stud_id`='$id'";
		$r4= mysqli_query($con,$sql4);
		$row4=mysqli_fetch_assoc($r4);
		
		$sql5="SELECT * FROM `tbl_mn_s5skill` WHERE `s5_stud_id`='$id'";
		$r5= mysqli_query($con,$sql5);
		$row5=mysqli_fetch_assoc($r5);
		
		$sql6="SELECT * FROM `tbl_mn_s6skill` WHERE `s6_stud_id`='$id'";
		$r6= mysqli_query($con,$sql6);
		$row6=mysqli_fetch_assoc($r6);
		
		$sql7="SELECT * FROM `tbl_mn_s7skill` WHERE `s7_stud_id`='$id'";
		$r7= mysqli_query($con,$sql7);
		$row7=mysqli_fetch_assoc($r7);
		
		$sql8="SELECT * FROM `tbl_mn_s8skill` WHERE `s8_stud_id`='$id'";
		$r8= mysqli_query($con,$sql8);
		$row8=mysqli_fetch_assoc($r8);
				
				
				
				
		
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

     <?php include('mentor_assesmnt_sidebar.php'); ?>

    <div id="main">
        <div class="header">
            <h1>Assessment of the Mentee by Mentor</h1>
            <!--<h2>A subtitle for your page goes here</h2>-->
        </div>

        <div class="content">
           <!-- <h2 class="content-subhead">How to use this layout</h2>-->
		   
		   
	





	
		   
		   
		  
           
<form class="pure-form pure-form-stacked" action="" method="post">


    <fieldset>
          <input type="hidden" name="stuid" value="<?php echo $stid;?>" >   
 <table class="pure-table pure-table-horizontal" >
    <thead>
        <tr>
            <th>Sl.No</th>
            <th>Skill type(Specify activities)</th>
            <th>Event score (On a 10 point scale with 5 points for an activity under each heading)</th>
			 <th></th>
			 <th></th>
			  <th></th>
			 <th></th>
			  <th></th>
			 <th></th>
			 <th></th>
			</tr>
			<tr>
			 <th></th>
			 <th></th>
			 <th>S1</th>
			 <th>S2</th>
			 
			 <th>S3</th>
			 
			 <th>S4</th>
			 
			 <th>S5</th>
			 
			 <th>S6</th>
			  
			  <th>S7</th>
			   
			 <th>S8</th>
			</tr>  
    </thead>
  <tbody>
 	<tr>
			<td>1.</td>
            <td>Co-curricular</td>
	        <td><input id="tb1" type="text" placeholder="" name="s1_co" value="<?php echo $row1["s1_co"];?>"></td>
           <td><input id="tb1" type="text" placeholder="" name="s2_co" value="<?php echo $row2["s2_co"];?>"></td>
  <td><input id="tb1" type="text" placeholder="" name="s3_co" value="<?php echo $row3["s3_co"];?>"></td>
   <td><input id="tb1" type="text" placeholder="" name="s4_co" value="<?php echo $row4["s4_co"];?>"></td>
    <td><input id="tb1" type="text" placeholder="" name="s5_co" value="<?php echo $row5["s5_co"];?>"></td>
	 <td><input id="tb1" type="text" placeholder="" name="s6_co" value="<?php echo $row6["s6_co"];?>"></td>
	  <td><input id="tb1" type="text" placeholder="" name="s7_co" value="<?php echo $row7["s7_co"];?>"></td>
	   <td><input id="tb1" type="text" placeholder="" name="s8_co" value="<?php echo $row8["s8_co"];?>"></td>
</tr>
				
<tr>
			<td>2.</td>
            <td>Extra-curricular</td>
	        <td><input id="tb1" type="text" placeholder="" name="s1_extra" value="<?php echo $row1["s1_extra"];?>"></td>
           <td><input id="tb1" type="text" placeholder="" name="s2_extra" value="<?php echo $row2["s2_extra"];?>"></td>
  <td><input id="tb1" type="text" placeholder="" name="s3_extra" value="<?php echo $row3["s3_extra"];?>"></td>
   <td><input id="tb1" type="text" placeholder="" name="s4_extra" value="<?php echo $row4["s4_extra"];?>"></td>
    <td><input id="tb1" type="text" placeholder="" name="s5_extra" value="<?php echo $row5["s5_extra"];?>"></td>
	 <td><input id="tb1" type="text" placeholder="" name="s6_extra" value="<?php echo $row6["s6_extra"];?>"></td>
	  <td><input id="tb1" type="text" placeholder="" name="s7_extra" value="<?php echo $row7["s7_extra"];?>"></td>
	   <td><input id="tb1" type="text" placeholder="" name="s8_extra" value="<?php echo $row8["s8_extra"];?>"></td>
</tr>	

<tr>
			<td>3.</td>
            <td>Technical</td>
	        <td><input id="tb1" type="text" placeholder=""  name="s1_tech" value="<?php echo $row1["s1_tech"];?>"></td>
           <td><input id="tb1" type="text" placeholder="" name="s2_tech" value="<?php echo $row2["s2_tech"];?>"></td>
  <td><input id="tb1" type="text" placeholder="" name="s3_tech" value="<?php echo $row3["s3_tech"];?>"></td>
   <td><input id="tb1" type="text" placeholder="" name="s4_tech" value="<?php echo $row4["s4_tech"];?>"></td>
    <td><input id="tb1" type="text" placeholder="" name="s5_tech" value="<?php echo $row5["s5_tech"];?>"></td>
	 <td><input id="tb1" type="text" placeholder="" name="s6_tech" value="<?php echo $row6["s6_tech"];?>"></td>
	  <td><input id="tb1" type="text" placeholder="" name="s7_tech" value="<?php echo $row7["s7_tech"];?>"></td>
	   <td><input id="tb1" type="text" placeholder="" name="s8_tech" value="<?php echo $row8["s8_tech"];?>"></td>
</tr>

<tr>
			<td>4.</td>
            <td>Communication</td>
	        <td><input id="tb1" type="text" placeholder=""  name="s1_comm" value="<?php echo $row1["s1_comm"];?>"></td>
           <td><input id="tb1" type="text" placeholder="" name="s2_comm" value="<?php echo $row2["s2_comm"];?>"></td>
  <td><input id="tb1" type="text" placeholder="" name="s3_comm" value="<?php echo $row3["s3_comm"];?>"></td>
   <td><input id="tb1" type="text" placeholder="" name="s4_comm" value="<?php echo $row4["s4_comm"];?>"></td>
    <td><input id="tb1" type="text" placeholder="" name="s5_comm" value="<?php echo $row5["s5_comm"];?>"></td>
	 <td><input id="tb1" type="text" placeholder="" name="s6_comm" value="<?php echo $row6["s6_comm"];?>"></td>
	  <td><input id="tb1" type="text" placeholder="" name="s7_comm" value="<?php echo $row7["s7_comm"];?>"></td>
	   <td><input id="tb1" type="text" placeholder="" name="s8_comm" value="<?php echo $row8["s8_comm"];?>"></td>
</tr>

<tr>
			<td>5.</td>
            <td>Interpersonal skills</td>
	        <td><input id="tb1" type="text" placeholder="" name="s1_inter" value="<?php echo $row1["s1_inter"];?>"></td>
           <td><input id="tb1" type="text" placeholder="" name="s2_inter" value="<?php echo $row2["s2_inter"];?>"></td>
  <td><input id="tb1" type="text" placeholder="" name="s3_inter" value="<?php echo $row3["s3_inter"];?>"></td>
   <td><input id="tb1" type="text" placeholder="" name="s4_inter" value="<?php echo $row4["s4_inter"];?>"></td>
    <td><input id="tb1" type="text" placeholder="" name="s5_inter" value="<?php echo $row5["s5_inter"];?>"></td>
	 <td><input id="tb1" type="text" placeholder="" name="s6_inter" value="<?php echo $row6["s6_inter"];?>"></td>
	  <td><input id="tb1" type="text" placeholder="" name="s7_inter" value="<?php echo $row7["s7_inter"];?>"></td>
	   <td><input id="tb1" type="text" placeholder="" name="s8_inter" value="<?php echo $row8["s8_inter"];?>"></td>
</tr>


<tr>
			<td>6.</td>
            <td>Leadership</td>
	        <td><input id="tb1" type="text" placeholder="" name="s1_leader" value="<?php echo $row1["s1_leader"];?>"></td>
           <td><input id="tb1" type="text" placeholder="" name="s2_leader" value="<?php echo $row2["s2_leader"];?>"></td>
  <td><input id="tb1" type="text" placeholder="" name="s3_leader" value="<?php echo $row3["s3_leader"];?>"></td>
   <td><input id="tb1" type="text" placeholder="" name="s4_leader" value="<?php echo $row4["s4_leader"];?>"></td>
    <td><input id="tb1" type="text" placeholder="" name="s5_leader" value="<?php echo $row5["s5_leader"];?>"></td>
	 <td><input id="tb1" type="text" placeholder="" name="s6_leader" value="<?php echo $row6["s6_leader"];?>"></td>
	  <td><input id="tb1" type="text" placeholder="" name="s7_leader" value="<?php echo $row7["s7_leader"];?>"></td>
	   <td><input id="tb1" type="text" placeholder="" name="s8_leader" value="<?php echo $row8["s8_leader"];?>"></td>
</tr>

<tr>
			<td>7.</td>
            <td>Team work</td>
	        <td><input id="tb1" type="text" placeholder="" name="s1_team" value="<?php echo $row1["s1_team"];?>"></td>
           <td><input id="tb1" type="text" placeholder="" name="s2_team" value="<?php echo $row2["s2_team"];?>"></td>
  <td><input id="tb1" type="text" placeholder="" name="s3_team" value="<?php echo $row3["s3_team"];?>"></td>
   <td><input id="tb1" type="text" placeholder="" name="s4_team" value="<?php echo $row4["s4_team"];?>"></td>
    <td><input id="tb1" type="text" placeholder="" name="s5_team" value="<?php echo $row5["s5_team"];?>"></td>
	 <td><input id="tb1" type="text" placeholder="" name="s6_team" value="<?php echo $row6["s6_team"];?>"></td>
	  <td><input id="tb1" type="text" placeholder="" name="s7_team" value="<?php echo $row7["s7_team"];?>"></td>
	   <td><input id="tb1" type="text" placeholder="" name="s8_team" value="<?php echo $row8["s8_team"];?>"></td>
</tr>

<tr>
			<td>8.</td>
            <td>Arts</td>
	        <td><input id="tb1" type="text" placeholder="" name="s1_art" value="<?php echo $row1["s1_art"];?>"></td>
           <td><input id="tb1" type="text" placeholder="" name="s2_art" value="<?php echo $row2["s2_art"];?>"></td>
  <td><input id="tb1" type="text" placeholder="" name="s3_art" value="<?php echo $row3["s3_art"];?>"></td>
   <td><input id="tb1" type="text" placeholder="" name="s4_art" value="<?php echo $row4["s4_art"];?>"></td>
    <td><input id="tb1" type="text" placeholder="" name="s5_art" value="<?php echo $row5["s5_art"];?>"></td>
	 <td><input id="tb1" type="text" placeholder="" name="s6_art" value="<?php echo $row6["s6_art"];?>"></td>
	  <td><input id="tb1" type="text" placeholder="" name="s7_art" value="<?php echo $row7["s7_art"];?>"></td>
	   <td><input id="tb1" type="text" placeholder="" name="s8_art" value="<?php echo $row8["s8_art"];?>"></td>
</tr>
<tr>
			<td>8.</td>
            <td>Sports & games</td>
	        <td><input id="tb1" type="text" placeholder="" name="s1_sport" value="<?php echo $row1["s1_sport"];?>"></td>
           <td><input id="tb1" type="text" placeholder="" name="s2_sport" value="<?php echo $row2["s2_sport"];?>"></td>
  <td><input id="tb1" type="text" placeholder="" name="s3_sport" value="<?php echo $row3["s3_sport"];?>"></td>
   <td><input id="tb1" type="text" placeholder="" name="s4_sport" value="<?php echo $row4["s4_sport"];?>"></td>
    <td><input id="tb1" type="text" placeholder="" name="s5_sport" value="<?php echo $row5["s5_sport"];?>"></td>
	 <td><input id="tb1" type="text" placeholder="" name="s6_sport" value="<?php echo $row6["s6_sport"];?>"></td>
	  <td><input id="tb1" type="text" placeholder="" name="s7_sport" value="<?php echo $row7["s7_sport"];?>"></td>
	   <td><input id="tb1" type="text" placeholder="" name="s8_sport" value="<?php echo $row8["s8_sport"];?>"></td>
</tr>

<tr>
			<td>10.</td>
            <td>Well behaved</td>
	        <td><input id="tb1" type="text" placeholder="" name="s1_behave" value="<?php echo $row1["s1_behave"];?>"></td>
           <td><input id="tb1" type="text" placeholder="" name="s2_behave" value="<?php echo $row2["s2_behave"];?>"></td>
  <td><input id="tb1" type="text" placeholder="" name="s3_behave" value="<?php echo $row3["s3_behave"];?>"></td>
   <td><input id="tb1" type="text" placeholder="" name="s4_behave" value="<?php echo $row4["s4_behave"];?>"></td>
    <td><input id="tb1" type="text" placeholder="" name="s5_behave" value="<?php echo $row5["s5_behave"];?>"></td>
	 <td><input id="tb1" type="text" placeholder="" name="s6_behave" value="<?php echo $row6["s6_behave"];?>"></td>
	  <td><input id="tb1" type="text" placeholder="" name="s7_behave" value="<?php echo $row7["s7_behave"];?>"></td>
	   <td><input id="tb1" type="text" placeholder="" name="s8_behave" value="<?php echo $row8["s8_behave"];?>"></td>
</tr>

<tr>
			<td>11.</td>
            <td>Well groomed</td>
	        <td><input id="tb1" type="text" placeholder="" name="s1_groom" value="<?php echo $row1["s1_groom"];?>"></td>
           <td><input id="tb1" type="text" placeholder="" name="s2_groom" value="<?php echo $row2["s2_groom"];?>"></td>
  <td><input id="tb1" type="text" placeholder="" name="s3_groom" value="<?php echo $row3["s3_groom"];?>"></td>
   <td><input id="tb1" type="text" placeholder="" name="s4_groom" value="<?php echo $row4["s4_groom"];?>"></td>
    <td><input id="tb1" type="text" placeholder="" name="s5_groom" value="<?php echo $row5["s5_groom"];?>"></td>
	 <td><input id="tb1" type="text" placeholder="" name="s6_groom" value="<?php echo $row6["s6_groom"];?>"></td>
	  <td><input id="tb1" type="text" placeholder="" name="s7_groom" value="<?php echo $row7["s7_groom"];?>"></td>
	   <td><input id="tb1" type="text" placeholder="" name="s8_groom" value="<?php echo $row8["s8_groom"];?>"></td>
</tr>

<tr>
			<td>12.</td>
            <td>Enterpreneurship skills</td>
	        <td><input id="tb1" type="text" placeholder="" name="s1_entr" value="<?php echo $row1["s1_entr"];?>"></td>
           <td><input id="tb1" type="text" placeholder="" name="s2_entr" value="<?php echo $row2["s2_entr"];?>"></td>
  <td><input id="tb1" type="text" placeholder="" name="s3_entr" value="<?php echo $row3["s3_entr"];?>"></td>
   <td><input id="tb1" type="text" placeholder="" name="s4_entr" value="<?php echo $row4["s4_entr"];?>"></td>
    <td><input id="tb1" type="text" placeholder="" name="s5_entr" value="<?php echo $row5["s5_entr"];?>"></td>
	 <td><input id="tb1" type="text" placeholder="" name="s6_entr" value="<?php echo $row6["s6_entr"];?>"></td>
	  <td><input id="tb1" type="text" placeholder="" name="s7_entr" value="<?php echo $row7["s7_entr"];?>"></td>
	   <td><input id="tb1" type="text" placeholder="" name="s8_entr" value="<?php echo $row8["s8_entr"];?>"></td>
</tr>

	
     </tbody>
</table>
  </fieldset>
	
	
	
	
	
	
	
	
	
		
		
    </fieldset>

		   
		   
		   
		   
		


 
 
 <button type="submit" class="pure-button pure-button-primary" name="submit">Save</button>	
</form>





<?php		   
if(isset($_POST["submit"])) {
	
	
	$stid=$_POST["stuid"];
				
	
				
				
	//$_POST['atmosphere']			
	
		
	$sqbio1="UPDATE `tbl_mn_s1skill` SET `s1_co`='".$_POST['s1_co']."',`s1_extra`='".$_POST['s1_extra']."',`s1_tech`='".$_POST['s1_tech']."',`s1_comm`='".$_POST['s1_comm']."',`s1_inter`='".$_POST['s1_inter']."',`s1_leader`='".$_POST['s1_leader']."',`s1_team`='".$_POST['s1_team']."',`s1_art`='".$_POST['s1_art']."',`s1_sport`='".$_POST['s1_sport']."',`s1_behave`='".$_POST['s1_behave']."',`s1_groom`='".$_POST['s1_groom']."',`s1_entr`='".$_POST['s1_entr']."' WHERE s1_stud_id='$stid'"; 
	
	mysqli_query($con,$sqbio1);
	
	
	
	
		$sqbio2="UPDATE `tbl_mn_s2skill` SET `s2_co`='".$_POST['s2_co']."',`s2_extra`='".$_POST['s2_extra']."',`s2_tech`='".$_POST['s2_tech']."',`s2_comm`='".$_POST['s2_comm']."',`s2_inter`='".$_POST['s2_inter']."',`s2_leader`='".$_POST['s2_leader']."',`s2_team`='".$_POST['s2_team']."',`s2_art`='".$_POST['s2_art']."',`s2_sport`='".$_POST['s2_sport']."',`s2_behave`='".$_POST['s2_behave']."',`s2_groom`='".$_POST['s2_groom']."',`s2_entr`='".$_POST['s2_entr']."' WHERE s2_stud_id='$stid'"; 
	
	mysqli_query($con,$sqbio2);
	
	
	
	
		$sqbio3="UPDATE `tbl_mn_s3skill` SET `s3_co`='".$_POST['s3_co']."',`s3_extra`='".$_POST['s3_extra']."',`s3_tech`='".$_POST['s3_tech']."',`s3_comm`='".$_POST['s3_comm']."',`s3_inter`='".$_POST['s3_inter']."',`s3_leader`='".$_POST['s3_leader']."',`s3_team`='".$_POST['s3_team']."',`s3_art`='".$_POST['s3_art']."',`s3_sport`='".$_POST['s3_sport']."',`s3_behave`='".$_POST['s3_behave']."',`s3_groom`='".$_POST['s3_groom']."',`s3_entr`='".$_POST['s3_entr']."' WHERE s3_stud_id='$stid'"; 
	
	mysqli_query($con,$sqbio3);
	
	
		$sqbio4="UPDATE `tbl_mn_s4skill` SET `s4_co`='".$_POST['s4_co']."',`s4_extra`='".$_POST['s4_extra']."',`s4_tech`='".$_POST['s4_tech']."',`s4_comm`='".$_POST['s4_comm']."',`s4_inter`='".$_POST['s4_inter']."',`s4_leader`='".$_POST['s4_leader']."',`s4_team`='".$_POST['s4_team']."',`s4_art`='".$_POST['s4_art']."',`s4_sport`='".$_POST['s4_sport']."',`s4_behave`='".$_POST['s4_behave']."',`s4_groom`='".$_POST['s4_groom']."',`s4_entr`='".$_POST['s4_entr']."' WHERE s4_stud_id='$stid'"; 
	
	mysqli_query($con,$sqbio4);
	
	
	
		$sqbio5="UPDATE `tbl_mn_s5skill` SET `s5_co`='".$_POST['']."',`s5_tech`='".$_POST['']."',`s5_comm`='".$_POST['']."',`s5_inter`='".$_POST['']."',`s5_leader`='".$_POST['']."',`s5_team`='".$_POST['']."',`s5_art`='".$_POST['']."',`s5_sport`='".$_POST['']."',`s5_behave`='".$_POST['']."',`s5_groom`='".$_POST['']."',`s5_entr`='".$_POST['']."' WHERE s5_stud_id='$stid'"; 
	
	mysqli_query($con,$sqbio5);
	
	
	
	
		$sqbio6="UPDATE `tbl_mn_s6skill` SET `s6_co`='".$_POST['']."',`s6_extra`='".$_POST['']."',`s6_tech`='".$_POST['']."',`s6_comm`='".$_POST['']."',`s6_inter`='".$_POST['']."',`s6_leader`='".$_POST['']."',`s6_team`='".$_POST['']."',`s6_art`='".$_POST['']."',`s6_sport`='".$_POST['']."',`s6_behave`='".$_POST['']."',`s6_groom`='".$_POST['']."',`s6_entr`='".$_POST['']."' WHERE s6_stud_id='$stid'"; 
	
	mysqli_query($con,$sqbio6);
	
	
	
	
		$sqbio7="UPDATE `tbl_mn_s7skill` SET `s7_co`='".$_POST['']."',`s7_extra`='".$_POST['']."',`s7_tech`='".$_POST['']."',`s7_comm`='".$_POST['']."',`s7_inter`='".$_POST['']."',`s7_leader`='".$_POST['']."',`s7_team`='".$_POST['']."',`s7_art`='".$_POST['']."',`s7_sport`='".$_POST['']."',`s7_behave`='".$_POST['']."',`s7_groom`='".$_POST['']."',`s7_entr`='".$_POST['']."' WHERE s7_stud_id='$stid'"; 
	
	mysqli_query($con,$sqbio7);
	
	
	
		$sqbio8="UPDATE `tbl_mn_s8skill` SET `s8_co`='".$_POST['']."',`s8_extra`='".$_POST['']."',`s8_tech`='".$_POST['']."',`s8_comm`='".$_POST['']."',`s8_inter`='".$_POST['']."',`s8_leader`='".$_POST['']."',`s8_team`='".$_POST['']."',`s8_art`='".$_POST['']."',`s8_sport`='".$_POST['']."',`s8_behave`='".$_POST['']."',`s8_groom`='".$_POST['']."',`s8_entr`='".$_POST['']."' WHERE s8_stud_id='$stid'"; 
	
	mysqli_query($con,$sqbio8);
	
	
	
	
	
	?>
	
	<a id="anch1" href="mentor_assesmnt.php?action=edit&id=<?php echo $stid; ?>"></a>
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
