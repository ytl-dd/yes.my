(function() {
    var stageW,
        stageH,
        header,
        headerH,
        mobileSize = 838,
        pageScrollY,
        currScrollVal = 0;

    $(function() {
        header = $('.header-sect');
        pageScrollY = $(window).scrollTop();
        initPageResize();
        initBodyScroll();
        initNavi();
        initSearch();
    });

    /*---- Header ----*/

    function initBodyScroll() {
        $(window).scroll(throttleFn(function() {
            pageScrollY = $(window).scrollTop();
            setSmartHeader();
        }));

        setSmartHeader();
    };

    function setSmartHeader() {
        if($(".header-sect").length) {
            if(pageScrollY >= currScrollVal) {
                if(pageScrollY > headerH
                && !$(".but-control.but-mobile").hasClass("active")) {
                    hideSubNavi();
                    header.addClass('hide');
                    hideSearchPanel();
                };
            } else {
                header.removeClass('hide');
            };

            currScrollVal = pageScrollY;
        };
    };

    /*---- Navigation ----*/

    var menuDelayOut,
        menuDelayTime = 100,
        currTopNavi,
        currSubNavi;

    function initNavi() {
        currTopNavi = 0;
        initTopNavi();
        initMainNavi();
        initMobileNavi();
    };

    /* Top Nav */
    function initTopNavi() {
        if($(".top-navi-hdr").length) {
            var topNavi = $(".top-navi-hdr").find(".but-navi").not('.js-ignore-navi');

            topNavi.click(function() {
                currTopNavi = topNavi.index(this);
                showMainNavi();
            });

            showMainNavi();
        };
    };

    function showMainNavi() {
        var topNavi = $(".top-navi-hdr").find(".but-navi").not('.js-ignore-navi');
        var mainNaviHdr = $(".main-navi-hdr").find(".but-navi-hdr");

        hideMainNavi();
        topNavi.eq(currTopNavi).addClass("current");
        mainNaviHdr.eq(currTopNavi).show();
    };

    function hideMainNavi() {
        var topNavi = $(".top-navi-hdr").find(".but-navi");
        var mainNaviHdr = $(".main-navi-hdr").find(".but-navi-hdr");

        topNavi.removeClass("current");
        mainNaviHdr.hide();
    };

    /* Main Nav */
    function initMainNavi() {
        if($(".main-navi-hdr").length) {
            var mainNaviHdr = $(".main-navi-hdr").find(".but-navi-hdr");
            var subNaviHdr = $(".sub-navi-hdr");
            var hoverTimer;
            var hoverDelay = 250;

            mainNaviHdr.each(function(){
                var theBut = $(this).find(".but-navi.with-sub");

                theBut.each(function(butIndex) {
                    var thisBut = $(this);

                    thisBut.mouseenter(function(){
                        clearTimeout(hoverTimer);

                        hoverTimer = setTimeout(function() {
                            currSubNavi = butIndex;

                            if(!header.hasClass("mobile")){
                                clearMenuOutInt();
                                hideSearchPanel();

                                if(!thisBut.hasClass("current")){
                                    showSubNavi(currSubNavi);
                                }
                            };
                        }, hoverDelay);
                    })
                    .mouseleave(function(){
                        clearTimeout(hoverTimer);

                        hoverTimer = setTimeout(function() {
                            if(!header.hasClass("mobile")){
                                setMenuOutInt();
                            };
                        }, hoverDelay);
                    })
                    .click(function(){
                        clearTimeout(hoverTimer);

                        currSubNavi = butIndex;

                        if(thisBut.hasClass("current")){
                            hideSubNavi();
                        }else{
                            showSubNavi(currSubNavi);
                        };
                    });
                });
            });

            subNaviHdr.mouseenter(function(){
                clearTimeout(hoverTimer);
                clearMenuOutInt();
            })
            .mouseleave(function(){
                clearTimeout(hoverTimer);

                hoverTimer = setTimeout(function() {
                    if(!header.hasClass("mobile")){
                        setMenuOutInt();
                    };

                }, hoverDelay);
            });

            hideSubNavi();
        };
    };

    function setMenuOutInt() {
        menuDelayOut = setInterval(hideSubNavi, menuDelayTime);
    };

    function clearMenuOutInt() {
        clearInterval(menuDelayOut);
    };

    function showSubNavi() {
        var mainNaviHdr = $(".main-navi-hdr").find(".but-navi-hdr").eq(currTopNavi);
        var mainNavi = mainNaviHdr.find(".but-navi.with-sub");
        var subNaviHdr = mainNaviHdr.find(".sub-navi-hdr");

        hideSubNavi();

        mainNavi.eq(currSubNavi).addClass("current");

        var activeMenu = mainNaviHdr.find(".but-navi.with-sub.current"),
            activeMenuArrowPos = activeMenu.offset().left + (activeMenu.outerWidth() * .5),
            thirdNaviCentrePoint = subNaviHdr.outerWidth() * .5;
        var childrenWidth = (function() {
            var width = 0;
            subNaviHdr.each(function(n) {
                if ($(this).prev('.but-navi').hasClass('current')) {
                    $(this).show().find('.but-navi-sub').each(function() {
                        width += $(this).outerWidth();
                    }).end().hide();
                }
            });
            return width;
        })();

    subNaviHdr.css('padding-left', 0);
    subNaviHdr.css('padding-right', 0);
        if (childrenWidth < $('.wrapper').eq(0).width() * .8) {
        if((activeMenuArrowPos - thirdNaviCentrePoint)>=300){
            subNaviHdr.css('padding-left', (activeMenuArrowPos - thirdNaviCentrePoint)*1.5);
        }else if((activeMenuArrowPos - thirdNaviCentrePoint)>=0){
            subNaviHdr.css('padding-left', (activeMenuArrowPos - thirdNaviCentrePoint) * 2);
        }else{
            subNaviHdr.css('padding-right', ((activeMenuArrowPos - thirdNaviCentrePoint) * 2)*-1);
        }
        } else {
            subNaviHdr.css('padding-left', 0);
        }

        subNaviHdr.eq(currSubNavi).slideDown(transSpeed);
    };

    function hideSubNavi() {
        clearMenuOutInt();

        var mainNaviHdr = $(".main-navi-hdr").find(".but-navi-hdr");
        var mainNavi = mainNaviHdr.find(".but-navi");
        var subNaviHdr = $(".sub-navi-hdr");

        mainNavi.removeClass("current");
        subNaviHdr.slideUp(transSpeed);
    };

    /* Web Nav */
    function showWebNavi() {
        var butMobileNavi = $(".but-control.but-mobile");
        var webNavi = $(".header-navi-panel");

        header.removeClass("relative");
        butMobileNavi.removeClass("active");
        webNavi.show();

        removeFullNaviH();

        hideSubNavi();
    };

    /* Mobile Nav */
    function initMobileNavi() {
        var butMobileNavi = $(".but-control.but-mobile");

        if(butMobileNavi.length ) {
            butMobileNavi.click(function() {
                if($(this).hasClass("active")) {
                    hideMobileNavi();
                } else {
                    showMobileNavi();
                };
            });
        };
    };

    function showMobileNavi() {
        var butMobileNavi = $(".but-control.but-mobile");
        var mobileNavi = $(".header-navi-panel");

        $('body').addClass('mobilenavi-active');
        window.scrollTo(0, 0);
        header.addClass("relative");
        butMobileNavi.addClass("active");
        mobileNavi.slideDown(transSpeed);

        setFullNaviH();

        hideSearchPanel();
    };

    function hideMobileNavi() {
        var butMobileNavi = $(".but-control.but-mobile");
        var mobileNavi = $(".header-navi-panel");

        $('body').removeClass('mobilenavi-active');
        header.removeClass("relative");
        butMobileNavi.removeClass("active");
        mobileNavi.slideUp(transSpeed);

        removeFullNaviH();

        hideSubNavi();
    };

    function setFullNaviH() {
        var theNaviHdr = $(".main-navi-hdr");
        var tempH = stageH - $(".header-navi-mobile").height() - $(".top-navi-hdr").height();
        theNaviHdr.css("height", tempH);
    };

    function removeFullNaviH() {
        var theNaviHdr = $(".main-navi-hdr");
        theNaviHdr.removeAttr("style");
    };

    /*---- Search ----*/

    function initSearch() {
        var butSearch = $(".but-search");

        if(butSearch.length) {
            butSearch.click(function() {
                if ($(this).hasClass("active")) {
                    hideSearchPanel();
                } else {
                    showSearchPanel();
                };
            })
        };
    };

    function showSearchPanel() {
        var butSearch = $(".but-search");
        var searchPnl = $(".header-search-panel");

        butSearch.addClass("active");
        searchPnl.slideDown(transSpeed);
        searchPnl.find('.search-field').focus();
    };

    function hideSearchPanel() {
        var butSearch = $(".but-search");
        var searchPnl = $(".header-search-panel");

        butSearch.removeClass("active");
        searchPnl.slideUp(transSpeed);
    };

    /*---- Page Resize ----*/


    function initPageResize() {
        pageResize();
        $(window).resize(pageResize);
    };

    function pageResize() {
        stageW = $(window).width();
        stageH = $(window).height();

        if(stageW <= mobileSize) {
            headerH = 50;
            resetMobileView();
        } else {
            headerH = 120;
            resetWebView();
        };
    }

    function resetMobileView() {
        if(!header.hasClass("mobile")) {
            header.addClass("mobile");
            hideMobileNavi();
        };
    };

    function resetWebView() {
        if(header.hasClass("mobile")) {
            header.removeClass("mobile");
            showWebNavi();
        }
    };

    /*---- Utilities ----*/

    function throttleFn(props) {
        if(typeof props === 'function') {
            props = {
                runWhen: 'start',
                duration: 250,
                start: 0,
                fn: props
            };
        } else {
            props = $.extend({
                runWhen: 'start',
                duration: 250,
                start: 0
            }, props);
        }

        var throttledFn;

        if(typeof props.fn === 'undefined') {
            throttledFn = function() {};
        } else {
            var last = new Date(props.start),
                timer;

            throttledFn = function() {
                var now = new Date(),
                    diff = now - last;

                clearTimeout(timer);

                if(props.runWhen === 'end' && diff >= Math.min(props.duration*2, props.duration+1000)) {
                    last = now;
                } else if(diff >= props.duration) {
                    props.fn();
                    last = now;
                } else {
                    timer = setTimeout(function() {
                        props.fn();
                        last = new Date();
                    }, props.duration-diff);
                }
            };
        }

        return throttledFn;
    }
})(jQuery);
