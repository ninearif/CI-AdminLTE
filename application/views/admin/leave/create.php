<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="content-wrapper">
    <section class="content-header">
        <?php echo $pagetitle; ?>
        <?php echo $breadcrumb; ?>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">
                            <?php echo lang('leave_create_user'); ?>
                        </h3>
                    </div>
                    <div class="box-body">
                        <?php echo $message;?>

                        <?php echo form_open(current_url(), array('class' => 'form-horizontal', 'id' => 'form-create_user')); ?>
                        <div class="form-group">
                            <?php echo lang('leave_firstname', 'first_name', array('class' => 'col-sm-2 control-label')); ?>
                            <div class="col-sm-10">
                                <?php  $user = $users[$this->ion_auth->get_user_id()-1];?>
                                <?php echo form_input($first_name,$value=$user->first_name.' '.$user->last_name,'disabled');?>
                            </div>
                        </div>
                        <div class="form-group">
                            <?php echo lang('leave_date_range', 'leavedate', array('class' => 'col-sm-2 control-label')); ?>
                            <div class="col-sm-10">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" class="form-control pull-right" id="leavedate">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <?php echo lang('leave_period', 'radio', array('class' => 'col-sm-2 control-label')); ?>
                            <div class="col-sm-4">
                                <div class="row">
                                    <div class="col radio">
                                        <label>
                                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1"
                                                checked="">
                                            เต็มวัน
                                        </label>
                                    </div>
                                    <div class="col radio">
                                        <label>
                                            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                            ครึ่งเช้า
                                        </label>
                                    </div>
                                    <div class="col radio">
                                        <label>
                                            <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3"
                                                disabled="">
                                            ครึ่งบ่าย
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <?php echo lang('leave_lastname', 'last_name', array('class' => 'col-sm-2 control-label')); ?>
                            <div class="col-sm-10">
                                <?php echo form_input($last_name);?>
                            </div>
                        </div>
                        <div class="form-group">
                            <?php echo lang('leave_company', 'company', array('class' => 'col-sm-2 control-label')); ?>
                            <div class="col-sm-10">
                                <?php echo form_input($company);?>
                            </div>
                        </div>
                        <div class="form-group">
                            <?php echo lang('leave_email', 'email', array('class' => 'col-sm-2 control-label')); ?>
                            <div class="col-sm-10">
                                <?php echo form_input($email);?>
                            </div>
                        </div>
                        <div class="form-group">
                            <?php echo lang('leave_phone', 'phone', array('class' => 'col-sm-2 control-label')); ?>
                            <div class="col-sm-10">
                                <?php echo form_input($phone);?>
                            </div>
                        </div>
                        <div class="form-group">
                            <?php echo lang('leave_password', 'password', array('class' => 'col-sm-2 control-label')); ?>
                            <div class="col-sm-10">
                                <?php echo form_input($password);?>
                                <div class="progress" style="margin:0">
                                    <div class="pwstrength_viewport_progress"></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <?php echo lang('leave_password_confirm', 'password_confirm', array('class' => 'col-sm-2 control-label')); ?>
                            <div class="col-sm-10">
                                <?php echo form_input($password_confirm);?>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <div class="btn-group">
                                    <?php echo form_button(array('type' => 'submit', 'class' => 'btn btn-primary btn-flat', 'content' => lang('actions_submit'))); ?>
                                    <?php echo form_button(array('type' => 'reset', 'class' => 'btn btn-warning btn-flat', 'content' => lang('actions_reset'))); ?>
                                    <?php echo anchor('admin/leave', lang('actions_cancel'), array('class' => 'btn btn-default btn-flat')); ?>
                                </div>
                            </div>
                        </div>
                        <?php echo form_close();?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
