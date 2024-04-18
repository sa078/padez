<?php
include('includes/connection.php');
include('includes/allfunction.php');

if(isset($_GET['delid']))
{
	$delresult=deletedata('gard_slider',$_GET['delid']);
	header('location:all-slider.php');
}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>All Slider</title>
   
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
                    <h4 class="card-title">All Slider</h4>
                 
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Sr.No</th>
                          <th>Added Date</th>
                          <th>Image</th>
                          <th>Heading</th>
						  <th>URL</th>
						  <th>Status</th>
						  <th>Modified Date</th>
						  <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
					  
					  <?php
					  $sliderdata=fetchalldata('gard_slider');
					  $i=1;
					  while($slider=mysqli_fetch_array($sliderdata))
					  {?>
					  
                        <tr>
                          <td><?php echo $i; ?></td>
                          <td><?php echo $slider['added_date'];?></td>
                          <td><img src="uploads/<?php echo $slider['image'];?>" style="height:80px; border-radius:0; width:auto;"></td>
						   <td><?php echo $slider['heading'];?></td>
                          <td><?php echo $slider['url'];?></td>
                          <td>
						  
						  <?php 
						  if($slider['status']==1)
						  {?>
						   <label class="badge badge-success">Active</label>
						  <?php } else{?>
						  <label class="badge badge-danger">Inactive</label>
					  <?php } ?>
						  
						  </td>
						  <td><?php echo $slider['modified_date'];?></td>
                          
						  <td>
						 
						 <a href="edit-slider.php?editid=<?php echo $slider['id'];?>">Edit</a>
						 <a href="all-slider.php?delid=<?php echo $slider['id'];?>" onclick="return confirm('Do you want to delete this data')">Delete</a>
						 
						  </td>
                        </tr>
					  <?php $i++; } ?>	
					
                      </tbody>
                    </table>
					
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