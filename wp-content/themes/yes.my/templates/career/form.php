<style type="text/css">
    #btn-apply {
        position: absolute;
        bottom: 15px;
        right:15px;
    }
    .file-upload .file-upload-btn input {
        height: 0px;
        padding: 0;
        opacity: 0;
    }
</style>

<?php $yesmy_opt = $GLOBALS['yesmy_opt']; ?>

<?php echo do_shortcode('[contact-form-7 id="3144" title="Career Form"]'); ?>


<script type="text/javascript">
    $(document).ready(function() {
        $("#uploadFile").change(function() {
            var filename = $(this).val().split(/(\\|\/)/g).pop();
            $("#fileName").val(filename);
        });

        var $rowQ = $(".row-q");
        var $rowE = $(".row-e");

        $rowQ.filter(":not(:first)").hide();
        $rowE.filter(":not(:first)").hide();

        var qIndex = 0;
        var eIndex = 0;

        $("#btn-add-q").click(function() {
            if (qIndex < 2) {
                qIndex++;

                $rowQ.eq(qIndex).show();
            }

            if (qIndex == 2) {
                $("#row-add-q").hide();
            }
        });

        $("#btn-add-e").click(function() {
            if (eIndex < 2) {
                eIndex++;

                $rowE.eq(eIndex).show();
            }

            if (eIndex == 2) {
                $("#row-add-e").hide();
            }
        });

        $("#dateOfBirth").datepicker({
            format: 'dd / mm / yyyy',
            autoclose: true
        });
    });
</script>