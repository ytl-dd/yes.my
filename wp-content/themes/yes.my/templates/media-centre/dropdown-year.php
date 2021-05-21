<div class="dropdown" id="ddYear">
    <button aria-expanded="false" aria-haspopup="true" class="btn dropdown-toggle" data-toggle="dropdown" type="button">Please Select</button>
    <div aria-labelledby="ddYear" class="dropdown-menu">
        <button class="dropdown-item" data-value="" type="button">Please Select</button>

        <?php 
            $arr_years  = $args['arr_years'];

            foreach ($arr_years as $year) : 
        ?>
        <button class="dropdown-item" data-value="<?=$year?>" type="button"><?=$year?></button>
        <?php 
            endforeach;
        ?>
    </div>
    <input id="year" name="year" type="hidden" />
</div>