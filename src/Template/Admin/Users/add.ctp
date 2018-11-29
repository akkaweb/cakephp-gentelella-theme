<div class="page-title">
    <div class="title_left">
        <h3>
            User
            <small><?= __d('gentelella','Add') ?></small>
        </h3>
    </div>

    <div class="title_right">
        <div class="col-md-12 col-sm-12 col-xs-12 form-group pull-right top_search">
            <?= $this->Html->link('<i class="fa fa-dashboard"></i>'.__d('gentelella',' Back'), ['action' => 'index'], ['class'=>'btn btn-success pull-right','escape'=>false]) ?>
        </div>
    </div>
</div>
<div class="clearfix"></div>
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>User
                    <small><?= __d('gentelella','Add') ?></small>
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
                <br/>
                <?= $this->Form->create($member, array('role' => 'form', 'class' => 'form-horizontal form-label-left', 'id' => 'form')) ?>
<?php unset($member->password); ?>
                  <?php
                  $formTemplates = [
                    'inputContainer' => '{{content}}',
                    'selectContainer' => '{{content}}'
                  ];
                  $this->Form->setTemplates($formTemplates);
                  ?>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">
                                Username <span class="symbol required"></span>
                            </label>
                          <?php echo $this->Form->input('username', ['placeholder' => 'Username', 'class' => 'form-control', 'label' => false]); ?>
                        </div>
                    </div>
                <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">
                                Role <span class="symbol required"></span>
                            </label>
                          <?php $role = $member['role']; ?>
                          <?php echo $this->Form->select('role', ['empty' => 'Select role', 'admin' => 'Administrator', 'user' => 'Member'], ['val' => $role, 'class' => 'form-control show-tick', 'label' => false]); ?>
                        </div>
                    </div>


                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">
                                First Name <span class="symbol required"></span>
                            </label>
                          <?php echo $this->Form->input('first_name', ['placeholder' => 'First Name', 'class' => 'form-control', 'label' => false]); ?>
                        </div>
                    </div>


                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">
                                Last Name <span class="symbol required"></span>
                            </label>
                          <?php echo $this->Form->input('last_name', ['placeholder' => 'Last Name', 'class' => 'form-control', 'label' => false]); ?>
                        </div>
                    </div>


                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">
                                Email <span class="symbol required"></span>
                            </label>
                          <?php echo $this->Form->input('email', ['placeholder' => 'Email Address', 'class' => 'form-control', 'label' => false]); ?>
                        </div>
                    </div>


                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">
                                Password <span class="symbol required"></span>
                            </label>
                          <?php echo $this->Form->input('password', ['placeholder' => 'Enter Password', 'class' => 'form-control', 'label' => false]); ?>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <label class="control-label">Active? <span class="symbol required"></span></label>
                        <div class="switch">
                            <label>No
                              <?php echo $this->Form->input('active', ['templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'type' => 'checkbox', 'required' => false, 'class' => 'js-switch', 'data-color' => '#26c6da']); ?>
                                Yes
                            </label>
                        </div>
                    </div>

                    <div class="col-md-12 text-right">
                      <?php echo $this->Form->button('Update User <i class="fa fa-arrow-circle-right"></i>', ['class' => 'btn btn-success', 'type' => 'submit', 'id' => 'submit-button']); ?>
                    </div>
                <div class="ln_solid"></div>

                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>