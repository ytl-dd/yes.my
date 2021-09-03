// JavaScript Document
var stageW;

var mobileSizeS;

var transSpeed;

var hashVal;

$(function() {

    initPage();

});

function initPage() {
    console.log("start");
    mobileSizeS = 751;

    transSpeed = 200;

    //initDisableDoubleTab();

    initHashChange();

    initDropdownSelector();

    initCustomFileBrowse();

    initToggle();

    initInnerToggle();

    initInnerTabPanel();

    initPromoBnr();

    initPageResize();

    initPopup();

    //===//
    initBBPrepaid();

    initPdctDetails();

    initSupport();

    initAboutUs();

    initBusiness();

    initTabBanners();

    initRewards();

    initIDDRates();
    
    console.log("end");
};

//-------hash change------//
function initHashChange() {

    hashVal = location.hash;

    hashVal = hashVal.substr(1, hashVal.length);

    $(window).on('hashchange', function() {
        hashVal = location.hash;
        hashVal = hashVal.substr(1, hashVal.length);

        if ($(".toggle-hdr").length > 0) {
            var $hashToggle = $('.toggle-hdr#' + hashVal);

            if($hashToggle.length && !$hashToggle.hasClass('active')) {
                $('.toggle-hdr#' + hashVal)
                    .parents('.toggle-hdr')
                        .each(function() {
                            if(!$(this).hasClass('active')) {
                                $(this).children('.toggle-tab').click();
                            }
                        })
                        .end()
                    .children('.toggle-tab')
                        .click();
            }
        }

        if ($(".inner-toggle-hdr").length > 0) {
            var thisToggle = $(".inner-toggle-hdr#" + hashVal);
            var thisParent = thisToggle.parents('.toggle-hdr');

            thisParent.each(function() {
                if(!$(this).hasClass('active')) {
                    $(this).children('.toggle-tab').click();
            }
            });

            setTimeout(function() {
                if(!thisToggle.hasClass('active')) {
                    thisToggle.find(".inner-toggle-tab").click();
                }
            }, transSpeed);
        }

        if ($(".panel-tab").length > 0) {
            showInnerTabCtnt(hashVal);
        }

    });
};

//-------body scroll------//

function enableBodyScroll() {
    $("body").removeClass("overflow-hidden");
};

function disableBodyScroll() {
    $("body").addClass("overflow-hidden");
};

//----------page resize-------------//

function initPageResize() {

    pageResize();

    $(window).resize(function() {
        pageResize();
    });

};

function pageResize() {
    stageW = $(window).width();

    resizeDropDown();

    resizeProductPanel();

    resizeListPanel();

    //----//
    resizeBroadband();

    resizeMediaCtr();

    resizeSupport4GExpPanel();

    resizeBusinessReasonPanels();

    resizeBusinessAppPanels();

    resizeYesBizServices();

    resizeStepsList();
};

//--------dropdown selector------------//
function initDropdownSelector() {
console.log('t');
    if ($('.customDropdown').length > 0) {
console.log('2');
        $('.customDropdown').each(function() {
            var d = $(this);
            if (d.parent().attr('class') != 'customDropdownHolder') {
                d.wrap('<div class="customDropdownHolder" />')
                    .before('<div class="texter">' + d.find('option:selected').text() + '</div>')
                    .change(function() {
			console.log('changing');
                        $(this).parent().find('.texter').html($(this).find('option:selected').text());
                    });
                //d.parent().width(d.width()-72).wrap('<div class="customDropdownBorder" />');
            }
        });
    }

};

function resizeDropDown() {
    if ($('.customDropdown').length > 0) {
        $('.customDropdown').each(function() {
            var d = $(this);

            //d.parent().width(d.parent().parent().parent().width()-72);

        })
    }
};

//--------file browse----------------//
function initCustomFileBrowse() {
    if ($('.custom-upload-hdr').length > 0) {
        $('.custom-upload-hdr').find('input[type=file]').change(function(e) {
            var tempStr = $(this).val();
            var tempArr = tempStr.split('\\');

            $(this).parent().find(".file-upload-txt").attr("value", tempStr);
        });
    }
};

/*--------toggle-------------------*/

function initToggle() {
    if ($(".toggle-hdr").length > 0) {
        var initToggleGroup = function($toggleGroup) {
            var $toggleTabs = $toggleGroup.children('.toggle-tab');
            var $toggleCtnts = $toggleGroup.children('.toggle-ctnt');

            $toggleGroup.each(function() {
                var $thisToggle = $(this);
                var $thisToggleTab = $thisToggle.children('.toggle-tab');
                var $thisToggleCtnt = $thisToggle.children('.toggle-ctnt');

                $thisToggleTab.on('click', function(e) {
                    if($thisToggle.hasClass('active')) {
                        $thisToggle.removeClass('active');
                        $thisToggleCtnt.slideUp(transSpeed);
            } else {
                        $toggleGroup.not($thisToggle).removeClass('active');
                        $toggleCtnts.not($thisToggleCtnt).slideUp(transSpeed);
                        $thisToggle.addClass('active');
                        $thisToggleCtnt.slideDown(transSpeed);
                initPageResize();
        }
                });
            });
};

        var $toggles = $('.toggle-hdr');
        var $groupedToggles = $toggles.filter('[data-toggle-group]');

        if($groupedToggles.length) {
            var groupNames = [];

            $groupedToggles.each(function() {
                var groupName = $(this).data('toggle-group');
                if(groupNames.indexOf(groupName) < 0) {
                    groupNames.push(groupName);
                }
            });

            $.each(groupNames, function(arrayIndex, arrayValue) {
                var $toggleGroup = $toggles.filter('[data-toggle-group="' + arrayValue + '"]');
                initToggleGroup($toggleGroup);
            });

            $toggles = $toggles.not($groupedToggles);
        }

        if($toggles.length) {
            initToggleGroup($toggles);
        }

        if(hashVal != "") {
            var $hashToggle = $('.toggle-hdr#' + hashVal);

            if($hashToggle.length && !$hashToggle.hasClass('active')) {
                $('.toggle-hdr#' + hashVal)
                    .parents('.toggle-hdr')
                        .each(function() {
                            if(!$(this).hasClass('active')) {
                                $(this).children('.toggle-tab').click();
    }
                        })
                        .end()
                    .children('.toggle-tab')
                        .click();
            }
        }
    };
};

