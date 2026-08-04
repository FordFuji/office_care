<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head><?php require('inc_header.php'); ?>
</head>

<body>
    <?php require('inc_topmenu.php'); ?>

    <section id="productpage" class="wrapperPages">
        <div class="symbb">
            <img src="images/half_orangeEllipse.png" alt="">
        </div>
        <div class="container-fluid">
            <div class="wrapper_pad">
                <div class="row mt-5">
                    <div class="col">
                        <div class="pageontop">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">วัสดุสำนักงาน</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">กระดาษโน๊ต</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>

                <div class="d-none d-sm-none d-md-none d-lg-block d-xl-block">
                    <div class="groupfilter">
                        <div class="row mt-4">
                            <div class="col-lg-8 col-xl-9">
                                <div class="row">
                                    <div class="col-lg-3 col-xl-2">
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>ราคา</option>
                                            <option value="1">10-500</option>
                                            <option value="2">500-2000</option>
                                            <option value="3">2000-5000</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-3 col-xl-2">
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>แบรนด์</option>
                                            <option value="1">Brother</option>
                                            <option value="2">Double A</option>
                                            <option value="3">Ricoh</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-3 col-xl-2">
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>หมวดหมู่</option>
                                            <option value="1">วัสดุสำนักงาน</option>
                                            <option value="2">ไอทีและอิเล็คทรอนิกซ์</option>
                                            <option value="3">เฟอร์นิเจอร์สำนักงาน</option>
                                            <option value="4">วัสดุงานครัว</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xl-3 text-end">
                                <div class="sortfilter">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>เรียงตาม</option>
                                        <option value="1">ราคาต่ำสุด-สูงสุด</option>
                                        <option value="2">ราคาสูงสุด-ต่ำสุด</option>
                                        <option value="3">ใหม่ล่าสุด</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-block d-sm-block d-md-block d-lg-none d-xl-none">
                    <div class="sortfilterMB">
                        <div class="row">
                            <div class="col-12 mb-3">
                                <a class="listfilter" data-bs-toggle="modal" data-bs-target="#filters">
                                    ตัวกรอง <span><i class="fi fi-rr-angle-small-down"></i></span>
                                </a>
                                <div class="modal fade" id="filters" tabindex="-1" aria-labelledby="exampleModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog  modal-fullscreen-lg-down">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">ตัวกรอง</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h5>ตัวกรองที่เลือก</h5>
                                                <div class="filterselect">
                                                    <li><a href="#">กระดาษโน๊ต <span><i
                                                                    class="fi fi-rr-cross-small"></i></span></a></li>
                                                    <li><a href="#">฿0-฿500 <span><i
                                                                    class="fi fi-rr-cross-small"></i></span></a></li>
                                                </div>
                                                <section id="category_menu_sec">
                                                    <div class="accordion" id="accordionPanelsStayOpenExample">
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                                                <button class="accordion-button" type="button"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#panelsStayOpen-collapseOne"
                                                                    aria-expanded="true"
                                                                    aria-controls="panelsStayOpen-collapseOne">
                                                                    ผลิตภัณฑ์กระดาษ
                                                                </button>
                                                            </h2>
                                                            <div id="panelsStayOpen-collapseOne"
                                                                class="accordion-collapse collapse show"
                                                                aria-labelledby="panelsStayOpen-headingOne">
                                                                <div class="accordion-body">
                                                                    <ul class="menu">
                                                                        <li><label class="check-container">กระดาษการ์ด
                                                                                <span class="count">(35)</span>
                                                                                <input type="checkbox">
                                                                                <span class="checkmark"></span>
                                                                            </label></li>
                                                                        <li><label
                                                                                class="check-container">กระดาษความร้อน
                                                                                สลิปกระดาษ <span
                                                                                    class="count">(35)</span>
                                                                                <input type="checkbox">
                                                                                <span class="checkmark"></span>
                                                                            </label></li>
                                                                        <li><label class="check-container">กระดาษคาร์บอน
                                                                                <span class="count">(35)</span>
                                                                                <input type="checkbox">
                                                                                <span class="checkmark"></span>
                                                                            </label></li>
                                                                        <li><label
                                                                                class="check-container">กระดาษต่อเนื่อง
                                                                                <span class="count">(35)</span>
                                                                                <input type="checkbox">
                                                                                <span class="checkmark"></span>
                                                                            </label></li>
                                                                        <li><label
                                                                                class="check-container">กระดาษถ่ายเอกสาร
                                                                                <span class="count">(35)</span>
                                                                                <input type="checkbox">
                                                                                <span class="checkmark"></span>
                                                                            </label></li>
                                                                        <li><label
                                                                                class="check-container">กระดาษต่อเนื่อง
                                                                                <span class="count">(35)</span>
                                                                                <input type="checkbox">
                                                                                <span class="checkmark"></span>
                                                                            </label></li>
                                                                        <li><label class="check-container">กระดาษโน้ต
                                                                                <span class="count">(35)</span>
                                                                                <input type="checkbox">
                                                                                <span class="checkmark"></span>
                                                                            </label></li>

                                                                        <li><label
                                                                                class="check-container">กระดาษอิงค์เจ็ท
                                                                                <span class="count">(35)</span>
                                                                                <input type="checkbox">
                                                                                <span class="checkmark"></span>
                                                                            </label></li>

                                                                        <li><label class="check-container">กระดาษเลเซอร์
                                                                                <span class="count">(35)</span>
                                                                                <input type="checkbox">
                                                                                <span class="checkmark"></span>
                                                                            </label></li>
                                                                        <li><label class="check-container">แผ่นพลาสติกใส
                                                                                <span class="count">(35)</span>
                                                                                <input type="checkbox">
                                                                                <span class="checkmark"></span>
                                                                            </label></li>
                                                                        <li><label class="check-container">อินเด็กซ์
                                                                                <span class="count">(35)</span>
                                                                                <input type="checkbox">
                                                                                <span class="checkmark"></span>
                                                                            </label></li>



                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                                                <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#panelsStayOpen-collapseTwo"
                                                                    aria-expanded="false"
                                                                    aria-controls="panelsStayOpen-collapseTwo">
                                                                    ราคา
                                                                </button>
                                                            </h2>
                                                            <div id="panelsStayOpen-collapseTwo"
                                                                class="accordion-collapse collapse"
                                                                aria-labelledby="panelsStayOpen-headingTwo">
                                                                <div class="accordion-body">
                                                                    <div class="price-range-slider">

                                                                        <div id="slider-range" class="range-bar"></div>
                                                                        <p class="range-value">
                                                                            <input type="text" id="amount" readonly>
                                                                        </p>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header"
                                                                id="panelsStayOpen-headingThree">
                                                                <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#panelsStayOpen-collapseThree"
                                                                    aria-expanded="false"
                                                                    aria-controls="panelsStayOpen-collapseThree">
                                                                    แบรนด์
                                                                </button>
                                                            </h2>
                                                            <div id="panelsStayOpen-collapseThree"
                                                                class="accordion-collapse collapse"
                                                                aria-labelledby="panelsStayOpen-headingThree">
                                                                <div class="accordion-body">
                                                                    <ul class="menu">
                                                                        <li><label class="check-container">Ricoh <span
                                                                                    class="count">(35)</span>
                                                                                <input type="checkbox">
                                                                                <span class="checkmark"></span>
                                                                            </label></li>
                                                                        <li><label class="check-container">Brother <span
                                                                                    class="count">(35)</span>
                                                                                <input type="checkbox">
                                                                                <span class="checkmark"></span>
                                                                            </label></li>
                                                                        <li><label class="check-container">Sharp <span
                                                                                    class="count">(35)</span>
                                                                                <input type="checkbox">
                                                                                <span class="checkmark"></span>
                                                                            </label></li>
                                                                        <li><label class="check-container">EPSON <span
                                                                                    class="count">(35)</span>
                                                                                <input type="checkbox">
                                                                                <span class="checkmark"></span>
                                                                            </label></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-width">กรอง</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <a class="listfilter" data-bs-toggle="modal" data-bs-target="#category">
                                    หมวดหมู่ <span><i class="fi fi-rr-angle-small-down"></i></span>
                                </a>
                                <div class="modal fade" id="category" tabindex="-1" aria-labelledby="exampleModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog  modal-fullscreen-lg-down">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">หมวดหมู่</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body secmenu">
                                                <ul class="menu">

                                                    <li><a href="#">วัสดุสำนักงาน</a></li>
                                                    <li><a href="#">ไอทีและอิเล็คทรอนิกซ์<</a> </li> <li><a
                                                                    href="#">เฟอร์นิเจอร์สำนักงาน</a></li>
                                                    <li><a href="#">วัสดุงานครัว</a></li>

                                                </ul>
                                            </div>
                                            <div class="modal-footer">

                                                <button type="button" class="btn btn-width">กรอง</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <a class="listfilter" data-bs-toggle="modal" data-bs-target="#sort">
                                    เรียงตาม <span><i class="fi fi-rr-angle-small-down"></i></span>
                                </a>
                                <div class="modal fade" id="sort" tabindex="-1" aria-labelledby="exampleModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog  modal-fullscreen-lg-down">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">เรียงตาม</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body secmenu">
                                                <ul class="menu">
                                                    <li><label class="check-container">ราคาต่ำสุด-สูงสุด
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label></li>
                                                    <li><label class="check-container">ราคาสูงสุด-ต่ำสุด
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label></li>
                                                    <li><label class="check-container">ใหม่ล่าสุด
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label></li>
                                                </ul>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-width">กรอง</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col">
                        <div class="listtag owl-carousel owl-theme">
                            <div class="item">
                                <a href="#">กระดาษโน้ต</a>
                            </div>
                            <div class="item"><a href="#">ปากกาสี</a></div>
                            <div class="item"><a href="#">เครื่องปริ้น</a></div>
                            <div class="item"><a href="#">ดินสอกด</a></div>
                            <div class="item"><a href="#">กระดาษถ่ายเอกสาร</a></div>
                            <div class="item"><a href="#">แฟ้ม</a></div>
                            <div class="item"><a href="#">สมุดโน้ต</a></div>
                            <div class="item"><a href="#">ปากกาไฮไลท์</a></div>
                            <div class="item"><a href="#">เครื่องคิดเลข</a></div>
                            <div class="item"><a href="#">หมึกเติม</a></div> 
                            <div class="item"><a href="#">ปากกาไฮไลท์</a></div>
                            <div class="item"><a href="#">เครื่องคิดเลข</a></div>
                            <div class="item"><a href="#">หมึกเติม</a></div>
                        </div>
                    </div>
                </div>
                <div class="row mt-5 mb-5">
                    <div class="col-lg-3">
                        <div class="sticky-top">
                            <?php require('inc_sideproduct_index_sub.php'); ?>
                        </div>

                    </div>
                    <div class="col-lg-9 pt-0 p-3">
                        <div class="row">
                            <div class="col">
                                <div class="topichead">
                                ผลิตภัณฑ์กระดาษ
                                    <div>แสดงสินค้า 1-48 จาก 2296</div>
                                </div>
                            </div>
                        </div>
                        <!-- product pc -->
                        <div class="row mt-3">
                            <?php for ($i = 1; $i <= 8; $i++) { ?>
                            <div class="col-12 col-md-6 col-lg-3">
                                <div class="productgroup">
                                    <div class="productpic">
                                        <a href="product_detail.php"><img src="images/product1.png" alt="">
                                        </a>
                                        <a href="#" class="wishlist"><i class="fi fi-rr-heart"></i></a>
                                    </div>

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
                                </div>
                            </div>
                            <?php } ?>
                        </div>

                        <div class="row mb-5 mt-5">
                            <div class="col">
                                <div class="pagenumber">
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination">
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Previous">
                                                    <i class="bi bi-chevron-left"></i>
                                                </a>
                                            </li>
                                            <li class="page-item  active"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Next">
                                                    <i class="bi bi-chevron-right"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
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

            $('.listtag').owlCarousel({
                loop: false,
                margin: 10,
                dots: false,
                nav: true,
                navText: ['<img src="images/arrow_left.png">', '<img src="images/arrow_right.png">'],
                navClass: ['owl-prev', 'owl-next'],
                autoplay: false,

                smartSpeed: 500,
                responsive: {
                    0: {
                        items: 3
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 5
                    },
                    1300: {
                        items: 10
                    }

                }
            })

        });
    </script>


</body>

</html>