<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel=”stylesheet” href=”https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css”>
    <title>Sales</title>
</head>

<body>
    <div class="container">
        <form action="config.php" method="post" enctype="multipart/form-data">
            <h1>Customer Sales Form</h1>
            <input type="text" name="name" value="" placeholder="Name of shop" required>
            <input type="text" name="location" value="" placeholder="Location of shop" required>
            <input type="text" name="ownername" placeholder="Owner Name" required>
            <input type="text" name="phonenumber" placeholder="Phone Number eg '0712345678'" required>
            <input type="text" name="sales" placeholder="Approximate sales done" required>
            <input type="text" name="creditlimit" placeholder="Credit Limit" required>
            <input type="text" name="creditterms" placeholder="Credit Terms" required>
            <button type="submit" class="btn" name="submit">Submit</button>
        </form>
    </div>
</body>

</html>