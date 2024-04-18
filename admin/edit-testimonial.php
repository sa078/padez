<?php 
include('includes/connection.php');
include('includes/allfunction.php');

$editid=$_GET['editid'];
$editdata=selectdatabyid('gard_testimonials',$editid);

if(isset($_POST['submit']))
{
	if(!empty($_FILES['image']['name']))
	{
		$filename=$_FILES['image']['name'];
		$tempname=$_FILES['image']['tmp_name'];
		move_uploaded_file($tempname,'uploads/'.$filename);
	}
	else 
	{
		$filename=$_POST['oldimage'];
	}

	
	date_default_timezone_set("Asia/Calcutta"); 
	
	$data=array(
	"image"=>'"'.$filename.'"',
	"description"=>'"'.$_POST['description'].'"',
	"profession"=>'"'.$_POST['profession'].'"',
	"name"=>'"'.$_POST['name'].'"',
	"status"=>'"'.$_POST['status'].'"',
	"modified_date"=>'"'.date('Y-m-d h:i:s').'"'
	
	);
	
	update('gard_testimonials',$data,$editid);
	header('location:all-testimonials.php');
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Edit Testimonial</title>
   
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
                    <h4 class="card-title">Edit Testimonial</h4>
                 
                    <form class="forms-sample" method="post" enctype="multipart/form-data">
					
					 <div class="form-group">
					 
					 <img src="uploads/<?php echo $editdata['image'];?>" style="height:100px;">
					 
					 <input type="hidden" name="oldimage" value="<?php echo $editdata['image'];?>">
					 
                        <label>Image upload</label>
                        <input type="file" name="image">
                        
                      </div>
					
                      <div class="form-group">
                        <label for="exampleInputName1"> Name</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder=" Name" name="name" value="<?php echo $editdata['name'];?>">
                      </div>
					  
					  <div class="form-group">
                        <label for="exampleInputName1"> Profession</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder=" Profession" name="profession" value="<?php echo $editdata['profession'];?>">
                      </div>
					  
					   <div class="form-group">
                        <label for="exampleInputName1">Description</label>
                     <textarea name="description"><?php echo $editdata['description'];?></textarea>
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