<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title></title>
<link crossorigin="anonymous"
    href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css"
    integrity="sha512-oc9+XSs1H243/FRN9Rw62Fn8EtxjEYWHXRvjS43YtueEewbS6ObfXcJNyohjHqVKFPoXXUxwc+q1K7Dee6vv9g=="
    rel="stylesheet" />
<link href="//db.onlinewebfonts.com/c/50caebd3d1f303be2ec212f78f8c084e?family=VAG+Rounded+Std" rel="stylesheet"
    type="text/css" />


<style type="text/css">
body {
    overflow-x: hidden;
    overflow-y: scroll;
    -webkit-overflow-scrolling: touch;
}

.br-lg {
    display: none;
}

.br-sm {
    display: none;
}

@media (min-width: 992px) {
    .br-lg {
        display: block;
    }
}

@media (max-width: 991px) {
    .br-sm {
        display: block;
    }
}

@font-face {
    font-family: "VAG Rounded Std";
    src: url("//db.onlinewebfonts.com/t/21b0e9c93e5b240b0c3b22793c0f3169.eot");
    src: url("//db.onlinewebfonts.com/t/21b0e9c93e5b240b0c3b22793c0f3169.eot?#iefix") format("embedded-opentype"),
        url("//db.onlinewebfonts.com/t/21b0e9c93e5b240b0c3b22793c0f3169.woff2") format("woff2"),
        url("//db.onlinewebfonts.com/t/21b0e9c93e5b240b0c3b22793c0f3169.woff") format("woff"),
        url("//db.onlinewebfonts.com/t/21b0e9c93e5b240b0c3b22793c0f3169.ttf") format("truetype"),
        url("//db.onlinewebfonts.com/t/21b0e9c93e5b240b0c3b22793c0f3169.svg#VAG Rounded Std") format("svg");
}

.text-blue {
    color: #003ab0;
}

.text-lightblue {
    color: #04a6e1;
}

.text-pink {
    color: #cf5397;
}

.bnr-body {
    z-index: 2;
}

.bnr-body-w {
    max-width: 700px;
    margin: auto;
    position: relative;
}

.bnr-body-f {
    max-width: 800px;
    margin: auto;
    position: relative;
}

.f-list {
    margin: 0;
    padding: 0;
}

.f-list li {
    list-style: none;
    display: flex;
    color: white;
    margin-top: 20px;
}

.li-txt {
    display: flex;
    width: 400px;
}

.li-img {
    width: 300px;
    text-align: center;
}

.li-img img {
    max-width: 150px;
}

.li-num {
    background-color: #cf5397;
    border-radius: 40px;
    height: 30px;
    width: 30px;
    display: flex;
    text-align: center;
    padding: 3px 10px;
    margin-right: 10px;
}

.li-para {
    width: 95%;
}

.bnrtxt {
    font-size: 40px;
    font-family: "VAG Rounded Std";
}

.readthefaq {
    left: 0;
    right: 0;
    margin: auto;
    bottom: 50px;
    max-width: 200px;
    text-align: center;
    position: absolute;
}

.last-section {
    margin-top: 10%;
    left: 60%;
}

.footer-section {
    background-color: #cf5397;
}

.refreshbtn {}

.s2-h1 {
    margin-top: 70px;
}

@media (max-width: 1400px) {
    .s2-h1 {
        margin-top: 50px;
    }

    .bnrtxt {
        font-size: 30px;
    }

    .refreshbtn img {
        max-width: 200px;
        margin-top: 40px !important;
    }

    .readthefaq {
        bottom: 20px;
    }
}

@media (max-width: 1200px) {
    .s2-h1 {
        margin-top: 10px;
        margin-bottom: 20px;
    }

    .f-list li {
        margin: 0;
    }

    .refreshbtn img {
        max-width: 200px;
        margin-top: 20px !important;
    }

}

@media (max-width: 1100px) {
    .bnrtxt {
        font-size: 20px;
    }

    .refreshbtn img {
        max-width: 200px;
        margin-top: 30px !important;
    }
}