/*--------inner toggle----------------*/
var currInnerToggleVal;

function initInnerToggle() {

    if ($(".inner-toggle-hdr").length > 0) {

        currInnerToggleVal = 0;

        var theHdr = $(".inner-toggle-hdr");
        var theTab = $(".inner-toggle-hdr").find(".inner-toggle-tab");

        theTab.click(function() {

            currInnerToggleVal = theTab.index(this);

            var currHdr = theHdr.eq(currInnerToggleVal);

            if (currHdr.hasClass("active")) {
                hideInnerToggleCtnt();
            } else {
                showInnerToggleCtnt(currInnerToggleVal);
            };

        });

        hideInnerToggleCtnt(true);

        if (hashVal != "") {
            var thisToggle = $(".inner-toggle-hdr#" + hashVal);
            var thisParent = thisToggle.parents('.toggle-hdr');

            thisParent.each(function() {
                if(!$(this).hasClass('active')) {
                    $(this).children('.toggle-tab').click();
                }
            });

            setTimeout(function() {
                if(!thisToggle.hasClass('active')) {
                    thisToggle.find(".inner-toggle-tab").click();
                }
            }, transSpeed);
        }
    };

};

function showInnerToggleCtnt(n) {

    currInnerToggleVal = n;

    hideInnerToggleCtnt();

    var theHdr = $(".inner-toggle-hdr");
    var theTab = $(".inner-toggle-hdr .inner-toggle-tab");
    var theCtnt = $(".inner-toggle-hdr .inner-toggle-ctnt");

    theHdr.eq(currInnerToggleVal).addClass("active");
    theCtnt.eq(currInnerToggleVal).slideDown(transSpeed);

};

function hideInnerToggleCtnt(noSlide) {

    var theHdr = $(".inner-toggle-hdr");
    var theTab = $(".inner-toggle-hdr .inner-toggle-tab");
    var theCtnt = $(".inner-toggle-hdr .inner-toggle-ctnt");

    theHdr.removeClass("active");

    if (noSlide) {
        theCtnt.slideUp(0);
    } else {
        theCtnt.slideUp(transSpeed);
    }
};


//-------disable double Tab-----------//
function initDisableDoubleTab() {

    $('a').on('touchend', function(e) {
        var el = $(this);
        var link = el.attr('href');
        var theTarget = el.attr('target');

        if (theTarget == "_blank" || theTarget == "_self" || theTarget == "_top" || theTarget == "_parent") {
            window.open(link, theTarget);
        } else {
            window.location = link;
        };
    });

};

/*------promo banner----*/

function initPromoBnr() {
    $('.promo-bnr-sect').each(function() {
        var $banners = $(".promo-bnr-sect").find(".promo-bnr-panel"),
            $navHdr = $(".promo-bnr-sect").find(".promo-bnr-navi-hdr"),
            animationend = 'animationend webkitAnimationEnd MSAnimationEnd oAnimationEnd',
            totalBanners = $banners.length,
            currentBanner = 0,
            allAnimClasses = 'slide-from-left slide-from-right slide-to-left slide-to-right',
            showPromoBnr,
            startPromoBnrInterval,
            bannerInterval,
            $dots,
            tempStr,
            i;

        if(totalBanners) {
            tempStr = '';

            for(i = 0; i < $banners.length; i++) {
                tempStr += '<div class="but-dot"></div>';
            }

            $navHdr.html(tempStr);

            $dots = $navHdr.find('.but-dot');
            $dots.eq(0).addClass('current');

            showPromoBnr = function(targetIndex) {
                var $currentBanner = $banners.eq(currentBanner),
                    $targetBanner = $banners.eq(targetIndex),
                    currentBannerAnimClass,
                    targetBannerAnimClass;

                if(targetIndex > currentBanner) {
                    currentBannerAnimClass = 'slide-to-left';
                    targetBannerAnimClass = 'slide-from-right';
                } else {
                    currentBannerAnimClass = 'slide-to-right';
                    targetBannerAnimClass = 'slide-from-left';
                }

                $currentBanner
                    .removeClass(allAnimClasses)
                    .off(animationend)
                    .on(animationend, function() {
                        $(this)
                            .off(animationend)
                            .removeClass(currentBannerAnimClass);
                    })
                    .addClass(currentBannerAnimClass);

                $targetBanner
                    .removeClass(allAnimClasses)
                    .off(animationend)
                    .on(animationend, function() {
                        $(this)
                            .off(animationend)
                            .removeClass(targetBannerAnimClass);
                    })
                    .addClass(targetBannerAnimClass);

                $banners.removeClass('current').eq(targetIndex).addClass('current');
                $dots.removeClass('current').eq(targetIndex).addClass('current');

                currentBanner = targetIndex;
            };

            startPromoBnrInterval = function() {
                clearInterval(bannerInterval);

                bannerInterval = setInterval(function() {
                    if(currentBanner >= totalBanners-1) {
                        showPromoBnr(0);
                    } else {
                        showPromoBnr(currentBanner+1);
                    }
                }, 8000);
            };

            $dots.on('click', function(e) {
                e.preventDefault();
                startPromoBnrInterval();

                if(!$(this).hasClass('current')) {
                    showPromoBnr($dots.index(this));
                }
            });

            startPromoBnrInterval();
        } else {
            bnrNaviHdr.remove();
        }
    });
};

