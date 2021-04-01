                    </div>

                </div>
            </div>

        </div>



    </div>


    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/css/remote.css" as="style" onload="this.rel=&#39;stylesheet&#39;">
    <noscript>
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/css/remote.css" />
    </noscript>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-12 col-xl-5" style="position:relative;">
                    <div class="footer-contactus">

                        <p style="font-size:18px;font-weight:bold;">Got a question?</p>
                        <p><a href="https://www.yes.my/faq/customer-service"><span class="footer-contact"><b>Contact
                                        Us</b></span></a></p>

                    </div>
                </div>
                <div class="col-xl-7" style="position:relative;">
                    <div class="footer-sitemap">
                        <div>
                            <a href="https://www.yes.my/rewards/deals">Rewards</a>
                            <a href="https://www.yes.my/supported-devices">Supported Devices</a>
                            <a href="https://www.yes.my/support/coverage">Coverage</a>
                            <a href="https://www.yes.my/sitemap" target="blank">Sitemap</a>
                        </div>
                        <div>
                            <a href="https://www.yes.my/support/speed-test">Speedtest</a>
                            <a href="https://www.yes.my/download">Download &amp; Services</a>
                            <a href="https://www.yes.my/support/store-locator">Store Locator</a>
                        </div>
                        <div>
                            <a href="https://www.yes.my/faq/about-yes-4g">FAQ</a>
                            <a href="https://www.yes.my/tnc/general-tnc">Terms &amp; Conditions</a>
                            <a href="http://www.ytl.com/privacypolicy.asp" target="blank">Privacy Policy</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="padding-top:36px;padding-bottom:43.5px;">
                <div class="col">
                    <div class="footer-social">
                        <div class="getapps">
                            <p>Get the MyYES App</p>
                            <span class="menus menu-getapps">
                                <a rel="noopener" aria-label="PlayStore Download" id="footer-google"
                                    href="https://play.google.com/store/apps/details?id=my.yes.yes4g" target="_blank">
                                    <svg class="ia ia-playstore">
                                        <use xlink:href="#ia-playstore"></use>
                                    </svg>
                                </a>
                                <span class="seperator"></span>
                                <a rel="noopener" aria-label="AppStore Download" id="footer-apple"
                                    href="https://itunes.apple.com/us/app/myyes4g/id1321262375?mt=8" target="_blank">
                                    <svg class="ia ia-apple">
                                        <use xlink:href="#ia-apple"></use>
                                    </svg>
                                </a>
                            </span>
                        </div>
                        <div class="social">
                            <span class="menus menu-social">
                                <a rel="noopener" aria-label="Instagran" id="footer-instagram"
                                    href="https://www.instagram.com/yes4g/" target="_blank">
                                    <svg class="ia ia-social-instagram">
                                        <use xlink:href="#ia-social-instagram"></use>
                                    </svg>
                                </a>
                                <a rel="noopener" aria-label="Facebook" id="footer-facebook"
                                    href="https://www.facebook.com/Yes4G/" target="_blank">
                                    <svg class="ia ia-social-facebook">
                                        <use xlink:href="#ia-social-facebook"></use>
                                    </svg>
                                </a>
                                <a rel="noopener" aria-label="Twitter" id="footer-twitter"
                                    href="https://twitter.com/yes4g" target="_blank">
                                    <svg class="ia ia-social-twitter">
                                        <use xlink:href="#ia-social-twitter"></use>
                                    </svg>
                                </a>
                            </span>
                        </div>
                        <div class="ctm">
                            <a rel="noopener" aria-label="Consumer Info" href="https://www.consumerinfo.my/"
                                target="_blank" style="position: relative;top: -20px;"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-ctm.png"
                                    title="Logo CTM" width="124" height="64"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer-disclaimer">
                        <img class="sayyes" src="<?php echo get_template_directory_uri(); ?>/images/say-yes.png" title="Say Yes" width="101.53" height="36">
                        <p class="copyright">POWERED BY YTL, YTL Communications Sdn. Bhd. (793634-V)</p>
                        <img class="cert" src="<?php echo get_template_directory_uri(); ?>/images/cert.png" title="Authority Certificate" width="300.57"
                            height="32">
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="modal fade modal-html" id="HtmlOverlay" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body"></div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        </div>
    </div>
    <script type="text/javascript">
    var $overlay;

    $(document).ready(function() {
        JUI.select('span.select', null);
        JUI.dropmenu('.dropmenu');

        $(".dropdown-item").click(function() {
            var $parent = $(this).parents(".dropdown");
            var $input = $("input[type=hidden]", $parent);
            var $toggle = $(".dropdown-toggle", $parent)

            if ($input.length) {
                $input.val($(this).attr("data-value"));
                $toggle.html($(this).html());
            }

            $parent.trigger('OnChanged');
        });

        var $pageNav = $(".nav-page");

        if ($pageNav.length) {
            var pageNavPos = $pageNav.position();

            var triggerPoint = $pageNav.position().top - $(".nav-main").height();

            var isAnchored = false;

            $(document).scroll(function() {
                if ($(this).scrollTop() >= triggerPoint && !isAnchored) {
                    $pageNav.addClass("anchored");
                    isAnchored = true;
                } else if ($(this).scrollTop() < triggerPoint && isAnchored) {
                    $pageNav.removeClass("anchored");
                    isAnchored = false;
                }
            }).scroll();
        }

        function HtmlOverlay(target) {
            var $obj = $(target);
            var $html = $(".modal-body", $obj);

            $obj.modal({
                focus: false,
                show: false
            });

            this.showHtml = function(html) {
                $html.html(html);
                $obj.modal('show');
            }
            this.hide = function() {
                $html.html('');
                $obj.modal('hide');
            }

            return this;
        }

        $overlay = HtmlOverlay("#HtmlOverlay");

        $(".data-filters .filter-toggle").click(function() {
            $(this).parent().toggleClass("expanded");
        });


        function scrollToBody() {
            var navMainHeight = $(".nav-main").height();

            if (navMainHeight > 100) navMainHeight = 100;

            if ($("#main-content").length) {
                $(document).scrollTop($("#main-content").offset().top - navMainHeight);
            }
        }

        $(".btn-scroll-down").click(function(e) {
            e.preventDefault();
            scrollToBody();
        });

        var url = window.location.href;
        var vars = {};
        var hashes = url.split("?")[1];

        if (hashes) {
            var hash = hashes.split('&');

            for (var i = 0; i < hash.length; i++) {
                params = hash[i].split("=");
                vars[params[0]] = params[1];
            }

            if ("skip" in vars) {
                scrollToBody();
            }
        }
    });
    </script>


    <?php wp_footer(); ?>
</body>

</html>