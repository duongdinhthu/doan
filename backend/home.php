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
</head>
<body>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="home.css">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Home</title>
</head>
<body>
<div class="d-flex">
    <img src="../img/Nội dung đoạn văn bản của bạn.png" alt="trangchu">
    <a href="home.php" class="btn btn-outline" style="color: white;" >Trang chủ</a>
    <div class="dropdown mr-1">
        <button type="button" class="btn btn-outline dropdown-toggle" id="dropdownMenuOffset" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-offset="10,20">
            Trò chơi
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
            <a class="dropdown-item" href="Trochoitreem.php">Trò chơi cho trẻ em</a>
            <a class="dropdown-item" href="Trochoigiadinh.php">Trò chơi cho gia đình</a>
            <a class="dropdown-item" href="Trochoinguoilon.php">Trò chơi cho người lớn</a>
        </div>
    </div>
    <div class="dropdown mr-1">
        <button type="button" class="btn btn-outline dropdown-toggle" id="dropdownMenuOffset" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-offset="10,20">
            Sản phẩm
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
            <a class="dropdown-item" href="Docanhan.php">Đồ cá nhân</a>
            <a class="dropdown-item" href="Dothietyeu.php">Đồ thiết yếu</a>
            <a class="dropdown-item" href="Thucpham.php">Thực phẩm dã ngoại</a>
        </div>
    </div>
    <div class="dropdown mr-1">
        <button type="button" class="btn btn-outline dropdown-toggle" id="dropdownMenuOffset" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-offset="10,20">
            Dịch vụ
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
            <a class="dropdown-item" href="Dichvutrongoi.php">Dịch vụ trọn gói</a>
            <a class="dropdown-item" href="Dichvutour.php">Dịch vụ tour theo số người</a>
            <a class="dropdown-item" href="Dichvutochuc.php">Dịch vụ tổ chức trò chơi</a>
        </div>
    </div>
    <a href="cart.php" class="btn btn-outline" style="color: white;">Giỏ hàng</a>
    <a href="tintuc.php" class="btn btn-outline" style="color: white;">Tin tức</a>
    <a href="baiviet.php" class="btn btn-outline" style="color: white;">Liên hệ</a>
    <a href="user.php" class="btn btn-outline" style="color: white;" >Tài khoản</a>
</div>
<div class="search">
    <label>
        <input type="text" placeholder="Search">
        <button><i class="fa-solid fa-magnifying-glass"></i></button>
    </label>
</div>

<div class="img_header">
<img src="https://bizweb.dktcdn.net/100/440/011/themes/894889/assets/slider_1.jpg?1702953098418" alt="trangchu">
</div>
<div class="videos">
    <iframe width="100%" height="480px" src="https://www.youtube.com/embed/g1FTdnCgYYg?si=CRNgheloke8VUoPX" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <h2>Chào mừng bạn đến với trang web độc đáo và phong cách của chúng tôi - nơi tận hưởng những trải nghiệm du lịch đầy hứng khởi thông qua trò chơi sôi động dành cho trẻ em, gia đình và người lớn! Chúng tôi tự hào mang đến một không gian giải trí độc đáo, kết hợp giữa du lịch và trò chơi để tạo ra những kỷ niệm đáng nhớ. Với các tour du lịch đặc sắc, chúng tôi không chỉ đưa bạn đến những địa điểm đẹp nhất trên khắp thế giới mà còn mang đến những trò chơi sáng tạo và thú vị, giúp gia đình và bạn bè tạo ra những kỷ niệm không thể quên. Từ những trò chơi phiêu lưu thú vị cho trẻ em đến những thách thức hấp dẫn dành cho người lớn, chúng tôi cam kết đem đến cho bạn những trải nghiệm du lịch độc đáo và đầy tính giáo dục. Hãy cùng chúng tôi khám phá thế giới qua góc nhìn mới, nơi mà du lịch và trò chơi kết hợp hoàn hảo, mang lại niềm vui và hạnh phúc cho mọi thành viên trong gia đình. Hãy đăng ký ngay để tham gia vào cuộc phiêu lưu không giới hạn của chúng tôi và tận hưởng những khoảnh khắc đặc biệt, đánh thức tinh thần chơi đùa và khám phá!</h2>

