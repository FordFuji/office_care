<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head><?php require('inc_header.php');?>
</head>

<body>
    <?php require('inc_topmenu.php'); ?>

    <section id="membermenu">
       
        <div class="sidemembermenu">
        <div class="topichead mb-3">
            <h1>บัญชีของฉัน</h1>
        </div>
            <ul>
                <li data-page="profile"><a href="account_profile.php">ข้อมูลส่วนตัว</a></li>
                <li data-page="address"><a href="account_address.php">ที่อยู่จัดส่ง</a></li>
                <li data-page="history"><a href="account_order.php">ประวัติการสั่งซื้อ</a></li>
                <li data-page="wishlist"><a href="account_wishlist.php">รายการโปรด</a></li>
                <li><a href="#">ออกจากระบบ</a></li>
            </ul>
        </div>
    </section>

    <script>
        < ? php require('inc_footer.php'); ? >


</body>

</html>