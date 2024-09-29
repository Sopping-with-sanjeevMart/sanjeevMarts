<?php
include 'header.php';
?>
    <?php 
    include 'connection.php';
    ?>
    <?php
session_start(); // Start the session

// Check if the user is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("location: login.php"); // Redirect to login page
    exit;
}
?>

        <div class="navbar">
            <div class="nav-logo border">
                <div class="logo"></div>
            </div>

            <div class="nav-address border">
                <p class="add-First">Deliver to</p>
                <div class="add-icon">
                    <i class="fa-solid fa-location-dot"></i>
                    <p class="add-Second">India </p></a>


                </div>
            </div>

            <div class="nav-search">
                <select class="search-select">
                    <option>All</option>
                </select>
                <input placeholder="Search SanjeevMart" class="search-input">
                <div class="search-icon">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
            </div>
            <a href="logout.php"style="text-decoration: none; color: #fff;">Logout</a>
<!-- <div class="login"><a href="form.php"style="text-decoration: none; color: #fff;">Login</a></div> -->
            <div class="nav-signin border">
                <p><span>Hello, Sign in</span></p>
                <p class="nav-second">Account & Lists</p>
            </div>

            <div class="nav-return border">
                <p><span>Returns</span></p>
                <p class="nav-second">& Orders</p>
             </div>
            <div class="nav-cart border">
                <i class="fa-solid fa-cart-shopping"></i>
                Cart
            </div>
        </div>
   

     <div class="hero" style="background-image: url(hero-section.jpg); height: 400px;
    background-size: cover;
    display: flex;
    justify-content: center;
    align-items: center;">
        <div class="hero-msg"style= "background-color: rgb(0 113 133 / 0%);
    color: black;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 0.85rem;
    width: 90%;
    margin-top: 150px;">
            <marquee behavior="" direction="left">
                <p>You are on SanjeevMart.com You can also shop on SanjeevMart India for millions ofproducts with fast
                    local delivery. <a href="https://www.amazon.com/"style=
                   
   " text-decoration: none;
    color: #fa7a03;">Click here to go SanjeevMart.in</a></p>
            </marquee>
        </div>
    </div>

    <div class="shop-section"style="display: flex;
    flex-wrap: wrap;
    justify-content: space-evenly;
    align-items: center;
    background-color: #e2e7e6;">

        <div class="box1 box">
            <h2>Starting ₹99 | Start your fitness journey</h2>
            <div class="box-img "style="background-image: url(box-img.jpg); height: 300px;
    background-size: cover;
    margin: 10px;
    border-radius: 18px;">
            </div>
            <p class="price">Price <del style="color: red;">₹500</del> ₹99</p>
            <a href="view1.php">Shop now</a>

        </div>
        <div class="box2 box">

            <h2>Up to 60% off | Top picks</h2>
            <div class="box2-img"style="background-image: url(box1-img.jpg); height: 300px;
    background-size: cover;
    margin: 10px;
    border-radius: 18px;"
            ></div>
            <p class="price">Price <del style="color: red;">₹1000</del> ₹400</p>
            <a href="view2.php">Shop now</a>

        </div>
        <div class="box3 box">
            <h2>Up to 60% off | Car, bike parts & accessories</h2>
            <div class="box3-img"style="background-image: url(box3-img.jpg); height: 300px;
    background-size: cover;
    margin: 10px;
    border-radius: 18px;"
            ></div>
            <p class="price">Price <del style="color: red;">₹30000</del> ₹22000</p>
            <a href="view3.php">Shop now</a>
        </div>
        <div class="box4 box">
            <h2>Helth, beauty & personal care</h2>
            <div class="box4-img"style="background-image: url(box4-img.jpg); height: 300px;
    background-size: cover;
    margin: 10px;
    border-radius: 18px;"
            ></div>
            <p class="price">Price <del style="color: red;">₹150</del> ₹100</p>
            <a href="view4.php">Shop now</a>
        </div>




        <div class="box5 box">
            <h2>Customers’ Most-Loved products</h2>
            <div class="box5-img"style="background-image: url(box5-img.jpg); height: 300px;
    background-size: cover;
    margin: 10px;
    border-radius: 18px;"
            ></div>
            <p class="price">Price <del style="color: red;">₹800</del> ₹600</p>
            <a href="view5.php">Shop now</a>
        </div>



        <div class="box6 box">
            <h2>Minimum 50% off | Men's clothing</h2>
            <div class="box6-img"style="background-image: url(box6-img.jpg); height: 300px;
    background-size: cover;
    margin: 10px;
    border-radius: 18px;"
            ></div>
            <p class="price">Price <del style="color: red;">₹1000</del> ₹500</p>
            <a href="view6.php">Shop now</a>
        </div>


        <div class="box7 box">
            <h2>Up to 50% off | International brands</h2>
            <div class="box7-img"style="background-image: url(box7-img.jpg); height: 300px;
    background-size: cover;
    margin: 10px;
    border-radius: 18px;"
            ></div>
            <p class="price">Price <del style="color: red;">₹1200</del> ₹600</p>
            <a href="view7.php">Shop now</a>
        </div>



        <div class="box8 box">
            <h2>Latest styles | Dresses, kurta & more | 50% - 80% off</h2>
            <div class="box8-img"style="background-image: url(box8-img.jpg); height: 300px;
    background-size: cover;
    margin: 10px;
    border-radius: 18px;"
            ></div>
            <p class="price">Price <del style="color: red;">₹300</del> ₹200</p>
            <a href="view8.php">Shop now</a>
        </div>
    </div> 
   
<?php
include 'footer.php';
?>