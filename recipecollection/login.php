<?php

include 'config.php';
session_start();

if(isset($_POST['submit'])){

   $username = mysqli_real_escape_string($conn, $_POST['username']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));

   $select = mysqli_query($conn, "SELECT * FROM `user_list` WHERE username = '$username' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select) > 0){
      $row = mysqli_fetch_assoc($select);
      $_SESSION['user_id'] = $row['user_id'];
      header('location:profile.php');
   }else{
      $message[] = 'Incorrect email or password!';
   }

}

?><!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" href="loginstyle.css">
    </head>
    <body>
    <ul>
            <div class="banner">
            <div class="navbar">
                <input type="text" placeholder="Search Recipes">
                <ul>
                <li><a href="index.php">Home</a></li>
           <li><a href="myrecipes.php">My Recipes</a></li>
           <li><a href="profile.php">Profile</a></li>
           <li><a href="login.php">Login</a></li>
               </ul>
            </div>  
            < <div class="tab">
                <button class="tablinks" onclick="location.href='index.php'">All</button>
                <button class="tablinks" onclick="location.href='chinese.php'">Chinese</button>
                <button class="tablinks" onclick="location.href='japanese.php'">Japanese</button>
                <button class="tablinks" onclick="location.href='italian.php'">Italian</button>
            </div>
        <div class="center">
        <h1>Login</h1>
        <form method="post">
            <div class="text_field">
                <input type="text" name="username" class="box" required>
                <span></span>
                <label>Username</label>
            </div>
            <div class="text_field">
                <input type="password" name="password" class="box" required>
                <span></span>
                <label>Password</label>
            </div>
            <div class="pass"><a style="text-decoration: none; cursor: default; color:#a6a6a6;" ; href="forgotpass.php">Forgot Password?</a></div>
            <input type="submit" name="submit" value="Login" class="btn">
            <div class="signup_link">
               Don't have an account? <a href="signup.php">Signup</a>
            </div>
        </form>
    </div>
    </body>
</html>