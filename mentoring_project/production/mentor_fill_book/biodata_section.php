

 <?php include('mentoring_book_header.php'); ?>


 
 
 
 
 
 <?php
  
  
  
  					
			if(isset($_GET['action']))
{
	if($_GET['action']=='edit')
	{
	$id=$_GET['id'];
  
		$sql="SELECT * FROM `tbl_mn_biodata` WHERE `bio_stud_id`='$id'";
		$r= mysqli_query($con,$sql);
		while($row=mysqli_fetch_assoc($r))
		{  $stid=$row["bio_stud_id"];
				$sname=$row["mname"];
				$sdob=$row["mdob"];
				$sage=$row["mage"];
				$sbgrp=$row["mbgrp"];
				$srelg=$row["mrelg"];
				$scaste=$row["mcst"];
				$sparish=$row["mparish"];
				$saddrs=$row["maddrs"];
				$smail=$row["memail"];
				$smob=$row["mmob"];
				
				
				
				
				$hostel=$row["hostel"];
				$vhome=$row["visithome"];
				$stay=$row["mnstay"];
				$convey=$row["mnconvey"];
				
				
				
				
				
				$adnature=$row["admnature"];
				$morg=$row["mnorg"];
				$mjob=$row["mnjob"];
				$mdur=$row["mnjdur"];
				$mrespo=$row["mnrespo"];
				$mrole=$row["rolemodl"];
				
				
				

				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
		}
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

  
  
  
  
  <?php include('biodata_section_sidebar.php'); ?>

    <div id="main">
        <div class="header">
            <h1>Bio-data of the Mente</h1>
            <!--<h2>A subtitle for your page goes here</h2>-->
        </div>

        <div class="content">
           <!-- <h2 class="content-subhead">How to use this layout</h2>-->
           
<form class="pure-form pure-form-stacked" action="" method="post">
    <fieldset>
        
 <div class="pure-u-1 pure-u-md-1-3">
  <input type="hidden" name="stuid" value="<?php echo $stid;?>" >   
                <label for="first-name">Name:(Mr/Ms)</label>
                <input id="first-name" class="pure-u-23-24" type="text" name="mname" value="<?php echo $sname;?>">
            </div>
			 <span class="pure-form-message">This is a required field.</span>
        <div class="pure-g">
           

            <div class="pure-u-1 pure-u-md-1-3">
                <label for="last-name">Date Of Birth</label>
                <input id="last-name" class="pure-u-23-24" type="date" name="mdob" value="<?php echo $sdob;?>">
            </div>

            <div class="pure-u-1 pure-u-md-1-3">
                <label for="email">Age</label>
                <input id="email" class="pure-u-23-24" type="text" name="mage" value="<?php echo $sage;?>">
            </div>

            <div class="pure-u-1 pure-u-md-1-3">
                <label for="city">Blood Group</label>
                <input id="city" class="pure-u-23-24" type="text"name="mbgrp" value="<?php echo $sbgrp;?>">
            </div>
			
			
			
			
			<div class="pure-u-1 pure-u-md-1-3">
                <label for="city">Religion</label>
                <input id="city" class="pure-u-23-24" type="text"name="mrelg" value="<?php echo $srelg;?>">
            </div>
			<div class="pure-u-1 pure-u-md-1-3">
                <label for="city">Caste</label>
                <input id="city" class="pure-u-23-24" type="text"name="mcst" value="<?php echo $scaste;?>">
            </div>
			<div class="pure-u-1 pure-u-md-1-3">
                <label for="city">If catholic specify diocese/parish</label>
                <input id="city" class="pure-u-23-24" type="text"name="mparish" value="<?php echo $sparish;?>">
            </div>
			
			 
			
			<div class="pure-u-1 pure-u-md-1-3">
			<label for="city">Address</label>
            <textarea class="pure-input-1-2" placeholder="Text"name="maddrs" value="<?php echo $saddrs;?>"></textarea>
            </div>

			<div class="pure-u-1 pure-u-md-1-3">
                <label for="city">Email</label>
                <input id="city" class="pure-u-23-24" type="email" name="memail" value="<?php echo $smail;?>">
            </div>
			<div class="pure-u-1 pure-u-md-1-3">
                <label for="city">Contact No.</label>
                <input id="city" class="pure-u-23-24" type="text"name="mmob" value="<?php echo $smob;?>">
            </div>
			
			
			</div>
			
			
			 

            
       

       
        
    </fieldset>
	

      

		   

		  

		   
		   
		   
		   
		





    <fieldset>
      

		  <br>
		 
		<label for="email">Is mentee a hostler  </label>
		
		
	
	
	
	<input id="nri_parents" type="radio" name="hostel" value="Yes" <?php echo $hostel == "Yes" ? 'checked="checked"' : ''; ?> >Yes
		<input id="nri_parents" type="radio" name="hostel" value="No" <?php echo $hostel == "No" ? 'checked="checked"' : ''; ?>>No
	
	
	
	
		
	
		
		
       
		
		<label for="email">If a hosteller,frequency of visiting home  </label>
		<input id="state" type="radio" name="visithome" value="Weekly" <?php echo $vhome == "Weekly" ? 'checked="checked"' : ''; ?> >Weekly
		<input id="state" type="radio" name="visithome" value="Monthly" <?php echo $vhome == "Monthly" ? 'checked="checked"' : ''; ?>>Monthly
			<input id="state" type="radio" name="visithome" value="Annualy" <?php echo $vhome == "Annualy" ? 'checked="checked"' : ''; ?>>Annualy
		
		
	
		
		<br>
		
		
		If not a hosteller:
		<label for="email">*With whom mentee is staying</label>
        <input id="email" type="text" placeholder=""name="mnstay"value="<?php echo $stay;?>">
		<label for="email">*The mode of conveyance</label>
        <input id="email" type="text" placeholder=""name="mnconvey"value="<?php echo $convey;?>">
		
		
		
		
		 </fieldset>
		
		
	
 <fieldset>
<label for="email">Nature of Admission  </label>
  

<input id="state" type="radio" name="admnature" value="Merit" <?php echo  $adnature == "Merit" ? 'checked="checked"' : ''; ?> >Merit
		<input id="state" type="radio" name="admnature" value="Management" <?php echo  $adnature == "Management" ? 'checked="checked"' : ''; ?>>Management
			<input id="state" type="radio" name="admnature" value="NRI" <?php echo  $adnature == "NRI" ? 'checked="checked"' : ''; ?>>NRI

<input id="state" type="radio" name="admnature" value="Fee-Waiver" <?php echo  $adnature == "Fee-Waiver" ? 'checked="checked"' : ''; ?> >Fee-Waiver
		<input id="state" type="radio" name="admnature" value="Lateral Entry" <?php echo  $adnature == "Lateral Entry" ? 'checked="checked"' : ''; ?>>Lateral Entry
		


  
  
	   
	   
	     
 </fieldset>
		
	
		
	<h2 class="content-subhead">Work experience,if any</h2>	
		<fieldset>
<table class="pure-table pure-table-horizontal">
    <thead>
        <tr>
            <th>Organization</th>
            <th>Job title</th>
            <th>Duration</th>
            <th>Nature of responsibilities</th>
			
			
			
        </tr>
    </thead>

    <tbody>
        <tr>
           
            <td><input id="email" type="text" placeholder=""name="mnorg"value="<?php echo $morg;?>"></td>
            <td><input id="email" type="text" placeholder=""name="mnjob"value="<?php echo $mjob;?>"></td>
            <td><input id="email" type="text" placeholder=""name="mnjdur"value="<?php echo $mdur;?>"></td>
			<td><input id="email" type="text" placeholder=""name="mnrespo"value="<?php echo $mrespo;?>"></td>
        </tr>

       

       
		
    </tbody>
</table>
 </fieldset>


 
 
 

 
 


 
 
 
 
 

 
		
		
		
	
<br>
<label for="email">Mentees Role Model</label>
 
 
        <input id="email" type="text" placeholder=""name="mnrolemdl"value="<?php echo $mrole;?>">
		
		
		
		
		
 </fieldset>	
  


























<br>

  


        <button type="submit" class="pure-button pure-button-primary" name="submit" id="submit">Save</button>
   
</form>




<?php		   
if(isset($_POST["submit"])) {
	
	
	$stid=$_POST["stuid"];
				$stname=$_POST["mname"];
				$stdob=$_POST["mdob"];
				$stage=$_POST["mage"];
				$stbgrp=$_POST["mbgrp"];
				$strelg=$_POST["mrelg"];
				$stcaste=$_POST["mcst"];
				$stparish=$_POST["mparish"];
				$staddrs=$_POST["maddrs"];
				$stmail=$_POST["memail"];
				$stmob=$_POST["mmob"];
				
				
				
				
				
				
				
				$hostel=$_POST["hostel"];
				$vhome=$_POST["visithome"];
				$stay=$_POST["mnstay"];
				$convey=$_POST["mnconvey"];
				
				
				
				
				//$engs=$_POST["engspeak"];
				//$engr=$_POST["engread"];
				//$engw=$_POST["engwrite"];
				//$engce=$_POST["engcert"];
				
				//$hins=$_POST["hinspeak"];
				//$hinr=$_POST["hinread"];
				//$hinw=$_POST["hinwrite"];
				//$hince=$_POST["hincert"];
				
				
				//$mals=$_POST["malspeak"];
				//$malr=$_POST["malread"];
				//$malw=$_POST["malwrite"];
				//$malce=$_POST["malcert"];
				
				
				
				
				
				
				$adnature=$_POST["admnature"];
				$morg=$_POST["mnorg"];
				$mjob=$_POST["mnjob"];
				$mdur=$_POST["mnjdur"];
				$mrespo=$_POST["mnrespo"];
				$mrole=$_POST["mnrolemdl"];
				
	
	
	
	
	
	
	
		
	$sqbio1="UPDATE `tbl_mn_biodata` SET `mname`='$stname',`mdob`='$stdob'
	,`mage`='$stage',`mbgrp`='$stbgrp',`mrelg`='$strelg',`mcst`='$stcaste',`mparish`='$stparish'
	,`maddrs`='$staddrs',`memail`='$stmail',`mmob`='$stmob',`hostel`='$hostel',`visithome`='$vhome'
	,`mnstay`='$stay',`mnconvey`='$convey',`admnature`='$adnature',`mnorg`='$morg',`mnjob`='$mjob'
	,`mnjdur`='$mdur',`mnrespo`='$mrespo',`rolemodl`='$mrole' WHERE bio_stud_id='$stid'"; 
	
	mysqli_query($con,$sqbio1);
	
	
	
	
	
	?>
	
	<a id="anch1" href="biodata_section.php?action=edit&id=<?php echo $stid; ?>"></a>
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
