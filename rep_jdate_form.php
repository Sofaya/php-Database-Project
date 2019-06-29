<html>
<head>
    <title>Enter Join Dates</title>
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.css">
    <link rel="stylesheet" href="css/custom.css">
    <script src="bootstrap4/js/jquery-3.4.0.js"></script>
    <script src="bootstrap4/js/popper.min.js"></script>
    <script src="bootstrap4/js/bootstrap.js"></script>
</head>
<body>
<div class="heading">
    <h2 class="text-center">Enter Join Dates</h2>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <form action="staff_details_rep_jdate.php" method="post" class="form-group">
                <hr>
                <table class="table table-striped table-responsive-sm">
                    <tr>
                        <td>Date From
                            <input type="date" class="form-control" name="join_date_from">
                        </td>
                        <td>
                            Date To
                            <input type="date" class="form-control" name="join_date_to">
                        </td>

                </table>

                <input type="submit" class="btn btn-success" value="View Report">
            </form>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>
</body>
</html>