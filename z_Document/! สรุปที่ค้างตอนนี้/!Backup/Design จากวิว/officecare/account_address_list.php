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
                            <div class="contentacct">
                                <div class="row mb-5">
                                    <div class="col-lg-4 border-end">
                                        <div class="addressbox">
                                            <h2>เนตรทกาญ อ่อนน้อม</h2>
                                            <p>146/82-83 ซอย ลาดพร้าว 122 ลาดพร้าว <br>
                                                แขวง พลับพลา เขต วังทองหลาง <br>
                                                กรุงเทพมหานคร 10310
                                                <br><br>
                                                0814499488
                                            </p>
                                            <a href="#" class="btn defaultactive">ค่าเริ่มต้น</a> <a href="#"
                                                class="binlink"><i class="fi fi-rr-trash"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 border-end">
                                        <div class="addressbox">
                                            <h2>เนตรทกาญ อ่อนน้อม</h2>
                                            <p>146/82-83 ซอย ลาดพร้าว 122 ลาดพร้าว <br>
                                                แขวง พลับพลา เขต วังทองหลาง <br>
                                                กรุงเทพมหานคร 10310
                                                <br><br>
                                                0814499488
                                            </p>

                                            <a href="#" class="btn btn-select">ตั้งเป็นค่าเริ่มต้น</a> <a href="#"
                                                class="binlink"><i class="fi fi-rr-trash"></i></a>
                                        </div>

                                    </div>
                                    <div class="col-lg-4">
                                        <div class="addressbox">
                                            <h2>เนตรทกาญ อ่อนน้อม</h2>
                                            <p>146/82-83 ซอย ลาดพร้าว 122 ลาดพร้าว <br>
                                                แขวง พลับพลา เขต วังทองหลาง <br>
                                                กรุงเทพมหานคร 10310
                                                <br><br>
                                                0814499488
                                            </p>

                                            <a href="#" class="btn btn-select">ตั้งเป็นค่าเริ่มต้น</a> <a href="#"
                                                class="binlink"><i class="fi fi-rr-trash"></i></a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <center><a href="#" class="btn btn-primary mt-4 btnaddnew" data-width="948" data-height="700"
                                data-fancybox data-src="#address" href="javascript:;">+ เพิ่มที่อยู่ใหม่</a></center>
                        <div style="display: none;" id="address">
                            <div class="topichead mb-3">
                                <h1>เพิ่มที่อยู่ใหม่</h1>
                                <p>จัดการข้อมูลที่อยู่เพื่อการจัดส่ง</p>
                            </div>
                            <div class="formdefault mt-4">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-floating mb-3">
                                            <input type="name" class="form-control" id="floatingInput"
                                                placeholder="ชื่อ-นามสกุล">
                                            <label for="floatingInput">ชื่อ-นามสกุล</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-floating mb-3">
                                            <input type="tel" class="form-control" id="floatingInput"
                                                placeholder="เบอร์ติดต่อ">
                                            <label for="floatingInput">เบอร์ติดต่อ</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-floating mb-3">
                                            <input type="address" class="form-control" id="floatingInput"
                                                placeholder="ที่อยู่การจัดส่ง">
                                            <label for="floatingInput">ที่อยู่การจัดส่ง</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="input-group mb-3">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>จังหวัด</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="input-group mb-3">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>ตำบล/แขวง</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="input-group mb-3">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>อำเภอ/เขต</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-floating mb-3">
                                            <input type="post" class="form-control" id="floatingInput"
                                                placeholder="รหัสไปรษณีย์">
                                            <label for="floatingInput">รหัสไปรษณีย์</label>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <br>
                            <button class=" btn btn-primary" rel="1">บันทึก</button>
                            <button class="btn btn-cancel" rel="1">ยกเลิก</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <?php require('inc_footer.php'); ?>


</body>

</html>