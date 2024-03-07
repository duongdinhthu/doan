<?php
session_start();
ini_set('display_errors', 'off');
if (!isset($_SESSION["username"])&&!isset($_SESSION['password'])) {
    header("Location: login.php");
    exit;
}
include "project.php";
$project = new projectFptHappy();
$day = $_GET['day'];
$delete = $project->deleCode();
if (isset($_GET['action']) && $_GET['action'] === 'done' && isset($_GET['code'])&& isset($_GET['username'])&&isset($_GET['day'])) {
    $done= $_GET['action'];
    $code = $_GET['code'];
    $username = $_GET['username'];
    $day=$_GET['day'];
    $statusdone = $project->statusDone( $code ,$username,$done,$day);
    echo "<h3>Change the status to done successfully</h3>";
}
if (isset($_GET['action']) && $_GET['action'] === 'delivering' && isset($_GET['code'])&& isset($_GET['username'])&&isset($_GET['day'])) {
    $code = $_GET['code'];
    $username = $_GET['username'];
    $delivering= $_GET['action'];
    $day=$_GET['day'];
    $statusdone = $project->statusDelivering( $code ,$username,$delivering,$day);
    echo "<h3>Change the status to delivery successfully</h3>";
}
$project = new projectFptHappy();
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $from = $_POST['search'];
    $to = $_POST['search1'];
    $status = $_POST['search2'];
    $paycart = $project->oder($to,$from,$status);
}else{
    $paycart = $project->oder3();
}
$loading=$project->loading();
$numRows = $loading['numRows'];
$done=$project->done();
$numDone=$done['numRows'];
$ship=$project->delivering();
$numShip=$ship['numRows'];
$process=$project->processing();
$numPro=$process['numRows'];
$customer=$project->customer();
$numCus=$customer['numRows'];
$totalbook=$project->totalBook();
$numBook=$totalbook['numRows'];
$sucBook=$project->totalBooksuc();
$numBookSuc=$sucBook['numRows'];
$conBook=$project->totalBookcon();
$numBookCon=$conBook['numRows'];
$penBook=$project->totalBookpen();
$numBookPen=$penBook['numRows'];
$tile=($numBookSuc/$numBook)*100;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student List</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<style>
    body{
        background-color: #FEF7EF;
    }
    .container{
        background-color: white;
        padding: 30px 30px;
        border-radius: 20px;
        box-shadow: 2px 2px 2px #cccccc;
        margin-bottom: 50px;
    }
    .table a{
        text-decoration: none;
        color: #f29f33;
        border: 1px solid #f29f33;
        padding: 8px 12px;
        border-radius: 10px;
        transition: 0.3s ease-in-out;
    }
    .table a:hover{
        background-color: #f29f33;
        color: white;
    }
    form input{
        margin-right: 10px;
        outline: none;
        border: 1px solid grey;
        padding: 3px 10px;
        border-radius: 10px;
    }
    form select{
        padding: 5px 10px;
        border-radius: 10px;
    }
    .status-select{
        padding: 5px 10px;
        border-radius: 10px;
    }
    .all div{
        margin-right: 5%;
        border: 1px solid;
    }
    .all div h4{
        font-size: 16px;
    }
</style>
<body>
<h2 style="color: #f29f33;margin-bottom: 50px; margin-top: 50px; text-align: center; font-weight: bold">WELCOME TO THE ADMIN AREA</h2>

<div class="container">
    <a href="logout.php" class="btn btn-outline-danger" style="border-radius: 10px">Logout</a>
    <a href="book_tour.php" class="btn btn-outline-secondary" style="border-radius: 10px">Customers book tours</a>
    <a href="infor_customer.php" class="btn btn-outline-secondary" style="border-radius: 10px">Customer information</a>
    <a href="employye_manager.php" class="btn btn-outline-secondary" style="border-radius: 10px">Employee manage</a>
    <a href="add_product.php" class="btn btn-outline-success" style="border-radius: 10px">Manage product</a>

<div class="all" style="display: flex; margin-top: 30px">
    <div style="padding: 25px 90px 25px 10px; background-color: #17A2B8; color: white; border-radius: 10px">
        <h2>
            <?php
            echo $numRows;
            ?>
        </h2>
        <h4>Total orders</h4>
    </div>
    <div style="padding: 25px 40px 25px 10px">
        <h2>
            <?php
            echo $numDone;
            ?>
        </h2>
        <h4>Successful ordered</h4>
    </div>
    <div style="padding: 25px 50px 25px 10px">
        <h2>
            <?php
            echo $numShip;
            ?>
        </h2>
        <h4>Order is shipping</h4>
    </div>
    <div style="padding: 25px 80px 25px 10px">
        <h2>
            <?php
            echo $numPro;
            ?>
        </h2>
        <h4>Order is pend <br>processing</h4>
    </div>
