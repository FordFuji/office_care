<section id="membermenu">
    <div class="sidemembermenu">
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
       $(function () {
           var getPage = '<?php echo($pageName); ?>';
           $(".sidemembermenu li").each(function () {
               var getMenu = $(this).attr("data-page");
               if (getPage == getMenu) {
                   $(this).addClass('active');
               }
           });
       });
   </script>