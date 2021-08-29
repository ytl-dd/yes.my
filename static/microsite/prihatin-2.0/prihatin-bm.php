<?php include '../header.php' ?>


<style type="text/css">
    #m-language .modal-content {
        border: 3px solid #F00086;
        border-radius: 20px;
        padding: 15px
    }
    
    #m-language .modal-content .choose {
        font-size: 20px
    }
    
    #m-language .modal-content .btn {
        width: 100%;
        border-radius: 50px
    }
    
    @media (max-width:991px) {
        #m-language .modal-content {
            max-width: 300px;
            margin: 0 auto;
        }
    }
    
    .none01 {
        display: none
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
        font-size: 35px
    }
    
    .acd-pd .cp-03 {
        font-size: 20px
    }
    
    .acd-pd .tag {
        background-color: #ffffff;
        border-radius: 15px;
        padding: 10px;
        color: #00A1E0;
        font-weight: bold;
        text-align: center;
        line-height: 1.2
    }
    
    .acd-pd .tag.xs {
        padding: 10px 5px;
        font-size: 14px
    }
    
    @media (max-width:991px) {
        .acd-pd {
            padding-top: 70px;
            text-align: center
        }
        .acd-pd .phone {
            max-width: 300px;
            margin: 0 auto
        }
        .acd-pd .ico-ar {
            max-width: 300px;
            margin: 0 auto
        }
        .acd-pd .cp-01 {
            font-size: 20px;
            margin-top: -30px
        }
        .acd-pd .cp-02 {
            font-size: 30px
        }
        .acd-pd .cp-03 {
            font-size: 18px
        }
    }
    
    #table-list .tag {
        max-width: 300px
    }
    
    #table-list .table-ar {
        background-color: #ffffff;
        padding: 20px 15px;
        border-radius: 20px;
        box-shadow: 10px 10px 0 #0038B3;
    }
    
    #table-list .table-ar.pink {
        box-shadow: 10px 10px 0 #F00086;
    }
    
    .table-ar table {
        border-collapse: collapse;
        border-spacing: 0;
        width: 100%;
        border: 2px solid #0038B3;
        color: #0038B3;
        font-size: 18px
    }
    
    .table-ar.pink table {
        color: #F00086
    }
    
    .table-ar th,
    .table-ar td {
        text-align: left;
        padding: 10px 20px;
        border: 2px solid #0038B3
    }
    
    .table-ar.pink th,
    .table-ar.pink td {
        border: 2px solid #F00086
    }
    
    .table-ar td:first-child {
        width: 150px
    }
    
    .table-ar .cp-01 {
        font-size: 27px;
        font-weight: bold
    }
    
    .table-ar .cp-02 {
        font-size: 22px;
        font-weight: 800
    }
    
    .table-ar .cp-03 {
        font-size: 16px;
        font-weight: 800
    }
    
    .main-ttl {
        font-size: 35px
    }
    
    .table-ar .table-icon {
        width: 50px
    }
    
    @media (max-width:991px) {
        .main-ttl {
            font-size: 25px
        }
        .table-ar {
            max-width: 350px;
            margin: 0 auto
        }
        .table-ar table {
            font-size: 14px
        }
        .table-ar td:first-child {
            width: 90px;
            padding: 10px 5px
        }
        .table-ar th,
        .table-ar td {
            padding: 10px;
        }
        #table-list .tag {
            max-width: 250px
        }
        .table-ar .cp-01 {
            font-size: 20px;
        }
        .table-ar .cp-02 {
            font-size: 16px;
            line-height: 1.2
        }
        .table-ar .cp-03 {
            font-size: 14px;
        }
        .table-ar .table-tick {
            width: 20px
        }
    }
    
    @media (max-width:320px) {
        .table-ar .cp-02 {
            width: 80px
        }
        .table-ar .table-icon {
            width: 30px
        }
    }
    
    .video-ar {
        background-color: #ffffff;
        padding: 50px;
        border-radius: 20px;
        box-shadow: 2px 5px 10px rgba(0, 0, 0, 0.1);
        color: #04A6E1
    }
    
    .video-ar .cp-01 {
        font-size: 18px;
        font-weight: bold
    }
    
    .video-ar .cp-02 {
        font-size: 30px;
        font-weight: bold;
        line-height: 1
    }
    
    @media (max-width:991px) {
        .video-ar {
            max-width: 350px;
            margin: 0 auto;
            padding: 25px 25px;
        }
        .video-ar .cp-02 {
            font-size: 22px;
        }
    }
    
    .ft {
        padding-bottom: 150px;
        background-size: 100%;
        background-repeat: no-repeat;
        background-position: center bottom;
        background-image: url(/wp-content/themes/yes.my/images/prihatin/bg-03.jpg);
        background-color: #2db1e1;
    }
    
    .ft .xs {
        font-size: 14px
    }
    
    .ft .pns {
        font-size: 20px;
        position: relative
    }
    
    .ft .pns .text {
        position: relative;
        z-index: 2;
        display: inline-block;
        padding: 0 20px
    }
    
    .ft .pns .line {
        height: 1px;
        width: 40%;
        background-color: #ffffff;
        position: absolute;
        left: 0;
        top: 50%;
        display: block
    }
    
    .ft .pns .line2 {
        height: 1px;
        width: 40%;
        background-color: #ffffff;
        position: absolute;
        right: 0;
        top: 50%;
        display: block
    }
    
    @media (max-width:991px) {
        .ft .pns {
            font-size: 16px
        }
        .ft .pns .line2,
        .ft .pns .line {
            width: 25%
        }
        .ft {
            padding-bottom: 50px;
            background-image: url(/wp-content/themes/yes.my/images/prihatin/bg-m-ft.jpg);
        }
    }
    
    .filterDiv {
        display: none;
    }
    
    .filterDiv.show {
        display: block;
    }
    
    .tab-lock {
        position: relative;
        width: 100%;
    }
    
    .tab-lock .click-ar {
        position: absolute;
        width: 33.3%;
        height: 15%;
        top: 0;
        cursor: pointer
    }
    
    .tab-lock .click-ar.one {
        left: 0;
    }
    
    .tab-lock .click-ar.two {
        left: 33.3%;
    }
    
    .tab-lock .click-ar.three {
        left: 66.6%;
    }
    
    @media (max-width:991px) {
        .tab-lock .click-ar {
            height: 6%
        }
        .tab-lock.ekyc .click-ar {
            height: 4%
        }
        .tab-lock {
            max-width: 410px;
            margin: 0 auto
        }
    }


    /* Phase 2 */
    @media (max-width: 991px) {
        #sec-01 { background: none; padding: 0; }
        .acd-pd .cp-01 { margin-top: 0; }
    }
    .bg-pink { background-color: #F00086; display: inline-block; font-weight: 700; line-height: 16px; padding: 10px 15px; }
    .layer-bgPrihatin2 {
        background-image: url('/wp-content/themes/yes.my/images/prihatin/phase-2/bg-desktop-no-shade-no-repeat.jpg');
        background-position: center top;
        background-repeat: repeat-y;
        background-size: cover;
    }
    .span-perMonth { display: block; font-size: 18px; font-weight: 700; }
    .span-perMonth span.rounded { border-radius: 10px !important; color: #04A4DF; float: left; font-size: 35px; font-weight: 700; line-height: 35px; margin: 0 10px 0 0; padding: 10px 10px 5px; }
    .span-perMonth span.clear { clear: both; display: block; }

    .layer-bgPrihatin2 .acd-pd .tag.xs { padding-left: 0px; padding-right: 0px; }
    .layer-bgPrihatin2 .ft { background: none; }

    .container-fluid { max-width: 1440px; }
    #table-list .tag { background-color: transparent; margin-bottom: -22px; max-width: 350px; padding: 0; }
    #table-list .table-ar { border-radius: 0; }
    .table-ar th, .table-ar td { padding: 10px; }
    .table-ar td:first-child { font-size: 14px; line-height: 16px; width: 100px; }
    .table-ar .cp-02 span { display: inline-block; font-size: 12px; font-weight: 300; }
    .table-ar .cp-01 { font-size: 20px; }
    .table-ar .cp-02 { display: inline-block; font-size: 16px; letter-spacing: 0px; line-height: 16px; width: 180px; }
    .table-ar .cp-03 { font-size: 12px; letter-spacing: 0px; line-height: 14px; }
    .table-ar .col-icon img { display: block; margin: 0 auto 5px; }
    .table-ar .col-icon.col-4 img { max-width: 60%; }
    .table-ar .col-icon.col-lg-3 img { max-width: 72%; }
    .table-ar .col-clip .cp-03 { font-size: 10px; line-height: 12px; letter-spacing: 0px;}
    .col-border { border-left: 1px solid #FFF; }

    @media (max-width: 992px) {
        .btn-01 { border-radius: 10px; }
        .text-left-mobile { text-align: left; }
        .col-pull-prepaid { margin-top: -100px; }
        .col-pull-postpaid { margin-top: -80px; }
        .acd-pd#prepaid { padding-top: 0; }
        .col-table { margin-bottom: 50px; }
        .panel-headingImg img { max-width: 80%; }
        .table-ar td:first-child { width: 80px; }
        .table-ar .cp-02 { width: 120px; }
        .table-ar .col-margin { margin-bottom: 15px; }
        .table-ar .col-icon.col-4 img, .table-ar .col-icon.col-6 img { max-width: 100%; }
        .col-border { border-left: 0px; }
    }
</style>


<!-- Prihatin Phase 2 STARTS -->
<div class="layer-bgPrihatin2">
    <!-- Section Main STARTS -->
    <section class="d-block text-white text-center acd-pd" id="sec-01">
        <div class="content acd-pd">
            <div class="container">
                <div class="row">
                    <div class="img-01 mx-auto mb-5"><img alt="" src="/wp-content/themes/yes.my/images/prihatin/comunity.png" width="100%" /></div>
                </div>
                <div class="row align-items-center text-left">
                    <div class="col-lg-6 col-12 mb-3"><img src="/wp-content/themes/yes.my/images/prihatin/phase-2/Banner-BM.png" width="100%" /></div>
                    <div class="col-1 d-lg-none">&nbsp;</div>
                    <div class="col-lg-6 col-10 mb-3">
                        <span class="bg-pink">BAHARU</span>
                        <div class="cp-01 text-white text-left">
                            Ternyata lebih dengan <span class="yes-font">yes</span> : <br />
                            <span class="span-free"><b>Samsung Galaxy A02 PERCUMA</b></span> <br />
                            <span class="span-perMonth">
                                <span class="bg-white rounded">75GB</span>
                                Hanya <br />RM15/bulan
                                <span class="clear">Tiada deposit</span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="cp-01 text-white mb-5"><span class="yes-font">yes</span> prihatin | belajar dari rumah</div>
                    </div>
                </div>
                <div class="btn-ar mx-auto">
                    <div class="row">
                        <div class="col-lg-2"></div>
                        <div class="col-lg-4">
                            <a href="#prepaid" class="btn-01 pink"><b>PRABAYAR</b></a>
                        </div>
                        <div class="col-lg-4 mt-lg-0 mt-3">
                            <a href="#postpaid" class="btn-01"><b>PASCABAYAR</b></a>
                        </div>
                        <div class="col-lg-2"></div>
                    </div>
                </div>
                <br />
                <br />
                <a href="#prepaid" class="btn-scroll-down"><img alt="" class="arrow-down-img" src="/wp-content/themes/yes.my/images/prihatin/phase-2/Down-arrow.png" /></a>
            </div>
        </div>
    </section>
    <!-- Section Main ENDS -->

    <!-- Section Prepaid STARTS -->
    <section class="d-block text-white">
        <div class="acd-pd" id="prepaid">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <p class="panel-headingImg d-lg-none mb-3"><img src="/wp-content/themes/yes.my/images/prihatin/phase-2/heading-prepaid-bm.png" /></p>
                        <div class="phone"><img src="/wp-content/themes/yes.my/images/prihatin/phase-2/Prepaid-Phone-BM.png" width="100%" /></div>
                    </div>
                    <div class="col-lg-8 col-pull-prepaid">
                        <p class="panel-headingImg d-none d-lg-block"><img src="/wp-content/themes/yes.my/images/prihatin/phase-2/heading-prepaid-bm.png" /></p>
                        <div class="cp-01 mb-2 mt-4 text-left-mobile">Tiada deposit. Tiada kontrak. Tiada bayaran.</div>
                        <div class="cp-02 text-left-mobile"><span class="yes-font">yes</span> memberi:</div>
                        <div class="ico-ar mb-4">
                            <div class="row justify-content-center">
                                <div class="col-lg col-6 mt-3">
                                    <img alt="" src="/wp-content/themes/yes.my/images/prihatin/icon-Telefon-Pintar.png" width="100%" />
                                    <div class="tag xs mt-2">YES TCL L7<br />Percuma</div>
                                </div>
                                <div class="col-lg col-6 mt-3">
                                    <img alt="" src="/wp-content/themes/yes.my/images/prihatin/icon-Data-Percuma.png" width="100%" />
                                    <div class="tag xs mt-2">Data <br />Percuma</div>
                                </div>
                                <div class="col-lg col-6 mt-3">
                                    <img alt="" src="/wp-content/themes/yes.my/images/prihatin/icon-bauchar.png" width="100%" />
                                    <div class="tag xs mt-2">Baucer RM50 Shopee</div>
                                </div>
                                <div class="col-lg col-6 mt-3">
                                    <img alt="" src="/wp-content/themes/yes.my/images/prihatin/icon-apps.png" width="100%" />
                                    <div class="tag xs mt-2">Aplikasi <br />Pendidikan</div>
                                </div>
                                <div class="col-lg col-6 mt-3">
                                    <img alt="" src="/wp-content/themes/yes.my/images/prihatin/icon-iqiyi-v2.png" width="100%" />
                                    <div class="tag xs mt-2">Aplikasi <br />Hiburan</div>
                                </div>
                                <div class="col-lg col-6 mt-3">
                                    <img alt="" src="/wp-content/themes/yes.my/images/prihatin/phase-2/icon-Free-Delivery-BM.png" width="100%" />
                                    <div class="tag xs mt-2">Penghantaran Percuma</div>
                                </div>
                            </div>
                        </div>
                        <div class="cp-03 mb-4 pt-3 text-left-mobile">
                            Nikmati fon pintar dan data <b>30 GB</b> percuma! Bukan itu sahaja, dapatkan pulangan tunai RM50 Shopee, akses ke aplikasi pendidikan FrogAsia dan aplikasi hiburan iQiyi juga. <br /><br />
                            In memang milik anda! <br />
                            Layari dan daftar untuk memilih <span class="yes-font">yes</span> prihatin anda!
                        </div>
                        <a class="btn-01 tuntut" href="https://prihatin.yes.my/" target="_blank" rel="noopener"><b>TUNTUT SEKARANG</b></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section Prepaid ENDS -->

    <!-- Section Prepaid New STARTS -->
    <section class="d-block text-white">
        <div class="acd-pd" id="prepaid-new">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <p class="panel-headingImg d-lg-none mb-3"><img src="/wp-content/themes/yes.my/images/prihatin/phase-2/heading-prepaid-new-bm.png" /></p>
                        <div class="phone"><img src="/wp-content/themes/yes.my/images/prihatin/phase-2/prepaid-dongle-bm.png" width="100%" /></div>
                    </div>
                    <div class="col-lg-7">
                        <p class="panel-headingImg d-none d-lg-block"><img src="/wp-content/themes/yes.my/images/prihatin/phase-2/heading-prepaid-new-bm.png" /></p>
                        <div class="cp-01 mb-2 mt-4 text-left-mobile">Tiada Deposit. Tiada Kontrak. Tiada Pembayaran.</div>
                        <div class="cp-02 text-left-mobile"><span class="yes-font">yes</span> memberikan:</div>
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="ico-ar mb-4">
                                    <div class="row justify-content-center">
                                        <div class="col-lg col-6 mt-3">
                                            <img alt="" src="/wp-content/themes/yes.my/images/prihatin/phase-2/icon-free-dongle.png" width="100%" />
                                            <div class="tag xs mt-2">Huddle XS <br />Percuma</div>
                                        </div>
                                        <div class="col-lg col-6 mt-3">
                                            <img alt="" src="/wp-content/themes/yes.my/images/prihatin/icon-Data-Percuma.png" width="100%" />
                                            <div class="tag xs mt-2">Data <br />Percuma</div>
                                        </div>
                                        <div class="col-lg col-6 mt-3">
                                            <img alt="" src="/wp-content/themes/yes.my/images/prihatin/phase-2/icon-Free-Delivery-bm.png" width="100%" />
                                            <div class="tag xs mt-2">Penghantaran <br />Percuma</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cp-03 mb-4 pt-3 text-left-mobile">
                            Dapatkan <b>dongle baharu</b> dan <b>30GB data</b> bulanan, secara <b>PERCUMA</b> selama <b>12 bulan</b> dari tarikh kad SIM anda diaktifkan. <br /><br />
                            Pilih <b>yes</b> prihatin, daftar sekarang!
                        </div>
                        <a class="btn-01 tuntut" href="https://prihatin.yes.my/" target="_blank" rel="noopener"><b>TUNTUT SEKARANG</b></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section Prepaid New ENDS -->
    
    <!-- Section Postpaid STARTS -->
    <section class="d-block text-white">
        <div class="acd-pd" id="postpaid">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 order-lg-2">
                        <p class="panel-headingImg d-lg-none mb-3"><img src="/wp-content/themes/yes.my/images/prihatin/phase-2/heading-postpaid-new-bm.png" /></p>
                        <div class="phone"><img src="/wp-content/themes/yes.my/images/prihatin/phase-2/Postpaid-Phone-BM.png" width="100%" /></div>
                    </div>
                    <div class="col-lg-8 order-lg-1 col-pull-postpaid">
                        <p class="panel-headingImg d-none d-lg-block"><img src="/wp-content/themes/yes.my/images/prihatin/phase-2/heading-postpaid-new-bm.png" /></p>
                        <div class="cp-02 mt-4 text-left-mobile"><span class="yes-font">yes</span> memberi:</div>
                        <div class="ico-ar mb-4">
                            <div class="row justify-content-center">
                                <div class="col-lg col-6 mt-3">
                                    <img alt="" src="/wp-content/themes/yes.my/images/prihatin/icon-Telefon-Pintar.png" width="100%" />
                                    <div class="tag xs mt-2">Samsung Galaxy <br />A02</div>
                                </div>
                                <div class="col-lg col-6 mt-3">
                                    <img alt="" src="/wp-content/themes/yes.my/images/prihatin/phase-2/icon-Free-Data-75gb.png" width="100%" />
                                    <div class="tag xs mt-2">Data <br />Tinggi</div>
                                </div>
                                <div class="col-lg col-6 mt-3">
                                    <img alt="" src="/wp-content/themes/yes.my/images/prihatin/icon-bauchar.png" width="100%" />
                                    <div class="tag xs mt-2">Baucer RM50 Shopee</div>
                                </div>
                                <div class="col-lg col-6 mt-3">
                                    <img alt="" src="/wp-content/themes/yes.my/images/prihatin/icon-apps.png" width="100%" />
                                    <div class="tag xs mt-2">Aplikasi <br />Pendidikan</div>
                                </div>
                                <div class="col-lg col-6 mt-3">
                                    <img alt="" src="/wp-content/themes/yes.my/images/prihatin/icon-iqiyi-v2.png" width="100%" />
                                    <div class="tag xs mt-2">Aplikasi <br />Hiburan</div>
                                </div>
                                <div class="col-lg col-6 mt-3">
                                    <img alt="" src="/wp-content/themes/yes.my/images/prihatin/phase-2/icon-Free-Delivery-BM.png" width="100%" />
                                    <div class="tag xs mt-2">Penghantaran <br />Percuma</div>
                                </div>
                            </div>
                        </div>
                        <div class="cp-03 mb-4 pt-3 text-left-mobile">
                            Alamilah kehebatan fon pintar Samsung Galaxy A02 yang akan dihantar secara percuma dan data <b>sehingga 75 GB</b>. <br /><br />
                            Bukan itu sahaja, dapatkan pulangan tunai RM50 Shopee, akses ke aplikasi pendidikan FrogAsia dan aplikasi hiburan iQiyi juga. <br /><br />
                            <b>#JomTambahNaik</b>
                        </div>
                        <a class="btn-01 tuntut" href="https://prihatin.yes.my/" target="_blank" rel="noopener"><b>TUNTUT SEKARANG</b></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section Postpaid ENDS -->

    <!-- Section Pick STARTS -->
    <section class="d-block text-white">
        <div class="acd-pd mb-5 pb-5" id="table-list">
            <div class="container">
                <div class="layer-pick pick-prepaid mb-5">
                    <div class="main-ttl text-center mb-lg-3 mb-5">Pilih <span class="yes-font">yes</span> prihatin anda</div>
                    <p class="panel-headingImg text-center mb-lg-3 mb-5"><img src="/wp-content/themes/yes.my/images/prihatin/phase-2/heading-prepaid-bm.png" /></p>
                    <div class="row">
                        <div class="col-lg-6 mb-lg-3 mb-5"><img src="/wp-content/themes/yes.my/images/prihatin/phase-2/table-prepaid-bm.png" width="100%" /></div>
                        <div class="col-lg-6"><img src="/wp-content/themes/yes.my/images/prihatin/phase-2/table-prepaid-individual-bm.png" width="100%" /></div>
                    </div>
                </div>
                <div class="layer-pick pick-postpaid">
                    <div class="main-ttl text-center mb-lg-3 mb-5">Pilih <span class="yes-font">yes</span> prihatin anda</div>
                    <p class="panel-headingImg text-center mb-lg-3 mb-5"><img src="/wp-content/themes/yes.my/images/prihatin/phase-2/heading-postpaid-bm.png" /></p>
                    <div class="row">
                        <div class="col-lg-6 mb-lg-3 mb-5"><img src="/wp-content/themes/yes.my/images/prihatin/phase-2/table-postpaid-bm.png" width="100%" /></div>
                        <div class="col-lg-6"><img src="/wp-content/themes/yes.my/images/prihatin/phase-2/table-postpaid-individual-bm.png" width="100%" /></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section Pick ENDS -->

    <!-- Section How STARTS -->
    <section class="d-block">
        <div class="acd-pd mb-5 pb-5 mt-lg-0 pt-lg-0 pt-5 mt-5" id="how">
            <div class="container">
                <div class="main-ttl text-center mb-4">
                    Cara-cara mendapatkan <br />
                    <span class="yes-font">yes</span> prihatin
                </div>
                <div class="row">
                    <div class="tab-lock filterDiv daftar show">
                        <div class="click-ar one" onclick="filterSelection('daftar')">&nbsp;</div>
                        <div class="click-ar two" onclick="filterSelection('tuntut')">&nbsp;</div>
                        <div class="click-ar three" onclick="filterSelection('ekyc')">&nbsp;</div>
                        <img alt="" class="d-none d-lg-block" src="/wp-content/themes/yes.my/images/prihatin/cara-01-bm.png" width="100%" />
                        <img alt="" class="d-block d-lg-none sharp" src="/wp-content/themes/yes.my/images/prihatin/cara-01-bm-m.png" width="100%" />
                    </div>
                    <div class="tab-lock filterDiv tuntut">
                        <div class="click-ar one" onclick="filterSelection('daftar')">&nbsp;</div>
                        <div class="click-ar two" onclick="filterSelection('tuntut')">&nbsp;</div>
                        <div class="click-ar three" onclick="filterSelection('ekyc')">&nbsp;</div>
                        <img alt="" class="d-none d-lg-block" src="/wp-content/themes/yes.my/images/prihatin/cara-02-bm.png" width="100%" />
                        <img alt="" class="d-block d-lg-none sharp" src="/wp-content/themes/yes.my/images/prihatin/cara-02-bm-m.png" width="100%" />
                    </div>
                    <div class="tab-lock filterDiv ekyc">
                        <div class="click-ar one" onclick="filterSelection('daftar')">&nbsp;</div>
                        <div class="click-ar two" onclick="filterSelection('tuntut')">&nbsp;</div>
                        <div class="click-ar three" onclick="filterSelection('ekyc')">&nbsp;</div>
                        <img alt="" class="d-none d-lg-block" src="/wp-content/themes/yes.my/images/prihatin/cara-03-bm-v2.png" width="100%" />
                        <img alt="" class="d-block d-lg-none sharp" src="/wp-content/themes/yes.my/images/prihatin/cara-03-bm-m.png" width="100%" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section How ENDS -->

    <!-- Section Learn More STARTS -->
    <section class="d-block">
        <div class="" id="learn-more">
            <div class="container">
                <div class="main-ttl text-center mb-4">Ketahui lebih lanjut dengan video-video di bawah!</div>
                <div class="video-ar text-center mb-5">
                    <div class="row">
                        <div class="col-lg-4 col-12">
                            <a href="https://youtu.be/aOCSPS44JMU" target="_blank" rel="noopener"><img alt="" src="/wp-content/themes/yes.my/images/prihatin/vt-cara-daftar-bm.jpg" width="100%" /></a>
                            <div class="cp-01 mt-2"><a href="https://youtu.be/aOCSPS44JMU" target="_blank" rel="noopener">Cara</a></div>
                            <div class="cp-02"><a href="https://youtu.be/aOCSPS44JMU" target="_blank" rel="noopener">DAFTAR</a></div>
                        </div>
                        <div class="col-lg-4 col-12 mt-lg-0 mt-4">
                            <a href="https://youtu.be/0-xnWje3XJc" target="_blank" rel="noopener"><img alt="" data-entity-type="file" src="/wp-content/themes/yes.my/images/prihatin/vt-cara-tuntut-bm.jpg" width="100%" /></a>
                            <div class="cp-01 mt-2"><a href="https://youtu.be/0-xnWje3XJc" target="_blank" rel="noopener">Cara</a></div>
                            <div class="cp-02"><a href="https://youtu.be/0-xnWje3XJc" target="_blank" rel="noopener">TUNTUT</a></div>
                        </div>
                        <div class="col-lg-4 col-12 mt-lg-0 mt-4">
                            <a href="https://youtu.be/PwqBZ2i03fc" target="_blank" rel="noopener"><img alt="" src="/wp-content/themes/yes.my/images/prihatin/vt-cara-ekyc-bm.jpg" width="100%" /></a>
                            <div class="cp-01 mt-2"><a href="https://youtu.be/PwqBZ2i03fc" target="_blank" rel="noopener">Cara</a></div>
                            <div class="cp-02"><a href="https://youtu.be/PwqBZ2i03fc" target="_blank" rel="noopener">eKYC</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section Learn More ENDS -->

    <!-- Section Partnership STARTS -->
    <section class="d-block">
        <div class="" id="partnership">
            <div class="ft text-center">
                <div class="container">
                    <a class="btn-01 pink tuntut" href="https://prihatin.yes.my/" target="_blank" rel="noopener"><b>TUNTUT SEKARANG</b></a>
                    <div class="xs mt-2 mb-5">*Tertakluk pada terma dan syarat</div>
                    <div class="pns">
                        <div class="text">dengan kerjasama</div>
                        <div class="line">&nbsp;</div>
                        <div class="line2">&nbsp;</div>
                    </div>
                    <div class="partner mt-3">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-lg-auto col-12">
                                <img alt="" class="d-none d-lg-inline-block" src="/wp-content/themes/yes.my/images/prihatin/partner.png" />
                                <img alt="" class="d-inline-block d-lg-none" src="/wp-content/themes/yes.my/images/prihatin/partner-m.png" />
                            </div>
                            <div class="col-lg-auto col-12 mt-lg-0 mt-4 pl-lg-0"><img alt="" src="/wp-content/themes/yes.my/images/prihatin/partner-iqiyi-v2.png"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section Partnership ENDS -->
</div>
<!-- Prihatin Phase 2 ENDS -->


<script type="text/javascript">
    filterSelection("daftar")

    function filterSelection(c) {
        var x, i;
        x = document.getElementsByClassName("filterDiv");
        if (c == "all") c = "";
        for (i = 0; i < x.length; i++) {
            w3RemoveClass(x[i], "show");
            if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
        }
    }

    function w3AddClass(element, name) {
        var i, arr1, arr2;
        arr1 = element.className.split(" ");
        arr2 = name.split(" ");
        for (i = 0; i < arr2.length; i++) {
            if (arr1.indexOf(arr2[i]) == -1) {
                element.className += " " + arr2[i];
            }
        }
    }

    function w3RemoveClass(element, name) {
        var i, arr1, arr2;
        arr1 = element.className.split(" ");
        arr2 = name.split(" ");
        for (i = 0; i < arr2.length; i++) {
            while (arr1.indexOf(arr2[i]) > -1) {
                arr1.splice(arr1.indexOf(arr2[i]), 1);
            }
        }
        element.className = arr1.join(" ");
    }

    // Add active class to the current button (highlight it)
    var btnContainer = document.getElementById("myBtnContainer");
    if (btnContainer) {
        var btns = btnContainer.getElementsByClassName("btn");
        for (var i = 0; i < btns.length; i++) {
            btns[i].addEventListener("click", function() {
                var current = document.getElementsByClassName("active");
                current[0].className = current[0].className.replace(" active", "");
                this.className += " active";
            });
        }
    }

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