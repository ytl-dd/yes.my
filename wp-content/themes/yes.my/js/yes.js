/* 
    JavaScript Name : Yes.my
    Created on      : March     30, 2021, 06:44:07 PM
    Last edited on  : January   28, 2022, 02:43:23 AM
    Author          : AL Latif Mohamad [YTL]
    Description     : Inline JavaScripts & Extended scripts
*/

var $ = jQuery.noConflict();
/* From Main Site */
$(document).ready(function() {
    var $body = $("body");
    var $scroller = $(document);

    var SCROLLING_OFFSET_TOP = 10;
    var scrolling = false;

    $scroller.scroll(function() {
        if (scrolling && $(this).scrollTop() < SCROLLING_OFFSET_TOP) {
            $body.removeClass("scrolling");
            scrolling = false;
        } else if (!scrolling && $(this).scrollTop() >= SCROLLING_OFFSET_TOP) {
            $body.addClass("scrolling");
            scrolling = true;
        }
    }).scroll();

    var $btn_sidemenu = $(".btn-sidemenu");

    function toggleSideMenuPull(e) {
        $("body").toggleClass("show-nav");

        e.preventDefault();
        return false;
    }

    function activate_sidemenu_dropdown() {
        $btn_sidemenu.popover("enable");
        $btn_sidemenu.off("click");
    }

    function activate_sidemenu_pull() {
        $btn_sidemenu.popover("disable");
        $btn_sidemenu.off("click");
        $btn_sidemenu.on("click", toggleSideMenuPull);
    }

    $(window).resize(function() {
        if ($(this).width() > 1024) {
            activate_sidemenu_dropdown();
        } else {
            activate_sidemenu_pull();
        }
    }).resize();

    $(".nav-mobile .btn-close").click(function() {
        $("body").removeClass("show-nav");
    });


    /** From Footer */
    var $overlay;

    JUI.select('span.select', null);
    JUI.dropmenu('.dropmenu');

    $(".dropdown-item").click(function() {
        var $parent = $(this).parents(".dropdown");
        var $input = $("input[type=hidden]", $parent);
        var $toggle = $(".dropdown-toggle", $parent)

        if ($input.length) {
            $input.val($(this).attr("data-value"));
            $toggle.html($(this).html());
        }

        $parent.trigger('OnChanged');
    });

    $("#toggleSearch").off("click");
    $("#toggleSearch").click(function() {
        $("body").toggleClass("searching");
    });

    $(".btn-scroll-top").prop("href", "#main-body");

    var $pageNav = $(".nav-page");

    if ($pageNav.length) {
        var pageNavPos = $pageNav.position();
        var triggerPoint = $pageNav.position().top - $(".nav-main").height();
        var isAnchored = false;

        $(document).scroll(function() {
            if ($(this).scrollTop() >= triggerPoint && !isAnchored) {
                $pageNav.addClass("anchored");
                isAnchored = true;
            } else if ($(this).scrollTop() < triggerPoint && isAnchored) {
                $pageNav.removeClass("anchored");
                isAnchored = false;
            }
        }).scroll();
    }

    function HtmlOverlay(target) {
        var $obj = $(target);
        var $html = $(".modal-body", $obj);

        $obj.modal({
            focus: false,
            show: false
        });

        this.showHtml = function(html) {
            $html.html(html);
            $obj.modal('show');
        }
        this.hide = function() {
            $html.html('');
            $obj.modal('hide');
        }

        return this;
    }

    $overlay = HtmlOverlay("#HtmlOverlay");

    $(".data-filters .filter-toggle").click(function() {
        $(this).parent().toggleClass("expanded");
    });

    function scrollToBody() {
        var navMainHeight = $(".nav-main").height();

        if (navMainHeight > 100) navMainHeight = 100;

        if ($("#main-content").length) {
            $(document).scrollTop($("#main-content").offset().top - navMainHeight);
        }
    }

    $(".btn-scroll-down").click(function(e) {
        e.preventDefault();
        scrollToBody();
    });

    var url = window.location.href;
    var vars = {};
    var hashes = url.split("?")[1];

    if (hashes) {
        var hash = hashes.split('&');

        for (var i = 0; i < hash.length; i++) {
            params = hash[i].split("=");
            vars[params[0]] = params[1];
        }

        if ("skip" in vars) {
            scrollToBody();
        }
    }
    /** END From Footer */

    $(".plans_content").hide();
    $(".plans_").click(function() {
        $(".plans_content").toggle();
    });
});
/* END From Main Site */

