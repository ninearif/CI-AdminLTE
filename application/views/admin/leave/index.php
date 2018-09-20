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
                                    <h3 class="box-title"><?php echo anchor('admin/leave/create', '<i class="fa fa-plus"></i> '. lang('leave_create_user'), array('class' => 'btn btn-block btn-primary btn-flat')); ?></h3>
                                </div>
                                <div class="box-body">
                                    <table class="table table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th><?php echo lang('leave_firstname');?></th>
                                                <th><?php echo lang('leave_lastname');?></th>
                                                <th><?php echo lang('leave_email');?></th>
                                                <th><?php echo lang('leave_groups');?></th>
                                                <th><?php echo lang('leave_status');?></th>
                                                <th><?php echo lang('leave_action');?></th>
                                            </tr>
                                        </thead>
                                        <tbody>
<?php foreach ($users as $user):?>
                                            <tr>
                                                <td><?php echo htmlspecialchars($user->first_name, ENT_QUOTES, 'UTF-8'); ?></td>
                                                <td><?php echo htmlspecialchars($user->last_name, ENT_QUOTES, 'UTF-8'); ?></td>
                                                <td><?php echo htmlspecialchars($user->email, ENT_QUOTES, 'UTF-8'); ?></td>
                                                <td>
<?php

foreach ($user->groups as $group)
{

    // Disabled temporary !!!
    // echo anchor('admin/groups/edit/'.$group->id, '<span class="label" style="background:'.$group->bgcolor.';">'.htmlspecialchars($group->name, ENT_QUOTES, 'UTF-8').'</span>');
    echo anchor('admin/groups/edit/'.$group->id, '<span class="label" style="background:'.$group->bgcolor.'">'.htmlspecialchars($group->name, ENT_QUOTES, 'UTF-8').'</span>');
}

?>
                                                </td>
                                                <td><?php echo ($user->active) ? anchor('admin/leave/deactivate/'.$user->id, '<span class="label label-success">'.lang('users_active').'</span>') : anchor('admin/leave/activate/'. $user->id, '<span class="label label-default">'.lang('users_inactive').'</span>'); ?></td>
                                                <td>
                                                    <div class="btn-group">
                                                        <a href="<?php echo base_url().'admin/leave/edit/'.$user->id?>" class="btn btn-default"><?php echo lang('actions_edit')?></a>
                                                        <a href="<?php echo base_url().'admin/leave/profile/'.$user->id ?>" class="btn btn-default"><?php echo lang('actions_see')?></a>
                                                    </div>
                                                </td>
                                            </tr>
<?php endforeach;?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                         </div>
                    </div>
                </section>
            </div>
