<?php 
include('includes/connection.php');
include('includes/allfunction.php');

$editid=$_GET['editid'];
$editdata=selectdatabyid('gard_projectcat',$editid);

if(isset($_POST['submit']))
{

	date_default_timezone_set("Asia/Calcutta"); 
	
	$data=array(
	"name"=>'"'.$_POST['name'].'"',
	"status"=>'"'.$_POST['status'].'"',
	"modified_date"=>'"'.date('Y-m-d h:i:s').'"'
	
	);
	
	update('gard_projectcat',$data,$editid);
	header('location:all-project-categories.php');
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Add Project Category</title>
   
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
                    <h4 class="card-title">Add Project Category</h4>
                 
                    <form class="forms-sample" method="post">
					
					 
					
                      <div class="form-group">
                        <label for="exampleInputName1">Category Name</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Category Name" name="name" value="<?php echo $editdata['name'];?>">
                      </div>
                    
                     
                      <div class="form-group">
                        <label for="exampleSelectGender">Status</label>
                        <select class="form-control" id="exampleSelectGender" name="status">
                        <option value="1" <?php if($editdata['status']==1) echo 'selected';?>>Active</option>
                          <option value="0" <?php if($editdata['status']=='0') echo 'selected';?>>Inactive</option>
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