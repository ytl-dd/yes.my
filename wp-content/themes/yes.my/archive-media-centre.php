<?php get_header(); ?>

<?php 
    $mc_page_id = MEDIA_CENTRE_EN;
    $lang       = get_bloginfo('language');

    if ($lang == 'ms-MY') {
        $mc_page_id = MEDIA_CENTRE_BM;
    } else if ($lang == 'zh-CN') {
        $mc_page_id = MEDIA_CENTRE_CH;
    }

    $mc_page    = get_post($mc_page_id);

    $content    = $mc_page->post_content;
    $content    = apply_filters('the_content', $content);
    $content    = str_replace(']]>', ']]&gt;', $content);
    
    echo $content;


    $args   = [
        'post_type'     => 'media-centre', 
        'post_status'   => 'publish', 
        'posts_per_page'=> -1, 
        'orderby'       => 'date', 
        'order'         => 'DESC' 
    ];

    $loop   = new WP_Query($args);

    $arr_posts          = [];
    $arr_featured_posts = [];
    $arr_years          = [];

    while ($loop->have_posts()) : 
        $loop->the_post();
        $arr_posts[]    = $post;
        $post_categories= get_the_terms($post->ID, 'media-centre-category');

        foreach ($post_categories as $category) : 
            if ($category->slug == 'featured') : 
                $arr_featured_posts[]   = $post;
            endif;
        endforeach;

        $post_year      = get_the_date('Y');
        $arr_years[]    = $post_year;
    endwhile;
    wp_reset_postdata();

    $arr_years  = array_unique($arr_years);
?>

<section class="dblock flexbox">
    <div>
        <form>
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <div class="form-group"><label for="ddCategory">Filter by</label>
                            <?php get_template_part('templates/media-centre/dropdown-category'); ?>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="form-group"><label for="ddYear">Year</label>
                            <?php get_template_part('templates/media-centre/dropdown-year', '', ['arr_years' => $arr_years]); ?>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>

<section class="dblock flexbox">
    <div class="filter-noresults">
        <div class="container newsResults">
            <?php get_template_part('templates/media-centre/no-results', '', ['arr_posts' => $arr_featured_posts]); ?>
        </div>
    </div>

    <div class="filter-hasresults">
        <div class="container newsResults">
            <?php get_template_part('templates/media-centre/has-results', '', ['arr_posts' => $arr_posts]); ?>
        </div>
    </div>
</section>

<style type="text/css">
    body main { overflow-x: hidden; }
</style>

<script type="text/javascript">
    $(document).ready(function(){
        var cooldown = 100;
        var isOffCooldown = true;
        
        var defaultResults = $(".filter-noresults");
        var filterResults = $(".filter-hasresults");

        function render(){
            var category = $("#category").val();
            var year = $("#year").val();

            filterResults.find("[year]").hide();

            var filterString = '';

            if(year){
                filterString += "[year='"+year+"']";
            }

            if(category){
                filterString += "[category='"+category+"']";
            }

            if(filterString){
                var results = filterResults.find(filterString);

                if(results.length){
                    results.show();
                    defaultResults.hide();
                }else{
                    
                }
            }else{
                defaultResults.show();
            }
        }

        $("#ddYear").on('OnChanged', function(){
            if(isOffCooldown){
                isOffCooldown = false;
                setTimeout(function(){
                    isOffCooldown = true;
                }, cooldown);
                render();
            }
        });
        $("#ddCategory").on('OnChanged', function(){
            if(isOffCooldown){
                isOffCooldown = false;
                setTimeout(function(){
                    isOffCooldown = true;
                }, cooldown);
                render();
            }
        });

        render();
    });
</script>

<?php get_footer(); ?>