<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/fav.png" type="image/gif" sizes="16x16">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Luitomania Signin</title>
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
#signin{
    width:60%;
    border-radius:30px;
}  
.well{
        background-color:#187FAB;
        font-family: "Times New Roman", Times, serif;
    }
.overlap-text{
    position:relative;
}    
.overlap-text a{
    position:absolute;
    top:8px;
    right:10px;
    font-family:'Overpass Mono', monospace;
    font-size:14px;
    letter-spacing:-1px;
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
    <div class="col-sm-12" >
        <div class="main-content">
            <div class="header">
                <h3><h3 style="text-align:center;font-size:30px;"><strong>Login to Luitomania</strong></h3> <br></h3> 
            </div>
            <div class="l-part">
                <form action="" method="post">
                    <input type="email" name="email" placeholder="Email" required="required" class="form-control input-md" >
                <br><div class="overlap-text" >
                    <input type="password" name="pass" placeholder="Password" required="required" class="form-control input-md">
                    
                </div>
                <br><a  style="text-decoration:none;float:right;color:#187FAB;" data-toggle="tooltip" title="Reset Password" href="forgot_password.php">Forgot Password</a><br><br>
                <a style="text-decoration:none;float:right;color:#187FAB;" data-toggle="tooltip" title="Ctrate Account" href="signup.php">Don't have an account?</a><br><br>
                <div><center><button id="signin" class="btn btn-info btn-lg" name="login">Login</button></center></div> 
                <?php 
                      include("login.php");                                  
                ?>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>