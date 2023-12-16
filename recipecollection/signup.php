<?php
include 'config.php';
if(isset($_POST['submit'])){
    // $first_name = mysqli_real_escape_string($conn, $_POST["first_name"]);
    // $last_name = mysqli_real_escape_string($conn, $_POST["last_name"]);
    $fullname = mysqli_real_escape_string($conn, $_POST["fullname"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $username = mysqli_real_escape_string($conn,$_POST["username"]);
    $pass = mysqli_real_escape_string($conn, md5($_POST["password"]));
    $cpass = mysqli_real_escape_string($conn, md5($_POST['cpassword']));
    $image = $_FILES['image']['name'];
    $image_size = $_FILES['image']['size'];
    $image_tmp_name = $_FILES['image']['tmp_name'];
    $image_folder = 'uploaded_img/'.$image;

    $select = mysqli_query($conn, "SELECT * FROM `user_list` WHERE email = '$email' AND password = '$pass'") or die('query failed');

    if(mysqli_num_rows($select) > 0){
        $message[]= 'User Already Exist';
    }else{
        if($password != $cpassword){
            $message[] = 'Confirm password did not match';
        }elseif($image_size > 2000000){
            $message[] = 'image size is too large!';
        }else{
            $insert = mysqli_query($conn, "INSERT INTO `user_list`(fullname, email,username, password, image) VALUES('$fullname','$email','$username', '$pass', '$image')") or die('query failed');
            if($insert){
                move_uploaded_file($image_tmp_name, $image_folder);
                $message[] = 'registered successfully!';
                header('location:login.php');
             }else{
                $message[] = 'registration failed!';
             }
        }
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="icon" type="image/x-icon" href="favicon.png">
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
            <div class="tab">
            <div class="tab">
                <button class="tablinks" onclick="location.href='index.php'">All</button>
                <button class="tablinks" onclick="location.href='chinese.php'">Chinese</button>
                <button class="tablinks" onclick="location.href='japanese.php'">Japanese</button>
                <button class="tablinks" onclick="location.href='italian.php'">Italian</button>
            </div>
            </div>
        </div>
    <div class="center">
        <h1>Sign Up</h1>
        <form method="post" enctype="multipart/form-data">
            <?php
            if(isset($message)){
                foreach($message as $message){
                    echo '<div class"message">'.$message.'</div>';
                }
            }   
            ?>
            <div class="text_field">
                <input type="text" name="fullname" required>
                <span></span>
                <label>Full Name</label>
            </div>
            <div class="text_field">
                <input type="text" name="username" required>
                <span></span>
                <label>Username</label>
            </div>
            <div class="text_field">
                <input type="email" name="email" required>
                <span></span>
                <label>Email</label>
            </div>
            <div class="text_field">
                <input type="password" name="password" required>
                <span></span>
                <label>Password</label>
            </div>
            <div class="text_field">
                <input type="password" name="cpassword" required>
                <span></span>
                <label>Confirm Password</label>
            </div>
            <div class="text_field">
            <input type="file" name="image" class="box" accept="image/jpg, image/jpeg, image/png">
            </div>
            <input type="submit" name="submit" value="Register">
        </form>
    </div>
</body>
</html>