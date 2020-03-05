<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- custom css -->
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body>
    <?php
	  	include ("function/area.php");
    		include ("function/function.php");
		include ("include/header.php");
		include ("include/bannar.php");
		include ("include/search.php");
	?>

    <br>
    <section id="content">
        <div class="container fwhite">
            <div class="row hcontent">
                <div class="col-md-6">
                    <h3>Welcome to OFFERUP - the largest </h3>
                    <h3>marketplace in United States!</h3><br>
                    <p>Buy and sell everything from used cars to mobile phones and computers,<br> or search for property, jobs and more <strong>in Bangladesh - for free!</strong></p>
                    <br>
                    <h4>Browse our top categories:</h4>
                    <div id="iconbarf" class="row text-center">
                        <div class="col-md-3">
                            <a class="icon" href="catWiseItems.php?id=5"><img src="images/phone.png"><br>Electronics</a>
                        </div>
                        <div class="col-md-3">
                            <a class="icon" href="catWiseItems.php?id=15"><img src="images/car.png"><br>Cars & Vehicles</a>
                        </div>
                        <div class="col-md-3">
                            <a class="icon" href="catWiseItems.php?id=8"><img src="images/home.png"><br>Property</a>
                        </div>
                        <div class="col-md-3">
                            <a class="icon" href="catWiseItems.php?id=9"><img src="images/Briefcase.png"><br>Jobs in United States</a>
                        </div>
                    </div>
                    <p class="iconf">
                        <a class="icon" href="#"><img src="images/deal.png"> Bikroy Deals </a><strong class="bg-warning"> NEW! </strong> Great deals delivered straight to your doorstep</p>
                </div>
             <!-- Changes made -->
                <div class="col-md-2">
                    <div class="text-right">
                        <h3>Cities</h3>
                        <ul>
                            <?php
						  getArea();
						?>
                        </ul>
                        <h3>Division</h3>
                        <ul>
                            <a href="subarea.php?id=1">
                                <li>Texas</li>
                            </a>
                            <a href="subarea.php?id=2">
                                <li>New York</li>
                            </a>
                            <a href="subarea.php?id=3">
                                <li>Illinois</li>
                            </a>
                            <a href="subarea.php?id=4">
                                <li>California</li>
			    </a>
                            <a href="subarea.php?id=5">
                                <li>Utah</li>
                            </a>
                             <a href="subarea.php?id=6">
                                <li>Florida</li>
                            </a>
                             <a href="subarea.php?id=7">
                                <li>Arizona</li>
                            </a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <br>
    <section id="pcontent">
        <div class="container fwhite">
            <div class="row">
                <div id="iconbar" class="row text-center">
                    <div class="col-md-3">
                        <a class="icon" href="catWiseItems.php?id=5"><img src="images/phone.png"><br>Electronics</a>
                        <p>Find great deals for used electronics in United States of America including mobile phones, computers, laptops, TVs, cameras and much more.</p>
                    </div>
                    <div class="col-md-3">
                        <a class="icon" href="catWiseItems.php?id=15"><img src="images/car.png"><br>Cars & Vehicles</a>
                        <p>Find great deals for used electronics in United States of America including mobile phones, computers, laptops, TVs, cameras and much more.</p>
                    </div>
                    <div class="col-md-3">
                        <a class="icon" href="catWiseItems.php?id=8"><img src="images/home.png"><br>Property</a>
                        <p>Find great deals for used electronics in United States of America including mobile phones, computers, laptops, TVs, cameras and much more.</p>
                    </div>
                    <div class="col-md-3">
                        <a class="icon" href="catWiseItems.php?id=9"><img src="images/Briefcase.png"><br>Jobs in Bangladesh</a>
                        <p>Find great deals for used electronics in United States of America including mobile phones, computers, laptops, TVs, cameras and much more.</p>
                    </div>
                </div>
                <div id="iconbar" class="row text-center">
                    <div class="col-md-3">
                        <a class="icon" href="catWiseItems.php?id=1"><img src="images/book-open-flat.png"><br>Books, CDs and Hobbies</a>
                        <p>Find great deals for used electronics in United States of America including mobile phones, computers, laptops, TVs, cameras and much more.</p>
                    </div>
                    <div class="col-md-3">
                        <a class="icon" href="catWiseItems.php?id=4"><img src="images/computer-clipart1.png"><br>Computer and Accessories</a>
                        <p>Find great deals for used electronics in United States of America including mobile phones, computers, laptops, TVs, cameras and much more.</p>
                    </div>
                    <div class="col-md-3">
                        <a class="icon" href="catWiseItems.php?id=6"><img src="images/food.png"><br>Food and Agriculture</a>
                        <p>Find great deals for used electronics in United States of America including mobile phones, computers, laptops, TVs, cameras and much more.</p>
                    </div>
                    <div class="col-md-3">
                        <a class="icon" href="catWiseItems.php?id=7"><img src="images/home.png"><br>Rent</a>
                        <p>Find great deals for used electronics in United States of America including mobile phones, computers, laptops, TVs, cameras and much more.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="text-center bottom">
        <h3>Do you have something to sell?</h3>
        <h4>Post your ad on OFFERUP!</h4>
        <a href="adspost.php"><button class="btn btn-warning" type="submit"> Post Your ad now!</button></a>
    </section>

    <?php
		include ("include/footer.php");
	?>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js "></script>
    <!-- Include all compiled plugins (below), or include individual files as needed By Imran-->
    <script src="js/bootstrap.min.js "></script>
</body>

</html>
