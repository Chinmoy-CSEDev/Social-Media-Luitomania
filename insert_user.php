<?php
include("includes/connection.php");
if(isset($_POST['sign_up'])){
    $first_name=htmlentities(mysqli_real_escape_string($con,$_POST['first_name']));
    $last_name=htmlentities(mysqli_real_escape_string($con,$_POST['last_name']));
    $pass=htmlentities(mysqli_real_escape_string($con,$_POST['u_pass']));
    $email=htmlentities(mysqli_real_escape_string($con,$_POST['u_mail']));
    $country=htmlentities(mysqli_real_escape_string($con,$_POST['u_country']));
    $gender=htmlentities(mysqli_real_escape_string($con,$_POST['u_gender']));
    $birthday=htmlentities(mysqli_real_escape_string($con,$_POST['u_birthday']));
    $status="verified";
    $posts="no";
    $newgid=sprintf('%05d',rand(0,999999));

    $username=strtolower($first_name."_".$last_name."_".$newgid);
    $check_username_query= "select user_name from users where user_email='$email'";
    $run_username= mysqli_query($con,$check_username_query);

    if(strlen($pass)<9){
        echo "<script>alert('Password should be minimum of 9 character')</script>";
        exit();
    }


    $sql_e = "SELECT * FROM users WHERE user_email='$email'";
  	
  	$res_e = mysqli_query($con, $sql_e);

  		
  	if(mysqli_num_rows($res_e) > 0){
        echo "<script>alert('Email already used by another user')</script>";
        echo "<script>window.open('signup.php','_self')</script>";
        exit();
      }
   // $check_email="select * from users where user_email='$email'";
    //$rum_email= mysqli_query($check_email);

    //$check=mysqli_num_rows($run_email);

    //if($check ){
        //echo "<script>alert('Email already used by another user')</script>";
        //echo "<script>window.open('signup.php','_self')</script>";
        //exit();
    //}

    //$rand= rand(1,3);

    //if($rand == 1){
        //$profile_pic ="a.jpg";
    //}
    //else if($rand == 2){
        //$profile_pic ="b.jpg";
    //}
    //else if($rand == 3){
        //$profile_pic ="c.jgp";
    //}
    if($gender=="Male"){
        $profile_pic ="a.jpg";
    }
    else{
        $profile_pic ="b.jpg";
    }


    $insert = "insert into users (f_name, l_name, user_name, describe_user, relationship, user_pass, user_email,user_country, 
    user_gender,user_birthday, user_image, user_cover,user_reg_date,status,post,recovery_account) values('$first_name','$last_name',
    '$username','Luitomania is just awesome','...','$pass','$email','$country','$gender','$birthday','$profile_pic',
    'cover.JPG',NOW(),'$status','$posts','I want to put a ding in the universe.') ";

    $query= mysqli_query($con, $insert);

    if($query){
        echo "<script>alert('Well done $first_name, you are good to go')</script>";
        echo "<script>window.open('signin.php','_self')</script>";
    }

    else{
        echo "<script>alert('Registration failed')</script>";
        echo "<script>window.open('signup.php','_self')</script>";
    }

}
?>