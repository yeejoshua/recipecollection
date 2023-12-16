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
            src="tonkatsu.jpg"
            class="img recipe-hero-img"
          />
          <article class="recipe-info">
            <h2>Pork Tonkatsu</h2>
            <p>
            Tonkatsu consists of tender pork loin (or fillet) that has been breaded and deep-fried to crunchy perfection. The word Ton (豚) comes from “pork” and Katsu (カツ) is an abbreviation of Katsuretsu (カツレツ), derived from the English word “cutlet.”

Like many other popular foods in Japan (think ramen, tempura, soba, etc.), there are tonkatsu restaurants that exclusively serve this juicy pork cutlet as their specialty. And no plate of tonkatsu is ever complete without a mound of freshly shredded cabbage and a healthy drizzle of tonkatsu sauce.
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
              Tags : <a href="tag-template.html">pork</a>
              <a href="tag-template.html">japanese</a>
              <a href="tag-template.html">food</a>
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
              Slash the fat rimming one side of the loin cutlet to keep the meat from curling when deepfried
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
              Pound to flatten to about 1/4 inch. Salt and pepper both sides of each cutlet.
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
              Dredge each in flour, then dip into beaten eggs and press into bread crumbs to coat both sides. Heat a large skillet with about 1/2 inch of oil until hot. Lay 1 or 2 cutlets
              </p>
            </div>
            <!-- end of single instruction -->
          </article>
          <article class="second-column">
            <div>
              <h4>ingredients</h4>
              <p class="single-ingredient">4 slices pork loin or tenderloin, each about 1/2-inch thick and 5 ounces</p>
              <p class="single-ingredient">Salt and freshly ground black pepper</p>
              <p class="single-ingredient">Flour for dredging 2 eggs, lightly beaten 2 cups panko (bread crumbs)</p>
              <p class="single-ingredient">Vegetable oil for pan frying</p>
              <p class="single-ingredient">Shredded Napa cabbage</p>
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
