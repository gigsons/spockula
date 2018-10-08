<html>
<head lang="en">
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css"> <!--css file link in bootstrap folder-->
    <title>View Users</title>
</head>
<style>
    .login-panel {
        margin-top: 150px;
    }
    .table {
        margin-top: 50px;

    }

</style>

<body>

<div class="table-scrol">
    <h1 align="center">All the Users</h1>

<div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->

<a href="admin_logout.php">Logout</a></li>
    <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">
        <thead>

        <tr>

            <th>User Id</th>
            <th>User Name</th>
            <th> Full Name</th>
            <th> Account Number</th>
            <th> Bank Name</th>
            <th>User E-mail</th>
            <th>User Pass</th>
            <th>status</th>
            <th>Delete User</th>
        </tr>
        </thead>

        <?php
        include("database/db_conection.php");
        $view_users_query="select * from users";//select query for viewing users.
        $run=mysqli_query($dbcon,$view_users_query);//here run the sql query.

        while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.
        {
            $UserID=$row[0];
            $DisplayName=$row[5];
            $Name=$row[1];
            $AccountNumber=$row[6];
            $BankName=$row[7];
            $UserEmail=$row[3];
            $Password=$row[2];
            $ActivationStatus=$row[8];



        ?>

        <tr>
<!--here showing results in the table -->
            <td><?php echo $UserID;  ?></td>
            <td><?php echo $DisplayName;  ?></td>
            <td><?php echo $Name;  ?></td>
            <td><?php echo $AccountNumber;  ?></td>
            <td><?php echo $BankName;  ?></td>
            <td><?php echo $UserEmail;  ?></td>
            <td><?php echo $Password;  ?></td>
            <td><?php echo $ActivationStatus; ?></td>
            <td><a href="delete.php?del=<?php echo $UserID ?>"><button class="btn btn-danger">Delete</button></a></td> <!--btn btn-danger is a bootstrap button to show danger-->
        </tr>

        <?php } ?>

    </table>
        </div>
</div>


</body>

</html>
