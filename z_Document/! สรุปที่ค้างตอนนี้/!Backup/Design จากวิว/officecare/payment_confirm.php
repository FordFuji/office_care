<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head><?php require('inc_header.php'); ?>
</head>

<body>
    <?php require('inc_topmenu.php'); ?>

    <section id="paymentpage">
        <div class="container-fluid g-0 overflow-hidden">
            <div class="haftelp">
                <img src="images/haft_Ellipse.png" alt="">
            </div>
            <div class="wrapper_pad">
                <div class="row  mt-5 mb-5">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="bgpayment">
                            <div class="paymentgroup">
                                <h1 class="mt-4">แจ้งชำระเงิน</h1>
                                <div class="formwhite mt-5">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-floating mb-3">
                                                <input type="email" class="form-control" id="floatingInput"
                                                    placeholder="เลขที่ออเดอร์">
                                                <label for="floatingInput">เลขที่ออเดอร์</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-floating mb-3">
                                                <input type="email" class="form-control" id="floatingInput"
                                                    placeholder="จำนวนเงิน">
                                                <label for="floatingInput">จำนวนเงิน</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-floating mb-3">
                                                <input type="email" class="form-control" id="floatingInput"
                                                    placeholder="ชื่อ-นามสกุล">
                                                <label for="floatingInput">ชื่อ-นามสกุล</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-floating mb-3">
                                                <input type="email" class="form-control" id="floatingInput"
                                                    placeholder="วันที่ชำระเงิน">
                                                <label for="floatingInput">วันที่ชำระเงิน</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-floating mb-3">
                                                <input type="email" class="form-control" id="floatingInput"
                                                    placeholder="เวลาชำระเงิน">
                                                <label for="floatingInput">เวลาชำระเงิน</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <center><a href="#" class="btn btn-submit mt-4">ยืนยันการชำระเงิน</a></center>
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