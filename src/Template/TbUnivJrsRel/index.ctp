<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tb Univ Jrs Rel'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tbUnivJrsRel index large-9 medium-8 columns content">
    <h3><?= __('Tb Univ Jrs Rel') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('_id') ?></th>
                <th><?= $this->Paginator->sort('univ_id') ?></th>
                <th><?= $this->Paginator->sort('univ_jrs_id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tbUnivJrsRel as $tbUnivJrsRel): ?>
            <tr>
                <td><?= $this->Number->format($tbUnivJrsRel->_id) ?></td>
                <td><?= $this->Number->format($tbUnivJrsRel->univ_id) ?></td>
                <td><?= $this->Number->format($tbUnivJrsRel->univ_jrs_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $tbUnivJrsRel->_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tbUnivJrsRel->_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tbUnivJrsRel->_id], ['confirm' => __('Are you sure you want to delete # {0}?', $tbUnivJrsRel->_id)]) ?>
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
