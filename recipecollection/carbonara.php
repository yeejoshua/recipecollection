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
            src="carbonara.jpg"
            class="img recipe-hero-img"
          />
          <article class="recipe-info">
            <h2>Fettucine Carbonara</h2>
            <p>
            This fettuccine carbonara is a delectable, mouth-watering pile of yummy goodness! I recommend a nice salad with it — that's all you will need for a complete meal.
            </p>
            <div class="recipe-icons">
              <article>
                <i class="fas fa-clock"></i>
                <h5>prep time</h5>
                <p>10 min.</p>
              </article>
              <article>
                <i class="far fa-clock"></i>
                <h5>cook time</h5>
                <p>25 min.</p>
              </article>
              <article>
                <i class="fas fa-user-friends"></i>
                <h5>serving</h5>
                <p>6 servings</p>
              </article>
            </div>
            <p class="recipe-tags">
              Tags : <a href="tag-template.html">pasta</a>
              <a href="tag-template.html">italian</a>
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
              Heat olive oil in a large heavy saucepan over medium heat. Sauté shallots until softened.
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
              Stir in bacon and onion; cook and stir until bacon is evenly browned. Stir in garlic when bacon is about half done.
            </div>
            <!-- end of single instruction -->
            <!-- single instruction -->
            <div class="single-instruction">
              <header>
                <p>step 3</p>
                <div></div>
              </header>
              <p>
              Remove from heat. Bring a large pot of lightly salted water to a boil. Add pasta and cook for 8 to 10 minutes or until al dente. Drain pasta
              </p>
            </div>
            <!-- end of single instruction -->
          </article>
          <article class="second-column">
            <div>
              <h4>ingredients</h4>
              <p class="single-ingredient">5 teaspoons olive oil</p>
              <p class="single-ingredient">4 shallots, diced 1 pound bacon, cut into strips 1 large onion, cut into thin strips 1 clove garlic</p>
              <p class="single-ingredient">chopped 1 (16 ounce) package dry fettuccine pasta</p>
              <p class="single-ingredient">¾ cup shredded Parmesan cheese</p>
              <p class="single-ingredient">½ cup heavy cream</p>
              <p class="single-ingredient">3 egg yolks salt and pepper to taste</p>
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