@media (max-width: 991px) {
    .f-list li {
        margin-top: 20px;
        flex-direction: column;
        align-items: center;
        margin-bottom: 70px;
    }

    .li-txt {
        flex-direction: column;
        text-align: center;
        align-items: center;
    }

    .s2-h1 {
        margin-top: 25%;
        margin-bottom: 70px;
    }

    .last-section {
        margin-top: 70%;
        left: auto;
        text-align: center;
        width: 100%;
    }

}

@media (max-width: 767px) {
    .f-list li {
        margin-top: 20px;
        margin-bottom: 50px;
    }

    .li-txt {
        flex-direction: column;
        text-align: center;
        align-items: center;
    }

    .s2-h1 {
        margin-top: 70px;
        margin-bottom: 70px;
    }

    .h1-sm {
        font-size: 24px;
    }
}

@media (max-width: 660px) {
    .f-list li {
        margin-top: 20px;
        margin-bottom: 30px;
    }

    .li-txt {
        flex-direction: column;
        text-align: center;
        align-items: center;
    }

    .s2-h1 {
        margin-top: 40px;
        margin-bottom: 40px;
    }

    .footertxt {
        font-size: 12px;
    }

    .readthefaq {
        bottom: 40px;
    }
}

@media (max-width: 560px) {
    .li-para h4 {
        font-size: 16px;
    }

    .f-list li {
        margin-top: 0;
        margin-bottom: 0;
    }

    .li-txt {
        flex-direction: column;
        text-align: center;
        align-items: center;
        font-size: 12px;
    }

    .s2-h1 {
        margin-top: 0px;
        margin-bottom: 20px;
        font-size: 24px;
    }

    .li-img img {
        max-width: 65px;
    }

    .li-num {

        height: 20px;
        width: 20px;
        margin: 5px auto;
        padding: 1px 6px;
    }

    .readthefaq {

        bottom: 40px;
        max-width: 130px;

    }

    .footerimg {
        max-width: 70%;
        margin: auto;
    }
}

@media (max-width: 560px) {}

.popover .popover-body .selection a {
    color: #666 !important;
}

.popover .popover-body .selection a:hover {
    color: #666 !important;
}

.mobile-menu-pills .nav-pills .nav-link.active {
    color: #00a4e3 !important;
    font-weight: bold;
}

.nav-mobile .links a,
.nav-mobile .links a:hover {
    color: #333 !important;
}
</style>



<section class="position-relative d-flex"><svg class="d-none d-lg-block" height="100%" viewbox="0 0 1920 847"
        width="100%" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <image height="847" width="1920"
            xlink:href="/wp-content/themes/yes.my/images/kasiup/kasihupnew_bnr-en-image-v2.png">
        </image> <a href="#footerlink">
            <image height="69" transform="translate(844 688)" width="230"
                xlink:href="/wp-content/themes/yes.my/images/kasiup/kasihupnew_bnr-en-image2.png">
            </image>
        </a>
    </svg> <svg class="d-block d-lg-none" height="100%" viewbox="0 0 1242 2332" width="100%"
        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <image height="2332" width="1242"
            xlink:href="/wp-content/themes/yes.my/images/kasiup/sm/kasimobile_bnr-en-image.png">
        </image> <a id="linkbtn" style="position:relative; z-index:99999;">
            <image height="88" transform="translate(472 1126)" width="293"
                xlink:href="/wp-content/themes/yes.my/images/kasiup/sm/kasimobile_bnr-en-image2.png">
            </image>
        </a>
    </svg></section>

