<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>

            <div class="content-wrapper">
                <section class="content-header">
                    <?php echo $pagetitle; ?>
                    <?php echo $breadcrumb; ?>
                </section>

                <section class="content">
                    <?php echo $dashboard_alert_file_install; ?>
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="info-box">
                                <span class="info-box-icon bg-maroon"><i class="fa fa-legal"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Licence</span>
                                    <span class="info-box-number">Free</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="info-box">
                                <span class="info-box-icon bg-green"><i class="fa fa-check"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">AdminLTE version</span>
                                    <span class="info-box-number">2.3.1</span>
                                </div>
                            </div>
                        </div>

                        <div class="clearfix visible-sm-block"></div>

                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="info-box">
                                <span class="info-box-icon bg-aqua"><i class="fa fa-user"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Users</span>
                                    <span class="info-box-number"><?php echo $count_users; ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="info-box">
                                <span class="info-box-icon bg-aqua"><i class="fa fa-shield"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Security groups</span>
                                    <span class="info-box-number"><?php echo $count_groups; ?></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
<?php
/*
if ($url_exist) {
    echo 'OK';
} else {
    echo 'KO';
}
*/
?>
                        </div>

                        <div class="col-md-12">
                            <div class="box">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Title</h3>
                                    <div class="box-tools pull-right">
                                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                                <div class="box-header with-border">
                                                    <p class="text-center text-uppercase"><strong>รายการใบลาล่าสุด</strong></p>
                                                </div>
                                                <!-- /.box-header -->
                                                <div class="box-body">
                                                    <ul class="products-list product-list-in-box">
                                                        <li class="item">
                                                            <div class="product-img">
                                                                <img src="<?php echo base_url()?>upload/images/default-50x50.gif" alt="Product Image">
                                                            </div>
                                                            <div class="product-info">
                                                                <a href="javascript:void(0)" class="product-title">ลาป่วย วันที่ 12/11/2018 - 14/11/2018
                                                                    <span class="label label-warning pull-right">รอการพิจารณา</span></a>
                                                                <span class="product-description">
                          Samsung 32" 1080p 60Hz LED Smart HDTV.
                        </span>
                                                            </div>
                                                        </li>
                                                        <!-- /.item -->
                                                        <li class="item">
                                                            <div class="product-img">
                                                                <img src="<?php echo base_url()?>upload/images/default-50x50.gif" alt="Product Image">
                                                            </div>
                                                            <div class="product-info">
                                                                <a href="javascript:void(0)" class="product-title">ลาป่วย วันที่ 10/11/2018 - 11/11/2018
                                                                    <span class="label label-warning pull-right">รอการพิจารณา</span></a>
                                                                <span class="product-description">
                          26" Mongoose Dolomite Men's 7-speed, Navy Blue.
                        </span>
                                                            </div>
                                                        </li>
                                                        <!-- /.item -->
                                                        <li class="item">
                                                            <div class="product-img">
                                                                <img src="<?php echo base_url()?>upload/images/default-50x50.gif" alt="Product Image">
                                                            </div>
                                                            <div class="product-info">
                                                                <a href="javascript:void(0)" class="product-title">ลาพักผ่อน วันที่ 20/10/2018 - 24/10/2018
                                                                    <span class="label label-danger pull-right">ไม่อนุมัติ</span></a>
                                                                <span class="product-description">
                          Xbox One Console Bundle with Halo Master Chief Collection.
                        </span>
                                                            </div>
                                                        </li>
                                                        <!-- /.item -->
                                                        <li class="item">
                                                            <div class="product-img">
                                                                <img src="<?php echo base_url()?>upload/images/default-50x50.gif" alt="Product Image">
                                                            </div>
                                                            <div class="product-info">
                                                                <a href="javascript:void(0)" class="product-title">ลากิจส่วนตัว วันที่ 03/08/2018 - 03/08/2018
                                                                    <span class="label label-success pull-right">อนุมัติ</span></a>
                                                                <span class="product-description">
                          PlayStation 4 500GB Console (PS4)
                        </span>
                                                            </div>
                                                        </li>
                                                        <!-- /.item -->
                                                    </ul>
                                                </div>
                                                <!-- /.box-body -->
                                                <div class="box-footer text-center">
                                                    <a href="javascript:void(0)" class="uppercase">ดูรายการลาทั้งหมด</a>
                                                </div>
                                                <!-- /.box-footer -->
                                        </div>
                                        <div class="col-md-6">
                                            <p class="text-center text-uppercase"><strong>สถิติการลา</strong></p>
                                            <div class="progress-group">
                                                <span class="progress-text">ลาพักผ่อน</span>
                                                <span class="progress-number"><strong><?php echo byte_format($disk_usespace, 2); ?></strong>/<?php echo byte_format($disk_totalspace, 2); ?></span>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-aqua" role="progressbar" aria-valuenow="<?php echo $disk_usepercent; ?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $disk_usepercent; ?>%"></div>
                                                </div>
                                            </div>
                                            <div class="progress-group">
                                                <span class="progress-text">ลาป่วย</span>
                                                <span class="progress-number"><strong><?php echo byte_format($memory_usage, 2); ?></strong>/<?php echo byte_format($memory_peak_usage, 2); ?></span>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-red" role="progressbar" aria-valuenow="<?php echo $memory_usepercent; ?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $memory_usepercent; ?>%"></div>
                                                </div>
                                            </div>
                                            <div class="progress-group">
                                                <span class="progress-text">ลากิจส่วนตัว</span>
                                                <span class="progress-number"><strong><?php echo byte_format($disk_usespace, 2); ?></strong>/<?php echo byte_format($disk_totalspace, 2); ?></span>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-aqua" role="progressbar" aria-valuenow="<?php echo $disk_usepercent; ?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $disk_usepercent; ?>%"></div>
                                                </div>
                                            </div>
                                            <div class="progress-group">
                                                <span class="progress-text">ลาคลอด</span>
                                                <span class="progress-number"><strong><?php echo byte_format($disk_usespace, 2); ?></strong>/<?php echo byte_format($disk_totalspace, 2); ?></span>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-aqua" role="progressbar" aria-valuenow="<?php echo $disk_usepercent; ?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $disk_usepercent; ?>%"></div>
                                                </div>
                                            </div>
                                            <div class="progress-group">
                                                <span class="progress-text">อื่นๆ</span>
                                                <span class="progress-number"><strong><?php echo byte_format($disk_usespace, 2); ?></strong>/<?php echo byte_format($disk_totalspace, 2); ?></span>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-aqua" role="progressbar" aria-valuenow="<?php echo $disk_usepercent; ?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $disk_usepercent; ?>%"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
