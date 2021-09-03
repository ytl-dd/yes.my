(function() {
    $(function() {
        initBackToTop();
    });
    
    function initBackToTop() {
        $(".footer-sect .but-top").click(function() {
            $('html, body').animate({
                scrollTop: 0
            }, 400);
        });
    };
})(jQuery);