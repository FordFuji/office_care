<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head><?php require('inc_header.php'); ?>
</head>

<body>
    <?php require('inc_topmenu.php'); ?>

    <section id="cartpage">
        <div class="container-fluid g-0 overflow-hidden">

            <div class="symrighttop">
                <img src="images/half_orangeEllipsetwo.png" alt="">
            </div>

            <div class="wrapper_pad">
                <div class="row mt-5 mb-5">
                    <div class="col-lg-8">
                        <div class="topichead">
                            <h1> ตะกร้าสินค้า <span>(2 ชิ้น)</span></h1>
                        </div>
                        <div class="borderbox mt-4">
                            <div class="accordion" id="accordionPanelsStayOpenExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                            aria-controls="panelsStayOpen-collapseOne">
                                            2 ชิ้น
                                        </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="panelsStayOpen-headingOne">
                                        <div class="accordion-body">
                                            <div class="groupcartprd">
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

                                                    <div class="col-lg-6 text-lg-end">
                                                        <div class="price pt-3">
                                                            ฿ 21,500 <br>
                                                            <span>฿ 23,500</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row text-end">
                                                    <div class="col-lg-2 offset-lg-8">
                                                        <a href="#" class="smlink">Remove</a>
                                                        
                                                    </div>
                                                    <div class="col-lg-2">
                                                    <div class="qtyCart">
                                                            <div class="qty_group_cart mb-2">
                                                                <div class="input-group"> <span class="input-group-btn">
                                                                        <button id="qty-minus" type="button"
                                                                            class="btn btn-default btn-number"
                                                                            disabled="disabled" data-type="minus"
                                                                            data-field="quant[1]">
                                                                            <i class="fi fi-rr-minus"></i>
                                                                        </button>
                                                                    </span>
                                                                    <input id="CC-prodDetails-quantity" type="text"
                                                                        name="quant[1]"
                                                                        class="form-control input-number" value="1"
                                                                        min="1" max="100">
                                                                    <span class="input-group-btn">
                                                                        <button id="qty-plus" type="button"
                                                                            class="btn btn-default btn-number"
                                                                            data-type="plus" data-field="quant[1]">
                                                                            <i class="fi fi-rr-plus"></i>
                                                                        </button>
                                                                    </span> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="borderbox mt-4">
                            <div class="topichead">
                                <h3>ที่อยู่จัดส่งสินค้า</h3>
                            </div>
                            <div class="accordion divradio">
                                <div class="md-radio md-radio-inline radiocheck">
                                    <input id="section-1" type="radio" name="accordion-group2" />
                                    <label for="section-1">
                                        <div>
                                            <div class="row">
                                                <div class="col">

                                                    Netthakan Ornnorm

                                                </div>

                                            </div>
                                            <div class="addresscontent">

                                                90/16 Sriayuttaya Wachiraphayaban <br>
                                                Dusit <br>
                                                Bangkok 10300 <br>
                                                0814499488

                                            </div>

                                        </div>
                                    </label>

                                </div>

                                <div class="md-radio md-radio-inline radiocheck">
                                    <input id="section-2" type="radio" name="accordion-group2" />
                                    <label for="section-2">
                                        <div>
                                            <div class="row">
                                                <div class="col">
                                                    + เพิ่มที่อยู่ใหม่
                                                </div>
                                            </div>
                                        </div>
                                    </label>
                                    <section>
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <div class="formdefault mt-4">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <input type="name" class="form-control"
                                                                    placeholder="ชื่อ-นามสกุล">

                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class=" mb-3">
                                                                <input type="tel" class="form-control"
                                                                    placeholder="เบอร์ติดต่อ">

                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="mb-3">
                                                                <input type="address" class="form-control"
                                                                    placeholder="ที่อยู่การจัดส่ง">

                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="input-group mb-3">
                                                                <select class="form-select"
                                                                    aria-label="Default select example">
                                                                    <option selected>จังหวัด</option>
                                                                    <option value="1">One</option>
                                                                    <option value="2">Two</option>
                                                                    <option value="3">Three</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="input-group mb-3">
                                                                <select class="form-select"
                                                                    aria-label="Default select example">
                                                                    <option selected>ตำบล/แขวง</option>
                                                                    <option value="1">One</option>
                                                                    <option value="2">Two</option>
                                                                    <option value="3">Three</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="input-group mb-3">
                                                                <select class="form-select"
                                                                    aria-label="Default select example">
                                                                    <option selected>อำเภอ/เขต</option>
                                                                    <option value="1">One</option>
                                                                    <option value="2">Two</option>
                                                                    <option value="3">Three</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <input type="text" class="form-control"
                                                                    placeholder="รหัสไปรษณีย์">

                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <br>
                                                <button class=" btn btn-primary">บันทึก</button>
                                                <button class="btn btn-cancel">ยกเลิก</button>
                                            </div>
                                        </div>

                                    </section>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="borderbox mb-4">
                            <div class="topichead">
                                <h3>สรุปรายการ</h3>
                            </div>
                            <div class="row">
                                <div class="col-6 col-lg-6">ราคาสินค้า</div>
                                <div class="col-6 col-lg-6 text-end">฿ 21,500</div>
                                <div class="col-6 col-lg-6">ส่วนลด</div>
                                <div class="col-6 col-lg-6 text-end">100</div>
                                <div class="col-6 col-lg-6">ค่าจัดส่ง</div>
                                <div class="col-6 col-lg-6 text-end">0.00</div>
                                <div class="col-6 col-lg-6">ราคารวม</div>
                                <div class="col-6 col-lg-6 text-end"><span class="price">฿ 21,500</span></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="btngroup">
                                    <a href="cart_success.php" class="btn btn-width">ยืนยันสั่งซื้อ</a>
                                    <a href="#" class="btn btn-borderblue"><i class="fi fi-rr-download"></i> ดาวน์โหลด
                                        PDF</a>
                                    <a href="#" class="btn btn-subwidth"  data-width="948" data-height="700"
                                data-fancybox data-src="#invoice" href="javascript:;"><i class="fi fi-rr-document-signed"></i>
                                        ขอใบเสนอราคา</a>
                                        <div style="display: none;" id="invoice">
                            <div class="topichead mb-3">
                                <h1>ขอใบเสนอราคา</h1>
                                <p>ขอบคุณสำหรับความสนใจสินค้าและบริการของเรา 
                                   กรุณากรอกแบบฟอร์มเพื่อขอใบเสนอราคา
                                            </p>
                            </div>
                            <div class="formdefault mt-4">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-floating mb-3">
                                            <input type="name" class="form-control" id="floatingInput"
                                                placeholder="ชื่อบริษัท อื่นๆ">
                                            <label for="floatingInput">ชื่อบริษัท อื่นๆ</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-floating mb-3">
                                            <input type="name" class="form-control" id="floatingInput"
                                                placeholder="ชื่อผู้ติดต่อ">
                                            <label for="floatingInput">ชื่อผู้ติดต่อ</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-floating mb-3">
                                            <input type="tel" class="form-control" id="floatingInput"
                                                placeholder="เบอร์ติดต่อ">
                                            <label for="floatingInput">เบอร์ติดต่อ</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-floating mb-3">
                                            <input type="tel" class="form-control" id="floatingInput"
                                                placeholder="อีเมล">
                                            <label for="floatingInput">อีเมล</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-floating mb-3">
                                            <input type="address" class="form-control" id="floatingInput"
                                                placeholder="ข้อความ">
                                            <label for="floatingInput">ข้อความ</label>
                                        </div>
                                    </div>
                                   

                                </div>
                            </div>

                            <br>
                            <button class=" btn btn-primary" rel="1">ส่งคำขอใบเสนอราคา</button>
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
        //plugin bootstrap minus and plus
        //http://jsfiddle.net/laelitenetwork/puJ6G/
        $('.btn-number').click(function (e) {
            e.preventDefault();
            fieldName = $(this).attr('data-field');
            type = $(this).attr('data-type');
            var input = $("input[name='" + fieldName + "']");
            var currentVal = parseInt(input.val());
            if (!isNaN(currentVal)) {
                if (type == 'minus') {
                    if (currentVal > input.attr('min')) {
                        input.val(currentVal - 1).change();
                    }
                    if (parseInt(input.val()) == input.attr('min')) {
                        $(this).attr('disabled', true);
                    }
                } else if (type == 'plus') {
                    if (currentVal < input.attr('max')) {
                        input.val(currentVal + 1).change();
                    }
                    if (parseInt(input.val()) == input.attr('max')) {
                        $(this).attr('disabled', true);
                    }
                }
            } else {
                input.val(0);
            }
        });
        $('.input-number').change(function () {
            minValue = parseInt($(this).attr('min'));
            maxValue = parseInt($(this).attr('max'));
            valueCurrent = parseInt($(this).val());
            name = $(this).attr('name');
            if (valueCurrent >= minValue) {
                $(".btn-number[data-type='minus'][data-field='" + name + "']").removeAttr('disabled')
            } else {
                alert('Sorry, the minimum value was reached');
                $(this).val($(this).data('oldValue'));
            }
            if (valueCurrent <= maxValue) {
                $(".btn-number[data-type='plus'][data-field='" + name + "']").removeAttr('disabled')
            } else {
                alert('Sorry, the maximum value was reached');
                $(this).val($(this).data('oldValue'));
            }
        });
    </script>
</body>

</html>