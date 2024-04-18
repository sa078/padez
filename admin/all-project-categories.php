<?php
include('includes/connection.php');
include('includes/allfunction.php');

if(isset($_GET['delid']))
{
	$delresult=deletedata('gard_projectcat',$_GET['delid']);
	header('location:all-project-categories.php');
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>All Project Categories</title>
   
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
                    <h4 class="card-title">All Project Categories</h4>
                 
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Sr.No</th>
                          <th>Added Date</th>
                          <th>Name</th>
                          
						  <th>Status</th>
						  <th>Modified Date</th>
						  <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                         
					  <?php
					  $projectcatdata=fetchalldata('gard_projectcat');
					  $i=1;
					  while($data=mysqli_fetch_array($projectcatdata))
					  {?>
                        <tr>
                          <td><?php echo $i; ?></td>
                          <td><?php echo $data['added_date'];?></td>
                          <td><?php echo $data['name'];?></td>
						  
						  
                          <td> <?php 
						  if($data['status']==1)
						  {?>
						   <label class="badge badge-success">Active</label>
						  <?php } else{?>
						  <label class="badge badge-danger">Inactive</label>
					  <?php } ?></td>
						  
						  <td><?php echo $data['modified_date'];?></td>
                          
						  <td>
						 
						 <a href="edit-project-category.php?editid=<?php echo $data['id'];?>">Edit</a>
						 <a href="all-project-categories.php?delid=<?php echo $data['id'];?>" onclick="return confirm('Do you want to delete this data')">Delete</a>
						 
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