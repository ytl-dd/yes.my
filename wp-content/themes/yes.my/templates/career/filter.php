<div class="row">
    <div class="col-6">
        <div class="form-group">
            <label for="ddDivision">Division</label>

            <div class="dropdown" id="ddDivision">
                <button aria-expanded="false" aria-haspopup="true" class="btn dropdown-toggle" data-toggle="dropdown" type="button">All</button>
                <div aria-labelledby="ddDivision" class="dropdown-menu">
                    <button class="dropdown-item" data-value="" type="button">All</button>
                    
                    <?php 
                        $args_divisions = [
                            'hide_empty'=> false, 
                            'taxonomy'  => 'openings-category', 
                            'type'      => 'openings', 
                            'orderby'   => 'name', 
                            'order'     => 'ASC' 
                        ];
                        $divisions      = get_categories($args_divisions);
                        // echo '<pre>'; print_r($divisions); echo '</pre>';
                        foreach ($divisions as $division) :
                    ?>
                    <button class="dropdown-item" data-value="<?=$division->slug?>" type="button"><?=$division->name?></button>
                    <?php 
                        endforeach;
                    ?>

                </div>
                <input id="division" name="division" type="hidden" />
            </div>
        </div>
    </div>

    <div class="col-6">
        <div class="form-group">
            <label for="ddLocation">Location</label>

            <div class="dropdown" id="ddLocation">
                <button aria-expanded="false" aria-haspopup="true" class="btn dropdown-toggle" data-toggle="dropdown" type="button">All</button>
                <div aria-labelledby="ddLocation" class="dropdown-menu">
                    <button class="dropdown-item" data-value="" type="button">All</button>
                    
                    <?php 
                        $args_locations = [
                            'hide_empty'=> false, 
                            'taxonomy'  => 'openings-tag', 
                            'type'      => 'openings', 
                            'orderby'   => 'name', 
                            'order'     => 'ASC' 
                        ];
                        $locations      = get_categories($args_locations);
                        foreach ($locations as $location) : 
                    ?>
                    <button class="dropdown-item" data-value="<?=$location->slug?>" type="button"><?=$location->name?></button>
                    <?php 
                        endforeach;
                    ?>

                </div>
                <input id="location" name="location" type="hidden" />
            </div>
        </div>
    </div>
</div>