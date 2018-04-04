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
				
				
		$tncolg=$row["tncolg"];
				$tnuniv=$row["tnuniv"];
				$tnaggr=$row["tnaggr"];
				$tnmedi=$row["tnmedi"];
				$pls1colg=$row["pls1colg"];
				$pls1univ=$row["pls1univ"];
				$pls1aggr=$row["pls1aggr"];
				$pls1medi=$row["pls1medi"];
				$pls2colg=$row["pls2colg"];
				$pls2univ=$row["pls2univ"];
				$pls2aggr=$row["pls2aggr"];
				$pls2medi=$row["pls2medi"];
				$gradcolg=$row["gradcolg"];
				$graduniv=$row["graduniv"];
				$gradaggr=$row["gradaggr"];
				$gradmedi=$row["gradmedi"];
				$addcolg=$row["addcolg"];
				$adduniv=$row["adduniv"];
				$addaggr=$row["addaggr"];
				$addmedi=$row["addmedi"];
						
						
				
				
				
				
				
				
				
				
				
				
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
        
        <div class="content">
           <!-- <h2 class="content-subhead">How to use this layout</h2>-->
           
<form class="pure-form pure-form-stacked" action=""method="post">
    
		
		<h2 class="content-subhead">12.Academic qualification</h2>	
		<fieldset>
		
		
		<input type="hidden" name="stuid" value="<?php echo $stid;?>" >   
<table class="pure-table pure-table-horizontal">
    <thead>
        <tr>
            <th>Qualification</th>
            <th>School/College/Institute name</th>
            <th>Board/University</th>
            <th>%Aggregate Marks</th>
			<th>Medium of instruction</th>
			
			
        </tr>
    </thead>

    <tbody>
        <tr>
            <td>10</td>
            <td><input id="email" type="text" placeholder=""name="tncolg" value="<?php echo $tncolg;?>"></td>
            <td><input id="email" type="text" placeholder=""name="tnuniv"value="<?php echo $tnuniv;?>"></td>
            <td><input id="email" type="text" placeholder=""name="tnaggr"value="<?php echo $tnaggr;?>"></td>
			<td><input id="email" type="text" placeholder=""name="tnmedi"value="<?php echo $tnmedi;?>"></td>
        </tr>

        <tr>
           <td>+1</td>
            <td><input id="email" type="text" placeholder=""name="pls1colg"value="<?php echo $pls1colg;?>"></td>
            <td><input id="email" type="text" placeholder=""name="pls1univ"value="<?php echo $pls1univ;?>"></td>
            <td><input id="email" type="text" placeholder=""name="pls1aggr"value="<?php echo $pls1aggr;?>"></td>                                        
			<td><input id="email" type="text" placeholder=""name="pls1medi"value="<?php echo $pls1medi;?>"></td>
        </tr>
		<tr>
           <td>+2</td>
            <td><input id="email" type="text" placeholder=""name="pls2colg"value="<?php echo $pls2colg;?>"></td>
            <td><input id="email" type="text" placeholder=""name="pls2univ"value="<?php echo $pls2univ;?>"></td>
            <td><input id="email" type="text" placeholder=""name="pls2aggr"value="<?php echo $pls2aggr;?>"></td>
			<td><input id="email" type="text" placeholder=""name="pls2medi"value="<?php echo $pls2medi;?>"></td>
        </tr>
		<tr>
           <td>Graduation</td>
            <td><input id="email" type="text" placeholder=""name="gradcolg"value="<?php echo $gradcolg;?>"></td>
            <td><input id="email" type="text" placeholder=""name="graduniv"value="<?php echo $graduniv;?>"></td>
            <td><input id="email" type="text" placeholder=""name="gradaggr"value="<?php echo $gradaggr;?>"></td>
			<td><input id="email" type="text" placeholder=""name="gradmedi"value="<?php echo $gradmedi;?>"></td>
        </tr>
		<tr>
           <td>Additional qualification</td>
            <td><input id="email" type="text" placeholder=""name="addcolg"value="<?php echo $addcolg;?>"></td>
            <td><input id="email" type="text" placeholder=""name="adduniv"value="<?php echo $adduniv;?>"></td>
            <td><input id="email" type="text" placeholder=""name="addaggr"value="<?php echo $addaggr;?>"></td>
			<td><input id="email" type="text" placeholder=""name="addmedi"value="<?php echo $addmedi;?>"></td>
        </tr>

       
		
    </tbody>
</table>
 </fieldset>




  


        <button type="submit"name="submit"  id="submit"class="pure-button pure-button-primary">Save</button>
   
</form>




		   


<?php		   
if(isset($_POST["submit"])) {
	
	
	$stid=$_POST["stuid"];
	


	$tncolg=$_POST["tncolg"];
	$tnuniv=$_POST["tnuniv"];
	
	
	          
				
				$tnaggr=$_POST["tnaggr"];
				$tnmedi=$_POST["tnmedi"];
				$pls1colg=$_POST["pls1colg"];
				$pls1univ=$_POST["pls1univ"];
				$pls1aggr=$_POST["pls1aggr"];
				$pls1medi=$_POST["pls1medi"];
				$pls2colg=$_POST["pls2colg"];
				$pls2univ=$_POST["pls2univ"];
				$pls2aggr=$_POST["pls2aggr"];
				$pls2medi=$_POST["pls2medi"];
				$gradcolg=$_POST["gradcolg"];
				$graduniv=$_POST["graduniv"];
				$gradaggr=$_POST["gradaggr"];
				$gradmedi=$_POST["gradmedi"];
				$addcolg=$_POST["addcolg"];
				$adduniv=$_POST["adduniv"];
				$addaggr=$_POST["addaggr"];
				$addmedi=$_POST["addmedi"];
									
	
	
	
	
	
	
	
		
	$sqbio1="UPDATE `tbl_mn_biodata` SET `tncolg`='$tncolg',`tnuniv`='$tnuniv',`tnaggr`='$tnaggr',`tnmedi`='$tnmedi'
	,`pls1colg`='$pls1colg',`pls1univ`='$pls1univ',`pls1aggr`='$pls1aggr',`pls1medi`='$pls1medi',`pls2colg`='$pls2colg'
	,`pls2univ`='$pls2univ',`pls2aggr`='$pls2aggr',`pls2medi`='$pls2medi',`gradcolg`='$gradcolg',`graduniv`='$graduniv'
	,`gradaggr`='$gradaggr',`gradmedi`='$gradmedi',`addcolg`='$addcolg',`adduniv`='$adduniv',`addaggr`='$addaggr'
	,`addmedi`='$addmedi' WHERE bio_stud_id='$stid'"; 
	
	mysqli_query($con,$sqbio1);
	
	
	
	
	
	?>
	
	<a id="anch1" href="biodata_academic.php?action=edit&id=<?php echo $stid; ?>"></a>
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

