<?php
include('includes/connection.php');
include('includes/allfunction.php');

if(isset($_POST['submit']))
{
	
		$filename=$_FILES['slider']['name'];
		$tempname=$_FILES['slider']['tmp_name'];
		move_uploaded_file($tempname,'uploads/'.$filename);
	
	
	date_default_timezone_set("Asia/Calcutta"); 
	
	$data=array(
	"image"=>'"'.$filename.'"',
	"heading"=>'"'.$_POST['heading'].'"',
	"url"=>'"'.$_POST['url'].'"',
	"status"=>'"'.$_POST['status'].'"',
	"added_date"=>'"'.date('Y-m-d h:i:s').'"'
	
	);
	
	insert('gard_slider',$data);
	header('location:all-slider.php');
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Add Slider</title>
   
   <?php include_once('includes/css.php'); ?>
   
  </head>
  <body>
    <div class="container-scroller">

   
   <?php include_once('includes/header.php'); ?>
   
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
       
	   <?php include_once('includes/sidebar.php'); ?>
	   
            </div>
            
            
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Add Slider</h4>
                 
                    <form class="forms-sample" method="post" enctype="multipart/form-data">
					
					 <div class="form-group">
                        <label>Image upload</label>
                        <input type="file" name="slider">
                        
                      </div>
					
                      <div class="form-group">
                        <label for="exampleInputName1">Heading</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="heading" placeholder="Heading">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">URL</label>
                        <input type="text" name="url" class="form-control" id="exampleInputEmail3" placeholder="URL">
                      </div>
                     
                      <div class="form-group">
                        <label for="exampleSelectGender">Status</label>
                        <select name="status" class="form-control" id="exampleSelectGender">
                          <option value="1">Active</option>
                          <option value="0">Inactive</option>
                        </select>
                      </div>
                     
                   
                      <button type="submit" name="submit" class="btn btn-gradient-primary me-2">Submit</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
            
            
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
				
		<?php include_once('includes/footer.php'); ?>		
				
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
   
   <?php include_once('includes/script.php'); ?>
   
  </body>
</html>