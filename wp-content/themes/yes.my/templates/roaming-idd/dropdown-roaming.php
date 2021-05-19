<div class="dropdown-menu">
    <?php 
        if ($args['data_roaming']) : 
            foreach ($args['data_roaming'] as $data_roaming) : 
                foreach ($data_roaming as $data) : 
    ?>
    <button class="dropdown-item" type="button" data-value="<?=$data['id']?>"><?=$data['country_name']; ?></button>
    <?php 
                    break;
                endforeach;
            endforeach;
        endif;
    ?>
</div>