<html>
<head>
    <title>Delete Success</title>
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.css">
    <link rel="stylesheet" href="css/custom.css">
    <script src="bootstrap4/js/jquery-3.4.0.js"></script>
    <script src="bootstrap4/js/popper.min.js"></script>
    <script src="bootstrap4/js/bootstrap.js"></script>
</head>
<body>
<div class="heading">
    <h2 class="text-center">Delete Success</h2>
</div>
<div class="container">
    <?php

    $conn=mysqli_connect("localhost","root","","dbsaturday");
    if (!$conn){
        die("Connection Failed : " . mysqli_connect_error());
    }
    else{
        $sql="delete from staff_details where staff_id='$_POST[staffid]'";
        if($conn->query($sql) == true){
            print "Staff Details removed successfully";
            print "<p><a href='staff_details.php' class='btn btn-outline-primary'>Staff Details</a></p>";
        }
        else{
            print "Record not deleted.";
        }
    }
    mysqli_close($conn);
    ?>
</div>
</body>
</html>