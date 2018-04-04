<?php include('first.php'); ?>
<?php include('mentor_sidebar.php'); ?>









<!-- page content -->
       <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Upload Photo</h3>
              </div>

              
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2></h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
					
					<form action="mentor_photo_upload_action.php" method="post" enctype="multipart/form-data">
					 <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Choose picture to upload <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" name="fileToUpload" id="fileToUpload"  required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
					 <input type="submit" value="Upload Image" name="submit">
					</form>
					
                    
                  </div>
                </div>
              </div>
        </div>    </div>
        <!-- /page content -->














 
<?php include('footer.php'); ?>