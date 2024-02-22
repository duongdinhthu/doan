<?php
session_start();

if (!isset($_SESSION["username"])&&!isset($_SESSION['password'])){
    header("Location:http://localhost:63342/DoanKI1/frontend/home.html");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="trangchu.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Home</title>
</head>
<body>
<header>
    <div class="header">
        <div class="header1">
            <img src="img/logo.webp" alt="logo">
            <label>
                <input type="text" placeholder="Search">
                <i class="fa-solid fa-magnifying-glass"></i>
            </label>
            <div class="hotline">
                <i class="fa-solid fa-phone"></i>

                <p>Hotline<br>78910JQKA</p>
            </div>
        </div>
        <div class="d-flex">
            <a href="home.php" class="btn btn-outline">Home</a>
            <div class="dropdown">
                <button class="dropbtn">Games</button>
                <div class="dropdown-content">
                    <a href="Trochoitreem.php">Kids</a>
                    <a href="Trochoigiadinh.php">Family</a>
                    <a href="Trochoinguoilon.php">Adults</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">Products</button>
                <div class="dropdown-content">
                    <a href="Docanhan.php">Personal items</a>
                    <a href="Dothietyeu.php">Essentials</a>
                    <a href="Thucpham.php">Food</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">Services</button>
                <div class="dropdown-content">
                    <a href="Dichvutrongoi.php">Packages</a>
                    <a href="Dichvutour.php"> Tours</a>
                    <a href="Dichvutochuc.php">Organizing</a>
                </div>
            </div>
            <a href="tintuc.php" class="btn btn-outline">News</a>
            <a href="lienhe.php" class="btn btn-outline">Contact</a>
            <a href="user.php" class="btn btn-outline">Account</a>

        </div>
    </div>
    <img src="img/slider_1.webp" alt="" style="width: 100%; background-color: #FEF7EF">
</header>
<div class="introduce">
    <h2>WHY CHOOSE CAMP AS YOUR TRAVEL COMPANION?</h2>
    <hr/>
    <p>CAMP is honored to accompany you on every journey, ensuring you have the best experiences.</p>
    <div class="content">
        <img src="img/banner_why_1.webp" alt="">
        <div class="inside_content">
            <div class="all-box">
                <button class="box">
                    <i class="fa-solid fa-list"></i>
                    <h5>QUANTITY ASSURANCE</h5>
                    <p>Meet the camping, travel, and outdoor needs of up to 2000 people.</p>
                </button>
                <button class="box">
                    <i class="fa-solid fa-medal"></i>
                    <h5>QUALITY COMMITMENT</h5>
                    <p>All products meet safety and quality standards.</p>
                </button>
            </div>
            <div class="all-box">
                <button class="box2">
                    <i class="fa-solid fa-gift"></i>
                    <h5>DISCOUNT POLICY</h5>
                    <p>Loyalty programs, charity events, community activities.</p>
                </button>
                <button class="box2">
                    <i class="fa-solid fa-shield-halved"></i>
                    <h5>WARRANTY POLICY</h5>
                    <p>Meet the camping, travel, and outdoor needs of up to 2000 people.</p>
                </button>
            </div>
        </div>
    </div>
</div>
<div class="service">
    <div class="text-box">
        <h2>SERVICES</h2>
        <hr/>
        <p>CAMP offers the most convenient and suitable services, making your trips hassle-free.</p>
        <button>View all</button>
    </div>
    <div class="img-boxes">
        <button class="img-box">
            <div class="text">
                <img width="50" height="50" src="https://img.icons8.com/ios/50/654145/backpack.png" alt="backpack"/><hr/>
                <p>Adventure gear<br>combo</p>
            </div>
            <img src="img/banner-dich-vu-1.webp" alt="">
        </button>
        <button class="img-box">
            <div class="text">
                <img width="50" height="50" src="https://img.icons8.com/external-xnimrodx-lineal-xnimrodx/64/654145/external-tent-camping-xnimrodx-lineal-xnimrodx.png" alt="external-tent-camping-xnimrodx-lineal-xnimrodx"/>
                <hr/>
                <p>Travel gear<br>rental</p>
            </div>
            <img src="img/banner-dich-vu-2.webp" alt="">
        </button>
        <button class="img-box">
            <div class="text">
                <img width="50" height="50" src="https://img.icons8.com/external-kmg-design-detailed-outline-kmg-design/64/654145/external-van-travel-kmg-design-detailed-outline-kmg-design.png" alt="external-van-travel-kmg-design-detailed-outline-kmg-design"/>
                <hr/>
                <p>Camping gear</p>
            </div>
            <img src="img/banner-dich-vu-3.webp" alt="">
        </button>
    </div>
</div>
<div class="outstanding-product">
    <h2>FEATURED PRODUCTS</h2>
    <hr/>
    <div class="product-boxes">
        <div>
            <img src="img/sp9.webp" alt="">
            <a href="#">Self-inflating camping tent for 4-5 people, cool and airy, with sunroof...</a>
            <h5 class="cost">
                $50 <small><del>$60</del></small>
            </h5>
        </div>
        <div>
            <img src="img/sp8.webp" alt="">
            <a href="#">Convenient camping tent for 2-3 people (2mx1.5mx1.1m) K102</a>
            <h5 class="cost">
                $20 <small><del>$30</del></small>
            </h5>
        </div>
        <button>
            <h2>4-8 PERSON OUTDOOR COMBO<br><p>View now <strong>-></strong></p></h2>
            <img src="img/img_banner_product_featured.webp" alt="" style="width:570px">
        </button>
    </div>
    <div class="product-boxes">
        <div>
            <img src="img/sp7.webp" alt="">
            <a href="#">Premium self-inflating camping tent for 1-3 people, size 2 x 1.5 x...</a>
            <h5 class="cost">
                $80 <small><del>$100</del></small>
            </h5>
        </div>
        <div>
            <img src="img/sp6.webp" alt="">
            <a href="#">Military-style self-inflating camping tent for 1-3 people, size...</a>
            <h5 class="cost">
                Contact us
            </h5>
        </div>
        <div>
            <img src="img/sp5.webp" alt="">
            <a href="#">Self-inflating camping tent with 2 sunroofs and 4 doors for 3-4...</a>
            <h5 class="cost">
                $70 <small><del>$90</del></small>
            </h5>
        </div>
        <div>
            <img src="img/sp4.webp" alt="">
            <a href="#">High-quality self-inflating camping tent for 8-9 people (Size...</a>
            <h5 class="cost">
                $150 <small><del>$180</del></small>
            </h5>
        </div>
    </div>
</div>
<div class="exclusive-product">
    <h2>CAMP EXCLUSIVES</h2>
    <hr/>
    <div class="menu-product">
        <a href="#" class="a1">Tents and accessories</a>
        <a href="#">Outdoor furniture</a>
        <a href="#">Stoves and utensils</a>
        <a href="#">Mats, mattresses, sleeping bags</a>
        <a href="#">Floor lamps & outdoor lights</a>
        <a href="#">Other products</a>
    </div>
    <div class="exclusive-boxes">
        <img src="img/img_banner_product_tab.webp" alt="">
        <div class="boxes">
            <div>
                <img src="img/sp16-4.webp" alt="">
                <a>Waterproof picnic mat with caro pattern...</a>
                <h5 class="cost">$10 <small><del>$20</del></small></h5>
            </div>
            <div>
                <img src="img/sp15.webp" alt="">
                <a>Ultralight single hammock for outdoor...</a>
                <h5 class="cost">$20 <small><del>$40</del></small></h5>
            </div>
            <div>
                <img src="img/sp11.webp" alt="">
                <a>Outdoor BBQ grill made of stainless steel</a>
                <h5 class="cost">$15</h5>
            </div>
            <div>
                <img src="img/sp14.webp" alt="">
                <a>Premium camping hammock K174, durable...</a>
                <h5 class="cost">$20 <small><del>$40</del></small></h5>
            </div>
            <div>
                <img src="img/sp12.webp" alt="">
                <a>Outdoor BBQ grill with tall legs (Full set)...</a>
                <h5 class="cost">$50</h5>
            </div>
            <div>
                <img src="img/sp9%20(1).webp" alt="">
                <a>Self-inflating camping tent for 4-5 people...</a>
                <h5 class="cost">$50 <small><del>$60</del></small></h5>
            </div>
        </div>
    </div>
</div>
<div class="combo">
    <h2>CAMP EXCLUSIVE COMBOS</h2>
    <hr/>
    <div class="img-combo">
        <img src="img/image_combo_1.webp" alt="">
        <img src="img/image_combo_2.webp" alt="">
    </div>
</div>


<div class="news">
    <h2>NEWS</h2>
    <hr/>
    <div class="all-new">
        <div class="new">
            <img src="img/t4.webp" alt="">
            <h5>6 nearby travel destinations from Saigon for the April 30th and May 1st holidays</h5>
            <p>Dung Nguyen | October 25, 2021</p>
            <h6>Here are some eco-tourism destinations near Saigon where you can experience fun activities, relax...</h6>
            <a href="#">Read more <strong>-></strong></a>
        </div>
        <div class="new">
            <img src="img/t3.webp" alt="">
            <h5>6 nearby travel destinations from Saigon for the April 30th and May 1st holidays</h5>
            <p>Dung Nguyen | October 25, 2021</p>
            <h6>Dau Tieng Lake is a picturesque destination in Tay Ninh, just 85km from Ho Chi Minh City. This is...</h6>
            <a href="#">Read more <strong>-></strong></a>
        </div>
        <div class="new">
            <img src="img/t2.webp" alt="">
            <h5>6 nearby travel destinations from Saigon for the April 30th and May 1st holidays</h5>
            <p>Dung Nguyen | October 23, 2021</p>
            <h6>It's no coincidence that camping gear is so popular for outdoor trips. Customers always seek...</h6>
            <a href="#">Read more <strong>-></strong></a>
        </div>
    </div>
</div>
<div class="footer">
    <div class="footer0">
        <div class="footer1">
            <img src="img/logo.webp" alt="">
            <div class="icon">
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-youtube"></i>
                <i class="fa-brands fa-twitter"></i>
            </div>
            <p>SUBSCRIBE TO NEWSLETTER</p>
            <label>
                <input type="email" placeholder="Enter email address">
                <button>SEND</button>
            </label>
            <div class="contact">
                <i class="fa-solid fa-location-dot"></i>
                <p>.................................</p>
            </div>
            <div class="contact">
                <i class="fa-solid fa-phone"></i>
                <p>0910JQKA</p>
            </div>
            <div class="contact">
                <i class="fa-solid fa-headphones"></i>
                <p>support@gmail.com</p>
            </div>
        </div>
        <div class="footer2">
            <div class="paysupport">
                <div class="Support">
                    <h3>ABOUT US</h3><br>
                    <a href="#">Company</a><br>
                    <a href="#">Address</a><br>
                    <a href="#">Phone number</a><br>
                    <a href="#">Links</a><br>
                </div>
                <div class="Support">
                    <h3>CUSTOMER SUPPORT</h3><br>
                    <a href="#">Contact</a><br>
                    <a href="#">Handling complaints</a><br>
                    <a href="#">Usage guide</a><br>
                    <a href="#">Warranty, returns</a><br>
                    <a href="#">Contact</a><br>
                </div>
                <div class="Support">
                    <h3>SERVICES</h3><br>
                    <a href="#">Products</a><br>
                    <a href="#">Game organization services</a><br>
                    <a href="#">Payment</a><br>
                </div>
            </div>
            <div class="pay">
                <h3>PAYMENT METHODS</h3>
                <button></button>
                <button></button>
                <button></button>
                <button></button>
            </div>
        </div>
    </div>
    <hr/>
    <p class="license">@ Copyright belongs to ... | Provided by ...</p>
</div>
</body>
</html>

