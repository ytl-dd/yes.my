<section class="dblock flexbox" id="main-content">
    <div>
        <form>
            <div class="container">
                <div class="row">
                    <div class="col center-text">&nbsp;
                        <p class="shoutout lg brand">目前 <b>开放。</b></p>
                        <br />
                        &nbsp;
                    </div>
                </div>

                <?php get_template_part('templates/career/filter'); ?>
            </div>
        </form>
    </div>
</section>

<section class="dblock flexbox">
    <div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <table class="table-std" id="careerResults">
                        <thead>
                            <tr>
                                <td>Position</td>
                                <td>Location</td>
                                <td>Closing Date</td>
                                <td>&nbsp;</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php get_template_part('templates/career/vacancies'); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_template_part('templates/career/scripts'); ?>