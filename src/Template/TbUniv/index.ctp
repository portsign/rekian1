<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tb Univ'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tbUniv index large-9 medium-8 columns content">
    <h3><?= __('Tb Univ') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('_id') ?></th>
                <th><?= $this->Paginator->sort('universitas') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tbUniv as $tbUniv): ?>
            <tr>
                <td><?= $this->Number->format($tbUniv->_id) ?></td>
                <td><?= h($tbUniv->universitas) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $tbUniv->_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tbUniv->_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tbUniv->_id], ['confirm' => __('Are you sure you want to delete # {0}?', $tbUniv->_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
