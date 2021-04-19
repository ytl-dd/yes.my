<main>
    <section class="dblock flexbox light" style="background-image:url('/wp-content/themes/yes.my/images/yes2018/Group 5508.jpg');">
        <div class="fullscreen centerize center-text">
            <div style="max-width:1132px;">
                <p class="shoutout lg">我们说Yes，致力改善每个马来西亚人的生活。</p>
            </div>
        </div>

        <div class="bottom centerize"><span class="link-group"><a class="btn-scroll-down"><svg class="ia ia-below">
                        <use xlink:href="/ia-defs.svg#ia-below"></use>
                    </svg></a></span></div>
    </section>

    <section class="dblock dblock-submenu" id="main-content">
        <nav class="nav-page">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-lg-none">
                        <div class="dropdown"><button aria-expanded="false" aria-haspopup="true"
                                class="btn dropdown-toggle" data-toggle="dropdown" id="ddPage" type="button"><svg
                                    class="ia ia-videocam">
                                    <use xlink:href="/ia-defs.svg#ia-videocam"></use>
                                </svg>&nbsp;<b>编辑部</b></button>

                            <div aria-labelledby="ddPage" class="dropdown-menu"><a class="dropdown-item"
                                    href="/zh-hans/who-we-are?skip"><svg class="ia ia-people">
                                        <use xlink:href="/ia-defs.svg#ia-people"></use>
                                    </svg>&nbsp;<b>我们是谁</b></a> <a class="dropdown-item" href="/zh-hans/what-we-do?skip"><svg
                                        class="ia ia-briefcase">
                                        <use xlink:href="/ia-defs.svg#ia-briefcase"></use>
                                    </svg>&nbsp;<b>我们所做的</b></a> <a class="dropdown-item"
                                    href="/zh-hans/responsibility?skip"><svg class="ia ia-hand">
                                        <use xlink:href="/ia-defs.svg#ia-hand"></use>
                                    </svg>&nbsp;<b>责任</b></a> <a class="dropdown-item" href="/zh-hans/media-centre?skip"><svg
                                        class="ia ia-videocam">
                                        <use xlink:href="/ia-defs.svg#ia-videocam"></use>
                                    </svg>&nbsp;<b>编辑部</b></a> <a class="dropdown-item" href="/zh-hans/job-at-yes?skip"><svg
                                        class="ia ia-person-add">
                                        <use xlink:href="/ia-defs.svg#ia-person-add"></use>
                                    </svg>&nbsp;<b>工作职缺</b></a></div>
                            <input id="curPage" name="curPage" type="hidden" />
                        </div>
                    </div>

                    <div class="col-12 d-none d-lg-block">
                        <div class="page-menu"><a href="/zh-hans/who-we-are?skip" role="button" tabindex="0"><svg
                                    class="ia ia-people">
                                    <use xlink:href="/ia-defs.svg#ia-people"></use>
                                </svg> <span>我们是谁</span> </a> <a href="/zh-hans/what-we-do?skip" role="button" tabindex="0">
                                <svg class="ia ia-briefcase">
                                    <use xlink:href="/ia-defs.svg#ia-briefcase"></use>
                                </svg> <span>我们所做的</span> </a> <a href="/zh-hans/responsibility?skip" role="button"
                                tabindex="0"> <svg class="ia ia-hand">
                                    <use xlink:href="/ia-defs.svg#ia-hand"></use>
                                </svg> <span>责任</span> </a> <a class="selected" href="/zh-hans/media-centre?skip" role="button"
                                tabindex="0"> <svg class="ia ia-videocam">
                                    <use xlink:href="/ia-defs.svg#ia-videocam"></use>
                                </svg> <span>编辑部</span></a> <a href="/zh-hans/job-at-yes?skip" role="button" tabindex="0"> <svg
                                    class="ia ia-person-add">
                                    <use xlink:href="/ia-defs.svg#ia-person-add"></use>
                                </svg> <span>工作职缺</span> </a></div>
                    </div>
                </div>
            </div>
        </nav>
    </section>

    <section class="dblock flexbox">
        <div>
            <form>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <p class="shoutout lg brand">最新更新。</p>

                            <p class="shoutout-note xl grey">所有事情都发生在Yes。</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <div class="form-group"><label for="ddCategory">过滤</label>

                                <div class="dropdown" id="ddCategory"><button aria-expanded="false" aria-haspopup="true"
                                        class="btn dropdown-toggle" data-toggle="dropdown" type="button">All</button>

                                    <div aria-labelledby="ddCategory" class="dropdown-menu"><button
                                            class="dropdown-item" data-value="" type="button">All</button>
                                        <!--%drupal-category-filter%-->
                                    </div>
                                    <input id="category" name="category" type="hidden" />
                                </div>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group"><label for="ddYear">年份</label>

                                <div class="dropdown" id="ddYear"><button aria-expanded="false" aria-haspopup="true"
                                        class="btn dropdown-toggle" data-toggle="dropdown" type="button">Please
                                        Select</button>

                                    <div aria-labelledby="ddYear" class="dropdown-menu">
                                        <!--%drupal-year-filter%-->
                                    </div>
                                    <input id="year" name="year" type="hidden" />
                                </div>
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
                <div class="row">
                    <!--%drupal-featured-news%-->
                </div>
            </div>
        </div>

        <div class="filter-hasresults">
            <div class="container newsResults">
                <div class="row">
                    <!--%drupal-news%-->
                </div>
            </div>
        </div>
    </section>
</main>