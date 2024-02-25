<?php
session_start();
//kiểm tra session
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
</head>
<body>
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Home</title>
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="Dichvutochuc.css">
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
                <p>Hotline<br>8910JQKA</p>
            </div>
        </div>
        <div class="d-flex">
            <a href="home.html" class="btn btn-outline">Home</a>
            <div class="dropdown">
                <button class="dropbtn">Games</button>
                <div class="dropdown-content">
                    <a href="Trochoitreem.html"> Kids</a>
                    <a href="Trochoigiadinh.html">Family</a>
                    <a href="Trochoinguoilon.html">Adults</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">Products</button>
                <div class="dropdown-content">
                    <a href="Docanhan.html">Personal items</a>
                    <a href="Dothietyeu.html">Essentials</a>
                    <a href="Thucpham.html">Food</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">Services</button>
                <div class="dropdown-content">
                    <a href="Dichvutrongoi.html">Package</a>
                    <a href="Dichvutour.html"> Tour</a>
                    <a href="Dichvutochuc.html">Organize</a>
                </div>
            </div>
            <a href="tintuc.html" class="btn btn-outline">News</a>
            <a href="lienhe.html" class="btn btn-outline">Contact</a>
            <a href="../backend/login.php" class="btn btn-outline">Login</a>

        </div>
    </div>
    <img src="https://bizweb.dktcdn.net/100/440/011/themes/894889/assets/img_banner_brea_col.jpg?1702953098418" alt="" style="width: 100%">
</header>
<style>
    body {
        font-family: Arial, sans-serif;
        line-height: 1.6;
        margin: 20px;
    }
    .news {
        max-width: 800px;
        margin: 0 auto;
        background-color: #f8f8f8;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    h1 {
        color: #333;
    }
    p {
        color: #555;
    }

    .comments {
        margin-top: 20px;
    }
    .comment {
        background-color: #f3f3f3;
        padding: 10px;
        border-radius: 5px;
        margin-bottom: 10px;
    }
    .comment p {
        margin: 0;
    }
    .comment-form {
        margin-top: 20px;
    }
    .comment-form label {
        display: block;
        margin-bottom: 8px;
    }
    .comment-form input,
    .comment-form textarea {
        width: 100%;
        padding: 8px;
        margin-bottom: 12px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
    }
    .comment-form button {
        background-color: #4caf50;
        color: #fff;
        padding: 10px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
    .comment-form button:hover {
        background-color: #45a049;
    }
</style>
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
                <p>Hotline<br>8910JQKA</p>
            </div>
        </div>
        <div class="d-flex">
            <a href="home.html" class="btn btn-outline">Home</a>
            <div class="menu">
                <ul>
                    <li><a href="home.html">Games</a>
                        <ul class="ul">
                            <li><a href="Trochoitreem.html"> Children</a></li>
                            <li><a href="Trochoigiadinh.html">Family</a></li>
                            <li><a href="Trochoinguoilon.html">Adults</a></li>
                        </ul>
                    </li>
                    <li><a href="home.html">Products</a>
                        <ul class="ul">
                            <li><a href="Docanhan.html">Personal Items</a></li>
                            <li><a href="Dothietyeu.html">Essentials</a></li>
                            <li><a href="Thucpham.html">Food</a></li>
                        </ul>
                    </li>
                    <li><a href="home.html">Services</a>
                        <ul class="ul">
                            <li><a href="Dichvutrongoi.html">Package Services</a></li>
                            <li><a href="Dichvutour.html">Tour</a></li>
                            <li><a href="Dichvutochuc.html">Organization</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <a href="tintuc.html" class="btn btn-outline">News</a>
            <a href="lienhe.html" class="btn btn-outline">Contact</a>
            <a href="../backend/login.php" class="btn btn-outline">Log in</a>

        </div>
    </div>
    <img src="https://bizweb.dktcdn.net/100/440/011/themes/894889/assets/img_banner_brea_col.jpg?1702953098418" alt="" style="width:100%;">
</header>
<div class="news">
    <h1>NEWS</h1>
    <h2>OUTDOOR Announcement of Tet Holiday Schedule Nham Dan 2022</h2>
    <p><strong>117 Reviews</strong></p>
    <p>Dear valued customers,</p>

    <p>Joining in the atmosphere of welcoming the new year Nham Dan 2022 nationwide, OUTDOOR wishes you a New Year filled with Safety - Prosperity - All the Best.</p>

    <p>With all sincerity, we sincerely thank you for your trust and companionship in the past time. Your trust is always the most valuable asset for OUTDOOR, and we will strive even more in the coming years to bring better quality of goods and customer service.</p>
    <p>In addition, we would like to inform you about the Lunar New Year holiday schedule as follows:</p>

    <ul>
        <li><strong>Start of holiday:</strong> Sunday, January 30, 2022, on the 28th of Tet's month in the Tan Suu year.</li>
        <li><strong>Return to work:</strong> Saturday, February 5, 2022, on the 5th of January in the Nham Dan year.</li>
    </ul>

    <p>The technical support department will still work normally according to the commitment 24/7/365 during the Tet holiday.</p>

    <p>During the Tet holiday, OUTDOOR will still accept orders and will be confirmed and shipped when we return to work. For faulty products or those needing to be exchanged, OUTDOOR will record and process after Tet.</p>

    <p>For orders in transit, OUTDOOR will continue to support during the Tet holiday.</p>

    <p>If you need support on any shipping-related issues, please contact customer service via:</p>

    <ul>
        <li><strong>Hotline:</strong> 0979 729 140</li>
        <li><strong>Email:</strong> contact@dioutdoor.vn</li>
    </ul>

    <p>We wish you a new year full of health and happiness.</p>

    <p><strong>OUTDOOR sincerely announces.</strong></p>
</div>

<!-- Comment Section -->
<div class="comments">
    <h2>Comments</h2>
    <!-- Display comments here -->

    <!-- Example comment -->
    <div class="comment">
        <p><strong>User:</strong> John Doe</p>
        <p><strong>Comment:</strong> Wishing FPT HAPPY Co., Ltd. a holiday filled with joy!</p>
    </div>
</div>

<!-- Comment Form -->
<div class="comment-form">
    <h2>Add Comment</h2>
    <form action="#" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <label for="comment">Comment:</label>
        <textarea id="comment" name="comment" rows="4" required></textarea>

        <button type="submit">Send Comment</button>
    </form>
</div>
</div>

<div class="footer">
    <div class="footer0">
        <div class="footer1">
            <img src="img/logo_footer.webp" alt="">
            <div class="icon">
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-youtube"></i>
                <i class="fa-brands fa-twitter"></i>
            </div>
            <p>SUBSCRIBE TO NEWSLETTER</p>
            <label>
                <input type="email" placeholder="Enter your email address">
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
                    <a href="#">Instructions for use</a><br>
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
<script src="../../DoanKI1%20(1)/frontend/trangchu.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>


