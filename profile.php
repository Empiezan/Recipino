<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
    <title>Recipino</title>
    <!-- Required meta tags -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <style>
        body {
            margin: 0 auto;
            text-align: center;
            height: 100%;
            width: 100%;
            background-image: url('background-4.png');
        }
        /* div {*/
            /*margin: 0 auto;*/
            /*display: inline;*/
        /*} */
        form {
            margin: 0 auto;
        }

        /* .nav-section {
          height: 100%;
        } */
        #flex-container {
          display: flex;
          /* height: 100%; */
          /* background-color: black; */
          /* background-color: FloralWhite; */
          /* flex-grow: 6; */
        }
        .option-labels {
          display: inline-block;
          text-align: center;
          /* width: 25%; */
          /* height: 80vh; */
        }

        .card:hover {
          /* background-color: azure; */
          border-color: green;
        }

        a {
          /* position: absolute; */
          /* top: 0; left: 0; */
          /* height: 100%; width: 100%; */

        }

        a:link {
          color: black;
          text-decoration: none;
        }      /* unvisited link */
        a:visited {color: black;}   /* visited link */
        a:hover {color: black;}     /* mouse over link */
        a:active {color: black;}    /* selected link */

        #url-label {
          /* width: 15%; */
        }

        #main-nav {
          position: fixed;
          width: 100%;
          display: block;
          top: 0;
          /* nav will be in front of all content */
          z-index: 9;
        }

        .nav-section {
          width: 75%;
          margin: auto;
          /* float: center; */
          /* text-align: center; */
        }

        h1 {
          /* color: BurlyWood; */
          /* font-weight: bold; */
        }

        /* #user-recipes {
          width: 100%;
          display: none;
        } */

        .card-text {
          text-align: left;
        }

        /* #preview { */
          /* visibility: hidden; */
        /* } */



    </style>
    <link href="/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Documentation extras -->

    <link href="https://cdn.jsdelivr.net/npm/docsearch.js@2/dist/cdn/docsearch.min.css" rel="stylesheet">

    <link href="/docs/4.0/assets/css/docs.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">

</head>
<body data-spy="scroll" data-target="#main-nav" data-offset="0">
    <!-- Scrollspy Nav -->

    <nav id="main-nav" class="navbar navbar-light bg-light">
      <!-- <a class="navbar-brand" href="#">Navbar</a> -->
      <ul class="nav nav-pills">
        <a class="navbar-brand" href="/home.html">Recipino</a>
        <li class="nav-item" id="sign-out">
          <a class="nav-link" href="#logout">Logout</a>
        </li>
      </ul>
    </nav>
    <br><br><br><br>
    <h1>
      <?php echo("{$_SESSION['username']}"); ?>'s Profile
    </h1>
    <div id="user-recipes" class="bd-example" style="width: 80%; margin: 0 auto;">
      <div class="row">
        <div class="col-4" id="list-tab-div" style="height: 400px;">
          <br>
          <div class="list-group" id="list-tab" role="tablist"></div>
        </div>
        <div class="col-8">
          <div class="tab-content" id="nav-tab-content"></div>
        </div>
      </div>
    </div>

    <button type="submit" class="btn btn-primary" id="save-recipe">Save Recipe</button>

    <script src="./form.js"></script>
    <script>
      $(document).ready(function() {
        var xmlHttp = new XMLHttpRequest();
        xmlHttp.open("POST", "getRecipes.php", true);
        xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlHttp.addEventListener("load", getRecipeCallBack, false);
        xmlHttp.send();
      });

    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</div>
</body>
</html>
