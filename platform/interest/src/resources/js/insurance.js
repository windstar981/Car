$(document).ready(function () {


    let optionInsurance = 1;

    function getHtmlAddStage() {
        let html = `
            <div class="wrap-selects d-flex justify-content-between insurance-payment-period del-insurance w-100">
                <div class="select-from d-flex justify-content-between">
                    <div class="mt-3">
                        <select class="select-number tab-must">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                        </select>
                    </div>

                    <div class="mt-3">
                        <select class="select-number tab-must">
                            <option value="2022">2022</option>
                            <option value="2021">2021</option>
                            <option value="2020">2020</option>
                            <option value="2019">2019</option>
                            <option value="2018">2018</option>
                            <option value="2017">2017</option>
                            <option value="2016">2016</option>
                            <option value="2015">2015</option>
                            <option value="2014">2014</option>
                            <option value="2013">2013</option>
                            <option value="2012">2012</option>
                            <option value="2011">2011</option>
                            <option value="2010">2010</option>
                            <option value="2009">2009</option>
                            <option value="2008">2008</option>
                            <option value="2007">2007</option>
                            <option value="2006">2006</option>
                            <option value="2005">2005</option>
                            <option value="2004">2004</option>
                            <option value="2003">2003</option>
                            <option value="2002">2002</option>
                            <option value="2001">2001</option>
                            <option value="2000">2000</option>
                            <option value="1999">1999</option>
                            <option value="1998">1998</option>
                            <option value="1997">1997</option>
                            <option value="1996">1996</option>
                            <option value="1995">1995</option>
                            <option value="1994">1994</option>
                        </select>
                    </div>
                </div>
                <span class="title-to">Đến</span>
                <div class="select-to d-flex justify-content-between">
                    <div class="mt-3">
                        <select class="select-number tab-must">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                        </select>
                    </div>

                    <div class="mt-3 ">
                        <select class="select-number tab-must">
                            <option value="2022">2022</option>
                            <option value="2021">2021</option>
                            <option value="2020">2020</option>
                            <option value="2019">2019</option>
                            <option value="2018">2018</option>
                            <option value="2017">2017</option>
                            <option value="2016">2016</option>
                            <option value="2015">2015</option>
                            <option value="2014">2014</option>
                            <option value="2013">2013</option>
                            <option value="2012">2012</option>
                            <option value="2011">2011</option>
                            <option value="2010">2010</option>
                            <option value="2009">2009</option>
                            <option value="2008">2008</option>
                            <option value="2007">2007</option>
                            <option value="2006">2006</option>
                            <option value="2005">2005</option>
                            <option value="2004">2004</option>
                            <option value="2003">2003</option>
                            <option value="2002">2002</option>
                            <option value="2001">2001</option>
                            <option value="2000">2000</option>
                            <option value="1999">1999</option>
                            <option value="1998">1998</option>
                            <option value="1997">1997</option>
                            <option value="1996">1996</option>
                            <option value="1995">1995</option>
                            <option value="1994">1994</option>
                        </select>
                    </div>
                </div>

                <div class="input-number mt-3 must-pay">
                    <input class="money input-must" placeholder="VD: 5,000,000">
                    <span class="currency">(VNĐ)</span>
                    <i class="fa-solid fa-trash position-absolute delete-this-dom" style="right: 0; margin-top:12px; cursor: pointer"></i>
                </div>
                    </div>
        `;
        return html;
    }


    function getHtmlMaternity() {
        let html = `
            <div class="wrap-selects d-flex justify-content-between maternity-period  del-insurance w-100">
                <div class="select-from d-flex justify-content-between">
                    <div class="mt-3">
                        <select class="select-number tab-must">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                        </select>
                    </div>

                    <div class="mt-3">
                        <select class="select-number tab-must">
                            <option value="2022">2022</option>
                            <option value="2021">2021</option>
                            <option value="2020">2020</option>
                            <option value="2019">2019</option>
                            <option value="2018">2018</option>
                            <option value="2017">2017</option>
                            <option value="2016">2016</option>
                            <option value="2015">2015</option>
                            <option value="2014">2014</option>
                            <option value="2013">2013</option>
                            <option value="2012">2012</option>
                            <option value="2011">2011</option>
                            <option value="2010">2010</option>
                            <option value="2009">2009</option>
                            <option value="2008">2008</option>
                            <option value="2007">2007</option>
                            <option value="2006">2006</option>
                            <option value="2005">2005</option>
                            <option value="2004">2004</option>
                            <option value="2003">2003</option>
                            <option value="2002">2002</option>
                            <option value="2001">2001</option>
                            <option value="2000">2000</option>
                            <option value="1999">1999</option>
                            <option value="1998">1998</option>
                            <option value="1997">1997</option>
                            <option value="1996">1996</option>
                            <option value="1995">1995</option>
                            <option value="1994">1994</option>
                        </select>
                    </div>
                </div>
                <span class="title-to">Đến</span>
                <div class="select-to d-flex justify-content-between">
                    <div class="mt-3">
                        <select class="select-number tab-must">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                        </select>
                    </div>

                    <div class="mt-3 ">
                        <select class="select-number tab-must">
                            <option value="2022">2022</option>
                            <option value="2021">2021</option>
                            <option value="2020">2020</option>
                            <option value="2019">2019</option>
                            <option value="2018">2018</option>
                            <option value="2017">2017</option>
                            <option value="2016">2016</option>
                            <option value="2015">2015</option>
                            <option value="2014">2014</option>
                            <option value="2013">2013</option>
                            <option value="2012">2012</option>
                            <option value="2011">2011</option>
                            <option value="2010">2010</option>
                            <option value="2009">2009</option>
                            <option value="2008">2008</option>
                            <option value="2007">2007</option>
                            <option value="2006">2006</option>
                            <option value="2005">2005</option>
                            <option value="2004">2004</option>
                            <option value="2003">2003</option>
                            <option value="2002">2002</option>
                            <option value="2001">2001</option>
                            <option value="2000">2000</option>
                            <option value="1999">1999</option>
                            <option value="1998">1998</option>
                            <option value="1997">1997</option>
                            <option value="1996">1996</option>
                            <option value="1995">1995</option>
                            <option value="1994">1994</option>
                        </select>
                    </div>
                </div>

            <div class="input-number mt-3 maternity-period">
                <input class="money maternity input-must"  placeholder="(Giai đoạn thai sản)" disabled="">
                <i class="fa-solid fa-trash position-absolute delete-this-dom" style="right: 0; margin-top:12px; cursor: pointer"></i>
            </div>

                    </div>
        `;
        return html;
    }

    function getHtmlTabVoluntary() {
        let html = `<div class="wrap-selects d-flex justify-content-between main-voluntary-social-insurance del-insurance">
                        <div class="select-from d-flex justify-content-between del-voluntary-social-insurance" style="width: 27%;">
                            <div class="mt-3">
                                <select class="select-number tab-voluntary" style=" width: 95px;">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                </select>
                            </div>

                            <div class="mt-3">
                                <select class="select-number tab-voluntary" style=" width: 95px;">
                                    <option value="2022">2022</option>
                                    <option value="2021">2021</option>
                                    <option value="2020">2020</option>
                                    <option value="2019">2019</option>
                                    <option value="2018">2018</option>
                                    <option value="2017">2017</option>
                                    <option value="2016">2016</option>
                                    <option value="2015">2015</option>
                                    <option value="2014">2014</option>
                                    <option value="2013">2013</option>
                                    <option value="2012">2012</option>
                                    <option value="2011">2011</option>
                                    <option value="2010">2010</option>
                                    <option value="2009">2009</option>
                                    <option value="2008">2008</option>
                                    <option value="2007">2007</option>
                                    <option value="2006">2006</option>
                                    <option value="2005">2005</option>
                                    <option value="2004">2004</option>
                                    <option value="2003">2003</option>
                                    <option value="2002">2002</option>
                                    <option value="2001">2001</option>
                                    <option value="2000">2000</option>
                                    <option value="1999">1999</option>
                                    <option value="1998">1998</option>
                                    <option value="1997">1997</option>
                                    <option value="1996">1996</option>
                                    <option value="1995">1995</option>
                                    <option value="1994">1994</option>
                                </select>
                            </div>
                        </div>
                        <span class="title-to" style="margin-left: 5px; margin-right: 5px;">Đến</span>
                        <div class="select-to d-flex justify-content-between" style="width: 27%;">
                            <div class="mt-3">
                                <select class="select-number tab-voluntary" style=" width: 95px;">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                </select>
                            </div>

                            <div class="mt-3 ">
                                <select class="select-number tab-voluntary" style=" width: 95px;">
                                    <option value="2022">2022</option>
                                    <option value="2021">2021</option>
                                    <option value="2020">2020</option>
                                    <option value="2019">2019</option>
                                    <option value="2018">2018</option>
                                    <option value="2017">2017</option>
                                    <option value="2016">2016</option>
                                    <option value="2015">2015</option>
                                    <option value="2014">2014</option>
                                    <option value="2013">2013</option>
                                    <option value="2012">2012</option>
                                    <option value="2011">2011</option>
                                    <option value="2010">2010</option>
                                    <option value="2009">2009</option>
                                    <option value="2008">2008</option>
                                    <option value="2007">2007</option>
                                    <option value="2006">2006</option>
                                    <option value="2005">2005</option>
                                    <option value="2004">2004</option>
                                    <option value="2003">2003</option>
                                    <option value="2002">2002</option>
                                    <option value="2001">2001</option>
                                    <option value="2000">2000</option>
                                    <option value="1999">1999</option>
                                    <option value="1998">1998</option>
                                    <option value="1997">1997</option>
                                    <option value="1996">1996</option>
                                    <option value="1995">1995</option>
                                    <option value="1994">1994</option>
                                </select>
                            </div>
                        </div>

                        <div class="input-number mt-3" style="margin-left: 10px;">
                            <input class="money input-voluntary" placeholder="VD: 5,000,000">
                            <span class="currency" style="right:10px;">(VNĐ)</span>
                        </div>
                        <div class="input-number mt-3">
                            <select class="select-number  tab-voluntary" style="width: 160px">
                                <option value="poor">Hộ nghèo</option>
                                <option value="near-poor">Hộ cận nghèo</option>
                                <option value="other">Đối tượng khác</option>
                            </select>
                            <i class="fa-solid fa-trash position-absolute delete-this-dom" style="right: 0; margin-top:12px; cursor: pointer"></i>
                        </div>

                    </div>`;
        return html;
    }

    function getHtmlMixAddStage() {
        let html = `
            <div class="w-100 d-flex justify-content-between del-insurance">
                        <div class="select-from d-flex justify-content-between" style="width: 27%;">
                            <div class="mt-3">
                                <select class="select-number tab-mix" style=" width: 95px;">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                </select>
                            </div>

                            <div class="mt-3">
                                <select class="select-number tab-mix" style=" width: 95px;">
                                    <option value="2022">2022</option>
                                    <option value="2021">2021</option>
                                    <option value="2020">2020</option>
                                    <option value="2019">2019</option>
                                    <option value="2018">2018</option>
                                    <option value="2017">2017</option>
                                    <option value="2016">2016</option>
                                    <option value="2015">2015</option>
                                    <option value="2014">2014</option>
                                    <option value="2013">2013</option>
                                    <option value="2012">2012</option>
                                    <option value="2011">2011</option>
                                    <option value="2010">2010</option>
                                    <option value="2009">2009</option>
                                    <option value="2008">2008</option>
                                    <option value="2007">2007</option>
                                    <option value="2006">2006</option>
                                    <option value="2005">2005</option>
                                    <option value="2004">2004</option>
                                    <option value="2003">2003</option>
                                    <option value="2002">2002</option>
                                    <option value="2001">2001</option>
                                    <option value="2000">2000</option>
                                    <option value="1999">1999</option>
                                    <option value="1998">1998</option>
                                    <option value="1997">1997</option>
                                    <option value="1996">1996</option>
                                    <option value="1995">1995</option>
                                    <option value="1994">1994</option>
                                </select>
                            </div>
                        </div>
                        <span class="title-to" style="margin-left: 5px; margin-right: 5px;">Đến</span>
                        <div class="select-to d-flex justify-content-between" style="width: 27%;">
                            <div class="mt-3">
                                <select class="select-number tab-mix" style=" width: 95px;">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                </select>
                            </div>

                            <div class="mt-3 ">
                                <select class="select-number tab-mix" style=" width: 95px;">
                                    <option value="2022">2022</option>
                                    <option value="2021">2021</option>
                                    <option value="2020">2020</option>
                                    <option value="2019">2019</option>
                                    <option value="2018">2018</option>
                                    <option value="2017">2017</option>
                                    <option value="2016">2016</option>
                                    <option value="2015">2015</option>
                                    <option value="2014">2014</option>
                                    <option value="2013">2013</option>
                                    <option value="2012">2012</option>
                                    <option value="2011">2011</option>
                                    <option value="2010">2010</option>
                                    <option value="2009">2009</option>
                                    <option value="2008">2008</option>
                                    <option value="2007">2007</option>
                                    <option value="2006">2006</option>
                                    <option value="2005">2005</option>
                                    <option value="2004">2004</option>
                                    <option value="2003">2003</option>
                                    <option value="2002">2002</option>
                                    <option value="2001">2001</option>
                                    <option value="2000">2000</option>
                                    <option value="1999">1999</option>
                                    <option value="1998">1998</option>
                                    <option value="1997">1997</option>
                                    <option value="1996">1996</option>
                                    <option value="1995">1995</option>
                                    <option value="1994">1994</option>
                                </select>
                            </div>
                        </div>

                        <div class="input-number mt-3" style="margin-left: 10px;">
                            <input class="money input-mix" placeholder="VD: 5,000,000">
                            <span class="currency" style="right:10px;">(VNĐ)</span>
                        </div>
                        <div class="input-number mt-3">
                            <select class="select-number tab-mix d-none" style="width: 160px">
                                <option value="must" selected></option>
                            </select>
                            <i class="fa-solid fa-trash position-absolute delete-this-dom" style="right: 0; margin-top:12px; cursor: pointer"></i>
                        </div>
                    </div>
        `
        return html;
    }

    function getHtmlMixAddVoluntary() {
        let html = `
            <div class="w-100 d-flex justify-content-between del-insurance">
                        <div class="select-from d-flex justify-content-between" style="width: 27%;">
                            <div class="mt-3">
                                <select class="select-number tab-mix" style=" width: 95px;">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                </select>
                            </div>

                            <div class="mt-3">
                                <select class="select-number tab-mix" style=" width: 95px;">
                                    <option value="2022">2022</option>
                                    <option value="2021">2021</option>
                                    <option value="2020">2020</option>
                                    <option value="2019">2019</option>
                                    <option value="2018">2018</option>
                                    <option value="2017">2017</option>
                                    <option value="2016">2016</option>
                                    <option value="2015">2015</option>
                                    <option value="2014">2014</option>
                                    <option value="2013">2013</option>
                                    <option value="2012">2012</option>
                                    <option value="2011">2011</option>
                                    <option value="2010">2010</option>
                                    <option value="2009">2009</option>
                                    <option value="2008">2008</option>
                                    <option value="2007">2007</option>
                                    <option value="2006">2006</option>
                                    <option value="2005">2005</option>
                                    <option value="2004">2004</option>
                                    <option value="2003">2003</option>
                                    <option value="2002">2002</option>
                                    <option value="2001">2001</option>
                                    <option value="2000">2000</option>
                                    <option value="1999">1999</option>
                                    <option value="1998">1998</option>
                                    <option value="1997">1997</option>
                                    <option value="1996">1996</option>
                                    <option value="1995">1995</option>
                                    <option value="1994">1994</option>
                                </select>
                            </div>
                        </div>
                        <span class="title-to" style="margin-left: 5px; margin-right: 5px;">Đến</span>
                        <div class="select-to d-flex justify-content-between" style="width: 27%;">
                            <div class="mt-3">
                                <select class="select-number tab-mix" style=" width: 95px;">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                </select>
                            </div>

                            <div class="mt-3 ">
                                <select class="select-number tab-mix" style=" width: 95px;">
                                    <option value="2022">2022</option>
                                    <option value="2021">2021</option>
                                    <option value="2020">2020</option>
                                    <option value="2019">2019</option>
                                    <option value="2018">2018</option>
                                    <option value="2017">2017</option>
                                    <option value="2016">2016</option>
                                    <option value="2015">2015</option>
                                    <option value="2014">2014</option>
                                    <option value="2013">2013</option>
                                    <option value="2012">2012</option>
                                    <option value="2011">2011</option>
                                    <option value="2010">2010</option>
                                    <option value="2009">2009</option>
                                    <option value="2008">2008</option>
                                    <option value="2007">2007</option>
                                    <option value="2006">2006</option>
                                    <option value="2005">2005</option>
                                    <option value="2004">2004</option>
                                    <option value="2003">2003</option>
                                    <option value="2002">2002</option>
                                    <option value="2001">2001</option>
                                    <option value="2000">2000</option>
                                    <option value="1999">1999</option>
                                    <option value="1998">1998</option>
                                    <option value="1997">1997</option>
                                    <option value="1996">1996</option>
                                    <option value="1995">1995</option>
                                    <option value="1994">1994</option>
                                </select>
                            </div>
                        </div>

                        <div class="input-number mt-3" style="margin-left: 10px;">
                            <input class="money input-mix" placeholder="VD: 5,000,000">
                            <span class="currency" style="right:10px;">(VNĐ)</span>
                        </div>
                        <div class="input-number mt-3">
                            <select class="select-number tab-mix" style="width: 160px">
                                <option value="poor">Hộ nghèo</option>
                                <option value="near-poor">Hộ cận nghèo</option>
                                <option value="other">Đối tượng khác</option>
                            </select>
                            <i class="fa-solid fa-trash position-absolute delete-this-dom" style="right: 0; margin-top:12px; cursor: pointer"></i>
                        </div>
                    </div>
        `
        return html;
    }

    function getHtmlMixAddMaternity() {
        let html = `
            <div class="w-100 d-flex justify-content-between del-insurance">

                        <div class="select-from d-flex justify-content-between" style="width: 27%;">
                            <div class="mt-3">

                                <select class="select-number tab-mix" style=" width: 95px;">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                </select>
                            </div>

                            <div class="mt-3">
                                <select class="select-number tab-mix" style=" width: 95px;">
                                    <option value="2022">2022</option>
                                    <option value="2021">2021</option>
                                    <option value="2020">2020</option>
                                    <option value="2019">2019</option>
                                    <option value="2018">2018</option>
                                    <option value="2017">2017</option>
                                    <option value="2016">2016</option>
                                    <option value="2015">2015</option>
                                    <option value="2014">2014</option>
                                    <option value="2013">2013</option>
                                    <option value="2012">2012</option>
                                    <option value="2011">2011</option>
                                    <option value="2010">2010</option>
                                    <option value="2009">2009</option>
                                    <option value="2008">2008</option>
                                    <option value="2007">2007</option>
                                    <option value="2006">2006</option>
                                    <option value="2005">2005</option>
                                    <option value="2004">2004</option>
                                    <option value="2003">2003</option>
                                    <option value="2002">2002</option>
                                    <option value="2001">2001</option>
                                    <option value="2000">2000</option>
                                    <option value="1999">1999</option>
                                    <option value="1998">1998</option>
                                    <option value="1997">1997</option>
                                    <option value="1996">1996</option>
                                    <option value="1995">1995</option>
                                    <option value="1994">1994</option>
                                </select>
                            </div>
                        </div>
                        <span class="title-to" style="margin-left: 5px; margin-right: 5px;">Đến</span>
                        <div class="select-to d-flex justify-content-between" style="width: 27%;">
                            <div class="mt-3">
                                <select class="select-number tab-mix" style=" width: 95px;">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                </select>
                            </div>

                            <div class="mt-3 ">
                                <select class="select-number tab-mix" style=" width: 95px;">
                                    <option value="2022">2022</option>
                                    <option value="2021">2021</option>
                                    <option value="2020">2020</option>
                                    <option value="2019">2019</option>
                                    <option value="2018">2018</option>
                                    <option value="2017">2017</option>
                                    <option value="2016">2016</option>
                                    <option value="2015">2015</option>
                                    <option value="2014">2014</option>
                                    <option value="2013">2013</option>
                                    <option value="2012">2012</option>
                                    <option value="2011">2011</option>
                                    <option value="2010">2010</option>
                                    <option value="2009">2009</option>
                                    <option value="2008">2008</option>
                                    <option value="2007">2007</option>
                                    <option value="2006">2006</option>
                                    <option value="2005">2005</option>
                                    <option value="2004">2004</option>
                                    <option value="2003">2003</option>
                                    <option value="2002">2002</option>
                                    <option value="2001">2001</option>
                                    <option value="2000">2000</option>
                                    <option value="1999">1999</option>
                                    <option value="1998">1998</option>
                                    <option value="1997">1997</option>
                                    <option value="1996">1996</option>
                                    <option value="1995">1995</option>
                                    <option value="1994">1994</option>
                                </select>
                            </div>
                        </div>

                        <div class="input-number mt-3" style="margin-left: 10px;">
                            <select class="select-number tab-mix d-none">
                                <option value="maternity" selected></option>
                            </select>
                            <input class="money maternity input-mix" placeholder="(Giai đoạn thai sản)" disabled="">
                        </div>
                        <div class="input-number mt-3">

                            <i class="fa-solid fa-trash position-absolute delete-this-dom" style="right: 0; margin-top:12px; cursor: pointer"></i>
                        </div>
                    </div>
        `
        return html;
    }

    $('.nav-custom').click(function () {
        $('.result').addClass('d-none');
        if ($(this).hasClass('tab-must')) {
            optionInsurance = 1;
            $('.wrap-state').addClass('d-none');
        } else if ($(this).hasClass('tab-voluntary')) {
            optionInsurance = 2;
            $('.wrap-state').removeClass('d-none')

        } else {
            optionInsurance = 3;
            $('.wrap-state').removeClass('d-none')
        }
        $('.nav-custom').removeClass('btn-active');
        $(this).addClass('btn-active');
    })
    $('.btn-add-stage').click(function () {
        let html = getHtmlAddStage();
        $('.wrap-insurance-payment').append(html);
    })

    $('.btn-add-maternity').click(function () {
        let html = getHtmlMaternity();
        $('.wrap-insurance-payment').append(html);
    })
    $('.btn-voluntary').click(function () {
        let html = getHtmlTabVoluntary();
        $('.wrap-insurance-voluntary').append(html);
    })
    $(document).on('click', '.delete-this-dom', function () {
        $(this).closest('.del-insurance').remove();
    })
    $('.btn-mix-add-Stage').click(function () {
        let html = getHtmlMixAddStage();
        $('.wrap-mix-insurance').append(html);
    })
    $('.btn-mix-add-Voluntary').click(function () {
        let html = getHtmlMixAddVoluntary();
        $('.wrap-mix-insurance').append(html);
    })
    $('.btn-mix-add-Maternity').click(function () {
        let html = getHtmlMixAddMaternity();
        $('.wrap-mix-insurance').append(html);
    })
    $('.btn-result-insurance').click(function () {
        $('.result').removeClass('d-none');
        $('.detail-insurance').html('');
        getDataSelect();

    });

    //lấy dữ liệu từ tab BHXH bắt buộc
    function getDataSelect() {

        if (optionInsurance == 1) {
            handlingDataTabMust();
        } else if (optionInsurance == 2) {
            handlingDataTabVoluntary();
        } else {
            handlingDataTabMix();
        }
    }

    function handlingDataTabMust() {
        let arrMust = [];
        let pos = -1;
        let arrMoney = [];
        $('.input-must').each(function () {
            arrMoney.push($(this).val());
        })
        let objMust = new Object();
        $('.tab-must').each(function () {
            pos++;
            if (pos == 1) {
                objMust.fromMonth = $(this).val();
            } else if (pos == 2) {
                objMust.fromYear = $(this).val();
            } else if (pos == 3) {
                objMust.toMonth = $(this).val();
            } else if (pos == 4) {
                objMust.toYear = $(this).val();
                arrMust.push(objMust);
                pos = 0;
                objMust = new Object()
            }
        });
        for (let i = 0; i < arrMust.length; i++) {
            if (arrMoney[i] == '') {
                arrMust[i]['type'] = 'maternity';
            } else {
                arrMust[i]['money'] = arrMoney[i];
                arrMust[i]['type'] = 'must';
            }
        }
        solveStage(arrMust);
    }

    function handlingDataTabVoluntary() {
        console.log('voluntary');
        let arrVoluntary = [];
        let pos = -1;
        let arrMoney = [];
        $('.input-voluntary').each(function () {
            arrMoney.push($(this).val());
        })

        let objVoluntary = new Object();
        $('.tab-voluntary').each(function () {
            pos++;
            if (pos == 1) {
                objVoluntary.fromMonth = $(this).val();
            } else if (pos == 2) {
                objVoluntary.fromYear = $(this).val();
            } else if (pos == 3) {
                objVoluntary.toMonth = $(this).val();
            } else if (pos == 4) {
                objVoluntary.toYear = $(this).val();
            } else if (pos == 5) {
                objVoluntary.situation = $(this).val();
                arrVoluntary.push(objVoluntary);
                pos = 0;
                objVoluntary = new Object()
            }
        });
        for (let i = 0; i < arrVoluntary.length; i++) {
            arrVoluntary[i]['money'] = arrMoney[i];
        }
        solveVoluntary(arrVoluntary);
    }

    function handlingDataTabMix() {
        console.log('mix');
        let arrMix = [];
        let pos = -1;
        let arrMoney = [];
        $('.input-mix').each(function () {
            arrMoney.push($(this).val());
        })
        let objMix = new Object();
        $('.tab-mix').each(function () {
            pos++;
            if (pos == 1) {
                objMix.fromMonth = $(this).val();
            } else if (pos == 2) {
                objMix.fromYear = $(this).val();
            } else if (pos == 3) {
                objMix.toMonth = $(this).val();
            } else if (pos == 4) {
                objMix.toYear = $(this).val();
            } else if (pos == 5) {
                objMix.situation = $(this).val();
                arrMix.push(objMix);
                pos = 0;
                objMix = new Object()
            }
        });
        for (let i = 0; i < arrMix.length; i++) {
            arrMix[i]['money'] = arrMoney[i];
        }
        solveMix(arrMix);

    }

    let priceLost = [
        {year: 1995, adjustment: 4.33},
        {year: 1996, adjustment: 4.09},
        {year: 1997, adjustment: 4.96},
        {year: 1998, adjustment: 3.68},
        {year: 1999, adjustment: 3.53},
        {year: 2000, adjustment: 3.58},
        {year: 2001, adjustment: 3.59},
        {year: 2002, adjustment: 3.46},
        {year: 2003, adjustment: 3.35},
        {year: 2004, adjustment: 3.11},
        {year: 2005, adjustment: 2.87},
        {year: 2006, adjustment: 2.67},
        {year: 2007, adjustment: 2.47},
        {year: 2008, adjustment: 2.01},
        {year: 2009, adjustment: 1.88},
        {year: 2010, adjustment: 1.72},
        {year: 2011, adjustment: 1.45},
        {year: 2012, adjustment: 1.33},
        {year: 2013, adjustment: 1.25},
        {year: 2014, adjustment: 1.2},
        {year: 2015, adjustment: 1.19},
        {year: 2016, adjustment: 1.16},
        {year: 2017, adjustment: 1.12},
        {year: 2018, adjustment: 1.08},
        {year: 2019, adjustment: 1.05},
        {year: 2020, adjustment: 1.02},
        {year: 2021, adjustment: 1},
        {year: 2022, adjustment: 1},
    ];

    function getAdjustment(year) {
        for (let i = 0; i < priceLost.length; i++) {
            if (priceLost[i].year == year) {
                return priceLost[i].adjustment;
            }
        }
    }

    function getTotalMonth(data) {
        if (Number(data['fromYear']) === Number(data['toYear'])) {
            return (Number(data['toMonth']) - Number(data['fromMonth']) + 1)
        } else {
            let fromMonth = 12 - Number(data['fromMonth']) + 1;
            let toMonth = Number(data['toMonth']);
            let midMonth = Number(data['toYear']) - Number(data['fromYear']) <= 1 ? 0 :
                (Number(data['toYear']) - Number(data['fromYear']) - 1) * 12;
            let sumMonth = Number(fromMonth) + Number(toMonth) + Number(midMonth);
            return sumMonth;
        }
    }

    function findMoney(data, obj) {
        for (let i = 0; i < data.length; i++) {
            if (data[i] == obj) {
                return data[i - 1].money;
            }
        }
    }

    function getHtmlElement(fromMonth, fromYear, toMonth, toYear, sumMonth, money, adj) {
        return `
        <span class="d-block pl-30p"><span>
                    - Giai đoạn đóng từ T` + fromMonth + `/` + toYear + ` đến T` + toMonth + `/` + toYear +
            `</span>
                    : Thời gian ` + sumMonth + ` tháng
                    <span>
                    - Mức tiền lương đóng BHXH: ` + formatMoney(money) + ` (VNĐ)
                </span> <br> <span class="pl-30p">` + formatMoney(money) + ` (VNĐ) x ` + adj + ` x ` + sumMonth + ` = ` + formatMoney(Math.floor(Number(money) * Number(adj) * Number(sumMonth))) + ` (VNĐ)</span></span>`;
    }

    function getHtmlElementMaternity(fromMonth, fromYear, toMonth, toYear, sumMonth, money, adj) {
        return `
        <span class="d-block pl-30p"><span>
                    - Giai đoạn đóng từ T` + fromMonth + `/` + toYear + ` đến T` + toMonth + `/` + toYear +
            `</span>
                    : Thời gian ` + sumMonth + ` tháng
                    <span>
                    - Thai sản
                </span> <br> <span class="pl-30p">` + formatMoney(money) + ` (VNĐ) x ` + adj + ` x ` + sumMonth + ` = ` + formatMoney(Math.floor(Number(money) * Number(adj) * Number(sumMonth))) + ` (VNĐ)</span></span>`;
    }

    function solveStage(arrMust) {
        let sumMonth = 0;
        let sumMoney = 0;
        let sumMonthBefore = 0;
        let sumMonthAfter = 0;
        let html = ``;
        arrMust.forEach(data => {
            let moneyStep = 0;
            sumMonth += Number(getTotalMonth(data));
            //tính tiền giai đoạn
            if (data['type'] === 'must') {
                if (Number(data['fromYear']) === Number(data['toYear'])) {
                    sumMoney += Number(data['money']) * (Number(data['toMonth']) - Number(data['fromMonth']) + 1) *
                        Number(getAdjustment(data['fromYear']));
                    if (Number(data['fromYear']) < Number(2014)) {
                        sumMonthBefore += Number(data['toMonth']) - Number(data['fromMonth']) + 1;
                    } else {
                        sumMonthAfter += Number(data['toMonth']) - Number(data['fromMonth']) + 1;
                    }
                    html += (getHtmlElement(data['fromMonth'], data['fromYear'], data['toMonth'], data['toYear'],
                        Number(data['toMonth']) - Number(data['fromMonth']) + 1, data['money'], getAdjustment(data['fromYear'])));
                } else {
                    //tính tiền năm đầu
                    sumMoney += Math.floor(data['money'] * (12 - data['fromMonth'] + 1) * Number(getAdjustment(data['fromYear'])));
                    if (Number(data['fromYear']) < Number(2014)) {
                        sumMonthBefore += 12 - Number(data['fromMonth']) + 1;
                    } else {
                        sumMonthAfter += 12 - Number(data['fromMonth']) + 1;
                    }
                    html += getHtmlElement(data['fromMonth'], data['fromYear'], 12, data['fromYear'],
                        12 - Number(data['fromMonth']) + 1, data['money'], getAdjustment(data['fromYear']))
                    //tính tiền giữa các năm
                    for (let i = Number(data['fromYear']) + 1; i < Number(data['toYear']); i++) {
                        moneyStep = Math.floor(data['money'] * getAdjustment(i) * 12);
                        sumMoney += moneyStep;
                        html += getHtmlElement(1, i, 12, i, 12, data['money'], getAdjustment(i));
                        if (Number(i) < 2014) {
                            sumMonthBefore += 12;
                        } else {
                            sumMonthAfter += 12;
                        }
                    }

                    //tính tiền năm cuối
                    sumMoney += Number(data['money']) * Number(data['toMonth']) * Number(getAdjustment(data['toYear']));
                    if (Number(data['toYear']) < 2014) {
                        sumMonthBefore += Number(data['toMonth']);

                    } else {
                        sumMonthAfter += Number(data['toMonth']);
                    }
                    html += getHtmlElement(1, data['toYear'], data['toMonth'], data['toYear'],
                        Number(data['toMonth']), data['money'], getAdjustment(data['toYear']))
                }
            }
            //tính tiền thai sản
            else {
                //xét trường hợp trùng năm
                if (Number(data['fromYear']) === Number(data['toYear'])) {
                    sumMoney += Math.floor(findMoney(arrMust, data) * (Number(data['toMonth']) - data['fromMonth'] + 1) *
                        getAdjustment(data['fromYear']));
                    if (Number(data['fromYear']) < Number(2014)) {
                        sumMonthBefore += Number(data['toMonth']) - Number(data['fromMonth']) + 1;
                    } else {
                        sumMonthAfter += Number(data['toMonth']) - Number(data['fromMonth']) + 1;
                    }
                    html += (getHtmlElementMaternity(data['fromMonth'], data['fromYear'], data['toMonth'], data['toYear'],
                        Number(data['toMonth']) - Number(data['fromMonth']) + 1, findMoney(arrMust, data), getAdjustment(data['fromYear'])));
                } else {
                    //tính tiền năm đầu
                    sumMoney += Math.floor(findMoney(arrMust, data) * (12 - data['fromMonth'] + 1) * getAdjustment(data['fromYear']));
                    if (Number(data['fromYear']) < Number(2014)) {
                        sumMonthBefore += 12 - Number(data['fromMonth']) + 1;
                    } else {
                        sumMonthAfter += 12 - Number(data['fromMonth']) + 1;
                    }
                    html += getHtmlElementMaternity(data['fromMonth'], data['fromYear'], 12, data['fromYear'],
                        12 - Number(data['fromMonth']) + 1, findMoney(arrMust, data), getAdjustment(data['fromYear']))

                    //tính tiền năm cuối
                    sumMoney += Math.floor(findMoney(arrMust, data) * data['toMonth'] * getAdjustment(data['toYear']));
                    if (Number(data['toYear']) < 2014) {
                        sumMonthBefore += Number(data['toMonth']);
                    } else {
                        sumMonthAfter += Number(data['toMonth']);
                    }
                    html += getHtmlElementMaternity(1, data['toYear'], data['toMonth'], data['toYear'],
                        Number(data['toMonth']), findMoney(arrMust, data), getAdjustment(data['toYear']))
                }
            }
        })
        let totalYear = Math.floor(Number(sumMonth) / 12);
        let totalMonth = Number(sumMonth) % 12;
        let totalMoneyBefore = 0;
        let totalMoneyAfter = 0;
        sumMoney = Math.floor(sumMoney);
        $('.total-all').text(formatMoney(sumMoney));
        let bqtl = Math.floor(Number(sumMoney) / Number(sumMonth));
        if (sumMonthBefore) {
            if (Number(sumMonthBefore) % 12 === 0) {
                totalMoneyBefore = Math.floor(1.5 * Number(bqtl) * (Math.floor(Number(sumMonthBefore) / 12)));
            } else if (sumMonthBefore % 12 <= 6) {
                totalMoneyBefore = Math.floor(1.5 * bqtl * (Math.floor(Number(sumMonthBefore) / 12) + 0.5));
            } else {
                totalMoneyBefore = Math.floor(1.5 * bqtl * (Math.floor(Number(sumMonthBefore) / 12) + 1));
            }
        }
        if (sumMonthAfter) {
            if (Number(sumMonthAfter) % 12 === 0) {
                totalMoneyAfter = Math.floor(2 * bqtl * (Math.floor(Number(sumMonthAfter) / 12)));
            } else if (sumMonthAfter % 12 <= 6) {
                totalMoneyAfter = Math.floor(2 * bqtl * (Math.floor(Number(sumMonthAfter) / 12) + 0.5));
            } else {
                totalMoneyAfter = Math.floor(2 * bqtl * (Math.floor(Number(sumMonthAfter) / 12 + 1)));
            }
        }
        $('.total-year').text(totalYear + ' năm ' + totalMonth + ' tháng');
        $('.bqtl').text(formatMoney(Math.floor(bqtl)));
        if (totalMoneyBefore != 0) {
            $('.before-2014').text(`Mức hưởng BHXH một lần đối với thời gian đóng BHXH trước 2014 = ` + formatMoney(totalMoneyBefore) + ` (VNĐ)`);
        }
        if (totalMoneyAfter) {
            $('.after-2014').text(`Mức hưởng BHXH một lần đối với thời gian đóng BHXH từ 2014 trở đi = ` + formatMoney((totalMoneyAfter)) + ` (VNĐ)`);
        }
        $('.detail-insurance').append(html);
        $('.total_bhxh').text(formatMoney(totalMoneyBefore + totalMoneyAfter))
    }

    function insertCharacter(str, index, value) {
        return str.substring(0, index) + value + str.substring(index);
    }

    function formatMoney(money) {
        money = money.toString();
        let count = 0;
        for (let i = money.length - 1; i >= 0; i--) {
            count++;
            if (count == 3) {
                money = insertCharacter(money, i, ',');
                count = 0;
            }
        }
        if (money[0] == ',') {
            money = money.slice(1)
        }
        return money;
    }

    function getHtmlStateSupportBefore(m1, m2, m3, res) {
        return `
              0.22 x 700,000 (VNĐ) x 0.3% x ` + m1 + ` tháng<br>`
            + `0.22 x 700,000 (VNĐ) x 0.25% x ` + m2 + ` tháng<br>`
            + `0.22 x 700,000 (VNĐ) x 0.1% x ` + m3 + ` tháng<br> = ` + formatMoney(res.toString());
    }

    function getHtmlStateSupportAfter(m1, m2, m3, res) {
        return `
              0.22 x 1,500,000 (VNĐ) x 0.3% x ` + m1 + ` tháng <br>`
            + `0.22 x 1,500,000 (VNĐ) x 0.25% x ` + m2 + ` tháng <br>`
            + `0.22 x 1,500,000 (VNĐ) x 0.1% x ` + m3 + ` tháng<br> = ` + formatMoney(res.toString());
    }

    function solveVoluntary(arr) {
        let sumMonth = 0;
        let sumMoney = 0;
        let sumMonthBefore = 0;
        let sumMonthAfter = 0;
        let html = ``;
        console.log(arr);
        arr.forEach(data => {
            let moneyStep = 0;
            sumMonth += Number(getTotalMonth(data));
            //tính tiền giai đoạn
            if (Number(data['fromYear']) === Number(data['toYear'])) {
                sumMoney += Number(data['money']) * (Number(data['toMonth']) - Number(data['fromMonth']) + 1) *
                    Number(getAdjustment(data['fromYear']));
                if (Number(data['fromYear']) < Number(2014)) {
                    sumMonthBefore += Number(data['toMonth']) - Number(data['fromMonth']) + 1;
                } else {
                    sumMonthAfter += Number(data['toMonth']) - Number(data['fromMonth']) + 1;
                }
                html += (getHtmlElement(data['fromMonth'], data['fromYear'], data['toMonth'], data['toYear'],
                    Number(data['toMonth']) - Number(data['fromMonth']) + 1, data['money'], getAdjustment(data['fromYear'])));
            } else {
                //tính tiền năm đầu
                sumMoney += Math.floor(data['money'] * (12 - data['fromMonth'] + 1) * Number(getAdjustment(data['fromYear'])));
                if (Number(data['fromYear']) < Number(2014)) {
                    sumMonthBefore += 12 - Number(data['fromMonth']) + 1;
                } else {
                    sumMonthAfter += 12 - Number(data['fromMonth']) + 1;
                }
                html += getHtmlElement(data['fromMonth'], data['fromYear'], 12, data['fromYear'],
                    12 - Number(data['fromMonth']) + 1, data['money'], getAdjustment(data['fromYear']))
                //tính tiền giữa các năm
                for (let i = Number(data['fromYear']) + 1; i < Number(data['toYear']); i++) {
                    moneyStep = Math.floor(data['money'] * getAdjustment(i) * 12);
                    sumMoney += moneyStep;
                    html += getHtmlElement(1, i, 12, i, 12, data['money'], getAdjustment(i));
                    if (Number(i) < 2014) {
                        sumMonthBefore += 12;
                    } else {
                        sumMonthAfter += 12;
                    }
                }

                //tính tiền năm cuối
                sumMoney += Number(data['money']) * Number(data['toMonth']) * Number(getAdjustment(data['toYear']));
                if (Number(data['toYear']) < 2014) {
                    sumMonthBefore += Number(data['toMonth']);

                } else {
                    sumMonthAfter += Number(data['toMonth']);
                }
                html += getHtmlElement(1, data['toYear'], data['toMonth'], data['toYear'],
                    Number(data['toMonth']), data['money'], getAdjustment(data['toYear']))

                //tính số tháng nhà nước hỗ trợ

            }
        })

        let sumPoorBefore = 0;
        let sumNearPoorBefore = 0;
        let sumOtherBefore = 0;
        let sumPoorAfter = 0;
        let sumNearPoorAfter = 0;
        let sumOtherAfter = 0;
        arr.forEach(data => {

            if (data.fromYear == data.toYear) {
                if (Number(data.fromYear) >= 2018 && Number(data.fromYear <= 2021)) {
                    if (data.situation === 'poor') {
                        sumPoorBefore += Number(data.toMonth) - Number(data.fromMonth) + 1;
                    } else if (data.situation === 'near-poor') {
                        sumNearPoorBefore += Number(data.toMonth) - Number(data.fromMonth) + 1;
                    } else {
                        sumOtherBefore += Number(data.toMonth) - Number(data.fromMonth) + 1;
                    }
                } else if (Number(data.fromYear) > 2021) {
                    if (data.situation === 'poor') {
                        sumPoorAfter += Number(data.toMonth) - Number(data.fromMonth) + 1;
                    } else if (data.situation === 'near-poor') {
                        sumNearPoorAfter += Number(data.toMonth) - Number(data.fromMonth) + 1;
                    } else {
                        sumOtherAfter += Number(data.toMonth) - Number(data.fromMonth) + 1;
                    }
                }
            } else {
                if (Number(data.fromYear) >= 2018 && Number(data.fromYear <= 2021)) {

                    if (data.situation === 'poor') {
                        sumPoorBefore += 12 - Number(data.fromMonth) + 1;
                    } else if (data.situation === 'near-poor') {
                        sumNearPoorBefore += 12 - Number(data.fromMonth) + 1;
                    } else {
                        sumOtherBefore += 12 - Number(data.fromMonth) + 1;
                    }

                }
                if (Number(data.fromYear) > 2021) {
                    if (data.fromYear == data.toYear) {
                        if (data.situation === 'poor') {
                            sumPoorBefore += Number(data.toMonth) - Number(data.fromMonth) + 1;
                        } else if (data.situation === 'near-poor') {
                            sumNearPoorBefore += Number(data.toMonth) - Number(data.fromMonth) + 1;
                        } else {
                            sumOtherBefore += Number(data.toMonth) - Number(data.fromMonth) + 1;
                        }
                    } else {
                        if (data.situation === 'poor') {
                            sumPoorAfter += 12 - Number(data.fromMonth) + 1;
                        } else if (data.situation === 'near-poor') {
                            sumNearPoorAfter += 12 - Number(data.fromMonth) + 1;
                        } else {
                            sumOtherAfter += 12 - Number(data.fromMonth) + 1;
                        }
                    }
                }

                for (let i = Number(data.fromYear) + 1; i < Number(data.toYear); i++) {
                    if (i >= 2018 && i <= 2021) {
                        if (data.situation === 'poor') {
                            sumPoorBefore += 12;
                        } else if (data.situation === 'near-poor') {
                            sumNearPoorBefore += 12;
                        } else {
                            sumOtherBefore += 12;
                        }
                    } else if (i > 2021) {
                        if (data.situation === 'poor') {
                            sumPoorAfter += 12;
                        } else if (data.situation === 'near-poor') {
                            sumNearPoorAfter += 12;
                        } else {
                            sumOtherAfter += 12;
                        }
                    }
                }

                if (Number(data.toYear) >= 2018 && Number(data.toYear <= 2021)) {
                    if (data.situation === 'poor') {
                        sumPoorBefore += Number(data.toMonth);
                    } else if (data.situation === 'near-poor') {
                        sumNearPoorBefore += Number(data.toMonth);
                    } else {
                        sumOtherBefore += Number(data.toMonth);
                    }
                }
                if (Number(data.toYear) > 2021) {
                    if (data.situation === 'poor') {
                        sumPoorAfter += Number(data.toMonth);
                    } else if (data.situation === 'near-poor') {
                        sumNearPoorAfter += Number(data.toMonth);
                    } else {
                        sumOtherAfter += Number(data.toMonth);
                    }
                }
            }


        })
        let totalYear = Math.floor(Number(sumMonth) / 12);
        let totalMonth = Number(sumMonth) % 12;
        let totalMoneyBefore = 0;
        let totalMoneyAfter = 0;
        sumMoney = Math.floor(sumMoney);
        $('.total-all').text(formatMoney(sumMoney));
        let bqtl = Math.floor(Number(sumMoney) / Number(sumMonth));
        if (sumMonthBefore) {
            if (Number(sumMonthBefore) % 12 === 0) {
                totalMoneyBefore = Math.floor(1.5 * Number(bqtl) * (Math.floor(Number(sumMonthBefore) / 12)));
            } else if (sumMonthBefore % 12 <= 6) {
                totalMoneyBefore = Math.floor(1.5 * bqtl * (Math.floor(Number(sumMonthBefore) / 12) + 0.5));
            } else {
                totalMoneyBefore = Math.floor(1.5 * bqtl * (Math.floor(Number(sumMonthBefore) / 12) + 1));
            }
        }
        if (sumMonthAfter) {
            if (Number(sumMonthAfter) % 12 === 0) {
                totalMoneyAfter = Math.floor(2 * bqtl * (Math.floor(Number(sumMonthAfter) / 12)));
            } else if (sumMonthAfter % 12 <= 6) {
                totalMoneyAfter = Math.floor(2 * bqtl * (Math.floor(Number(sumMonthAfter) / 12) + 0.5));
            } else {
                totalMoneyAfter = Math.floor(2 * bqtl * (Math.floor(Number(sumMonthAfter) / 12 + 1)));
            }
        }
        $('.total-year').text(totalYear + ' năm ' + totalMonth + ' tháng');
        $('.bqtl').text(formatMoney(Math.floor(bqtl)));
        if (totalMoneyBefore != 0) {
            $('.before-2014').text(`Mức hưởng BHXH một lần đối với thời gian đóng BHXH trước 2014 = ` + formatMoney(totalMoneyBefore) + ` (VNĐ)`);
        }
        if (totalMoneyAfter) {
            $('.after-2014').text(`Mức hưởng BHXH một lần đối với thời gian đóng BHXH từ 2014 trở đi = ` + formatMoney(totalMoneyAfter) + ` (VNĐ)`);
        }

        let totalStateBefore = 0;
        let totalStateAfter = 0;
        totalStateBefore =
            0.22 * 700000 * 0.3 * sumPoorBefore
            + 0.22 * 700000 * 0.25 * sumNearPoorBefore
            + 0.22 * 700000 * 0.1 * sumOtherBefore;

        totalStateAfter =
            0.22 * 1500000 * 0.3 * sumPoorAfter
            + 0.22 * 1500000 * 0.25 * sumNearPoorAfter
            + 0.22 * 1500000 * 0.1 * sumOtherAfter;
        $('.money-support-before').html(getHtmlStateSupportBefore(sumPoorBefore, sumNearPoorBefore, sumOtherBefore, totalStateBefore));
        $('.money-support-after').html(getHtmlStateSupportAfter(sumPoorAfter, sumNearPoorAfter, sumOtherAfter, totalStateAfter))
        $('.detail-insurance').append(html);
        let totalStateSupport = Number(totalStateBefore) + Number(totalStateAfter);
        let total_bhxh = Number(totalMoneyBefore) + Number(totalMoneyAfter) - totalStateSupport;
        $('.total_bhxh').text(formatMoney(total_bhxh));
        $('.total-state-support').html(formatMoney(totalStateSupport.toString()));
    }

    function solveMix(arrMust) {
        console.log(arrMust);
        let sumMonth = 0;
        let sumMoney = 0;
        let sumMonthBefore = 0;
        let sumMonthAfter = 0;
        let html = ``;
        console.log(arrMust);
        arrMust.forEach(data => {
            let moneyStep = 0;
            sumMonth += Number(getTotalMonth(data));
            //tính tiền giai đoạn
            if (data['situation'] != 'maternity') {
                if (Number(data['fromYear']) === Number(data['toYear'])) {
                    sumMoney += Number(data['money']) * (Number(data['toMonth']) - Number(data['fromMonth']) + 1) *
                        Number(getAdjustment(data['fromYear']));
                    if (Number(data['fromYear']) < Number(2014)) {
                        sumMonthBefore += Number(data['toMonth']) - Number(data['fromMonth']) + 1;
                    } else {
                        sumMonthAfter += Number(data['toMonth']) - Number(data['fromMonth']) + 1;
                    }
                    html += (getHtmlElement(data['fromMonth'], data['fromYear'], data['toMonth'], data['toYear'],
                        Number(data['toMonth']) - Number(data['fromMonth']) + 1, data['money'], getAdjustment(data['fromYear'])));
                } else {
                    //tính tiền năm đầu
                    sumMoney += Math.floor(data['money'] * (12 - data['fromMonth'] + 1) * Number(getAdjustment(data['fromYear'])));
                    if (Number(data['fromYear']) < Number(2014)) {
                        sumMonthBefore += 12 - Number(data['fromMonth']) + 1;
                    } else {
                        sumMonthAfter += 12 - Number(data['fromMonth']) + 1;
                    }
                    html += getHtmlElement(data['fromMonth'], data['fromYear'], 12, data['fromYear'],
                        12 - Number(data['fromMonth']) + 1, data['money'], getAdjustment(data['fromYear']))
                    //tính tiền giữa các năm
                    for (let i = Number(data['fromYear']) + 1; i < Number(data['toYear']); i++) {
                        moneyStep = Math.floor(data['money'] * getAdjustment(i) * 12);
                        sumMoney += moneyStep;
                        html += getHtmlElement(1, i, 12, i, 12, data['money'], getAdjustment(i));
                        if (Number(i) < 2014) {
                            sumMonthBefore += 12;
                        } else {
                            sumMonthAfter += 12;
                        }
                    }

                    //tính tiền năm cuối
                    sumMoney += Number(data['money']) * Number(data['toMonth']) * Number(getAdjustment(data['toYear']));
                    if (Number(data['toYear']) < 2014) {
                        sumMonthBefore += Number(data['toMonth']);

                    } else {
                        sumMonthAfter += Number(data['toMonth']);
                    }
                    html += getHtmlElement(1, data['toYear'], data['toMonth'], data['toYear'],
                        Number(data['toMonth']), data['money'], getAdjustment(data['toYear']))
                }
            }
            //tính tiền thai sản
            else {
                //xét trường hợp trùng năm
                if (Number(data['fromYear']) === Number(data['toYear'])) {
                    sumMoney += Math.floor(findMoney(arrMust, data) * (Number(data['toMonth']) - data['fromMonth'] + 1) *
                        getAdjustment(data['fromYear']));
                    if (Number(data['fromYear']) < Number(2014)) {
                        sumMonthBefore += Number(data['toMonth']) - Number(data['fromMonth']) + 1;
                    } else {
                        sumMonthAfter += Number(data['toMonth']) - Number(data['fromMonth']) + 1;
                    }
                    html += (getHtmlElementMaternity(data['fromMonth'], data['fromYear'], data['toMonth'], data['toYear'],
                        Number(data['toMonth']) - Number(data['fromMonth']) + 1, findMoney(arrMust, data), getAdjustment(data['fromYear'])));
                } else {
                    //tính tiền năm đầu
                    sumMoney += Math.floor(findMoney(arrMust, data) * (12 - data['fromMonth'] + 1) * getAdjustment(data['fromYear']));
                    if (Number(data['fromYear']) < Number(2014)) {
                        sumMonthBefore += 12 - Number(data['fromMonth']) + 1;
                    } else {
                        sumMonthAfter += 12 - Number(data['fromMonth']) + 1;
                    }
                    html += getHtmlElementMaternity(data['fromMonth'], data['fromYear'], 12, data['fromYear'],
                        12 - Number(data['fromMonth']) + 1, findMoney(arrMust, data), getAdjustment(data['fromYear']))

                    //tính tiền năm cuối
                    sumMoney += Math.floor(findMoney(arrMust, data) * data['toMonth'] * getAdjustment(data['toYear']));
                    if (Number(data['toYear']) < 2014) {
                        sumMonthBefore += Number(data['toMonth']);
                    } else {
                        sumMonthAfter += Number(data['toMonth']);
                    }
                    html += getHtmlElementMaternity(1, data['toYear'], data['toMonth'], data['toYear'],
                        Number(data['toMonth']), findMoney(arrMust, data), getAdjustment(data['toYear']))
                }
            }
        })

        //tính số ngày trường hợp BHXH tự nguyện
        //tạo arr mới lưu các trường hợp đó lại
        let arr = [];

        arrMust.forEach(element => {
            if (element.situation != 'must' && element.situation != 'maternity') {
                arr.push(element);
            }
        })
        console.log('các giai đoạn đóng BHXH tự nguyện');
        console.log(arr);
        let sumPoorBefore = 0;
        let sumNearPoorBefore = 0;
        let sumOtherBefore = 0;
        let sumPoorAfter = 0;
        let sumNearPoorAfter = 0;
        let sumOtherAfter = 0;
        arr.forEach(data => {

            if (data.fromYear == data.toYear) {
                if (Number(data.fromYear) >= 2018 && Number(data.fromYear <= 2021)) {
                    if (data.situation === 'poor') {
                        sumPoorBefore += Number(data.toMonth) - Number(data.fromMonth) + 1;
                    } else if (data.situation === 'near-poor') {
                        sumNearPoorBefore += Number(data.toMonth) - Number(data.fromMonth) + 1;
                    } else {
                        sumOtherBefore += Number(data.toMonth) - Number(data.fromMonth) + 1;
                    }
                } else if (Number(data.fromYear) > 2021) {
                    if (data.situation === 'poor') {
                        sumPoorAfter += Number(data.toMonth) - Number(data.fromMonth) + 1;
                    } else if (data.situation === 'near-poor') {
                        sumNearPoorAfter += Number(data.toMonth) - Number(data.fromMonth) + 1;
                    } else {
                        sumOtherAfter += Number(data.toMonth) - Number(data.fromMonth) + 1;
                    }
                }
            } else {
                if (Number(data.fromYear) >= 2018 && Number(data.fromYear <= 2021)) {

                    if (data.situation === 'poor') {
                        sumPoorBefore += 12 - Number(data.fromMonth) + 1;
                    } else if (data.situation === 'near-poor') {
                        sumNearPoorBefore += 12 - Number(data.fromMonth) + 1;
                    } else {
                        sumOtherBefore += 12 - Number(data.fromMonth) + 1;
                    }

                }
                if (Number(data.fromYear) > 2021) {
                    if (data.fromYear == data.toYear) {
                        if (data.situation === 'poor') {
                            sumPoorBefore += Number(data.toMonth) - Number(data.fromMonth) + 1;
                        } else if (data.situation === 'near-poor') {
                            sumNearPoorBefore += Number(data.toMonth) - Number(data.fromMonth) + 1;
                        } else {
                            sumOtherBefore += Number(data.toMonth) - Number(data.fromMonth) + 1;
                        }
                    } else {
                        if (data.situation === 'poor') {
                            sumPoorAfter += 12 - Number(data.fromMonth) + 1;
                        } else if (data.situation === 'near-poor') {
                            sumNearPoorAfter += 12 - Number(data.fromMonth) + 1;
                        } else {
                            sumOtherAfter += 12 - Number(data.fromMonth) + 1;
                        }
                    }
                }

                for (let i = Number(data.fromYear) + 1; i < Number(data.toYear); i++) {
                    if (i >= 2018 && i <= 2021) {
                        if (data.situation === 'poor') {
                            sumPoorBefore += 12;
                        } else if (data.situation === 'near-poor') {
                            sumNearPoorBefore += 12;
                        } else {
                            sumOtherBefore += 12;
                        }
                    } else if (i > 2021) {
                        if (data.situation === 'poor') {
                            sumPoorAfter += 12;
                        } else if (data.situation === 'near-poor') {
                            sumNearPoorAfter += 12;
                        } else {
                            sumOtherAfter += 12;
                        }
                    }
                }

                if (Number(data.toYear) >= 2018 && Number(data.toYear <= 2021)) {
                    if (data.situation === 'poor') {
                        sumPoorBefore += Number(data.toMonth);
                        ;
                    } else if (data.situation === 'near-poor') {
                        sumNearPoorBefore += Number(data.toMonth);
                        ;
                    } else {
                        sumOtherBefore += Number(data.toMonth);
                        ;
                    }
                }
                if (Number(data.toYear) > 2021) {
                    if (data.situation === 'poor') {
                        sumPoorAfter += Number(data.toMonth);
                    } else if (data.situation === 'near-poor') {
                        sumNearPoorAfter += Number(data.toMonth);
                    } else {
                        sumOtherAfter += Number(data.toMonth);
                    }
                }
            }


        })
        let totalStateBefore = 0;
        let totalStateAfter = 0;
        totalStateBefore =
            0.22 * 700000 * 0.3 * sumPoorBefore
            + 0.22 * 700000 * 0.25 * sumNearPoorBefore
            + 0.22 * 700000 * 0.1 * sumOtherBefore;

        totalStateAfter =
            0.22 * 1500000 * 0.3 * sumPoorAfter
            + 0.22 * 1500000 * 0.25 * sumNearPoorAfter
            + 0.22 * 1500000 * 0.1 * sumOtherAfter;

        $('.total-state-support').html(formatMoney(totalStateBefore + totalStateAfter));
        $('.money-support-before').html(getHtmlStateSupportBefore(sumPoorBefore, sumNearPoorBefore, sumOtherBefore, totalStateBefore));
        $('.money-support-after').html(getHtmlStateSupportAfter(sumPoorAfter, sumNearPoorAfter, sumOtherAfter, totalStateAfter))
        //end tính ngày
        let totalYear = Math.floor(Number(sumMonth) / 12);
        let totalMonth = Number(sumMonth) % 12;
        let totalMoneyBefore = 0;
        let totalMoneyAfter = 0;
        sumMoney = Math.floor(sumMoney);
        $('.total-all').text(formatMoney(sumMoney));
        let bqtl = Math.floor(Number(sumMoney) / Number(sumMonth));
        if (sumMonthBefore) {
            if (Number(sumMonthBefore) % 12 === 0) {
                totalMoneyBefore = Math.floor(1.5 * Number(bqtl) * (Math.floor(Number(sumMonthBefore) / 12)));
            } else if (sumMonthBefore % 12 <= 6) {
                totalMoneyBefore = Math.floor(1.5 * bqtl * (Math.floor(Number(sumMonthBefore) / 12) + 0.5));
            } else {
                totalMoneyBefore = Math.floor(1.5 * bqtl * (Math.floor(Number(sumMonthBefore) / 12) + 1));
            }
        }
        if (sumMonthAfter) {
            if (Number(sumMonthAfter) % 12 === 0) {
                totalMoneyAfter = Math.floor(2 * bqtl * (Math.floor(Number(sumMonthAfter) / 12)));
            } else if (sumMonthAfter % 12 <= 6) {
                totalMoneyAfter = Math.floor(2 * bqtl * (Math.floor(Number(sumMonthAfter) / 12) + 0.5));
            } else {
                totalMoneyAfter = Math.floor(2 * bqtl * (Math.floor(Number(sumMonthAfter) / 12 + 1)));
            }
        }
        $('.total-year').text(totalYear + ' năm ' + totalMonth + ' tháng');
        $('.bqtl').text(formatMoney(Math.floor(bqtl)));
        if (totalMoneyBefore != 0) {
            $('.before-2014').text(`Mức hưởng BHXH một lần đối với thời gian đóng BHXH trước 2014 = ` + formatMoney(totalMoneyBefore) + ` (VNĐ)`);
        }
        if (totalMoneyAfter) {
            $('.after-2014').text(`Mức hưởng BHXH một lần đối với thời gian đóng BHXH từ 2014 trở đi = ` + formatMoney((totalMoneyAfter)) + ` (VNĐ)`);
        }
        $('.detail-insurance').append(html);
        $('.total_bhxh').text(formatMoney(totalMoneyBefore + totalMoneyAfter - (totalStateBefore + totalStateAfter)))
    }
});
