/* 
    JavaScript Name : Yes.my
    Created on      : March     30, 2021, 06:44:07 PM
    Last edited on  : April     02, 2021, 02:43:23 AM
    Author          : AL Latif Mohamad [YTL]
    Description     : Inline JavaScripts & Extended scripts
*/


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
});
/* END From Main Site */

/* Extended */
/* END Extended */