<html>
<head>
    <title>Search</title>
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.css">
    <link rel="stylesheet" href="css/custom.css">
    <script src="bootstrap4/js/jquery-3.4.0.js"></script>
    <script src="bootstrap4/js/popper.min.js"></script>
    <script src="bootstrap4/js/bootstrap.js"></script>
</head>
<body>
<div class="heading">
    <h2 class="text-center">Search</h2>
</div>
<hr>
<div class="container">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <form action="display_staff_d.php" method="post" class="form-group">
                <input type="number" name="staffid" class="form-control" placeholder="* Staff ID">
                <br>
                <p class="text-center">
                    <button class="btn btn-outline-primary" type="submit">Search</button>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="staff_details.php" class="btn btn-outline-secondary">Staff Details</a>
                </p>
            </form>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>
</body>
</html>