<section class="d-flex align-items-start position-relative"><img alt="" class="img-fluid d-none d-lg-flex"
        data-entity-type="" data-entity-uuid=""
        src="/wp-content/themes/yes.my/images/kasiup/kasihupnew_03.jpg" /> <img
        alt="" class="img-fluid d-flex d-lg-none" data-entity-type="" data-entity-uuid="" height="auto"
        src="/wp-content/themes/yes.my/images/kasiup/sm/kasimobile_02.jpg"
        width="100%" />
    <div class="bnr-body position-absolute w-100">
        <!--  -->
        <div class="bnr-body-w">
            <h1 class="text-white text-center s2-h1">How does it work?</h1>

            <div class="li-wrapper">
                <ul class="f-list">
                    <li>
                        <div class="li-img d-none d-lg-block"><img alt="" class="img-fluid" data-entity-type=""
                                data-entity-uuid=""
                                src="/wp-content/themes/yes.my/images/kasiup/s2-1.png" />
                        </div>

                        <div class="li-txt">
                            <div class="li-num">1</div>

                            <div class="li-img d-block d-lg-none"><img alt="" class="img-fluid" data-entity-type=""
                                    data-entity-uuid=""
                                    src="/wp-content/themes/yes.my/images/kasiup/s2-1.png" />
                            </div>

                            <div class="li-para">
                                <h4><b>SHARE</b></h4>

                                <p class="text-white"><span class="text-blue"><b>Kasi Up</b></span> your friends and
                                    family by<br />
                                    sharing your referral code and inviting<br />
                                    them to join <b>yes.</b></p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="li-img d-none d-lg-block"><img alt="" class="img-fluid" data-entity-type=""
                                data-entity-uuid=""
                                src="/wp-content/themes/yes.my/images/kasiup/s2_2.png" />
                        </div>

                        <div class="li-txt">
                            <div class="li-num">2</div>

                            <div class="li-img d-block d-lg-none"><img alt="" class="img-fluid" data-entity-type=""
                                    data-entity-uuid=""
                                    src="/wp-content/themes/yes.my/images/kasiup/s2_2.png" />
                            </div>

                            <div class="li-para">
                                <h4><b>EARN</b></h4>

                                <p class="text-white">Once your referree succesfully signs<br />
                                    up, you both get cash! Details in the<br />
                                    table below.</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="li-img d-none d-lg-block"><img alt="" class="img-fluid" data-entity-type=""
                                data-entity-uuid=""
                                src="/wp-content/themes/yes.my/images/kasiup/s2_3.png" />
                        </div>

                        <div class="li-txt">
                            <div class="li-num">3</div>

                            <div class="li-img d-block d-lg-none"><img alt="" class="img-fluid" data-entity-type=""
                                    data-entity-uuid=""
                                    src="/wp-content/themes/yes.my/images/kasiup/s2_3.png" />
                            </div>

                            <div class="li-para">
                                <h4><b>KEEP IT GOING </b></h4>

                                <p class="text-white">Keep it going! The more you <span class="text-blue"><b>Kasi
                                            Up</b></span>,<br />
                                    the more money you get. And there???s<br />
                                    no limit to your referrals! It???s really, truly<br />
                                    <span class="text-blue"><b>Unlimited Duit</b></span>, y???all.
                                </p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!--  -->
    </div>
</section>

<section class="d-flex position-relative align-items-start"><img alt="" class="img-fluid d-none d-lg-block"
        data-entity-type="file" data-entity-uuid="d7390f6a-b198-49ea-97f8-c99853af029d"
        src="/wp-content/themes/yes.my/images/kasiup/web_kasiup_full_psd_chart_0.jpg" /> <img
        alt="&quot;kasihup en sm&quot;" class="img-fluid d-block d-lg-none" data-entity-type="file"
        data-entity-uuid="f4724be4-3baa-430a-a1d1-558e27c6622c" height="auto"
        src="/wp-content/themes/yes.my/images/kasiup/kasimobilechart-mobile-en_01.jpg" width="100%" />
    <div class="bnr-body position-absolute w-100">
        <h1 class="text-white text-center h1-sm mt-3 mt-lg-5">Why this is the best</h1>
    </div>

    <div class="text-center readthefaq"><a href="https://www.yes.my/faq/campaign 
"><img alt="" class="img-fluid" data-entity-type="" data-entity-uuid=""
                src="/wp-content/themes/yes.my/images/kasiup/readthefaq.png" /></a>
    </div>
</section>

