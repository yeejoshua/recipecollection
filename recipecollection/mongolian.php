<?php
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pork Tonkatsu</title>
    <!-- favicon -->
    <link rel="shortcut icon" href="./assets/favicon.ico" type="image/x-icon" />
    <!-- normalize -->
    <link rel="stylesheet" href="normalize.css" />
    <!-- font-awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
    />
    <!-- main css -->
    <link rel="stylesheet" href="main.css" />
    <link rel="stylesheet" href="button.css">
    <link rel="stylesheet" href="styles.css">
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
      </div>
    </nav>
    <!-- end of nav -->
    <main class="page">
      <div class="recipe-page">
        <section class="recipe-hero">
          <img
            src="mongolianbeef.jpg"
            class="img recipe-hero-img"
          />
          <article class="recipe-info">
            <h2>Mongolian Beef</h2>
            <p>
            The BEST Mongolian Beef Recipe you will ever taste! A quick, easy and ridiculously delicious stir fry dish of tender beef coated in a slightly sweet and savory sauce, Inspired by P.F. Changs Mongolian beef recipe. Serve it over steamed rice and a side of sautéed or steamed veggies for a complete meal everyone will love!
            </p>
            <div class="recipe-icons">
              <article>
                <i class="fas fa-clock"></i>
                <h5>prep time</h5>
                <p>20 min.</p>
              </article>
              <article>
                <i class="far fa-clock"></i>
                <h5>cook time</h5>
                <p>10 min.</p>
              </article>
              <article>
                <i class="fas fa-user-friends"></i>
                <h5>serving</h5>
                <p>4 servings</p>
              </article>
            </div>
            <p class="recipe-tags">
              Tags : <a href="tag-template.html">beef</a>
              <a href="tag-template.html">chinese</a>
              <a href="tag-template.html">asian</a>
            </p>
          </article>
        </section>
        <!-- content -->
        <section class="recipe-content">
          <article>
            <h4>instructions</h4>
            <!-- single instruction -->
            <div class="single-instruction">
              <header>
                <p>step 1</p>
                <div></div>
              </header>
              <p>
              Combine the sliced beef with the marinade ingredients (the neutral oil, Shaoxing wine, light soy sauce, cornstarch, water, and baking soda.
              </p>
            </div>
            <!-- end of single instruction -->
            <!-- single instruction -->
            <div class="single-instruction">
              <header>
                <p>step 2</p>
                <div></div>
              </header>
              <p>
              Marinate for 1 hour. The beef should still be quite moist after it has marinated. If it looks too dry, add a tablespoon of water to it.
              </p>
            </div>
            <!-- end of single instruction -->
            <!-- single instruction -->
            <div class="single-instruction">
              <header>
                <p>step 3</p>
                <div></div>
              </header>
              <p>
              In a small bowl, mix the sauce. Dissolve the brown sugar in the hot water
              </p>
            </div>
            <!-- end of single instruction -->
          </article>
          <article class="second-column">
            <div>
              <h4>ingredients</h4>
              <p class="single-ingredient">1 pound flank steak (sliced against the grain into 1/4-inch/6mm thick slices)</p>
              <p class="single-ingredient">2 teaspoons neutral oil (such as vegetable, canola, or avocado oil)</p>
              <p class="single-ingredient">2 teaspoons Shaoxing wine (or dry cooking sherry, optional)</p>
              <p class="single-ingredient">1 teaspoon soy sauce </p>
              <p class="single-ingredient">1 tablespoon cornstarch</p>
              <p class="single-ingredient">1 tablespoon water</p>
              <p class="single-ingredient">1/4 teaspoon baking soda</p>
              <p class="single-ingredient">1/4 cup light brown sugar </p>
            </div>
            <!-- <div>
              <h4>tools</h4>
              <p class="single-tool">Hand Blender</p>
              <p class="single-tool">Large Heavy Pot With Lid</p>
              <p class="single-tool">Measuring Spoons</p>
              <p class="single-tool">Measuring Cups</p>
            </div> -->
          </article>
        </section>
      </div>
    </main> 
    <script src="./js/app.js"></script>
  </body>
</html>
