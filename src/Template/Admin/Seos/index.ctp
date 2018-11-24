<div class="page-title">
    <div class="title_left">
        <h3>
            Seo
            <small><?= __d('gentelella','Index') ?></small>
        </h3>
    </div>

    <div class="title_right">
        <div class="col-md-12 col-sm-12 col-xs-12 form-group pull-right top_search">
            <?= $this->Html->link('<i class="fa fa-plus"></i>'.__d('gentelella','New'), ['action' => 'add'], ['class'=>'btn btn-success pull-right','escape'=>false]) ?>
        </div>
    </div>
</div>

<!-- Main content -->
  <div class="row">
    <div class="col-xs-12">
      <div class="x_panel">
          <div class="x_title">
              <h2>Seo <small><?= __d('gentelella','Index') ?></small></h2>
              <ul class="nav navbar-right panel_toolbox">
                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                  </li>
                  <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
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
        <!-- /.box-header -->
        <div class="x_content">
            <form action="<?php echo $this->Url->build(); ?>" method="POST">
                <div class="input-group input-group-sm">
                    <input type="text" name="search" class="form-control" placeholder="<?= __d('gentelella','Fill in to start search') ?>">
                    <span class="input-group-btn">
                <button class="btn btn-info btn-flat" type="submit"><?= __d('gentelella','Filter') ?></button>
                </span>
                </div>
            </form>
          <table class="table table-hover table-striped">
            <tr>
              <th><?= $this->Paginator->sort('id') ?></th>
              <th><?= $this->Paginator->sort('uri') ?></th>
              <th><?= $this->Paginator->sort('model') ?></th>
              <th><?= $this->Paginator->sort('foreign_key') ?></th>
              <th><?= $this->Paginator->sort('status') ?></th>
              <th><?= $this->Paginator->sort('canonical') ?></th>
              <th><?= $this->Paginator->sort('created') ?></th>
              <th><?= __d('gentelella','Actions') ?></th>
            </tr>
            <?php foreach ($seos as $seo): ?>
              <tr>
                <td><?= $this->Number->format($seo->id) ?></td>
                <td><?= h($seo->uri) ?></td>
                <td><?= h($seo->model) ?></td>
                <td><?= $this->Number->format($seo->foreign_key) ?></td>
                <td><?= $this->Number->format($seo->status) ?></td>
                <td><?= h($seo->canonical) ?></td>
                <td><?= h($seo->created) ?></td>
                <td class="actions" style="white-space:nowrap">
                  <?= $this->Html->link(__d('gentelella','Edit'), ['action' => 'edit', $seo->id], ['class'=>'btn btn-primary btn-xs']) ?>
                  <?= $this->Form->postLink(__d('gentelella','Delete'), ['action' => 'delete', $seo->id], ['confirm' => __d('gentelella','Confirm to delete this entry?'), 'class'=>'btn btn-danger btn-xs']) ?>
                </td>
              </tr>
            <?php endforeach; ?>
          </table>
        </div>
        <!-- /.box-body -->
        <div class="box-footer clearfix">
          <ul class="pagination pagination-sm no-margin pull-right">
            <?php echo $this->Paginator->numbers(); ?>
          </ul>
        </div>
      </div>
      <!-- /.box -->
    </div>
  </div>
<!-- /.content -->