</div>
<div class="main_content">
<h3>Khám phá Lợi Ích Tuyệt Vời của Các Trò chơi Gia đình, Trẻ Em và Team Building</h3>
</div>
<div class="slide">
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://images2.thanhnien.vn/uploaded/hoangnam/2015_06_04/img_6077_WCCL.jpg?width=500" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2> Khi Trò Chơi Gia Đình Trở Thành Hành Trình Gắn Kết</h2>
                    <h4> Tăng Cường Mối Quan Hệ và Tạo Kỷ Niệm Hạnh Phúc Trò chơi gia đình tạo ra cơ hội để gia đình gắn bó, tăng cường mối quan hệ và tạo ra những kỷ niệm đáng nhớ. Chúng giúp tạo ra không khí tích cực và sự hạnh phúc trong gia đình.</h4>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://blog.e2.com.vn/wp-content/uploads/2021/05/shutterstock-1043620027.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Phát Triển Kỹ Năng Xã Hội</h2>
                    <h4>Trò chơi nhóm giúp trẻ em phát triển kỹ năng xã hội như hợp tác, tôn trọng ý kiến của người khác và quản lý xung đột. Những kỹ năng này sẽ giúp họ trong tương lai, cả trong môi trường học tập và xã hội.</h4>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://nutrihome.vn/wp-content/uploads/2022/08/nao-be-phat-trien-nhanh-nhat-o-giai-doan-nao.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Hỗ Trợ Sự Phát Triển Trí Não</h2>
                    <h4>Trò chơi không chỉ mang lại niềm vui mà còn kích thích sự sáng tạo và phát triển trí não. Các trò chơi logic, trí tuệ giúp trẻ em rèn luyện tư duy logic và khả năng giải quyết vấn đề.</h4>
                </div>
            </div>
            <div class="carousel-item">
                <img src="http://dnacollege.edu.vn/Upload/images/Hinh-tot-nghiep/IMG-7164-Copy-1563064484.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Xây Dựng Tình Đồng Đội</h2>
                    <h4>Chơi trong nhóm giúp trẻ em hiểu về tầm quan trọng của việc làm việc nhóm. Họ học cách chia sẻ, hỗ trợ đồng đội và đồng lòng với mục tiêu chung, từ đó xây dựng tinh thần đồng đội mạnh mẽ.</h4>
                </div>
            </div>
            <div class="carousel-item">
                <img src="http://tapchitamlyhoc.com/wp-content/uploads/2021/09/stress-hoc-duong-1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Giảm Stress và Áp Lực</h2>
                    <h4>Trò chơi là một phương tiện giải trí tuyệt vời giúp gia đình và trẻ em giải tỏa stress, lo lắng và áp lực từ cuộc sống hàng ngày. Chúng tạo nên khoảnh khắc thoải mái và vui vẻ.</h4>
                </div>
            </div>


        </div>
        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<div class="footer">
    <div class="footer1">
        <img src="img/Nội%20dung%20đoạn%20văn%20bản%20của%20bạn.png" alt="">
        <div class="social">
            <i class="fa-brands fa-square-instagram"></i>
            <i class="fa-brands fa-facebook"></i>
            <i class="fa-brands fa-square-youtube"></i>
            <i class="fa-brands fa-square-twitter"></i>
        </div>
        <p>ĐĂNG KÝ NHẬN TIN</p>
        <label>
            <input type="email" placeholder="Nhập địa chỉ Email">
            <button type="submit">GỬI</button>
        </label>
        <div class="splpe">
            <i class="fa-solid fa-location-dot"></i>
            <p>.................................</p>
        </div>
        <div class="splpe">
            <i class="fa-solid fa-phone"></i>
            <p>0910JQKA</p>
        </div>
        <div class="splpe">
            <i class="fa-solid fa-headphones"></i>
            <p>support@gmail.com</p>
        </div>
    </div>
    <div class="footer2">
        <div class="info">
            <div class="hotro">
                <p>VỀ CHÚNG TÔI</p>
                <a href="#">Trang chủ</a>
                <a href="#">Về chúng tôi</a>
                <a href="#">Sản phẩm</a>
                <a href="#">Dịch vụ cho thuê</a>
                <a href="#">Tin tức</a>
                <a href="#">Sản phẩm của Camp</a>
                <a href="#">Liên hệ</a>
            </div>
            <div class="hotro">
                <p>HỖ TRỢ KHÁCH HÀNG</p>
                <a href="#">Trang chủ</a>
                <a href="#">Về chúng tôi</a>
                <a href="#">Sản phẩm</a>
                <a href="#">Dịch vụ cho thuê</a>
                <a href="#">Tin tức</a>
                <a href="#">Sản phẩm của Camp</a>
                <a href="#">Liên hệ</a>
            </div>
            <div class="hotro">
                <p>DỊCH VỤ</p>
                <a href="#">Trang chủ</a>
                <a href="#">Về chúng tôi</a>
                <a href="#">Sản phẩm</a>
                <a href="#">Dịch vụ cho thuê</a>
                <a href="#">Tin tức</a>
                <a href="#">Sản phẩm của Camp</a>
                <a href="#">Liên hệ</a>
            </div>
        </div>
        <div class="thanhtoan">
            <button></button>
            <button></button>
            <button></button>
            <button></button>
        </div>
    </div>
</div>
<script src="trangchu.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
