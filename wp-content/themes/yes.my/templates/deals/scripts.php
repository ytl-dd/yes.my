<script type="text/javascript">
    $(document).ready(function(){
        var $dealsOverlay = $("#RewardsDealsOverlay").modal({
            focus: false,
            show: false
        });

        var $storeitem = $(".storeitem");
        var $divcon = $(".filter-storeitem > div");
        var $fCats = $("[name=c-cat]");
        var $fLocs = $("[name=c-region]");

        $storeitem.click(function(){
            $(".modal-body", $dealsOverlay).html($(".extra",this).html());
            $dealsOverlay.modal('show');
        });

        var $btnMore = $("#btn-more");

        var sCats = [];
        var sLocs = [];

        var $activeList = $();

        var render = function(){
            $storeitem.removeClass("show");
            $divcon.css({"display": "none"});

            var n=0;
            
            if(sCats.length == 0 && sLocs.length == 0){
                $storeitem.addClass("show");
                $divcon.css({"display": "block"});
                n=$storeitem.length;
            }

            $storeitem.each(function(){
                var $this = $(this);

                if(!$this.hasClass("show")){
                    var category = $this.attr("category");
                    
                    $.each(sCats, function(key, value){
                        if(category.indexOf(value) > -1){
                            $this.addClass("show");
                            $this.parent().css({"display": "block"});
                            n++;
                        }
                    });
                }

                if(!$this.hasClass("show")){
                    var location = $this.attr("location");

                    $.each(sLocs, function(key, value){
                        if(location.indexOf(value) > -1){
                            $this.addClass("show");
                            $this.parent().css({"display": "block"});
                            n++;
                        }
                    });
                }
            });
            
        }

        $fCats.change(function(){
            sCats = [];

            $fCats.filter(":checked").each(function(){
                sCats.push($(this).val());
            });

            render();
        });

        $fLocs.change(function(){
            sLocs = [];

            $fLocs.filter(":checked").each(function(){
                sLocs.push($(this).val());
            });

            render();
        });

        render();


        $("#btn-overlay-show").click(function(){
            $("#filter-overlay").css({'z-index': 1000}).addClass("show");
        });
        $("#btn-overlay-hide").click(function(){
            $("#filter-overlay").removeClass("show").delay(350).queue(function(){
                $(this).css({'z-index': -1});
            });
        });
    });
</script>