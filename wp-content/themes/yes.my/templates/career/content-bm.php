<section class="dblock flexbox" id="main-content">
    <div>
        <form>
            <div class="container">
                <div class="row">
                    <div class="col center-text">&nbsp;
                        <p class="shoutout lg brand">Pembukaan</b> semasa.</b></p>
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
                                <td>Jawatan</td>
                                <td>Lokasi</td>
                                <td>Tarikh Tutup</td>
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