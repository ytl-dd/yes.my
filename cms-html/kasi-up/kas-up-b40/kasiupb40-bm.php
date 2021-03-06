<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<title>broadband</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css"
    integrity="sha512-oc9+XSs1H243/FRN9Rw62Fn8EtxjEYWHXRvjS43YtueEewbS6ObfXcJNyohjHqVKFPoXXUxwc+q1K7Dee6vv9g=="
    crossorigin="anonymous" />

<link rel="stylesheet" type="text/css" href="https://www.yes.my/sites/default/files/inline-images/slick.css" />
<link rel="stylesheet" type="text/css" href="https://www.yes.my/sites/default/files/inline-images/theme.css" />
<style>
@font-face {
    font-family: "Hanson";
    src: url("https://www.yes.my/sites/default/files/inline-images/fonts/HansonBold.eot");
    src: url("https://www.yes.my/sites/default/files/inline-images/fonts/HansonBold.eot?#iefix") format("embedded-opentype"),
        url("https://www.yes.my/sites/default/files/inline-images/fonts/HansonBold.woff2") format("woff2"),
        url("https://www.yes.my/sites/default/files/inline-images/fonts/HansonBold.woff") format("woff"),
        url("https://www.yes.my/sites/default/files/inline-images/fonts/HansonBold.ttf") format("truetype"),
        url("https://www.yes.my/sites/default/files/inline-images/fonts/HansonBold.svg#HansonBold") format("svg");
    font-weight: bold;
    font-style: normal;
    font-display: swap;
}

@font-face {
    font-family: "VAG Rounded";
    src: url("https://www.yes.my/sites/default/files/inline-images/fonts/VAGRoundedBT-Regular.eot");
    src: url("https://www.yes.my/sites/default/files/inline-images/fonts/VAGRoundedBT-Regular.eot?#iefix") format("embedded-opentype"),
        url("https://www.yes.my/sites/default/files/inline-images/fonts/VAGRoundedBT-Regular.woff2") format("woff2"),
        url("https://www.yes.my/sites/default/files/inline-images/fonts/VAGRoundedBT-Regular.woff") format("woff"),
        url("https://www.yes.my/sites/default/files/inline-images/fonts/VAGRoundedBT-Regular.ttf") format("truetype"),
        url("https://www.yes.my/sites/default/files/inline-images/fonts/VAGRoundedBT-Regular.svg#VAGRoundedBT-Regular") format("svg");
    font-weight: 600;
    font-style: normal;
    font-display: swap;
}

@font-face {
    font-family: "VAGRoundedBold";
    src: url("https://www.yes.my/sites/default/files/inline-images/fonts/VAG-Rounded-Bold.otf");
    src: url("https://www.yes.my/sites/default/files/inline-images/fonts/VAG-Rounded-Bold.ttf");
}

@font-face {
    font-family: "VAG Rounded Std";
    src: url("https://www.yes.my/sites/default/files/inline-images/fonts/VAGRoundedStd-Light.eot");
    src: url("https://www.yes.my/sites/default/files/inline-images/fonts/VAGRoundedStd-Light.eot?#iefix") format("embedded-opentype"),
        url("https://www.yes.my/sites/default/files/inline-images/fonts/VAGRoundedStd-Light.woff2") format("woff2"),
        url("https://www.yes.my/sites/default/files/inline-images/fonts/VAGRoundedStd-Light.woff") format("woff"),
        url("https://www.yes.my/sites/default/files/inline-images/fonts/VAGRoundedStd-Light.ttf") format("truetype"),
        url("https://www.yes.my/sites/default/files/inline-images/fonts/VAGRoundedStd-Light.svg#VAGRoundedStd-Light") format("svg");
    font-weight: 100;
    font-style: normal;
    font-display: swap;
}

body {
    font-family: "VAG Rounded Std";
}

.text-lightblue {
    color: #04a6e1;
}

.bg-darkblue {
    background-color: #003ab0;
}

.darkblue {
    color: #003ab0;
}

.text-pink {
    color: #cf5397;
}

.bg-pink {
    background-color: #cf5397;
}

/*  */

/* abstract */
.button_bnr {
    line-height: 30px;
    height: 50px;
    line-height: 55px;
    width: 220px;
    display: flex !important;
    justify-content: CENTER;
}

.button_bnr_footer {
    line-height: 30px;
    height: 50px;
    line-height: 55px;
    display: flex !important;
    justify-content: CENTER;
}

.btnborder {
    border-radius: 40px;
    border: 0;
}

.hanson {
    font-family: "Hanson" !important;
}

.vlight {
    font-family: "VAG Rounded Std" !important;
    font-weight: 100;
}

.Vagbold {
    font-weight: 900;
}

.pointer {
    cursor: pointer;
}

.text-decoration-0:hover {
    text-decoration: none;
}

.smallest {
    font-size: 12px;
}

.btn-pink {
    width: 360px;
    -webkit-box-shadow: 3px 3px 3px 1px #555;
    box-shadow: 3px 3px 3px 1px #555;
}

.smallest {
    font-size: 10px;
    text-align: center;
}

.d-view {
    display: flex;
}

