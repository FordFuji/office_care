<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head><?php require('inc_header.php'); $pageName="history";?>
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
                                รายการสั่งซื้อสินค้า
                            </div>
                            <div class="contentacct">
                                <div class="grouporderhis mb-4">
                                    <div class="bgordernumber">
                                        รหัสออเดอร์ : OFC34234234
                                    </div>
                                    <?php for ($i = 1; $i <= 3; $i++) { ?>
                                    <div class="row mt-3">
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <img src="images/product1.png" alt="" class="img-fluid">
                                                </div>
                                                <div class="col-lg-8 contentbl">
                                                    เครื่องถ่ายเอกสารดิจิตอลขาว-ดำ
                                                    Kyocera Ecosys FS6530
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 text-lg-center">
                                            2
                                        </div>
                                        <div class="col-lg-3 text-lg-end">
                                            <div class="priceoriginal">
                                                ฿ 21,500
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <?php } ?>
                                    <div class="summary text-lg-end">
                                        ยอดสั่งซื้อทั้งหมด : <span>฿ 43,000</span>
                                    </div>
                                </div>
                                <div class="grouporderhis mb-4">
                                    <div class="bgordernumber">
                                        รหัสออเดอร์ : OFC34234234
                                    </div>
                                    <?php for ($i = 1; $i <= 2; $i++) { ?>
                                    <div class="row mt-3">
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <img src="images/product1.png" alt="" class="img-fluid">
                                                </div>
                                                <div class="col-lg-8 contentbl">
                                                    เครื่องถ่ายเอกสารดิจิตอลขาว-ดำ
                                                    Kyocera Ecosys FS6530
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 text-lg-center">
                                            2
                                        </div>
                                        <div class="col-lg-3 text-lg-end">
                                            <div class="priceoriginal">
                                                ฿ 21,500
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="summary text-lg-end">
                                        ยอดสั่งซื้อทั้งหมด : <span>฿ 43,000</span>
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