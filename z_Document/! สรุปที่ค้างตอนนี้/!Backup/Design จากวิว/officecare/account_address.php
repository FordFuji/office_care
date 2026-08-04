<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head><?php require('inc_header.php'); $pageName="address";?>
</head>

<body>
    <?php require('inc_topmenu.php'); ?>

    <section id="memberpage">
        <div class="container-fluid">
            <div class="wrapper_pad">
                <div class="row mt-5 mb-5">
                    <div class="col-lg-3 position-relative">
                        <div class="topichead mb-3">
                            <h1>บัญชีของฉัน</h1>
                        </div>
                        <div class="d-none d-sm-none d-md-none d-lg-block d-xl-block">
                            <?php require('inc_sidemember.php'); ?>
                        </div>
                        <div class="d-block d-sm-block d-md-block d-lg-none d-xl-none">
                            <a href="m_acct.php" class="linkmb">กลับ</a>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="boxacct">
                            <div class="tophead">
                                ที่อยู่จัดส่ง
                            </div>
                            <div class="contentacct text-center">
                                <h2>ยังไม่ได้บันทึกที่อยู่จัดส่ง</h2>
                                <a href="account_address_list.php" class="btn btn-primary mt-4 ">+ เพิ่มที่อยู่ใหม่</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <?php require('inc_footer.php'); ?>


</body>

</html>