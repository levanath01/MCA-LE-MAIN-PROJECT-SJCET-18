<?php include('mentoring_book_header.php'); ?>



<?php
 
  					
			if(isset($_GET['action']))
{
	if($_GET['action']=='edit')
	{
	$id=$_GET['id'];
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

    <?php include('ann3_sidebar.php'); ?>

    <div id="main">
        <div class="header">
            <h1>PSYCHO-GEOMETRY</h1>
            <!--<h2>A subtitle for your page goes here</h2>-->
        </div>

        <div class="content">
           <!-- <h2 class="content-subhead">How to use this layout</h2>-->
		   
		   
	





	
		   
		   
		  
           
<form class="pure-form pure-form-stacked" action="" method="post">


    <fieldset>
        

       
		<input type="hidden" name="idi" value="<?php echo $id;?>">
		
		   <h2 class="content-subhead">ANNEXURE-3</h2>
           <h3 class="content-subhead">- Geometric Shapes:Simple and Unusual Personality Test -</h3>
		<p><b>#Look at the proposed geometric shapes and choose the one you think beat represents you as a person.</b></p>
	 <fieldset>
	 <img src="annex3pic.jpg" height="300px" width="800px">
	 
	 
	 </fieldset>

	 <h3 class="content-subhead">* Choose your figure:</h3>
		
		
	<select id="bckgd" name="figure" required>
           
            <option value="Square">Square</option>
            <option value="Triangle">Triangle</option>
			<option value="Rectangle">Rectangle</option>
			<option value="Circle">Circle</option>
			<option value="Zigzag">Zigzag</option>
        </select>
	   
		
		 </fieldset>

			
		   
		  
		 
		  <br>
	<button type="submit" class="pure-button pure-button-primary" name="submit">Show Result</button>	
		
		 </fieldset>


 <br>
	
</form>





<?php		   
if(isset($_POST["submit"])) {
	
	$idi=$_POST["idi"];
	//$stid=$_POST["stuid"];
	
	$fig=$_POST["figure"];
	
		
	$sqbio1="INSERT INTO `tbl_mn_annex3`(`annex3_stud_id`, `annex3_fig`) VALUES ('$idi','$fig')"; 
	
	mysqli_query($con,$sqbio1);
	
	
	
	
		
	
	
	
	
	
	?>
	
	<a id="anch1" href="ann3_begin.php?action=edit&id=<?php echo $idi; ?>"></a>
    <script>
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