<section class="d-flex position-relative align-items-start"><img alt="" class="img-fluid d-none d-lg-block"
        data-entity-type="" data-entity-uuid=""
        src="/wp-content/themes/yes.my/images/kasiup/kasihupnew_05.jpg" /> <img
        alt="" class="img-fluid d-block d-lg-none" data-entity-type="" data-entity-uuid="" height="auto"
        src="/wp-content/themes/yes.my/images/kasiup/sm/kasimobile_04.jpg"
        width="100%" />
    <div class="bnr-body position-absolute w-100">
        <!--  -->
        <div class="bnr-body-w">
            <h1 class="text-white text-center h1-sm mt-5 mb-4">Why this is the best<br />
                Referral Program ever</h1>

            <div class="li-wrapper">
                <ul class="f-list">
                    <li>
                        <div class="li-img d-none d-lg-block"><img alt="" class="img-fluid" data-entity-type=""
                                data-entity-uuid=""
                                src="/wp-content/themes/yes.my/images/kasiup/s3_2.png" />
                        </div>

                        <div class="li-txt">
                            <div class="li-num">1</div>

                            <div class="li-img d-block d-lg-none"><img alt="" class="img-fluid" data-entity-type=""
                                    data-entity-uuid=""
                                    src="/wp-content/themes/yes.my/images/kasiup/s3_2.png" />
                            </div>

                            <div class="li-para">
                                <h4><b>COLD HARD CASH</b></h4>

                                <p class="text-white">Not points and not rebates.<br />
                                    This is the real deal.</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="li-img d-none d-lg-block"><img alt="" class="img-fluid" data-entity-type=""
                                data-entity-uuid=""
                                src="/wp-content/themes/yes.my/images/kasiup/s3_1.png" />
                        </div>

                        <div class="li-txt">
                            <div class="li-num">2</div>

                            <div class="li-img d-block d-lg-none"><img alt="" class="img-fluid" data-entity-type=""
                                    data-entity-uuid=""
                                    src="/wp-content/themes/yes.my/images/kasiup/s3_1.png" />
                            </div>

                            <div class="li-para">
                                <h4><b>EVERYONE GETS MONEY</b></h4>

                                <p class="text-white">You get money, and your<br />
                                    friend gets money too.</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="li-img d-none d-lg-block"><img alt="" class="img-fluid" data-entity-type=""
                                data-entity-uuid=""
                                src="/wp-content/themes/yes.my/images/kasiup/s3_3.png" />
                        </div>

                        <div class="li-txt">
                            <div class="li-num">3</div>

                            <div class="li-img d-block d-lg-none"><img alt="" class="img-fluid" data-entity-type=""
                                    data-entity-uuid=""
                                    src="/wp-content/themes/yes.my/images/kasiup/s3_3.png" />
                            </div>

                            <div class="li-para">
                                <h4><b>EARN INSTANTLY</b></h4>

                                <p class="text-white">Start earning instantly. Zero<br />
                                    start-up cost. No drawn out<br />
                                    processes. Just sign up, refer<br />
                                    and earn.</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="li-img d-none d-lg-block"><img alt="" class="img-fluid" data-entity-type=""
                                data-entity-uuid=""
                                src="/wp-content/themes/yes.my/images/kasiup/s3_4.png" />
                        </div>

                        <div class="li-txt">
                            <div class="li-num">4</div>

                            <div class="li-img d-block d-lg-none"><img alt="" class="img-fluid" data-entity-type=""
                                    data-entity-uuid=""
                                    src="/wp-content/themes/yes.my/images/kasiup/s3_4.png" />
                            </div>

                            <div class="li-para">
                                <h4><b>UNLIMITED REFERRALS</b></h4>

                                <p class="text-white">Keep on referring, and keep<br />
                                    on earning. Betul-betul-betul<br />
                                    <span class="text-blue"><b>Unlimited.</b></span>
                                </p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!--  -->
    </div>
</section>

<section class="d-flex position-relative align-items-start"><img alt="" class="img-fluid d-none d-lg-block"
        data-entity-type="" data-entity-uuid=""
        src="/wp-content/themes/yes.my/images/kasiup/kasihupnew_07.jpg" /> <img
        alt="" class="img-fluid d-block d-lg-none" data-entity-type="" data-entity-uuid="" height="auto"
        src="/wp-content/themes/yes.my/images/kasiup/sm/kasimobile_05.jpg"
        width="100%" />
    <div class="bnr-body position-absolute w-100">
        <div class="position-absolute last-section">
            <h2 class="text-lightblue">Whatchu<br />
                waiting for?<br />
                <b>#KasiUpLah</b>
            </h2>

            <div><a class="d-block" href="https://appstore.yes.my/ywos" id="registerbuttonkaisup"><img alt=""
                        class="img-fluid" data-entity-type="file"
                        data-entity-uuid="51b176e8-27a4-48b2-b798-0deb0ea3f180"
                        src="/wp-content/themes/yes.my/images/kasiup/rg.png" width="200" /></a></div>
        </div>
    </div>
