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
    <style>
        .project-description {
            margin-top: 15px;
            padding: 10px;
            background-color: #f9f9f9;
            border: 1px solid #e0e0e0;
            border-radius: 5px;
        }
        .project-description p {
            margin: 5px 0;
        }
        .project-description p strong {
            font-weight: bold;
            margin-right: 5px;
        }
        .project-description p .light-text {
            font-weight: normal;
        }
        .portfolio-inner {
            position: relative;
            overflow: hidden;
        }
        .portfolio-inner img {
            width: 100%;
            transition: transform 0.5s;
        }
        .portfolio-inner:hover img {
            transform: scale(1.1);
        }
        .portfolio-inner .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
            display: flex;
            justify-content: center;
            align-items: center;
            opacity: 0;
            transition: opacity 0.5s;
        }
        .portfolio-inner:hover .overlay {
            opacity: 1;
        }
        .portfolio-inner .overlay a {
            color: #fff;
            margin: 0 10px;
            font-size: 24px;
        }
    </style>
</head>
<body>
    <?php include_once('includes/header.php'); ?>
    <!-- Projects Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-bold text-primary">Our Products</p>
                <h1 class="display-5 mb-5">Some Of Our Wonderful Products</h1>
            </div>
            <div class="row wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-3">
                    <ul class="portfolio-flters rounded mb-5" id="portfolio-flters">
                        <li class="active" data-filter="*">All</li>
                        <?php 
                        $categorydata = fetchalldata('gard_projectcat');
                        while ($CATEGORY = mysqli_fetch_array($categorydata)) { ?>
                            <li data-filter=".first<?php echo $CATEGORY['id']; ?>"><?php echo $CATEGORY['name']; ?></li>
                        <?php } ?>
                    </ul>
                </div>
                <div class="col-9">
                    <div class="row g-4 portfolio-container">
                        <?php  
                        $projectdata = fetchalldata('gard_projects'); 
                        while ($PROJECT = mysqli_fetch_array($projectdata)) { ?>    
                            <div class="col-lg-4 col-md-6 portfolio-item first<?php echo $PROJECT['cat_id']; ?> wow fadeInUp" data-wow-delay="0.1s">
                                <div class="portfolio-inner rounded">
                                    <img class="img-fluid" src="admin/uploads/<?php echo $PROJECT['image']; ?>" alt="">
                                    <div class="overlay">
                                        <a class="btn btn-lg-square rounded-circle" href="admin/uploads/<?php echo $PROJECT['image']; ?>" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                        <a class="btn btn-lg-square rounded-circle" href=""><i class="fa fa-link"></i></a>
                                    </div>
                                    <div class="project-description">
                                        <h5><strong><?php echo $PROJECT['name']; ?></strong></h5>
                                        <?php
                                        foreach (['line1', 'line2', 'line3', 'line4', 'line5'] as $line) {
                                            if (!empty($PROJECT[$line])) {
                                                list($term, $text) = explode(':', $PROJECT[$line], 2);
                                                echo '<p><strong>' . $term . ':</strong> <span class="light-text">' . $text . '</span></p>';
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>            
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Projects End -->
    <?php include_once('includes/footer.php'); ?>
    <!-- JavaScript Libraries -->
    <?php include_once('includes/js.php'); ?>
</body>
</html>