/*-------product panel------------*/
function resizeProductPanel() {

    if ($(".product-panel-hdr").length > 0) {

        var thePanel = $(".product-panel-hdr").find(".product-panel");

        var tempNameH = 0;
        var tempDescH = 0;
        var tempBundleH = 0;

        thePanel.each(function() {

            var panelImg = $(this).find(".img-hdr");
            var panelName = $(this).find(".product-name");
            var panelDesc = $(this).find(".product-desc");
            var panelBundle = $(this).find(".product-bundle");

            panelName.removeAttr("style");
            panelDesc.removeAttr("style");
            panelBundle.removeAttr("style");

            if ($(this).hasClass("hlight")) {

            } else {

                if (panelName.height() > tempNameH) {
                    tempNameH = panelName.height();
                };

                if (panelDesc.height() > tempDescH) {
                    tempDescH = panelDesc.height();
                };

                if (panelBundle.height() > tempBundleH) {
                    tempBundleH = panelBundle.height();
                };
            };

        });

        //---
        if (stageW > mobileSizeS) {

            thePanel.each(function() {

                if ($(this).hasClass("hlight")) {

                } else {

                    $(this).find(".product-name").css("height", tempNameH);
                    $(this).find(".product-desc").css("height", tempDescH);
                    $(this).find(".product-bundle").css("height", tempBundleH);
                };

            });

        };
        //---
    };
};


/*--------list panel---------------*/
function resizeListPanel() {

    if ($(".panel-list-hdr").length > 0) {

        $(".panel-list-hdr").each(function() {

            var thePanel = $(this).find(".panel-hdr");
            var theTitle = $(this).find(".title-hdr");
            var theDesc = $(this).find(".desc-hdr");

            if (theTitle.length > 0 || theDesc.length > 0) {

                //---
                if (theTitle.length > 0) {

                    var tempTitleH = 0;

                    theTitle.each(function() {

                        $(this).removeAttr("style");

                        if ($(this).height() > tempTitleH) {

                            tempTitleH = $(this).height();
                        };

                    });

                    theTitle.css("height", tempTitleH);
                };

                //---
                if (theDesc.length > 0) {

                    var tempDescH = 0;

                    theDesc.each(function() {

                        $(this).removeAttr("style");

                        if ($(this).height() > tempDescH) {

                            tempDescH = $(this).height();
                        };

                    });

                    theDesc.css("height", tempDescH);
                };

                //---

            } else {

                var tempH = 0;

                thePanel.each(function() {

                    $(this).removeAttr("style");

                    if ($(this).height() > tempDescH) {

                        tempDescH = $(this).height();
                    };

                });

                thePanel.css("height", tempH);

            };


        });

    };

};

/*--------inner tab panel---------------*/
var currInnerTab = 0;

var currInnerTabSlider;
var totalInnerTabSlider;

function initInnerTabPanel() {

    if ($(".panel-tab-overflow-hdr").length > 0) {

        var $instance = $(".panel-tab-overflow-hdr").eq(0),
            $scroller = $instance.find('.panel-tab-hdr'),
            $tabs = $instance.find(".panel-tab"),
            $currentTab = $tabs.filter('.current'),
            $leftArrow = $instance.find('.arr-left'),
            $rightArrow = $instance.find('.arr-right'),
            scrollToTab = function() {
                $scroller.scrollLeft(
                    $scroller.scrollLeft()
                    + $(this).offset().left
                    - ($scroller.outerWidth() - $(this).width())*0.5
                );
            },
            toggleArrows = function() {
                var scrollLeft = $scroller.scrollLeft(),
                    scrollWidth = $scroller[0].scrollWidth,
                    outerWidth = $scroller.outerWidth();

                $leftArrow.toggleClass(
                    'is-hidden',
                    scrollLeft < 1
                    || scrollWidth === outerWidth
                );
                $rightArrow.toggleClass(
                    'is-hidden',
                    $scroller[0].scrollWidth - $scroller.outerWidth() - $scroller.scrollLeft() < 1
                    || scrollWidth === outerWidth
                );
            };

        $tabs.css("width", (100/$tabs.length) + "%");
        $scroller.on('scroll', toggleArrows);
        $(window).on('resize', toggleArrows);
        toggleArrows();
        $instance.on('click', '.panel-tab', scrollToTab);
        scrollToTab.call($currentTab);

        $leftArrow.on('click', function(e) {
            e.preventDefault();
            $scroller.animate({
                scrollLeft: $scroller.scrollLeft() - $scroller.outerWidth()*0.5
            }, 250);
        });

        $rightArrow.on('click', function(e) {
            e.preventDefault();
            $scroller.animate({
                scrollLeft: $scroller.scrollLeft() + $scroller.outerWidth()*0.5
            }, 250);
        });

        /* Initial hash value */

        if (hashVal == "") {
            showInnerTabCtnt();
        } else {
            showInnerTabCtnt(hashVal);
        };

    };

};

function showInnerTabCtnt(n) {
    var theTab = $(".panel-tab-hdr").find(".panel-tab");
    var theCtnt = $(".panel-ctnt-hdr");

    hideInnerTabCtnt();

    if (n == undefined) {

        theTab.eq(currInnerTab).addClass("current");
        theCtnt.eq(currInnerTab).show();
    } else {
        currInnerTab = theTab.index('.panel-tab-' + n);
        theTab.filter('.panel-tab-' + n).addClass('current');
        theCtnt.filter(".panel-ctnt-hdr-" + n).show();
    };

    pageResize();
};

function hideInnerTabCtnt() {

    var theTab = $(".panel-tab-hdr").find(".panel-tab");
    var theCtnt = $(".panel-ctnt-hdr");

    theTab.removeClass("current");
    theCtnt.hide();

};


/*--------popup--------------------*/
function initPopup() {

    $(".popup-table").click(function() {

        closePopupOuter();
    });

    //closePopup();

};

function closePopup() {

    enableBodyScroll();

    //---

    if ($(".popup-screen").hasClass("popup-video")) {

        $('.popup-video-hdr')[0].contentWindow.postMessage('{"event":"command","func":"' + 'stopVideo' + '","args":""}', '*');
    };

    //---
    $(".popup-screen").hide();
};

function closePopupOuter() {

    if ($(".popup-content-holder:hover").length != 0) {

    } else {
        closePopup();

    }
};

function showPopup(n) {

    //$(".popup-screen").show();

    $("." + n).show();
};

/*---loader---*/
function hideLoader() {

    $(".icon-load").hide();

};

/*======================================*/