</div>
    <div class="all" style="display: flex; margin-top: 30px">
        <div>
            <h4>Total book tour ordered:</h4>
            <?php
            echo $numBook;
            ?>
        </div>
        <div>
            <h4>Successful book tour ordered:</h4>
            <?php
            echo "$numBookSuc<br>";
            echo "(".number_format($tile,2) ."%)";
            ?>
        </div>
        <div>
            <h4>Book tour consulting:</h4>
            <?php
            echo $numBookCon;
            ?>
        </div>
        <div>
            <h4>Book tour pend processing:</h4>
            <?php
            echo $numBookPen;
            ?>
        </div>
    </div>
<div>
    <div>
        <h4>Total customers:</h4>
        <?php
        echo $numCus;
        ?>
    </div>
</div>
    <h2 style="color: #f29f33; margin-bottom: 30px; margin-top: 30px">
        Enter the date to search</h2>
    <form action="" method="post">
        <label for="search" >From </label>
        <input name="search" type="date" id="search" required value="2024-02-28">
        <label for="search1" >To </label>
        <input name="search1" type="date" id="search1" required value="2024-02-29">
        <label for="search2" >Status </label>
        <select name="search2"  id="search2" class="status-select">
            <option value="pend processing">pend processing</option>
            <option value="done" style="background: #07ff07">done</option>
            <option value="delivering" style="background: #f29f33">delivering</option>
        </select>
        <br>
        <br>
        <button class="btn btn-outline-warning" type="submit" style="border-radius: 10px" >Search</button>
    </form>
    <br>
    <table class="table">
        <h2 style="color: #f29f33; margin-bottom: 30px; margin-top: 30px">List users</h2>
        <thead>
        <tr>
            <th>Account</th>
            <th>Code</th>
            <th>Payment</th>
            <th>Day</th>
            <th>Update order status</th>
            <th>Order Detail</th>

        </tr>
        </thead>
        <tbody>
        <?php foreach ($paycart as $paycart):
            ?>
            <tr>
                <td><?php echo $paycart['username']  ?> </td>
                <td><?php echo $paycart['code'] ?></td>
                <td><?php echo $paycart['payment'] ?></td>
                <td><?php echo $paycart['trading_day'] ?></td>
                <td><select class="status-select">
                        <option value=""><?php echo $paycart['status'] ?></option>
                        <option value="1" style="background: #07ff07">done</option>
                        <option value="2" style="background: #f29f33">delivering</option>
                    </select></td>

                <td><a href="order_detail.php?action=detail&code=<?php echo $paycart['code']; ?>&username=<?php echo $paycart['username'] ?>">Order Detail</a></td>
                <td><a href="fpthappy.php?action=done&code=<?php echo $paycart['code']; ?>&username=<?php echo $paycart['username'] ?>&day=<?php echo $paycart['trading_day'] ?>" class=" myLink1 " hidden="hidden" onclick="return confirm('Do you want to change the status to done?')">Done</a></td>
                <td><a href="fpthappy.php?action=delivering&code=<?php echo $paycart['code']; ?>&username=<?php echo $paycart['username'] ?>&day=<?php echo $paycart['trading_day'] ?>"  class=" myLink2 " hidden="hidden" onclick="return confirm('Do you want to change the status to Delivering?')">Delivering</a></td>

            </tr>

        <?php endforeach; ?>
        </tbody>
    </table>

</div>

<script>
    var statusSelects = document.querySelectorAll('.status-select');

    statusSelects.forEach(function(select) {
        select.addEventListener("change", function() {
            var selectedValue = this.value;
            if (selectedValue === "1") {
                this.parentNode.parentNode.querySelector(".myLink1").click();
            } else if (selectedValue === "2") {
                this.parentNode.parentNode.querySelector(".myLink2").click();
            }

            // Disable options based on selected value
            for (var i = 0; i < this.options.length; i++) {
                if (this.options[i].value !== selectedValue && this.options[i].value !== "" && this.value === "1") {
                    this.options[i].disabled = true;
                } else {
                    this.options[i].disabled = false;
                }
            }

            // Store selected value in localStorage
            localStorage.setItem('selectedValue', selectedValue);
        });

        // Check and disable options if value is stored in localStorage
        var storedValue = localStorage.getItem('selectedValue');
        if (storedValue) {
            for (var i = 0; i < select.options.length; i++) {
                if (select.options[i].value !== 1) {
                    select.options[i].disabled = false;
                }
            }
        }
    });
</script>
</body>
</html>

