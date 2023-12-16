<?php
include 'config.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>My Recipes</title>
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" href="button.css">

    </head>
    <body>
        <ul>
            <div class="banner">
            <div class="navbar">
            <form method="post">
                <input type="text" placeholder="Search Recipes" name="search">             
                <button name="submit" class="button-name">Search</button>
                </form>
                <ul>
           <li><a href="index.php">Home</a></li>
           <li><a href="myrecipes.php">My Recipes</a></li>
           <li><a href="profile.php">Profile</a></li>
           <li><a href="login.php">Login</a></li>
               </ul>
            </div>
        </div>
        <div class="tab">
                <button class="tablinks" onclick="location.href='index.php'">All</button>
                <button class="tablinks" onclick="location.href='chinese.php'">Chinese</button>
                <button class="tablinks" onclick="location.href='japanese.php'">Japanese</button>
                <button class="tablinks" onclick="location.href='italian.php'">Italian</button>
            </div>

        </ul>
        <form action="addrecipe.php">
    <input type="submit" class="button-name" value="Add Recipe"/>
</form>
        <h4>Search Results:</h4>
        <div class="container">
                <table class="table">
                    <?php
                    if(isset($_POST['submit'])){
                        $search=$_POST['search'];
                        $sql="Select * from `recipe_list` where title='$search' or cuisine='$search'";
                        $result=mysqli_query($con,$sql);
                        if($result){
                        if(mysqli_num_rows($result)>0){
                            // echo '<thead>
                            // <tr>
                            // <th>title</th>
                            // </tr>
                            // </thead>
                            // ';
                            while($row=mysqli_fetch_assoc($result)){
                            echo '<tbody>
                            <tr>
                            <td><a href="discover.php?data='.$row['title'].'">'.$row['title'].'</a></td>
                            <td>'.$row['cuisine'].'</td>
                            </tr>
                            </tbody>
                            ';
                            }
                            }else{
                            echo '<h2>Data not found</h2>';
                        }
                        }
                    }

                    // $sql="Select * from `recipe_list`";
                    // $result=mysqli_query($con,$sql);
                    // if($result){
                    //     $row=mysqli_fetch_assoc($result);
                    //     if(mysqli_fetch_assoc($result)>0){
                    //         while($row1 = mysqli_fetch_array($result)){
                    //             echo "<tr><td>".$row['title']."</td><td>".$row['ingredients']."<br>".$row1['steps']."</td>       </tr>";
                    //            }
                    //            }else{
                    //             echo "<tr><td>".$row['title']."</td><td>".$row['ingredients']."</td></tr>";
                    //            }
                    //            }
                    //            echo "</table></center>";
                        // echo '<div class="container">
                        //  <h1>'.$row['title'].'</h1>
                        //  <p>Ingredients: '.$row['ingredients'].'</p>
                        //  <p>Steps: '.$row['steps'].'</p>
                        // </div>';
                    
                        echo "<center><table border='1'>";

$sql ="Select * from `recipe_list`";
$result = mysqli_query($con,$sql);
while( ($row = mysqli_fetch_assoc($result)) ) {
   echo <<<END
      <tr>
         <td>{$row['title']}</td>
         <td>{$row['ingredients']}</td>  
         <td>{$row['steps']}</td>
      </tr>
END;
}

//Again the </table> only needs done once 
//so taken out of the loop
echo "</table></center>";
                    
                    
                    ?>
                </table>
    </body>
</html>
            </div>
        </ul>
    </body>
</html>