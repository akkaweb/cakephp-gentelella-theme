<div class="page-title">
    <div class="title_left">
        <h3>
            I18n Message
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
              <h2>I18n Message <small><?= __d('gentelella','Index') ?></small></h2>
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
              <th><?= $this->Paginator->sort('domain') ?></th>
              <th><?= $this->Paginator->sort('locale') ?></th>
              <th><?= $this->Paginator->sort('singular') ?></th>
              <th><?= $this->Paginator->sort('plural') ?></th>
              <th><?= $this->Paginator->sort('context') ?></th>
              <th><?= $this->Paginator->sort('value_0') ?></th>
              <th><?= __d('gentelella','Actions') ?></th>
            </tr>
            <?php foreach ($i18nMessages as $i18nMessage): ?>
              <tr>
                <td><?= $this->Number->format($i18nMessage->id) ?></td>
                <td><?= h($i18nMessage->domain) ?></td>
                <td><?= h($i18nMessage->locale) ?></td>
                <td><?= h($i18nMessage->singular) ?></td>
                <td><?= h($i18nMessage->plural) ?></td>
                <td><?= h($i18nMessage->context) ?></td>
                <td><?= h($i18nMessage->value_0) ?></td>
                <td class="actions" style="white-space:nowrap">
                  <?= $this->Html->link(__d('gentelella','Edit'), ['action' => 'edit', $i18nMessage->id], ['class'=>'btn btn-primary btn-xs']) ?>
                  <?= $this->Form->postLink(__d('gentelella','Delete'), ['action' => 'delete', $i18nMessage->id], ['confirm' => __d('gentelella','Confirm to delete this entry?'), 'class'=>'btn btn-danger btn-xs']) ?>
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
