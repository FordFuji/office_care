<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head><?php require('inc_header.php'); $pageName="profile";?>
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
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="boxacct">
                                    <div class="tophead">
                                        <div class="row">
                                            <div class="col-8 col-lg-9">
                                                ข้อมูลส่วนตัว
                                            </div>
                                            <div class="col-4 col-lg-3 text-end">
                                                <a href="javascript:void(0)" class="edittext" rel="1">
                                                    แก้ไข</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="contentacct">
                                        <div class="nameids" rel="1">
                                            <h2>เนตรทกาญ อ่อนน้อม</h2>
                                            <p>netthakan@orange-thailand.com <br> 0814499488</p>
                                        </div>
                                        <div class="editnameids" style="display:none;" rel="1">
                                            <div class="formdefault">
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control" value="เนตรทกาญ">
                                                </div>
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control" value="อ่อนน้อม">
                                                </div>
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control"
                                                        value="netthakan@orange-thailand.com">
                                                </div>
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control" value="0814499488">
                                                </div>
                                            </div>
                                            <button class="showCT btn btn-primary" rel="1">บันทึก</button>
                                            <button class="showCT btn btn-cancel" rel="1">ยกเลิก</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mt-4 mt-lg-0">
                                <div class="boxacct">
                                    <div class="tophead">
                                        <div class="row">
                                            <div class="col-8 col-lg-9">
                                                รหัสผ่าน
                                            </div>
                                            <div class="col-4 col-lg-3 text-end">
                                                <a href="javascript:void(0)" class="edittext" rel="2">
                                                    แก้ไข</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="contentacct">
                                        <div class="nameids" rel="2">
                                            <h2>รหัสผ่าน</h2>
                                            <p>***********</p>
                                        </div>
                                        <div class="editnameids" style="display:none;" rel="2">
                                            <div class="formdefault">
                                                <div class="input-group passwordedit mb-3">
                                                    <span class="input-group-text">รหัสผ่านปัจจุบัน</span>
                                                    <input type="password" class="form-control" value="********">
                                                    <span class="input-group-text"><i class="fi fi-rr-eye"></i></span>
                                                </div>
                                                <div class="input-group passwordedit mb-3">
                                                    <span class="input-group-text">รหัสผ่านใหม่</span>
                                                    <input type="password" class="form-control" value="********">
                                                    <span class="input-group-text"><i class="fi fi-rr-eye"></i></span>
                                                </div>
                                            </div>
                                            <button class="showCT btn btn-primary" rel="2">บันทึก</button>
                                            <button class="showCT btn btn-cancel" rel="2">ยกเลิก</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php require('inc_footer.php'); ?>
    <script>
        $(document).ready(function () {
            $(".edittext").click(function () {
                var rel = $(this).attr("rel");
                $(".editnameids[rel='" + rel + "']").show();
                $(".nameids[rel='" + rel + "']").hide();
            });
            $(".showCT").click(function () {
                var rel = $(this).attr("rel");
                $(".editnameids[rel='" + rel + "']").hide();
                $(".nameids[rel='" + rel + "']").show();
            });
        });
    </script>

</body>

</html>