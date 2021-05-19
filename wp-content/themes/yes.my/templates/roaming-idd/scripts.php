<script type="text/javascript">
    $(document).ready(function(){
        JUI.carousel('.carousel-roaming');
        JUI.carousel4x('.carousel-salespitch');
        JUI.carousel5x('.carousel-subscription-5x');

        var $roamingTemplate    = $("[data-template=roamingTemplate]");
        var $roamingTable       = $("#roaming-table");

        //modify in javascript way because revamp.yes.my is on and off

        $("[data-button=openRoaming]").off('click').click(function(){
            if($("[name=roamingSelect]").val()){
                var cid = $("[name=roamingSelect]").val();
                var sel = jsonRoaming[cid];

                $("[data-name=countryName]").html(sel[0]['country_name']);

                $roamingTable.empty();

                for(var i=0;i<sel.length;i++){
                    var cur = sel[i];
                    $newTpl = $roamingTemplate.clone();

                    if(i>0){
                        $roamingTable.append("<hr/>");
                    }

                    $("[data-name=telcoName]", $newTpl).html(cur["operatorName"]);

                    if(cur["is4g"] == "0"){
                        $("[data-name=telcoIs4g]", $newTpl).hide();
                    } else {
                        $("[data-name=telcoIs4g]", $newTpl).show();
                    }
                    $("[data-name=planDayRateAmt]", $newTpl).html(cur["roamingRate"].replace(".00", "").replace("RM", ""));
                    $("[data-name=planDayRateSubset]", $newTpl).html(cur["roamingType"]);
                    $("[data-name=planDayRateQuota]", $newTpl).html(cur["quota"]);

                    var disclaimer = cur["quotaDisclaimer"];

                    if(!disclaimer && cur["quota"]){
                        disclaimer = "Once the quota is finished, the data speed will be reduced until your day pass expires without additional cost.";
                    }
                    $("[data-name=planDayRateTnc]", $newTpl).html(disclaimer);


                    $("[data-name=planCallWithinCountryTxt]", $newTpl).html("Call Within " + sel[i]['country_name']);
                    $("[data-name=planCallWithinCountryRate]", $newTpl).html(cur["callRate"]);
                    $("[data-name=planCallToOtherCountriesRate]", $newTpl).html(cur["callToOther"]);
                    $("[data-name=planCallToMalaysiRate]", $newTpl).html(cur["callToMalaysia"]);
                    $("[data-name=planReceivingCallRate]", $newTpl).html(cur["receivingCallRate"]);
                    $("[data-name=planSmsRate]", $newTpl).html(cur["smsRate"]);

                    $roamingTable.append($newTpl.show());
                }

                $("[data-fieldset=roaming]").show();
                $(document).scrollTop($("[data-fieldset=roaming]").offset().top);
            }
        });

        $("[data-button=closeRoaming]").off('click').click(function(){
            $("[data-fieldset=roaming]").animate({
                height: '0px'
            }, 350, function(){
                $(this).css("height","").hide();
            });
            $(document).scrollTop($("#searchRoaming").offset().top);
        });
        $("[data-button=openIdd]").off('click').click(function(){
            if($("[name=iddSelect]").val()){
                var sel = jsonIdd[$("[name=iddSelect]").val()];

                $("[data-name=iddName]").html(sel["postpaid"]["country"] + " (" + sel["postpaid"]["countryCode"] + ")");
                $("[data-name=iddPostpaidFixed]").html(sel["postpaid"]["callRateFixed"]);
                $("[data-name=iddPostpaidMobile]").html(sel["postpaid"]["callRateMobile"]);
                $("[data-name=iddPostpaidSms]").html(sel["postpaid"]["smsRate"]);
                $("[data-name=iddPrepaidFixed]").html(sel["prepaid"]["callRateFixed"]);
                $("[data-name=iddPrepaidMobile]").html(sel["prepaid"]["callRateMobile"]);
                $("[data-name=iddPrepaidSms]").html(""+sel["prepaid"]["smsRate"]);


                $("[data-fieldset=idd]").show();
                $(document).scrollTop($("[data-fieldset=idd]").offset().top);
            }
        });
        $("[data-button=closeIdd]").off('click').click(function(){
            $("[data-fieldset=idd]").animate({
                height: '0px'
            }, 350, function(){
                $(this).css("height","").hide();
            });
            $(document).scrollTop($("#searchIdd").offset().top);
        });
    });
</script>