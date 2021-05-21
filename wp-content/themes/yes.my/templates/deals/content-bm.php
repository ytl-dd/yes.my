<section class="dblock flexbox light" style="background-image:url('/wp-content/themes/yes.my/images/yes2018/Group 2511.jpg');">
    <div class="fullscreen centerize center-text">
        <div>
            <p class="shoutout lg"><b>Hadiah-hadiah kecil</b> yang menceriakan hari anda.</p>
        </div>
    </div>

    <div class="bottom centerize"><span class="link-group"><a class="btn-scroll-down" href="#main-content"><svg class="ia ia-below"><use xlink:href="/ia-defs.svg#ia-below"></use></svg></a></span></div>
</section>

<section class="dblock flexbox" id="main-content">
    <div class="flexible">
        <div class="container container-filter">
            <div class="row">
                <?php get_template_part('templates/deals/filter'); ?>

                <div class="col">
                    <div class="row">
                        <div class="d-lg-none"><button class="btn btn-primary" id="btn-overlay-show">Filter</button><br /> &nbsp;
                        </div>
                    </div>

                    <div class="row filter-storeitem">
                        <?php get_template_part('templates/deals/rewards'); ?>
                    </div>

                    <div class="row">
                        <div class="col-12 center-text"><button class="btn btn-primary" id="btn-more" style="display:none;">Show all</button></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="dblock flexbox alt">
    <div class="centerize center-text" style="height:600px;">
        <div style="max-width:1084px;">
            <p class="shoutout brand lg" style="margin-bottom:0.25em;"><b>Mempunyai jenama</b> yang anda ingin menyebar ke rakyat Malaysia?</p>

            <p class="shoutout-note grey" style="margin-bottom:1.67em;">Cakap Yes, kepada lebih pelanggan. Jadi rakan kongsi Yes!</p>
            <a class="accent" href="/rewards/partnership"><b><u>Jadi Rakan Kongsi</u></b></a>
        </div>
    </div>
</section>

<div class="modal fade modal-html" id="RewardsDealsOverlay" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">&nbsp;</div>
            <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">×</span></button>
        </div>
    </div>
</div>

<?php get_template_part('templates/deals/scripts'); ?>