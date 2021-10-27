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

    .layer-floatEarn { background: url('/wp-content/themes/yes.my/images/pakej-keluarga-malaysia/bg-earn.png') no-repeat; background-size: contain; font-size: 20px; line-height: 25px; height: 180px; padding: 25px 30px; text-align: center; width: 180px; position: absolute; right: -100px; top: -150px; }
    .layer-floatEarn .font-large { font-size: 200%; font-weight: 700; line-height: 130%; }

    .img-headingPick { margin: 0 0 48px; max-width: 70%; }

    .layer-pick .layer-floatEarn { top: -60px; right: -40px; }

    @media (max-width: 769px) {
        .img-heading { max-width: 70%; }
        .cp-03 { font-size: 20px; line-height: 28px; }
        .layer-contentBoxes { display: block; }
        .layer-contentBoxes .layer-contentBox { display: block; border-right: 0; border-bottom: 1px solid #FFF; font-size: 22px; line-height: 24px; padding: 20px 40px; }
        .layer-contentBox:first-of-type, .layer-contentBox.bg-white { border-radius: 10px 10px 0 0; border: 0; display: inline-block; padding: 0; }
        .layer-contentBox:last-of-type { border: 0; border-radius: 0 0 10px 10px; }
        .layer-contentBox img { max-height: 110px; }

        .layer-contentBoxes .layer-contentBox:after { clear: both; content: ''; display: block; }
        .layer-contentBoxes .tag-bgWhite { float: left; padding: 15px 10px 10px; }
        .layer-contentBoxes.bg-blue .tag-bgWhite, .layer-contentBoxes .box-pink-1 .tag-bgWhite, .layer-contentBoxes .box-pink-3 .tag-bgWhite { margin: 0 15px 0 0 !important; }
        .layer-contentBoxes b { float: left; }
        .layer-contentBoxes b.b-margin { margin-top: 12px; }

        .layer-floatEarn { font-size: 14px; line-height: 15px; height: 120px; padding: 24px 18px; width: 120px; right: -15px; top: 0px; }
        .layer-floatEarn b { float: none; }
        
        .img-headingPick { max-width: 50%; }
        .layer-pick .layer-floatEarn { top: -55px; right: 0px; }
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
                        <div class="cp-03 text-white mb-5 text-center">选择 <span class="yes-font">yes</span> 配套即可以最实惠的价格尽享优质的上网体验。通过设备配套和青少年配套，您可享有更多的数据配额、更佳的通讯连接及更快速的网速</div>
                    </div>
                </div>
                <div class="btn-ar mx-auto">
                    <div class="row">
                        <div class="col-lg-2"></div>
                        <div class="col-lg-4">
                            <a href="#postpaid" class="btn-01 pink btn-scroll-down"><b>后付配套</b></a>
                        </div>
                        <div class="col-lg-4 mt-lg-0 mt-3">
                            <a href="#prepaid" class="btn-01 btn-scroll-down"><b>预付配套</b></a>
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
                    <div class="col-lg-3 text-center"><img src="/wp-content/themes/yes.my/images/pakej-keluarga-malaysia/heading-postpaid-ch.png" alt="后付配套" title="后付配套" class="img-fluid img-heading mb-5" /></div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="cp-01 mb-4"><b><span class="mr-lg-2">• 免费4G智能手机</span></b></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="layer-contentBoxes">
                            <div class="layer-contentBox bg-grey"><img src="/wp-content/themes/yes.my/images/pakej-keluarga-malaysia/icon-pakej-peranti.png" alt="Pakej Peranti Keluarga Malaysia" title="Pakej Peranti Keluarga Malaysia" class="img-fluid" /></div>
                            <div class="layer-contentBox box-pink-1">
                                <span class="tag-bgWhite tag-mb">100GB</span>
                                <b class="b-margin">只需RM49/月</b>
                            </div>
                            <div class="layer-contentBox">
                                <b>Samsung Galaxy A02</b>
                                <span class="tag-bgWhite tag-mt">免费</span>
                            </div>
                            <div class="layer-contentBox box-pink-3">
                                <span class="tag-bgWhite tag-mb">1GB</span>
                                <b>每日享有 <br />高速上网数据</b>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="cp-03">
                            签购 <span class="yes-font">yes</span> 设备配套就能免费拥有一台 Samsung Galaxy A02！更佳的是，只需每月 RM49，您就能获取 100GB 数据容量，绝对物超所值！更多的数据配额、更佳的通讯连接及更快速的网速，让您尽享最佳的上网体验。<br /><br />
                            <b>注册期限从2021年10月15日至2022年4月15日</b>
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
                    <div class="col-lg-3 text-center"><img src="/wp-content/themes/yes.my/images/pakej-keluarga-malaysia/heading-prepaid-ch.png" alt="预付配套" title="预付配套" class="img-fluid img-heading mb-5" /></div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="cp-01 mb-4"><b><span class="mr-lg-2">• 超值上网数据</span></b></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="layer-contentBoxes bg-blue">
                            <div class="layer-floatEarn">
                                <b>赚取</b><br />
                                <span class="font-large">RM5</span><br />
                                每当您推荐一名好友！
                            </div>
                            <div class="layer-contentBox bg-white"><img src="/wp-content/themes/yes.my/images/pakej-keluarga-malaysia/icon-pakej-remaja.png" alt="Pakej Remaja Keluarga Malaysia" title="Pakej Remaja Keluarga Malaysia" class="img-fluid" /></div>
                            <div class="layer-contentBox">
                                <span class="tag-bgWhite tag-mb">20GB</span>
                                <b class="b-margin">只需RM30</b>
                            </div>
                            <div class="layer-contentBox">
                                <span class="tag-bgWhite tag-mb">1GB</span>
                                <b>每日享有 <br />高速上网数据</b>
                            </div>
                            <div class="layer-contentBox">
                                <span class="tag-bgWhite tag-mb">90 天</span>
                                <b class="b-margin">有效期限</b>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="cp-03">
                            签购 <span class="yes-font">yes</span> 青少年配套即可获取20GB数据配额，如今有了90天的有效期限，您可享有更长久的上网乐趣。此外，您还可每天免费索取1GB的额外数据以迎合日常网上学习需求、浏览社交媒体、串流您喜爱的视频等娱乐享受！<br /><br />
                            <h4><b>所示配套公开给：</b></h4>
                            • 持有有效大马卡(MyKad) 的马来西亚公民；<br />
                            • 年龄介于12至20岁的人士；或 <br />
                            • 21岁及以上持有有效学生证的人士。 <br /><br />
                            <b>注册期限从2021年10月15日至2022年4月15日</b>
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
                        <div class="d-none d-lg-block"><img src="/wp-content/themes/yes.my/images/pakej-keluarga-malaysia/heading-pick-ch.png" alt="Pick your YES Pakej Keluarga Malaysia" title="Pick your YES Pakej Keluarga Malaysia" class="img-headingPick" /></div>
                        <div class="d-block d-lg-none"><img src="/wp-content/themes/yes.my/images/pakej-keluarga-malaysia/heading-pick-ch-mobile.png" alt="Pick your YES Pakej Keluarga Malaysia" title="Pick your YES Pakej Keluarga Malaysia" class="img-headingPick" /></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-margin">
                        <img src="/wp-content/themes/yes.my/images/pakej-keluarga-malaysia/table-postpaid-ch.png" alt="Pakej Peranti Keluarga Malaysia" title="Pakej Peranti Keluarga Malaysia" class="img-fluid mb-5" />
                        <div class="row">
                            <div class="col-lg-8 offset-lg-2">
                                <a href="https://appstore.yes.my/ywos/signup" class="btn-01 pink" target="_blank"><b>立即购买</b></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="layer-floatEarn">
                            <b>赚取</b><br />
                            <span class="font-large">RM5</span><br />
                            每当您推荐一名好友！
                        </div>
                        <img src="/wp-content/themes/yes.my/images/pakej-keluarga-malaysia/table-prepaid-ch.png" alt="Pakej Remaja Keluarga Malaysia" title="Pakej Remaja Keluarga Malaysia" class="img-fluid mb-5" />
                        <div class="row">
                            <div class="col-lg-8 offset-lg-2">
                                <a href="https://appstore.yes.my/ywos/signup" class="btn-01 pink" target="_blank"><b>立即购买</b></a>
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