</section>

<section class="d-none d-lg-flex position-relative footer-section">
    <div class="bnr-body w-100">
        <div class="bnr-body-f pt-4">
            <div class="row align-items-center">
                <div class="col-lg-4" id="footerlink">
                    <p class="text-white"><b>Unlimited</b> Duit enables you to generate side income by using the
                        MyYes app and referring <b>yes!</b></p>

                    <div class="d-flex text-white">
                        <p class="small pr-2"><b>www.yes.my</b></p>

                        <p class="small pr-2">#kasiup</p>

                        <p class="small">#yesitgetsbetter</p>
                    </div>
                </div>

                <div class="col-lg-3"><img alt="" class="img-fluid" data-entity-type="" data-entity-uuid=""
                        src="/wp-content/themes/yes.my/images/kasiup/yes.png" />
                </div>

                <div class="col-lg-5">
                    <div class="d-flex flex-column">
                        <div class="W-100"><a href="https://onelink.to/6e8tqc" target="_blank"><img alt=""
                                    class="img-fluid" data-entity-type="" data-entity-uuid=""
                                    src="/wp-content/themes/yes.my/images/kasiup/footer-card-image.png" /></a>
                        </div>

                        <div class="d-flex W-100 justify-content-center"><a href="https://onelink.to/6e8tqc"><img
                                    alt="" class="img-fluid ml-n2 mr-2" data-entity-type="" data-entity-uuid=""
                                    src="/wp-content/themes/yes.my/images/kasiup/app store.png"
                                    width="100" /></a> <a href="https://onelink.to/6e8tqc"> <img alt=""
                                    class="img-fluid" data-entity-type="" data-entity-uuid=""
                                    src="/wp-content/themes/yes.my/images/kasiup/playstore.png"
                                    width="100" /></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="position-relative footer-section d-flex d-lg-none" id="footerlinksm">
    <div class="bnr-body w-100">
        <div class="bnr-body-f pt-4">
            <div class="row align-items-center">
                <div class="col-6"><img alt="" class="img-fluid" data-entity-type="" data-entity-uuid=""
                        height="auto"
                        src="/wp-content/themes/yes.my/images/kasiup/yes.png"
                        width="100%" /></div>

                <div class="col-6 footertxt pl-0">
                    <p class="text-white text-center px-2 "><b>Unlimited</b> Duit enables you to generate side
                        income by using the MyYes app and referring <b>yes!</b></p>

                    <div class="d-flex text-white mt-3 justify-content-center px-2 flex-wrap">
                        <p class="small pr-2 mb-0"><b>www.yes.my</b></p>

                        <p class="small pr-2 mb-0 text-white">#kasiup</p>

                        <p class="small  mb-0 text-white">#yesitgetsbetter</p>
                    </div>

                    <div class="d-flex flex-column footerimg">
                        <div class="W-100"><a href="https://onelink.to/6e8tqc" target="_blank"><img alt=""
                                    class="img-fluid" data-entity-type="" data-entity-uuid=""
                                    src="/wp-content/themes/yes.my/images/kasiup/footer-card-image.png" /></a>
                        </div>

                        <div class="d-flex W-100 justify-content-center"><a
                                href="https://apps.apple.com/us/app/myyes4g/id1321262375"><img alt=""
                                    class="img-fluid ml-n2 mr-2" data-entity-type="" data-entity-uuid=""
                                    src="/wp-content/themes/yes.my/images/kasiup/app store.png"
                                    width="100" /></a> <a href="https://onelink.to/6e8tqc"> <img alt=""
                                    class="img-fluid" data-entity-type="" data-entity-uuid=""
                                    src="/wp-content/themes/yes.my/images/kasiup/playstore.png"
                                    width="100" /></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>