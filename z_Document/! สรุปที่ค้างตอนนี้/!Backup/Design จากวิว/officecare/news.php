<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head><?php require('inc_header.php'); ?>
</head>

<body>
    <?php require('inc_topmenu.php'); ?>

    <section id="newspage">
        <div class="container-fluid g-0 overflow-hidden">
            <div class="symbolleft">
                <img src="images/half_orangeEllipse.png" alt="">
            </div>
            <div class="symbolright">
                <img src="images/half_blueEllipse.png" alt="">
            </div>
            <div class="wrapper_pad">
                <div class="row mt-5">
                    <div class="col">
                        <div class="news_slide owl-carousel owl-animated-in owl-theme">
                            <?php for ($i = 1; $i <= 3; $i++) { ?>
                            <div class="item">
                                <div class="newstop hoverstyle">
                                    <figure>
                                        <a href="#"><img src="images/newsbig.png" alt=""></a>
                                    </figure>
                                    <figcaption>
                                        <span>12 สิงหาคม 2565</span>
                                        <h1>โครงการ ”ออฟฟิศแคร์ ดูแล พนักงานที่ประสบภัยน้ำท่วม”</h1>
                                        <p>
                                            บริษัท ออฟฟิศ แคร์ คอร์ปอเรชั่น จำกัด
                                            ได้จัดทำโครงการพิเศษเพื่อช่วยเหลือพนักงานที่ประสบภัยน้ำท่วม
                                            ภายใต้ชื่อโครงการที่ว่า “ออฟฟิศแคร์ ดูแล พนักงานที่ประสบภัยน้ำท่วม” โดยมี
                                            คุณประพิณ ผลประไพ ผู้จัดการฝ่ายบุคคล เป็นตัวแทนบริษัทฯ
                                            เพื่อมอบเงินช่วยเหลือดังกล่าว
                                        </p>
                                        <a href="#"><i class="bi bi-arrow-up-right"></i></a>
                                    </figcaption>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-12 col-md-7 col-lg-9">
                        <div class="topichead">
                            ข่าวสาร & โปรโมชั่น
                        </div>
                    </div>
                    <div class="col-12 col-md-5  col-lg-3">
                        <div class="sortnews">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>เรียงตาม</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <?php for ($i = 1; $i <= 6; $i++) { ?>
                    <div class="col-6 col-lg-4">
                        <div class="newsgroup hoverstyle">
                            <figure>
                                <a href="news_detail.php"><img src="images/newspic.png" alt=""></a>
                            </figure>
                            <a href="news_detail.php">
                                <div class="newscontent">
                                    เครื่องถ่ายเอกสารดิจิตอลขาว-ดำ <br>
                                    Kyocera Ecosys FS6530
                                </div>
                            </a>
                            <div class="date">
                                12 สิงหาคม 2565
                            </div>

                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
    <?php require('inc_footer.php'); ?>

    <script>
        $(document).ready(function () {
            $('.news_slide ').owlCarousel({
                loop: true,
                margin: 20,
                dots: true,
                autoplay: false,
                autoplayTimeout: 4000,
                autoplayHoverPause: true,
                smartSpeed: 500,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 1
                    },
                    1000: {
                        items: 1
                    }
                }
            })


        });
    </script>

</body>

</html>