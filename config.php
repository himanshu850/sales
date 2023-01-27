<?php include("sales form.php"); ?>
<?php
// error_reporting(0);
$conn = mysqli_connect('localhost', 'root', '', 'sales');

if (isset($_POST['submit'])) {
    // Get the form data
    $name = $_POST['name'];
    $location = $_POST['location'];
    $ownername = $_POST['ownername'];
    $phonenumber = $_POST['phonenumber'];
    $sales = $_POST['sales'];
    $creditlimit = $_POST['creditlimit'];
    $creditterms = $_POST['creditterms'];



    // Validate the form data
    if (empty($name)) {
        $errors[] = 'Name is required';
    }
    if (empty($location)) {
        $errors[] = 'Location is required';
    }
    if (empty($ownername)) {
        $errors[] = 'Owner name is required';
    }
    if (empty($phonenumber)) {
        $errors[] = 'Phone number is required';
    }
    if (empty($sales)) {
        $errors[] = 'Sales is required';
    }
    if (empty($creditlimit)) {
        $errors[] = 'Credit limit is required';
    }
    if (empty($creditterms)) {
        $errors[] = 'Credit terms is required';
    }
}
$user_check_query = "SELECT * FROM sales_form WHERE name='$name'LIMIT 1";
$result = mysqli_query($conn, $user_check_query);

if (mysqli_num_rows($result) > 0) {
    echo "<script>alert('Name already exists in the system!')</script>";
} else {
    // Insert the data into the database
    $sql = "INSERT INTO `sales_form`(`name`, `location`, `ownername`, `phonenumber`, `sales`, `creditlimit`, `creditterms`) VALUES 
('$name','$location','$ownername','$phonenumber','$sales','$creditlimit','$creditterms')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('NEW RECORD ENTERED SUCCESSFULLY')</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
// Close the connection
mysqli_close($conn);

?>