<html>
<head>
    <title>Update Success</title>
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.css">
    <link rel="stylesheet" href="css/custom.css">
    <script src="bootstrap4/js/jquery-3.4.0.js"></script>
    <script src="bootstrap4/js/popper.min.js"></script>
    <script src="bootstrap4/js/bootstrap.js"></script>
</head>
<body>
<div class="heading">
    <h2 class="text-center">Update Success</h2>
</div>
<div class="container">
    <?php

    $conn=mysqli_connect("localhost","root","","dbsaturday");
    if (!$conn){
        die("Connection Failed : " . mysqli_connect_error());
    }
    else{
        $sql="update staff_details set first_name='$_POST[fname]',
middle_name='$_POST[mname]',last_name='$_POST[lname]',gender='$_POST[gender]',
marital_status='$_POST[mstatus]',department='$_POST[dept]',
join_date='$_POST[joindate]',basic_salary='$_POST[bsal]' 
where staff_id='$_POST[staffid]'";
        if($conn->query($sql) == true){
            print "Staff Details updated successfully";
            print "<p><a href='staff_details.php' class='btn btn-outline-primary'>Staff Details</a></p>";
        }
        else{
            print "Record not updated.";
        }
    }
    mysqli_close($conn);
    ?>
</div>
</body>
</html>