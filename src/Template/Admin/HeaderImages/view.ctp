<div class="page-title">
    <div class="title_left">
        <h3>
            Header Image
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
                    <h2>Header Image
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
                    <?= $this->Form->create($headerImage, array('role' => 'form')) ?>
                    <div class="box-body">
                        <?php
                                                            echo $this->Form->input('name', ['placeholder' => $headerImage->name, 'disabled' => true]);
                                    echo $this->Form->input('model', ['placeholder' => $headerImage->model, 'disabled' => true]);
                                    echo $this->Form->input('action', ['placeholder' => $headerImage->action, 'disabled' => true]);
                                    echo $this->Form->input('url', ['placeholder' => $headerImage->url, 'disabled' => true]);
                                    echo $this->Form->input('description', ['placeholder' => $headerImage->description, 'disabled' => true]);
                                    echo $this->Form->input('type', ['placeholder' => $headerImage->type, 'disabled' => true]);
                                    echo $this->Form->input('target', ['placeholder' => $headerImage->target, 'disabled' => true]);
                                    echo $this->Form->input('photo', ['placeholder' => $headerImage->photo, 'disabled' => true]);
                                    echo $this->Form->input('photo_dir', ['placeholder' => $headerImage->photo_dir, 'disabled' => true]);
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

