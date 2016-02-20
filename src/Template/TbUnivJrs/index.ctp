<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tb Univ Jr'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tbUnivJrs index large-9 medium-8 columns content">
    <h3><?= __('Tb Univ Jrs') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('_id') ?></th>
                <th><?= $this->Paginator->sort('jurusan_univ') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tbUnivJrs as $tbUnivJr): ?>
            <tr>
                <td><?= $this->Number->format($tbUnivJr->_id) ?></td>
                <td><?= h($tbUnivJr->jurusan_univ) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $tbUnivJr->_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tbUnivJr->_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tbUnivJr->_id], ['confirm' => __('Are you sure you want to delete # {0}?', $tbUnivJr->_id)]) ?>
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
