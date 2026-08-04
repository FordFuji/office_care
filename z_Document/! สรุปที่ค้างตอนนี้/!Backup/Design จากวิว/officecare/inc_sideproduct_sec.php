<div class="d-none d-sm-none d-md-none d-lg-block d-xl-block">
    <section id="category_menu_sec">
        <h2>ตัวกรองที่เลือก</h2>
        <div class="filterselect">
            <li><a href="#">กระดาษโน๊ต <span><i class="fi fi-rr-cross-small"></i></span></a></li>
            <li><a href="#">฿0-฿500 <span><i class="fi fi-rr-cross-small"></i></span></a></li>
        </div>

        <div class="accordion" id="accordionPanelsStayOpenExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                        aria-controls="panelsStayOpen-collapseOne">
                        ผลิตภัณฑ์กระดาษ
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                    aria-labelledby="panelsStayOpen-headingOne">
                    <div class="accordion-body">
                        <ul class="menulsact">
                            <li> <i class="fi fi-sr-checkbox"></i> กระดาษการ์ด <span class="count">(35)</span> </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                        aria-controls="panelsStayOpen-collapseTwo">
                        ราคา
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
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
                <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                        aria-controls="panelsStayOpen-collapseThree">
                        สี
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                    aria-labelledby="panelsStayOpen-headingThree">
                    <div class="accordion-body">
                        <ul class="menucolor">
                            <li>
                                <a href="#">  <span class="cl01 circlesty"></span>    
                           หลากสี <span class="count">(35)</span></a>
                          </li>
                            <li>
                                <a href="#">  <span class="cl02 circlesty"></span>    
                         ขาว<span class="count">(35)</span></a>
                          </li>
                            <li>
                                <a href="#">  <span class="cl03 circlesty"></span>    
                            ดำ <span class="count">(35)</span></a>
                          </li>
                          
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                        aria-controls="panelsStayOpen-collapseThree">
                        แบรนด์
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                    aria-labelledby="panelsStayOpen-headingThree">
                    <div class="accordion-body">
                        <ul class="menu">
                            <li><label class="check-container">Ricoh <span class="count">(35)</span>
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label></li>
                            <li><label class="check-container">Brother <span class="count">(35)</span>
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label></li>
                            <li><label class="check-container">Sharp <span class="count">(35)</span>
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label></li>
                            <li><label class="check-container">EPSON <span class="count">(35)</span>
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label></li>
                            <div id="morebrands" class="collapse">
                                <li><label class="check-container">Ricoh <span class="count">(35)</span>
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label></li>
                                <li><label class="check-container">Brother <span class="count">(35)</span>
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label></li>
                                <li><label class="check-container">Sharp <span class="count">(35)</span>
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label></li>
                                <li><label class="check-container">EPSON <span class="count">(35)</span>
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label></li>
                            </div>

                            <a data-bs-toggle="collapse" data-bs-target="#morebrands" class="morelist">+ ดูเพิ่มเติม</a>

                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>



<script>
    //-----JS for Price Range slider-----

    $(function () {
        $("#slider-range").slider({
            range: true,
            min: 130,
            max: 500,
            values: [130, 250],
            slide: function (event, ui) {
                $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
            }
        });
        $("#amount").val("$" + $("#slider-range").slider("values", 0) +
            " - $" + $("#slider-range").slider("values", 1));
    });
</script>