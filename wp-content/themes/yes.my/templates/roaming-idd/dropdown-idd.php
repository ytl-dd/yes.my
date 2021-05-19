<div class="dropdown-menu">
    <?php 
        if ($args['data_idd']) : 
            foreach ($args['data_idd'] as $data_idd) : 
    ?>
    <button class="dropdown-item" type="button" data-value="<?=$data_idd['country_name']; ?>"><?=$data_idd['country_name']; ?></button>
    <?php 
            endforeach;
        endif;
    ?>
</div>