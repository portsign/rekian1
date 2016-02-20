<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Dashboard'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="dashboard index large-9 medium-8 columns content">
    <h3><?= __('Dashboard') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('Title') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($dashboard as $dashboard): ?>
            <tr>
                <td><?= $this->Number->format($dashboard->id) ?></td>
                <td><?= h($dashboard->Title) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $dashboard->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $dashboard->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $dashboard->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dashboard->id)]) ?>
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
