(function($){
    var svg = {
        $checked: $('<svg class="ia ia-checkmark"><use xlink:href="/ia-defs.svg#ia-checkmark"></use></svg>')
    };

    JUI = {
        $activeDropMenu: null,
        dropmenu: function(target){
            $(target).each(function(){
                var $_ = $(this);
                var $content = $(".selection", $_);
    
                var $button = $(">a", $_);
    
                $button.popover({
                    container: 'body',
                    trigger: 'click',
                    offset: 0,
                    content: $content,
                    html: true,
                    placement: 'bottom',
                    template: '<div class="popover popover-menu" role="tooltip"><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>'
                }).on('show.bs.popover', function(){
                    if(JUI.$activeDropMenu != null){
                        JUI.$activeDropMenu.popover("hide");
                        JUI.$activeDropMenu = null;
                    }

                    $_.addClass("show");
                    JUI.$activeDropMenu = $button;
                }).on('hide.bs.popover', function(){
                    $_.removeClass("show");
                });
            });
        },
        select: function(target, onChange){
            $(target).each(function(){
                var $_ = $(this);
                var $content = $(".selection", $_).width($_.width());
    
                var $button = $(">a", $_);
    
                $button.popover({
                    container: 'body',
                    trigger: 'focus',
                    content: $content,
                    html: true,
                    placement: 'bottom',
                    template: '<div class="popover popover-select" role="tooltip"><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>'
                }).on('show.bs.popover', function(){
                    $_.addClass("show");
                }).on('hide.bs.popover', function(){
                    $_.removeClass("show");
                });
    
                $(">a", $content).click(function(){
                    select_item($_, $content, $(this));
                    $button.popover("hide");
                });
                
                select_item($_, $content, $(".selected:first", $content));
            });

            function select_item($select, $content, $item){
                $select.attr("data-selected", $item.attr("data-value"));
                $(">a>span", $select).html($item.html()).find(".ia-checkmark").remove();
    
                $(">a", $content).removeClass("selected").find("svg").remove();
                $item.append(svg.$checked.clone()).addClass("selected");

                if(typeof(onChange) === "function") onChange($item, $item.attr("data-value"));
            }
        },
        carousel: function(target){
            $(target).slick({
                dots: true,
                autoplay: false,
                infinite: true,
                arrows: true
            }).each(function(e){
                $(this).addClass('first').append(
                    $('<div class="slick-control"/>').
                    append($('.slick-prev', this).prepend('<svg class="ia ia-left"><use xlink:href="/ia-defs.svg#ia-left"></use></svg>')).
                    append($(".slick-dots", this))
                    .append($('.slick-next', this).append('<svg class="ia ia-right"><use xlink:href="/ia-defs.svg#ia-right"></use></svg>'))
                );
            }).on('afterChange', function(e, slick, index){
                if(slick.currentSlide == 0){
                    slick.$slider.addClass("first");
                }else{
                    slick.$slider.removeClass("first");
                }
    
                if(slick.currentSlide+1 == slick.slideCount){
                    slick.$slider.addClass("last");
                }else{
                    slick.$slider.removeClass("last");
                }
            });
        },
        carousel3x: function(target){
            $(target).slick({
                dots: true,
                autoplay: false,
                infinite: true,
                arrows: false,
                slidesToShow: 3,
                slidesToScroll: 3,
                responsive: [{
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        dots: true
                    }
                }]
            });
        },
        carousel4x: function(target){
            $(target).slick({
                dots: true,
                autoplay: false,
                infinite: true,
                arrows: false,
                slidesToShow: 4,
                slidesToScroll: 4,
                responsive: [{
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        dots: true
                    }
                }]
            });
        },
        carousel5x: function(target){
            $(target).slick({
                dots: true,
                autoplay: false,
                infinite: true,
                arrows: false,
                slidesToShow: 5,
                slidesToScroll: 5,
                responsive: [{
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        dots: true
                    }
                }]
            });
        },
        yestimeline: function(target){
            var $ulYears = $(".timeline-list ul", target);
            var $ctrlLeft = $(".timeline-control .control-left", target);
            var $ctrlRight = $(".timeline-control .control-right", target);
            var $timelineContent = $(".timeline-content .content", target);
            var $years = $("li[year]", $ulYears);
    
            var baseTranslateX = 90;
    
            var maxYearIndex = $years.length;
            var curYearIndex = 0;
    
            var $activeYear = $years.filter(".active:first");
    
            if($activeYear.length){
                curYearIndex = $activeYear.index();
            }else{
                $activeYear = $years.eq(curYearIndex);
            }
    
            var $activeContent = $(".content", $activeYear);
            var maxContentIndex = $activeContent.length;
            var curContentIndex = 0;
    
            function scrollToYear(index){
                if(index >= 0 && index < maxYearIndex){
                    $years.eq(curYearIndex).removeClass("active");
                    
                    $activeContent = $years.eq(index).addClass("active").find(".content");
                    maxContentIndex = $activeContent.length;
                    curContentIndex = 0;
    
                    curYearIndex = index;
    
                    scrollToContent(0);
                    animateTimeline();
                }
            }
    
            function scrollToContent(index){
                if(index >= 0 && index < maxContentIndex){
                    $timelineContent.html($activeContent.eq(index).html()).toggleClass("animate");
                    curContentIndex = index;
                }
            }
    
            function animateTimeline(){
                $ulYears.css({"transform": "translate(-"+((curYearIndex)*baseTranslateX)+"px, 0)"});
            }
    
            function scrollNext(){
                if(curContentIndex != maxContentIndex-1){
                    console.log("test");
                    scrollToContent(curContentIndex+1);
                }else if(curYearIndex != maxYearIndex-1){
                    console.log("test");
                    scrollToYear(curYearIndex+1);
                }
                
                toggleCtrlBtn();
            }
    
            function scrollPrev(){
                if(curContentIndex > 0){
                    scrollToContent(curContentIndex-1);
                }else if(curYearIndex > 0){
                    scrollToYear(curYearIndex-1);
                }
                
                toggleCtrlBtn();
            }
    
            function toggleCtrlBtn(){
                if(curYearIndex == maxYearIndex-1 && curContentIndex == maxContentIndex-1){
                    $ctrlLeft.css({opacity: 1});
                    $ctrlRight.css({opacity: 0});
                }else if(curYearIndex == 0 && curContentIndex == 0){
                    $ctrlLeft.css({opacity: 0});
                    $ctrlRight.css({opacity: 1});
                }else{
                    $ctrlLeft.css({opacity: 1});
                    $ctrlRight.css({opacity: 1});
                }
            }
    
            $years.click(function(){
                scrollToYear($(this).index());
            })
    
            $(".timeline-control .control-left").click(function(){
                scrollPrev();
            });
            $(".timeline-control .control-right").click(function(){
                scrollNext();
            });
    
            $(window).resize(function(){
                var width = $(window).width();
                if(width >= 1140){
                    baseTranslateX = 220;
                }else if(width >= 768){
                    baseTranslateX = 140;
                }else if(width >= 375){
                    baseTranslateX = 115;
                }else{
                    baseTranslateX = 90;
                }
    
                animateTimeline();
            }).resize();
        },
        youtubeResize: function(target){
            var $target = $(target);
    
            var baseWidth = 560;
            var baseHeight = 315;
    
            $(window).resize(function(){
                var width = $(window).width();
                if(width >= 1470){
                    $target.width(1440).height(800);
                }else if(width >= 1200){
                    $target.width(1170).height(650);
                }else if(width >= 992){
                    $target.width(950).height(527);
                }else if(width >= 600){
                    $target.width(560).height(315);
                }else if(width >= 375){
                    $target.width(345).height(210);
                }else{
                    $target.width(290).height(176);
                }
            }).resize();
        },
        fanoutmenu: function(target){
            var $fans = $(".fan", target);

            $fans.each(function(){

            }).click(function(){
                $fans.removeClass("active");
                $(this).addClass("active");
            });
        }
    };

    $(document).ready(function(){
        var $body = $("body");
        var $scroller = $(document);

        var SCROLLING_OFFSET_TOP = 10;
        var scrolling = false;

        $scroller.scroll(function(){
            if(scrolling && $(this).scrollTop() < SCROLLING_OFFSET_TOP){
                $body.removeClass("scrolling");
                scrolling = false;
            }else if(!scrolling && $(this).scrollTop() >= SCROLLING_OFFSET_TOP){
                $body.addClass("scrolling");
                    scrolling = true;
            }
        }).scroll();

        $('body').on('click', function (e) {
            if(!$(e.target).parents(".dropmenu").length && !$(e.target).parents(".popover").length){
                if(JUI.$activeDropMenu != null){
                    JUI.$activeDropMenu.popover("hide");
                    JUI.$activeDropMenu = null;
                }
            }
        });

        function dropdownFocus(e){
            var $menu = $(".dropdown-menu.show:first");
            if($menu.length){
                $menuitem = $menu.find(".dropdown-item");

                var loweredKey = e.key.toLowerCase();

                if(loweredKey){
                    var toScroll = 0;
                    $menuitem.each(function(){
                        if($(this).text().toLowerCase().indexOf(loweredKey) == 0){
                            $menu.scrollTop(toScroll);
                            $(this).focus();
                            return false;
                        }
                        toScroll += $(this).outerHeight();
                    });
                }
            }
        }

        $(document).keyup(dropdownFocus);

        var $btnLanguages = $(".btn-language").css("display", "");
        var curLanguage = "";
        var curTxt = "";

        if(document.location.pathname.indexOf("/ms") == 0){
            curLanguage = "ms";
            curTxt = "BM";
        }else if(document.location.pathname.indexOf("/zh-hans") == 0){
            curLanguage = "zh-hans";
            curTxt = "&#20013;&#25991;";
        }else{
            curLanguage = "/";
            curTxt = "EN";
        }

        $("> a[role=button]", $btnLanguages).html(curTxt);

        $("[language]", $btnLanguages).click(function(){
            if($(this).attr("language") == "ms"){
                document.location.pathname = "/ms" + document.location.pathname.replace("/" + curLanguage, "");
            }else if($(this).attr("language") == "zh-hans"){
                document.location.pathname = "/zh-hans" + document.location.pathname.replace("/" + curLanguage, "");
            }else{
                document.location.pathname = "/" + document.location.pathname.replace("/" + curLanguage, "");
            }
        });
    });
})(jQuery);

function validateInputBlank(target){
    var $el = $(target);

    if($el.length && $el.val()){
        $el.parents(".form-group").find(".error-msg [type=empty]").hide();
        return true;
    }else{
        $el.parents(".form-group").find(".error-msg [type=empty]").show();
        return false;
    }
}
function validateInputEmail(target){
    var $el = $(target);
    var email_regex = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

    if ($el.length && email_regex.test($el.val())) {
        $el.parents(".form-group").find(".error-msg [type=empty]").hide();
        return true;
    } else {
        $el.parents(".form-group").find(".error-msg [type=empty]").show();
        return false;
    }
}