/*----broadband-----*/
function resizeBroadband() {

    if ($(".broadband-sect").length > 0) {

        resizeBBPanel();

    };

};

function resizeBBPanel() {

    $(".plan-list-hdr").each(function() {

        var thePanel = $(this).find(".plan-list-pnl");

        var packageHdr = thePanel.find(".package-hdr");

        if (packageHdr.length > 0) {

            var tempPackH = 0;

            packageHdr.removeAttr("style");

            packageHdr.each(function() {

                if ($(this).height() > tempPackH) {

                    tempPackH = $(this).height();
                };
            });

            packageHdr.css("height", tempPackH);

        };


    });

    //---
    $(".device-list-hdr").each(function() {

        var theDvcPanel = $(this).find(".device-list-pnl");
        var theDesc = theDvcPanel.find(".desc-hdr");

        if (theDesc.length > 0) {

            var tempDvcH = 0;

            theDesc.removeAttr("style");

            theDesc.each(function() {

                if ($(this).height() > tempDvcH) {

                    tempDvcH = $(this).height();
                };
            });

            theDesc.css("height", tempDvcH);
        };

    });

    //---
};

/*----broadband prepaid-----*/
function initBBPrepaid() {

    if ($(".prepaid-bb-sect").length > 0) {

        initHowtoStepCtrl();

    };

};

function initHowtoStepCtrl() {

    $(".channel-autopynt-step-hdr").each(function() {

        var theImgPnl = $(this).find(".channel-autopynt-step-img-pnl");
        var theButPnl = $(this).find(".channel-autopynt-step-but-pnl");
        var theDescPnl = $(this).find(".channel-autopynt-step-desc-pnl");

        var tempMainHdr = $(".channel-autopynt-step-hdr").index(this);

        var theBut = theButPnl.find(".but-num");

        theBut.click(function() {

            var tempButIndex = theBut.index(this);

            showCurrAutoPyntStep(tempMainHdr, tempButIndex);
        });

        showCurrAutoPyntStep(tempMainHdr, 0);
    });

};

function showCurrAutoPyntStep(m, s) {

    hideCurrAutoPyntStep(m);

    var mainStepHdr = $(".channel-autopynt-step-hdr").eq(m);

    var theImgPnl = mainStepHdr.find(".channel-autopynt-step-img-pnl");
    var theButPnl = mainStepHdr.find(".channel-autopynt-step-but-pnl");
    var theDescPnl = mainStepHdr.find(".channel-autopynt-step-desc-pnl");

    var tempImg = theImgPnl.find(".img-hdr").eq(s);
    var tempBut = theButPnl.find(".but-num").eq(s);
    var tempDesc = theDescPnl.find(".desc-hdr").eq(s);

    tempImg.fadeIn(transSpeed);
    tempDesc.fadeIn(transSpeed);

    tempBut.addClass("current");

};

function hideCurrAutoPyntStep(m) {

    var mainStepHdr = $(".channel-autopynt-step-hdr").eq(m);

    var theImgPnl = mainStepHdr.find(".channel-autopynt-step-img-pnl");
    var theButPnl = mainStepHdr.find(".channel-autopynt-step-but-pnl");
    var theDescPnl = mainStepHdr.find(".channel-autopynt-step-desc-pnl");

    var tempImg = theImgPnl.find(".img-hdr");
    var tempBut = theButPnl.find(".but-num");
    var tempDesc = theDescPnl.find(".desc-hdr");

    tempImg.hide();
    tempDesc.hide();

    tempBut.removeClass("current");
};

/*----support-----*/
function initSupport() {

    if ($(".support-sect").length > 0) {

        initToubleshoot();

    };
};

function initToubleshoot() {

    var theCheckBox = $(".theCheckBox");
    var theFormTab = $(".form-extra-info .sect-title.with-close")

    theCheckBox.click(function() {

        updateTroubleCheckForm();
    });

    theFormTab.click(function() {

        var theIndex = theFormTab.index(this);

        theCheckBox.eq(theIndex).prop('checked', false);

        updateTroubleCheckForm();
    });


    updateTroubleCheckForm();
};

function updateTroubleCheckForm() {

    var theCheckBox = $(".theCheckBox");
    var theExtraForm = $(".form-extra-info");

    theExtraForm.hide();

    for (i = 0; i < theCheckBox.length; i++) {

        if (theCheckBox.eq(i).prop('checked')) {

            theExtraForm.eq(i).show();
        };
    };
};

function resizeSupport4GExpPanel() {

    if ($(".support-sect .exp-4g").length > 0) {

        $(".signal-panel-hdr").each(function() {

            var thePanel = $(this).find(".signal-panel");

            thePanel.removeAttr("style");

            var tempPnlH = 0;

            thePanel.each(function() {

                if ($(this).height() > tempPnlH) {
                    tempPnlH = $(this).height();
                };
            });

            thePanel.css("height", tempPnlH);
        });
    };

};

/*----about us-----*/
function initAboutUs() {

    if ($(".aboutus-sect").length > 0) {

        if ($(".career-sect").length > 0) {

            initCareerForm();
        };
    };

};

//---media centre---
function resizeMediaCtr() {

    if ($(".media-press-list-hdr").length > 0) {

        $(".media-press-panel-hdr").each(function() {

            var thePanelArea = $(this).find(".media-press-panel .area-hdr");
            var thePanelTitle = $(this).find(".media-press-panel .title-hdr");

            thePanelArea.removeAttr("style");
            thePanelTitle.removeAttr("style");

            var tempPnlAreaH = 0;
            var tempPnlTitleH = 0;

            thePanelArea.each(function() {

                if ($(this).height() > tempPnlAreaH) {
                    tempPnlAreaH = $(this).height();
                };
            });

            thePanelTitle.each(function() {

                if ($(this).height() > tempPnlTitleH) {
                    tempPnlTitleH = $(this).height();
                };
            });

            thePanelArea.css("height", tempPnlAreaH);
            thePanelTitle.css("height", tempPnlTitleH);
        });
    };

};

//---career---
var academicCount;
var employCount;

var maxCareerAddCount = 3;

