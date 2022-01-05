<div class="filter-overlay" id="filter-overlay">
    <div class="d-none d-lg-block">
        <p class="shoutout-note"><b>Filters</b></p><br>
    </div>
    <div class="d-lg-none"><button id="btn-overlay-hide" class="btn btn-primary">Apply</button><br><br></div>
    <form class="filter form-filter">
        <div class="form-group data-filters expanded">
            <div class="filter-toggle">Supports</div>
            <div class="filter-selection">
                <?php
                    $args_tags  = [
                        'hide_empty' => false,
                        'taxonomy'  => 'supported-device-tag',
                        'type'      => 'supported-device',
                        'orderby'   => 'name',
                        'order'     => 'DESC'
                    ];
                    $tags       = get_categories($args_tags);
                    foreach ($tags as $tag) :
                ?>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="tag-<?= $tag->term_id ?>" name="c-region" value="<?= $tag->slug ?>">
                        <label class="form-check-label" for="tag-<?= $tag->term_id ?>"><?= $tag->name ?></label>
                    </div>
                <?php
                    endforeach;
                ?>
            </div>
        </div>
        <div class="form-group data-filters">
            <div class="filter-toggle">Phone Brand</div>
            <div class="filter-selection">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="brand-497" name="c-cat" value="yes">
                    <label class="form-check-label" for="brand-497">Yes</label>
                </div>
                <?php
                    $args_brands    = [
                        'hide_empty' => false,
                        'taxonomy'  => 'supported-device-category',
                        'type'      => 'supported-device',
                        'exclude'   => [496, 497],
                        'orderby'   => 'name',
                        'order'     => 'ASC'
                    ];
                    $brands         = get_categories($args_brands);
                    foreach ($brands as $brand) :
                        // echo '<pre>'; print_r($brands); echo '</pre>';
                ?>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="brand-<?= $brand->term_id ?>" name="c-cat" value="<?= $brand->slug ?>">
                        <label class="form-check-label" for="brand-<?= $brand->term_id ?>"><?= $brand->name ?></label>
                    </div>
                <?php
                    endforeach;
                ?>
            </div>
        </div>
    </form>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        var url_string  = window.location.href;
        var url         = new URL(url_string);
        var paramSupport = url.searchParams.get('support');

        if (paramSupport !== null) {
            var inputSupport = $('input[name="c-region"][value="' + paramSupport + '"]');
            if ($(inputSupport).length) {
                setTimeout(function () {
                    $(inputSupport).prop('checked');
                    $(inputSupport).trigger('click');
                }, 1000);
            }
        }
    });
</script>