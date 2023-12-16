<?php
include 'config.php';
if(isset($_POST['submit'])){

    $title = mysqli_real_escape_string($conn, $_POST["title"]);
    $cuisine = mysqli_real_escape_string($conn, $_POST["cuisine"]);
    $ingredients = mysqli_real_escape_string($conn,$_POST["ingredients"]);
    $steps = mysqli_real_escape_string($conn,$_POST["steps"]);
    $image = $_FILES['image']['name'];
    $image_size = $_FILES['image']['size'];
    $image_tmp_name = $_FILES['image']['tmp_name'];
    $image_folder = 'uploaded_img/'.$image;

    $insert = mysqli_query($conn, "INSERT INTO `recipe_list`(title, cuisine, ingredients, steps, image) VALUES('$title','$cuisine','$ingredients', '$steps', '$image')") or die('query failed');
    if($insert){
        move_uploaded_file($image_tmp_name, $image_folder);
        $message[] = 'registered successfully!';
}
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Add Recipe</title>
        <link rel="stylesheet" href="styles.css">
        <style>
            input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }
  input[type=textarea] {
  width: 100%;
  height: 150px;
  padding: 12px 20px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  background-color: #f8f8f8;
  font-size: 16px;
  resize: none;
}
  input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }
  
  input[type=submit]:hover {
    background-color: #45a049;
    size:50%;
  }
  
  div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
  }
        </style>
    </head>
    <body>
        <ul>
            <div class="banner">
            <div class="navbar">
            <form method="post">
                <input type="text" placeholder="Search Recipes" name="search">
            </form>
            <div class="container">
                <table class="table">
                    <?php
                    // if(isset($_POST['submit'])){
                    //     $search=$_POST['search'];

                    //     $sql="Select * from 'recipe_list' where id='$search'";
                    //     $result=mysqli_query($con,$sql);
                    //     if($result){

                    //     }
                    // }
                    ?>
                </table>
            </div>
                <ul>
                <li><a href="index.php">Home</a></li>
           <li><a href="myrecipes.php">My Recipes</a></li>
           <li><a href="profile.php">Profile</a></li>
           <li><a href="login.php">Login</a></li>
               </ul>
            </div>
        </div>
            <div class="tab">
            <div class="tab">
                <button class="tablinks" onclick="location.href='index.php'">All</button>
                <button class="tablinks" onclick="location.href='chinese.php'">Chinese</button>
                <button class="tablinks" onclick="location.href='japanese.php'">Japanese</button>
                <button class="tablinks" onclick="location.href='italian.php'">Italian</button>
            </div>
            </div>
        </ul>
        <h4>Add Recipe</h4>
        <div>
        <form method="post" enctype="multipart/form-data">
        <label for="fname">Recipe Title</label>
    <input type="text" id="title" name="title" placeholder="Recipe Title">
    <label for="cuisine">Cuisine</label>
    <select id="cuisine" name="cuisine" placeholder="Select Cuisine">
      <option value="chinese">Chinese</option>
      <option value="japanese">Japanese</option>
      <option value="italian">Italian</option>
      <option value="mediterranean">Mediterranean</option>
      <option value="filipino">Filipino</option>
    </select>
    <label for="ingredients">Ingredients</label>
    <input type="textarea" id="ingredients" name="ingredients" placeholder="Ingredients">
    <label for="steps">Steps</label>
    <input type="textarea" id="steps" name="steps" placeholder="Steps">
    <input type="file" name="image" class="box" accept="image/jpg, image/jpeg, image/png">
  
    <input type="submit" name="submit" value="Submit">
        </form>
        <div>
        </body>
</html>