<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A layout example with a side menu that hides on mobile, just like the Pure website.">
    <title>Responsive Side Menu &ndash; Layout Examples &ndash; Pure</title>
    
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-" crossorigin="anonymous">
    
    
    
        <!--[if lte IE 8]>
            <link rel="stylesheet" href="css/layouts/side-menu-old-ie.css">
        <![endif]-->
        <!--[if gt IE 8]><!-->
            <link rel="stylesheet" href="css/layouts/side-menu.css">
        <!--<![endif]-->
		<!--[if lte IE 8]>
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/grids-responsive-old-ie-min.css">
<![endif]-->
<!--[if gt IE 8]><!-->
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/grids-responsive-min.css">
		
		
		
		
		
</head>
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
           
<form class="pure-form pure-form-stacked">
    
	<fieldset>
 
  <label for="email">19.Type of learner</label>
        <select id="state"name="learntype">
           
            <option value="Kinesthetic">Kinesthetic</option>
            <option value="Visual">Visual</option>
			<option value="Auditory">Auditory</option>
			
        </select><br>
		
	
</fieldset>


  


        <button type="submit" class="pure-button pure-button-primary">Save</button>
   
</form>




		   















		

		   
		   
		   
		   
		   
		   
        </div>
    </div>
</div>




<script src="js/ui.js"></script>

</body>
</html>

