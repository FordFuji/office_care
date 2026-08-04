<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head><?php require('inc_header.php'); $pageName="wishlist";?>
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
                                รายการโปรด
                            </div>
                            <div class="contentacct">
                                <h2>2 รายการโปรด</h2>

                                <div class="row">
                                    <?php for ($i = 1; $i <= 3; $i++) { ?>
                                    <div class="col-lg-3">
                                        <div class="productgroup">
                                            <a href="#"><img src="images/product1.png" alt="">
                                            </a>
                                            <a href="#" class="wishlist"><i class="fi fi-rr-heart"></i></a>
                                            <div class="contentProduct pt-3">
                                                <a href="#" class="btn btn-cart"><i class="fi fi-rr-plus-small"></i>
                                                    เพิ่มสินค้า</a>
                                                <div class="price pt-3">
                                                    ฿ 21,500 <span>฿ 23,500</span>
                                                </div>
                                                <p>
                                                    เครื่องถ่ายเอกสารดิจิตอลขาว-ดำ
                                                    Kyocera Ecosys FS6530
                                                </p>
                                            </div>
                                            <a href="#" class="btn btn-delete"><i class="fi fi-rr-trash"></i> ลบ</a>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
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