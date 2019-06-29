<html>
<head>
    <title>Staff Details Report</title>
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.css">
    <link rel="stylesheet" href="css/custom.css">
    <script src="bootstrap4/js/jquery-3.4.0.js"></script>
    <script src="bootstrap4/js/popper.min.js"></script>
    <script src="bootstrap4/js/bootstrap.js"></script>
</head>
<body>
<div class="heading">
    <h2 class="text-center">Staff Details Report</h2>
</div>
<div class="container">
    <?php
    $con=mysqli_connect("localhost","root","","dbsaturday");
    // Check connection
    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    $result = mysqli_query($con,"SELECT * FROM staff_details where join_date>='$_POST[join_date_from]' and join_date<='$_POST[join_date_to]'");

    echo "<table class='table table-striped table-responsive-sm '>
<tr>
<th>Staff ID</th>
<th>Photo</th>
<th>First Name</th>
<th>Middle Name</th>
<th>Last Name</th>
<th>Gender</th>
<th>Marital Status</th>
<th>Department</th>
<th>Join Date</th>
<th>Basic Salary</th>
<th></th>

</tr>";

    while($row = mysqli_fetch_array($result))
    {
        echo "<tr>";
        echo "<td>" . $row['staff_id'] . "</td>";
        echo '<td><img src="data:image/jpeg;base64,'.base64_encode( $row['staff_photo'] ).'" height="60px" width="80px"/></td>';
        echo "<td>" . $row['f_name'] . "</td>";
        echo "<td>" . $row['m_name'] . "</td>";
        echo "<td>" . $row['l_name'] . "</td>";
        echo "<td>" . $row['gender'] . "</td>";
        echo "<td>" . $row['marital_status'] . "</td>";
        echo "<td>" . $row['department'] . "</td>";
        echo "<td>" . $row['join_date'] . "</td>";
        echo "<td>" . $row['basic_sal'] . "</td>";?>
        <td><a href="getImage.php?id=<?php echo $row['staff_id'];?>"><img src="icons/icon_delete.png" height="25px" width="25px"/></a></td>
        <?php
        echo "</tr>";
    }
    echo "</table>";

    mysqli_close($con);
    ?>
</div>
</body>
</html>