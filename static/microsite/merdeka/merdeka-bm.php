<?php include '../header.php' ?>


<style type="text/css">
    body main {
        overflow-x: hidden;
    }
    
    main {
        color: #ffffff
    }
    
    .yes-font {
        font-size: 115%;
        font-weight: bold
    }
    
    .text-white {
        color: #ffffff
    }
    
    .text-blue {
        color: #00A1E0
    }
    
    .lock-ps {
        position: relative
    }
    
    @media (min-width:992px) {
        .lock-ps .content {
            width: 100%;
            position: absolute;
            top: 55%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
    }
    
    #sec-01 .cp-01 {
        font-size: 40px
    }
    
    .btn-01 {
        display: inline-block;
        font-size: 20px;
        width: 100%;
        background-color: #0038B3;
        color: #ffffff !important;
        border-radius: 50px;
        padding: 15px;
        text-align: center;
        cursor: pointer
    }
    
    .btn-01:hover {
        background-color: #033093;
    }
    
    .btn-01:active {
        background-color: #012677;
    }
    
    .btn-01.pink {
        background-color: #F00086
    }
    
    .btn-01.pink:hover {
        background-color: #d00174
    }
    
    .btn-01.pink:active {
        background-color: #a2025b
    }
    
    .btn-01.tuntut {
        width: 280px;
        letter-spacing: 2px
    }
    
    .img-01 {
        max-width: 300px
    }
    
    .img-02 {
        max-width: 850px
    }
    
    .sec-content {
        background-image: url('/wp-content/themes/yes.my/images/prihatin/bg-02.jpg');
        background-size: 100%;
        background-repeat: no-repeat;
        background-position: center top;
        background-color: #2db1e1;
        padding-top: 50px
    }
    
    @media (max-width:1600px) {
        #sec-01 .cp-01 {
            font-size: 30px
        }
        #sec-01 .btn-ar {
            max-width: 900px
        }
        .img-01 {
            max-width: 230px
        }
        .img-02 {
            max-width: 550px
        }
        .arrow-down-img {
            width: 30px
        }
        .btn-01.tuntut {
            font-size: 16px;
            margin: 0 auto;
            width: 230px
        }
    }
    
    @media (max-width:991px) {
        #sec-01 {
            background-image: url(/wp-content/themes/yes.my/images/prihatin/bg-01-m.jpg);
            background-size: 100%;
            background-repeat: no-repeat;
            background-position: center top;
            background-color: #00a1e1;
            padding: 70px 0 0px
        }
        #sec-01 .btn-ar {
            max-width: 310px
        }
        #sec-01 .btn-01 {
            font-size: 14px;
            padding: 10px 15px
        }
        #sec-01 .cp-01 {
            font-size: 20px
        }
        .sec-content {
            background-image: url(/wp-content/themes/yes.my/images/prihatin/bg-02-m.jpg), url(/wp-content/themes/yes.my/images/prihatin/bg-m_01.jpg), url(/wp-content/themes/yes.my/images/prihatin/bg-m_03.jpg), url(/wp-content/themes/yes.my/images/prihatin/bg-m_05.jpg), url(/wp-content/themes/yes.my/images/prihatin/bg-m_07.jpg), url(/wp-content/themes/yes.my/images/prihatin/bg-m_08.jpg), url(/wp-content/themes/yes.my/images/prihatin/bg-m_10.jpg), url(/wp-content/themes/yes.my/images/prihatin/bg-m_12.jpg), url(/wp-content/themes/yes.my/images/prihatin/bg-m_15.jpg);
            background-size: 100%;
            background-repeat: no-repeat;
            background-position: center top, center top 10%, center top 20%, center top 30%, center top 40%, center top 50%, center top 60%, center top 70%, center top 80%;
            background-color: #2db1e1;
        }
    }
    
    .acd-pd {
        padding-top: 120px
    }
    
    .acd-pd .cp-01 {
        font-size: 25px
    }
    
    .acd-pd .cp-02 {
        font-size: 45px;
        line-height: 55px;
    }
                                
    .acd-pd .tag {
        background-color: #ffffff;
        border-radius: 10px;
        padding: 10px;
        color: #00A1E0;
        font-weight: bold;
        text-align: center;
        line-height: 1.2
    }
    
    .acd-pd .tag.xs {
        padding: 10px 5px;
        font-size: 11px
    }

    .main-ttl {
        font-size: 35px;
    }
    
    @media (max-width:991px) {
        .main-ttl {
            font-size: 25px
        }
    }

    /* Phase 2 */
    .layer-btnScrollDown { margin-top: 30px; text-align: center; }
    .layer-btnScrollDown a { bottom: auto; }
    @media (max-width: 991px) {
        #sec-01 {
            background: none;
            padding: 0;
        }
        .acd-pd .cp-01 {
            margin-top: 0;
        }
    }
    
    .bg-pink {
        background-color: #F00086;
        display: inline-block;
        font-weight: 700;
        line-height: 16px;
        padding: 10px 15px;
    }
    
    .layer-bgContent {
        background-image: url('/wp-content/themes/yes.my/images/merdeka-63/microsite/bg.jpg');
        background-position: center top;
        background-repeat: repeat-y;
        background-size: cover;
    }
    
    .span-perMonth {
        display: block;
        font-size: 18px;
        font-weight: 700;
    }
    
    .span-perMonth span.rounded {
        border-radius: 10px !important;
        color: #04A4DF;
        float: left;
        font-size: 35px;
        font-weight: 700;
        line-height: 35px;
        margin: 0 10px 0 0;
        padding: 10px 10px 5px;
    }
    
    .span-perMonth span.clear {
        clear: both;
        display: block;
    }
    
    .layer-bgPrihatin2 .acd-pd .tag.xs {
        padding-left: 0px;
        padding-right: 0px;
    }
    
    .layer-bgPrihatin2 .ft {
        background: none;
    }
    
    .container-fluid {
        max-width: 1440px;
    }

    .tag-bgWhite { background-color: #FFF; border-radius: 8px; color: #00A6DE; display: inline-block; font-size: 40px; font-weight: 700; line-height: 38px; padding: 10px 15px 1px; }
    .layer-pink { background-color: #DA52A8; border-radius: 25px; display: inline-block; float: right; margin: 30px -50px 0 0; padding: 20px 90px 20px 30px; }
    .layer-pink ul { margin: 0; }
    .layer-pink ul li { font-size: 25px; font-weight: 700; margin: 0; text-align: left; text-transform: uppercase; }
    .layer-pink ul li:last-child { margin-bottom: 0; }
    .img-phone { margin-left: -60px; margin-top: -30px; width: 130%; }
    
    @media (max-width: 991px) {
        #sec-01 { background: url('/wp-content/themes/yes.my/images/merdeka-63/microsite/map.png') center 120px no-repeat; background-size: contain; }
        .acd-pd.acd-pd-mobile { padding-top: 50px; }
        .acd-pd .cp-02 { font-size: 25px; line-height: 35px; }
        .text-center-mobile { text-align: center; }
        .acd-pd .tag.xs { padding: 6px 5px; }
        .tag-bgWhite { border-radius: 4px; font-size: 25px; line-height: 22px; padding: 5px 10px 1px; }
        .layer-pink { border-radius: 15px; float: none; margin-right: 0; padding: 15px 20px 15px 15px; }
        .layer-pink ul { padding-left: 20px; }
        .layer-pink ul li { font-size: 14px; }
        .img-phone { margin-left: -30px; width: 140%; }
        .img-phone2 { max-width: 80%; }
    }
</style>


<!-- Content STARTS -->
<div class="layer-bgContent">
    <!-- Section Main STARTS -->
    <section class="d-block text-white acd-pd" id="sec-01">
        <div class="content acd-pd">
            <div class="container">
                <div class="row">
                    <div class="col-7 col-lg-8 text-center">
                        <img class="d-block d-lg-none" src="/wp-content/themes/yes.my/images/merdeka-63/microsite/headline-bm-mobile.png" width="100%" />
                        <img class="d-none d-lg-block" src="/wp-content/themes/yes.my/images/merdeka-63/microsite/headline-bm.png" width="100%" />
                        <div class="layer-pink">
                            <ul>
                                <li>Deposit Terendah</li>
                                <li>Data Terbanyak</li>
                                <li>Pelan Termurah</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-5 col-lg-4">
                        <img class="d-block d-lg-none img-phone" src="/wp-content/themes/yes.my/images/merdeka-63/microsite/phone-mobile.png" width="100%" />
                        <img class="d-none d-lg-block img-phone" src="/wp-content/themes/yes.my/images/merdeka-63/microsite/phone.png" width="100%" />
                    </div>
                </div>
                <div class="layer-btnScrollDown">
                    <a href="#samsung" class="btn-scroll-down"><img alt="" class="arrow-down-img" src="/wp-content/themes/yes.my/images/prihatin/phase-2/Down-arrow.png" /></a>
                </div>
            </div>
        </div>
    </section>
    <!-- Section Main ENDS -->

    <!-- Section Samsung STARTS -->
    <section class="d-block text-white">
        <div class="acd-pd acd-pd-mobile" id="samsung">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 text-center">
                        <div class="cp-02 d-lg-none mb-5">DAPATKAN <b>SAMSUNG GALAXY A02</b> PADA HANYA <span class="tag-bgWhite">RM1</span></div>
                        <img class="img-phone2" src="/wp-content/themes/yes.my/images/merdeka-63/microsite/handphone.png" width="100%" />
                    </div>
                    <div class="col-lg-7">
                        <div class="cp-02 d-none d-lg-block">DAPATKAN <b>SAMSUNG GALAXY A02</b> PADA HANYA <span class="tag-bgWhite">RM1</span></div>
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="ico-ar mb-4">
                                    <div class="row justify-content-center">
                                        <div class="col-lg col-4 mt-3">
                                            <img alt="" src="/wp-content/themes/yes.my/images/prihatin/icon-Telefon-Pintar.png" width="100%">
                                            <div class="tag xs mt-2">Telefon Pintar <br />Hanya RM1</div>
                                        </div>
                                        <div class="col-lg col-4 mt-3">
                                            <img alt="" src="/wp-content/themes/yes.my/images/prihatin/phase-2/icon-free-data-100gb.png" width="100%">
                                            <div class="tag xs mt-2 pl-0 pr-0">100GB Data + <br />Data Tanpa Had</div>
                                        </div>
                                        <div class="col-lg col-4 mt-3">
                                            <img alt="" src="/wp-content/themes/yes.my/images/prihatin/phase-2/icon-Free-Delivery-BM.png" width="100%">
                                            <div class="tag xs mt-2">Penghantaran <br />Percuma</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cp-03 mb-4 pt-3">Dengan <span class="yes-font">YES</span> POSTPAID MERDEKA BUNDLE RM1, dapatkan telefon pintar baharu pada hanya RM1 dihantar terus ke rumah anda secara percuma! Nikmati juga 100GB data setiap bulan selama 12 bulan.</div>
                        <div class="text-center-mobile">
                            <a class="btn-01 tuntut" href="https://appstore.yes.my/ywos/signup" target="_blank" rel="noopener"><b>DAPATKAN SEKARANG</b></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section Samsung ENDS -->

    <!-- Section Pick STARTS -->
    <section class="d-block text-white">
        <div class="acd-pd acd-pd-mobile pb-5" id="table-list">
            <div class="container">
                <div class="main-ttl text-center mb-5">Pilih <span class="yes-font">yes</span> Postpaid Merdeka Bundle RM 1 anda</div>
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <img class="d-block d-lg-none" src="/wp-content/themes/yes.my/images/merdeka-63/microsite/table-bm-mobile.png" width="100%" />
                        <img class="d-none d-lg-block" src="/wp-content/themes/yes.my/images/merdeka-63/microsite/table-bm.png" width="100%" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section Pick ENDS -->
</div>
<!-- Content ENDS -->


<script type="text/javascript">
    $(document).ready(function () {
        $('.btn-scroll-down').on('click', function () {
            var sectionID   = $(this).attr('href');
            jumpToSection(sectionID);
        });
    });

    function jumpToSection (sectionID) {
        var targetOffset    = $(sectionID).offset().top;
        var navHeight       = ($(window).width() > 1024) ? 100 : 50;
        var offsetVal       = targetOffset - navHeight;
        $('html, body').animate({
            scrollTop: offsetVal 
        }, 1000);
        return false;
    }
</script>


<?php include '../footer.php' ?>