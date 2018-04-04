<?php include('first.php'); ?>
<?php include('connection.php'); ?>

<?php include('admin_sidebar.php'); ?>


<!-- page content -->
       <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3></h3>
              </div>

              
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Category</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
					
					
                    <form action="admin_branch_view.php" method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                      
					  
					 
					  
					 
					                <div class="col-md-6 col-xs-12">
                <div class="x_panel">
					  <div class="form-group">
					  
                       
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Course</label>
                       <div class="col-sm-9">

 <div class="input-group">
                             <select type="text" name="branchcourse" class="form-control">
						  
						  <?php
	$sql="SELECT * FROM `tbl_course`";
	$sq=mysqli_query($con,$sql);
     while($row=mysqli_fetch_assoc($sq))
	 {
	 
					// $id1=$row['uni_id'];
					 
//echo"<tr><td>".$row['uni_id']."</td>";
			echo"<option>".$row['course_name']."</option>";
	       
			
			
	 }
		?>
                           
                          </select>
                            <span class="input-group-btn">
                                             
											  &nbsp;<button type="submit" class="btn btn-success" Onclick="">View Branches</button>
                                          </span>
                          </div>



</div>
						
						</div>
						</br>
						
                     
                        
						
                      </div>                     
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          
                          <!--<button type="submit" class="btn btn-success" Onclick="">Submit</button>-->
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
        </div>    </div>
        <!-- /page content -->
















































<?php include('footer.php'); ?>