<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/fav.png" type="image/gif" sizes="16x16">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
     
    <title>Luitomania</title>
</head>
<style>
    body{
        overflow-x:hidden;
     
    }
    #centered1{
        position:absolute;
        font-size:10ww;
        top:30%;
        left:30%;
        transform:translate(-50%,-50%);
    }
    #centered2{
        position:absolute;
        font-size:10ww;
        top:50%;
        left:30%;
        transform:translate(-50%,-50%);
    }
    #centered3{
        position:absolute;
        font-size:10ww;
        top:70%;
        left:32%;
        transform:translate(-50%,-50%);
    }
    #im{
        background-color: #000000;
        width:650px;
    }
    #im img{
        opacity: 0.7;
    }
    #signup{
        width:60%;
        border-radius:30px;
    }
    #login{
        width:60%;
        border-radius:30px;
        background-color:#fff;
        border: 1px solid #1da1f2;
        color:#1da1f2;
    }
    #login:hover{
        width:60%;
        border-radius:30px;
        background-color:#fff;
        border: 1px solid #1da1f2;
        color:#1da1f2;
    }
    .well{
        background-color:#187FAB;
        font-family: "Times New Roman", Times, serif;
    }
    #footer {
     position: absolute;
    
    bottom: 0px;
    background-color: orange;
    width: 100%;
    text-align: center;
}

@media only screen and (max-width: 600px) {
    #footer {
     position: relative;
    bottom: 0px;
    background-color: orange;
    width: 100%;
    text-align: center;
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
    <div  class="col-sm-6" style="left:0.5%;"> 
        <div id="im" class="img-rounded"><img src="images/img.jpg" alt=""  class="img-rounded"   title="Luitomania" width="650px" height="365px"></div>
        <div id="centered1" class="cntered"  ><h4 style="color:white;"><span class="glyphicon glyphicon-search"></span>&nbsp&nbsp <strong>Follow Your Interest.</strong></h4></div>
        <div id="centered2" class="cntered"  ><h4 style="color:white;"><span class="glyphicon glyphicon-search"></span>&nbsp&nbsp <strong>Hear From People.</strong></h4></div>
        <div id="centered3" class="cntered"  ><h4 style="color:white;"><span class="glyphicon glyphicon-search"></span>&nbsp&nbsp <strong>Join The Conversation.</strong></h4></div>
    </div>
    <div class="col-sm-6" style="left:8%;">
        <img src="images/l.jpg" alt="" class="img-rounded" title="Luitomania" width="80px" height="80px">
   
        <div style="font-size:22px;"><strong >See What's Happening in <br> The World Right Now</strong></div><br>
        <h4><strong>Join Luitomania Today</strong></h4>
        <form method="post" action="">
            <button id="signup" class="btn btn-info btn-lg" name="signup">Sign up</button><br><br>
            <?php
                if(isset($_POST['signup'])){
                    echo "<script>window.open('signup.php','_self')</script>";
                    
                } 
            ?>
            <button id="login" class="btn btn-info btn-lg" name="login">Login</button><br>
            <?php
                if(isset($_POST['login'])){
                    echo "<script>window.open('signin.php','_self')</script>";
                    
                } 
            ?>
        </form>  
    </div>
</div>
<br>
<br>
<div>
<div id="footer">
    &copy; All rights reserved 2020 under Luitomania
</div>
</div>

</body>
</html>