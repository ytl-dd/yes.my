<div class="filter-overlay" id="filter-overlay"><div class="d-none d-lg-block"><p class="shoutout-note"><b>Filters</b></p><br></div>
    <div class="d-lg-none">
        <button id="btn-overlay-hide" class="btn btn-primary">Apply</button><br><br>
    </div>
    <form class="filter form-filter">
        <div class="form-group data-filters expanded">
            <div class="filter-toggle">Categories</div>
            <div class="filter-selection">
                <?php 
                    $args_category  = [
                        'hide_empty'=> false, 
                        'taxonomy'  => 'deals-category', 
                        'type'      => 'deals',
                        'orderby'   => 'name', 
                        'order'     => 'ASC',
                    ];
                    $categories     = get_categories($args_category);
                    foreach ($categories as $category) :
                        if ($category->slug != 'uncategorized') : 
                ?>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="cat-<?=$category->term_id?>" name="c-cat" value="<?=$category->name?>">
                    <label class="form-check-label" for="cat-<?=$category->term_id?>"><?=$category->name?></label>
                </div>
                <?php 
                        endif;
                    endforeach;
                ?>
            </div>
        </div>
        <div class="form-group data-filters">
            <div class="filter-toggle">Region</div>
            <div class="filter-selection">
                <?php 
                    $args_region    = [
                        'hide_empty'=> false, 
                        // 'taxonomy'  => 'deals-tag', 
                        'type'      => 'deals', 
                        'orderby'   => 'name', 
                        'order'     => 'ASC' 
                    ];
                    $regions        = get_terms('deals-tag', $args_region);
                    foreach ($regions as $region) : 
                        if ($region->slug != 'nationwide') : 
                ?>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="region-<?=$region->term_id?>" name="c-region" value="<?=$region->name?>">
                    <label class="form-check-label" for="region-<?=$region->term_id?>"><?=$region->name?></label>
                </div>
                <?php 
                        endif;
                    endforeach;
                ?>
            </div>
        </div>
    </form>
</div>