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

                <div class="row">
                    <div class="col-6">
                        <div class="form-group"><label for="ddDivision">Division</label>

                            <div class="dropdown" id="ddDivision"><button aria-expanded="false" aria-haspopup="true"
                                    class="btn dropdown-toggle" data-toggle="dropdown" type="button">All</button>

                                <div aria-labelledby="ddDivision" class="dropdown-menu"><button class="dropdown-item"
                                        data-value="" type="button">All</button>
                                    <!--%drupal-division-filter%-->
                                </div>
                                <input id="division" name="division" type="hidden" />
                            </div>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="form-group"><label for="ddLocation">Location</label>

                            <div class="dropdown" id="ddLocation"><button aria-expanded="false" aria-haspopup="true"
                                    class="btn dropdown-toggle" data-toggle="dropdown" type="button">All</button>

                                <div aria-labelledby="ddLocation" class="dropdown-menu"><button class="dropdown-item"
                                        data-value="" type="button">All</button>
                                    <!--%drupal-location-filter%-->
                                </div>
                                <input id="location" name="location" type="hidden" />
                            </div>
                        </div>
                    </div>
                </div>
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
                            <!--%drupal-vacancy%-->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>