function initCareerForm() {

    academicCount = 1;
    employCount = 1;

    var butAddAca = $(".form-acacdemic-hdr").find(".but-add");
    var butAddEmploy = $(".form-employ-hdr").find(".but-add");

    butAddAca.show();
    butAddEmploy.show();

    butAddAca.click(function() {

        academicCount++;

        if (academicCount >= maxCareerAddCount) {
            butAddAca.hide();
        };

        setFormAca();
    });

    butAddEmploy.click(function() {

        employCount++;

        if (employCount >= maxCareerAddCount) {
            butAddEmploy.hide();
        };

        setFormEmploy();
    });

    //form-acacdemic-hdr
    //form-employ-hdr

    setFormAca();
    setFormEmploy();
};

function setFormAca() {

    var thePanel = $(".form-acacdemic-hdr").find(".form-add-panel");

    thePanel.hide();

    for (i = 0; i < academicCount; i++) {
        thePanel.eq(i).show();
    };
};

function setFormEmploy() {

    var thePanel = $(".form-employ-hdr").find(".form-add-panel");

    thePanel.hide();

    for (i = 0; i < employCount; i++) {
        thePanel.eq(i).show();
    };
};

/*-------product-------------*/
/*-------product details------------*/
function initPdctDetails() {

    initPdctPhotoViewer();

    initPdctDetailsPlan();

    initPdctSpecs();

};

//---product viewer---
function initPdctPhotoViewer() {

    if ($(".product-photo-panel").length > 0) {

        var thePanel = $(".product-photo-panel");

        thePanel.each(function() {

            var thePhoto = $(this).find(".product-photo");
            var theNaviHdr = $(this).find(".product-photo-navi-hdr");

            if (thePhoto.length > 1) {

                theNaviHdr.empty();

                var tempStr = "";

                thePhoto.each(function() {

                    tempStr += '<div class="but-dot"></div>';
                });

                theNaviHdr.html(tempStr);

                var theDot = theNaviHdr.find(".but-dot");

                theDot.click(function() {

                    var tempIndex = theDot.index(this);

                    showCurrProductPhoto(tempIndex);
                });

            } else {
                theNaviHdr.hide();
            };
        });

        showCurrProductPhoto(0);
    };
};

function showCurrProductPhoto(n) {

    hideCurrProductPhoto();

    var tempHdr = $(".product-photo-panel");
    var tempPhoto = tempHdr.find(".product-photo").eq(n)
    var theDot = tempHdr.find(".but-dot").eq(n)

    tempPhoto.fadeIn(transSpeed);
    theDot.addClass("current")
};

function hideCurrProductPhoto() {
    var tempHdr = $(".product-photo-panel");
    var tempPhoto = tempHdr.find(".product-photo");
    var theDot = tempHdr.find(".but-dot");

    tempPhoto.hide();
    theDot.removeClass("current");
};

//---product plans---
var currPdctPlan;

function initPdctDetailsPlan() {

    if ($(".product-plan-panel").length > 0) {

        var mainTab = $(".product-plan-panel").find(".plan-panel-tab");
        var mainList = $(".product-plan-panel").find(".plan-panel-list-hdr");
        var mainListPnl = mainList.find(".plan-dtls-panel");

        currPdctPlan = 0;
        //---
        mainTab.click(function() {

            if ($(this).hasClass("active")) {
                hidePdctPlanList();
            } else {
                showPdctPlanList();
            };

        });

        //---
        mainListPnl.click(function() {

            currPdctPlan = mainListPnl.index(this);

            selectPdctPlan();
        });

        selectPdctPlan();
        //---
    };

};

function showPdctPlanList() {

    var mainTab = $(".product-plan-panel").find(".plan-panel-tab");
    var mainList = $(".product-plan-panel").find(".plan-panel-list-hdr");

    mainTab.addClass("active");
    mainList.slideDown(transSpeed);

};

function hidePdctPlanList() {

    var mainTab = $(".product-plan-panel").find(".plan-panel-tab");
    var mainList = $(".product-plan-panel").find(".plan-panel-list-hdr");

    mainTab.removeClass("active");
    mainList.slideUp(transSpeed);
};

function selectPdctPlan() {

    hidePdctPlanList();

    var mainTab = $(".product-plan-panel").find(".plan-panel-tab");
    var mainTabPnl = mainTab.find(".plan-dtls-panel");

    var mainList = $(".product-plan-panel").find(".plan-panel-list-hdr");
    var mainListPnl = mainList.find(".plan-dtls-panel").eq(currPdctPlan);

    mainTabPnl.empty();

    var tempStr = mainListPnl.html();
    var tempVal = mainListPnl.attr("planVal");

    mainTabPnl.html(tempStr);
    mainTabPnl.attr("planVal", tempVal);
};

//---product specs---
var currPdctSpecs;

function initPdctSpecs() {

    if ($(".pdct-spec-sect .panel-tab").length > 0) {

        currPdctSpecs = 0;

        var theTab = $(".pdct-spec-sect .panel-tab");

        theTab.click(function() {

            currPdctSpecs = theTab.index(this);

            showPdctSpecs();
        });

        showPdctSpecs();
    };
};

function showPdctSpecs() {

    var theTab = $(".pdct-spec-sect .panel-tab");
    var theCtnt = $(".pdct-spec-sect .panel-ctnt-hdr");

    hidePdctSpecs();

    theTab.eq(currPdctSpecs).addClass("current");
    theCtnt.eq(currPdctSpecs).show();
};

function hidePdctSpecs() {

    var theTab = $(".pdct-spec-sect .panel-tab");
    var theCtnt = $(".pdct-spec-sect .panel-ctnt-hdr");

    theTab.removeClass("current");
    theCtnt.hide();
};

//---business---

function initBusiness() {
    if ($(".example-video-hdr").length > 0) {
        $(".example-video-hdr").each(function() {
            var exampleVideoHdr = $(this);

            exampleVideoHdr.find(".example-video-thumbnail-hdr").on("click", function() {
                exampleVideoHdr.addClass("show-video");
            });
        });
    }
}

