<?php get_header(); ?>

<?php 
    if (have_posts()) :
        while (have_posts()) : 
            the_post();
            $job_date           = get_post_meta($post->ID, 'yesmy_opening_closing_date', true);
            $post_division      = get_the_terms($post->ID, 'openings-category');
            $job_division       = $post_division[0];
            $post_location      = get_the_terms($post->ID, 'openings-tag');
            $job_location       = $post_location[0];
            $job_experience     = get_post_meta($post->ID, 'yesmy_opening_experience', true);
            $job_vacancies      = get_post_meta($post->ID, 'yesmy_opening_vacancies', true);
            $job_skill          = get_post_meta($post->ID, 'yesmy_opening_skill_qualities', true);
            $job_responsibilities = get_post_meta($post->ID, 'yesmy_opening_job_responsibilities', true);
            $job_ass_summary    = get_post_meta($post->ID, 'yesmy_opening_assignment_summary', true);
            $job_requirement    = get_post_meta($post->ID, 'yesmy_opening_requirement', true);
            $job_other_skill    = get_post_meta($post->ID, 'yesmy_opening_other_skill_set', true);
            $job_competencies   = get_post_meta($post->ID, 'yesmy_opening_competencies', true);
            $job_aca_qualification = get_post_meta($post->ID, 'yesmy_opening_academic_qualification', true);
            $job_qualification  = get_post_meta($post->ID, 'yesmy_opening_qualification', true);
            $job_tech_skill     = get_post_meta($post->ID, 'yesmy_opening_technical_skill', true);
            $job_relation_int   = get_post_meta($post->ID, 'yesmy_opening_working_relation_internal', true);
            $job_relation_ext   = get_post_meta($post->ID, 'yesmy_opening_working_relation_external', true);
?>