.m-view {
    display: none;
}

body .nav-main {
    z-index: 99999999;
}

.dropdown-toggle::after {
    color: white;
}

.dropdown-menu.show {
    width: 94%;
}

/*  */

.bnrtext {
    font-size: 18px;
    font-family: "VAG Rounded Std";
    bottom: 13%;
    left: -20%;
}

.bnrtext1 {
    font-size: 18px;
    font-family: "VAG Rounded Std";
    bottom: 13%;
}

.bnrtext3 {
    font-size: 18px;
    font-family: "VAG Rounded Std";
    bottom: 45%;
    left: -22%;
}

.bnrtext4 {
    font-size: 18px;
    font-family: "VAG Rounded Std";
    bottom: 35%;
}

.s_3_btnwrapper {
    top: 140px;
    left: 90%;
    width: 220px;
}

.s_3_btnwrapper a {
    display: flex !important;
    justify-content: CENTER;
}

.d_terms {
    position: absolute;
    width: 100%;
    text-align: center;
    font-size: 14px;
    color: white !important;
    bottom: 10%;
}

.bnrtext4 h2 {
    font-size: 40px;
    font-weight: bold !important;
    font-family: "VAG Rounded Std";
}

.d_terms a {
    color: white !important;
}

@media (max-width: 1400px) {
    .bnrtxt {
        font-size: 30px;
    }
}

@media (max-width: 1200px) {
    .bnrtext {
        bottom: 8%;
    }

    .bnrtext1 {
        bottom: 13%;
    }

    .bnrtext3 {
        left: -23%;
        bottom: 43%;
    }

    .s_3_btnwrapper {
        top: 120px;
    }

    .bnrtext4 {
        bottom: 35%;
    }
}

@media (max-width: 991px) {
    .bnrtext3 {
        left: -20%;
        bottom: 40%;
    }

    .bnrtext4 h2 {
        font-size: 20px;
    }
}

@media (max-width: 768px) {
    .s_3_btnwrapper {
        top: 180%;
        left: 80%;
    }
}

@media (max-width: 650px) {
    .bnrtext {
        bottom: 2%;
    }

    .bnrtext1 {
        bottom: 5%;
    }

    .bnrtext3 {
        left: -18%;
        bottom: 33%;
    }

    .s_3_btnwrapper {
        top: 70px;
    }

    .bnrtext4 {
        bottom: 35%;
    }
}
</style>

<style>
.popover {
    z-index: 9999999999999;
}

@media (max-width: 600px) {

    .popover {
        z-index: 8;
    }

    .d-view {
        display: none;
    }

    .m-view {
        display: block;
    }

    .bnrtext {
        bottom: 13%;
        left: 0;
    }

    .button_bnr {
        height: 55px;
        line-height: 59px;
        width: 330px;
        font-size: 26px;
    }

    .m-text {
        font-size: 17px;
    }

    .bnrtext1 {
        bottom: 8%;
    }

    .bnrtext3 {
        left: 0;
        bottom: 20%;
        flex-direction: column;
    }

    .s_3_btnwrapper {
        left: auto;
        position: relative !important;
        width: 100%;
        align-items: center;
        justify-content: center;
        display: flex;
        top: 0;
    }

    .bnrtext4 {
        bottom: 45%;
    }

    .bnrtext4 h2 {
        font-size: 40px;
        font-weight: bold;
    }

    .button_bnr {
        margin-top: 20px;
    }

    .termsncond {
        position: absolute;
        bottom: -50%;
        color: white !important;
        font-size: 17px;
    }

    .termsncond a {
        color: white !important;
    }
}

@media (max-width: 375px) {}

.dropdownMenuButton {
    display: none;
}

.slick-dots li.slick-active button {
    background-color: #003ab0;
}

body .nav-mobile {
    z-index: 999999999;
}
</style>





<section class="position-relative d-flex align-items-start">
    <img class="img-fluid d-view"
        src="/wp-content/themes/yes.my/images/kasiupb40/bm/kasihup_b40__BM_01.jpg" alt="" />
    <img class="img-fluid m-view"
        src="/wp-content/themes/yes.my/images/kasiupb40/bm/kasihupb40__Mobile_BM_01.jpg" alt="" />

    <!--  -->
    <div class="position-absolute d-flex align-items-center justify-content-center w-100 bnrtext">
        <div class="d-flex align-items-center justify-content-center w-100 text-white text-center font_normal">
            <a class="btnborder d-flex btnborder bg-pink text-white button_bnr Vagbold"
                href="https://appstore.yes.my/ywos/signup" target="_blank">DAPATKAN SEKARANG</a>
        </div>
    </div>
    <!--  -->
</section>

<!-- 2 -->

