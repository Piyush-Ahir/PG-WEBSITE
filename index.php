<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Krishna PG</title>

    <?php
    include "includes/head_links.php";
    ?>
    <link href="css/home.css" rel="stylesheet" />
</head>

<body>
    <?php
    include "includes/header.php";
    ?>

    <div class="banner-container">
        <h2 class="white pb-3">Let us feel you home</h2>

        <form id="search-form" action="property_list.php" method="GET">
            <div class="input-group city-search">
                <input type="text" class="form-control input-city" id='city' name='city' placeholder="Enter your area to search for PGs" />
                <div class="input-group-append">
                    <button type="submit" class="btn btn-secondary">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>

    <div class="page-container">
        <h1 class="city-heading">
            Areas
        </h1>
        <div class="row">
            <div class="city-card-container col-md">
                <a href="property_list.php?city=Ahmedabad">
                    <div class="city-card rounded-circle">
                        <img src="img/delhi.jpg" class="city-img" />
                    </div><br>
                    PG in Ahmedabad city
                </a>
            </div>

            <!-- <div class="city-card-container col-md">
                <a href="property_list.php?city=Mumbai">
                    <div class="city-card rounded-circle">
                        <img src="img/mumbai.png" class="city-img" />
                    </div>
                </a>
            </div> -->

            <div class="city-card-container col-md">
                <a href="property_list.php?city=Other city">
                    <div class="city-card rounded-circle">
                        <img src="img/bangalore.png" class="city-img" />
                    </div><br>
                    PG in other than Ahmedabad city
                </a>
            </div>

            <!-- <div class="city-card-container col-md">
                <a href="property_list.php?city=Hyderabad">
                    <div class="city-card rounded-circle">
                        <img src="img/hyderabad.png" class="city-img" />
                    </div>
                </a>
            </div> -->
        </div>
    </div>

    <div class="row">
            <div class="city-card-container col-md">
                    <div class="city-card">
                        <img src="img/StressFreeSearch.jpg" class="city-img" />
                        <div class="css-1le25p4">Stress free search</div>
                        <div class="css-1bs6o7z">Real property photos and <br> Transparent pricing</div>
                    </div>
            </div>

            <div class="city-card-container col-md">
                    <div class="city-card">
                        <img src="img/findyourmatch.jpg" class="city-img" />
                        <div class="css-1le25p4">Find your Match</div>
                        <div class="css-1bs6o7z">Lots of options to choose from <br>(private, twin &amp; multi-sharing)</div>
                    </div>
            </div>

            <div class="city-card-container col-md">
                    <div class="city-card">
                        <img src="img/bonappetite.jpg" class="city-img" />
                        <div class="css-1le25p4">Bon appetite</div>
                        <div class="css-1bs6o7z">Info on meal type and offerings <br>to know what’s cooking</div>
                    </div>
            </div>

            <div class="city-card-container col-md">
                    <div class="city-card">
                        <img src="img/yourlife.jpg" class="city-img" />
                        <div class="css-1le25p4">Your Life, Your Rules</div>
                        <div class="css-1bs6o7z">Advance info on house rules <br> to live like you do</div>
                    </div>
            </div>
    </div>
</div>

    <?php
    include "includes/signup_modal.php";
    include "includes/login_modal.php";
    include "includes/footer.php";
    ?>

</body>

</html>
