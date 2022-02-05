<?php $yesmy_opt = $GLOBALS['yesmy_opt']; ?>

                            </main>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-xl-5" style="position: relative;">
                        <div class="footer-contactus">
                            <?php 
                                $lang = get_bloginfo('language');
                                $opt_id_contact = 'opt_footer_top_left';
                                $opt_id_get_app = 'opt_footer_get_app';
                                if ($lang == 'ms-MY') {
                                    $opt_id_contact = 'opt_footer_top_left_bm';
                                    $opt_id_get_app = 'opt_footer_get_app_bm';
                                } else if ($lang == 'zh-CN') {
                                    $opt_id_contact = 'opt_footer_top_left_ch';
                                    $opt_id_get_app = 'opt_footer_get_app_ch';
                                }

                                if (!empty($yesmy_opt[$opt_id_contact])) echo $yesmy_opt[$opt_id_contact];
                            ?>
                        </div>
                    </div>
                    <div class="col-xl-7" style="position: relative;">
                        <div class="footer-sitemap">
                            <div>
                                <?php 
                                    if (has_nav_menu('primary')) : 
                                        wp_nav_menu(
                                            array(
                                                'theme_location'    => 'footer_sitemap_1', 
                                                'container'         => false, 
                                                'items_wrap'        => '%3$s', 
                                                'walker'            => new Custom_Walker
                                            )
                                        );
                                    endif; 
                                ?>
                            </div>
                            <div>
                                <?php 
                                    if (has_nav_menu('primary')) : 
                                        wp_nav_menu(
                                            array(
                                                'theme_location'    => 'footer_sitemap_2', 
                                                'container'         => false, 
                                                'items_wrap'        => '%3$s', 
                                                'walker'            => new Custom_Walker
                                            )
                                        );
                                    endif; 
                                ?>
                            </div>
                            <div>
                                <?php 
                                    if (has_nav_menu('primary')) : 
                                        wp_nav_menu(
                                            array(
                                                'theme_location'    => 'footer_sitemap_3', 
                                                'container'         => false, 
                                                'items_wrap'        => '%3$s', 
                                                'walker'            => new Custom_Walker
                                            )
                                        );
                                    endif; 
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="padding-top: 36px; padding-bottom: 43.5px;">
                    <div class="col">
                        <div class="footer-social">
                            <div class="getapps">
                                <?php if (!empty($yesmy_opt[$opt_id_get_app])) echo $yesmy_opt[$opt_id_get_app]; ?>
                            </div>
                            <div class="social">
                                <?php if (!empty($yesmy_opt['opt_footer_social_links'])) echo $yesmy_opt['opt_footer_social_links']; ?>
                            </div>
                            <div class="ctm">
                                <?php if (!empty($yesmy_opt['opt_footer_certificate'])) echo $yesmy_opt['opt_footer_certificate']; ?>
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
                            <?php if (!empty($yesmy_opt['opt_footer_logo'])) : ?>
                                <img src="<?= $yesmy_opt['opt_footer_logo']['url']; ?>" class="sayyes" title="Say Yes" width="101.53" height="36" />
                            <?php endif; ?>
                            
                            <?php if (!empty($yesmy_opt['opt_footer_company'])) : ?>
                                <p class="copyright"><?= esc_html_e($yesmy_opt['opt_footer_company'], 'yes.my'); ?></p>
                            <?php endif; ?>

                            <?php if (!empty($yesmy_opt['opt_footer_card_verified'])) : ?>
                                <img class="cert" src="<?= $yesmy_opt['opt_footer_card_verified']['url']; ?>" title="Authority Certificate" width="300.57" height="32" />
                            <?php endif; ?>
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
            $(document).ready(function () {
                $('[href="/"], [href="https://site.yes.my"], [href="https://site.yes.my/"]').each(function () {
                    $(this).attr('href', 'https://www.yes.my/');
                });
                $('[href="/ms"], [href="/ms/"], [href="https://site.yes.my/ms"], [href="https://site.yes.my/ms/"]').each(function () {
                    $(this).attr('href', 'https://www.yes.my/ms/');
                });
                $('[href="/zh-hans"], [href="/zh-hans/"], [href="https://site.yes.my/zh-hans"], [href="https://site.yes.my/zh-hans/"]').each(function () {
                    $(this).attr('href', 'https://www.yes.my/zh-hans/');
                });
                $('[href="https://play.google.com/store/apps/details?id=my.yes.yes4g&hl=en&gl=US"], [href="https://play.google.com/store/apps/details?id=my.yes.yes4g"], [href="https://play.google.com/store/apps/details?id=my.yes.yes4g&hl=en"], [href="https://itunes.apple.com/us/app/myyes4g/id1321262375?mt=8"], [href="http://yw.my/myyes4g"]').each(function () {
                    $(this).attr('href', 'https://onelink.to/6e8tqc');
                });
            });
        </script>

        <?php wp_footer(); ?>
    </body>
</html>