<section class="dblock flexbox" id="main-content">
    <div class="centerize">
        <div class="container">
            <div class="row">
                <div class="col">
                    <p class="shoutout brand lg"><?php the_title(); ?></p>
                    <?php if ($job_date) : ?>
                    <p>Closing date, <?= date('d M Y', strtotime($job_date)); ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="dblock flexbox alt" style="margin:60px 0;padding:30px 0;">
    <div class="centerize">
        <div class="container">
            <div class="row center-text">
                <?php if ($job_division) : ?>
                <div class="col-6 col-lg-3">
                    <span class="lg-icon bg"><svg class="ia ia-people"><use xlink:href="/ia-defs.svg#ia-people"></use></svg></span><br>
                    <b>Division:</b><br>
                    <span><?=$job_division->name?></span>
                </div>
                <?php endif; ?>
                
                <?php if ($job_location) : ?>
                <div class="col-6 col-lg-3">
                    <span class="lg-icon bg"><svg class="ia ia-pin"><use xlink:href="/ia-defs.svg#ia-pin"></use></svg></span><br>
                    <b>Location:</b><br>
                    <span><?=$job_location->name?></span>
                </div>
                <?php endif; ?>
                
                <?php if ($job_experience) : ?>
                <div class="col-6 col-lg-3">
                    <span class="lg-icon bg"><svg class="ia ia-speed-meter"><use xlink:href="/ia-defs.svg#ia-speed-meter"></use></svg></span><br>
                    <b>Experience:</b><br>
                    <span><?=$job_experience?></span>
                </div>
                <?php endif; ?>
                
                <?php if ($job_vacancies) : ?>
                <div class="col-6 col-lg-3">
                    <span class="lg-icon bg"><svg class="ia ia-briefcase"><use xlink:href="/ia-defs.svg#ia-briefcase"></use></svg></span><br>
                    <b>Vacancies:</b><br>
                    <span><?=$job_vacancies?></span>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<section class="dblock flexbox">
    <div class="centerize">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="accordion accordion-faq" id="ajob">
                        <?php if ($job_requirement) : ?>
                        <div class="card">
                            <div class="card-header" id="ajob-1">
                            <h5 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#ajob-c1" aria-expanded="false" aria-controls="ajob-c1">Job Requirements</button>
                            </h5>
                            </div>
                            <div id="ajob-c1" class="collapse show" aria-labelledby="ajob-1" data-parent="#ajob">
                                <div class="card-body"><?=$job_requirement?></div>
                            </div>
                        </div>
                        <?php endif; ?>

                        <?php if ($job_skill) : ?>
                        <div class="card">
                            <div class="card-header" id="ajob-2">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#ajob-c2" aria-expanded="false" aria-controls="ajob-c2">Skills and Qualities</button>
                            </h5>
                            </div>
                            <div id="ajob-c2" class="collapse" aria-labelledby="ajob-2" data-parent="#ajob">
                                <div class="card-body"><?=$job_skill?></div>
                            </div>
                        </div>
                        <?php endif; ?>

                        <?php if ($job_responsibilities) : ?>
                        <div class="card">
                            <div class="card-header" id="ajob-3">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#ajob-c3" aria-expanded="false" aria-controls="ajob-c3">Job Responsibilities</button>
                            </h5>
                            </div>
                            <div id="ajob-c3" class="collapse" aria-labelledby="ajob-3" data-parent="#ajob">
                                <div class="card-body"><?=$job_responsibilities?></div>
                            </div>
                        </div>
                        <?php endif; ?>

                        <?php if ($job_other_skill) : ?>
                        <div class="card">
                            <div class="card-header" id="ajob-4">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#ajob-c4" aria-expanded="false" aria-controls="ajob-c4">Other Skill Set</button>
                            </h5>
                            </div>
                            <div id="ajob-c4" class="collapse" aria-labelledby="ajob-4" data-parent="#ajob">
                                <div class="card-body"><?=$job_other_skill?></div>
                            </div>
                        </div>
                        <?php endif; ?>

                        <?php if ($job_ass_summary) : ?>
                        <div class="card">
                            <div class="card-header" id="ajob-5">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#ajob-c5" aria-expanded="false" aria-controls="ajob-c5"> Assignment Summary</button>
                            </h5>
                            </div>
                            <div id="ajob-c5" class="collapse" aria-labelledby="ajob-5" data-parent="#ajob">
                                <div class="card-body"><?=$job_ass_summary?></div>
                            </div>
                        </div>
                        <?php endif; ?>

                        <?php if ($job_competencies) : ?>
                        <div class="card">
                            <div class="card-header" id="ajob-6">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#ajob-c6" aria-expanded="false" aria-controls="ajob-c6">Competencies</button>
                            </h5>
                            </div>
                            <div id="ajob-c6" class="collapse" aria-labelledby="ajob-6" data-parent="#ajob">
                                <div class="card-body"><?=$job_competencies?></div>
                            </div>
                        </div>
                        <?php endif; ?>

                        <?php if ($job_aca_qualification || $job_qualification) : ?>
                        <div class="card">
                            <div class="card-header" id="ajob-7">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#ajob-c7" aria-expanded="false" aria-controls="ajob-c7">Qualifications</button>
                            </h5>
                            </div>
                            <div id="ajob-c7" class="collapse" aria-labelledby="ajob-7" data-parent="#ajob">
                                <div class="card-body">
                                    <?=$job_aca_qualification?>
                                    <?=$job_qualification?>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>

                        <?php if ($job_relation_int || $job_relation_ext) : ?>
                        <div class="card">
                            <div class="card-header" id="ajob-8">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#ajob-c8" aria-expanded="false" aria-controls="ajob-c8">Working Relationships</button>
                            </h5>
                            </div>
                            <div id="ajob-c8" class="collapse" aria-labelledby="ajob-8" data-parent="#ajob">
                                <div class="card-body">
                                    <?=$job_relation_int?>
                                    <?=$job_relation_ext?>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <!-- <?php get_template_part('templates/career/form'); ?> -->
        </div>
    </div>
</section>

<?php 
        endwhile;
    endif;
?>

<style type="text/css">
.card-body ol li { font-weight: normal; }
</style>

<?php get_footer(); ?>