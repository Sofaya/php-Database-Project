<?php
$conn=mysqli_connect("localhost","root","","dbsaturday");

if (!$conn)
{
    die("Connection Failed: ".mysqli_connect_error());
}

$sql="SELECT * FROM staff_details WHERE staff_id='$_POST[staffid]'";
$result=$conn->query($sql);

if ($result->num_rows > 0)
{
    while ($row=$result->fetch_assoc())
    {
        ?>

        <html>
        <head>
            <title>Delete Staff Details</title>
            <link rel="stylesheet" href="bootstrap4/css/bootstrap.css">
            <link rel="stylesheet" href="css/custom.css">
            <script src="bootstrap4/js/jquery-3.4.0.js"></script>
            <script src="bootstrap4/js/popper.min.js"></script>
            <script src="bootstrap4/js/bootstrap.js"></script>
        </head>
        <body>
        <div class="heading">
            <h2 class="text-center">Delete Staff Details</h2>
        </div>
        <hr>
        <div class="container">
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                    <form action="delete_staff.php" method="post" class="form-group">
                        <input type="number" name="staffid" class="form-control" required value="<?php echo $row["staff_id"];?>">
                        <br>
                        <input type="text" name="fname" class="form-control" required value="<?php echo $row["f_name"];?>">
                        <br>
                        <input type="text" name="mname" class="form-control" required value="<?php echo $row["m_name"];?>">
                        <br>
                        <input type="text" name="lname" class="form-control" required value="<?php echo $row["l_name"];?>">
                        <br>
                        <input type="text" name="gender" class="form-control" required value="<?php echo $row["gender"];?>">
                        <br>
                        <input type="text" name="mstatus" class="form-control" required value="<?php echo $row["marital_status"];?>">
                        <br>
                        <input type="text" name="dept" class="form-control" required value="<?php echo $row["department"];?>">
                        <br>
                        <input type="date" name="joindate" class="form-control" required value="<?php echo $row["join_date"];?>">
                        <br>
                        <input type="number" name="bsal" class="form-control" required value="<?php echo $row["basic_sal"];?>">
                        <br>
                        <p class="text-center">
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </p>
                    </form>
                </div>
                <div class="col-sm-3"></div>
            </div>
        </div>
        </body>
        </html>

        <?php
    }
}
mysqli_close($conn);
?>