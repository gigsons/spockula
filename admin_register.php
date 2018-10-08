
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">
    <title>Registration</title>
</head>
<style>
    .login-panel {
        margin-top: 150px;

</style>
<body>

<div class="container"><!-- container class is used to centered  the body of the browser with some decent width-->
    <div class="row"><!-- row class is used for grid system in Bootstrap-->
        <div class="col-md-4 col-md-offset-4"><!--col-md-4 is used to create the no of colums in the grid also use for medimum and large devices-->
            <div class="login-panel panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Admin Registration</h3>
                </div>
                <div class="panel-body">
                    <form role="form" method="POST" action="admin_register.php"">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="Username" name="admin_name" type="text" autofocus>
                            </div>

                            <div class="form-group">
                                <input class="form-control" placeholder="E-mail" name="admin_email" type="email" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="admin_pass" type="password" value="">
                            </div>


                            <input class="btn btn-lg btn-success btn-block" type="submit" value="register" name="admin_register" >

                        </fieldset>
                    </form>
                    <center><b>Already registered ?</b> <br></b><a href="admin_login.php">Login here</a></center><!--for centered text-->
                </div>
            </div>
        </div>
    </div>
</div>

</body>

</html>

<?php

include("database/db_conection.php");//make connection here
if(isset($_POST['admin_register']))
{
    $admin_name=$_POST['admin_name'];//here getting result from the post array after submitting the form.
    $admin_pass=$_POST['admin_pass'];//same
    $admin_email=$_POST['admin_email'];//same


    if($admin_name=='')
    {
        //javascript use for input checking
        echo"<script>alert('Please enter the name')</script>";
exit();//this use if first is not work then other will not show
    }

    if($admin_pass=='')
    {
        echo"<script>alert('Please enter the password')</script>";
exit();
    }

    if($admin_email=='')
    {
        echo"<script>alert('Please enter the email')</script>";
    exit();
    }
//here query check weather if user already registered so can't register again.
    $check_email_query="select * from admin WHERE user_email='$admin_email'";
    $run_query=mysqli_query($dbcon,$check_email_query);

    if(mysqli_num_rows($run_query)>0)
    {
echo "<script>alert('Email $user_email is already exist in our database, Please try another one!')</script>";
exit();
    }
//insert the user into the database.
    $insert_user="insert into admin (admin_name,admin_pass,admin_email) VALUE ('$admin_name','$admin_pass','$admin_email')";
    if(mysqli_query($dbcon,$insert_user))
    {
        echo"<script>window.open('view_users.php','_self')</script>";
    }

}

?>