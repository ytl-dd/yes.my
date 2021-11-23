<?php include '../header.php' ?>


<style type="text/css">
    body main { overflow-x: hidden; }
    .layer-bgContent { background-color: #009FDF; padding: 0; }
    .layer-content { padding: 120px 0 0; position: relative; }
    .layer-content.banner { padding-top: 0; }

    /* .layer-pullUp { margin-top: -20%; } */
    .layer-pullUp { margin-top: -220px; }

    .layer-bgDots { background: url('/wp-content/themes/yes.my/images/reload-and-win/bg-dots.png') center center no-repeat; background-size: contain; padding: 400px 0; }
    .layer-bgHighlight { background: url('/wp-content/themes/yes.my/images/reload-and-win/bg-highlight.png') center center no-repeat; background-size: contain; }

    .img-mobile { max-width: 130%; margin-left: -15%; }
    .btn-scroll-down { bottom: auto; }
    .text-01 { color: #FFF; font-size: 35px; font-weight: 700; }
    .text-02 { color: #FFF; font-size: 28px; }
    .img-fluid { margin: 0 auto; }

    .layer-btn {}
    #sec-01 .layer-btn { position: absolute; left: 0px; right: 0px; z-index: 9; }
    .btn-01, .btn-01:active, .btn-01:focus { background-color: #083DA7; border-radius: 25px; box-shadow: 8px 8px #FF4CC4; color: #FFF; display: inline-block; font-size: 31px; font-weight: 700; padding: 15px 40px; }
    .btn-01:hover { background-color: #083DB0; color: #FFF; }

    section#more { z-index: 5; }
    section#more .pullUp-monthly { margin-top: -330px; }
    section#more .layer-bgDots { padding: 300px 0 400px; }
    section#more .layer-bgHighlight { padding-bottom: 200px; }
    .layer-pullUp.weekly-prizes { margin-top: -110px; }
    .layer-bgDots.dots-reload { margin-top: -200px; }

    section#how-to.layer-pullUp { margin-top: -400px; }

    section#tickets .layer-bgHighlight { padding-bottom: 200px; }

    section#reload.layer-pullUp { margin-top: -150px; }
    section#reload .layer-bgDots { background-position: top center; background-size: cover; padding: 15px 0 100px; }
    section#reload .text-02 span { display: block; margin: 20px 0 20px; }

    @media (max-width: 769px) {
        section#sec-01 .layer-pullUp { margin-top: -180px; }
        section#more .layer-bgDots { background-size: cover; padding: 220px 0 360px; }
        .layer-bgDots.dots-reload { margin-top: -120px; }
        section#tickets .layer-content { padding-top: 80px; }
    }

    @media (max-width: 576px) {
        .text-01 { font-size: 25px; }

        .btn-01, .btn-01:active, .btn-01:focus { font-size: 25px; padding: 8px 25px; }
        
        section#sec-01 .layer-pullUp { margin-top: -80px; }
        section#more .layer-bgHighlight { padding-bottom: 150px; }
        section#tickets .layer-bgHighlight { background-size: cover; }
    }
</style>


<!-- Content STARTS -->
<div class="layer-bgContent">
    <!-- Section Main STARTS -->
    <section class="d-block" id="sec-01"> 
        <div class="layer-content banner">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <img class="d-block d-lg-none img-mobile" src="/wp-content/themes/yes.my/images/reload-and-win/img-header-bm.png" alt="Reload & Win" title="Reload & Win" />
                        <img class="d-none d-lg-block img-fluid" src="/wp-content/themes/yes.my/images/reload-and-win/img-header-bm.png" alt="Reload & Win" title="Reload & Win" />
                    </div>
                </div>
                <div class="row layer-pullUp pb-4">
                    <div class="col-lg-10 offset-lg-1 text-center">
                        <div class="text-01 text-center mb-4">Jom sertai sekarang!</div>
                        <div class="layer-btn">
                            <div class="row">
                                <div class="col-12 text-center">
                                    <a href="#more" class="btn-01 btn-scroll-down">KETAHUI LEBIH LANJUT</a>
                                </div>
                                <div class="col-12 text-center mt-5">
                                    <a href="#more" class="btn-scroll-down"><img alt="" class="arrow-down-img" src="/wp-content/themes/yes.my/images/prihatin/phase-2/Down-arrow.png"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section Main ENDS -->

    <!-- Section More STARTS -->
    <section class="d-block" id="more">
        <div class="layer-content pt-0">
            <div class="layer-bgDots">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <div class="text-01 text-center">
                                Sertai Tambah Nila & Menang! <br />
                                Lebih banyak anda tambah nilai atau beli tambahan data, makin tinggi peluang untuk menang.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="layer-pullUp pullUp-monthly">
                <div class="layer-bgHighlight">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-10 offset-lg-1">
                                <img class="d-block d-lg-none img-fluid" src="/wp-content/themes/yes.my/images/reload-and-win/table-monthly-prizes-bm-mobile.png" alt="Monthly Grand Prizes" title="Monthly Grand Prizes" />
                                <img class="d-none d-lg-block img-fluid" src="/wp-content/themes/yes.my/images/reload-and-win/table-monthly-prizes-bm.png" alt="Monthly Grand Prizes" title="Monthly Grand Prizes" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container layer-pullUp weekly-prizes">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-3 col-sm-6 offset-sm-3">
                            <div class="text-center">
                                <img class="img-fluid" src="/wp-content/themes/yes.my/images/reload-and-win/table-weekly-prizes-bm.png" alt="Weekly Prizes" title="Weekly Prizes" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="layer-bgDots dots-reload layer-pullUp text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 offset-lg-2">
                                <div class="text-01 mb-4">Tambah nilai atau beli tambahan data untuk menangi hadiah-hadiah hebat!</div>
                            </div>
                            <div class="col-12">
                                <a href="#how-to" class="btn-01 btn-scroll-down">JOM TAMBAH NILAI!</a>
                            </div>
                            <div class="col-12 mt-5">
                                <a href="#more" class="btn-scroll-down"><img alt="" class="arrow-down-img" src="/wp-content/themes/yes.my/images/prihatin/phase-2/Down-arrow.png"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section More ENDS -->

    <!-- Section How To STARTS -->
    <section class="d-block layer-pullUp" id="how-to">
        <div class="layer-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-0 col-sm-8 offset-sm-2 pb-5 pb-lg-0 text-center">
                        <img class="img-fluid mb-5" src="/wp-content/themes/yes.my/images/reload-and-win/how-to-reload-bm.png" alt="How to Reload" title="How to Reload" />
                        <a href="https://selfcare.yes.my/myselfcare/doExpressPay.do" class="btn-01 text-white">JOM TAMBAH NILAI!</a>
                    </div>
                    <div class="col-lg-6 offset-lg-0 col-sm-8 offset-sm-2 pb-5 pb-lg-0 text-center">
                        <img class="img-fluid mb-5" src="/wp-content/themes/yes.my/images/reload-and-win/how-to-buy-add-ons-bm.png" alt="How to Buy Add-Ons" title="How to Buy Add-Ons" />
                        <a href="https://selfcare.yes.my/myselfcare/doExpressPay.do" class="btn-01 text-white">BELI SEKARANG</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section How To ENDS -->

    <!-- Section Tickets STARTS -->
    <section class="d-block" id="tickets">
        <div class="layer-content">
            <div class="layer-bgHighlight">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <div class="text-01 text-center mb-5">Dengan setiap pembelian, anda akan mendapat tiket untuk lebih peluang menangi cabutan bertuah termasuk Hadiah Utama!</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2 col-sm-8 offset-sm-2">
                            <img class="img-fluid" src="/wp-content/themes/yes.my/images/reload-and-win/table-tickets-bm.png" alt="Tickets" title="Tickets" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section Tickets ENDS -->

    <!-- Section Reload Via STARTS -->
    <section class="d-block layer-pullUp" id="reload">
        <div class="layer-content text-center pt-0">
            <div class="layer-bgDots">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="text-02">
                                <span class="mt-0">Tambah Nilai melalui</span>
                                <img src="/wp-content/themes/yes.my/images/reload-and-win/yes-app.png" alt="YES" title="YES" width="100" /> <br />
                                <span>app</span>
                            </div>
                            <a href="https://play.google.com/store/apps/details?id=my.yes.yes4g"><img src="/wp-content/themes/yes.my/images/reload-and-win/btn-download-bm.png" alt="Download Now" title="Download Now" width="320" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section Reload Via ENDS -->
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