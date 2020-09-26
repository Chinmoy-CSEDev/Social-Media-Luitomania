<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/fav.png" type="image/gif" sizes="16x16">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
     <title>SignUp Luitomania</title>
</head>
<style>
body{
    overflow-x:hidden;
    background-color: lightgrey;
}
.main-content{
    width:50%;
    height:40%;
    margin:10px auto;
    background-color:#fff;
    border:2px solid grey;
    padding:40px 50px; 
    border-radius:10px;
}
.header{
    border:0px solid #000;
    margin-bottom:5px;
}
.well{
        background-color:#187FAB;
        font-family: "Times New Roman", Times, serif;
    }
#signup{
    width:60%;
    border-radius:30px;
}   
@media only screen and (max-width: 600px) {
    .main-content{
    width:100%;
    height:70%;
    margin:10px auto;
    background-color:#fff;
    border:2px solid grey;
    padding:40px 50px; 
    border-radius:10px;
} 
</style>
<body>
<div class="row">
    <div class="col-sm-12">
        <div class="well" >
            <center><h1 style="color:white;">Luitomania</h1></center>
        </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="main-content">
            <div class="header">
                <h3 style="text-align:center;font-size:30px;"><strong>Join Luitomania</strong></h3> <br>
            </div>
            <div class="l-part">
                <form action="" method="post">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                        <input type="text" class="form-control" placeholder="First Name" name="first_name" required="required"> 
                    </div><br>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                        <input type="text" class="form-control" placeholder="Last Name" name="last_name" required="required"> 
                    </div><br>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id="password" type="password" class="form-control" placeholder="password" name="u_pass" required="required"> 
                    </div><br>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="email" type="email" class="form-control" placeholder="email" name="u_mail" required="required"> 
                    </div><br>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-chevron-down"></i></span>
                        <select class="form-control" name="u_country" id="" required="required">
                            <option disabled>Select Your Country</option>
                            <option >India</option>
                            <option >China</option>
                            <option >United States</option>
                            <option >Russia</option>
                            <option >UK</option>
                            <option >France</option>
                        </select>
                    </div><br>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-chevron-down"></i></span>
                        <select class="form-control input-md" name="u_gender" id="" required="required">
                            <option disabled>Select Your Gender</option>
                            <option >Male</option>
                            <option >Female</option>
                            <option >Others</option>
                        </select>
                    </div><br>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                        <input type="date" class="form-control input-sm"  name="u_birthday" required="required"> 
                    </div><br><br>
                    <a style="text-decoration:none;float:right;color:#187FAB;" data-toggle="tooltip" title="Signin" href="signin.php">Already have an account?</a><br><br>
                   <br><div><center><button id="signup" class="btn btn-info btn-lg" name="sign_up">Signup</button></center></div>
                    <?php include("insert_user.php");  ?>
                </form>
            </div>
        </div>
    </div>
</div>    
</body>
</html>