<section class="position-relative d-flex align-items-start">
    <img class="img-fluid d-view"
        src="/wp-content/themes/yes.my/images/kasiupb40/bm/kasihup_b40__BM_02.jpg" alt="" />
    <img class="img-fluid m-view"
        src="/wp-content/themes/yes.my/images/kasiupb40/bm/kasihupb40__Mobile_BM_03.jpg" alt="" />

    <!--  -->
    <div class="position-absolute d-flex align-items-center justify-content-center w-100 bnrtext1">
        <div class="d-flex align-items-center justify-content-center w-100 text-white text-center font_normal">
            <div class="d-flex flex-column">
                <p class="m-text m-0v text-white">
                    Nikmati data 4G sehingga <b>40GB percuma!</b>

                </p>
                <p class="m-text m-0 text-white">
                    Ekslusif bagi semua <b>rakyat B40</b> hanya dengan <b>yes.</b>
                </p>
            </div>
        </div>
    </div>
    <!--  -->
</section>

<!-- end 2 -->


<!-- 35 -->

<section class="position-relative d-flex align-items-start">
    <img class="img-fluid d-view"
        src="/wp-content/themes/yes.my/images/kasiupb40/bm/40-GBfor-B40-Landing-Page-BM.jpg" alt="" />
    <img class="img-fluid m-view"
        src="/wp-content/themes/yes.my/images/kasiupb40/bm/40-GBfor-B40-Landing-Page-Mobile-BM.jpg"
        alt="" />

    <!--  -->
    <div class="position-absolute d-flex align-items-center justify-content-center w-100 bnrtext3">
        <div class="d-flex align-items-center justify-content-center w-100 text-white text-center font_normal">
            <div class="d-flex flex-column align-items-md-start">
                <p class="m-0 m-text text-white">Dapatkan kad SIM <b>percuma</b> terus ke rumah anda.
                </p>
                <p class="m-0 m-text text-white">
                    Tak perlu keluar rumah pun!</b>
                </p>
            </div>
        </div>

        <div class="position-absolute s_3_btnwrapper">
            <a class="btnborder d-flex btnborder bg-pink text-white button_bnr Vagbold"
                href="https://appstore.yes.my/ywos/signup" target="_blank">DAPATKAN SEKARANG</a>
        </div>

        <div class="flex-column termsncond m-view">
            <a href="/tnc/ongoing-campaigns-tnc" target="_blank"
                class="m-0 vlight ">*Tertakluk pada terma dan syarat</a>

        </div>
    </div>
    <div class="flex-column d_terms d-view">
        <a href="/tnc/ongoing-campaigns-tnc" target="_blank" class="m-0 vlight ">*Tertakluk
            pada terma dan syarat</a>

    </div>
    <!--  -->
</section>

<!-- end 35 -->
<!-- 4 -->
<section class="position-relative d-flex align-items-start">
    <img class="img-fluid d-view"
        src="/wp-content/themes/yes.my/images/kasiupb40/bm/kasihup_b40__BM_04.jpg" alt="" />
    <img class="img-fluid m-view"
        src="/wp-content/themes/yes.my/images/kasiupb40/bm/kasihupb40__Mobile_BM_06.jpg" alt="" />

    <!--  -->
    <div class="position-absolute d-flex align-items-center justify-content-center w-100 bnrtext4">
        <div
            class="d-flex align-items-center flex-column justify-content-center w-100 text-white text-center font_normal">
            <h2 style="font-weight: 900;">
                Ingin tahu <br class="m-view" />
                jika anda layak? <br class="m-view" />
                Semak sekarang!
            </h2>
            <a href="https://bpr.hasil.gov.my/LogMasuk.aspx" target="_blank"
                class="btnborder d-flex btnborder bg-pink text-white button_bnr Vagbold button_bnr_footer">SEMAK
                KELAYAKAN</a>
        </div>
    </div>
    <!--  -->
</section>

<!-- end 4 -->

<!-- footer -->






<script src="https://code.jquery.com/jquery-3.5.1.js"
    integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
    integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous">
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"
    integrity="sha512-XKa9Hemdy1Ui3KSGgJdgMyYlUg1gM+QhL6cnlyTe2qzMCYm4nAZ1PsVerQzTTXzonUR+dmswHqgJPuwCq1MaAg=="
    crossorigin="anonymous"></script>

<script type="text/javascript" src="https://www.yes.my/sites/default/files/inline-images/slick.js"></script>
<script type="text/javascript"
    src="https://alya-staging.azurewebsites.net/staging-f/yes-testing/broadband/onthego/en/testing.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        if ($(window).width() < 1201) {
            $("#slidermain").addClass("carousel");
        }

        if ($(window).width() > 1200) {
            $("#slidermain").removeClass("carousel");
        }

        if ($(window).width() < 1201) {
            $("#slidermain1").addClass("carousel1");
        }

        if ($(window).width() > 1200) {
            $("#slidermain1").removeClass("carousel1");
        }
        $(window).resize(function() {
            // history.go(0)
        });
        $(".carousel").slick({
            speed: 500,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: false,
            autoplaySpeed: 2000,
            dots: true,
            arrows: false,
            responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                },
            }, ],
        });

        $(".carousel1").slick({
            speed: 500,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: false,
            autoplaySpeed: 2000,
            dots: true,
            arrows: false,
            responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                },
            }, ],
        });
    });

    $(document).ready(function() {
        $("#drop_toggle").click(function() {
            $(".dropdownMenuButton").toggle();
        });
    });
</script>