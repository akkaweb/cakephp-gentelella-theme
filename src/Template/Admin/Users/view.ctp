<div class="page-title">
    <div class="title_left">
        <h3>
            User
            <small><?= __d('gentelella','View') ?></small>
        </h3>
    </div>

    <div class="title_right">
        <div class="col-md-12 col-sm-12 col-xs-12 form-group pull-right top_search">
            <?= $this->Html->link('<i class="fa fa-dashboard"></i>'.__d('gentelella',' Back'), ['action' => 'index'], ['class' => 'btn btn-success pull-right','escape'=>false]) ?>
        </div>
    </div>
    </div>

<!-- Main content -->
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="x_panel">
                <div class="x_title">
                    <h2>User
                        <small><?= __d('gentelella','View') ?></small>
                    </h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Settings 1</a>
                                </li>
                                <li><a href="#">Settings 2</a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <!-- /.box-header -->
                    <!-- form start -->
                    <?= $this->Form->create($user, array('role' => 'form')) ?>
                    <div class="box-body">
                        <?php
                                                            echo $this->Form->input('is_superuser', ['placeholder' => $user->is_superuser, 'disabled' => true]);
                                    echo $this->Form->input('facebook_id', ['placeholder' => $user->facebook_id, 'disabled' => true]);
                                    echo $this->Form->input('api_token', ['placeholder' => $user->api_token, 'disabled' => true]);
                                    echo $this->Form->input('username', ['placeholder' => $user->username, 'disabled' => true]);
                                    echo $this->Form->input('password', ['placeholder' => $user->password, 'disabled' => true]);
                                    echo $this->Form->input('email', ['placeholder' => $user->email, 'disabled' => true]);
                                    echo $this->Form->input('first_name', ['placeholder' => $user->first_name, 'disabled' => true]);
                                    echo $this->Form->input('last_name', ['placeholder' => $user->last_name, 'disabled' => true]);
                                    echo $this->Form->input('photo', ['placeholder' => $user->photo, 'disabled' => true]);
                                    echo $this->Form->input('photo_dir', ['placeholder' => $user->photo_dir, 'disabled' => true]);
                                    echo $this->Form->input('active', ['placeholder' => $user->active, 'disabled' => true]);
                                    echo $this->Form->input('token', ['placeholder' => $user->token, 'disabled' => true]);
                                    echo $this->Form->input('token_expires', ['placeholder' => $user->token_expires, 'disabled' => true]);
                                    echo $this->Form->input('role', ['placeholder' => $user->role, 'disabled' => true]);
                                    echo $this->Form->input('activation_date', ['placeholder' => $user->activation_date, 'disabled' => true]);
                                    echo $this->Form->input('tos_date', ['placeholder' => $user->tos_date, 'disabled' => true]);
                                    echo $this->Form->input('created_by', ['placeholder' => $user->created_by, 'disabled' => true]);
                                    echo $this->Form->input('modified_by', ['placeholder' => $user->modified_by, 'disabled' => true]);
                                    echo $this->Form->input('deleted', ['placeholder' => $user->deleted, 'disabled' => true]);
                        ?>
                    </div>
                <!-- /.box-body -->
                    <div class="box-footer">
                        <?= $this->Form->button(__d('gentelella','Save')) ?>
                    </div>
                    <?= $this->Form->end() ?>
                </div>
            </div>
        </div>
    </div>

