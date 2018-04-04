

<?php include('mentoring_book_header.php'); ?>


 <?php
  
  
  
  					
			if(isset($_GET['action']))
{
	if($_GET['action']=='edit')
	{
	$id=$_GET['id'];
  
  

	$sql="SELECT * FROM `tbl_mn_objectiveimpr` WHERE `obj_stud_id`='$id'";
		$r= mysqli_query($con,$sql);
		$row=mysqli_fetch_assoc($r);
		 $stid=$row["obj_stud_id"];
				
				
				
				
		
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

    <?php include('objective_impr_sidebar.php'); ?>

    <div id="main">
        <div class="header">
            <h1>Mentor's Objective Impressions about the Mentee</h1>
            <!--<h2>A subtitle for your page goes here</h2>-->
        </div>

        <div class="content">
           <!-- <h2 class="content-subhead">How to use this layout</h2>-->
		   
		   
	





	
		   
		   
		     <!-- Horizontal Form-->
			<h2 class="content-subhead">27.First Impression about the mentee</h2> 
           
<form class="pure-form pure-form-stacked" action="" method="post">


    <fieldset>
        
 <input type="hidden" name="stuid" value="<?php echo $stid;?>" >   
       
		
		
		 
                <label>a)Character</label>
                <input id="character"  type="text"  placeholder="" name="charac" value="<?php echo $row["charac"]; ?>"/>
            
                <label>b)Personalityonality</label>
                <input id="personality"  type="text"  placeholder="" name="persona"  value="<?php echo $row["persona"]; ?>"/>
          
                <label>c)Impressiveness</label>
                <input type="text"  placeholder=""name="impressiv" value="<?php echo $row["impressiv"]; ?>" >
           
          
            
      
    
	</fieldset>
	
	

           

		
	
	
	
		   
		    <h2 class="content-subhead">28.Sources of parental income</h2>
			
		   <!-- Horizontal Form -->
		   
		   
		   
		   	   
		   
    <fieldset>
	
	
        <label for="nri_parents" >a)Mention whether the  parents are NRI</label>
		
	<input id="nri_parents" type="radio" name="	srcnri" value="Yes" <?php echo $row["srcnri"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes
		<input id="nri_parents" type="radio" name="	srcnri" value="No" <?php echo $row["srcnri"] == "No" ? 'checked="checked"' : ''; ?>>No
	
	
		
		
		
		
 
        <label for="loan">b)If the mentee has vailed education loan,specify the bank & loan amount </label>
        <textarea   placeholder="Text" name="loan"value="<?php echo $row["loan"]; ?>">
		</textarea>
	
		
		<label for="fee_concession">c)Fee concession,if any,received(from management)</label>
        <input id="fee_concession" type="text" placeholder="" name="concession"value="<?php echo $row["concession"]; ?>">
	
	
		<label for="scholership">d)Scholarship,if any,received,specify the amount received</label>
         <textarea   placeholder="Text" name="scholarship"value="<?php echo $row["scholarship"]; ?>">
		</textarea>
	
		 
		<label for="financial_asst">e)Requiring financial assistance for specific needs like fee/books/uniforms/IVs/conveyance,if yes,specify the extent of support</label>
		<input id="nri_parents" type="radio" name="finassist" value="Yes" <?php echo $row["finassist"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes
		<input id="nri_parents" type="radio" name="finassist" value="No" <?php echo $row["finassist"]== "No" ? 'checked="checked"' : ''; ?>>No
	
	
		
    </fieldset>

		   
		   
		   
		   
		

<h2 class="content-subhead">29.Economical & ethnical background of the Mentee(Especially mension the social class_middle class/upper class/poor):</h2>
 
 <input id="nri_parents" type="radio" name="	economicbg	" value="Upper Class" <?php echo $row["economicbg"] == "Upper Class" ? 'checked="checked"' : ''; ?> >Upper Class
		<input id="nri_parents" type="radio" name="	economicbg	" value="Middle Class" <?php echo $row["economicbg"] == "Middle Class" ? 'checked="checked"' : ''; ?>>Middle Class
	<input id="nri_parents" type="radio" name="	economicbg	" value="Poor" <?php echo $row["economicbg"] == "Poor" ? 'checked="checked"' : ''; ?> >Poor
		
	
	
	
 
 

  
 
  <fieldset>

<label for="prntl_hrmy">30.Parental Harmony:</label>
<input id="prntl_hrmy" type="text" placeholder=""name="	pharmony"value="<?php echo $row["pharmony"]; ?>">
<label for="personality">31.Relationship with parents & siblings:</label>
<input id="reltnshp" type="text" placeholder=""name="prel"value="<?php echo $row["prel"]; ?>">
<label for="atms">32.Atmosphere/support at home for studies:</label>
<input id="atms" type="text" placeholder=""name="	atmosphere"value="<?php echo $row["atmosphere"]; ?>">
<label for="reli">33.Religious life/atrtitude towards ethics and morality:</label>
<input id="reli" type="text" placeholder=""name="religious"value="<?php echo $row["religious"]; ?>">
<label for="socio">34.Socio-political outlooks(identify party affilation ,if any):</label>
<input id="socio" type="text" placeholder=""name="	political"value="<?php echo $row["political"]; ?>">
<label for="rdng">35.Reading habits(Name the Newspaper/Magazines the mentee usually reads:</label>
<input id="rdng" type="text" placeholder=""name="	reading"value="<?php echo $row["reading"]; ?>">
<label for="bhv">36.Conduct & behaviour prior to joining SJCET as understood by the mentor through interactions with the mentee,or with persons having such information:</label>
<input id="bhv" type="text" placeholder="" name="	behaviour"value="<?php echo $row["behaviour"]; ?>">
<label for="prntl_hrmy">37.Potentials (Skill) of the mentee (Identify those correctly):</label>
 <textarea   placeholder="Text" name="	potential"value="<?php echo $row["potential"]; ?>">
		</textarea>
		</fieldset>
		
		<fieldset>
		
<label for="atms">38.Weakness(Lack of essential skillsvsuch as English communication ability)of the mentee :</label>
<input id="atms" type="text" placeholder=""name="	weakness"value="<?php echo $row["weakness"]; ?>">
<label for="atms">39.Adjustment of classs/college/hostel environment(Specify the extent):</label>
 <textarea   placeholder="Text"name="adjustment"value="<?php echo $row["adjustment"]; ?>">
		</textarea>
<label for="prntl_hrmy">40.Addiction to habbits(Strictly Note):</label>
<textarea   placeholder="Text"name="addiction"value="<?php echo $row["addiction"]; ?>">
		</textarea>
<label for="prntl_hrmy">41.Improvement areas:</label>
<textarea   placeholder="Text"name="	improvement"value="<?php echo $row["improvement"]; ?>">
		</textarea>
<label for="prntl_hrmy">42. A)Specify concers of the mentee as assured by the mentor:</label>
a)<input id="atms" type="text" placeholder=""name="concern1"value="<?php echo $row["concern1"]; ?>">
b)<input id="atms" type="text" placeholder=""name="concern2"value="<?php echo $row["concern2"]; ?>">
<label for="comm">c)If the communication skill is concern,specify whether the mentee should be refered to the language lab:</label>

 <input id="rents" type="radio" name="language_lab	" value="Yes" <?php echo $row["language_lab"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes</label>
			<label  for="comm" ><input id="i_parents" type="radio" name="language_lab	" value="No"<?php echo $row["language_lab"] == "No" ? 'checked="checked"' : ''; ?>>No</label>

			
			
			<h3 class="content-subhead">Details of Referral to counselling</h3>
  <fieldset>
 
 <label for="counslg">B)Specify whether the mentee requires counselling/pshychiatric assistance:</label>
 <input id="rents" type="radio" name="	counseling_ref	" value="Yes" <?php echo $row["counseling_ref"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes</label>
			<label  for="comm" ><input id="i_parents" type="radio" name="	counseling_ref	" value="No"<?php echo $row["counseling_ref"] == "No" ? 'checked="checked"' : ''; ?>>No</label>
			
			
			
			
			
 
 
 <label for="rmy">43.Fitness for Engineering/Management/Opted profession/Entrepreneurship:</label>
<input id="rmy" type="text" placeholder=""name="	fitness"value="<?php echo $row["fitness"]; ?>">
<label for="goal">44.Life Goals set(to be set) by the Mentee:</label>
<input id="goal" type="text" placeholder=""name="	goals"value="<?php echo $row["goals"]; ?>">
 <h3 class="content-subhead">45.Overall observations(Noted through successive interactions):Mark Y/N</h3>
 <fieldset>
 <table class="pure-table pure-table-horizontal">
    <thead>
        <tr>
            <th>No</th>
            <th>Attribute</th>
            <th>Remarks</th>
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
            <td>Whether introvent/extrovert</td>
			<td>
			<input id="nri_parents" type="radio" name="s1extro" value="Yes" <?php echo $row["s1extro"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes<br>
		<input id="nri_parents" type="radio" name="s1extro" value="No" <?php echo $row["s1extro"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
		
			<td><input id="nri_parents" type="radio" name="s2extro" value="Yes" <?php echo $row["s2extro"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes
		<input id="nri_parents" type="radio" name="s2extro" value="No" <?php echo $row["s2extro"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
		
			<td><input id="nri_parents" type="radio" name="s3extro" value="Yes" <?php echo $row["s3extro"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes
		<input id="nri_parents" type="radio" name="s3extro" value="No" <?php echo $row["s3extro"]  == "No" ? 'checked="checked"' : ''; ?>>No</td>
		
			<td><input id="nri_parents" type="radio" name="s4extro" value="Yes" <?php echo $row["s4extro"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes
		<input id="nri_parents" type="radio" name="	s4extro" value="No" <?php echo $row["s4extro"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
		
			<td><input id="nri_parents" type="radio" name="s5extro" value="Yes" <?php echo $row["s5extro"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes
		<input id="nri_parents" type="radio" name="s5extro" value="No" <?php echo $row["s5extro"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
		
			<td><input id="nri_parents" type="radio" name="	s6extro" value="Yes" <?php echo $row["s6extro"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes
		<input id="nri_parents" type="radio" name="s6extro" value="No" <?php echo $row["s6extro"]  == "No" ? 'checked="checked"' : ''; ?>>No</td>
		
			<td><input id="nri_parents" type="radio" name="s7extro" value="Yes" <?php echo $row["s7extro"]  == "Yes" ? 'checked="checked"' : ''; ?> >Yes
		<input id="nri_parents" type="radio" name="s7extro" value="No" <?php echo $row["s7extro"]  == "No" ? 'checked="checked"' : ''; ?>>No</td>
		
			<td><input id="nri_parents" type="radio" name="	s8extro" value="Yes" <?php echo $row["s8extro"]  == "Yes" ? 'checked="checked"' : ''; ?> >Yes
		<input id="nri_parents" type="radio" name="s8extro" value="No" <?php echo $row["s8extro"]  == "No" ? 'checked="checked"' : ''; ?>>No</td>
			</tr>
			
		<td>2.</td>
            <td>Abnormal behaviour noted</td>
			<td><input id="nri_parents" type="radio" name="s1behave" value="Yes" <?php echo $row["s1behave"]  == "Yes" ? 'checked="checked"' : ''; ?> >Yes<br>
		<input id="nri_parents" type="radio" name="s1behave" value="No" <?php echo $row["s1behave"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
		
			<td><input id="nri_parents" type="radio" name="s2behave" value="Yes" <?php echo $row["s2behave"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes
		<input id="nri_parents" type="radio" name="s2behave" value="No" <?php echo $row["s2behave"]== "No" ? 'checked="checked"' : ''; ?>>No</td>
		
			<td><input id="nri_parents" type="radio" name="s3behave" value="Yes" <?php echo $row["s3behave"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes
		<input id="nri_parents" type="radio" name="s3behave" value="No" <?php echo $row["s3behave"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
		
			<td><input id="nri_parents" type="radio" name="s4behave" value="Yes" <?php echo $row["s4behave"]== "Yes" ? 'checked="checked"' : ''; ?> >Yes
		<input id="nri_parents" type="radio" name="s4behave" value="No" <?php echo$row["s4behave"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
		
			<td><input id="nri_parents" type="radio" name="s5behave" value="Yes" <?php echo $row["s5behave"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes
		<input id="nri_parents" type="radio" name="s5behave" value="No" <?php echo $row["s5behave"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
		
			<td><input id="nri_parents" type="radio" name="s6behave" value="Yes" <?php echo $row["s6behave"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes
		<input id="nri_parents" type="radio" name="s6behave" value="No" <?php echo $row["s6behave"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
		
			<td><input id="nri_parents" type="radio" name="s7behave" value="Yes" <?php echo $row["s7behave"]== "Yes" ? 'checked="checked"' : ''; ?> >Yes
		<input id="nri_parents" type="radio" name="s7behave" value="No" <?php echo $row["s7behave"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
		
			<td><input id="nri_parents" type="radio" name="s8behave" value="Yes" <?php echo $row["s8behave"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes
		<input id="nri_parents" type="radio" name="s8behave" value="No" <?php echo $row["s8behave"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
			</tr>	
			
			<td>3.</td>
            <td>Abnormal health condition(physical)</td>
			<td><input id="nri_parents" type="radio" name="s1health" value="Yes" <?php echo $row["s1health"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes<br>
		<input id="nri_parents" type="radio" name="s1health" value="No" <?php echo $row["s1health"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
		
			<td><input id="nri_parents" type="radio" name="s2health" value="Yes" <?php echo $row["s2health"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes
		<input id="nri_parents" type="radio" name="s2health" value="No" <?php echo $row["s2health"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
		
			<td><input id="nri_parents" type="radio" name="s3health" value="Yes" <?php echo $row["s3health"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes
		<input id="nri_parents" type="radio" name="s3health" value="No" <?php echo $row["s3health"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
		
			<td><input id="nri_parents" type="radio" name="s4health" value="Yes" <?php echo $row["s4health"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes
		<input id="nri_parents" type="radio" name="s4health" value="No" <?php echo $row["s4health"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
		
			<td><input id="nri_parents" type="radio" name="s5health" value="Yes" <?php echo $row["s5health"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes
		<input id="nri_parents" type="radio" name="s5health" value="No" <?php echo $row["s5health"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
		
			<td><input id="nri_parents" type="radio" name="s6health" value="Yes" <?php echo $row["s6health"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes
		<input id="nri_parents" type="radio" name="s6health" value="No" <?php echo $row["s6health"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
		
			<td><input id="nri_parents" type="radio" name="s7health" value="Yes" <?php echo $row["s7health"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes
		<input id="nri_parents" type="radio" name="s7health" value="No" <?php echo $row["s7health"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
		
			<td><input id="nri_parents" type="radio" name="s8health" value="Yes" <?php echo $row["s8health"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes
		<input id="nri_parents" type="radio" name="s8health" value="No" <?php echo $row["s8health"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
			</tr>
			
			
			<td>4.</td>
            <td>Erratic mental disposition/emotional stability</td>
			<td><input id="nri_parents" type="radio" name="s1mental" value="Yes" <?php echo $row["s1mental"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes<br>
		<input id="nri_parents" type="radio" name="s1mental" value="No" <?php echo $row["s1mental"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
		
			<td><input id="nri_parents" type="radio" name="s2mental" value="Yes" <?php echo $row["s2mental"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes
		<input id="nri_parents" type="radio" name="s2mental" value="No" <?php echo $row["s2mental"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
		
			<td><input id="nri_parents" type="radio" name="s3mental" value="Yes" <?php echo $row["s3mental"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes
		<input id="nri_parents" type="radio" name="s3mental" value="No" <?php echo $row["s3mental"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
		
			<td><input id="nri_parents" type="radio" name="s4mental" value="Yes" <?php echo $row["s4mental"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes
		<input id="nri_parents" type="radio" name="s4mental" value="No" <?php echo $row["s4mental"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
		
			<td><input id="nri_parents" type="radio" name="s5mental" value="Yes" <?php echo $row["s5mental"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes
		<input id="nri_parents" type="radio" name="s5mental" value="No" <?php echo $row["s5mental"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
		
			<td><input id="nri_parents" type="radio" name="s6mental" value="Yes" <?php echo $row["s6mental"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes
		<input id="nri_parents" type="radio" name="s6mental" value="No" <?php echo $row["s6mental"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
		
			<td><input id="nri_parents" type="radio" name="s7mental" value="Yes" <?php echo $row["s7mental"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes
		<input id="nri_parents" type="radio" name="s7mental" value="No" <?php echo $row["s7mental"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
		
			<td><input id="nri_parents" type="radio" name="s8mental" value="Yes" <?php echo $row["s8mental"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes
		<input id="nri_parents" type="radio" name="s8mental" value="No" <?php echo $row["s8mental"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
			</tr>
			
			<td>5.</td>
            <td>Whether rebellious by nature</td>
			<td><input id="nri_parents" type="radio" name="s1rebel" value="Yes" <?php echo $row["s1rebel"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes<br>
		<input id="nri_parents" type="radio" name="s1rebel" value="No" <?php echo $row["s1rebel"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
		
			<td><input id="nri_parents" type="radio" name="s2rebel" value="Yes" <?php echo $row["s2rebel"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes
		<input id="nri_parents" type="radio" name="s2rebel" value="No" <?php echo $row["s2rebel"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
		
			<td><input id="nri_parents" type="radio" name="s3rebel" value="Yes" <?php echo $row["s3rebel"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes
		<input id="nri_parents" type="radio" name="s3rebel" value="No" <?php echo $row["s3rebel"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
		
			<td><input id="nri_parents" type="radio" name="s4rebel" value="Yes" <?php echo $row["s4rebel"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes
		<input id="nri_parents" type="radio" name="s4rebel" value="No" <?php echo $row["s4rebel"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
		
			<td><input id="nri_parents" type="radio" name="s5rebel" value="Yes" <?php echo $row["s5rebel"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes
		<input id="nri_parents" type="radio" name="s5rebel" value="No" <?php echo $row["s5rebel"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
		
			<td><input id="nri_parents" type="radio" name="s6rebel" value="Yes" <?php echo $row["s6rebel"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes
		<input id="nri_parents" type="radio" name="s6rebel" value="No" <?php echo $row["s6rebel"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
		
			<td><input id="nri_parents" type="radio" name="s7rebel" value="Yes" <?php echo $row["s7rebel"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes
		<input id="nri_parents" type="radio" name="s7rebel" value="No" <?php echo $row["s7rebel"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
		
			<td><input id="nri_parents" type="radio" name="s8rebel" value="Yes" <?php echo $row["s8rebel"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes
		<input id="nri_parents" type="radio" name="s8rebel" value="No" <?php echo $row["s8rebel"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
			</tr>
			
			<td>6.</td>
            <td>Whether hyperactive(ADHD)</td>
			<td><input id="nri_parents" type="radio" name="s1hyper" value="Yes" <?php echo $row["s1hyper"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes<br>
		<input id="nri_parents" type="radio" name="s1hyper" value="No" <?php echo $row["s1hyper"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
		
			<td><input id="nri_parents" type="radio" name="s2hyper" value="Yes" <?php echo $row["s2hyper"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes
		<input id="nri_parents" type="radio" name="s2hyper" value="No" <?php echo $row["s2hyper"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
		
			<td><input id="nri_parents" type="radio" name="s3hyper" value="Yes" <?php echo $row["s3hyper"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes
		<input id="nri_parents" type="radio" name="s3hyper" value="No" <?php echo $row["s3hyper"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
		
			<td><input id="nri_parents" type="radio" name="s4hyper" value="Yes" <?php echo $row["s4hyper"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes
		<input id="nri_parents" type="radio" name="s4hyper" value="No" <?php echo $row["s4hyper"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
		
			<td><input id="nri_parents" type="radio" name="s5hyper" value="Yes" <?php echo $row["s5hyper"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes
		<input id="nri_parents" type="radio" name="s5hyper" value="No" <?php echo $row["s5hyper"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
		
			<td><input id="nri_parents" type="radio" name="s6hyper" value="Yes" <?php echo $row["s6hyper"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes
		<input id="nri_parents" type="radio" name="s6hyper" value="No" <?php echo $row["s6hyper"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
		
			<td><input id="nri_parents" type="radio" name="s7hyper" value="Yes" <?php echo $row["s7hyper"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes
		<input id="nri_parents" type="radio" name="s7hyper" value="No" <?php echo $row["s7hyper"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
		
			<td><input id="nri_parents" type="radio" name="s8hyper" value="Yes" <?php echo $row["s8hyper"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes
		<input id="nri_parents" type="radio" name="s8hyper" value="No" <?php echo $row["s8hyper"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
			</tr>
			
			<td>7.</td>
            <td>History of prolonged medician for physical/mental ailments</td>
			<td><input id="nri_parents" type="radio" name="s1prolong" value="Yes" <?php echo $row["s1prolong"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes<br>
		<input id="nri_parents" type="radio" name="s1prolong" value="No" <?php echo $row["s1prolong"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
		
			<td><input id="nri_parents" type="radio" name="s2prolong" value="Yes" <?php echo $row["s2prolong"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes
		<input id="nri_parents" type="radio" name="s2prolong" value="No" <?php echo $row["s2prolong"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
		
			<td><input id="nri_parents" type="radio" name="s3prolong" value="Yes" <?php echo $row["s3prolong"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes
		<input id="nri_parents" type="radio" name="s3prolong" value="No" <?php echo $row["s3prolong"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
		
			<td><input id="nri_parents" type="radio" name="s4prolong" value="Yes" <?php echo $row["s4prolong"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes
		<input id="nri_parents" type="radio" name="s4prolong" value="No" <?php echo $row["s4prolong"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
		
			<td><input id="nri_parents" type="radio" name="s5prolong" value="Yes" <?php echo $row["s5prolong"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes
		<input id="nri_parents" type="radio" name="s5prolong" value="No" <?php echo $row["s5prolong"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
		
			<td><input id="nri_parents" type="radio" name="s6prolong" value="Yes" <?php echo $row["s6prolong"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes
		<input id="nri_parents" type="radio" name="s6prolong" value="No" <?php echo $row["s6prolong"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
		
		
			<td><input id="nri_parents" type="radio" name="s7prolong" value="Yes" <?php echo $row["s7prolong"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes
		<input id="nri_parents" type="radio" name="s7prolong" value="No" <?php echo $row["s7prolong"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
		
			<td><input id="nri_parents" type="radio" name="s8prolong" value="Yes" <?php echo $row["s8prolong"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes
		<input id="nri_parents" type="radio" name="s8prolong" value="No" <?php echo $row["s8prolong"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
			</tr>
			
		<td>8.</td>
            <td>Whether observes personal hygine</td>
			<td><input id="nri_parents" type="radio" name="s1observe" value="Yes" <?php echo $row["s1observe"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes<br>
		<input id="nri_parents" type="radio" name="s1observe" value="No" <?php echo $row["s1observe"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
		
			<td><input id="nri_parents" type="radio" name="s2observe" value="Yes" <?php echo $row["s2observe"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes
		<input id="nri_parents" type="radio" name="s2observe" value="No" <?php echo $row["s2observe"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
		
			<td><input id="nri_parents" type="radio" name="s3observe" value="Yes" <?php echo $row["s3observe"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes
		<input id="nri_parents" type="radio" name="s3observe" value="No" <?php echo $row["s3observe"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
		
			<td><input id="nri_parents" type="radio" name="s4observe" value="Yes" <?php echo $row["s4observe"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes
		<input id="nri_parents" type="radio" name="s4observe" value="No" <?php echo $row["s4observe"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
		
		
			<td><input id="nri_parents" type="radio" name="s5observe" value="Yes" <?php echo $row["s5observe"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes
		<input id="nri_parents" type="radio" name="s5observe" value="No" <?php echo $row["s5observe"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
		
			<td><input id="nri_parents" type="radio" name="s6observe" value="Yes" <?php echo $row["s6observe"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes
		<input id="nri_parents" type="radio" name="s6observe" value="No" <?php echo $row["s6observe"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
		
			<td><input id="nri_parents" type="radio" name="s7observe" value="Yes" <?php echo $row["s7observe"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes
		<input id="nri_parents" type="radio" name="s7observe" value="No" <?php echo $row["s7observe"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
		
			<td><input id="nri_parents" type="radio" name="s8observe" value="Yes" <?php echo $row["s8observe"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes
		<input id="nri_parents" type="radio" name="s8observe" value="No" <?php echo $row["s8observe"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
			</tr>	
			
			<td>9.</td>
            <td>Whether creative/talented person</td>
			<td><input id="nri_parents" type="radio" name="s1creative" value="Yes" <?php echo $row["s1creative"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes<br>
		<input id="nri_parents" type="radio" name="s1creative" value="No" <?php echo $row["s1creative"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
		
			<td><input id="nri_parents" type="radio" name="s2creative" value="Yes" <?php echo $row["s2creative"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes
		<input id="nri_parents" type="radio" name="s2creative" value="No" <?php echo $row["s2creative"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
		
			<td><input id="nri_parents" type="radio" name="s3creative" value="Yes" <?php echo $row["s3creative"]  == "Yes" ? 'checked="checked"' : ''; ?> >Yes
		<input id="nri_parents" type="radio" name="s3creative" value="No" <?php echo $row["s3creative"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
		
			<td><input id="nri_parents" type="radio" name="s4creative" value="Yes" <?php echo $row["s4creative"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes
		<input id="nri_parents" type="radio" name="s4creative" value="No" <?php echo $row["s4creative"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
		
			<td><input id="nri_parents" type="radio" name="s5creative" value="Yes" <?php echo $row["s5creative"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes
		<input id="nri_parents" type="radio" name="s5creative" value="No" <?php echo $row["s5creative"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
		
			<td><input id="nri_parents" type="radio" name="s6creative" value="Yes" <?php echo $row["s6creative"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes
		<input id="nri_parents" type="radio" name="s6creative" value="No" <?php echo $row["s6creative"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
		
			<td><input id="nri_parents" type="radio" name="s7creative" value="Yes" <?php echo $row["s7creative"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes
		<input id="nri_parents" type="radio" name="s7creative" value="No" <?php echo $row["s7creative"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
		
			<td><input id="nri_parents" type="radio" name="s8creative" value="Yes" <?php echo $row["s7creative"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes
		<input id="nri_parents" type="radio" name="s8creative" value="No" <?php echo $row["s7creative"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
			</tr>
			
			
			<td>10.</td>
            <td>Addicition to TV/media</td>
			<td><input id="nri_parents" type="radio" name="s1tv" value="Yes" <?php echo $row["s1tv"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes<br>
		<input id="nri_parents" type="radio" name="s1tv" value="No" <?php echo $row["s1tv"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
		
			<td><input id="nri_parents" type="radio" name="s2tv" value="Yes" <?php echo $row["s2tv"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes
		<input id="nri_parents" type="radio" name="s2tv" value="No" <?php echo $row["s2tv"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
		
			<td><input id="nri_parents" type="radio" name="s3tv" value="Yes" <?php echo $row["s3tv"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes
		<input id="nri_parents" type="radio" name="s3tv" value="No" <?php echo $row["s3tv"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
		
			<td><input id="nri_parents" type="radio" name="s4tv" value="Yes" <?php echo $row["s4tv"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes
		<input id="nri_parents" type="radio" name="s4tv" value="No" <?php echo $row["s5tv"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
		
			<td><input id="nri_parents" type="radio" name="s5tv" value="Yes" <?php echo $row["s5tv"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes
		<input id="nri_parents" type="radio" name="s5tv" value="No" <?php echo $row["s5tv"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
		
			<td><input id="nri_parents" type="radio" name="s6tv" value="Yes" <?php echo$row["s6tv"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes
		<input id="nri_parents" type="radio" name="s6tv" value="No" <?php echo $row["s6tv"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
		
			<td><input id="nri_parents" type="radio" name="s7tv" value="Yes" <?php echo $row["s7tv"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes
		<input id="nri_parents" type="radio" name="s7tv" value="No" <?php echo $row["s7tv"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
		
			<td><input id="nri_parents" type="radio" name="s8tv" value="Yes" <?php echo $row["s8tv"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes
		<input id="nri_parents" type="radio" name="s8tv" value="No" <?php echo $row["s8tv"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
			</tr>
			
			<td>11.</td>
            <td>Addicition to socialmedia</td>
			<td><input id="nri_parents" type="radio" name="s1social" value="Yes" <?php echo $row["s1social"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes<br>
		<input id="nri_parents" type="radio" name="s1social" value="No" <?php echo $row["s1social"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
		
			<td><input id="nri_parents" type="radio" name="s2social" value="Yes" <?php echo $row["s2social"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes
		<input id="nri_parents" type="radio" name="s2social" value="No" <?php echo $row["s2social"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
		
			<td><input id="nri_parents" type="radio" name="s3social" value="Yes" <?php echo $row["s3social"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes
		<input id="nri_parents" type="radio" name="s3social" value="No" <?php echo $row["s3social"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
		
			<td><input id="nri_parents" type="radio" name="s4social" value="Yes" <?php echo $row["s4social"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes
		<input id="nri_parents" type="radio" name="s4social" value="No" <?php echo $row["s4social"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
		
			<td><input id="nri_parents" type="radio" name="s5social" value="Yes" <?php echo $row["s5social"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes
		<input id="nri_parents" type="radio" name="s5social" value="No" <?php echo $row["s5social"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
		
			<td><input id="nri_parents" type="radio" name="s6social" value="Yes" <?php echo $row["s6social"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes
		<input id="nri_parents" type="radio" name="s6social" value="No" <?php echo $row["s6social"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
		
			<td><input id="nri_parents" type="radio" name="s7social" value="Yes" <?php echo $row["s7social"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes
		<input id="nri_parents" type="radio" name="s7social" value="No" <?php echo $row["s7social"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
		
			<td><input id="nri_parents" type="radio" name="s8social" value="Yes" <?php echo $row["s8social"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes
		<input id="nri_parents" type="radio" name="s8social" value="No" <?php echo $row["s8social"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
			</tr>
			
			<td>12.</td>
            <td>History of phychological/psychiatric counselling attented</td>
			<td><input id="nri_parents" type="radio" name="s1psycho" value="Yes" <?php echo $row["s1psycho"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes<br>
		<input id="nri_parents" type="radio" name="	s1psycho" value="No" <?php echo $row["s1psycho"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
		
			<td><input id="nri_parents" type="radio" name="s2psycho" value="Yes" <?php echo $row["s2psycho"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes
		<input id="nri_parents" type="radio" name="s2psycho" value="No" <?php echo $row["s2psycho"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
		
			<td><input id="nri_parents" type="radio" name="s3psycho" value="Yes" <?php echo $row["s3psycho"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes
		<input id="nri_parents" type="radio" name="	s3psycho" value="No" <?php echo $row["s3psycho"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
		
			<td><input id="nri_parents" type="radio" name="s4psycho" value="Yes" <?php echo $row["s4psycho"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes
		<input id="nri_parents" type="radio" name="	s4psycho" value="No" <?php echo $row["s4psycho"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
		
			<td><input id="nri_parents" type="radio" name="s5psycho" value="Yes" <?php echo $row["s5psycho"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes
		<input id="nri_parents" type="radio" name="	s5psycho" value="No" <?php echo $row["s5psycho"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
		
			<td><input id="nri_parents" type="radio" name="s6psycho" value="Yes" <?php echo $row["s6psycho"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes
		<input id="nri_parents" type="radio" name="s6psycho" value="No" <?php echo $row["s6psycho"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
		
			<td><input id="nri_parents" type="radio" name="s7psycho" value="Yes" <?php echo $row["s7psycho"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes
		<input id="nri_parents" type="radio" name="	s7psycho" value="No" <?php echo $row["s7psycho"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
		
			<td><input id="nri_parents" type="radio" name="s8psycho" value="Yes" <?php echo $row["s8psycho"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes
		<input id="nri_parents" type="radio" name="s8psycho" value="No" <?php echo $row["s8psycho"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
			</tr>
			
			
			<td>13.</td>
            <td>Whether properly groomed</td>
			<td><input id="nri_parents" type="radio" name="s1groom" value="Yes" <?php echo $row["s1groom"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes<br>
		<input id="nri_parents" type="radio" name="	s1groom" value="No" <?php echo $row["s1groom"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
		
			<td><input id="nri_parents" type="radio" name="s2groom" value="Yes" <?php echo $row["s2groom"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes
		<input id="nri_parents" type="radio" name="s2groom" value="No" <?php echo $row["s2groom"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
		
			<td><input id="nri_parents" type="radio" name="s3groom" value="Yes" <?php echo $row["s3groom"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes
		<input id="nri_parents" type="radio" name="	s3groom" value="No" <?php echo $row["s3groom"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
		
			<td><input id="nri_parents" type="radio" name="s4groom" value="Yes" <?php echo $row["s4groom"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes
		<input id="nri_parents" type="radio" name="s4groom" value="No" <?php echo $row["s4groom"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
		
			<td><input id="nri_parents" type="radio" name="s5groom" value="Yes" <?php echo $row["s5groom"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes
		<input id="nri_parents" type="radio" name="	s5groom" value="No" <?php echo $row["s5groom"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
		
			<td><input id="nri_parents" type="radio" name="s6groom" value="Yes" <?php echo $row["s6groom"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes
		<input id="nri_parents" type="radio" name="s6groom" value="No" <?php echo $row["s6groom"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
		
			<td><input id="nri_parents" type="radio" name="s7groom" value="Yes" <?php echo $row["s7groom"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes
		<input id="nri_parents" type="radio" name="	s7groom" value="No" <?php echo $row["s7groom"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
		
			<td><input id="nri_parents" type="radio" name="s8groom" value="Yes" <?php echo $row["s8groom"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes
		<input id="nri_parents" type="radio" name="	s8groom" value="No" <?php echo $row["s8groom"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
			</tr>
			
			<td>14.</td>
            <td>Compliance with college rules,including dress code</td>
			<td><input id="nri_parents" type="radio" name="s1rules" value="Yes" <?php echo $row["s1rules"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes<br>
		<input id="nri_parents" type="radio" name="s1rules" value="No" <?php echo $row["s1rules"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
		
			<td><input id="nri_parents" type="radio" name="s2rules" value="Yes" <?php echo $row["s2rules"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes
		<input id="nri_parents" type="radio" name="s2rules" value="No" <?php echo $row["s2rules"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
		
			<td><input id="nri_parents" type="radio" name="s3rules" value="Yes" <?php echo $row["s3rules"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes
		<input id="nri_parents" type="radio" name="s3rules" value="No" <?php echo $row["s3rules"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
		
			<td><input id="nri_parents" type="radio" name="s4rules" value="Yes" <?php echo $row["s4rules"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes
		<input id="nri_parents" type="radio" name="s4rules" value="No" <?php echo $row["s4rules"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
		
			<td><input id="nri_parents" type="radio" name="s5rules" value="Yes" <?php echo $row["s5rules"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes
		<input id="nri_parents" type="radio" name="s5rules" value="No" <?php echo $row["s5rules"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
		
			<td><input id="nri_parents" type="radio" name="s6rules" value="Yes" <?php echo $row["s6rules"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes
		<input id="nri_parents" type="radio" name="s6rules" value="No" <?php echo $row["s6rules"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
		
			<td><input id="nri_parents" type="radio" name="s7rules" value="Yes" <?php echo $row["s7rules"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes
		<input id="nri_parents" type="radio" name="s7rules" value="No" <?php echo $row["s7rules"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
		
			<td><input id="nri_parents" type="radio" name="s8rules" value="Yes" <?php echo $row["s8rules"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes
		<input id="nri_parents" type="radio" name="s8rules" value="No" <?php echo $row["s8rules"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
			</tr>
			
			<td>15.</td>
            <td>Pratice of etiquette/manners/courtesy</td>
			<td><input id="nri_parents" type="radio" name="s1manners" value="Yes" <?php echo $row["s1manners"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes<br>
		<input id="nri_parents" type="radio" name="s1manners" value="No" <?php echo $row["s1manners"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
		
			<td><input id="nri_parents" type="radio" name="s2manners" value="Yes" <?php echo $row["s2manners"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes
		<input id="nri_parents" type="radio" name="s2manners" value="No" <?php echo $row["s2manners"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
		
			<td><input id="nri_parents" type="radio" name="s3manners" value="Yes" <?php echo $row["s3manners"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes
		<input id="nri_parents" type="radio" name="s3manners" value="No" <?php echo $row["s3manners"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
		
			<td><input id="nri_parents" type="radio" name="s4manners" value="Yes" <?php echo $row["s4manners"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes
		<input id="nri_parents" type="radio" name="s4manners" value="No" <?php echo $row["s4manners"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
		
			<td><input id="nri_parents" type="radio" name="s5manners" value="Yes" <?php echo $row["s5manners"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes
		<input id="nri_parents" type="radio" name="s5manners" value="No" <?php echo $row["s5manners"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
		
			<td><input id="nri_parents" type="radio" name="s6manners" value="Yes" <?php echo $row["s6manners"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes
		<input id="nri_parents" type="radio" name="s6manners" value="No" <?php echo $row["s6manners"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
		
			<td><input id="nri_parents" type="radio" name="s7manners" value="Yes" <?php echo $row["s7manners"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes
		<input id="nri_parents" type="radio" name="s7manners" value="No" <?php echo $row["s7manners"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
		
			<td><input id="nri_parents" type="radio" name="s8manners" value="Yes" <?php echo $row["s8manners"] == "Yes" ? 'checked="checked"' : ''; ?> >Yes
		<input id="nri_parents" type="radio" name="s8manners" value="No" <?php echo $row["s8manners"] == "No" ? 'checked="checked"' : ''; ?>>No</td>
			</tr>
				
			
     </tbody>
</table>
  </fieldset>
 
 
 
 
 
 
 
 
 <button type="submit" class="pure-button pure-button-primary" name="submit" id="submit">Save</button>
   
</form>





<?php		   
if(isset($_POST["submit"])) {
	
	
	$stid=$_POST["stuid"];
				
				
				
				
				
	//$_POST['atmosphere']			
	
		
	$sqbio1="UPDATE `tbl_mn_objectiveimpr` SET `obj_stud_id`='$stid',`charac`='".$_POST['charac']."'	
	,`persona`='".$_POST["persona"]."',`impressiv`='".$_POST['impressiv']."',`srcnri`='".$_POST['srcnri']."',`loan`='".$_POST['loan']."',`concession`='".$_POST['concession']."'
	,`scholarship`='".$_POST['scholarship']."',`finassist`='".$_POST['finassist']."',`economicbg`='".$_POST['economicbg']."',`pharmony`='".$_POST['pharmony']."'
	,`prel`='".$_POST['prel']."',`atmosphere`='".$_POST['atmosphere']."',`religious`='".$_POST['religious']."',`political`='".$_POST['political']."'
	
	
	,`reading`='".$_POST['reading']."',`behaviour`='".$_POST['behaviour']."',`potential`='".$_POST['potential']."',`weakness`='".$_POST['weakness']."'
	,`adjustment`='".$_POST['adjustment']."',`addiction`='".$_POST['addiction']."',`improvement`='".$_POST['improvement']."',`concern1`='".$_POST['concern1']."'
	
	,`concern2`='".$_POST['concern2']."',`language_lab`='".$_POST['language_lab']."',`counseling_ref`='".$_POST['counseling_ref']."',`fitness`='".$_POST['fitness']."'
	,`goals`='".$_POST['goals']."',`s1extro`='".$_POST['s1extro']."',`s2extro`='".$_POST['s2extro']."',`s3extro`='".$_POST['s3extro']."',`s4extro`='".$_POST['s4extro']."'
	
	,`s5extro`='".$_POST['s5extro']."',`s6extro`='".$_POST['s6extro']."',`s7extro`='".$_POST['s7extro']."',`s8extro`='".$_POST['s9extro']."',`s1behave`='".$_POST['s1behave']."'
	,`s2behave`='".$_POST['s2behave']."',`s3behave`='".$_POST['s3behave']."',`s4behave`='".$_POST['s4behave']."',`s5behave`='".$_POST['s5behave']."',`s6behave`='".$_POST['s6behave']."'
	
	,`s7behave`='".$_POST['s7behave']."',`s8behave`='".$_POST['s8behave']."',`s1health`='".$_POST['s1health']."',`s2health`='".$_POST['s2health']."',`s3health`='".$_POST['s3health']."'
	,`s4health`='".$_POST['s4health']."',`s5health`='".$_POST['s5health']."',`s6health`='".$_POST['s6health']."',`s7health`='".$_POST['s7health']."',`s8health`='".$_POST['s8health']."'
	
	,`s1mental`='".$_POST['s1mental']."',`s2mental`='".$_POST['s2mental']."',`s3mental`='".$_POST['s3mental']."',`s4mental`='".$_POST['s4mental']."',`s5mental`='".$_POST['s5mental']."'
	,`s6mental`='".$_POST['s6mental']."',`s7mental`='".$_POST['s7mental']."',`s8mental`='".$_POST['s8mental']."',`s1rebel`='".$_POST['s1rebel']."',`s2rebel`='".$_POST['s2rebel']."'
	,`s3rebel`='".$_POST['s3rebel']."',`s4rebel`='".$_POST['s4rebel']."',`s5rebel`='".$_POST['s5rebel']."',`s6rebel`='".$_POST['s6rebel']."',`s7rebel`='".$_POST['s7rebel']."'
	
	,`s8rebel`='".$_POST['s8rebel']."',`s1hyper`='".$_POST['s1hyper']."',`s2hyper`='".$_POST['s2hyper']."',`s3hyper`='".$_POST['s3hyper']."',`s4hyper`='".$_POST['s4hyper']."'
	,`s5hyper`='".$_POST['s5hyper']."',`s6hyper`='".$_POST['s6hyper']."',`s7hyper`='".$_POST['s7hyper']."',`s8hyper`='".$_POST['s8hyper']."',`s1prolong`='".$_POST['s1prolong']."'
	,`s2prolong`='".$_POST['s2prolong']."',`s3prolong`='".$_POST['s3prolong']."',`s4prolong`='".$_POST['s4prolong']."',`s5prolong`='".$_POST['s5prolong']."',`s6prolong`='".$_POST['s6prolong']."'
	,`s7prolong`='".$_POST['s7prolong']."',`s8prolong`='".$_POST['s8prolong']."',`s1observe`='".$_POST['s1observe']."',`s2observe`='".$_POST['s2observe']."',`s3observe`='".$_POST['s3observe']."'
	,`s4observe`='".$_POST['s4observe']."',`s5observe`='".$_POST['s5observe']."',`s6observe`='".$_POST['s6observe']."',`s7observe`='".$_POST['s7observe']."',`s8observe`='".$_POST['s8observe']."'
	,`s1creative`='".$_POST['s1creative']."',`s2creative`='".$_POST['s2creative']."',`s3creative`='".$_POST['s3creative']."',`s4creative`='".$_POST['s4creative']."',`s5creative`='".$_POST['s5creative']."'
	
	,`s6creative`='".$_POST['s6creative']."',`s7creative`='".$_POST['s7creative']."',`s8creative`='".$_POST['s8creative']."',`s1tv`='".$_POST['s1tv']."',`s2tv`='".$_POST['s2tv']."'
	,`s3tv`='".$_POST['s3tv']."',`s4tv`='".$_POST['s4tv']."',`s5tv`='".$_POST['s5tv']."',`s6tv`='".$_POST['s6tv']."',`s7tv`='".$_POST['s7tv']."',`s8tv`='".$_POST['s8tv']."'
	
	,`s1social`='".$_POST['s1social']."',`s2social`='".$_POST['s2social']."',`s3social`='".$_POST['s3social']."',`s4social`='".$_POST['s4social']."',`s5social`='".$_POST['s5social']."'
	,`s6social`='".$_POST['s6social']."',`s7social`='".$_POST['s7social']."',`s8social`='".$_POST['s8social']."',`s1psycho`='".$_POST['s1psycho']."',`s2psycho`='".$_POST['s2psycho']."'
	,`s3psycho`='".$_POST['s3psycho']."',`s4psycho`='".$_POST['s4psycho']."',`s5psycho`='".$_POST['s5psycho']."',`s6psycho`='".$_POST['s6psycho']."',`s7psycho`='".$_POST['s7psycho']."'
	,`s8psycho`='".$_POST['s8psycho']."',`s1groom`='".$_POST['s1groom']."',`s2groom`='".$_POST['s2groom']."',`s3groom`='".$_POST['s3groom']."',`s4groom`='".$_POST['s4groom']."'
	,`s5groom`='".$_POST['s5groom']."',`s6groom`='".$_POST['s6groom']."',`s7groom`='".$_POST['s7groom']."',`s8groom`='".$_POST['s8groom']."',`s1rules`='".$_POST['s1rules']."'
	,`s2rules`='".$_POST['s2rules']."',`s3rules`='".$_POST['s3rules']."',`s4rules`='".$_POST['s4rules']."',`s5rules`='".$_POST['s5rules']."',`s6rules`='".$_POST['s6rules']."'
	,`s7rules`='".$_POST['s7rules']."',`s8rules`='".$_POST['s8rules']."',`s1manners`='".$_POST['s1manners']."',`s2manners`='".$_POST['s2manners']."',`s3manners`='".$_POST['s3manners']."'
	,`s4manners`='".$_POST['s4manners']."',`s5manners`='".$_POST['s5manners']."',`s6manners`='".$_POST['s6manners']."',`s7manners`='".$_POST['s7manners']."',`s8manners`='".$_POST['s8manners']."' WHERE obj_stud_id='$stid'"; 
	
	mysqli_query($con,$sqbio1);
	
	
	
	
	
	?>
	
	<a id="anch1" href="objective_impr.php?action=edit&id=<?php echo $stid; ?>"></a>
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