/* Extended */
$(document).ready(function() {
    $('ul.mobile-menus li.menu-item-has-children > a').on('click', function() {
        $(this).closest('li').find('ul.sub-menu').toggleClass('show');
    })

    var highlightWords = ['Kasi Up', 'YES'];
    $('ul.sub-menu a').html(function(_, html) {
        var reg = new RegExp('(' + highlightWords.join('|') + ')', 'gi');
        return html.replace(reg, '<span class="kasicolor">$1</span>', html)
    })

    $('.form-std .dropdown-item').on('click', function () {
        var selectedVal = $(this).attr('data-value');
        var targetParent= $(this).closest('.dropdown');
        var ddToggle    = $('.dropdown-toggle', targetParent);
        var targetField = $('.dropdown-menu', targetParent).attr('data-fieldtarget');
        $(ddToggle).html(selectedVal);
        $('.form-std input#' + targetField).val(selectedVal);
    });
    
    var urlLocation = window.location.href;
    if (urlLocation.indexOf('faq') > -1 && $('.dropdown').length > 0) {
        var appendHTML = '';
        if (urlLocation.indexOf('howtoactivatesim') < 0) {
            var linkHowToActivateSim    = '/faq/howtoactivatesim/';
            var linkHowToActivateSimText= '<svg class="ia ia-yes"><use xlink:href="/ia-defs.svg#ia-yes"></use></svg> <b>How To Activate SIM</b>';
            if (urlLocation.indexOf('ms') > -1) {
                linkHowToActivateSim    = '/ms' + linkHowToActivateSim;
                linkHowToActivateSimText= '<svg class="ia ia-yes"><use xlink:href="/ia-defs.svg#ia-yes"></use></svg> <b>Cara Untuk Mengaktifkan SIM Baru YES</b>';
            } else if (urlLocation.indexOf('zh-hans') > -1) {
                // linkHowToActivateSim    = '/zh-hans' + linkHowToActivateSim;
            }
            appendHTML  += '<a class="dropdown-item" href="' + linkHowToActivateSim + '">' + linkHowToActivateSimText + '</a>';
        }
        if (urlLocation.indexOf('firstto5g') < 0) {
            var linkFirstTo5G    = '/faq/firstto5g/';
            var linkFirstTo5GText= '<svg class="ia ia-yes"><use xlink:href="/ia-defs.svg#ia-yes"></use></svg> <b>First to 5G</b>';
            if (urlLocation.indexOf('ms') > -1) {
                linkFirstTo5G    = '/ms' + linkFirstTo5G;
                linkFirstTo5GText= '<svg class="ia ia-yes"><use xlink:href="/ia-defs.svg#ia-yes"></use></svg> <b>Juara 5G</b>';
            } else if (urlLocation.indexOf('zh-hans') > -1) {
                // linkHowToActivateSim    = '/zh-hans' + linkFirstTo5G;
            }
            appendHTML  += '<a class="dropdown-item" href="' + linkFirstTo5G + '">' + linkFirstTo5GText + '</a>';
        }
        $('div.dropdown-menu').prepend(appendHTML);


        if (urlLocation.indexOf('ms') < 0) {
            if ($('.dropdown-menu a[href="/faq/about-yes-4g"').length > 1) {
                $('.dropdown-menu a[href="/faq/about-yes-4g"')[1].remove();
            }
            $('.dropdown-menu a[href="/faq/about-yes-4g"').find('b').html('About Yes');
        } else {
            if ($('.dropdown-menu a[href="/ms/faq/about-yes-4g"').length > 1) {
                $('.dropdown-menu a[href="/ms/faq/about-yes-4g"')[1].remove();
            }
            $('.dropdown-menu a[href="/ms/faq/about-yes-4g"').find('b').html('Tentang Yes');
            
            if ($('.dropdown-menu a[href="/ms/faq/about-yes-4g/"').length > 1) {
                $('.dropdown-menu a[href="/ms/faq/about-yes-4g/"')[1].remove();
            }
            $('.dropdown-menu a[href="/ms/faq/about-yes-4g/"').find('b').html('Tentang Yes');
        }
    }
});
/* END Extended */