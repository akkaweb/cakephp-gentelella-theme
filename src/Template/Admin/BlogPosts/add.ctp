<div class="page-title">
    <div class="title_left">
        <h3>
            Blog Post
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
                <h2>Blog Post
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
                <?= $this->Form->create($blogPost, array('role' => 'form', 'class' => 'form-horizontal form-label-left', 'id' => 'form')) ?>

                <?php
                                            echo $this->Form->input('blog_category_id');
                                                        echo $this->Form->input('tag_count');
                                                        echo $this->Form->input('title');
                                                        echo $this->Form->input('slug');
                                                        echo $this->Form->input('photo');
                                                        echo $this->Form->input('photo_dir');
                                                        echo $this->Form->input('summary');
                                                        echo $this->Form->input('body');
                                                        echo $this->Form->input('published');
                                                        echo $this->Form->input('publish_at');
                                                        echo $this->Form->input('sticky');
                                                        echo $this->Form->input('in_rss');
                                                        echo $this->Form->input('audio');
                                                        echo $this->Form->input('video');
                                                        echo $this->Form->input('soundcloud');
                                            ?>
                <div class="ln_solid"></div>
                <div class="form-group">
                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <?= $this->Form->button(__d('gentelella','Save'), ['class' => 'btn btn-success']) ?>
                    </div>
                </div>

                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>