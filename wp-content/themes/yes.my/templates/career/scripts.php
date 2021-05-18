<script type="text/javascript">
    $(document).ready(function(){
        var cooldown = 100;
        var isOffCooldown = true;
        
        var filterResults = $("#careerResults");

        function render(){
            var division = $("#division").val();
            var location = $("#location").val();

            filterResults.find("[division]").hide();

            var filterString = '';

            if(division){
                filterString += "[division='"+division+"']";
            }

            if(location){
                filterString += "[location='"+location+"']";
            }

            filterResults.show();

            if(filterString){
                var results = filterResults.find(filterString);

                if(results.length){
                    results.show();
                }else{
                    filterResults.hide();
                }
            }else{
                filterResults.find("[division]").show();
            }
        }

        $("#ddLocation").on('OnChanged', function(){
            if(isOffCooldown){
                isOffCooldown = false;
                setTimeout(function(){
                    isOffCooldown = true;
                }, cooldown);
                render();
            }
        });
        $("#ddDivision").on('OnChanged', function(){
            if(isOffCooldown){
                isOffCooldown = false;
                setTimeout(function(){
                    isOffCooldown = true;
                }, cooldown);
                render();
            }
        });

        render();
    });
</script>