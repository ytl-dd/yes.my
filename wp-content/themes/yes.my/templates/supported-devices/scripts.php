<script type="text/javascript">
    $(document).ready(function() {
        var $storeitem = $(".storegrid");
        var $fCats = $("[name=c-cat]");
        var $fLocs = $("[name=c-region]");
        var $btnMore = $("#btn-more");

        var sCats = [];
        var sLocs = [];

        var $activeList = $();

        var render = function() {
            $storeitem.removeClass("show");

            var n = 0;

            if (sCats.length == 0 && sLocs.length == 0) {
                $storeitem.addClass("show");
                n = $storeitem.length;
            }

            $storeitem.each(function() {
                var $this = $(this);
                var catHit = false;
                var locHit = false;

                var category = $this.attr("brand");
                var location = $this.attr("type");

                $.each(sCats, function(key, value) {
                    if (category.indexOf(value) > -1) {
                        catHit = true;
                        return false;
                    }
                });

                $.each(sLocs, function(key, value) {
                    if (location.indexOf(value) > -1) {
                        locHit = true;
                        return false;
                    }
                });

                var showItem = false;

                if ((sCats.length && sLocs.length)) {
                    if (locHit && catHit) showItem = true;
                } else {
                    showItem = locHit || catHit;
                }

                if (showItem) {
                    $this.addClass("show");
                    n++;
                }
            });

        }

        $fCats.change(function() {
            sCats = [];

            $fCats.filter(":checked").each(function() {
                sCats.push($(this).val());
            });

            render();
        });

        $fLocs.change(function() {
            sLocs = [];

            $fLocs.filter(":checked").each(function() {
                sLocs.push($(this).val());
            });

            render();
        });

        render();

        $("#btn-overlay-show").click(function() {
            $("#filter-overlay").css({
                'z-index': 1000
            }).addClass("show");
        });
        $("#btn-overlay-hide").click(function() {
            $("#filter-overlay").removeClass("show").delay(350).queue(function() {
                $(this).css({
                    'z-index': -1
                });
            });
        });
    });
</script>