function resizeBusinessReasonPanels() {
    if ($(".reason-panel-hdr").length > 0) {

        $(".reason-panel-hdr").each(function() {

            var thePanelArea = $(this).find(".reason-panel .area-hdr");

            thePanelArea.removeAttr("style");

            var tempPnlAreaH = 0;

            thePanelArea.each(function() {

                if ($(this).height() > tempPnlAreaH) {
                    tempPnlAreaH = $(this).height();
                };
            });

            thePanelArea.css("height", tempPnlAreaH);
        });
    };
}

function resizeBusinessAppPanels() {
    if ($(".app-panel-hdr").length > 0) {

        $(".app-panel-hdr").each(function() {

            var thePanelTitle = $(this).find(".app-panel .title-hdr .area-hdr");
            var thePanelArea = $(this).find(".app-panel .ctnt-hdr .area-hdr");

            thePanelTitle.removeAttr("style");
            thePanelArea.removeAttr("style");

            var tempPnlTitleH = 0;
            var tempPnlAreaH = 0;


            thePanelTitle.each(function() {

                if ($(this).height() > tempPnlTitleH) {
                    tempPnlTitleH = $(this).height();
                };
            });

            thePanelArea.each(function() {

                if ($(this).height() > tempPnlAreaH) {
                    tempPnlAreaH = $(this).height();
                };
            });

            thePanelTitle.css("height", tempPnlTitleH);
            thePanelArea.css("height", tempPnlAreaH);
        });
    };
}

function resizeYesBizServices() {
    if ($(".yesbiz-services-hdr").length > 0) {

        $(".yesbiz-services-hdr").each(function() {
            var thePanelTitle = $(this).find(".yesbiz-service-title .area-hdr");
            var thePanelArea = $(this).find(".yesbiz-service-desc .area-hdr");

            thePanelTitle.removeAttr("style");
            thePanelArea.removeAttr("style");

            var tempPnlTitleH = 0;
            var tempPnlAreaH = 0;


            thePanelTitle.each(function() {

                if ($(this).height() > tempPnlTitleH) {
                    tempPnlTitleH = $(this).height();
                };
            });

            thePanelArea.each(function() {

                if ($(this).height() > tempPnlAreaH) {
                    tempPnlAreaH = $(this).height();
                };
            });

            thePanelTitle.css("height", tempPnlTitleH);
            thePanelArea.css("height", tempPnlAreaH);
        });
    };
}

function initTabBanners() {
    if ($(".panel-tab-banner").length > 0 && $(".panel-tab").length > 0) {
        $(window).on('hashchange', function() {
            $(".panel-tab-banner").removeClass("current").eq(currInnerTab).addClass("current");
        });
    }
}

function resizeStepsList() {
    if ($(".steps-list").length > 0) {

        $(".steps-list").each(function() {
            var theStep = $(this).find(".step-hdr");

            theStep.removeAttr("style");

            var tempH = 0;

            theStep.each(function() {

                if ($(this).outerHeight() > tempH) {
                    tempH = $(this).outerHeight();
                };
            });

            theStep.css("height", tempH);
        });
    }
}

function initIDDRates() {

    if (typeof iddRatesArr != 'undefined') {

        var countryDD = $('#countryList');
        $.each(iddRatesArr, function(val, text) {
            countryDD.append(
                $('<option></option>').val(val).html(iddRatesArr[val].country)
            );
        });

        countryDD.on('change', function(e) {
            var val = $(this).find('option:selected').val();
            if (parseInt(val, 10) >= 0) {
                setValue(val);
            }
        });

        function setValue(n) {
            if (n < 0) {
                $('#countryName').html('Select a country');
                $('#countryCode').html('00');
                $('#callRateFixed').html('0.00');
                $('#callRateMobile').html('0.00');
                $('#smsRate').html('0.00');
            } else {
                $('#countryName').html(iddRatesArr[n].country);
                $('#countryCode').html(iddRatesArr[n].countryCode);
                $('#callRateFixed').html($.type(iddRatesArr[n].callRateFixed) === 'number' ? iddRatesArr[n].callRateFixed.toFixed(2) : iddRatesArr[n].callRateFixed);
                $('#callRateMobile').html($.type(iddRatesArr[n].callRateMobile) === 'number' ? iddRatesArr[n].callRateMobile.toFixed(2) : iddRatesArr[n].callRateMobile);
                $('#smsRate').html($.type(iddRatesArr[n].smsRate) === 'number' ? iddRatesArr[n].smsRate.toFixed(2) : iddRatesArr[n].smsRate);
            }
        }
        setValue(-1);
    }
}


/* tendouji - rewards function starts here */
var selectedFilter = [],
    rewardsXMLData, overlayer,
    categoryList = ['All Offers', 'Featured Offers', 'Travel &amp; Accommodation', 'Retail Product &amp; Service', 'Health &amp; Beauty',
        'Food &amp; Beverage', 'Fashion &amp; Accessories', 'Lifestyle &amp; Adventure', 'Entertainment &amp; Theme Park', 'Others'
    ],
    locationList = ['All', 'Johor', 'Kedah', 'Kelantan', 'Melaka', 'Negeri Sembilan', 'Penang', 'Pahang', 'Perak', 'Perlis',
        'Sabah', 'Sarawak', 'Selangor', 'Terengganu', 'Wilayah Persekutuan'
    ];

function initRewards() {
    if ($('.rewards-list-hdr').length > 0) {
        selectedFilter[0] = categoryList[0];
        selectedFilter[1] = locationList[0];
        loadRewardsContent(selectedFilter[0], selectedFilter[1]);

        overlayer = $('.rewards-list-hdr').find('.overlay');

        $('body').on('click', function(e) {
            var $target = $(e.target);

            if($('.rewards-box.active').has($target).length === 0) {
                clearActiveBoxes();
            }
        });

        $(window).resize(resizeRewardsContainer);

        $('body').on('click', '.rewards-box', function(n) {
            var box = $(this);
            if (!box.hasClass('active')) {
                overlayer.show();
                $('.rewards-box').removeClass('active');
                $('body').addClass('details-on');
                box.addClass('active');
                resizeRewardsContainer();
            }
        });

        $('#rewardsCategory').on('change', function() {
            selectedFilter[0] = $(this).find('option:selected').html();
            loadRewardsContent(selectedFilter[0], selectedFilter[1]);
        });

        $('#rewardsLocation').on('change', function() {
            selectedFilter[1] = $(this).find('option:selected').html();
            loadRewardsContent(selectedFilter[0], selectedFilter[1]);
        });
    }
}

