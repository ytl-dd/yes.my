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
        font-size: 30px
    }

    .cp-03 {
        font-size: 25px;
        line-height: 30px;
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
    
    @media (max-width:1600px) {
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

    #sec-01 > .acd-pd { padding-top: 80px; }
    
    .acd-pd .cp-01 {
        font-size: 25px
    }
    
    .acd-pd .cp-02 {
        font-size: 45px;
        line-height: 55px;
    }
    
    @media (max-width:991px) {
        .main-ttl {
            font-size: 25px
        }
    }

    /* Phase 2 */
    .layer-btnScrollDown { text-align: center; }
    .layer-btnScrollDown a { bottom: auto; }
    @media (max-width: 991px) {
        #sec-01 {
            background: none;
            padding: 0;
        }
        .acd-pd .cp-01 {
            margin-top: 0;
            font-size: 18px;
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
    
    .container-fluid {
        max-width: 1440px;
    }

    .tag-bgWhite { background-color: #FFF; border-radius: 8px; color: #00A6DE; display: inline-block; font-size: 40px; font-weight: 700; line-height: 38px; padding: 10px 15px 1px; }

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

    /** Layer Pakej STARTS */
    .layer-contentBoxes { border-radius: 10px; display: table; margin: 0 0 48px; position: relative; }
    .layer-contentBoxes .layer-contentBox { background-color: #DC2A85; border-right: 1px solid #FFF; color: #FFF; display: table-cell; font-size: 25px; line-height: 30px; padding: 20px 50px; vertical-align: middle; }
    .layer-contentBox img { max-height: 150px; max-width: initial; }
    .layer-contentBox:first-of-type, .layer-contentBox.bg-white { border-radius: 10px 0 0 10px; padding: 0; }
    .layer-contentBox:last-of-type { border: 0; border-radius: 0 10px 10px 0; }
    .layer-contentBoxes .tag-bgWhite { color: #DC2A85; font-size: 25px; }
    .layer-contentBoxes .tag-bgWhite.tag-mt { margin-top: 10px; }
    .layer-contentBoxes .tag-bgWhite.tag-mb { margin-bottom: 10px; }
    .layer-contentBoxes.bg-blue .layer-contentBox { background-color: #0038B2; }
    .layer-contentBoxes.bg-blue .tag-bgWhite { color: #0038B2; }
    .layer-contentBox b { display: block; }

    .layer-contentBox.bg-grey { background-color: #575756; }
    .layer-contentBox.bg-white { background-color: #FFF; }

    .layer-floatEarn { background: url('/wp-content/themes/yes.my/images/pakej-keluarga-malaysia/bg-earn.png') no-repeat; background-size: contain; font-size: 16px; line-height: 22px; height: 180px; padding: 35px 15px; text-align: center; width: 180px; position: absolute; right: -100px; top: -150px; }
    .layer-floatEarn b { font-size: 22px; }
    .layer-floatEarn .font-large { font-size: 200%; font-weight: 700; line-height: 130%; }

    .img-headingPick { margin: 0 0 48px; max-width: 70%; }

    .layer-pick .layer-floatEarn { top: -60px; right: -40px; }

    .box-pink-1 { width: 330px; }
    .box-pink-3 { width: 310px; }

    @media (max-width: 769px) {
        #postpaid .mr-lg-2, #prepaid .mr-lg-2 { display: block; }
        .img-heading { max-width: 70%; }
        .cp-03 { font-size: 20px; line-height: 28px; }
        .layer-contentBoxes { display: block; }
        .layer-contentBoxes .layer-contentBox { display: block; border-right: 0; border-bottom: 1px solid #FFF; font-size: 22px; line-height: 24px; padding: 20px 40px; }
        .layer-contentBox:first-of-type, .layer-contentBox.bg-white { border-radius: 10px 10px 0 0; border: 0; display: inline-block; padding: 0; }
        .layer-contentBox:last-of-type { border: 0; border-radius: 0 0 10px 10px; }
        .layer-contentBox img { max-height: 110px; }

        .layer-contentBoxes .layer-contentBox:after { clear: both; content: ''; display: block; }
        .layer-contentBoxes .tag-bgWhite { float: left; padding: 15px 10px 10px; }
        .layer-contentBoxes.bg-blue .tag-bgWhite, .layer-contentBoxes .box-pink-3 .tag-bgWhite { margin: 0 15px 0 0 !important; }
        .layer-contentBoxes b { float: left; }
        .layer-contentBoxes b.b-margin { margin-top: 12px; }

        .layer-floatEarn { font-size: 10px; line-height: 12px; height: 120px; padding: 28px 15px; width: 120px; right: -15px; top: 0px; }
        .layer-floatEarn b { float: none; font-size: 16px; }
        
        .img-headingPick { max-width: 50%; }
        .layer-pick .layer-floatEarn { top: -55px; right: 0px; }

        .box-pink-1, .box-pink-3 { width: 100%; }
    }

    @media (max-width: 559px) {
        .img-headingPick { max-width: 80%; }
        .layer-pick .col-margin { margin-bottom: 100px; }
    }
    /** Layer Pakej ENDS */
</style>


<!-- Content STARTS -->
<div class="layer-bgContent">
    <!-- Section Main STARTS -->
    <section class="d-block text-white acd-pd" id="sec-01">
        <div class="content acd-pd">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <img class="d-block d-lg-none mb-4" src="/wp-content/themes/yes.my/images/pakej-keluarga-malaysia/microsite-banner-mobile.png" width="100%" />
                        <img class="d-none d-lg-block mb-4" src="/wp-content/themes/yes.my/images/pakej-keluarga-malaysia/microsite-banner.png" width="100%" />
                    </div>
                    <div class="col-lg-10 offset-lg-1">
                        <div class="cp-03 text-white mb-5 text-center">Pilih Pakej Peranti dan Pakej Remaja daripada <span class="yes-font">yes</span> dan nikmati kualiti internet pada harga hebat. Dapatkan data lebih tinggi, sambungan lebih jelas dengan kelajuan yang pantas.</div>
                    </div>
                </div>
                <div class="btn-ar mx-auto">
                    <div class="row">
                        <div class="col-lg-2"></div>
                        <div class="col-lg-4">
                            <a href="#postpaid" class="btn-01 pink btn-scroll-down"><b>PASCABAYAR</b></a>
                        </div>
                        <div class="col-lg-4 mt-lg-0 mt-3">
                            <a href="#prepaid" class="btn-01 btn-scroll-down"><b>PRABAYAR</b></a>
                        </div>
                        <div class="col-lg-2"></div>
                    </div>
                </div>
                <div class="layer-btnScrollDown">
                    <a href="#postpaid" class="btn-scroll-down"><img alt="" class="arrow-down-img" src="/wp-content/themes/yes.my/images/prihatin/phase-2/Down-arrow.png"></a>
                </div>
            </div>
        </div>
    </section>
    <!-- Section Main ENDS -->

    <!-- Section Postpaid STARTS -->
    <section class="d-block text-white" id="postpaid">
        <div class="acd-pd acd-pd-mobile">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 text-center"><img src="/wp-content/themes/yes.my/images/pakej-keluarga-malaysia/heading-postpaid-bm.png" alt="Pascabayar" title="Pascabayar" class="img-fluid img-heading mb-5" /></div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="cp-01 mb-4"><b><span class="mr-lg-2">• PERCUMA TELEFON PINTAR 4G</span></b></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="layer-contentBoxes">
                            <div class="layer-contentBox bg-grey"><img src="/wp-content/themes/yes.my/images/pakej-keluarga-malaysia/icon-pakej-peranti.png" alt="Pakej Peranti Keluarga Malaysia" title="Pakej Peranti Keluarga Malaysia" class="img-fluid" /></div>
                            <div class="layer-contentBox box-pink-1">
                                <span class="tag-bgWhite tag-mb">100GB</span>
                                <b>Hanya RM49/bulan</b>
                            </div>
                            <div class="layer-contentBox">
                                <b>Samsung Galaxy A02</b>
                                <span class="tag-bgWhite tag-mt">PERCUMA</span>
                            </div>
                            <div class="layer-contentBox box-pink-3">
                                <span class="tag-bgWhite tag-mb">1GB</span>
                                <b>Data Berkelajuan <br />Tinggi setiap hari</b>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="cp-03">
                            Langgan Pakej Peranti <span class="yes-font">yes</span> dan miliki Samsung Galaxy A02 secara percuma! Dengan 100GB data untuk hanya RM49 setiap bulan, pasti memberikan anda pengalaman internet yang menakjubkan. <br /><br />
                            <b>Tempoh pendaftaran dari 15 Oktober 2021 hingga 15 April 2022</b>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section Postpaid ENDS -->

    <!-- Section Prepaid STARTS -->
    <section class="d-block text-white" id="prepaid">
        <div class="acd-pd acd-pd-mobile">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 text-center"><img src="/wp-content/themes/yes.my/images/pakej-keluarga-malaysia/heading-prepaid-bm.png" alt="Prabayar" title="Prabayar" class="img-fluid img-heading mb-5" /></div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="cp-01 mb-4"><b><span class="mr-lg-2">• TAWARAN HEBAT UNTUK DATA ANDA</span></b></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="layer-contentBoxes bg-blue">
                            <div class="layer-floatEarn">
                                <span class="font-large">RM5</span><br />
                                <b>milik anda</b><br />
                                apabila rujuk seorang kawan!
                            </div>
                            <div class="layer-contentBox bg-white"><img src="/wp-content/themes/yes.my/images/pakej-keluarga-malaysia/icon-pakej-remaja.png" alt="Pakej Remaja Keluarga Malaysia" title="Pakej Remaja Keluarga Malaysia" class="img-fluid" /></div>
                            <div class="layer-contentBox">
                                <span class="tag-bgWhite tag-mb">20GB</span>
                                <b class="b-margin">Hanya RM30</b>
                            </div>
                            <div class="layer-contentBox">
                                <span class="tag-bgWhite tag-mb">1GB</span>
                                <b>Data Berkelajuan <br />Tinggi setiap hari</b>
                            </div>
                            <div class="layer-contentBox">
                                <span class="tag-bgWhite tag-mb">90 hari</span>
                                <b class="b-margin">Tempoh sah</b>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="cp-03">
                            Langgan Pakej Remaja <span class="yes-font">yes</span> dan nikmati 20GB data selama 90 hari. Tebus 1GB data PERCUMA setiap hari untuk pengalaman internet yang lebih hebat. Makin seronok belajar dalam talian, layari media sosial, strim video kegemaran dan banyak lagi! <br /><br />
                            <h4><b>Pakej tersedia untuk:</b></h4>
                            • Warganegara Malaysia yang mempunyai MyKad; <br />
                            • Berumur 12-20 tahun; atau <br />
                            • Pemegang kad pelajar yang berumur 12 tahun dan ke atas. <br /><br />
                            <b>Tempoh pendaftaran dari 15 Oktober 2021 hingga 15 April 2022</b>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section Prepaid ENDS -->

    <!-- Section Pick STARTS -->
    <section class="d-block text-white layer-pick">
        <div class="acd-pd acd-pd-mobile pb-5" id="table-list">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="d-none d-lg-block"><img src="/wp-content/themes/yes.my/images/pakej-keluarga-malaysia/heading-pick-bm.png" alt="Pick your YES Pakej Keluarga Malaysia" title="Pick your YES Pakej Keluarga Malaysia" class="img-headingPick" /></div>
                        <div class="d-block d-lg-none"><img src="/wp-content/themes/yes.my/images/pakej-keluarga-malaysia/heading-pick-bm-mobile.png" alt="Pick your YES Pakej Keluarga Malaysia" title="Pick your YES Pakej Keluarga Malaysia" class="img-headingPick" /></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-margin">
                        <img src="/wp-content/themes/yes.my/images/pakej-keluarga-malaysia/table-postpaid-bm.png" alt="Pakej Peranti Keluarga Malaysia" title="Pakej Peranti Keluarga Malaysia" class="img-fluid mb-5" />
                        <div class="row">
                            <div class="col-lg-8 offset-lg-2">
                                <a href="https://appstore.yes.my/ywos/signup" class="btn-01 pink" target="_blank"><b>Beli sekarang</b></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="layer-floatEarn">
                            <span class="font-large">RM5</span><br />
                            <b>milik anda</b><br />
                            apabila rujuk seorang kawan!
                        </div>
                        <img src="/wp-content/themes/yes.my/images/pakej-keluarga-malaysia/table-prepaid-bm.png" alt="Pakej Remaja Keluarga Malaysia" title="Pakej Remaja Keluarga Malaysia" class="img-fluid mb-5" />
                        <div class="row">
                            <div class="col-lg-8 offset-lg-2">
                                <a href="https://appstore.yes.my/ywos/signup" class="btn-01 pink" target="_blank"><b>Beli sekarang</b></a>
                            </div>
                        </div>
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
        }, 100);
        return false;
    }
</script>


<?php include '../footer.php' ?>