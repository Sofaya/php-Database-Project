<html>
<head>
    <title>Staff Details</title>
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.css">
    <link rel="stylesheet" href="css/custom.css">
    <script src="bootstrap4/js/jquery-3.4.0.js"></script>
    <script src="bootstrap4/js/popper.min.js"></script>
    <script src="bootstrap4/js/bootstrap.js"></script>
</head>
<body>
<div class="heading">
    <h2 class="text-center">Staff Details</h2>
</div>
<hr>
<div class="container">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <form action="" method="post" class="form-group">
                <input type="text" name="fname" class="form-control" placeholder="* First Name" required>
                <br>
                <input type="text" name="mname" class="form-control" placeholder="* Middle Name" required>
                <br>
                <input type="text" name="lname" class="form-control" placeholder="* Last Name" required>
                <br>
                <select name="gender" id="gender" class="form-control" required>
                    <option value="">========Select Gender==========</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
                <br>
                <select name="mstatus" id="mstatus" class="form-control" required>
                    <option value="">========Select Marital Status==========</option>
                    <option value="Single">Single</option>
                    <option value="Married">Married</option>
                    <option value="Divorced">Divorced</option>
                    <option value="Widowed">Widowed</option>
                    <option value="Separated">Separated</option>
                </select>
                <br>
                <select name="dept" id="dept" class="form-control" required>
                    <option value="">========Select Department==========</option>
                    <option value="ICT"></option>
                    <option value="Procurement">Procurement</option>
                    <option value="Human Resource">Human Resource</option>
                    <option value="Finance">Finance</option>
                </select>
                <br>
                <input type="date" name="joindate" class="form-control" required>
                <br>
                <input type="number" name="bsal" class="form-control" placeholder="* Basic Salary" required>
                <br>
                <p class="text-center">
                    <button class="btn btn-outline-success" type="submit">Add New</button>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="staff_search_u.php" class="btn btn-outline-info">Update</a>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="staff_search_d.php" class="btn btn-outline-danger">Delete</a>
                </p>
            </form>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>
</body>
</html>