function resizeRewardsContainer() {
    var rewardDetailsH, rewardDetailsOffset;
    if ($('.rewards-box.active').length > 0) {
        rewardDetailsH = $('.rewards-box.active .reward-details').outerHeight(true);
        rewardDetailsOffset = $('.rewards-box.active').offset().top - $('.rewards-list-hdr').offset().top; /*25 is container padding*/
    }
    $('.rewards-list-hdr').css('min-height', (rewardDetailsH + rewardDetailsOffset) + 'px');
}

function unsetResizeRewardsContainer() {
    $('.rewards-list-hdr').css('min-height', '0');
}


function clearActiveBoxes() {
    $('body').removeClass('details-on');

    var targetScrollPos = $('.rewards-box.active').offset().top - 50;
    if($('.header-sect').length) {
        targetScrollPos -= $('.header-sect').outerHeight();
    }

    $('.rewards-box').removeClass('active');
    overlayer.hide();
    unsetResizeRewardsContainer();

    $('html, body').animate({
        scrollTop: targetScrollPos
    }, 400);
}

function loadRewardsContent(category, location) {
    if (typeof rewardsXMLData == 'undefined') {
        $.ajax({
            type: "GET",
            url: "../xml/rewards",
            dataType: "xml",
            success: function(xmlData) {
                rewardsXMLData = xmlData;
                structureRewardsContent(rewardsXMLData, category, location);
            }
        });
    } else {
        structureRewardsContent(rewardsXMLData, category, location);
    }
}

function structureRewardsContent(rewardsXMLData, category, location) {
    var resultStr = '';
    var rewardList = $(rewardsXMLData).find('rewards items');

    rewardList.each(function(n) {
        var _active = $(this).attr('active');
        // Don't do anything if it's inactive.
        if(_active !== 'yes') return;

        var _categories = ($(this).attr('category')).replace('& ', '&amp; ').split(',').map(function(val) {
                return val.trim();
            });

        // Don't do anything if it's not in the right category.
        if(category !== 'All Offers' && _categories.indexOf(category) < 0) return;

        var _items;

        // Add items in based on whether they match the location.
        if(location === 'All') {
            if($(this).find('subItem').length) {
                _items = $(this).find('subItem');
            } else {
                _items = $(this);
            }
        } else {
            if($(this).find('subItem').length) {
                _items = [];

                $(this).find('subItem').each(function() {
                    var subItemLocations = $(this).attr('location').split(',').map(function(val) {
                            return val.trim();
                        });

                    if(subItemLocations.indexOf(location) > -1) {
                        _items.push(this);
                    }
                });

                if(_items.length) {
                    _items = $(_items);
                } else {
                    _items = undefined;
                }
            } else {
                var itemLocations = $(this).attr('location').split(',').map(function(val) {
                        return val.trim();
                    });

                if(itemLocations.indexOf(location) > -1) {
                    _items = $(this);
                }
            }
        }

        // Don't do anything if there are no items.
        if(!_items) return;

        var itemObj = {};
        itemObj.brandName = $(this).find('name').eq(0).text();
        itemObj.imageFolder = $(this).find('imageFolder').text();
        itemObj.imageLogo = itemObj.imageFolder;
        itemObj.description = $(this).find('description').eq(0).text();
        itemObj.dropdownPlaceholder = $(this).find('dropdownPlaceholder').eq(0).text();
        itemObj.subItems = [];

        _items.each(function() {
            itemObj.subItems.push(
                makeRewardsSubItemObj($(this), itemObj.imageFolder)
            );
        });

        resultStr += '<div class="rewards-box" title=' + itemObj.brandName + '>' +
            '<div class="image-logo" style="background-image:url(' + itemObj.imageLogo + ');"></div>' +
            '<div class="text">' + itemObj.description + '</div>' +
            '<div class="link"></div>' +
            '<div class="reward-details">' +
            '<a class="close-detail" href="javascript:clearActiveBoxes();">&times;</a>' +

            (function(subItemsArr) {
                var tempStr = '';

                if(subItemsArr.length > 1) {
                    var z;

                    tempStr +=  '<div class="reward-details-dropdown"><select class="customDropdown">';
                        tempStr += '<option value="" selected>' + itemObj.dropdownPlaceholder + '</option>';
                        for(z = 0; z < subItemsArr.length; z++) {
                            if (subItemsArr[z].active == 'yes'){
                                    tempStr += '<option>' + subItemsArr[z].dropdownLabel + '</option>';
                            }
                        }
                    tempStr +=  '</select></div>';

                    for(z = 0; z < subItemsArr.length; z++) {
                        if (subItemsArr[z].active == 'yes'){
                            tempStr += '<div class="reward-details-group">' + makeRewardsDetailsStr(subItemsArr[z]) + '</div>';
                        }
                    }
                } else {
                    tempStr = makeRewardsDetailsStr(subItemsArr[0]);
                }

                return tempStr;
            })(itemObj.subItems) +

            '<a class="print-button" href="javascript:printRewards()">Print this</a>' +
            '</div>' +
            '</div>';
    });

    if (resultStr == '') {
        resultStr = '<div class="text-center font-blue font-vagrnd-lite" style="font-size:1.4em; padding:3%;">' +
            'Uh-oh! There seems to be no rewards for the following selection.<br>Please try again.' +
            '</div>';
    }

    $('#rewardsResult').html(resultStr);

    initDropdownSelector();

    $('#rewardsResult').find('.reward-details-dropdown').each(function() {
        var $groups = $(this).siblings('.reward-details-group')

        $(this).find('select').on('change', function() {
            $groups.removeClass('is-active');

            if(this.selectedIndex > 0) {
                $groups.eq(this.selectedIndex-1).addClass('is-active');
            }
        });
    });
}

