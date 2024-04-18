<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>All Enquiries</title>
   
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
                    <h4 class="card-title">All Enquiries</h4>
                 
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Sr.No</th>
                          <th>Date</th>
                          <th>Name</th>
                          <th>Email</th>
						  <th>Mobile</th>
						  <th>Subject</th>
						  <th>Message</th>
						
						  <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                         
                          <td>53275531</td>
                          <td>12 May 2017</td>
						   <td>12 May 2017</td>
						   <td>Jacob</td>
                          <td>53275531</td>
                          <td>12 May 2017</td>
						  <td>12 May 2017</td>
                          <td><label class="badge badge-danger">Pending</label>
						  <label class="badge badge-success">Completed</label>
						  </td>
                        </tr>
                       
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