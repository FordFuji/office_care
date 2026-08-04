<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head><?php require('inc_header.php'); ?>
</head>

<body>
    <?php require('inc_topmenu.php'); ?>
    <section id="topbanner" class="wrapperPages">
        <div class="container-fluid g-o overflow-hidden">
            <div class="wrapper_pad">
                <div class="row mt-5">
                    <div class="col-lg-8">
                        <div class="banner_slide owl-carousel owl-theme">
                            <?php for ($i = 1; $i <= 3; $i++) { ?>
                            <div class="item">
                                <!-- PC -->
                                <div class="d-none d-sm-none d-md-none d-lg-block d-xl-block">
                                    <img src="images/banner_big.png" alt="">
                                </div>
                                <div class="bigbanner_caption">
                                    สินค้าุสำนักงานมากมาย <br>
                                    ให้คุณได้เลือกช้อป
                                    <br>
                                    <a href="#" class="mt-3 btn btn-light">ช้อปเลย</a>
                                </div>
                                <!-- MB -->
                                <div class="d-block d-sm-block d-md-block d-lg-none d-xl-none">
                                    <img src="images/banner_big.png" alt="">
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="bannersm">
                            <img src="images/banner_sm.png" class="img-fluid" alt="">
                            <div class="smbanner_caption">
                                จัดการสำนักงานของคุณ <br>
                                ให้สะดวกต่อการใช้งาน
                            </div>
                            <div class="smbanner_sec">
                                เราพร้อมตอบสนองทุกความต้องการ และอยู่เคียงข้างคุณ

                            </div>
                            <span><i class="bi bi-arrow-up-right"></i></span>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="indexpage">
        <div class="container-fluid">
            <div class="wrapper_pad">
                <div class="row mt-5">
                    <div class="col">
                        <div class="topichead">
                            <span class="bestsellertag">Best <br> Seller</span>
                            สินค้าขายดี
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <?php for ($i = 1; $i <= 8; $i++) { ?>
                    <div class="col-6 col-lg-3">
                        <div class="productgroup">
                            <a href="#"><img src="images/product1.png" alt="">
                            </a>
                            <a href="#" class="wishlist"><i class="fi fi-rr-heart"></i></a>
                            <div class="contentProduct pt-3">
                                <a href="#" class="btn btn-cart"><i class="fi fi-rr-plus-small"></i> เพิ่มสินค้า</a>
                                <div class="price pt-3">
                                    ฿ 21,500 <span>฿ 23,500</span>
                                </div>
                                <p>
                                    เครื่องถ่ายเอกสารดิจิตอลขาว-ดำ
                                    Kyocera Ecosys FS6530
                                </p>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <div class="row mt-5">
                    <div class="col">
                        <div class="midbanner">
                            <div class="row">
                                <div class="col-lg-9">
                                    <div class="text">
                                        <h5>สินค้าราคาดีที่สุด <br>
                                            ที่คุณต้องการ
                                            <span>อยู่ที่นี่แล้ว!</span>
                                        </h5>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="fromtop">
                                        <a href="#" class="btn btn-light">ช้อปเลย</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col">
                        <div class="topichead">
                            เลือกช้อปตามแบรนด์
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-lg-4">
                        <div class="brandsCover">
                            <img src="images/brands_pic_cover.png" class="img-fluid" alt="">
                            <a href="#" class="btn btn-light mt-4">แบรนด์ทั้งหมด</a>
                            <span><img src="images/Ellipse.png" alt=""></span>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="row">
                            <?php for ($i = 1; $i <= 4; $i++) { ?>
                            <div class="col-lg-6">
                                <div class="brandgroup hoverstyle">
                                    <figure>
                                        <a href="#">
                                            <img src="images/brand_prd.png" alt="">
                                        </a>
                                    </figure>
                                    <div class="logobrand">
                                        <img src="images/logo/epson.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col">
                        <div class="topichead">
                            อุปกรณ์สำนักงาน
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col">
                        <div class="category_slide owl-carousel owl-theme">
                            <div class="item hoverstyle">
                                <figure>
                                    <a href="#">
                                        <img src="images/cat_pen.png" alt="">
                                    </a>
                                </figure>
                                <span>ปากกา</span>

                            </div>
                            <div class="item hoverstyle">
                                <figure>
                                    <a href="#">
                                        <img src="images/cat_paper.png" alt="">
                                    </a>
                                </figure>
                                <span>กระดาษ</span>

                            </div>
                            <div class="item hoverstyle">
                                <figure>
                                    <a href="#">
                                        <img src="images/cat_book.png" alt="">
                                    </a>
                                </figure>
                                <span>สมุดโน๊ต</span>

                            </div>
                            <div class="item hoverstyle">
                                <figure>
                                    <a href="#">
                                        <img src="images/cat_folder.png" alt="">
                                    </a>
                                </figure>
                                <span>แฟ้ม</span>

                            </div>
                            <div class="item hoverstyle">
                                <figure>
                                    <a href="#">
                                        <img src="images/cat_folder.png" alt="">
                                    </a>
                                </figure>
                                <span>แฟ้ม</span>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="newsindex">
        <div class="container-fluid">
            <div class="wrapper_pad">
                <div class="row mt-5">
                    <div class="col">
                        <div class="topichead">
                            ข่าวสาร & โปรโมชั่น
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col">
                        <div class="news_slide owl-carousel owl-theme">
                            <?php for ($i = 1; $i <= 8; $i++) { ?>
                            <div class="item hoverstyle">
                                <figure>
                                    <a href="#"><img src="images/newspic.png" alt=""></a>
                                </figure>
                                <a href="">
                                    <div class="newscontent">
                                        เครื่องถ่ายเอกสารดิจิตอลขาว-ดำ <br>
                                        Kyocera Ecosys FS6530
                                    </div>
                                </a>
                                <div class="date">
                                    12 สิงหาคม 2565
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php require('inc_footer.php'); ?>
    <script>
        $(document).ready(function () {
            $('.banner_slide').owlCarousel({
                loop: true,
                margin: 20,
                dots: true,
                autoplay: true,
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
            $('.news_slide').owlCarousel({
                loop: true,
                margin: 20,
                dots: false,
                nav: true,
                navText: ['<img src="images/arrow_left.png">', '<img src="images/arrow_right.png">'],
                navClass: ['owl-prev', 'owl-next'],
                autoplay: true,
                autoplayTimeout: 4000,
                autoplayHoverPause: true,
                smartSpeed: 500,
                responsive: {
                    0: {
                        items: 2
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 3
                    }
                }
            })
            $('.category_slide').owlCarousel({
                loop: true,
                margin: 50,
                dots: false,
                nav: true,
                navText: ['<img src="images/arrow_left.png">', '<img src="images/arrow_right.png">'],
                navClass: ['owl-prev', 'owl-next'],
                autoplay: true,
                autoplayTimeout: 4000,
                autoplayHoverPause: true,
                smartSpeed: 500,
                responsive: {
                    0: {
                        items: 2
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 4
                    }
                }
            })

        });
    </script>

</body>

</html>