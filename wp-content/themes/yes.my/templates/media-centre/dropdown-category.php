<div class="dropdown" id="ddCategory">
    <button aria-expanded="false" aria-haspopup="true" class="btn dropdown-toggle" data-toggle="dropdown" type="button"><?= __('All', 'yes.my'); ?></button>
    <div aria-labelledby="ddCategory" class="dropdown-menu">
        <button class="dropdown-item" data-value="" type="button"><?= __('All', 'yes.my'); ?></button>

        <?php 
            $args   = [
                // 'hide_empty'=> false, 
                'taxonomy'  => 'media-centre-category', 
                'orderby'   => 'name', 
                'order'     => 'ASC' 
            ];
            $categories = get_categories($args);

            foreach ($categories as $category) : 
                if ($category->slug != 'featured') : 
        ?>
        <button class="dropdown-item" data-value="<?=$category->name?>" type="button"><?=$category->name?></button>
        <?php   
                endif;
            endforeach;
        ?>
    </div>
    
    <input id="category" name="category" type="hidden" />
</div>