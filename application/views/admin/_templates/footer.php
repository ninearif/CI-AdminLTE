<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>

<footer class="main-footer">
        <div class="pull-right hidden-xs">
                <b>
                        <?php echo lang('footer_developer'); ?></b> IT Team
        </div>
        <strong>
                <?php echo lang('footer_copyright'); ?> &copy; 2018-
                <?php echo date('Y'); ?> <a href="http://bachohospital.com" target="_blank">โรงพยาบาลบาเจาะ</a>.</strong>
        <?php echo lang('footer_all_rights_reserved'); ?>.
</footer>
</div>

<script src="<?php echo base_url($frameworks_dir . '/jquery/jquery.min.js'); ?>"></script>
<script src="<?php echo base_url($frameworks_dir . '/bootstrap/js/bootstrap.min.js'); ?>"></script>
<script src="<?php echo base_url($plugins_dir . '/slimscroll/slimscroll.min.js'); ?>"></script>
<?php if ($mobile == TRUE): ?>
<script src="<?php echo base_url($plugins_dir . '/fastclick/fastclick.min.js'); ?>"></script>
<?php endif; ?>
<?php if ($admin_prefs['transition_page'] == TRUE): ?>
<script src="<?php echo base_url($plugins_dir . '/animsition/animsition.min.js'); ?>"></script>
<?php endif; ?>
<?php if ($this->router->fetch_class() == 'users' && ($this->router->fetch_method() == 'create' OR $this->router->fetch_method() == 'edit')): ?>
<script src="<?php echo base_url($plugins_dir . '/pwstrength/pwstrength.min.js'); ?>"></script>
<?php endif; ?>
<?php if ($this->router->fetch_class() == 'leave' && ($this->router->fetch_method() == 'create' OR $this->router->fetch_method() == 'edit')): ?>
<script src="<?php echo base_url($plugins_dir . '/pwstrength/pwstrength.min.js'); ?>"></script>
<!-- date-range-picker -->
<script type="text/javascript" src="<?php echo base_url($frameworks_dir . '/moment/min/moment.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url($frameworks_dir . '/bootstrap-daterangepicker/daterangepicker.js'); ?>"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url($frameworks_dir . '/bootstrap-daterangepicker/daterangepicker.css'); ?>" />
<script>
        // $(function () {
        //         $('input[id="leavedate"]').daterangepicker({
        //                 opens: 'left'
        //         }, function (start, end, label) {
        //                 console.log("A new date selection was made: " + start.format(
        //                         'YYYY-MM-DD') + ' to ' + end.format(
        //                         'YYYY-MM-DD'));
        //         });
        // });

        $('input[id="leavedate"]').daterangepicker({
    "locale": {
        "format": "DD/MM/YYYY",
        "separator": " - ",
        "applyLabel": "ตกลง",
        "cancelLabel": "ยกเลิก",
        "fromLabel": "จาก",
        "toLabel": "ถึง",
        "customRangeLabel": "Custom",
        "daysOfWeek": [
            "อา.",
            "จ.",
            "อ.",
            "พ.",
            "พฤ.",
            "ศ.",
            "ส."
        ],
        "monthNames": [
            "มกราคม",
            "กุมภาพันธ์",
            "มีนาคม",
            "เมษายน",
            "พฤษภาคม",
            "มิถุนายน",
            "กรกฎาคม",
            "สิงหาคม",
            "กันยายน",
            "ตุลาคม",
            "พฤศจิกายน",
            "ธันวาคม"
        ],
        "firstDay": 1
    },
    "startDate": moment().format('DD/MM/YYYY'),
    "endDate": moment().format('DD/MM/YYYY')
}, function(start, end, label) {
  console.log(moment().format('DD/MM/YYYY'));
  console.log("New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')");
});
</script>
<?php endif; ?>
<?php if ($this->router->fetch_class() == 'groups' && ($this->router->fetch_method() == 'create' OR $this->router->fetch_method() == 'edit')): ?>
<script src="<?php echo base_url($plugins_dir . '/tinycolor/tinycolor.min.js'); ?>"></script>
<script src="<?php echo base_url($plugins_dir . '/colorpickersliders/colorpickersliders.min.js'); ?>"></script>
<?php endif; ?>
<script src="<?php echo base_url($frameworks_dir . '/adminlte/js/adminlte.min.js'); ?>"></script>
<script src="<?php echo base_url($frameworks_dir . '/domprojects/js/dp.min.js'); ?>"></script>
</body>

</html>
