<!DOCTYPE html>
<html>

<head>
    <title>Image Upload</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
    <div class="container">
        <div id="content">
            <form method="POST" action="" enctype="multipart/form-data">
                <div class="form-group">
                    <input class="form-control" type="file" name="uploadfile" value="" />
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit" name="upload">UPLOAD</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
<?php
error_reporting(0);

$msg = "";

// If upload button is clicked ...
if (isset($_POST['upload'])) {

    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "./images/" . $filename;

    $conn = mysqli_connect("localhost", "root", "", "sales");

    // Get all the submitted data from the form
    $sql = "INSERT INTO `image` (`filename`) VALUES ('$filename')";

    // Execute query
    mysqli_query($conn, $sql);

    // Now let's move the uploaded image into the folder: image
    if (move_uploaded_file($tempname, $folder)) {
        echo "<h3> Image uploaded successfully!</h3>";
    } else {
        echo "<h3> Failed to upload image!</h3>";
    }
}
?>