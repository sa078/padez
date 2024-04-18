<?php 

include('includes/connection.php');
include('includes/allfunction.php');

$sitesettingdata=selectdatabyid('gard_sitesettings','1');

if(isset($_POST['submit']))
{
	if(!empty($_FILES['logo']['name']))
	{
		$filename=$_FILES['logo']['name'];
		$tempname=$_FILES['logo']['tmp_name'];
		move_uploaded_file($tempname,'uploads/'.$filename);
	}
	else 
	{
		$filename=$_POST['oldlogo'];
	}
	
	if(!empty($_FILES['favicon']['name']))
	{
		$filenamev=$_FILES['favicon']['name'];
		$tempnamev=$_FILES['favicon']['tmp_name'];
		move_uploaded_file($tempnamev,'uploads/'.$filenamev);
	}
	else 
	{
		$filenamev=$_POST['oldfavicon'];
	}
	
	
	$data=array(
	"phone1"=>'"'.$_POST['phone1'].'"',
	"phone2"=>'"'.$_POST['phone2'].'"',
	"email"=>'"'.$_POST['email'].'"',
	"fb"=>'"'.$_POST['fb'].'"',
	"tw"=>'"'.$_POST['tw'].'"',
	"insta"=>'"'.$_POST['insta'].'"',
	"youtube"=>'"'.$_POST['youtube'].'"',
	"linkedin"=>'"'.$_POST['linkedin'].'"',
	"address"=>'"'.$_POST['address'].'"',
	"logo"=>'"'.$filename.'"',
	"favicon"=>'"'.$filenamev.'"'
	);
	
	update('gard_sitesettings',$data,'1');
	
}


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Site Setting</title>
   
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
                    <h4 class="card-title">Site Setting</h4>
                 
                    <form class="forms-sample" method="post" enctype="multipart/form-data">
					
					 <div class="form-group">
					 <img src="uploads/<?php echo$sitesettingdata['logo'];?>" style="height:100px;">
					 
					 <input type="hidden" name="oldlogo" value="<?php echo $sitesettingdata['logo'];?>">
					 
                        <p><label>Logo upload</label></p>
                        <input type="file" name="logo">
                      
                      </div>
					
                      <div class="form-group">
                        <label for="exampleInputName1">Primary Mobile</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="phone1" placeholder="Primary Mobile" value="<?php echo $sitesettingdata['phone1'];?>">
                      </div>
					  
					  <div class="form-group">
                        <label for="exampleInputName1">Secondary Mobile</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="phone2" placeholder="Secondary Mobile" value="<?php echo $sitesettingdata['phone2'];?>">
                      </div>
					  
					    <div class="form-group">
                        <label for="exampleInputName1">Email</label>
                        <input type="email" class="form-control" id="exampleInputName1" name="email" placeholder="Email" value="<?php echo $sitesettingdata['email'];?>">
                      </div>
					  
					   <div class="form-group">
					 <img src="uploads/<?php echo$sitesettingdata['favicon'];?>" style="height:100px;">
					 
					 <input type="hidden" name="oldfavicon" value="<?php echo $sitesettingdata['favicon'];?>">
					   
                       <p> <label>Favicon upload</label></p>
                        <input type="file" name="favicon">
                       
                      </div>
					  
					   <div class="form-group">
                        <label for="exampleInputName1">Address</label>
                     <textarea name="address"><?php echo $sitesettingdata['address'];?></textarea>
                      </div>
                     
                      <div class="form-group">
                        <label for="exampleInputName1">Facebook Page Link</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="fb" placeholder="Facebook Page Link" value="<?php echo $sitesettingdata['fb'];?>">
                      </div>
					  
					    <div class="form-group">
                        <label for="exampleInputName1">Twitter Page Link</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="tw" placeholder="Facebook Page Link" value="<?php echo $sitesettingdata['tw'];?>">
                      </div>
					  
					    <div class="form-group">
                        <label for="exampleInputName1">Instagram Page Link</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="insta" placeholder="Facebook Page Link" value="<?php echo $sitesettingdata['insta'];?>">
                      </div>
					  
					  
					    <div class="form-group">
                        <label for="exampleInputName1">Linkedin Page Link</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="linkedin" placeholder="Facebook Page Link" value="<?php echo $sitesettingdata['linkedin'];?>">
                      </div>
					  
					  
					    <div class="form-group">
                        <label for="exampleInputName1">Youtube Page Link</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="youtube" placeholder="Facebook Page Link" value="<?php echo $sitesettingdata['youtube'];?>">
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