        <?php 
            $lang           = get_bloginfo("language");
            $sl_permalink   = get_permalink(STORE_LOCATOR_POST_ID_EN);
            if ($lang == 'ms-MY') {
                $sl_permalink   = get_permalink(STORE_LOCATOR_POST_ID_BM);
            } else if ($lang == 'zh-CN') {
                $sl_permalink   = get_permalink(STORE_LOCATOR_POST_ID_CH);
            }
        ?>

        <nav class="nav-mobile">
            <div class="mobile-shop">
                <a tabindex="-1" aria-label="Site Logo" href="<?= get_home_url(); ?>" class="site-logo" style="margin-right:10px;">
                    <svg class="ia ia-yes">
                        <use xlink:href="#ia-yes"></use>
                    </svg>
                </a>
                <a tabindex="-1" title="<?= esc_html_e('Store Locator', 'yes.my'); ?>" href="<?= $sl_permalink ?>" class="btn-locator">
                    <svg class="ia ia-pin">
                        <use xlink:href="#ia-pin"></use>
                    </svg>
                    <span><?= esc_html_e('Store Locator', 'yes.my'); ?></span>
                </a>
                <a tabindex="-1" title="<?= esc_html_e('Shopping Cart', 'yes.my'); ?>" href="https://shop.yes.my/shop/viewCart.do" class="btn-cart">
                    <svg class="ia ia-cart">
                        <use xlink:href="#ia-cart"></use>
                    </svg>
                </a>
                <a tabindex="-1" title="<?= esc_html_e('Close Menu', 'yes.my'); ?>" role="button" class="btn-close">
                    <svg class="ia ia-close">
                        <use xlink:href="#ia-close"></use>
                    </svg>
                </a>
            </div>
            <form id="mysearch2" method="get" action="<?= get_home_url(); ?>/search">
                <input id="sToken2" name="sToken" type="hidden" value="nyUkgDUBlM+cq0WYJTSuTlkx7AEJ5Yoz">
                <button type="submit" title="<?= esc_html_e('Search', 'yes.my'); ?>" class="but-trigger-search" style="background:none;border:none;">
                    <svg class="ia ia-search">
                        <use xlink:href="#ia-search"></use>
                    </svg>
                </button>
                <input id="queryStr" name="q" type="text" class="search-field" placeholder="<?= esc_html_e('Search', 'yes.my'); ?> yes.my" title="<?= esc_html_e('Search', 'yes.my'); ?>">
            </form>
            <div class="mobile-menu-pills">
                <div class="nav nav-pills" id="menu-pills-tab" role="tablist" aria-orientation="horizontal">
                    <a class="nav-link active" id="menu-pills-home-tab" data-toggle="tab" tabindex="-1" href="#menu-pills-home" role="tab" aria-controls="menu-pills-home" aria-selected="true"><?= esc_html_e('4G LTE', 'yes.my'); ?></a>
                    <a class="nav-link" id="menu-pills-support-tab" data-toggle="tab" tabindex="-1" href="#menu-pills-support" role="tab" aria-controls="menu-pills-support" aria-selected="false"><?= esc_html_e('Support', 'yes.my'); ?></a>
                    <a class="nav-link" id="menu-pills-selfcare-tab" data-toggle="tab" tabindex="-1" href="#menu-pills-selfcare" role="tab" aria-controls="menu-pills-selfcare" aria-selected="false"><?= esc_html_e('Selfcare', 'yes.my'); ?></a>
                </div>
                <div class="tab-content text-uppercase" id="menu-pills-tabContent">
                    <div class="tab-pane fade links show active" id="menu-pills-home" role="tabpanel" aria-labelledby="menu-pills-home-tab">
                        <?php 
                            if (has_nav_menu('primary')) : 
                                wp_nav_menu(
                                    array(
                                        'theme_location'    => 'primary', 
                                        'container'         => false, 
                                        'items_wrap'        => '<ul class="mobile-menus menu-site">%3$s</ul>', 
                                        // 'walker'            => new Custom_Walker
                                    )
                                );
                            endif; 
                        ?>
                        <hr>
                        <?php 
                            if (has_nav_menu('corporate')) : 
                                wp_nav_menu(
                                    array(
                                        'theme_location'    => 'corporate', 
                                        'container'         => false, 
                                        'items_wrap'        => '%3$s', 
                                        'walker'            => new Custom_Walker
                                    )
                                );
                            endif; 
                        ?>
                    </div>
                    <div class="tab-pane fade links" id="menu-pills-support" role="tabpanel" aria-labelledby="menu-pills-support-tab">
                        <?php 
                            if (has_nav_menu('support_mobile')) : 
                                wp_nav_menu(
                                    array(
                                        'theme_location'    => 'support_mobile', 
                                        'container'         => false, 
                                        'items_wrap'        => '%3$s', 
                                        'walker'            => new Custom_Walker
                                    )
                                );
                            endif; 
                        ?>
                    </div>
                    <div class="tab-pane fade links" id="menu-pills-selfcare" role="tabpanel" aria-labelledby="menu-pills-selfcare-tab">
                        <?php 
                            if (has_nav_menu('selfcare')) : 
                                wp_nav_menu(
                                    array(
                                        'theme_location'    => 'selfcare', 
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
            <div class="mobile-get-apps">
                <span><?= esc_html_e('GET THE APP', 'yes.my'); ?></span>
                <span class="menus menu-getapps">
                    <a tabindex="-1" rel="noopener" aria-label="AppStore Download" href="https://itunes.apple.com/us/app/myyes4g/id1321262375?mt=8" target="_blank">
                        <svg class="ia ia-apple">
                            <use xlink:href="#ia-apple"></use>
                        </svg>
                    </a>
                    <span class="seperator"></span>
                    <a tabindex="-1" rel="noopener" aria-label="PlayStore Download" href="https://play.google.com/store/apps/details?id=my.yes.yes4g" target="_blank">
                        <svg class="ia ia-playstore">
                            <use xlink:href="#ia-playstore"></use>
                        </svg>
                    </a>
                </span>
            </div>
        </nav>

        <nav class="nav-main">
            <div class="nav-corporate">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="section">
                                <?php 
                                    if (has_nav_menu('primary')) : 
                                        wp_nav_menu(
                                            array(
                                                'theme_location'    => 'corporate', 
                                                'container'         => false, 
                                                'items_wrap'        => '<span class="menus menu-business">%3$s</span>', 
                                                'walker'            => new Custom_Walker
                                            )
                                        );
                                    endif; 
                                ?>
                                <?php echo yesmy_language_switcher(); ?>
                                <span class="menus menu-shop">
                                    <a href="<?= $sl_permalink ?>" class="i-locator">
                                        <svg class="ia ia-pin">
                                            <use xlink:href="#ia-pin"></use>
                                        </svg>
                                        <span><?= esc_html_e('Store Locator', 'yes.my'); ?></span>
                                    </a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="nav-site">
                <div class="container">
                    <div class="row">
                        <div class="col-2 col-lg-1">
                            <a aria-label="Site Logo" href="<?php echo esc_url(home_url('/')); ?>" class="site-logo" style="line-height: 34px;padding-top: 8px;">
                                <svg class="ia ia-yes">
                                    <use xlink:href="#ia-yes"></use>
                                </svg>
                            </a>
                        </div>
                        <div class="col-10 col-lg-11">
                            <div class="section">
                                <?php 
                                    if (has_nav_menu('primary')) : 
                                        wp_nav_menu(
                                            array(
                                                'theme_location'    => 'primary', 
                                                'container'         => false, 
                                                'items_wrap'        => '<ul class="menus menu-site">%3$s</ul>', 
                                                // 'walker'            => new Custom_Walker
                                            )
                                        );
                                    endif; 
                                ?>
                                <!-- <div class="dropdown1 text-white font-weight-bold" href="/kasiup/" style="width: auto; font-weight: 600; color: white">
                                    <span class="menus menu-site">PLANS </span>

                                    <div class="dropdown-content">
                                        <span class="menus menu-site">
                                            <a href="/4g-lte-prepaid/"><span class="kasicolor">Kasi Up</span><span class="linkt"> Prepaid</span></a>
                                            <a href="/4g-lte-postpaid/"><span class="kasicolor">Kasi Up</span><span class="linkt"> Postpaid</span></a>
                                            <a href="/4g-broadband/"><span class="kasicolor">Kasi Up</span><span class="linkt"> Broadband</span></a>
                                            <a href="/kasiup/"><span class="kasicolor">Kasi Up</span><span class="linkt"> Refer &amp; Earn</span></a>
                                            <a href="/kasiupB40/"><span class="kasicolor">Kasi Up</span><span class="linkt"> B40</span></a>
                                        </span>
                                    </div>
                                    <span class="menus menu-site"> </span>
                                </div> -->
                                <span class="menus menu-user">
                                    <a class="hidemobile" tabindex="0" role="button" id="toggleSearch">
                                        <svg class="ia ia-search">
                                            <use xlink:href="#ia-search"></use>
                                        </svg>
                                    </a>
                                    <span class="dropmenu hidemobile">
                                        <a role="button" tabindex="0" data-original-title="" title="">
                                            <svg class="ia ia-contact">
                                                <use xlink:href="#ia-contact"></use>
                                            </svg>
                                        </a>
                                        <?php 
                                            if (has_nav_menu('selfcare')) : 
                                                wp_nav_menu(
                                                    array(
                                                        'theme_location'    => 'selfcare', 
                                                        'container'         => false, 
                                                        'items_wrap'        => '<span class="selection selection-menu text-uppercase">%3$s</span>', 
                                                        'walker'            => new Custom_Walker
                                                    )
                                                );
                                            endif; 
                                        ?>
                                    </span>
                                    <?php echo yesmy_language_switcher(['d-lg-none']); ?>
                                    <span class="dropmenu btn-sidemenu" aria-label="Menu" data-original-title="" title="">
                                        <a role="button" tabindex="0" aria-label="Menu" data-original-title="" title="">
                                            <svg class="ia ia-burger">
                                                <use xlink:href="#ia-burger"></use>
                                            </svg>
                                        </a>
                                        <?php 
                                            if (has_nav_menu('support')) : 
                                                wp_nav_menu(
                                                    array(
                                                        'theme_location'    => 'support', 
                                                        'container'         => false, 
                                                        'items_wrap'        => '<span class="selection selection-menu text-uppercase">%3$s</span>', 
                                                        'walker'            => new Custom_Walker
                                                    )
                                                );
                                            endif; 
                                        ?>
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <div class="hover-search">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <form id="mysearch" method="get" action="<?= get_home_url(); ?>/search">
                            <!-- <input id="sToken" name="sToken" type="hidden" value="nyUkgDUBlM+cq0WYJTSuTlkx7AEJ5Yoz" /> -->
                            <button type="submit" class="but-trigger-search" title="<?= esc_html_e('Search', 'yes.my'); ?>">
                                <svg class="ia ia-search">
                                    <use xlink:href="#ia-search"></use>
                                </svg>
                            </button>
                            <input id="queryStr" name="q" type="text" class="search-field" placeholder="<?= esc_html_e('Search', 'yes.my'); ?>" title="<?= esc_html_e('Search', 'yes.my'); ?>" />
                        </form>
                    </div>
                </div>
            </div>
        </div>