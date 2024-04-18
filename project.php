<?php 

include('admin/includes/connection.php');
include('admin/includes/allfunction.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Gardener - Gardening Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

   <?php include_once('includes/css.php'); ?>
</head>

<body>
  <?php include_once('includes/header.php'); ?>


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white mb-4 animated slideInDown">Projects</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Projects</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Projects Start -->
   <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-bold text-primary">Our Projects</p>
                <h1 class="display-5 mb-5">Some Of Our Wonderful Projects</h1>
            </div>
            <div class="row wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-12 text-center">
                    <ul class="list-inline rounded mb-5" id="portfolio-flters">
                        <li class="mx-2 active" data-filter="*">All</li>
                        
						<?php 
						
						$categorydata=fetchalldata('gard_projectcat');
						
						while($CATEGORY=mysqli_fetch_array($categorydata))
						{?>
						<li class="mx-2" data-filter=".first<?php echo $CATEGORY['id'];?>"><?php echo $CATEGORY['name'];?></li>
						<?php } ?>
                    </ul>
                </div>
            </div>
            <div class="row g-4 portfolio-container">

<?php  

$projectdata=fetchalldata('gard_projects'); 

while($PROJECT=mysqli_fetch_array($projectdata))
{?>	

			   <div class="col-lg-4 col-md-6 portfolio-item first<?php echo $PROJECT['cat_id'];?> wow fadeInUp" data-wow-delay="0.1s">
                    <div class="portfolio-inner rounded">
                        <img class="img-fluid" src="admin/uploads/<?php echo $PROJECT['image'];?>" alt="">
                        <div class="portfolio-text">
                            <h4 class="text-white mb-4"><?php echo $PROJECT['name'];?></h4>
                            <div class="d-flex">
                                <a class="btn btn-lg-square rounded-circle mx-2" href="admin/uploads/<?php echo $PROJECT['image'];?>" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-lg-square rounded-circle mx-2" href=""><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                
<?php } ?>            
                
                
                
            </div>
        </div>
    </div>
    <!-- Projects End -->


  <?php include_once('includes/footer.php'); ?>
</body>

</html>