function makeRewardsSubItemObj($subItem, imageFolder) {
    var obj = {};

    obj.location = $subItem.attr('location').split(',').map(function(arrVal) {
        return arrVal.trim();
    });

    //if($subItem.find('detailsImage').length) {
    //    obj.imagePlaceholder = '/images/rewards/' + imageFolder + '/' + $subItem.find('detailsImage').text();
    //} else {
    //    obj.imagePlaceholder = '/images/rewards/' + imageFolder + '/details-image.jpg';
    //}

    obj.imagePlaceholder = $subItem.find('detailsImage').text();

    obj.dropdownLabel = $subItem.attr('dropdown-label');
    obj.active = $subItem.attr('active');

    obj.detailsMainText = $subItem.find('details mainText').text();
    obj.detailsSubText = $subItem.find('details subText').text();

    obj.detailListCalendar = ($subItem.find('detailList calendar').text()).replace(/&lt;/g, '<').replace(/&gt;/g, '>');
    obj.detailListPromoCode = ($subItem.find('detailList promoCode').text()).replace(/&lt;/g, '<').replace(/&gt;/g, '>');
    obj.detailListPresentApp = ($subItem.find('detailList presentApp').text()).replace(/&lt;/g, '<').replace(/&gt;/g, '>');
    obj.detailListCall = ($subItem.find('detailList call').text()).replace(/&lt;/g, '<').replace(/&gt;/g, '>');
    obj.detailListEmail = ($subItem.find('detailList email').text()).replace(/&lt;/g, '<').replace(/&gt;/g, '>');
    obj.detailListSMS = ($subItem.find('detailList sms').text()).replace(/&lt;/g, '<').replace(/&gt;/g, '>');
    obj.detailListWebsite = ($subItem.find('detailList website').text()).replace(/&lt;/g, '<').replace(/&gt;/g, '>');

    obj.url = $subItem.find('url').text();

    obj.outletList = [];
    $subItem.find('outlet outletList').each(function(n) {
        var tempObj = {};
        tempObj.name = $(this).find('name').text();
        tempObj.address = $(this).find('address').text();
        tempObj.tel = $(this).find('tel').text();
        tempObj.fax = $(this).find('fax').text();
        obj.outletList[n] = tempObj;
    });

    obj.shopNow = $subItem.find('shopNow').text();

    obj.terms = {};
    obj.terms.title = $subItem.find('terms title').text();
    obj.terms.details = ($subItem.find('terms termsDetails').text()).replace(/&lt;/g, '<').replace(/&gt;/g, '>');

    return obj;
}

function makeRewardsDetailsStr(itemObj) {
    return  '<div class="clearfix">' +
            '<div class="image" style="background-image:url(' + itemObj.imagePlaceholder + ');"></div>' +
            '<div class="right-panel">' +
            '<div class="detail-title">' +
            '<div class="main-text">' + itemObj.detailsMainText + '</div>' +
            (itemObj.detailsSubText != '' ? '<div class="sub-text">' + itemObj.detailsSubText + '</div>' : '') +
            '</div>' +
            '<div class="detail-list">' +
            (itemObj.detailListCalendar != '' ? '<div class="calendar-text">' + itemObj.detailListCalendar.replace(/&amp;/g, '&') + '</div>' : '') +
            (itemObj.detailListPromoCode != '' ? '<div class="promocode-text">' + itemObj.detailListPromoCode.replace(/&amp;/g, '&') + '</div>' : '') +
            (itemObj.detailListPresentApp != '' ? '<div class="present-app-text">' + itemObj.detailListPresentApp.replace(/&amp;/g, '&') + '</div>' : '') +
            (itemObj.detailListCall != '' ? '<div class="call-text">' + itemObj.detailListCall.replace(/&amp;/g, '&') + '</div>' : '') +
            (itemObj.detailListEmail != '' ? '<div class="email-text">' + itemObj.detailListEmail.replace(/&amp;/g, '&') + '</div>' : '') +
            (itemObj.detailListSMS != '' ? '<div class="sms-text">' + (itemObj.detailListSMS).replace(/&amp;/g, '&') + '</div>' : '') +
            (itemObj.detailListWebsite != '' ? '<div class="website-text">' + itemObj.detailListWebsite.replace(/&amp;/g, '&') + '</div>' : '') +
            '</div>' +
            '</div>' +
            '</div>' +
            makeRewardShopNowStr(itemObj.shopNow) +
            makeRewardsOutletsStr(itemObj.outletList) +
            '<div class="terms">' +
            '<div class="terms-title">' + itemObj.terms.title + '</div>' +
            '<div class="terms-content">' +
            itemObj.terms.details +
            '</div>' +
            '</div>';
}

function makeRewardsOutletsStr(outlets) {
    var outletsStr = '';

    if(outlets.length) {
        outletsStr += '<div class="outlet">';
        outletsStr += '<div class="outlet-title">Outlets</div>';
        for(var i = 0; i < outlets.length; i++) {
            outletsStr += '<div class="outlet-list font-roboto-lite">' +
                ((outlets[i].name)
                    ? '<span class="outlet-name font-roboto-mid">' + outlets[i].name + '</span> - '
                    : ''
                ) + '<span class="outlet-address">' + outlets[i].address + '</span>' +
                (outlets[i].tel != '' ? '<span class="outlet-tel font-blue">Tel: ' + outlets[i].tel + '</span>' : '') +
                (outlets[i].fax != '' ? '<span class="outlet-fax font-blue">Fax: ' + outlets[i].fax + '</span>' : '') +
                '</div>';
        }
        outletsStr += '</div>';
    }

    return outletsStr;
}

function makeRewardShopNowStr(shopNow) {
    var shopNowStr = '';

    if(shopNow && shopNow !== '-') {
        shopNowStr = '<a href="' + shopNow + '" target="_blank" class="shop-now">Shop Now</a>';
    }

    return shopNowStr;
}

function printRewards() {
    window.print();
}
