<?php 
include('includes/connection.php');
include('includes/allfunction.php');

if(isset($_POST['submit']))
{
    $filename = $_FILES['image']['name'];
    $tempname = $_FILES['image']['tmp_name'];
    move_uploaded_file($tempname, 'uploads/'.$filename);

    date_default_timezone_set("Asia/Calcutta");

    $data = array(
        "cat_id" => '"' . $_POST['catid'] . '"',
        "image" => '"' . $filename . '"',
        "name" => '"' . $_POST['heading'] . '"',
        "line1" => '"' . $_POST['line1'] . '"',
        "line2" => '"' . $_POST['line2'] . '"',
        "line3" => '"' . $_POST['line3'] . '"',
        "line4" => '"' . $_POST['line4'] . '"',
        "line5" => '"' . $_POST['line5'] . '"',
        "status" => '"' . $_POST['status'] . '"',
        "added_date" => '"' . date('Y-m-d h:i:s') . '"'
    );

    insert('gard_projects', $data);
    header('location:all-projects.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Add Project</title>
    <?php include_once('includes/css.php'); ?>
</head>
<body>
    <div class="container-scroller">
        <?php include_once('includes/header.php'); ?>
        <div class="container-fluid page-body-wrapper">
            <?php include_once('includes/sidebar.php'); ?>
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Add Project</h4>
                        <form class="forms-sample" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="exampleSelectGender">Select Category</label>
                                <select class="form-control" id="exampleSelectGender" name="catid">
                                    <option>select category</option>
                                    <?php
                                    $catdata = fetchalldata('gard_projectcat');
                                    while ($data = mysqli_fetch_array($catdata)) { ?>
                                        <option value="<?php echo $data['id']; ?>"><?php echo $data['name']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Image upload</label>
                                <input type="file" name="image">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName1">Heading</label>
                                <input type="text" class="form-control" id="exampleInputName1" placeholder="Heading" name="heading">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputLine1">Line 1</label>
                                <input type="text" class="form-control" id="exampleInputLine1" placeholder="Label: Description" name="line1">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputLine2">Line 2</label>
                                <input type="text" class="form-control" id="exampleInputLine2" placeholder="Label: Description" name="line2">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputLine3">Line 3</label>
                                <input type="text" class="form-control" id="exampleInputLine3" placeholder="Label: Description" name="line3">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputLine4">Line 4</label>
                                <input type="text" class="form-control" id="exampleInputLine4" placeholder="Label: Description" name="line4">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputLine5">Line 5</label>
                                <input type="text" class="form-control" id="exampleInputLine5" placeholder="Label: Description" name="line5">
                            </div>
                            <div class="form-group">
                                <label for="exampleSelectGender">Status</label>
                                <select class="form-control" id="exampleSelectGender" name="status">
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
        <?php include_once('includes/footer.php'); ?>
    </div>
    <?php include_once('includes/script.php'); ?>
</body>
</html>
