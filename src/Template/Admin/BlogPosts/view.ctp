<div class="page-title">
    <div class="title_left">
        <h3>
            Blog Post
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
                    <h2>Blog Post
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
                    <?= $this->Form->create($blogPost, array('role' => 'form')) ?>
                    <div class="box-body">
                        <?php
                                                            echo $this->Form->input('blog_category_id', ['placeholder' => $blogPost->blog_category_id, 'disabled' => true]);
                                    echo $this->Form->input('tag_count', ['placeholder' => $blogPost->tag_count, 'disabled' => true]);
                                    echo $this->Form->input('title', ['placeholder' => $blogPost->title, 'disabled' => true]);
                                    echo $this->Form->input('slug', ['placeholder' => $blogPost->slug, 'disabled' => true]);
                                    echo $this->Form->input('photo', ['placeholder' => $blogPost->photo, 'disabled' => true]);
                                    echo $this->Form->input('photo_dir', ['placeholder' => $blogPost->photo_dir, 'disabled' => true]);
                                    echo $this->Form->input('summary', ['placeholder' => $blogPost->summary, 'disabled' => true]);
                                    echo $this->Form->input('body', ['placeholder' => $blogPost->body, 'disabled' => true]);
                                    echo $this->Form->input('published', ['placeholder' => $blogPost->published, 'disabled' => true]);
                                    echo $this->Form->input('publish_at', ['placeholder' => $blogPost->publish_at, 'disabled' => true]);
                                    echo $this->Form->input('sticky', ['placeholder' => $blogPost->sticky, 'disabled' => true]);
                                    echo $this->Form->input('in_rss', ['placeholder' => $blogPost->in_rss, 'disabled' => true]);
                                    echo $this->Form->input('audio', ['placeholder' => $blogPost->audio, 'disabled' => true]);
                                    echo $this->Form->input('video', ['placeholder' => $blogPost->video, 'disabled' => true]);
                                    echo $this->Form->input('soundcloud', ['placeholder' => $blogPost->soundcloud, 'disabled' => true]);
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

