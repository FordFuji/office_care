<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head><?php require('inc_header.php'); ?>
</head>

<body>
    <?php require('inc_topmenu.php'); ?>

    <section id="productpage">
        <div class="container-fluid">

            <div class="wrapper_pad">
                <div class="row mt-5">
                    <div class="col-lg-3">
                        <?php require('inc_sideproduct_index.php'); ?>
                    </div>
                    <div class="col-lg-9 pt-0 p-5">
                        <div class="row">
                            <div class="col">
                                <div class="groupcategory">
                                    <div class="topichead mt-4 mb-4">
                                        วัสดุสำนักงาน
                                    </div>
                                    <div class="category_slide owl-carousel owl-theme">
                                        <div class="item hoverstyle">
                                            <figure>
                                                <a href="product.php">
                                                    <img src="images/cat_pen.png" alt="">
                                                </a>
                                            </figure>
                                            <span>ปากกา</span>
                                        </div>
                                        <div class="item hoverstyle">
                                            <figure>
                                            <a href="product.php">
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
                                <div class="groupcategory">
                                    <div class="topichead mt-4 mb-4">
                                        ไอทีและอิเล็คทรอนิกซ์
                                    </div>
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
                </div>

            </div>
        </div>
    </section>
    <?php require('inc_footer.php'); ?>
    <script>
        $(document).ready(function () {

            $('.category_slide').owlCarousel({
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
                        items: 4
                    }
                }
            })

        });
    </script>


</body>

</html>